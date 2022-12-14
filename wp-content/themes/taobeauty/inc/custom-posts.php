<?php
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){
	register_taxonomy( 'service-categories', [ 'services' ], [
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Категории услуг',
			'singular_name'     => 'Категория услуги',
			'search_items'      => 'Поиск категории',
			'all_items'         => 'Все категории',
			'view_item '        => 'Показать категорию',
			'parent_item'       => 'Родительская категория',
			'parent_item_colon' => 'Родительские категории:',
			'edit_item'         => 'Редактировать категорию',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Создать категорию',
			'new_item_name'     => 'Новая категория',
			'menu_name'         => 'Категории',
			'back_to_items'     => '← Назад к категориям',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		'hierarchical'          => true,

		'rewrite'               => true,
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
	] );
}

add_action( 'init', 'register_post_types' );
function register_post_types(){

	//Заявки
	register_post_type( 'request', [
		'label'  => null,
		'labels' => [
			'name'               => 'Заявки', // основное название для типа записи
			'singular_name'      => 'Заявка', // название для одной записи этого типа
			'add_new'            => 'Создать заявку', // для добавления новой записи
			'add_new_item'       => 'Создание заявки', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование заявки', // для редактирования типа записи
			'new_item'           => 'Заявка', // текст новой записи
			'view_item'          => 'Смотреть заявку', // для просмотра записи этого типа.
			'search_items'       => 'Искать заявку', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Заявки', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'publicly_queryable'  => false,
		'exclude_from_search' => true,
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 27,
		'menu_icon'           => 'dashicons-bell',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['request_category'],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	// Услуги
	register_post_type( 'services', [
		'label'  => null,
		'labels' => [
			'name'               => 'Услуги', // основное название для типа записи
			'singular_name'      => 'Услуга', // название для одной записи этого типа
			'add_new'            => 'Создать услугу', // для добавления новой записи
			'add_new_item'       => 'Создание услуги', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование услуги', // для редактирования типа записи
			'new_item'           => 'Услуга', // текст новой записи
			'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
			'search_items'       => 'Искать услугу', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Услуги', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 28,
		'menu_icon'           => 'dashicons-admin-page',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['service-categories'],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	// Акции
	register_post_type( 'stocks', [
		'label'  => null,
		'labels' => [
			'name'               => 'События и спецпредложения', // основное название для типа записи
			'singular_name'      => 'Акция', // название для одной записи этого типа
			'add_new'            => 'Создать акцию', // для добавления новой записи
			'add_new_item'       => 'Создание акции', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование акции', // для редактирования типа записи
			'new_item'           => 'Акция', // текст новой записи
			'view_item'          => 'Смотреть акцию', // для просмотра записи этого типа.
			'search_items'       => 'Искать акцию', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Акции', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 29,
		'menu_icon'           => 'dashicons-money-alt',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	// Специалисты
	register_post_type( 'specialists', [
		'label'  => null,
		'labels' => [
			'name'               => 'Специалисты', // основное название для типа записи
			'singular_name'      => 'Специалист', // название для одной записи этого типа
			'add_new'            => 'Добавить специалиста', // для добавления новой записи
			'add_new_item'       => 'Добавление специалиста', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование специалиста', // для редактирования типа записи
			'new_item'           => 'Специалист', // текст новой записи
			'view_item'          => 'Смотреть специалиста', // для просмотра записи этого типа.
			'search_items'       => 'Искать специалиста', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Специалисты', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 30,
		'menu_icon'           => 'dashicons-groups',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

function edit_admin_menus() {
    global $menu;
    $menu[5][0] = 'Блог'; // Изменить название
}
add_action( 'admin_menu', 'edit_admin_menus' );