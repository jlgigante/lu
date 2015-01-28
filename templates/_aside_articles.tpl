<section id="aside" class="bd">
    <ul>
        {foreach from=$article.content key=myId item=i name=aside}
            <li>
                <a href="{$smarty.const.BASE_URL|escape}/{$rubrique}/{$i.id}/{$i.slug}">
                    <div class="row">


                        {if $rubrique == 'videos'}
                            <div class="col-md-6">
                                <img aria-hidden="true" alt="" src="//i.ytimg.com/vi_webp/{$i.video}/default.webp"
                                     class="img-responsive">
                            </div>
                            <div class="col-md-6">
                                <h4>{$i.title}</h4>
                                {if $rubrique == 'articles'}
                                    <p>{$i.article|truncate:'60'}</p>
                                {/if}
                            </div>
                        {elseif  $rubrique == 'articles' }
                        <div class="col-md-12">

                            <img src="{$smarty.const.BASE_URL}/images/art_{$rubrique}_{$i.visuel.0}"
                                 alt="{$i.title|strip_tags}" class="img-responsive"/>
                            </div>
                        <div class="col-md-12">
                            <h4>{$i.title}</h4>
                            {if $rubrique == 'articles'}
                                <p>{$i.article|truncate:'60'}</p>
                            {/if}
                            </div>
                        {/if}

                    </div>


                </a>
            </li>
        {/foreach}
    </ul>
</section>