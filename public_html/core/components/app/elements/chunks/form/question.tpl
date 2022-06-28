<form action="" method="post" class="advice">
    <div class="modal-form-controls">
        <div class="modal-title">
            Возникли вопросы?
        </div>
        <input type="hidden" value="nomail" name="nomail">
        <div class="form-input">
            <input type="text" class="uk-width-1-1" value="{$_pls['fi.name']}" name="name" class="name" placeholder="Имя">
        </div>
        <div class="form-input">
            <input type="tel" class="uk-width-1-1" value="{$_pls['fi.phone']}" name="phone" class="phone" placeholder="Телефон">
        </div>
        <div class="form-input">
            <input type="email" class="uk-width-1-1" value="{$_pls['fi.email']}" name="email" class="email"required placeholder="E-mail">
        </div>
        <div class="form-textarea">
            <textarea name="message" class="uk-width-1-1" rows="3" placeholder="Сообщение">{$_pls['fi.message']}</textarea>
        </div>
        <div class="form-consent">
            <label for="order-policy" class="form-policy">
                <span class="form-policy__input">
                    <input type="checkbox" name="policy" value="1" class="uk-checkbox" id="order-policy" required>
                </span>
                <span class="form-policy__text">Я принимаю <a href="{$modx->makeUrl(29)}" target="_blank">пользовательское соглашение</a> и подтверждаю, что ознакомлен и согласен с <a href="{$modx->makeUrl(28)}" target="_blank">политикой конфиденциальности</a> данного сайта</span>
            </label>
        </div>
        <div class="form-link">
            <button class="send--form" type="submit">Отправить</button>
        </div>
    </div>
</form>