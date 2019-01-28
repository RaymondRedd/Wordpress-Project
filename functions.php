<?php 

function learningWordpress_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningWordpress_resources');

register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu'),
));

add_theme_support( 'custom-logo' );

//Customize excerpt word count length

function custom_excerpt_length() {
	return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Add featured image support
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 800, 800);

// Add Our widget Locations

function ourWidgetsInit() {

	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1'
	));

		register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer1'
	));

}

add_action('widgets_init', 'ourWidgetsInit');

function showMessagesToAdmin() {
	include_once(ABSPATH.'wp-admin/includes/plugin.php');

	if(is_plugin_active('easing-slider.php')) {
		echo '<div id="alert" class="error">';
		echo '<p>This theme requires to install easing slider.</p>';
		echo '</div>';
	}
}

add_action('admin_notices', 'showMessagesToAdmins');

function custom_post_type() {

		$labels = array(
			'name' => 'Portfolio',
			'singular_name' => 'Portfolio',
			'add_new' => 'Add Item',
			'all_items' => 'All items',
			'add_new_item' => 'Add Item',
			'edit_item' => 'Edit Item',
			'new_item' => 'New Item',
			'view_item' => 'View Item',
			'search_item' => 'Search Portfolio',
			'not_found' => 'No items found',
			'not_found_in_trash' => 'No items found in trash',
			'parent_item_colon' => 'Parent Item'
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',
				'custom-fields',
			),
			'taxonomies' => array('category', 'post_tag'),
			'menu_position' => 5,
			'exclude_from_search' => false
		);

		register_post_type( 'portfolio', $args);

}

add_action('init', 'custom_post_type');

?>
