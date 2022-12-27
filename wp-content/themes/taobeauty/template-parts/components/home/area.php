<?php $space = get_field('space') ?>

<?php if ($space) : ?>
    <section class="area">
        <div class="area__wrap">
            <div class="container">
                <h2 class="area__heading">
                    <span>TAO</span>
                    <span>пространство</span>
                </h2>
            </div>
            <div class="area__slider-wrap">
                <div class="swiper area__slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($space as $img) : ?>
                            <div class="swiper-slide">
                                <img src="<?= $img ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="container">
                        <div class="area-btn area-prev">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/area-prev.svg" alt="">
                        </div>
                        <div class="area-btn area-next">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/area-next.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="area__pagination"></div>
            </div>
        </div>
    </section>
<?php endif; ?>