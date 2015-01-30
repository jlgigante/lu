{include file="_header.tpl"}


    <div class="row row-article">
        <div class="col-md-8">
            {block name="content"}
                Content
            {/block}
        </div>
        <div class="col-md-4 blog-sidebar">
            {block name="aside-videos"}
                Content
            {/block}

            {include file="_pub.tpl"}

            {block name="aside-articles"}
                Content
            {/block}
        </div>
    </div>

{include file="_footer.tpl"}

