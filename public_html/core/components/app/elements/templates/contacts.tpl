{extends 'file:templates/index.tpl'}

{block 'content'}
    <div class="contacts-header">
    	<span class="contacts-pagetitle">
    	    {$_modx->resource.longtitle ?: $_modx->resource.pagetitle}
    	</span>
    	{'pdoCrumbs' | snippet : [
           'showHome' => 1,
        ]}
    </div>
    <div class="container">
        <div class="contacts-container">
            <div class="contacts-data" itemscope itemtype="http://schema.org/Organization">
                <div class="contacts-data_time contacts-info">
                    <span itemprop="name">Мебель английского бренда "Merel' home".</span>
                </div>
                <div class="contacts-data_addres contacts-info" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    {'address' | option}
                </div>
                <div class="contacts-data_time contacts-info">
                    Время работы: {'time' | option}
                </div>
                <div class="contacts-data_phone contacts-info">
                    Телефон: <span itemprop="telephone">{'phone' | option}</span>
                </div>
                <!--div class="contacts-data_requisite contacts-info">
                    <span>Реквизиты:</span>
                    {'requisites' | option}
                </div-->
            </div>
            <div class="contacts-maps">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6c8ace0fbdceb7cf32b7092108cbda0581d18b8d8f200ffc1e605a85ebbc4074&amp;width=100%25&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
    <div class="form-contact">
        <div class="container">
            <div class="form-contact_title">
                Форма обратной связи
            </div>
            {'!AjaxForm@Form' | snippet : [
                'emailSubject'  => 'Форма обратной записи',
                'validate'      => 'nomail:blank,email:required,policy:required',
                'form'          => '@FILE chunks/form/contact_form.tpl',
                'emailTpl'      => '@FILE chunks/form/message.tpl',
            ]}
        </div>
    </div>
{/block}