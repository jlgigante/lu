{extends file="structure.tpl"}
{block name="content"}
    <article class="bd transparent">
        <a href="{$smarty.const.BASE_URL|escape}/{$article.slug}/{$article.content.2.id}/{$article.content.2.slug}">
            <h4>{$article.content.2.title}</h4>
            <img src="{$smarty.const.BASE_URL}/images/art_articles_{$article.content.2.visuel.0}" alt="{$article.content.2.title|strip_tags}" class="img-responsive"/>
            <p>{$article.content.2.article|truncate:'60'}</p>
        </a>
    </article>
{/block}


{block name="article-2"}
    <article class="bd transparent">
        <a href="{$smarty.const.BASE_URL|escape}/{$article.slug}/{$article.content.1.id}/{$article.content.1.slug}">
            <h4>{$article.content.1.title}</h4>
            <img src="{$smarty.const.BASE_URL}/images/art_articles_{$article.content.1.visuel.0}" alt="{$article.content.1.title|strip_tags}" class="img-responsive"/>
            <p>{$article.content.1.article|truncate:'60'}</p>
        </a>
    </article>
{/block}


{block name="article-3"}
    <article class="bd transparent">
        <a href="{$smarty.const.BASE_URL|escape}/{$article.slug}/{$article.content.0.id}/{$article.content.0.slug}">
            <h4>{$article.content.0.title}</h4>
            <img src="{$smarty.const.BASE_URL}/images/art_articles_{$article.content.0.visuel.0}" alt="{$article.content.0.title|strip_tags}" class="img-responsive"/>
            <p>{$article.content.0.article|truncate:'60'}</p>
        </a>
    </article>
{/block}

{block name="aside-videos"}
    {include file="_aside.tpl"}
{/block}
