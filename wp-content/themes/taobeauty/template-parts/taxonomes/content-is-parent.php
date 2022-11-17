
<?php 
    $category  = $wp_query->queried_object;
    $services = get_posts([
        'numberposts'      => -1,
        'tax_query' => [
            [
                'taxonomy' => $category->taxonomy,
                'field' => 'slug',
                'terms' => $category->slug,
                'include_children' => true,
                'operator' => 'IN'
            ],
        ],
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'services',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ]);
    $services_count = count($services);
?>

<section class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item">
                <a>Услуги</a>
            </li>
            <li class="breadcrumbs__item">
                <?= $category->name ?>
            </li>
        </ul>
    </div>
</section>
<section class="category">
    <div class="container">
        <h1 class="category__heading"><?= $category->name ?></h1>
    </div>
    <?php if ($services) : ?>
        <ul class="category__list">
            <?php foreach ($services as $key => $service) : ?>
                <li class="category__item accordion">
                    <div class="container">
                        <div class="category__counter">
                            <div class="category__number"><?= $key + 1 ?></div>
                            <div class="category__number"><?= $services_count ?></div>
                        </div>
                        <div class="category__img">
                            <img src="<?= get_field('img', $service->ID) ?>" alt="">
                        </div>
                        <div class="category__flex">
                            <h2 class="category__title"><?= $service->post_title ?></h2>
                            <div class="category__text">
                                <?= get_field('text', $service->ID) ?>
                            </div>
                            <div class="accordion__content">
                                <ul class="prices__pricelist">
                                    <li class="prices__priceitem">
                                        <span>Макияж "Touch up"</span>
                                        <span>2500 ₽</span>
                                    </li>
                                    <li class="prices__priceitem">
                                        <span>Макияж "Touch up"</span>
                                        <span>1500 ₽</span>
                                    </li>
                                    <li class="prices__priceitem">
                                        <span>Вечерний makeup</span>
                                        <span>2000 ₽</span>
                                    </li>

                                    <li class="prices__priceitem">
                                        <span>Лифтинг makeup (техника возрастного макияжа)</span>
                                        <span>8000 ₽</span>
                                    </li>
                                    <li class="prices__priceitem">
                                        <span>"Макияж для себя" (урок макияжа 1 час)</span>
                                        <span>1200 ₽</span>
                                    </li>
                                    <li class="prices__priceitem">
                                        <span>Накладные ресницы (пучки/лента)</span>
                                        <span>2500 ₽</span>
                                    </li>
                                    <li class="prices__priceitem">
                                        <span>Макияж "Touch up"</span>
                                        <span>2500 ₽</span>
                                    </li>
                                    <li class="prices__priceitem">
                                        <span>Макияж "Touch up"</span>
                                        <span>1500 ₽</span>
                                    </li>
                                    <li class="prices__priceitem">
                                        <span>Вечерний makeup</span>
                                        <span>2000 ₽</span>
                                    </li>

                                    <li class="prices__priceitem">
                                        <span>Лифтинг makeup (техника возрастного макияжа)</span>
                                        <span>8000 ₽</span>
                                    </li>
                                    <li class="prices__priceitem">
                                        <span>"Макияж для себя" (урок макияжа 1 час)</span>
                                        <span>1200 ₽</span>
                                    </li>
                                    <li class="prices__priceitem">
                                        <span>Накладные ресницы (пучки/лента)</span>
                                        <span>2500 ₽</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="category__links">
                                <button class="yellow__btn-link category__link">Записаться</button>
                                <button class="border-btn category__link js-more">Подробнее</button>
                            </div>
                            <button class="category__arr accordion__heading">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                            </button>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</section>
