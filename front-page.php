<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Institute
 */

?>
<?php get_header(); ?>
	 <!-- Hero Section -->
	<?php get_template_part( 'template-parts/content', 'hero' ); ?>
	 <!-- End Hero Section -->
	<!-- Search Section -->
	<?php get_template_part( 'template-parts/content', 'searchstrip' ); ?>
	<!-- End Search Section -->
	<!-- Features Section -->
	<?php get_template_part( 'template-parts/content', 'features' ); ?>
	<!-- End Features Section -->
	<!-- Quote Section -->
	<?php get_template_part( 'template-parts/content', 'quote' ); ?>
	<!-- End Quote Section -->
	<!-- Student Block Section -->
	<?php get_template_part( 'template-parts/content', 'sblock' ); ?>
	<!-- Student Block Section -->
<?php get_footer(); ?>
