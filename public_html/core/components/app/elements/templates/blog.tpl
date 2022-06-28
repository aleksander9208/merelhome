{extends 'file:templates/index.tpl'}

{block 'content'}
    <div class="blog-header">
    	<span class="blog-pagetitle">
    	    {$_modx->resource.longtitle ?: $_modx->resource.pagetitle}
    	</span>
    	{'pdoCrumbs' | snippet : [
           'showHome' => 1,
        ]}
    </div>

    <div class="container">
        <div class="rows articles-content">
            {'!pdoPage' | snippet : [
               'limit' => '8',
               'tpl' => '@FILE chunks/resources/articles.tpl',
               'tvPrefix' => '',
               'includeTVs' => 'image',
               'parents' => $_modx->resource.id,
               'ajaxMode' => 'button',
            ]}
            
	    </div>
	    
	    {'page.nav' | placeholder}
    </div>
{/block}