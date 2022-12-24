<?php 
/**
 * @var $settings
 */
?>

<?php if ($settings['certificates_link']) : ?>
    <section class="certificates">
        <a href="<?= $settings['certificates_link'] ?>">
            <div class="container">
                <span>Подарочные сертификаты</span>
                <img src="<?= get_template_directory_uri() ?>/assets/img/link-arr-next.svg" alt="">
            </div>
        </a>
    </section>
<?php endif; ?>