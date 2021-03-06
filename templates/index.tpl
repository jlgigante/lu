{extends file="structure.tpl"}
{block name="content"}
    <article class="bd transparent">
        <a href="{$smarty.const.BASE_URL|escape}/{$article.slug}/{$article.content.2.id}/{$article.content.2.slug}">
            <h2>{$article.content.2.title}</h2>
            </a>
        <a href="{$smarty.const.BASE_URL|escape}/{$article.slug}/{$article.content.2.id}/{$article.content.2.slug}">
            <img src="{$smarty.const.BASE_URL}/images/art_articles_{$article.content.2.visuel.0}"
                 alt="{$article.content.2.title|strip_tags}" class="img-responsive"/>
        </a>
            {if $article.content.2.title}
                <div class="legende" style="text-align: right;">
                    <span style="font-size: 0.750em; font-style: italic;">Champ de blé LU’Harmony dans l’Oise</span>
                </div>
            {/if}


        <p>
            <a href="{$smarty.const.BASE_URL|escape}/{$article.slug}/{$article.content.2.id}/{$article.content.2.slug}">
                {$article.content.2.chapeau}
            </a>
        </p>

        <div class="voir-article">
            <a href="{$smarty.const.BASE_URL|escape}/{$article.slug}/{$article.content.2.id}/{$article.content.2.slug}">
                Voir l'article
            </a>
        </div>
    </article>
{/block}


{block name="article-2"}
    <article class="bd ">
        <a href="{$smarty.const.BASE_URL|escape}/{$article.slug}/{$article.content.1.id}/{$article.content.1.slug}">
            <h2>{$article.content.1.title}</h2>
            <img src="{$smarty.const.BASE_URL}/images/art_articles_{$article.content.1.visuel.0}"
                 alt="{$article.content.1.title|strip_tags}" class="img-responsive"/>
        </a>

        <p>
            <a href="{$smarty.const.BASE_URL|escape}/{$article.slug}/{$article.content.1.id}/{$article.content.1.slug}">
                {$article.content.1.chapeau}
            </a>
        </p>


        <div class="voir-article">
            <a href="{$smarty.const.BASE_URL|escape}/{$article.slug}/{$article.content.1.id}/{$article.content.1.slug}">
                Voir l'article
            </a>
        </div>

    </article>
{/block}


{block name="article-3"}
    <article class="bd ">
        <a href="{$smarty.const.BASE_URL|escape}/{$article.slug}/{$article.content.0.id}/{$article.content.0.slug}">
            <h2>{$article.content.0.title}</h2>
            <img src="{$smarty.const.BASE_URL}/images/art_articles_{$article.content.0.visuel.0}"
                 alt="{$article.content.0.title|strip_tags}" class="img-responsive"/>
        </a>

        <p>
            <a href="{$smarty.const.BASE_URL|escape}/{$article.slug}/{$article.content.0.id}/{$article.content.0.slug}">
                {$article.content.0.chapeau}
            </a>
        </p>


        <div class="voir-article">
            <a href="{$smarty.const.BASE_URL|escape}/{$article.slug}/{$article.content.0.id}/{$article.content.0.slug}">Voir
                l'article</a>
        </div>

    </article>
{/block}

{block name="aside-videos"}
    {include file="_aside_articles.tpl" rubrique="videos" article=$aside_videos}
{/block}
