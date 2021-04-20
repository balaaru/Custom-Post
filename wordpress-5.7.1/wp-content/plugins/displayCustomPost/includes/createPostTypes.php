<?php
// Create a News Custom post type
function newsCustomPost() {
  $labels = array(
    'name'               => _x( 'News', 'post type general name' ),
    'singular_name'      => _x( 'News', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'news' ),
    'add_new_item'       => __( 'Add New News' ),
    'edit_item'          => __( 'Edit News' ),
    'new_item'           => __( 'New News' ),
    'all_items'          => __( 'All News' ),
    'view_item'          => __( 'View News' ),
    'search_items'       => __( 'Search News' ),
    'not_found'          => __( 'No News found' ),
    'not_found_in_trash' => __( 'No News found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'News'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'News',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'news', $args );
}
add_action( 'init', 'newsCustomPost' );

// Create a category for the News Custom post type

function newsPostTaxonomies() {
  $labels = array(
    'name'              => _x( 'News Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'News Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search News Categories' ),
    'all_items'         => __( 'All News Categories' ),
    'parent_item'       => __( 'Parent News Category' ),
    'parent_item_colon' => __( 'Parent News Category:' ),
    'edit_item'         => __( 'Edit News Category' ),
    'update_item'       => __( 'Update News Category' ),
    'add_new_item'      => __( 'Add New News Category' ),
    'new_item_name'     => __( 'New News Category' ),
    'menu_name'         => __( 'News Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'news-list', 'news', $args );
}
add_action( 'init', 'newsPostTaxonomies', 0 );

// Create a Reviews Custom post type

function reviewsCustomPost() {
  $labels = array(
    'name'               => _x( 'Reviews', 'post type general name' ),
    'singular_name'      => _x( 'Reviews', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Review' ),
    'add_new_item'       => __( 'Add New Review' ),
    'edit_item'          => __( 'Edit Review' ),
    'new_item'           => __( 'New Review' ),
    'all_items'          => __( 'All Reviews' ),
    'view_item'          => __( 'View Reviews' ),
    'search_items'       => __( 'Search Reviews' ),
    'not_found'          => __( 'No Reviews found' ),
    'not_found_in_trash' => __( 'No Reviews found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Reviews'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Reviews',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'reviews', $args );
}
add_action( 'init', 'reviewsCustomPost' );

// Create a category for the Reviews Custom post type

function reviewsPostTaxonomies() {
  $labels = array(
    'name'              => _x( 'Reviews Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Reviews Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Reviews Categories' ),
    'all_items'         => __( 'All Reviews Categories' ),
    'parent_item'       => __( 'Parent Reviews Category' ),
    'parent_item_colon' => __( 'Parent Reviews Category:' ),
    'edit_item'         => __( 'Edit Reviews Category' ),
    'update_item'       => __( 'Update Reviews Category' ),
    'add_new_item'      => __( 'Add New Reviews Category' ),
    'new_item_name'     => __( 'New Reviews Category' ),
    'menu_name'         => __( 'Reviews Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'reviews-list', 'reviews', $args );
}
add_action( 'init', 'reviewsPostTaxonomies', 0 );

?>