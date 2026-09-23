<?php
/**
 * Register Team Custom Post Type
 */

if (!defined('ABSPATH')) {
    exit;
}

function trifold_register_team_cpt() {
    $labels = [
        'name'          => _x('Team Members', 'post type general name', 'trifold-core'),
        'singular_name' => _x('Team Member', 'post type singular name', 'trifold-core'),
        'menu_name'     => _x('Team', 'admin menu', 'trifold-core'),
        'add_new'       => __('Add New Member', 'trifold-core'),
        'add_new_item'  => __('Add New Team Member', 'trifold-core'),
        'edit_item'     => __('Edit Team Member', 'trifold-core'),
        'all_items'     => __('All Team Members', 'trifold-core'),
    ];

    $args = [
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => ['title', 'editor', 'thumbnail'],
        'show_in_rest'       => true,
    ];

    register_post_type('team', $args);
}
add_action('init', 'trifold_register_team_cpt');
