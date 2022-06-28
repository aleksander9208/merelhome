{extends 'file:templates/index.tpl'}

{block 'content'}

    <div class="headline-home compani-home_str">
    	<span class="catalog-pagetitle">{$_modx->resource.longtitle ?: $_modx->resource.pagetitle}</span>
    	{'pdoCrumbs' | snippet : [
           'showHome' => 1,
        ]}
    </div>
    <div class="container">
        {$_modx->resource.content}
        
        <div class="container-title">
            Наш коллектив
        </div>
        <div class="employees">
            {'pdoResources' | snippet : [
                'parents' => 51,
                'limit' => 10,
                'tvPrefix' => '',
                'sortdir' => 'ASC',
                'includeTVs' => 'image',
                'tpl' => '@FILE chunks/resources/employees.tpl'
            ]}
        </div>
    </div>
{/block}

	
    