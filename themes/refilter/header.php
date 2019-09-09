<?php
/**
 * The header for our theme.
 *
 * @package Refilter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<?php wp_head(); ?>
	<style>
		.landing {
			background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat center center/cover;
		}

		.wavy-testimonial {
			background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php the_field('wavy_testimonial_image'); ?>') no-repeat center center/cover;
		}	
		
		.wavy-newsletter {
			background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php the_field('newsletter_image'); ?>') no-repeat center center/cover;
		}		
	</style>
	</head>

	<body <?php body_class(); ?>>
		<main id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<nav id="site-navigation" class="main-navigation container" role="navigation">
					<section class="site-branding">
						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					</section><!-- .site-branding -->
					<section class="nav-right">
					<section class="navbar-btn">
					<a class="btn green-full" href="#">Get Involved</a>	
					</section>			
						<button class="menu-toggle navbar-hamburger" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'hamburger' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</section>
					</nav><!-- #site-navigation -->	
				</header><!-- #masthead -->

			<main id="content" class="site-content">
