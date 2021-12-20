<?php

function pretzel_css_js(){
	
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/boostrap/css/bootstrap.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/content/css/font-awesome.min.css', array(), '1.0.0', 'all');
		wp_enqueue_style('rs_menu_default', get_template_directory_uri().'/rs_menu/css/default.css', array(), '1.0.0', 'all');
	wp_enqueue_style('rs_menu_component', get_template_directory_uri().'/rs_menu/css/component.css', array(), '1.0.0', 'all');
	wp_enqueue_style('ken-burns', get_template_directory_uri().'/css/ken-burns.css', array(), '4.7.0', 'all');
	wp_enqueue_style('main_contact', get_template_directory_uri().'/css/main_contact.css', array(), '3.3.7', 'all'); 
	wp_enqueue_style('linearicons', get_template_directory_uri().'/linearicons/icon-font.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style('Animate', get_template_directory_uri().'/css/animate.min.css', array(), '1.0.0', 'all');

	wp_enqueue_style('main',get_template_directory_uri().'/css/main.css', array(), '1.0.0', 'all');
	wp_enqueue_style('Style', get_stylesheet_uri());

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/boostrap/js/bootstrap.min.js',array('jquery'), '1.0.0', true);
	wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('rs_menu_modernizr', get_template_directory_uri().'/rs_menu/js/modernizr.custom.js', array('jquery'), '1.0.0', false);
	wp_enqueue_script('rs_menu_dlmenu', get_template_directory_uri().'/rs_menu/js/jquery.dlmenu.js', array('jquery'), '1.0.0', true);


	wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), '1.1.3', true);


} add_action('wp_enqueue_scripts','pretzel_css_js');






