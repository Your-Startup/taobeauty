<?php
$current_category = get_queried_object();
$parent = get_term($current_category->parent);
$parent->short_name = get_field('short_name', 'service-categories_' . $parent->term_id);
$parent->bg_url = get_field('img', 'service-categories_' . $parent->term_id);
$categories = get_categories([
    'taxonomy'     => 'service-categories',
    'type'         => 'post',
    'meta_key'     => 'order',
    'orderby'      => 'meta_value',
    'order'        => 'ASC',
    'parent'       => $parent->term_id,
    'hide_empty'   => 0,
    'hierarchical' => 1,
    'number'       => 0,
    'pad_counts'   => false,
]);

$services = get_posts([
    'numberposts'      => -1,
    'tax_query' => [
        [
            'taxonomy' => $current_category->taxonomy,
            'field' => 'slug',
            'terms' => $current_category->slug,
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

<section class="breadcrumbs spec">
    <div class="container">
        <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item">
                Услуги
            </li>
            <li class="breadcrumbs__item">
                <a href="<?= get_term_link($parent->term_id) ?>"><?= $parent->short_name ? $parent->short_name : $parent->name ?></a>
            </li>
            <li class="breadcrumbs__item">
                <?= $current_category->name ?>
            </li>
        </ul>
        <h2 class="breadcrumbs__heading"><?= $parent->short_name ? $parent->short_name : $parent->name ?></h2>
        <?php if ($categories) : ?>
            <ul class="services__inner-list">
                <?php foreach ($categories as $key => $category) : ?>
                    <li class="services__inner-item <?= $category->term_id == $current_category->term_id ? 'active' : '' ?>">
                        <span><?= $key + 1 ?></span>
                        <a href="<?= get_term_link($category->term_id) ?>"><?= $category->name ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php $hieroglyph = get_field('hieroglyph', 'service-categories_' . $current_category->term_id); ?>
        <?php if ($hieroglyph) :  ?>
            <img src="<?= $hieroglyph?>" alt="" class="services-img">
        <?php endif; ?>
    </div>
    <img class="breadcrumbs__bg" src="<?= $parent->bg_url ?>" alt="">
</section>
<section class="category">
    <div class="container">
        <h1 class="category__heading"><?= $current_category->name ?></h1>
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
                                <?php $blocks = get_field('custom-blocks', $service->ID); ?>
                                <?php if ($blocks) : ?>
                                    <ul class="category__content-block">
                                        <?php foreach ($blocks as $block) :
                                            $type = $block['type'];
                                            $data = $block[$type];
                                            $customBlock = new CustomBlock($type, $data);
                                            $customBlock->createBlock();
                                        endforeach;?>
                                    </ul>
                                <?php endif;?>
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

