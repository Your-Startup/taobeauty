<?php
function getAllCategories()
{
    $categories = get_categories([
        'taxonomy'     => 'service-categories',
        'type'         => 'post',
        'orderby'      => 'name',
        'order'        => 'ASC',
        'parent'       => 0,
        'hide_empty'   => 0,
        'hierarchical' => 1,
        'number'       => 0,
        'pad_counts'   => false,
    ]);

    if ($categories) {
        foreach ($categories as $category) {
            $category->children =  get_categories([
                'taxonomy'     => 'service-categories',
                'type'         => 'post',
                'orderby'      => 'name',
                'order'        => 'ASC',
                'parent'       => $category->cat_ID,
                'hide_empty'   => 0,
                'hierarchical' => 1,
                'number'       => 0,
                'pad_counts'   => false,
            ]);
        }
    }

    return $categories;
}