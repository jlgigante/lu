<section id="aside"
         class="bd {if $rubrique == 'videos'}aside-videos{elseif  $rubrique == 'articles' }aside-articles{/if}">
    <ul>
        {foreach from=$article.content key=myId item=i name=aside}
            <li>
                    <div class="row">


                        {if $rubrique == 'videos'}
                            <div class="col-md-7">
                                <a href="{$smarty.const.BASE_URL|escape}/{$rubrique}/{$i.id}/{$i.slug}">
                                    <span class="vignette">
                                    <img aria-hidden="true" alt="" src="//i.ytimg.com/vi_webp/{$i.video}/default.webp"
                                         class="img-responsive">
                                        </span>
                                </a>
                            </div>
                            <div class="col-md-5">
                                <a href="{$smarty.const.BASE_URL|escape}/{$rubrique}/{$i.id}/{$i.slug}">
                                    <h4>{$i.title}</h4>
                                </a>
                                {if $rubrique == 'articles'}
                                    <p>{$i.article|truncate:'60'|nl2br}</p>
                                {/if}
                            </div>
                        {elseif  $rubrique == 'articles' }
                            <div class="col-md-12">
                                <a href="{$smarty.const.BASE_URL|escape}/{$rubrique}/{$i.id}/{$i.slug}">
                                    <img src="{$smarty.const.BASE_URL}/images/art_{$rubrique}_{$i.visuel.0}"
                                         alt="{$i.title|strip_tags}" class="img-responsive"/>
                                </a>
                            </div>
                            <div class="col-md-12">
                                <a href="{$smarty.const.BASE_URL|escape}/{$rubrique}/{$i.id}/{$i.slug}">
                                    <h4>{$i.title}</h4>
                                </a>
                                {if $rubrique == 'articles'}
                                    <p>{$i.chapeau|nl2br}</p>
                                {/if}
                                <div class="voir-article">
                                    <a href="{$smarty.const.BASE_URL|escape}/{$rubrique}/{$i.id}/{$i.slug}">
                                        Voir l'article
                                    </a>
                                </div>

                            </div>
                        {/if}

                    </div>
            </li>
        {/foreach}
    </ul>
</section>