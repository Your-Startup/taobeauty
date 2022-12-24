<?php
function getAllCategories()
{
    $categories = get_categories([
        'taxonomy'     => 'service-categories',
        'type'         => 'post',
        'meta_key'     => 'order',
        'orderby'      => 'meta_value',
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
                'meta_key'     => 'order',
                'orderby'      => 'meta_value',
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

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Доп. настройки',
        'menu_title'    => 'Доп. настройки',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}