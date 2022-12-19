<section class="category page single">
    <div class="container">
        <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item">
                <a href="/blog">Блог</a>
            </li>
            <li class="breadcrumbs__item">
                <?php the_title(); ?>
            </li>
        </ul>

        <?php $hieroglyph = get_field('hieroglyph'); ?>
        <?php if ($hieroglyph) :  ?>
            <img src="<?= $hieroglyph?>" alt="">
        <?php endif; ?>

        <h1 class="category-page__title"><?php the_title(); ?></h1>
        <div class="category-page__content">
            <?php the_content(); ?>
        </div>

        <?php $blocks = get_field('custom-blocks'); ?>
        <?php if ($blocks) : ?>
            <ul class="category__content-block">
                <?php foreach ($blocks as $block) :
                    $type = $block['type'];
                    $data = $block[$type];
                    $customBlock = new CustomBlock($type, $data);
                    $customBlock->createBlock();
                endforeach;?>
            </ul>
        <?php endif;?>

        <div class="btns-center">
            <div class="category__links">
                <button class="yellow__btn-link category__link">Записаться</button>
            </div>
        </div>

    </div>
</section>