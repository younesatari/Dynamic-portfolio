<?php
/* Adding custom thumbnail Support */ 
add_theme_support( 'post-thumbnails' );

/* Adding custom logo support */
add_theme_support( 'custom-logo' );

/* Loading Scripts */
function load_scripts() {
   wp_enqueue_style('style', get_stylesheet_uri());
   wp_enqueue_style('mainStyle', get_theme_file_uri('/css/main.css'));
   wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.css'));
   wp_enqueue_style('fontAwesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css');
   wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', NULL, '1.0',true);
   wp_enqueue_script('script', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', NULL, '1.1',true);
   wp_enqueue_script('bootstrapScript', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', NULL, '1.2',true);
}

add_action('wp_enqueue_scripts','load_scripts');

/* Register Nav Menu */
function register_menus() {
   register_nav_menu('headerMenu', 'header nav menu');
}

add_action('init', 'register_menus');

function add_project_post_type() {
   $labels = array(
       'name'                  => _x( 'Projects', 'Post type general name', 'textdomain' ),
       'singular_name'         => _x( 'Project', 'Post type singular name', 'textdomain' ),
       'menu_name'             => _x( 'Projects', 'Admin Menu text', 'textdomain' ),
       'name_admin_bar'        => _x( 'Project', 'Add New on Toolbar', 'textdomain' ),
       'add_new'               => __( 'Add New', 'textdomain' ),
       'add_new_item'          => __( 'Add New Project', 'textdomain' ),
       'new_item'              => __( 'New Project', 'textdomain' ),
       'edit_item'             => __( 'Edit Project', 'textdomain' ),
       'view_item'             => __( 'View Project', 'textdomain' ),
       'all_items'             => __( 'All Projects', 'textdomain' ),
       'search_items'          => __( 'Search Projects', 'textdomain' ),
       'parent_item_colon'     => __( 'Parent Projects:', 'textdomain' ),
       'not_found'             => __( 'No Projects found.', 'textdomain' ),
       'not_found_in_trash'    => __( 'No Projects found in Trash.', 'textdomain' ),
       'featured_image'        => _x( 'Project Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
       'set_featured_image'    => _x( 'Set project image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
       'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
       'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
       'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
       'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
       'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
       'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
       'items_list_navigation' => _x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
       'items_list'            => _x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
   );

   $args = array(
       'labels'             => $labels,
       'public'             => true,
       'publicly_queryable' => true,
       'show_ui'            => true,
       'show_in_menu'       => true,
       'query_var'          => true,
       'menu_icon'           => 'dashicons-admin-generic',
       'rewrite'            => array( 'slug' => 'project' ),
       'capability_type'    => 'post',
       'has_archive'        => true,
       'hierarchical'       => false,
       'menu_position'      => null,
       'taxonomies'          => array( 'category' ),
       'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
   );

   register_post_type( 'projects', $args );
}

add_action( 'init', 'add_project_post_type' );

function themename_custom_logo_setup() {
   $defaults = array(
       'width'                => 37,
       'flex-height'          => true,
       'flex-width'           => true,
       'header-text'          => array( 'site-title', 'site-description' ),
       'unlink-homepage-logo' => true, 
   );

   add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

