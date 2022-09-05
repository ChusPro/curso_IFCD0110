<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

require_once (get_stylesheet_directory() . '/inc/settings.php');


// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'green_shop_locale_css' ) ):
    function green_shop_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'green_shop_locale_css' );

if ( !function_exists( 'green_shop_parent_css' ) ):
    function green_shop_parent_css() {
        wp_enqueue_style( 'green_shop_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'green_shop_parent_css', 10 );

// END ENQUEUE PARENT ACTION

add_action( 'customize_register', 'green_shop_customizer_settings' );

function green_shop_customizer_settings( $wp_customize ) {

	global $ecommerce_plus_options;	
	
	$wp_customize->add_section( 'ecommerce_plus_woo_options', array(
		'title'             => esc_html__( 'Shop Page','green-shop' ),
		'description'       => esc_html__( 'WooCommerce plugin related options.', 'green-shop' ),
		'panel'             => 'ecommerce_plus_theme_options_panel',
		'priority'   		=> 6,
	) );

		
	//shop pages 1
	$wp_customize->add_setting('ecommerce_plus_options[before_shop]' , array(
		'default'    		=> $ecommerce_plus_options['before_shop'],
		'sanitize_callback' => 'absint',
		'type'				=>'option',

	));

	$wp_customize->add_control('ecommerce_plus_options[before_shop]' , array(
		'label' 	=> __('Before Shop', 'green-shop' ),
		'section' 	=> 'ecommerce_plus_woo_options',
		'type'		=> 'dropdown-pages',
	) );	

	
	//shop pages 2
	$wp_customize->add_setting('ecommerce_plus_options[after_shop]' , array(
		'default'    		=> $ecommerce_plus_options['after_shop'],
		'sanitize_callback' => 'absint',
		'type'				=>'option',

	));

	$wp_customize->add_control('ecommerce_plus_options[after_shop]' , array(
		'label' => __('After Shop', 'green-shop' ),
		'section' => 'ecommerce_plus_woo_options',
		'type'=> 'dropdown-pages',
	) );
	

	// banner image
	$wp_customize->add_setting( 'ecommerce_plus_options[banner_image]' , 
		array(
			'default' 		=> '',
			'capability'     => 'edit_theme_options',
			'type'				=>'option',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'ecommerce_plus_options[banner_image]' ,
		array(
			'label'         => __( 'Banner Image', 'green-shop' ),
			'description'	=> __('Upload banner image', 'green-shop'),
			'settings'  	=> 'ecommerce_plus_options[banner_image]',
			'section'       => 'ecommerce_plus_header',
		))
	);
	
	//
	$wp_customize->add_setting('ecommerce_plus_options[banner_link]' , array(
		'default'    => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type'				=>'option',
	));
	
	$wp_customize->add_control('ecommerce_plus_options[banner_link]' , array(
		'label'   => __('Banner Image Link', 'green-shop' ),
		'section' => 'ecommerce_plus_header',
		'type'    => 'url',
	) );
	


}// end customizer


/*
 * Banner image
 */
add_action('green_shop_banner', 'green_shop_banner');

function green_shop_banner(){

$green_shop_options  = ecommerce_plus_get_theme_options(); 


	if($green_shop_options['banner_image'] !='') { 
	
	?>
		<section id="top-banner">
			<div class="text-center">
				<?php 
					echo '<a href="'.esc_url($green_shop_options['banner_link']).'" ><img src="'.esc_url($green_shop_options['banner_image']).'" /></a>';	
				?>
			</div>
		</section>
	<?php	
	}

}


if (!function_exists('ecommerce_plus_get_header_style')):

function ecommerce_plus_get_header_style(){

		global $post;
		
		if ($post){
			$style = get_post_meta( $post->ID, 'ecommerce-plus-header-style', true );	
			if ($style == 'shadow') {
				return "box-shadow";
			} elseif ($style == 'border'){
				return "header-border";
			} elseif ($style == 'transparent'){
				return "header-transparent";
			} elseif ($style == 'none'){
				return "header-style-none";	
			} else {
				if(get_option('page_on_front') < 1 ){
					return "header-transparent";
				} else {
					return "box-shadow";
				}			
			}
		} else {
			if(get_option('page_on_front') < 1 ){
				return "header-transparent";
			} else {
				return "box-shadow";
			}
		}
		
	} //end function
endif;


