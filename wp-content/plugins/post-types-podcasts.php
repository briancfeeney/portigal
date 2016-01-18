<?php
/*Plugin Name: Create Podcasts Post Type
Description: This plugin registers the 'Podcasts' post type.
Version: 1.0
License: GPLv2
*/

// register custom post type to work with
function wpmudev2_create_post_type() {
    // set up labels
    $labels = array(
        'name' => 'Podcasts',
        'singular_name' => 'Podcast',
        'add_new' => 'Add New Podcast',
        'add_new_item' => 'Add New Podcast',
        'edit_item' => 'Edit Podcast',
        'new_item' => 'New Podcast',
        'all_items' => 'All Podcasts',
        'view_item' => 'View Podcast',
        'search_items' => 'Search Podcasts',
        'not_found' =>  'No Podcasts Found',
        'not_found_in_trash' => 'No Podcasts found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Podcasts',
    );
    //register post type
    register_post_type( 'Podcast', array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'supports' => array( 'title', 'editor', 'content', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes', 'post_tag', 'category' ),
        'taxonomies' => array('category', 'post_tag'),
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => array( 'slug' => 'podcast' ),
        )
    );

}
add_action( 'init', 'wpmudev2_create_post_type' );

?>
