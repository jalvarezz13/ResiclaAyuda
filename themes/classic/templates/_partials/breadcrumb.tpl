{assign 'quienes' ['Presentación', 'Proyecto solidario']}
{assign 'Participa' ['Dona productos', 'Compra productos','Haz un donativo','Comparte en RRSS','Únete a nosotros']}
<nav data-depth="{$breadcrumb.count}" class="breadcrumb hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    {block name='breadcrumb'}
      {foreach from=$breadcrumb.links item=path name=breadcrumb}

    {if $path.title|in_array:$quienes}
       {block name='breadcrumb_item'}
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="{"http://pshop06.esi.uclm.es/prestashop/content/13-quienes-somos"}">
              <span itemprop="name">{"¿Quiénes somos?"}</span>
            </a>
            <meta itemprop="position" content="{$smarty.foreach.breadcrumb.iteration}">
          </li>
        {/block}
      {/if}
      {if $path.title|in_array:$Participa}
       {block name='breadcrumb_item'}
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="{"http://pshop06.esi.uclm.es/prestashop/content/17-participa"}">
              <span itemprop="name">{"Participa"}</span>
            </a>
            <meta itemprop="position" content="{$smarty.foreach.breadcrumb.iteration}">
          </li>
        {/block}
      {/if}
      
        {block name='breadcrumb_item'}
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="{$path.url}">
              <span itemprop="name">{$path.title}</span>
            </a>
            <meta itemprop="position" content="{$smarty.foreach.breadcrumb.iteration}">
          </li>
        {/block}
      {/foreach}
    {/block}
  </ol>
</nav>