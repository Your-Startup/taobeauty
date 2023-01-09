<?php  $categories = getAllCategories(); ?>
<?php if ($categories) : ?>
    <?php $count = count($categories); ?>
    <section class="services" id="services-section">
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
                        <li class="accordion__block<?php if ($count - 1 == $key) echo ' last_categogy'?>" data-category="<?= $key ?>">
                            <? $short_name = get_field('short_name', 'service-categories_' . $category->cat_ID); ?>
                            <div class="accordion__heading"><?= $short_name ? $short_name : $category->name ?></div>
                            <div class="accordion__content">
                                <?php if ($category->children) : ?>
                                    <?php $children_groups = array_chunk($category->children, 3); ?>
                                    <?php foreach ($children_groups as $key => $childrens) : ?>
                                        <ul class="services__inner-list">
                                            <?php foreach ($childrens as $sub_key => $sub_category) : ?>
                                                <li class="services__inner-item">
                                                    <span><?= $sub_key + 1 + (3 * $key) ?></span>
                                                    <a href="<?= esc_url(get_category_link($sub_category->cat_ID)) ?>"><?= $sub_category->name ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
<?php endif; ?>