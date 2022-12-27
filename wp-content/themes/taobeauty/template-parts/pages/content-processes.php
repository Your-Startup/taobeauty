<section class="category page single processes">
    <div class="container">
        <h1 class="category-page__title"><?php the_title(); ?></h1>

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

    </div>
</section>