<section class="contacts">
    <div class="container">
        <div class="contacts__item">
            <h2 class="contacts__heading">
                <span>контакты</span>
                <span>адрес центра</span>
            </h2>
            <div class="contacts__address">
                г. Москва, <br> ул. Большая Садовая, 5к1
            </div>
            <a class="contacts__link contacts__tel" href="tel:+74950211295">+ 7 (495) 021-12-95</a>
            <a class="contacts__link contacts__mail" href="mailto:info@tao-beauty.ru">info@tao-beauty.ru</a>
            <div>Ежедневно: 10:00–22:00</div>
            <a class="contacts__link contacts__tel" href="tel:+74950211295">+ 7 (495) 021-12-95</a>
            <form action="#" class="contacts__form">
                <label class="contacts__label" for="email">
                    <span>Ваш e-mail</span>
                    <input type="email" name="email" id="email">
                </label>
                <input class="contacts__submit form-submit" type="submit" value="Получать спецпредложения">
            </form>
        </div>
        <div class="contacts__map">
            <img class="contacts__img" src="<?= get_template_directory_uri() ?>/assets/img/office.jpg" alt="">
            <div class="contacts__bg">
                <button class="contacts__btn" data-hide="показать на карте" data-show="скрыть карту">показать на карте</button>
            </div>
            <div id="contacts-map"></div>
        </div>
    </div>
</section>