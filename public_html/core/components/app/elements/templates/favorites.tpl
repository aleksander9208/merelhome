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
            <div class="container favorites">
                <span>{$_modx->resource.longtitle ?: $_modx->resource.pagetitle}</span>
                <div id="pdopage" class="msfavorites-parent">
                    [[!msFavorites.initialize]]
        			<div class="rows favorites-content">
        			[[!pdoPage:default=`<div><strong>Ваш список избранного пока пуст</strong></div>`?
            			&parents=`0`
            			&element=`pdoResources`
            			&resources=`[[!msFavorites.ids]]`
            			&tvPrefix=``
            			&includeTVs=`image`
            			&tpl=`@FILE chunks/resources/favorites.tpl`
            			&ajaxMode=`default`
        			]]
        			</div>
    			</div>
            </div>
            <div class="form-contact">
                <div class="container">
                    <div class="form-contact_title">
                        Заполните форму - получите лучшую цену на этот товар
                    </div>
                    {'!AjaxForm@Form' | snippet : [
                        'emailSubject'  => 'Форма обратной записи',
                        'validate'      => 'nomail:blank,email:required,policy:required',
                        'form'          => '@FILE chunks/form/contact_form.tpl',
                        'emailTpl'      => '@FILE chunks/form/message.tpl',
                    ]}
                </div>
            </div>
            {include 'file:chunks/_footer.tpl'}
        </div>
    </body>
</html>
