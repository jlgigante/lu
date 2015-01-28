<section id="aside" class="bd">
aside article
    {*<header>*}
    {*<h3>{$aside.title}</h3>*}
    {*</header>*}
    <ul>
        {foreach from=$aside_articles.content key=myId item=i name=aside}
            <li>

                {$i.slug}
                <a href="{$smarty.const.BASE_URL|escape}/articles/{$i.id}/{$i.slug}">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{$smarty.const.BASE_URL}/images/art_articles_{$i.visuel.0}"
                                 alt="{$i.title|strip_tags}" class="img-responsive"/>
                        </div>
                        <div class="col-md-6">
                            <h4>{$i.title}</h4>

                            <p>{$i.article|truncate:'60'}</p>
                        </div>
                    </div>
                </a>
            </li>
        {/foreach}
    </ul>
</section>