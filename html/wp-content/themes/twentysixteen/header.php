<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div>
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header site-inner" role="banner">
			<div class="site-header-main">
				<div class="site-branding">
					<?php twentysixteen_the_custom_logo(); ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
					<div class="social_wrapper"> 

						<div>

							<a href="<?php echo esc_url( home_url( '/vi/' ) ); ?>"><img style="width: 25px;" src="<?php echo esc_url( home_url( '/' ) ); ?>../wp-content/uploads/2016/08/1472393531_Flag_of_Vietnam.png"></a>
							
							<a href="<?php echo esc_url( home_url( '/en/' ) ); ?>"><img style="width: 25px;"  src="<?php echo esc_url( home_url( '/' ) ); ?>../wp-content/uploads/2016/08/1472393634_Flag_of_United_Kingdom.png"></a>
							<a href="https://www.facebook.com/MamNonKoalaHouse/"><img style="width: 25px;"  src="<?php echo esc_url( home_url( '/' ) ); ?>../wp-content/uploads/2016/08/1472393468_facebook_circle_color.png"></a>
						</div>

							<?php get_search_form(); ?>
					</div>
				</div><!-- .site-branding -->

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?>

				<div class="headerslider"> <?php echo do_shortcode('[sp_responsiveslider design="design-3" first_slide="1"  effect="fade" pagination="true" navigation="true"speed="3000" autoplay="true" autoplay_interval="3000"]'); ?>
				</div>
			</div><!-- .site-header-main -->

		</header><!-- .site-header width="1024" height="300" -->		
		
	<div id="content" class="site-content site-inner">
