<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif;
wp_head();	
$green_shop_options  = ecommerce_plus_get_theme_options(); 
?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' ); ?>

<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'green-shop' ); ?></a>
<div class="menu-overlay"></div>

<?php do_action('green_shop_banner'); ?>

	<header id="masthead" class="site-header <?php echo esc_attr(ecommerce_plus_get_header_style()); ?>" role="banner">

		<?php
		
		do_action('ecommerce_plus_top_bar');
		
		//page options layout has heighest priority
		if ($green_shop_options['site_header_layout'] == 'default' && ecommerce_plus_get_header_layout() == 'storefront') {
			$green_shop_options['site_header_layout'] = 'storefront'; 
		}
		
		if ($green_shop_options['site_header_layout'] == 'storefront' && ecommerce_plus_get_header_layout() == 'default') {
			$green_shop_options['site_header_layout'] = 'default'; 
		}
		
		if (!class_exists('WooCommerce')) { 
			$green_shop_options['site_header_layout'] = 'default'; 
		}
				
		if ($green_shop_options['site_header_layout'] == 'default') { ?>					
			<div id="theme-header" class="header-default">
				<div class="container">
					<?php do_action('ecommerce_plus_toggle'); ?>
					<?php do_action('ecommerce_plus_branding'); ?>					
					<?php do_action('ecommerce_plus_navigation'); ?>
				</div>
			</div>			
		
		<?php } elseif ($green_shop_options['site_header_layout'] == 'storefront') { ?>
		
			<div  class="header-storefront">
				<div class="container">

					<div class="row vertical-center">
						<div class="col-md-4 col-sm-12 col-xs-12">
						<?php do_action('ecommerce_plus_branding'); ?>
						</div>
						
						<div class="col-md-5 col-sm-12 col-xs-12 header-search-widget">
							<?php the_widget('ecommerce_plus_product_search_widget'); ?>
						</div>
						
						<div class="col-md-3 col-sm-12 col-xs-12 header-woocommerce-icons">
							<?php the_widget('ecommerce_plus_cart_wishlist_acc_widget'); ?>
						</div>
					</div>
				
				</div>
			</div>
			
			<div id="theme-header" class="header-storefront menu">
				<div class="container">
					<?php do_action('ecommerce_plus_toggle'); ?>
					<?php do_action('ecommerce_plus_navigation'); ?>
				</div>
			</div>		
		
		<?php } ?>
		
</header><!-- #masthead -->

<div id="content" class="site-content">

<?php


if ($green_shop_options['breadcrumb_show']) :

    if(!is_front_page() || (is_home() && get_option('page_on_front') < 1)) {
	
	$green_shop_header_image = $green_shop_options['breadcrumb_image'];

	if ( is_singular() ) :
		$green_shop_header_image = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : $green_shop_header_image;
	endif;
	?>
	
	<div id="page-site-header" class="relative" style="background-image: url('<?php echo esc_url( $green_shop_header_image ); ?>');">
		<div class="overlay"></div>
		<div class="container">
			<header class="page-header">
				<h2 class="page-title"><?php echo esc_html(ecommerce_plus_custom_header_banner_title()); ?></h2>
			</header>
	
			<?php ecommerce_plus_add_breadcrumb(); ?>
		</div><!-- .wrapper -->
	</div><!-- #page-site-header -->
	<?php
	//end header image
	}
endif;

if (class_exists('WooCommerce') && is_shop()) {

?>

<section id="before-shop-page">
	<div>
		<?php
			
		$green_shop_args = array( 'post_type' => 'page', 'ignore_sticky_posts' => 1 , 'post__in' => array($green_shop_options['before_shop']));
		$green_shop_result = new WP_Query($green_shop_args);
		while ( $green_shop_result->have_posts() ) :
			$green_shop_result->the_post();
			the_content();
		endwhile;
		wp_reset_postdata();

		?>
	</div>
</section>

<?php

}