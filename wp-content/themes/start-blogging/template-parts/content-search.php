<?php
/**
 * The search template for displaying results
 * @package Start_Blogging
 * @version 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( 'post' == get_post_type() && !is_single()) : ?>
	<div class="entry-meta block-post-info">
		<?php start_blogging_posted_on(); ?>
	</div>	
	<?php endif; ?>

	<header class="entry-header">	
		<?php edit_post_link( __( 'Edit This Post', 'start-blogging' ), '<span class="edit-link">', '</span>' ); ?>
		
		<?php
			if( is_sticky() && is_home() && get_theme_mod( 'start_blogging_featured_label', 1 ) )  :	
			$featured = esc_attr__('Featured', 'start-blogging' );
			echo '<span class="featured-post">' . $featured . '</span>';
			endif;
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		?>
	</header>	

	<div class="entry-content">
		<?php 
		$limit = esc_attr(get_theme_mod( 'start_blogging_excerpt_size', '35' ));
		echo start_blogging_custom_excerpts( $limit );	
		 ?>
	</div>

	<footer class="entry-footer">	</footer>
</article>