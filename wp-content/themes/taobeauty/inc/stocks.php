<?php
add_action( 'wp_enqueue_scripts', 'myajax_data', 99 );
function myajax_data(){
	wp_localize_script( 'taobeauty-script-base', 'myajax',
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);
}

add_action('wp_ajax_stock_info'       , 'stockInfo');
add_action('wp_ajax_nopriv_stock_info', 'stockInfo');

function stockInfo() {
    if (!$_POST['id']) {
        echo json_encode([
            'success' => false,
            'message' => 'Не указан id.'
        ]);
        wp_die();
    }

    $stockPost = get_post($_POST['id']);

    if (!$stockPost) {
        echo json_encode([
            'success' => false,
            'message' => 'Не найдена акция.'
        ]);
        wp_die();
    }

    $data          = get_fields($stockPost->ID);
    $data['id']    = $stockPost->ID;
    $data['title'] = $stockPost->post_title;

    $template_info = false;

    if ($data['table'] || $data['big_text']) {
        ob_start();
        include_once(get_template_directory().'/template-parts/components/popups/info.php');
        $template_info = ob_get_clean();
    }

    ob_start();
	include_once(get_template_directory().'/template-parts/components/popups/order.php');
	$template_order = ob_get_clean();

    $result = [
        'success'   => true,
        'templates' => [
            'info'  => $template_info,
            'order' => $template_order,
        ],
    ];

    echo json_encode($result);
    wp_die();
}

add_action('wp_ajax_stock_create_request'       , 'createRequest');
add_action('wp_ajax_nopriv_stock_create_request', 'createRequest');

function createRequest() {
    if (!$_POST['id'] || !$_POST['name'] || !$_POST['email']) {
        echo json_encode([
            'success' => false,
            'message' => 'Не указаны обязательные праметры.'
        ]);
        wp_die();
    }

    $stockPost = get_post($_POST['id']);

    if (!$stockPost) {
        echo json_encode([
            'success' => false,
            'message' => 'Не найдена акция.'
        ]);
        wp_die();
    }

    $data = [
        'name'    => $_POST['name'],
        'success' => true
    ];

    $request_data = array(
        'post_title'    => 'Заявка на акцию ' . wp_date('j F Y'),
        'post_type'     => 'request',
        'post_status'   => 'pending',
    );

    $request_id = wp_insert_post( $request_data );

    if ( is_wp_error($request_id) ){
        $data['success'] = false;
    }

    update_field('name', $_POST['name'], $request_id);
    update_field('email', $_POST['email'], $request_id);
    update_field('stock', $_POST['id'], $request_id);

    ob_start();
	include_once(get_template_directory().'/template-parts/components/popups/answer.php');
	$template = ob_get_clean();

    $result = [
        'success'  => true,
        'template' => $template
    ];

    echo json_encode($result);
    wp_die();
}


/**
 * Count pending posts.
 */
function wph_pending_posts_indicator($menu) {
    $post_types = get_post_types();
    if(empty($post_types)) {return;}
 
	foreach ($post_types as $type) {
        $status        = 'pending';
        $num_posts     = wp_count_posts($type, 'readable');
        $pending_count = 0;
 
        if(!empty($num_posts->$status)) {
            $pending_count = $num_posts->$status;
        }
 
        if ($type == 'post') {
            $menu_str = 'edit.php';
        } else {
            $menu_str = 'edit.php?post_type='.$type;
        }
 
        foreach ($menu as $menu_key => $menu_data) {
            if ($menu_str != $menu_data[2]) {
                continue;
            } else {
                $menu[$menu_key][0] .= " <span class='update-plugins count-$pending_count'>
                <span class='plugin-count'>" . number_format_i18n($pending_count) . '</span></span>';
            }
        }
    }
    return $menu;
}
add_filter('add_menu_classes', 'wph_pending_posts_indicator');