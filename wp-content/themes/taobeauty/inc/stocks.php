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

    ob_start();
	include_once(get_template_directory().'/template-parts/components/popups/info.php');
	$template_info = ob_get_clean();

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