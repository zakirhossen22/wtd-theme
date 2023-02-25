<?php

// __-style-function__-//
function wtd_scripts() {
       wp_enqueue_style( 'main-css', get_template_directory_uri() . '/asset/css/style.css', array(), '1.0.0', 'all' );
       
       wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/asset/css/responsive.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'wtd_scripts' );

// __-register-nav menu-function__-//
function wtd_setup(){


       load_theme_textdomain('wtd');
       add_theme_support( 'title-tag' );
       add_theme_support( 'post-thumbnails', array('post','events'));


       register_nav_menus(array(
              'main-menu'=> __('Main menu', 'wtd')
       ));
       
}
add_action( 'after_setup_theme', 'wtd_setup');

// __-register-sidebar-function__-//
function wtd_widgets() {
       register_sidebar( array(
           'name'          => __( 'Main Sidebar', 'wtd' ),
           'id'            => 'sidebar-1',
           'description'   => __( 'Our Main Sidebar', 'wtd' ),
           'after_widget'  => '</div>',
           'before_title'  => '<h3>',
           'after_title'   => '</h3>',
       ) );
   }
add_action( 'widgets_init', 'wtd_widgets' );

//__custom-post-Events-function__//
function wtd_cpt(){
$labels = array(
       'name'                  => __( 'Events', 'Post type general name', 'Event' ),
       'singular_name'         => __( 'Event', 'Post type singular name', 'Event' ),
       'menu_name'             => __( 'Events', 'Admin Menu text', 'Event' ),
       'name_admin_bar'        => __( 'Event', 'Add New on Toolbar', 'Event' ),
       'add_new'               => __( 'Add New Event', 'Event' ),
       'add_new_item'          => __( 'Add New Event', 'Event' ),
       'new_item'              => __( 'New Event', 'Event' ),
       'edit_item'             => __( 'Edit Event', 'Event' ),
       'view_item'             => __( 'View Event', 'Event' ),
       'all_items'             => __( 'All Events', 'Event' ),
       'search_items'          => __( 'Search Events', 'Event' ),
       'parent_item_colon'     => __( 'Parent Events:', 'Event' ),
       'not_found'             => __( 'No Events found.', 'Event' ),
       'not_found_in_trash'    => __( 'No Events found in Trash.', 'Event' ),
       'featured_image'        => __( 'Event Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'Event' ),
       'set_featured_image'    => __( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'Event' ),
       'remove_featured_image' => __( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'Event' ),
       'use_featured_image'    => __( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'Event' ),
       'archives'              => __( 'Event archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Event' ),
       'insert_into_item'      => __( 'Insert into Event', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Event' ),
       'uploaded_to_this_item' => __( 'Uploaded to this Event', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Event' ),
       'filter_items_list'     => __( 'Filter Events list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Event' ),
       'items_list_navigation' => __( 'Events list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Event' ),
       'items_list'            => __( 'Events list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'Event' ),
   );     
   $args = array(
       'labels'             => $labels,
       'description'        => 'Event custom post type.',
       'public'             => true,
       'publicly_queryable' => true,
       'show_ui'            => true,
       'show_in_menu'       => true,
       'query_var'          => true,
       'rewrite'            => array( 'slug' => 'Event' ),
       'capability_type'    => 'post',
       'has_archive'        => true,
       'hierarchical'       => false,
       'menu_position'      => 20,
       'supports'           => array( 'title', 'editor', 'author', 'thumbnail','excerpt' ),
       'taxonomies'         => array( 'category', 'post_tag' ),
       'show_in_rest'       => false
   );
     
   register_post_type( 'Events', $args );
}
add_action( 'init', 'wtd_cpt' );
