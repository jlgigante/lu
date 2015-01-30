{include file="_header.tpl"}

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


{include file="_footer.tpl"}
