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
     <section>
         <div class="features__wrapper">
             <div class="features__items">
                 <div class="features__items--news"></div>
                 <div class="features__items--events"></div>
                 <div class="features__items--links"></div>
             </div>
         </div>
     </section>
     <!-- End Features Section -->
<?php get_footer(); ?>
