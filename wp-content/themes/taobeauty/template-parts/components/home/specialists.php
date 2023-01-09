<?php
$options = get_field('specialists');
$specialists = get_posts([
    'numberposts'      => $options['count'],
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'specialists',
    'suppress_filters' => true,
]);
?>

<section class="specialists">
    <div class="container">
        <h2 class="specialists__heading">
            <span>TAO</span>
            <span>специалисты</span>
        </h2>
    </div>

    <div class="specialists__wrap">
        <div class="specialists__content">
            <div class="specialists__title"><?= $options['title'] ?></div>
            <div class="specialists__text"><?= $options['text'] ?></div>
        </div>
        <div class="container">
            <div class="swiper specialists__slider">
                <div class="swiper-wrapper">
                    <?php if ($specialists) : ?>
                        <div class="swiper-slide">
                            <div class="specialists__nav specialists__right">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/slider-left.svg" alt="">
                            </div>
                            <div class="specialists__nav specialists__left">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/slider-right.svg" alt="">
                            </div>
                        </div>
                        <?php foreach ($specialists as $specialist) : ?>
                            <div class="swiper-slide">
                                <div class="specialists__nav specialists__right">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/slider-left.svg" alt="">
                                </div>
                                <div class="specialists__nav specialists__left">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/slider-right.svg" alt="">
                                </div>
                                <img class="specialists__img" src="<?= get_field('img', $specialist->ID) ?>" alt="">
                                <div class="specialists__block">
                                    <div>
                                        <div class="specialists__name">
                                            <?= $specialist->post_title?>
                                        </div>
                                        <div class="specialists__profession">
                                            <?= get_field('post', $specialist->ID) ?>
                                        </div>
                                    </div>
                                    <div class="specialists__story">
                                        <?= get_field('short_text', $specialist->ID) ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="specialists__flex">
            <div class="specialists__pagination"></div>
            <a class="specialists__btn-link" href="<?= $options['link'] ?>">Подробнее</a>
        </div>
    </div>
</section>
