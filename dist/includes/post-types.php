<?php

/**
 * Register custom post types for the theme.
 *
 * This function registers a custom post type "Projects" for managing project-based content.
 *
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 *
 * @return void
 */
function register_custom_post_types()
{
    $post_type_name = 'projects';

    $args = [
        'labels' => [
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new' => 'Add New Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'new_item' => 'New Project',
            'view_item' => 'View Project',
            'search_items' => 'Search Projects',
            'not_found' => 'No Projects found',
            'not_found_in_trash' => 'No Projects found in Trash',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'projects'],
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio',
        'show_in_rest' => true,
        'taxonomies' => ['category', 'post_tag'], 
    ];

    register_post_type($post_type_name, $args);
}

add_action('init', 'register_custom_post_types');
