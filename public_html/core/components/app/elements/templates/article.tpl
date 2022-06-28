<!DOCTYPE html>
<html>
    <head>
        {include 'file:chunks/_head.tpl'}
    </head>
    <body>
        <div class="wrapper product-wrapper">
            {include 'file:chunks/_header.tpl'}

            <div class="product-home">
            	{'pdoCrumbs' | snippet : [
                   'showHome' => 1,
                ]}
            </div>
            <div class="container articles">
                <h1>{$_modx->resource.longtitle ?: $_modx->resource.pagetitle}</h1>
                {$_modx->resource.content}

                {if $_modx->resource.article?}
                    <div class="collection">
                        <div class="collection-title">
                            Читайте так же
                        </div>
                        
                        <div class="collection-content read">
                            {'pdoResources' | snippet : [
                                'tpl' => '@FILE chunks/resources/collections.tpl',
                                'tvPrefix' => '',
                                'includeTVs' => 'image',
                                'limit' => '3',
                                'sortby' => 'RAND()',
                                'parents' => ($_modx->resource.article ? '35' : $_modx->resource.parent),
                                'resources' => ($_modx->resource.article ? $_modx->resource.article : '-' ~ $_modx->resource.id),
                            ]}
                        </div>
        
                    </div>
                {/if}
            </div>

            {include 'file:chunks/_footer.tpl'}
        </div>
    </body>
</html>