<?php 
/**
 * @var $settings
 */
?>

<section id="contacts" class="contacts">
    <div class="container">
        <div class="contacts__item">
            <h2 class="contacts__heading">
                <span>контакты</span>
                <span>адрес центра</span>
            </h2>
            <div class="contacts__address">
                <?= get_field('address', 'options')?>
            </div>
            <?php $phone = get_field('phone', 'options'); ?>
            <?php if ($phone) : ?>
                <a class="contacts__link contacts__tel" href="tel:<?= $phone ?>"><?= $phone ?></a>
            <?php endif; ?>

            <?php $email = get_field('email', 'options'); ?>
            <?php if ($email) : ?>
                <a class="contacts__link contacts__mail" href="mailto:<?= $email ?>"><?= $email ?></a>
            <?php endif; ?>

            <div><?= get_field('work_time', 'options')?></div>
            <form action="#" class="contacts__form">
                <label class="contacts__label" for="email">
                    <span>Ваш e-mail</span>
                    <input type="email" name="email" id="email">
                </label>
                <input class="contacts__submit form-submit" type="submit" value="Получать спецпредложения">
            </form>
        </div>
        <div class="contacts__map">
            <img class="contacts__img" src="<?= $settings['contact_img'] ?>" alt="">
            <div class="contacts__bg">
                <button class="contacts__btn" data-hide="показать на карте" data-show="скрыть карту">показать на карте</button>
            </div>
            <div id="contacts-map"></div>
            <script> window.coordinats = [<?= $settings['coordinats'] ?>]; </script>
        </div>
    </div>
</section>