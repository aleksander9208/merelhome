{extends 'file:templates/index.tpl'}

{block 'content'}
    <div class="dostaka-home">
    	<span class="dostaka-pagetitle">
    	    {$_modx->resource.longtitle ?: $_modx->resource.pagetitle}
    	</span>
    	{'pdoCrumbs' | snippet : [
           'showHome' => 1,
        ]}
    </div>
    <div class="container">
        <div class="dostaka-title">
            “Merel’ home” - мы реализуем готовую продукцию и изготавливаем мебель по индивидуальному заказу.
            <span>
                Посмотреть выставочные образцы мебели и подобрать материалы Вы можете в нашем шоу-руме.<br><br>
                Оплата покупки производится в два этапа. На первом этапе вносится депозит в размере 70%, вторая часть - 30% оплачивается<br>
                при прибытии товара на наш склад в России. Оплату покупки Вы можете произвести любым удобным для вас способом:
            </span>
        </div>
        <div class="dostaka-pay">
            <div class="dostaka-pay_cash">
                <img src="/assets/components/app/web/img/pay_cash.png" alt="">
                <span>Наличными или картой<br>в нашем салоне</span>
            </div>
            <div class="dostaka-pay_requisites">
                <img src="/assets/components/app/web/img/pay_requisites.png" alt="">
                <span>В  любом отделении банка<br>по реквизитам эл.счета</span>
            </div>
        </div>
    </div>
    <div class="dostaka-manufacturing">
        <div class="container">
            <div class="dostaka-manufacturing_title">
                Процесс изготовления мебели на заказ состоит <br>из нескольких этапов:
            </div>
            <div class="dostaka-manufacturing_stage">
                <div class="dostaka-manufacturing_stage_sequence">
                    <span class="dostaka-manufacturing_sequence"><span>1.</span> Выбор модели, утверждение деталей заказа<br></span>
                    <span class="dostaka-manufacturing_sequence"><span>2.</span> Расчет окончательной стоимости<br></span>
                    <span class="dostaka-manufacturing_sequence"><span>3.</span> Заключение договора<br></span>
                    <span class="dostaka-manufacturing_sequence"><span>4.</span> Внесение депозита<br></span>
                    <span class="dostaka-manufacturing_sequence"><span>5.</span> Начало изготовления<br></span>
                </div>
                <div class="dostaka-manufacturing_stage_sequence">
                    <span class="dostaka-manufacturing_sequence"><span>6.</span> Фото и видеоотчет с производства о готовности заказа<br></span>
                    <span class="dostaka-manufacturing_sequence"><span>7.</span> Подтверждение отгрузки товара<br></span>
                    <span class="dostaka-manufacturing_sequence"><span>8.</span> Окончательный расчет по договору<br></span>
                    <span class="dostaka-manufacturing_sequence"><span>9.</span> Прибытие груза на склад в России<br></span>
                    <span class="dostaka-manufacturing_sequence"><span>10.</span> Согласование условий доставки/самовывоза<br></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="unique-title">
            А так-же:
        </div>
        <div class="unique-info">
            <div class="unique-block unique-individual">
                <img src="/assets/components/app/web/img/unique-individual.png" alt="">
                <span>Индивидуальное изготовление образцов</span>
            </div>
            <div class="unique-block unique-opportunity">
                <img src="/assets/components/app/web/img/unique-opportunity.png" alt="">
                <span>Возможность лично посетить наше производство в Китае</span>
            </div>
            <div class="unique-block unique-guarantee">
                <img src="/assets/components/app/web/img/unique-guarantee.png" alt="">
                <span>Даем гарантию 1 год при правильной эксплуатации</span>
            </div>
            <div class="unique-block unique-certified">
                <img src="/assets/components/app/web/img/unique-certified.png" alt="">
                <span>Производство сертифицировано по международным стандартам качества</span>
            </div>
            <div class="unique-block unique-materials">
                <img src="/assets/components/app/web/img/unique-materials.png" alt="">
                <span>Все используемые материалы отвечают нормам безопасности</span>
            </div>
            <div class="unique-block unique-substances">
                <img src="/assets/components/app/web/img/unique-substances.png" alt="">
                <span>Мебель не содержит токсичных и прочих вредных веществ</span>
            </div>
        </div>
        <div class="unique-list">
            <ul class="unique-list_info">
                <li>
                    Стоимость товаров включает <b>доставку до нашего склада в Москве.</b>
                </li>
                <li>
                    Доставка по г. Москва и в другие регионы <b>оплачивается отдельно</b> по тарифам транспортной компании на ваш выбор.
                </li>
                <li>
                    Сборка мебели является дополнительной услугой и <b>не включена в стоимость</b>
                </li>
                <li>
                    Сроки изготовления и доставки могут составлять <b>от 20 до 90 дней</b>, в зависимости от сложности заказа.
                </li>
            </ul>
        </div>
    </div>
{/block}