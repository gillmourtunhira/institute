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
    
    <?php  get_template_part( 'template-parts/content', 'hero' );  ?>
    <!-- Search Section -->
    <section></section>
    <!-- End Search Section -->
<?php get_footer(); ?>
