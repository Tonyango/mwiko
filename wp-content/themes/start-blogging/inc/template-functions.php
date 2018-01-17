
<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 * @package Start_Blogging
 * @version 1.0.0
 */
 

/**
 * Header for page builder blank template
 * Special thanks from the Hestia theme.
 * @since 1.0.0
 * @access public
 */
	function start_blogging_no_content_get_header() {

	?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<?php
}

/**
 * Footer for page builder blank template
 * Special thanks from the Hestia theme.
 * @since 1.0.0
 * @access public
 */
function start_blogging_no_content_get_footer() {
	wp_footer();
	?>
	</body>
	</html>
	<?php
}

/**
 * Add theme support for header and footer.
 * Special thanks from the Hestia theme.
 * @since 1.0.0
 * @access public
 */
function start_blogging_header_footer_support() {
	add_theme_support( 'fl-theme-builder-headers' );
	add_theme_support( 'fl-theme-builder-footers' );
}
add_action( 'after_setup_theme', 'start_blogging_header_footer_support' );


/**
 * Returns true if a blog has more than 1 category.
 * @return bool*/
function start_blogging_categorized_blog() {
	$category_count = get_transient( 'start_blogging_categories' );

	if ( false === $category_count ) {
		// Create an array of all the categories that are attached to posts.
		$categories = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$category_count = count( $categories );

		set_transient( 'start_blogging_categories', $category_count );
	}

	// Allow viewing case of 0 or 1 categories in post preview.
	if ( is_preview() ) {
		return true;
	}

	return $category_count > 1;
}


/**
 * Flush out the transients used in start_blogging_categorized_blog.*/
function start_blogging_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'start_blogging_categories' );
}
add_action( 'edit_category', 'start_blogging_category_transient_flusher' );
add_action( 'save_post',     'start_blogging_category_transient_flusher' );