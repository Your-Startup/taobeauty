<?php 
$slider = get_field('slider');
?>

<section class="main-slider">
    <div class="container main-slider-container">
        <ul class="main-slider__pagination swiper-pagination"></ul>
    </div>
    <div class="swiper main-slider__slider">
        <div class="swiper-wrapper">
            <?php if ($slider) : ?>
                <?php foreach ($slider as $slide) : ?>
                    <div class="swiper-slide">
                        <div class="container">
                            <h2 class="main-slider__title"><?= $slide['title'] ?></h2>
                            <div class="main-slider__text"><?= $slide['text'] ?></div>
                            <?php if ($slide['link']) : ?>
                                <a href="<?= $slide['link'] ?>" class="btn main-slider__btn">Подробнее</a>
                            <?php endif; ?>
                        </div>
                        <img src="<?= $slide['img'] ?>" alt="">
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="main-slider__next">
            <img src="<?= get_template_directory_uri() ?>/assets/img/next-slider.svg" alt="">
        </div>
        <div class="main-slider__prev">
            <img src="<?= get_template_directory_uri() ?>/assets/img/prev-slider.svg" alt="">
        </div>
    </div>
</section>