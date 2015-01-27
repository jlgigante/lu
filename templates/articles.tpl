{extends file="structure.tpl"}
{block name="navigation"}
	{include file="_menu.tpl"}	
{/block}
{block name="content"}

	<section>
	{if isset($rubrique)}
	{*<h1>{$articles.title}</h1>*}									
		{foreach from=$articles.content key=myId item=i}
			<article>
				<div class="row">				
				

					<div class="col-xs-6 visuel">
						<a href="{$smarty.const.BASE_URL}/{$rubrique|escape}/{$i.id}/{$i.slug|escape}">
							<!-- <img src="{$smarty.const.BASE_URL}/images/art_{$rubrique}_300x240_{$i.visuel.0}" alt="{$i.title}" class="visuel" > -->
							<img src="{$smarty.const.BASE_URL}/images/art_{$rubrique}_{$i.visuel.0}" alt="{$i.title}" class="visuel bd rose"> 
						</a>
					</div>						
				
					<div class="col-xs-6 contenu">
						<h2><a href="{$smarty.const.BASE_URL}/{$rubrique|escape}/{$i.id}/{$i.slug|escape}">{$i.title}</a></h2>						
						<p>						
						{if isset($i.chapeau) && $i.chapeau!= ''}{$i.chapeau|truncate:'200'}{else}{$i.article|truncate:'200'}{/if}
						</p>					
					</div>				
					<a href="{$smarty.const.BASE_URL}/{$rubrique|escape}/{$i.id}/{$i.slug|escape}" class="suite">Lire la suite...</a>					
				</div>
			</article>	
		{/foreach}
	{/if}
	</section>
	
	<div class="align-center">
		<ul class="pagination">
			{foreach from=$pagination key=myId item=i}
				<li {if $i.class}class="{$i.class}"{/if}>
					<a href="{$smarty.const.BASE_URL}/{$rubrique|escape}/{$i.id}" class="{$i.class}">
						
						{if $i.class == 'prev' }
							&laquo;
						{elseif $i.class == 'next'}
							&raquo;
						{else}
							{$i.label}
						{/if}
						
					</a>
				</li>
			{/foreach}
		</ul>
	</div>
	
	

	
{/block}

{block name="aside"}
	{include file="_aside.tpl"}
{/block}

