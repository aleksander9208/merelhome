{extends 'file:templates/index.tpl'}

{block 'content'}
    <div class="designers-home">
    	<span class="designers-pagetitle">
    	    {$_modx->resource.longtitle ?: $_modx->resource.pagetitle}
    	</span>
    	{'pdoCrumbs' | snippet : [
           'showHome' => 1,
        ]}
    </div>
    <div class="container">
        <div class="designers-title">
            Компания “Merel’ home” приглашает<br>к сотрудничеству дизайнеров и архитекторов!
            <span>Возможности, которыми мы располагаем:</span>
        </div>
        <div class="designers-info">
            <div class="designers-info_description">
                <div class="designers-description designers-manufacturing">
                    <img src="/assets/components/app/web/img/designers-manufacturing.png" alt="">
                    <span>Изготовление любых технически сложных изделий из редких или специфических материалов</span>
                </div>
                <div class="designers-description designers-masters">
                    <img src="/assets/components/app/web/img/designers-masters.png" alt="">
                    <span>Опыт мастеров, обучавшихся и регулярно повышающих свою квалификацию в Европе</span>
                </div>
                <div class="designers-description designers-environmental">
                    <img src="/assets/components/app/web/img/designers-environmental.png" alt="">
                    <span>Использование только экологически безопасных, высококачественных материалов</span>
                </div>
            </div>
            <div class="designers-info_description">
                <div class="designers-description designers-models">
                    <img src="/assets/components/app/web/img/designers-models.png" alt="">
                    <span>Профессиональное конструирование моделей</span>
                </div>
                <div class="designers-description designers-drawing">
                    <img src="/assets/components/app/web/img/designers-drawing.png" alt="">
                    <span>Изготовление мебели по рисункам, чертежам и фото</span>
                </div>
                <div class="designers-description designers-modification">
                    <img src="/assets/components/app/web/img/designers-modification.png" alt="">
                    <span>Видоизменение любой модели по вашим характеристикам</span>
                </div>
            </div>
            <div class="designers-info_description_end">
                <div class="designers-description designers-after_sales">
                    <img src="/assets/components/app/web/img/designers-after_sales.png" alt="">
                    <span>Постпродажная гарантийная поддержка</span>
                </div>
                <!--div class="designers-description designers-to_visit">
                    <img src="/assets/components/app/web/img/designers-to_visit.png" alt="">
                    <span>Возможность посетить наше производство в Китае</span>
                </div-->
            </div>
        </div>
        <div class="designers-important">
            Для нас важен результат и безупречная репутация. Мы готовы сделать все,  чтобы наше сотрудничество длилось как можно дольше!
        </div>
    </div>
{/block}