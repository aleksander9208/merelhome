{extends 'file:templates/index.tpl'}

{block 'content'}
    <div class="catalog-header">
    	<span class="catalog-pagetitle">
    	    {$_modx->resource.longtitle ?: $_modx->resource.pagetitle}
    	</span>
    	{'pdoCrumbs' | snippet : [
           'showHome' => 1,
        ]}
    </div>
    <div class="container filter_container_button">
        <button class="filter_adaptiv" type="button" uk-toggle=" target: #filter; cls: filter-list">отфильтровать</button>
    </div>
    <div class="filter-button">
        {if $_modx->resource.id in [2]}
            {'!mFilter2' | snippet : [
                'elements'          => 'pdoResources',
            	'parents'           => '7,8,9,10,11,12,13,14',
            	'hideContainers'    => 'true',
            	'limit'             => '12',
            	'tvPrefix'          => '',
            	'includeTVs'        => 'style,image,location,price,availability,segment,subject',
            	'tpl'               => '@FILE chunks/filter/catalor_row.tpl',
            	'tplWrapper'        => '@FILE chunks/filter/catalog_wrap.tpl',
            	'tplOuter'          => '@FILE chunks/filter/filter_outer.tpl',
                'sort'              => 'resource|publishedon:desc',
            	
            	'filters'           => 'tv|location:select,tv|subject:select,tv|style:select,tv|price_list:select,tv|segment:select,tv|availability:boolean',
            	
            	'tplFilter.outer.tv|location'       => '@FILE chunks/filter/location_list.tpl',
                'tplFilter.row.tv|location'         => '@FILE chunks/filter/location_option.tpl',
                'suggestionsRadio'                  => 'resource|location',
                
                'tplFilter.outer.tv|subject'        => '@FILE chunks/filter/subje_list.tpl',
                'tplFilter.row.tv|subject'          => '@FILE chunks/filter/subje_option.tpl',
                'suggestionsRadio'                  => 'resource|subject',
                
                'tplFilter.outer.tv|style'          => '@FILE chunks/filter/style_list.tpl',
                'tplFilter.row.tv|style'            => '@FILE chunks/filter/style_option.tpl',
                'suggestionsRadio'                  => 'resource|style',
                
                'tplFilter.outer.tv|price_list'     => '@FILE chunks/filter/price_list.tpl',
                'tplFilter.row.tv|price_list'       => '@FILE chunks/filter/price_number.tpl',
                'suggestionsRadio'                  => 'resource|price_list',
                
                'tplFilter.outer.tv|segment'        => '@FILE chunks/filter/segment_list.tpl',
                'tplFilter.row.tv|segment'          => '@FILE chunks/filter/segment_option.tpl',
                'suggestionsRadio'                  => 'resource|segment',
                
                'tplFilter.outer.tv|availability'   => '@FILE chunks/filter/availability_list.tpl',
                'tplFilter.row.tv|availability'     => '@FILE chunks/filter/availability_option.tpl',
                'suggestionsRadio'                  => 'resource|availability',
                
                                    
            ]}
        {else}
            {'!mFilter2' | snippet : [
                'elements'          => 'pdoResources',
                'parents'           =>  $_modx->resource.id,
            	'hideContainers'    => 'true',
            	'limit'             => '12',
            	'tvPrefix'          => '',
            	'includeTVs'        => 'style,image,location,price,availability,segment,subject',
            	'tpl'               => '@FILE chunks/filter/catalor_row.tpl',
            	'tplWrapper'        => '@FILE chunks/filter/catalog_wrap.tpl',
            	'tplOuter'          => '@FILE chunks/filter/filter_outer.tpl',
                'sort'              => 'resource|publishedon:asc',
            	
            	'filters'           => 'tv|location:select,tv|subject:select,tv|style:select,tv|price_list:select,tv|segment:select,tv|availability:boolean',
            	
            	'tplFilter.outer.tv|location'       => '@FILE chunks/filter/location_list.tpl',
                'tplFilter.row.tv|location'         => '@FILE chunks/filter/location_option.tpl',
                'suggestionsRadio'                  => 'resource|location',
                
                'tplFilter.outer.tv|subject'        => '@FILE chunks/filter/subject_list.tpl',
                'tplFilter.row.tv|subject'          => '@FILE chunks/filter/subject_option.tpl',
                'suggestionsRadio'                  => 'resource|subject',
                
                'tplFilter.outer.tv|style'          => '@FILE chunks/filter/style_list.tpl',
                'tplFilter.row.tv|style'            => '@FILE chunks/filter/style_option.tpl',
                'suggestionsRadio'                  => 'resource|style',
                
                'tplFilter.outer.tv|price_list'     => '@FILE chunks/filter/price_list.tpl',
                'tplFilter.row.tv|price_list'       => '@FILE chunks/filter/price_number.tpl',
                'suggestionsRadio'                  => 'resource|price_list',
                
                'tplFilter.outer.tv|segment'        => '@FILE chunks/filter/segment_list.tpl',
                'tplFilter.row.tv|segment'          => '@FILE chunks/filter/segment_option.tpl',
                'suggestionsRadio'                  => 'resource|segment',
                
                'tplFilter.outer.tv|availability'   => '@FILE chunks/filter/availability_list.tpl',
                'tplFilter.row.tv|availability'     => '@FILE chunks/filter/availability_option.tpl',
                'suggestionsRadio'                  => 'resource|availability',
                
                                    
            ]}
        {/if}
    </div>
    

    <div class="container">
        <div class="individual-changes">
            <img src="assets/components/app/web/img/two-seat-sofa.png" alt="">
            <span>Во всех моделях <b>возможно индивидуальное изменение любых параметров</b>: размер, цвет, материал обивки и другие параметры. </span>
        </div>
    </div>
{/block}