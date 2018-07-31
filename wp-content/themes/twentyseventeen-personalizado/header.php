<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
	<style>
		.efeitoDegrade{
			background: #1793d6;
			background: -moz-linear-gradient(left, #1793d6 0%, #6adfff 100%);
			background: -webkit-gradient(left top, right top, color-stop(0%, #1793d6), color-stop(100%, #6adfff));
			background: -webkit-linear-gradient(left, #1793d6 0%, #6adfff 100%);
			background: -o-linear-gradient(left, #1793d6 0%, #6adfff 100%);
			background: -ms-linear-gradient(left, #1793d6 0%, #6adfff 100%);
			background: linear-gradient(to right, #1793d6 0%, #6adfff 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1793d6', endColorstr='#6adfff', GradientType=1 );
		}

		.tituloPost {
			background-image: url('img/titulobg.png');
			text-align: center;
			display: table-cell;
			vertical-align: middle;
			width: 210px;
			height: 75px;
		}

		@font-face {
		  font-family: BurbankBigCondensed-Black;
		  src: url("font/fonte.woff") type
		}
	</style>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>
	<div class="site-content-contain">
		<!--<div class="efeitoDegrade"><p style="text-align: center; color: #fff"> Colocar texto aqui</p></div>-->
		<div id="content" class="site-content">
