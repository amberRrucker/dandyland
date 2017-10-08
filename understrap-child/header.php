<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">
	
	<?php if(is_front_page()): ?>

	<header class="hero">
		<div class="hero-imgWrapper">
			<div class="hero-img">&nbsp;</div>
		</div>
	</header>
	
	<?php else : ?>
	
	<header class="heroInterior">
		<div class="heroInterior-imgWrapper">
			<div class="heroInterior-img">&nbsp;</div>
		</div>
		<div class="container">
			<div class="navBack">
				<a class="navBack-text" href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back to Homepage</a>
			</div>
		</div>
	</header>
	

	<?php endif; ?>