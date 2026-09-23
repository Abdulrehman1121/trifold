<?php
/**
 * Register Projects Custom Post Type & Taxonomies
 */

if (!defined('ABSPATH')) {
    exit;
}

function trifold_register_project_cpt() {
    $labels = [
        'name'               => _x('Projects', 'post type general name', 'trifold-core'),
        'singular_name'      => _x('Project', 'post type singular name', 'trifold-core'),
        'menu_name'          => _x('Projects', 'admin menu', 'trifold-core'),
        'name_admin_bar'     => _x('Project', 'add new on admin bar', 'trifold-core'),
        'add_new'            => _x('Add New', 'project', 'trifold-core'),
        'add_new_item'       => __('Add New Project', 'trifold-core'),
        'new_item'           => __('New Project', 'trifold-core'),
        'edit_item'          => __('Edit Project', 'trifold-core'),
        'view_item'          => __('View Project', 'trifold-core'),
        'all_items'          => __('All Projects', 'trifold-core'),
        'search_items'       => __('Search Projects', 'trifold-core'),
        'not_found'          => __('No projects found.', 'trifold-core'),
        'not_found_in_trash' => __('No projects found in Trash.', 'trifold-core')
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'project', 'with_front' => false],
        'capability_type'    => 'post',
        'has_archive'        => 'work',
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'custom-fields'],
        'show_in_rest'       => true,
    ];

    register_post_type('project', $args);

    // Register Service Taxonomy
    register_taxonomy('project_service', 'project', [
        'hierarchical'      => true,
        'labels'            => [
            'name'          => __('Project Services', 'trifold-core'),
            'singular_name' => __('Project Service', 'trifold-core'),
            'search_items'  => __('Search Services', 'trifold-core'),
            'all_items'     => __('All Services', 'trifold-core'),
            'edit_item'     => __('Edit Service', 'trifold-core'),
            'update_item'   => __('Update Service', 'trifold-core'),
            'add_new_item'  => __('Add New Service', 'trifold-core'),
            'new_item_name' => __('New Service Name', 'trifold-core'),
            'menu_name'     => __('Services', 'trifold-core'),
        ],
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'project-service'],
        'show_in_rest'      => true,
    ]);

    // Register Industry Taxonomy
    register_taxonomy('project_industry', 'project', [
        'hierarchical'      => true,
        'labels'            => [
            'name'          => __('Industries', 'trifold-core'),
            'singular_name' => __('Industry', 'trifold-core'),
            'search_items'  => __('Search Industries', 'trifold-core'),
            'all_items'     => __('All Industries', 'trifold-core'),
            'edit_item'     => __('Edit Industry', 'trifold-core'),
            'update_item'   => __('Update Industry', 'trifold-core'),
            'add_new_item'  => __('Add New Industry', 'trifold-core'),
            'new_item_name' => __('New Industry Name', 'trifold-core'),
            'menu_name'     => __('Industries', 'trifold-core'),
        ],
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'industry'],
        'show_in_rest'      => true,
    ]);
}
add_action('init', 'trifold_register_project_cpt');
