{extends 'file:templates/index.tpl'}

{block 'content'}
    <div class="portfolio-header">
    	<span class="portfolio-pagetitle">
    	    {$_modx->resource.longtitle ?: $_modx->resource.pagetitle}
    	</span>
    	{'pdoCrumbs' | snippet : [
           'showHome' => 1,
        ]}
    </div>
    <div class="container">
        <div class="portfolio-title">
           Наше производство
           <span>Мы хотим быть с Вами честными во всем! Поэтому в данном разделе<br> 
           мы так же расместили фото изделий и рабочего процесса с нашей фабрики.</span>
           <a href="{'254' | url}" class="portfolio-title_link">производство</a>
        </div> 
       
       <!-- <div class="portfolio-production">
           {'ms2Gallery' | snippet : [
                'tplRow' => '@FILE chunks/resources/PortfolioGallery.row.tpl',
                'tplOuter' => '@FILE chunks/resources/PortfolioGallery.outer.tpl',
                'frontend_css' => '0',
                'frontend_js' => '0'
            ]}
       </div> -->
    </div>
    <div class="container">
        <div class="collection">
            <div class="portfolio-realized">
                <div class="portfolio-title">
                   Реализованные проекты
                   <span>Представляем вашему вниманию проекты, которые были реализованы<br>
                   благодаря компании «Merel’ Home».</span>
                </div>
                
                <div class="portfolio-project">
                    {'pdoResources' | snippet : [
                        'tpl' => '@FILE chunks/resources/realized.tpl',
                        'tvPrefix' => '',
                        'includeTVs' => 'image',
                        'limit' => 10000,
                        'sortby' => 'RAND()',
                        'parents' => '36',
                    ]}
                </div>
            </div>
        </div>
    </div>

{/block}

