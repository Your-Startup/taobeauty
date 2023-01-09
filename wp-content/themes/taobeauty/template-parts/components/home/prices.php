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
            <?php /* foreach ($prices as $price) : ?>
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
            <?php endforeach; */?>

            <li class="prices__item">
                <div class="accordion container">
                    <div class="accordion__heading">
                        Название категории
                    </div>
                    <div class="accordion__content">
                        <div class="accordion accordion-children">
                            <div class="accordion__heading">
                                1. Название подкатегории
                                <img class="prices__img" src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                            </div>
                            <div class="accordion__content">
                                <div class="prices_section">
                                    <div class="prices_section-title">
                                        Forever Young BBL™ (борьба с возрастными изменениями)
                                    </div>
                                    <div class="prices_section-table">
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="prices_section">
                                    <div class="prices_section-title">
                                        Forever Young BBL™ (борьба с возрастными изменениями) Forever Young BBL™ (борьба с возрастными изменениями)
                                    </div>
                                    <div class="prices_section-table">
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте Forever Young BBL шея, декольте Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion accordion-children">
                            <div class="accordion__heading">
                                2. Название подкатегории
                                <img class="prices__img" src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                            </div>
                            <div class="accordion__content">
                                <div class="prices_section">
                                    <div class="prices_section-table">
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="prices__item">
                <div class="accordion container">
                    <div class="accordion__heading">
                        Название категории
                    </div>
                    <div class="accordion__content">
                        <div class="accordion accordion-children">
                            <div class="accordion__heading">
                                1. Название подкатегории
                                <img class="prices__img" src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                            </div>
                            <div class="accordion__content">
                                <div class="prices_section">
                                    <div class="prices_section-title">
                                        Forever Young BBL™ (борьба с возрастными изменениями)
                                    </div>
                                    <div class="prices_section-table">
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="prices_section">
                                    <div class="prices_section-title">
                                        Forever Young BBL™ (борьба с возрастными изменениями) Forever Young BBL™ (борьба с возрастными изменениями)
                                    </div>
                                    <div class="prices_section-table">
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте Forever Young BBL шея, декольте Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion accordion-children">
                            <div class="accordion__heading">
                                2. Название подкатегории
                                <img class="prices__img" src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                            </div>
                            <div class="accordion__content">
                                <div class="prices_section">
                                    <div class="prices_section-table">
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="prices__item">
                <div class="accordion container">
                    <div class="accordion__heading">
                        Название категории
                    </div>
                    <div class="accordion__content">
                        <div class="accordion accordion-children">
                            <div class="accordion__heading">
                                1. Название подкатегории
                                <img class="prices__img" src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                            </div>
                            <div class="accordion__content">
                                <div class="prices_section">
                                    <div class="prices_section-title">
                                        Forever Young BBL™ (борьба с возрастными изменениями)
                                    </div>
                                    <div class="prices_section-table">
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="prices_section">
                                    <div class="prices_section-title">
                                        Forever Young BBL™ (борьба с возрастными изменениями) Forever Young BBL™ (борьба с возрастными изменениями)
                                    </div>
                                    <div class="prices_section-table">
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте Forever Young BBL шея, декольте Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion accordion-children">
                            <div class="accordion__heading">
                                2. Название подкатегории
                                <img class="prices__img" src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                            </div>
                            <div class="accordion__content">
                                <div class="prices_section">
                                    <div class="prices_section-table">
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                        <div class="prices_section-table_row">
                                            <span>Forever Young BBL шея, декольте</span>
                                            <span>40000 ₽</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
<?php endif; ?>