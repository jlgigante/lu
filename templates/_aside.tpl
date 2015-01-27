	<section id="aside" class="bd" >

		{*<header>*}
			{*<h3>{$aside.title}</h3>*}
		{*</header>*}
		<ul>
		{foreach from=$aside.content key=myId item=i name=aside}
			<li>	
				<a href="{$smarty.const.BASE_URL|escape}/{$aside.slug}/{$i.id}/{$i.slug}" >
                <div class="row">
                    <div class="col-md-6">
                        <img src="{$smarty.const.BASE_URL}/images/art_videos_{$i.visuel.0}" alt="{$i.title|strip_tags}" class="img-responsive"/>
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