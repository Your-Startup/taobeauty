<?php  $categories = getAllCategories(); ?>
<?php if ($categories) : ?>
    <section class="services">
        <div class="services__imgs-container">
            <div class="services__imgs-wrapper">
                <?php foreach ($categories as $category_key => $category) : ?>
                    <?php $imgs = get_field('home_imgs', 'service-categories_' . $category->cat_ID ); ?>
                    <?php if ($imgs) : ?>
                        <?php foreach ($imgs as $img) : ?>
                            <div class="services__decor-img img-group-<?= $category_key ?>"
                                data-top="<?= $img['coord']['top'] ?>" 
                                <?php echo $img['coord']['is_left'] ? 'data-left="' . $img['coord']['left'] . '"' : 'data-right="' .  $img['coord']['right']  . '"'; ?>>
                                    <img src="<?= $img['img'] ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="container">
            <div class="services__wrap">
                <img src="<?= get_template_directory_uri() ?>/assets/img/services.svg" class="services-img" alt="">
                <h4 class="services__heading">Услуги</h4>
                <ul class="services__list">
                    <?php foreach ($categories as $key => $category) : ?>
                        <li class="accordion__block" data-category="<?= $key ?>">
                            <div class="accordion__heading"><?= $category->name ?></div>
                            <div class="accordion__content">
                                <?php if ($category->children) : ?>
                                    <ul class="services__inner-list" <?php echo $key == 3 ? 'style="max-width:750px;margin:0 auto;"' : ''; ?>>
                                        <?php foreach ($category->children as $key => $sub_category) : ?>
                                            <li class="services__inner-item">
                                                <span><?= $key + 1 ?></span>
                                                <a href="<?= esc_url(get_category_link($sub_category->cat_ID)) ?>"><?= $sub_category->name ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
<?php endif; ?>