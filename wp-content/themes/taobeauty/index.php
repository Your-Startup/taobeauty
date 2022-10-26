<?php
/**
 * Template Name: Главная
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Taobeauty
 */

get_header();
?>
	<main id="primary" class="main site-main">
		<section class="main-slider">
            <div class="container">
                <h1 class="main-slider__title">Hydrafacial</h1>
                <div class="main-slider__heading">Голливудский гидропилиниг</div>
                <div class="main-slider__text">Cовременная методика неинвазивной механической чистки кожи</div>
                <a href="#" class="btn main-slider__btn">Подробнее</a>
                <ul class="main-slider__pagination swiper-pagination"></ul>
            </div>
            <div class="swiper main-slider__slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/main-slider.jpg" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/main-slider.jpg" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/main-slider.jpg" alt="">
                  </div>
                </div>
                <div class="main-slider__next">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/next-slider.svg" alt="">
                </div>
            </div>
        </section>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
