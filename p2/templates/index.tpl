{include file="header.tpl" title=foo}


{foreach name=categorias from=$categorias item=categoria}
	{if smarty.foreach.categorias.iteration%2 == 0}
		<a href="{$categoria.url}" title="{$categoria.categoria}">{$categoria.categoria}</a></br>

	{else}
		<a href="{$categoria.url}" title="{$categoria.categoria}">{$categoria.categoria}</a></br>
	{/if}
{/foreach}

{include file="footer.tpl"}		
	


