<?php 
/*Plugin Name: Create Books Post Type
Description: This plugin registers the 'Book' post type.
Version: 1.0
License: GPLv2
*/

// register custom post type to work with
function wpmudev_create_post_type() {
	// set up labels
	$labels = array(
 		'name' => 'Books',
    	'singular_name' => 'Book',
    	'add_new' => 'Add New Book',
    	'add_new_item' => 'Add New Book',
    	'edit_item' => 'Edit Book',
    	'new_item' => 'New Book',
    	'all_items' => 'All Books',
    	'view_item' => 'View Book',
    	'search_items' => 'Search Books',
    	'not_found' =>  'No Books Found',
    	'not_found_in_trash' => 'No Books found in Trash', 
    	'parent_item_colon' => '',
    	'menu_name' => 'Books',
    );
    //register post type
	register_post_type( 'Book', array(
		'labels' => $labels,
		'has_archive' => true,
 		'public' => true,
		'supports' => array( 'title', 'editor', 'content', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes' ),
	
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'Books' ),
		)
	);
}
add_action( 'init', 'wpmudev_create_post_type' );



add_action('init', 'my_rewrite');
function my_rewrite() {
    global $wp_rewrite;
    $wp_rewrite->add_permastruct('typename', 'typename/%year%/%postname%/', true, 1);
    add_rewrite_rule('typename/([0-9]{4})/(.+)/?$', 'index.php?typename=$matches[2]', 'top');
    $wp_rewrite->flush_rules();
}

?>