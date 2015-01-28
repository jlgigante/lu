<section id="aside" class="bd">
    <ul>
        {foreach from=$article.content key=myId item=i name=aside}
            <li>
                <a href="{$smarty.const.BASE_URL|escape}/videos/{$i.id}/{$i.slug}">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{$smarty.const.BASE_URL}/images/art_videos_{$i.visuel.0}"
                                 alt="{$i.title|strip_tags}" class="img-responsive"/>
                        </div>
                        <div class="col-md-6">
                            <h4>{$i.title}</h4>
                        </div>
                    </div>
                </a>
            </li>
        {/foreach}
    </ul>
</section>
