{extends 'file:templates/index.tpl'}

{block 'content'}

    <div class="headline-home">
    	<span class="headline-pagetitle">{$_modx->resource.longtitle}</span>
    </div>
    <div class="container">
        <div class="catalog-home">
            <a href="http://merelhome.com/katalog?tv|location=%D0%A1%D0%BF%D0%B0%D0%BB%D1%8C%D0%BD%D1%8F" class="catalog-home_bedroom">
                <img src="/assets/components/app/web/img/home_bedroom.png" alt="">
                <span>Спальня</span>
            </a>
            <a href="http://merelhome.com/katalog?tv|location=Гостиная" class="catalog-home_living">
                <img src="/assets/components/app/web/img/home_living.png" alt="">
                <span>Гостиная</span>
            </a>
            <a href="{$modx->makeUrl(9)}" class="catalog-home_сhildren">
                <img src="/assets/components/app/web/img/home_сhildren.png" alt="">
                <span>Детская</span>
            </a>
            <a href="http://merelhome.com/katalog?tv|location=Столовая" class="catalog-home_canteen">
                <img src="/assets/components/app/web/img/home_canteen.png" alt="">
                <span>Столовая</span>
            </a>
            <a href="http://merelhome.com/katalog?tv|location=%D0%9A%D0%B0%D0%B1%D0%B8%D0%BD%D0%B5%D1%82" class="catalog-home_cabinet">
                <img src="/assets/components/app/web/img/home_cabinet.png" alt="">
                <span>Кабинет</span>
            </a>
            <a href="http://merelhome.com/katalog?tv|location=%D0%9F%D1%80%D0%B8%D1%85%D0%BE%D0%B6%D0%B0%D1%8F" class="catalog-home_entrance">
                <img src="/assets/components/app/web/img/home_entrance.png" alt="">
                <span>Прихожая</span>
            </a>
            <a href="http://merelhome.com/katalog?tv|location=%D0%92%D0%B0%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BA%D0%BE%D0%BC%D0%BD%D0%B0%D1%82%D0%B0" class="catalog-home_bathroom">
                <img src="/assets/components/app/web/img/home_bathroom.png" alt="">
                <span>Ванная</span>
            </a>
            <a href="{$modx->makeUrl(14)}" class="catalog-home_accessories">
                <img src="/assets/components/app/web/img/home_accessories.png" alt="">
                <span>Аксессуары</span>
            </a>
        </div>
    </div>
    <div class="compani-home">
        <div class="container">
            <div class="compani-home_info">
                <div>
                    <span class="compani-home_title">О компании</span>
                    <div class="compani-home_lingtitle">
                        Мы знаем, что вы уникальны, и мебель серийного производства - не ваша история.
                    </div>
                    <div class="compani-home_description">
                        {$_modx->resource.content}
                    </div>
                    <a href="{$modx->makeUrl(51)}" class="compani-home_link">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
    <div class="receipts-home">
        <div class="container">
            <div class="container-title">
                Новые поступления
            </div>
            <div class="receipts">
                {'pdoResources' | snippet : [
                    'parents' => 2,
                    'limit' => 3,
                    'tvPrefix' => '',
                    'includeTVs' => 'image',
                    'tpl' => '@FILE chunks/resources/project.tpl'
                ]}
            </div>
        </div>
    </div>
    <div class="offer-home">
        <div class="container">
            <div class="offer-title">
                Мы можем предложить вам:
            </div>
            <div class="offer-info">
                <div class="offer-block offer-info_equipment">
                    <img src="/assets/components/app/web/img/info_equipment.png" alt="">
                    <span>Комплектация дизайн проектов любой сложности под ключ</span>
                </div>
                <div class="offer-block offer-info_manufacturing">
                    <img src="/assets/components/app/web/img/info_manufacturing.png" alt="">
                    <span>Изготовление мебели по вашим заказам</span>
                </div>
                <div class="offer-block offer-info_implementation">
                    <img src="/assets/components/app/web/img/info_implementation.png" alt="">
                    <span>Реализация коммерческих дизайн-проектов</span>
                </div>
                <div class="offer-block offer-info_private">
                    <img src="/assets/components/app/web/img/info_private.png" alt="">
                    <span>Личный контроль всех этапов производства</span>
                </div>
            </div>
        </div>
    </div>
{/block}

	
    