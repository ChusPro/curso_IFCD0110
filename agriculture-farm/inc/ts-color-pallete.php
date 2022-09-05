<?php
	
	/*---------------------------Width Layout -------------------*/
	$agriculture_farm_theme_lay = get_theme_mod( 'agriculture_farm_theme_options','Default');
    if($agriculture_farm_theme_lay == 'Default'){
		$agriculture_farm_custom_css .='body{';
			$agriculture_farm_custom_css .='max-width: 100%;';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_theme_lay == 'Container'){
		$agriculture_farm_custom_css .='body{';
			$agriculture_farm_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$agriculture_farm_custom_css .='}';
		$agriculture_farm_custom_css .='.serach_outer{';
			$agriculture_farm_custom_css .='width: 97.7%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_theme_lay == 'Box Container'){
		$agriculture_farm_custom_css .='body{';
			$agriculture_farm_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$agriculture_farm_custom_css .='}';
		$agriculture_farm_custom_css .='.serach_outer{';
			$agriculture_farm_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0';
		$agriculture_farm_custom_css .='}';
		$agriculture_farm_custom_css .='.page-template-custom-front-page #header{';
			$agriculture_farm_custom_css .='right:0;';
		$agriculture_farm_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$agriculture_farm_theme_lay = get_theme_mod( 'agriculture_farm_slider_image_opacity','0.5');
	if($agriculture_farm_theme_lay == '0'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.1'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.1';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.2'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.2';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.3'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.3';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.4'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.4';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.5'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.5';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.6'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.6';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.7'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.7';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.8'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.8';
		$agriculture_farm_custom_css .='}';
		}else if($agriculture_farm_theme_lay == '0.9'){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:0.9';
		$agriculture_farm_custom_css .='}';
	}

	$agriculture_farm_slider_hide = get_theme_mod('agriculture_farm_slider_hide', false);
	if($agriculture_farm_slider_hide == false){
		$agriculture_farm_custom_css .='.page-template-custom-front-page #header{';
			$agriculture_farm_custom_css .='position: static; background: #e3e8e9; padding: 10px 0;';
		$agriculture_farm_custom_css .='}';
		$agriculture_farm_custom_css .='#home-services{';
			$agriculture_farm_custom_css .='position: static; margin: 30px 0 0 0';
		$agriculture_farm_custom_css .='}';
	}

	/*------------- Button Settings option-------------------*/
	$agriculture_farm_button_padding_top_bottom = get_theme_mod('agriculture_farm_button_padding_top_bottom');
	$agriculture_farm_button_padding_left_right = get_theme_mod('agriculture_farm_button_padding_left_right');
	$agriculture_farm_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .read-btn a, #comments .form-submit input[type="submit"],#category .explore-btn a{';
		$agriculture_farm_custom_css .='padding-top: '.esc_attr($agriculture_farm_button_padding_top_bottom).'px !important; padding-bottom: '.esc_attr($agriculture_farm_button_padding_top_bottom).'px !important; padding-left: '.esc_attr($agriculture_farm_button_padding_left_right).'px !important; padding-right: '.esc_attr($agriculture_farm_button_padding_left_right).'px !important; display:inline-block;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_button_border_radius = get_theme_mod('agriculture_farm_button_border_radius');
	$agriculture_farm_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .read-btn a, #comments .form-submit input[type="submit"], #category .explore-btn a{';
		$agriculture_farm_custom_css .='border-radius: '.esc_attr($agriculture_farm_button_border_radius).'px;';
	$agriculture_farm_custom_css .='}';

	/*------------------ Skin Option  -------------------*/
	$agriculture_farm_theme_lay = get_theme_mod( 'agriculture_farm_background_skin_mode','Transparent Background');
    if($agriculture_farm_theme_lay == 'With Background'){
		$agriculture_farm_custom_css .='.page-box, #sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .noresult-content{';
			$agriculture_farm_custom_css .='background-color: #fff;';
		$agriculture_farm_custom_css .='}';
	}else if($agriculture_farm_theme_lay == 'Transparent Background'){
		$agriculture_farm_custom_css .='.page-box-single{';
			$agriculture_farm_custom_css .='background-color: transparent;';
		$agriculture_farm_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$agriculture_farm_top_bottom_product_button_padding = get_theme_mod('agriculture_farm_top_bottom_product_button_padding', 10);
	$agriculture_farm_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$agriculture_farm_custom_css .='padding-top: '.esc_attr($agriculture_farm_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($agriculture_farm_top_bottom_product_button_padding).'px;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_left_right_product_button_padding = get_theme_mod('agriculture_farm_left_right_product_button_padding', 16);
	$agriculture_farm_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$agriculture_farm_custom_css .='padding-left: '.esc_attr($agriculture_farm_left_right_product_button_padding).'px; padding-right: '.esc_attr($agriculture_farm_left_right_product_button_padding).'px;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_product_button_border_radius = get_theme_mod('agriculture_farm_product_button_border_radius', 0);
	$agriculture_farm_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$agriculture_farm_custom_css .='border-radius: '.esc_attr($agriculture_farm_product_button_border_radius).'px;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_show_related_products = get_theme_mod('agriculture_farm_show_related_products',true);
	if($agriculture_farm_show_related_products == false){
		$agriculture_farm_custom_css .='.related.products{';
			$agriculture_farm_custom_css .='display: none;';
		$agriculture_farm_custom_css .='}';
	}

	$agriculture_farm_show_wooproducts_border = get_theme_mod('agriculture_farm_show_wooproducts_border', false);
	if($agriculture_farm_show_wooproducts_border == true){
		$agriculture_farm_custom_css .='.products li{';
			$agriculture_farm_custom_css .='border: 1px solid #767676;';
		$agriculture_farm_custom_css .='}';
	}

	$agriculture_farm_top_bottom_wooproducts_padding = get_theme_mod('agriculture_farm_top_bottom_wooproducts_padding',0);
	$agriculture_farm_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$agriculture_farm_custom_css .='padding-top: '.esc_attr($agriculture_farm_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($agriculture_farm_top_bottom_wooproducts_padding).'px !important;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_left_right_wooproducts_padding = get_theme_mod('agriculture_farm_left_right_wooproducts_padding',0);
	$agriculture_farm_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$agriculture_farm_custom_css .='padding-left: '.esc_attr($agriculture_farm_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($agriculture_farm_left_right_wooproducts_padding).'px !important;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_wooproducts_border_radius = get_theme_mod('agriculture_farm_wooproducts_border_radius',0);
	$agriculture_farm_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$agriculture_farm_custom_css .='border-radius: '.esc_attr($agriculture_farm_wooproducts_border_radius).'px;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_wooproducts_box_shadow = get_theme_mod('agriculture_farm_wooproducts_box_shadow',0);
	$agriculture_farm_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$agriculture_farm_custom_css .='box-shadow: '.esc_attr($agriculture_farm_wooproducts_box_shadow).'px '.esc_attr($agriculture_farm_wooproducts_box_shadow).'px '.esc_attr($agriculture_farm_wooproducts_box_shadow).'px #e4e4e4;';
	$agriculture_farm_custom_css .='}';

	/*-------------- Footer Text -------------------*/
	$agriculture_farm_copyright_content_align = get_theme_mod('agriculture_farm_copyright_content_align');
	if($agriculture_farm_copyright_content_align != false){
		$agriculture_farm_custom_css .='.copyright{';
			$agriculture_farm_custom_css .='text-align: '.esc_attr($agriculture_farm_copyright_content_align).';';
		$agriculture_farm_custom_css .='}';
	}

	$agriculture_farm_footer_content_font_size = get_theme_mod('agriculture_farm_footer_content_font_size', 16);
	$agriculture_farm_custom_css .='.copyright p{';
		$agriculture_farm_custom_css .='font-size: '.esc_attr($agriculture_farm_footer_content_font_size).'px;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_copyright_padding = get_theme_mod('agriculture_farm_copyright_padding', 15);
	$agriculture_farm_custom_css .='.copyright{';
		$agriculture_farm_custom_css .='padding-top: '.esc_attr($agriculture_farm_copyright_padding).'px; padding-bottom: '.esc_attr($agriculture_farm_copyright_padding).'px;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_footer_widget_bg_color = get_theme_mod('agriculture_farm_footer_widget_bg_color');
	$agriculture_farm_custom_css .='#footer{';
		$agriculture_farm_custom_css .='background-color: '.esc_attr($agriculture_farm_footer_widget_bg_color).';';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_footer_widget_bg_image = get_theme_mod('agriculture_farm_footer_widget_bg_image');
	if($agriculture_farm_footer_widget_bg_image != false){
		$agriculture_farm_custom_css .='#footer{';
			$agriculture_farm_custom_css .='background: url('.esc_attr($agriculture_farm_footer_widget_bg_image).');';
		$agriculture_farm_custom_css .='}';
	}

	// scroll to top
	$agriculture_farm_scroll_font_size_icon = get_theme_mod('agriculture_farm_scroll_font_size_icon', 22);
	$agriculture_farm_custom_css .='#scroll-top .fas{';
		$agriculture_farm_custom_css .='font-size: '.esc_attr($agriculture_farm_scroll_font_size_icon).'px;';
	$agriculture_farm_custom_css .='}';

	// Slider Height 
	$agriculture_farm_slider_image_height = get_theme_mod('agriculture_farm_slider_image_height');
	$agriculture_farm_custom_css .='#slider img{';
		$agriculture_farm_custom_css .='height: '.esc_attr($agriculture_farm_slider_image_height).'px;';
	$agriculture_farm_custom_css .='}';

	// Display Blog Post 
	$agriculture_farm_display_blog_page_post = get_theme_mod( 'agriculture_farm_display_blog_page_post','In Box');
    if($agriculture_farm_display_blog_page_post == 'Without Box'){
		$agriculture_farm_custom_css .='.page-box{';
			$agriculture_farm_custom_css .='border:none; margin:25px 0;';
		$agriculture_farm_custom_css .='}';
	}

	// slider overlay
	$agriculture_farm_slider_overlay = get_theme_mod('agriculture_farm_slider_overlay', true);
	if($agriculture_farm_slider_overlay == false){
		$agriculture_farm_custom_css .='#slider img{';
			$agriculture_farm_custom_css .='opacity:1;';
		$agriculture_farm_custom_css .='}';
	} 
	$agriculture_farm_slider_image_overlay_color = get_theme_mod('agriculture_farm_slider_image_overlay_color', true);
	if($agriculture_farm_slider_overlay != false){
		$agriculture_farm_custom_css .='#slider{';
			$agriculture_farm_custom_css .='background-color: '.esc_attr($agriculture_farm_slider_image_overlay_color).';';
		$agriculture_farm_custom_css .='}';
	}

	// site title and tagline font size option
	$agriculture_farm_site_title_size_option = get_theme_mod('agriculture_farm_site_title_size_option', 30);{
	$agriculture_farm_custom_css .='.logo h1 a, .logo p a{';
	$agriculture_farm_custom_css .='font-size: '.esc_attr($agriculture_farm_site_title_size_option).'px;';
		$agriculture_farm_custom_css .='}';
	}

	$agriculture_farm_site_tagline_size_option = get_theme_mod('agriculture_farm_site_tagline_size_option', 12);{
	$agriculture_farm_custom_css .='.logo p{';
	$agriculture_farm_custom_css .='font-size: '.esc_attr($agriculture_farm_site_tagline_size_option).'px !important;';
		$agriculture_farm_custom_css .='}';
	}

	// woocommerce product sale settings
	$agriculture_farm_border_radius_product_sale = get_theme_mod('agriculture_farm_border_radius_product_sale',0);
	$agriculture_farm_custom_css .='.woocommerce span.onsale {';
		$agriculture_farm_custom_css .='border-radius: '.esc_attr($agriculture_farm_border_radius_product_sale).'px;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_align_product_sale = get_theme_mod('agriculture_farm_align_product_sale', 'Right');
	if($agriculture_farm_align_product_sale == 'Right' ){
		$agriculture_farm_custom_css .='.woocommerce ul.products li.product .onsale{';
			$agriculture_farm_custom_css .=' left:auto; right:0;';
		$agriculture_farm_custom_css .='}';
	}elseif($agriculture_farm_align_product_sale == 'Left' ){
		$agriculture_farm_custom_css .='.woocommerce ul.products li.product .onsale{';
			$agriculture_farm_custom_css .=' left:0; right:auto;';
		$agriculture_farm_custom_css .='}';
	}

	$agriculture_farm_product_sale_font_size = get_theme_mod('agriculture_farm_product_sale_font_size',14);
	$agriculture_farm_custom_css .='.woocommerce span.onsale{';
		$agriculture_farm_custom_css .='font-size: '.esc_attr($agriculture_farm_product_sale_font_size).'px;';
	$agriculture_farm_custom_css .='}';

	// preloader background option
	$agriculture_farm_loader_background_color_settings = get_theme_mod('agriculture_farm_loader_background_color_settings');
	$agriculture_farm_custom_css .='#loader-wrapper .loader-section{';
		$agriculture_farm_custom_css .='background-color: '.esc_attr($agriculture_farm_loader_background_color_settings).';';
	$agriculture_farm_custom_css .='} ';

	// woocommerce Product Navigation
	$agriculture_farm_products_navigation = get_theme_mod('agriculture_farm_products_navigation', 'Yes');
	if($agriculture_farm_products_navigation == 'No'){
		$agriculture_farm_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$agriculture_farm_custom_css .='display: none;';
		$agriculture_farm_custom_css .='}';
	}

	// featured image setting
	$agriculture_farm_featured_img_border_radius = get_theme_mod('agriculture_farm_featured_img_border_radius', 0);
	$agriculture_farm_custom_css .='.our-services img, .box-img img{';
		$agriculture_farm_custom_css .='border-radius: '.esc_attr($agriculture_farm_featured_img_border_radius).'px;';
	$agriculture_farm_custom_css .='}';

	$agriculture_farm_featured_img_box_shadow = get_theme_mod('agriculture_farm_featured_img_box_shadow',0);
	$agriculture_farm_custom_css .='.our-services img, .page-box-single img{';
		$agriculture_farm_custom_css .='box-shadow: '.esc_attr($agriculture_farm_featured_img_box_shadow).'px '.esc_attr($agriculture_farm_featured_img_box_shadow).'px '.esc_attr($agriculture_farm_featured_img_box_shadow).'px #ccc;';
	$agriculture_farm_custom_css .='}';

	// slider top and bottom padding
	$agriculture_farm_top_bottom_slider_content_space = get_theme_mod('agriculture_farm_top_bottom_slider_content_space');
	$agriculture_farm_left_right_slider_content_space = get_theme_mod('agriculture_farm_left_right_slider_content_space');
	$agriculture_farm_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .know-btn{';
		$agriculture_farm_custom_css .='top: '.esc_attr($agriculture_farm_top_bottom_slider_content_space).'%; bottom: '.esc_attr($agriculture_farm_top_bottom_slider_content_space).'%;left: '.esc_attr($agriculture_farm_left_right_slider_content_space).'%;right: '.esc_attr($agriculture_farm_left_right_slider_content_space).'%;';
	$agriculture_farm_custom_css .='}';

	// responsive media
	$agriculture_farm_slider = get_theme_mod( 'agriculture_farm_responsive_slider',false);
	if($agriculture_farm_slider == true && get_theme_mod( 'agriculture_farm_slider_hide', false) == false){
    	$agriculture_farm_custom_css .='#slider{';
			$agriculture_farm_custom_css .='display:none;';
		$agriculture_farm_custom_css .='} ';
	}
    if($agriculture_farm_slider == true){
    	$agriculture_farm_custom_css .='@media screen and (max-width:575px) {';
		$agriculture_farm_custom_css .='#slider{';
			$agriculture_farm_custom_css .='display:block;';
		$agriculture_farm_custom_css .='} }';
	}else if($agriculture_farm_slider == false){
		$agriculture_farm_custom_css .='@media screen and (max-width:575px) {';
		$agriculture_farm_custom_css .='#slider{';
			$agriculture_farm_custom_css .='display:none;';
		$agriculture_farm_custom_css .='} }';
	}

	$agriculture_farm_slider = get_theme_mod( 'agriculture_farm_responsive_scroll',true);
	if($agriculture_farm_slider == true && get_theme_mod( 'agriculture_farm_enable_disable_scroll', true) == false){
    	$agriculture_farm_custom_css .='#scroll-top{';
			$agriculture_farm_custom_css .='visibility: hidden !important;';
		$agriculture_farm_custom_css .='} ';
	}
    if($agriculture_farm_slider == true){
    	$agriculture_farm_custom_css .='@media screen and (max-width:575px) {';
		$agriculture_farm_custom_css .='#scroll-top{';
			$agriculture_farm_custom_css .='visibility: visible !important;';
		$agriculture_farm_custom_css .='} }';
	}else if($agriculture_farm_slider == false){
		$agriculture_farm_custom_css .='@media screen and (max-width:575px) {';
		$agriculture_farm_custom_css .='#scroll-top{';
			$agriculture_farm_custom_css .='visibility: hidden !important;';
		$agriculture_farm_custom_css .='} }';
	}