<?php
 /* 
 	Template name: Home Page  
 	Template Post Type: post, page, price
 */
 ?>
<?php get_header(); ?>
	<?php get_template_part( 'parts/about' );?>
	<?php get_template_part( 'parts/experiences' );?>
	<?php get_template_part( 'parts/services' );?>
	<?php get_template_part( 'parts/work' );?>
	<?php get_template_part( 'parts/facts' );?>
	<?php get_template_part( 'parts/price' );?>
	<?php get_template_part( 'parts/testimonials' );?>
	<?php get_template_part( 'parts/contact' );?>		
<?php get_footer(); ?>
