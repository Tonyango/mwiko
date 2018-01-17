<?php
/**
 * Template Name: Page Builder Blank
 *
 * The template for the page builder blank.
 *
 * @package Start_Blogging
 * @version 1.0.0
 */ 
 ?>

<?php
start_blogging_no_content_get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'pagebuilder' );
	endwhile;
endif;

start_blogging_no_content_get_footer();
