<?php 
/**
 * @var $settings
 */

$posts = get_posts([
    'numberposts'      => $settings['blog_count'],
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'post',
    'suppress_filters' => true,
]);
?>

<?php if ($posts) : ?>
    <section class="blog">
        <div class="container">
            <h2 class="blog__heading">
                <span>Блог</span>
                <a href="<?= $settings['blog_link'] ?>">Подробнее</a>
            </h2>
            <div class="swiper blog__slider">
                <div class="swiper-wrapper">
                    <?php foreach ($posts as $item) : ?>
                        <div class="swiper-slide blog__slide">
                            <a href="<?= get_permalink($item->ID); ?>" class="blog__item">
                                <div class="blog__img">
                                    <img src="<?= get_the_post_thumbnail_url($item->ID) ?>" alt="">
                                </div>
                                <div class="blog__link">
                                    <?= $item->post_title ?>
                                </div>
                                <div class="blog__text">
                                    <?= $item->post_excerpt ?>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="blog__btn blog-prev">
                <img src="<?= get_template_directory_uri() ?>/assets/img/slider-left.svg" alt="">
            </div>
            <div class="blog__btn blog-next">
                <img src="<?= get_template_directory_uri() ?>/assets/img/slider-right.svg" alt="">
            </div>
        </div>
    </section>
<?php endif; ?>