<section id="about" class="main-text">
    <div class="container">
        <div class="main-text__wrap">
            <img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt="">
            <div class="main-text__content">
                <?php the_field('about'); ?>
            </div>
        </div>
    </div>
</section>