<?php
$data = get_fields();

$exclude = [];
foreach ($data['items'] as $item) {
    array_push($exclude, $item['data']->ID);
}

$posts = get_posts([
    'numberposts' => -1,
	'category'    => 0,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => $exclude,
	'post_type'   => 'post',
	'suppress_filters' => true,
]);
?>

<section class="blog-page__block">
    <img src="./img/services.svg" class="services-img blog-page__svg" alt="">
    <h1 class="blog-page__heading">
        <?php the_title(); ?>
    </h1>
    <div class="blog-page__table">
        <div class="block-page__list">
            <?php foreach ($data['items'] as $key => $item) : ?>
                <a href="<?= get_permalink($item['data']->ID); ?>" class="blog-page__news <?php if ($key + 1 == 2) echo 'center'?>">
                    <img src="<?= get_the_post_thumbnail_url($item['data']->ID) ?>" alt="">
                    <div class="blog-page__news-content">
                        <div class="blog-page__category">
                            <?= get_field('sub-title', $item['data']->ID)?>
                        </div>
                        <h3 class="blog-page__title">
                            <?= $item['data']->post_title ?>
                        </h3>
                        <div class="blog-page__text">
                            <?= $item['data']->post_excerpt ?>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php if ($data['works']['items']) : ?>
    <section class="works">
        <div class="container">
            <p class="works__title">
                Работы наших стилистов
            </p>
            <h2 class="works__heading">
                <?= $data['works']['title'] ?>
            </h2>
            <ul class="works__list">
                <?php foreach ($data['works']['items'] as $item) : ?>
                    <li class="works__item">
                        <img src="<?= $item ?>" alt="">
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>
<?php if ($posts) : ?>
    <section class="style">
        <img class="style__svg" src="<?= get_template_directory_uri() ?>/assets/img/title.svg" alt="">
        <div class="style__wrap">
            <div class="style__list">
                <?php foreach ($posts as $item) : ?>
                    <a href="<?= get_permalink($item->ID); ?>" class="blog-page__news">
                        <img src="<?= get_the_post_thumbnail_url($item->ID) ?>" alt="">
                        <div class="blog-page__news-content">
                            <div class="blog-page__category">
                                <?= get_field('sub-title', $item->ID)?>
                            </div>
                            <h3 class="blog-page__title">
                                <?= $item->post_title ?>
                            </h3>
                            <div class="blog-page__text">
                                <?= $item->post_excerpt ?>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>