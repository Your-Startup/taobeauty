<?php $prices = get_field('prices'); ?>

<?php if ($prices) : ?>
    <section class="prices">
        <div class="container">
            <h2 class="prices__title">
                <span>Стоимость услуг</span>
                <span>Прайс</span>
            </h2>
        </div>
        <ul class="price__list">
            <?php foreach ($prices as $price) : ?>
                <li class="prices__item">
                    <div class="accordion container">
                        <div class="accordion__heading">
                            <?= $price['category'] ?>
                        </div>
                        <div class="accordion__content">
                            <ul class="prices__pricelist">
                                <?php foreach ($price['items'] as $item) : ?>
                                    <li class="prices__priceitem">
                                        <span><?= $item['name'] ?></span>
                                        <span><?= $item['price'] ?> ₽</span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <button class="accordion__close-btn">
                                <img class="prices__img" src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                            </button>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
<?php endif; ?>