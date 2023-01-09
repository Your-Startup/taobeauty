<?php 
/**
 * @var $data;
 */

if ($data) : ?>
    <div class="popup-close">
        <img class="popup-img-close" src="<?= get_template_directory_uri() ?>/assets/img/popup-close.svg" alt="">
    </div>
    <div class="popup-img">
        <span>
            суперпредложение
        </span>
        <img src="<?= $data['img'] ?>" alt="">
    </div>
    <div class="popup__content">
        <h3 class="popup__title"><?= $data['title'] ?></h3>
        <div class="popup__date">
            <?= $data['date'] ?>
        </div>
        <?php if ($data['big_text']) : ?>
            <div class="popup__big-text">
                <?= $data['big_text'] ?>
            </div>
        <?php endif; ?>
        <?php if ($data['table']) : ?>
            <ul class="popup-pricelist prices__pricelist">
                <?php foreach ($data['table'] as $row) : ?>
                    <li class="prices__priceitem">
                        <span><?= $row['title'] ?></span>
                        <span><?= $row['value'] ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php if ($data['conditions']) : ?>
            <p class="popup__text">
                * <?= $data['conditions'] ?>
            </p>
        <?php endif; ?>
    </div>
    <div class="popup-footer">
        <button class="popup__link yellow__btn-link js-open-popup" data-popup="order">Получить скидку</button>
    </div>
<?php endif; ?>