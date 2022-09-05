<?php

add_filter('ecommerce_plus_default_theme_options', 'green_shop_default_settings');

function green_shop_default_settings($ecommerce_plus_default_options){
		
		
	$ecommerce_plus_default_options['primary_color'] = '#2ed500';
	$ecommerce_plus_default_options['accent_color'] = '#269707';
	
	$ecommerce_plus_default_options['site_header_layout'] = 'default';
	
	$ecommerce_plus_default_options['header_title_color'] = '#115b02';
	
	$ecommerce_plus_default_options['store_menu_color'] = '#f5fff5';
	$ecommerce_plus_default_options['store_menubar_color'] = '#41ca1b';
	
	$ecommerce_plus_default_options['menubar_border_height'] = 0;

	$ecommerce_plus_default_options['heading_font'] = 'Google Sans';	
	$ecommerce_plus_default_options['body_font'] = 'Google Sans';	
	
	$ecommerce_plus_default_options['header_title_color'] = '#269508';
	
	$ecommerce_plus_default_options['before_shop'] = 0;
	$ecommerce_plus_default_options['after_shop'] = 0;
	
	$ecommerce_plus_default_options['footer_bg_color'] = '#2ed5007a';
	$ecommerce_plus_default_options['topbar_login_label'] = esc_html__('Contact', 'green-shop');
	
	$ecommerce_plus_default_options['breadcrumb_image'] = get_stylesheet_directory_uri().'/images/breadcrumb.jpg';
	
	$ecommerce_plus_default_options['topbar_login_register_enable'] = true;

	
	return $ecommerce_plus_default_options;
}
