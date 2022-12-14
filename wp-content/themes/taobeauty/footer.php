<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Taobeauty
 */

?>

    <footer class="footer">
        <div class="container">
            <nav class="footer__nav">
                <?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-footer',
							'menu_id'        => 'footer-menu',
                            'menu_class'     => 'footer__list',
						)
					);
					?>
                <ul class="footer__socials">
                    <li class="footer__social">
                        <a href="">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/whatsapp.svg" alt="">
                        </a>
                    </li>
                    <li class="footer__social">
                        <a href="">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/tg.svg" alt="">
                        </a>
                    </li>
                    <li class="footer__social">
                        <a href="">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/vk.svg" alt="">
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="footer__content">
                <div class="footer__flex">
                    <div class="footer__text">
                        <a class="footer__contact" href="tel:+74950211295">+ 7 (495) 021-12-95</a>
                        <a class="footer__contact" href="mailto:info@tao-beauty.ru">info@tao-beauty.ru</a>
                        <div class="footer__address">
                            Москва, 125047, ул. Большая Садовая, 5к1
                            <br> Вход со стороны улицы Гашека
                            <br> Ежедневно: 10:00–22:00
                        </div>
                    </div>
                    <div class="footer__privacy">
                        <a class="footer__link" href="">Политика конфиденциальности</a>
                        <a class="footer__link" href="">Карточка организации</a>
                    </div>
                </div>
                <a class="footer__qr" href="">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/qr.png" alt="">
                </a>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
