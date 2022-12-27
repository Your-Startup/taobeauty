<section class="notfound">
    <div class="container">
        <?php $hieroglyph = get_field('hieroglyph'); ?>
        <?php if ($hieroglyph) :  ?>
            <img class="notfound__img" src="<?= $hieroglyph?>" alt="">
        <?php endif; ?>
        <p class="notfound__text">
            Приносим свои извинения
        </p>
        <h2 class="notfound__title">
            <span>
                Страница
            </span>
            <span>
                находится
            </span>
            <span>
                в разработке
            </span>
        </h2>
    </div>
</section>