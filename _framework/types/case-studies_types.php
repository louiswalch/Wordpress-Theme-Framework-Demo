<?php

// ---------------------------------------------------------------------------
// Custom Taxonomy : Case Study Types

add_action( 'init', function() {

    $singular   = 'Case Study Type';
    $plural     = 'Case Study Types';
    $post_type  = 'case-studies';
    $slug       = 'type';

    $labels     = array(
        'name'                  => __( $plural, '' ),
        'singular_name'         => __( $singular, '' ),
        'search_items'          => __( 'Search '.$plural, '' ),
        'popular_items'         => __( 'Popular '.$plural, '' ),
        'all_items'             => __( 'All '.$plural, '' ),
        'parent_item'           => null,
        'parent_item_colon'     => null,
        'edit_item'             => __( 'Edit '.$singular, '' ),
        'update_item'           => __( 'Update '.$singular, '' ),
        'add_new_item'          => __( 'Add New '.$singular, '' ),
        'add_or_remove_items'   => __( 'Add or remove '.$singular, '' ),
        'not_found'             => __( 'No '.$plural.' found.', '' ),
        'menu_name'             => __( '— ' . $plural, '' ),
        ); 

    $args       = array(
        'label'                 => $plural,
        'labels'                => $labels,
        'public'                => true,
        'hierarchical'          => false,
        'show_ui'               => true,
        'meta_box_cb'           => null, // `null` to show it. `false` to hide metabox in sidebar and use an ACF field instead.
        'show_in_menu'          => true,
        'show_in_nav_menus'     => false,
        'rewrite'               => array('with_front' => true, 'slug' => $post_type.'/'.$slug),
        'show_admin_column'     => false,
        'show_in_quick_edit'    => true,
    );

    // Create the taxonomy.
    register_taxonomy($slug, [$post_type], $args);


    // ---------------------------
    // Optional: Add permalink shortcut to the term edit page.

    add_filter($slug . '_term_edit_form_top', function ($tag, $taxonomy) {
        if (!empty($tag) && ($link = get_term_link($tag))) {
            echo '<div><strong>Permalink: </strong><a href="'. $link .'" target="_blank">'. $link .'</a></div>';
        }
    }, 10, 2);  


    // ---------------------------
    // Optional: Remove the 'description' field from term creation form.

    add_filter($slug . '_add_form', function () {
        echo '<style>.term-description-wrap{display:none;}</style>';
    });


    // ---------------------------
    // Optional: Remove the 'description' field from term edit page.

    add_filter($slug . '_edit_form', function () {
        echo '<style>.term-description-wrap{display:none;}</style>';
    });


    // ---------------------------
    // Optional: Remove the 'description' column from the table in 'edit-tags.php'

    add_filter('manage_edit-' . $slug . '_columns', function ($columns) {
        if (isset($columns['description'])) unset( $columns['description']);   
        return $columns;
    });

});