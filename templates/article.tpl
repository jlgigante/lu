{extends file="article-structure.tpl"}
{block name="content"}
    <section>
        <article class="bd article">

            <h2>{$article.title}</h2>

            {if $article.id == '3' && $rubrique == 'articles'}
                <div class="row">

                    <h3>Témoignages</h3>

                    <div class="col-md-6">
                        <img src="{$smarty.const.BASE_URL}/images/art_{$rubrique}_{$article.visuel.1}"
                             alt="{$article.title|strip_tags}" class="visuel">

                        <p>{$article.temoignages.1|nl2br}</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{$smarty.const.BASE_URL}/images/art_{$rubrique}_{$article.visuel.2}"
                             alt="{$article.title|strip_tags}" class="visuel">

                        <p>{$article.temoignages.2|nl2br}</p>
                    </div>

                </div>
                <div class="row">


                    <div class="col-md-12">
                        <img src="{$smarty.const.BASE_URL}/images/art_{$rubrique}_{$article.visuel.3}"
                             alt="{$article.title|strip_tags}" class="visuel">

                        <p>{$article.temoignages.0|nl2br}</p>
                    </div>
                </div>
            {else}

                {if !empty($article.video) && isset($article.video) && $rubrique == 'videos'}
                    <iframe width="618" height="464" src="//www.youtube.com/embed/{$article.video}?rel=0&amp;autoplay=0"
                            frameborder="0" allowfullscreen></iframe>
                {/if}

                {if isset($article.chapeau) && $article.chapeau != ''}
                    <p class="chapeau">
                        {$article.chapeau|nl2br}
                    </p>
                {/if}

                {if !empty($article.visuel.0) && isset($article.visuel.0) && $rubrique != 'videos'}
                    <div class="visuel{if $rubrique == 'conseils-et-astuces'} col-xs-4{/if}">
                        <img src="{$smarty.const.BASE_URL}/images/art_{$rubrique}_{$article.visuel.0}"
                             alt="{$article.title|strip_tags}" class="visuel">

                        {if $article.id === 1}
                            <div class="legende" style="text-align: right;">
                                <span style="font-size: 0.750em; font-style: italic;">Champ de blé LU’Harmony dans l’Oise</span>
                            </div>
                        {/if}

                    </div>
                {/if}

                {if isset($article.article) && $article.article != ''}
                    <div class="{if $rubrique == 'conseils-et-astuces'} col-xs-8{/if}">
                        <p class="article ">
                            {$article.article|nl2br}
                        </p>
                    </div>
                {/if}

                {if !empty($article.visuel.0) && isset($article.visuel.1)}
                    <div class="visuel">
                        <img src="{$smarty.const.BASE_URL}/img/art_{$rubrique}_670x250_{$article.visuel.1}"
                             alt="{$article.title|strip_tags}">
                    </div>
                {/if}

            {/if}

        </article>
    </section>
{/block}

{block name="aside-videos"}
    {include file="_aside_articles.tpl" rubrique="videos" article=$aside_videos}
{/block}

{block name="aside-articles"}
    {include file="_aside_articles.tpl" rubrique="articles" article=$aside_articles}
{/block}
