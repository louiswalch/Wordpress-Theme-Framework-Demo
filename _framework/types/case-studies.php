<?php

// ---------------------------------------------------------------------------
// Custom Post Type : Case Studies
// Values: https://codex.wordpress.org/Function_Reference/register_post_type

add_action( 'init', function() {

    $singular   = 'Case Study';
    $plural     = 'Case Studies';
    $slug       = 'case-studies';

    $labels     = array(
        'name'                  => $plural,
        'singular_name'         => $singular,
        'menu_name'             => $plural,
        'name_admin_bar'        => $singular,
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New '.$singular,
        'new_item'              => 'New '.$singular, 
        'edit_item'             => 'Edit '.$singular, 
        'view_item'             => 'View '.$singular, 
        'all_items'             => 'All '.$plural, 
        'search_items'          => 'Search '.$plural, 
        'parent_item_colon'     => 'Parent '.$plural.':',
    );


    $args = array(
        'label'                 => $plural,
        'labels'                => $labels,
        'description'           => '',
        'public'                => true,
        'show_ui'               => true,
        'menu_position'         => 10,                      // null : Default, 5 : Below Posts, 10 : Below Media, 15 : Below Links, 20 : Below Pages, 25 : Below comments, 60 : Below first separator, 65 : Below Plugins, 70 : Below Users, 75 : Below Tools, 80 : Below Settings, 100 : Below second separator
        'has_archive'           => false,
        'show_in_menu'          => true,
        'menu_icon'             => 'dashicons-images-alt2', // https://developer.wordpress.org/resource/dashicons/
        'capability_type'       => 'post',
        'map_meta_cap'          => true,
        'hierarchical'          => false,
        'rewrite'               => array('slug' => $slug, 'with_front' => true),    
        'supports'              => array('title', 'editor', 'thumbnail'),     // 'title', 'editor', revisions', 'thumbnail', 'page-attributes', 'post-formats'
        );

    register_post_type($slug, $args );

});

