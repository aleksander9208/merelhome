<header>
    <div class="container">
        <div class="header-info">
            <div class="header-phone">
                {'header_phone' | option}
            </div>
            {if $_modx->resource.template in [8,10,11,13] }
                <a href="" class="header-logo">
                    <img src="assets/components/app/web/img/logo-black.png" alt="">
                    <img src="assets/components/app/web/img/logo-black-mini.png" alt="">
                </a>
            {else}
                <a href="" class="header-logo">
                    <img src="assets/components/app/web/img/logo.png" alt="">
                    <img src="assets/components/app/web/img/logo-mini.png" alt="">
                </a>
            {/if}
            <a href="{$_modx->makeUrl(50)}" class="header-favorites">
                <span>избранное</span>
            </a>
        </div>
        
        <button class="header_adaptiv" type="button" uk-toggle=" target: #main-menu; cls: menu-adaptiv; animation: uk-animation-slide-left"></button>
            
        <div id="main-menu" class="header-button">
            <button class="header_close" type="button" uk-toggle=" target: #main-menu; cls: menu-adaptiv; animation: uk-animation-slide-left"></button>
            <img src="assets/components/app/web/img/logo-mini.png" alt="" class="header-menu_logo">
            {'pdoMenu' | snippet : [
                'parents' => 0,
                'outerClass' => 'header-menu',
                'level' => 1,
            ]}
        </div>
        
        
    </div>
</header>