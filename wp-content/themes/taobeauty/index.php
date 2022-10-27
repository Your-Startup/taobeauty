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
    <section class="main-text">
        <div class="container">
            <div class="main-text__wrap">
                <img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt="">
                <div class="main-text__content">
                    <p>
                        TAO Beauty — это синергия косметологического центра и салона красоты. Изысканное пространство с премиальным сервисом расположено рядом с метро Маяковская.
                    </p>
                    <p>
                        ПОДАРИТЕ СЕБЕ НЕМНОГО ЛЮБВИ И ЗАБОТЫ.
                    </p>
                    <p>
                        В гостеприимной атмосфере ТАО beauty вы всегда можете насладиться высоким уровнем ухода, которого вы, несомненно, достойны! Наши парикмахеры, врачи-дерматологи, косметологи, массажисты, подологи, визажисты и nail-мастера подарят вам путешествие в мир гармонии красоты и здоровья.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="services__wrap">
                <img src="<?= get_template_directory_uri() ?>/assets/img/services.svg" class="services-img" alt="">
                <h4 class="services__heading">Услуги</h4>
                <ul class="services__list">
                    <li class="accordion__block">
                        <div class="accordion__heading">Лицо</div>
                        <div class="accordion__content">
                            <ul class="services__inner-list">
                                <li class="services__inner-item">
                                    <span>1</span>
                                    <a href="#">Лечение акне</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>2</span>
                                    <a href="#">Коррекция утраченных форм и объемов</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>3</span>
                                    <a href="#">Краивый тон кожи</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>4</span>
                                    <a href="#">Омоложение на клеточном уровне</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>5</span>
                                    <a href="#">Увлажнение и сияние</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>6</span>
                                    <a href="#">Визаж и Brow&Lash бар</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="accordion__block">
                        <div class="accordion__heading">Волосы</div>
                        <div class="accordion__content">
                            <ul class="services__inner-list">
                                <li class="services__inner-item">
                                    <span>1</span>
                                    <a href="#">Лечение акне</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>2</span>
                                    <a href="#">Коррекция утраченных форм и объемов</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>3</span>
                                    <a href="#">Краивый тон кожи</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>4</span>
                                    <a href="#">Омоложение на клеточном уровне</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>5</span>
                                    <a href="#">Увлажнение и сияние</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="accordion__block">
                        <div class="accordion__heading">Тело</div>
                        <div class="accordion__content">
                            <ul class="services__inner-list">
                                <li class="services__inner-item">
                                    <span>1</span>
                                    <a href="#">Лечение акне</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>2</span>
                                    <a href="#">Коррекция утраченных форм и объемов</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>3</span>
                                    <a href="#">Краивый тон кожи</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>4</span>
                                    <a href="#">Омоложение на клеточном уровне</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>5</span>
                                    <a href="#">Увлажнение и сияние</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>6</span>
                                    <a href="#">Визаж и Brow&Lash бар</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>7</span>
                                    <a href="#">Визаж и Brow&Lash бар</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="accordion__block">
                        <div class="accordion__heading">Nail's</div>
                        <div class="accordion__content">
                            <ul class="services__inner-list">
                                <li class="services__inner-item">
                                    <span>1</span>
                                    <a href="#">Лечение акне</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>2</span>
                                    <a href="#">Коррекция утраченных форм и объемов</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>3</span>
                                    <a href="#">Краивый тон кожи</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>4</span>
                                    <a href="#">Омоложение на клеточном уровне</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="accordion__block">
                        <div class="accordion__heading">Подология</div>
                        <div class="accordion__content">
                            <ul class="services__inner-list">
                                <li class="services__inner-item">
                                    <span>1</span>
                                    <a href="#">Лечение акне</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>2</span>
                                    <a href="#">Коррекция утраченных форм и объемов</a>
                                </li>
                                <li class="services__inner-item">
                                    <span>3</span>
                                    <a href="#">Краивый тон кожи</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="certificates">
        <a href="#">
            <div class="container">
                <span>Подарочные сертификаты</span>
                <img src="<?= get_template_directory_uri() ?>/assets/img/link-arr-next.svg" alt="">
            </div>
        </a>
    </section>
    <section class="prices">
        <div class="container">
            <h2 class="prices__title">
                <span>Стоимость услуг</span>
                <span>Прайс</span>
            </h2>
        </div>
        <ul class="price__list">
            <li class="prices__item">
                <div class="accordion container">
                    <div class="accordion__heading">
                        Инъекционная косметология
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
                        </ul>
                        <img class="prices__img" src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                    </div>
                </div>
            </li>
            <li class="prices__item">
                <div class="accordion container">
                    <div class="accordion__heading">
                        Эстетическая косметология
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
                        </ul>
                        <img class="prices__img" src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                    </div>
                </div>
            </li>
            <li class="prices__item">
                <div class="accordion container">
                    <div class="accordion__heading">
                        Аппаратная косметология для лица
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
                        </ul>
                        <img class="prices__img" src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                    </div>
                </div>
            </li>
            <li class="prices__item">
                <div class="accordion container">
                    <div class="accordion__heading">
                        Аппаратная косметология для тела
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
                        </ul>
                        <img class="prices__img" src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                    </div>
                </div>
            </li>
            <li class="prices__item">
                <div class="accordion container">
                    <div class="accordion__heading">
                        Эпиляция
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
                        </ul>
                        <img class="prices__img" src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                    </div>
                </div>
            </li>
            <li class="prices__item">
                <div class="accordion container">
                    <div class="accordion__heading">
                        Подолгоия и трихология
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
                        </ul>
                        <img class="prices__img" src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                    </div>
                </div>
            </li>
            <li class="prices__item">
                <div class="accordion container">
                    <div class="accordion__heading">
                        Волосы
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
                        </ul>
                        <img class="prices__img" src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                    </div>
                </div>
            </li>
            <li class="prices__item">
                <div class="accordion container">
                    <div class="accordion__heading">
                        Маникюр / педикюр
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
                        </ul>
                        <img class="prices__img" src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                    </div>
                </div>
            </li>
            <li class="prices__item">
                <div class="accordion container">
                    <div class="accordion__heading">
                        Визаж
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
                        </ul>
                        <img class="prices__img" src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                    </div>
                </div>
            </li>
        </ul>
    </section>
	</main><!-- #main -->

<?php
get_footer();
