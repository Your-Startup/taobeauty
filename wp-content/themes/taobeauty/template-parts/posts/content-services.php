<section class="category page single">
    <img class="breadcrumbs__bg" src="<?= get_field('img_full')?>" alt="">
    <div class="container">
        <h1 class="category-page__services-title"><?php the_title(); ?></h1>
        <div class="category-page__content">
            <?= get_field('text_full')?>
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