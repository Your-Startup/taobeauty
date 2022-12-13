<?php 
/**
 * @var $data;
 */

if ($data) : ?>
    <div class="popup-close">
        <img class="popup-img-close" src="<?= get_template_directory_uri() ?>/assets/img/popup-close.svg" alt="">
    </div>
    <h3 class="popup-sec__title">
        <span>Суперпердложение</span>
        <span><?= $data['title'] ?></span>
    </h3>
    <form class="popup__form" action="">
        <label class="popup__lebel" for="email">
            <span>Ваш e-mail или телефон</span>
            <input class="popup__input" type="text">
        </label>
        <label class="popup__lebel" for="name">
            <span>Имя</span>
            <input class="popup__input" type="text">
        </label>
        <button class="popup-sec-link yellow__btn-link">Получить скидку</button>
    </form>
    <?php if ($data['conditions']) : ?>
        <p class="popup__text">
            * <?= $data['conditions'] ?>
        </p>
    <?php endif; ?>
<?php endif; ?>