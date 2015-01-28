<section id="aside" class="bd">
    <ul>
        {foreach from=$article.content key=myId item=i name=aside}
            <li>
                <a href="{$smarty.const.BASE_URL|escape}/{$rubrique}/{$i.id}/{$i.slug}">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{$smarty.const.BASE_URL}/images/art_{$rubrique}_{$i.visuel.0}"
                                 alt="{$i.title|strip_tags}" class="img-responsive"/>
                        </div>
                        <div class="col-md-6">
                            <h4>{$i.title}</h4>
                            {if $rubrique == 'articles'}
                                <p>{$i.article|truncate:'60'}</p>
                            {/if}
                        </div>
                    </div>
                </a>
            </li>
        {/foreach}
    </ul>
</section>