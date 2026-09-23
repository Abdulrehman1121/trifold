<?php
/**
 * Register Services Custom Post Type
 */

if (!defined('ABSPATH')) {
    exit;
}

function trifold_register_service_cpt() {
    $labels = [
        'name'          => _x('Services', 'post type general name', 'trifold-core'),
        'singular_name' => _x('Service', 'post type singular name', 'trifold-core'),
        'menu_name'     => _x('Services', 'admin menu', 'trifold-core'),
        'add_new'       => __('Add New', 'trifold-core'),
        'add_new_item'  => __('Add New Service', 'trifold-core'),
        'edit_item'     => __('Edit Service', 'trifold-core'),
        'all_items'     => __('All Services', 'trifold-core'),
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'service', 'with_front' => false],
        'capability_type'    => 'post',
        'has_archive'        => 'services',
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-grid-view',
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest'       => true,
    ];

    register_post_type('service', $args);
}
add_action('init', 'trifold_register_service_cpt');
