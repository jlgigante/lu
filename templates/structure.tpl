{include file="_header.tpl"}

<div class="container main"> <!-- debut container main -->

    <div class="row header">
        <div class="col-md-12">

            <div class="header">
                <h3>PUBLI-COMMUNIQUÉ</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="{$smarty.const.BASE_URL|escape}/accueil">        <h1>Charte LU'Harmony</h1></a>
            </div>
    </div>

    <div class="row bloc-videos">
        <div class="col-md-8">
            {block name="content"}
                Content
            {/block}
        </div>

        <div class="col-md-4 blog-sidebar">
            {block name="aside-videos"}
                Content
            {/block}
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 bloc-artcile">
            {block name="article-2"}
                Content
            {/block}
        </div>
        <div class="col-md-4 bloc-artcile">
            {block name="article-3"}
                Content
            {/block}
        </div>

        <div class="col-md-4 blog-sidebar">
            {include file="_pub.tpl"}
        </div>

    </div>


</div><!-- fin container main -->

{include file="_footer.tpl"}
