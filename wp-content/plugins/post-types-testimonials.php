<?php
/*Plugin Name: Create Testimonials Post Type
Description: This plugin registers the 'Testimonial' post type.
Version: 1.0
License: GPLv2
*/

// register custom post type to work with
function wpmudev2_create_post_type() {
    // set up labels
    $labels = array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'add_new' => 'Add New Testimonial',
        'add_new_item' => 'Add New Testimonial',
        'edit_item' => 'Edit Testimonial',
        'new_item' => 'New Testimonial',
        'all_items' => 'All Testimonials',
        'view_item' => 'View Testimonial',
        'search_items' => 'Search Testimonials',
        'not_found' =>  'No Testimonials Found',
        'not_found_in_trash' => 'No Testimonials found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Testimonials',
    );
    //register post type
    register_post_type( 'Testimonial', array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'supports' => array( 'title', 'editor', 'content', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes' ),
    
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => array( 'slug' => 'Testimonials' ),
        )
    );
}
add_action( 'init', 'wpmudev2_create_post_type' );

add_action('init', 'my_rewrite');
function my_rewrite() {
    global $wp_rewrite;
    $wp_rewrite->add_permastruct('typename', 'typename/%year%/%postname%/', true, 1);
    add_rewrite_rule('typename/([0-9]{4})/(.+)/?$', 'index.php?typename=$matches[2]', 'top');
    $wp_rewrite->flush_rules();
}
?>
