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
                <?php $socials = get_field('socials', 'options'); ?>
                <?php if ($socials) : ?>
                    <ul class="footer__socials">
                        <?php foreach ($socials as $social) : ?>
                            <li class="footer__social">
                                <a href="<?= $social['link'] ?>" target="_blank">
                                    <img src="<?= $social['icon'] ?>" alt="">
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </nav>
            <div class="footer__content">
                <div class="footer__flex">
                    <div class="footer__text">
                        <?php $phone = get_field('phone', 'options'); ?>
                        <?php if ($phone) : ?>
                            <a class="footer__contact" href="tel:<?= $phone ?>"><?= $phone ?></a>
                        <?php endif; ?>

                        <?php $email = get_field('email', 'options'); ?>
                        <?php if ($phone) : ?>
                            <a class="footer__contact" href="mailto:<?= $email ?>"><?= $email ?></a>
                        <?php endif; ?>

                        <div class="footer__address">
                            <?php the_field('address', 'options') ?>
                            <br> <?php the_field('address_tip', 'options') ?>
                            <br> <?php the_field('work_time', 'options') ?>
                        </div>
                    </div>
                    <div class="footer__privacy">
                        <?php $privacy_policy_link = get_field('privacy_policy_link', 'options'); ?>
                        <?php if ($privacy_policy_link) : ?>
                            <a class="footer__link" href="<?= $privacy_policy_link ?>">Политика конфиденциальности</a>
                        <?php endif; ?>
                        
                        <?php $company_card_link = get_field('company_card_link', 'options'); ?>
                        <?php if ($company_card_link) : ?>
                            <a class="footer__link" href="<?= $company_card_link ?>">Карточка организации</a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php $qr = get_field('qr_code', 'options'); ?>
                <?php if ($qr) : ?>
                    <div class="footer__qr">
                        <img src="<?= $qr ?>" alt="">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </footer>
</div><!-- #page -->


<?php if ($socials) : ?>
    <ul class="social__list widget">
        <?php foreach ($socials as $social) : ?>
            <li class="social__item">
                <a href="<?= $social['link'] ?>" target="_blank">
                    <img src="<?= $social['icon'] ?>" alt="">
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<div class="popup-bg">
    <div class="popup" id="info">
        
    </div>
    <div class="popup-sec" id="order">

    </div>
    <div class="popup-zoom" id="zoom">
        <div class="popup-close">
            <img class="popup-img-close" src="<?= get_template_directory_uri() ?>/assets/img/popup-close.svg" alt="">
        </div>
        <img src="" alt="" class="zoom-img">
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
