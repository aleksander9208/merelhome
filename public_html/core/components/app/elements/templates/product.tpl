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
            <div class="container">
                <div class="product-content">
                    
                    {'ms2Gallery' | snippet : [
                        'tplRow' => '@FILE chunks/resources/ProjectGallery.row.tpl',
                        'tplOuter' => '@FILE chunks/resources/ProjectGallery.outer.tpl',
                        'frontend_css' => '0',
                        'frontend_js' => '0'
                    ]}
                    
                    <div class="product-content_info">
                        <div class="product-pagetitle">
                    	    {$_modx->resource.longtitle ?: $_modx->resource.pagetitle}
                    	    <div class="product-options">
                            	{foreach $_modx->resource['options'] | json_decode as $row}
                                    <div class="product-options_title">{$row['name']}</div>
                                    <div class="product-options_result">{$row['value']}</div>
                                {/foreach}
                            </div>
                    	</div>
                    	
                    	{if $_modx->resource.template in [8]}
                        	<div class="product-price">
                        	    Цена*: <span>{$_modx->resource.price} &#36;</span>
                        	    
                        	    <div class="product-price_red">
                        	        * Цена рассчитана на основе характеристик указанных в описании.
                        	    </div>
                        	</div>

                        	<div class="product-link">
                        	    [[!msFavorites.initialize?
                                    &id=`[[+id]]`
                                    &list=`mylist`
                                    &list_id=`50`
                                    &tpl=`@INLINE <a class="product-link_favorites msfavorites js-active-favorites"  data-click data-data-id="[[*id]]" data-data-list="default">
                                    	        <span>в избранное</span>
                                    	        <span>добавлено</span>
                                            </a>`
                                ]]
                        	    <a class="product-link_favorites msfavorites js-active-favorites"  data-click data-data-id="[[*id]]" data-data-list="default">
                        	        <span>в избранное</span>
                        	        <span>добавлено</span>
                                </a>
                        	    <button href="#modal-price" class="product-link_cost" value="Узнать стоимость" onclick="yaCounter54240871.reachGoal('Узнать стоимость'); return true;" uk-toggle>уточнить стоимость</a>
                        	</div>
                    	{/if}
                    	<div class="product-pagetitle">
                    	    <span>{$_modx->resource.content}</span>
                    	</div>
                    </div>
            	</div>
            	<div class="individual-changes">
                    <img src="assets/components/app/web/img/two-seat-sofa.png" alt="">
                    <span>Во всех моделях <b>возможно индивидуальное изменение любых параметров</b>: размер, цвет, материал обивки и другие характеристики. </span>
                </div>
                {if $_modx->resource.collections?}
                    <div class="collection">
                        <div class="collection-title">
                            Так-же в этой коллекции (категории):
                        </div>
                        
                        <div class="collection-content">
                            {'pdoResources' | snippet : [
                                'tpl' => '@FILE chunks/resources/collections.tpl',
                                'tvPrefix' => '',
                                'includeTVs' => 'image',
                                'limit' => '3',
                                'sortby' => 'RAND()',
                                'parents' => ($_modx->resource.collections ? '2' : $_modx->resource.parent),
                                'resources' => ($_modx->resource.collections ? $_modx->resource.collections : '-' ~ $_modx->resource.id),
                            ]}
                        </div>
        
                    </div>
                {/if}
            </div>

            {include 'file:chunks/_footer.tpl'}
        </div>
    </body>
</html>
