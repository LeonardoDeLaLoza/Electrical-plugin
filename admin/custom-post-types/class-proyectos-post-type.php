<?php
if(!defined('ABSPATH')) die();
 function electricidad_proyectos_post_type() {
    
        $labels = array(
            'name'                  => _x( 'Proyectos', 'Post Type General Name', 'Plugin-perzonalizado' ),
            'singular_name'         => _x( 'Proyecto', 'Post Type Singular Name', 'Plugin-perzonalizado' ),
            'menu_name'             => __( 'Proyectos', 'Plugin-perzonalizado' ),
            'name_admin_bar'        => __( 'Proyecto', 'Plugin-perzonalizado' ),
            'archives'              => __( 'Proyecto Archives', 'Plugin-perzonalizado' ),
            'attributes'            => __( 'Proyecto Attributes', 'Plugin-perzonalizado' ),
            'parent_item_colon'     => __( 'Parent Proyecto:', 'Plugin-perzonalizado' ),
            'all_items'             => __( 'Todos los Proyectos', 'Plugin-perzonalizado' ),
            'add_new_item'          => __( 'Nuevo Proyecto', 'Plugin-perzonalizado' ),
            'add_new'               => __( 'Add New', 'Plugin-perzonalizado' ),
            'new_item'              => __( 'New Proyecto', 'Plugin-perzonalizado' ),
            'edit_item'             => __( 'Edit Proyecto', 'Plugin-perzonalizado' ),
            'update_item'           => __( 'Update Proyecto', 'Plugin-perzonalizado' ),
            'view_item'             => __( 'View Proyecto', 'Plugin-perzonalizado' ),
            'view_items'            => __( 'View Proyectos', 'Plugin-perzonalizado' ),
            'search_items'          => __( 'Search Proyecto', 'Plugin-perzonalizado' ),
            'not_found'             => __( 'Not found', 'Plugin-perzonalizado' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'Plugin-perzonalizado' ),
            'featured_image'        => __( 'Featured Image', 'Plugin-perzonalizado' ),
            'set_featured_image'    => __( 'Set featured image', 'Plugin-perzonalizado' ),
            'remove_featured_image' => __( 'Remove featured image', 'Plugin-perzonalizado' ),
            'use_featured_image'    => __( 'Use as featured image', 'Plugin-perzonalizado' ),
            'insert_into_item'      => __( 'Insert into item', 'Plugin-perzonalizado' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'Plugin-perzonalizado' ),
            'items_list'            => __( 'Proyectos list', 'Plugin-perzonalizado' ),
            'items_list_navigation' => __( 'Proyectos list navigation', 'Plugin-perzonalizado' ),
            'filter_items_list'     => __( 'Filter items list', 'Plugin-perzonalizado' ),
        );
        $args = array(
            'label'                 => __( 'Proyecto', 'Plugin-perzonalizado' ),
            'description'           => __( 'Proyecto Description', 'Plugin-perzonalizado' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail' ),
            'taxonomies'            => array( 'Proyecto_category' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-star-filled',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            'show_in_rest'          => true,
        );
        register_post_type( 'proyectos', $args );
    
    }

add_action( 'init', 'electricidad_proyectos_post_type', 0 );