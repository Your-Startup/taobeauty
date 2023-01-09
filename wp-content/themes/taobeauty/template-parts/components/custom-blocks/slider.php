<?php
/**
 * @var $this->data
 */
$data = $this->data;
?>

<li class="category_slider">
    <h3 class="category__plus-heading"><?= $data['title'] ?></h3>
    <div class="category_slider_nav"></div>
    <div class="category_button-prev no-close">
        <img src="<?= get_template_directory_uri() ?>/assets/img/slider-left.svg" alt="">
    </div>
    <div class="swiper category_swiper no-close">
        <div class="swiper-wrapper">
            <?php if ($data['imgs']) : ?>
                <?php foreach ($data['imgs'] as $item) : ?>
                    <div class="swiper-slide">
                        <img src="<?= $item ?>" alt="">
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="category_button-next no-close">
        <img src="<?= get_template_directory_uri() ?>/assets/img/slider-right.svg" alt="">
    </div>
</li>
