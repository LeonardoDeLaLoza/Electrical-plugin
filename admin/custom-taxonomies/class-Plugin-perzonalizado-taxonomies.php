<?php 

function proyecto_category() {

        $labels = array(
            'name'                       => _x( 'proyecto categories', 'Taxonomy General Name', 'Plugin-perzonalizado' ),
            'singular_name'              => _x( 'proyecto category', 'Taxonomy Singular Name', 'Plugin-perzonalizado' ),
            'menu_name'                  => __( 'proyecto category', 'Plugin-perzonalizado' ),
            'all_items'                  => __( 'All proyecto categories', 'Plugin-perzonalizado' ),
            'parent_item'                => __( 'Parent proyecto category', 'Plugin-perzonalizado' ),
            'parent_item_colon'          => __( 'Parent proyecto category:', 'Plugin-perzonalizado' ),
            'new_item_name'              => __( 'New proyecto category Name', 'Plugin-perzonalizado' ),
            'add_new_item'               => __( 'Add New proyecto category', 'Plugin-perzonalizado' ),
            'edit_item'                  => __( 'Edit proyecto category', 'Plugin-perzonalizado' ),
            'update_item'                => __( 'Update proyecto category', 'Plugin-perzonalizado' ),
            'view_item'                  => __( 'View proyecto category', 'Plugin-perzonalizado' ),
            'separate_items_with_commas' => __( 'Separate proyecto categories with commas', 'Plugin-perzonalizado' ),
            'add_or_remove_items'        => __( 'Add or remove proyecto category', 'Plugin-perzonalizado' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'Plugin-perzonalizado' ),
            'popular_items'              => __( 'Popular proyecto categories', 'Plugin-perzonalizado' ),
            'search_items'               => __( 'Search proyecto categories', 'Plugin-perzonalizado' ),
            'not_found'                  => __( 'Not Found', 'Plugin-perzonalizado' ),
            'no_terms'                   => __( 'No proyecto categories', 'Plugin-perzonalizado' ),
            'items_list'                 => __( 'proyecto categories list', 'Plugin-perzonalizado' ),
            'items_list_navigation'      => __( 'proyecto categories list navigation', 'Plugin-perzonalizado' ),
        );
        $rewrite = array(
            'slug'                       => 'proyecto-category',
            'with_front'                 => true,
            'hierarchical'               => false,
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'show_in_rest'               => true,
            'rewrite'                    => $rewrite,
        );
        register_taxonomy( 'proyecto_category', array( 'proyectos' ), $args );

    }
    add_action('init', 'proyecto_category');