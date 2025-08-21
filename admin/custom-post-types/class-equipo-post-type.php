<?php
if(!defined('ABSPATH')) die();
function electricidad_equipo_post_type() {

	$labels = array(
		'name'                  => _x( 'Equipo', 'Post Type General Name', 'electricidad' ),
		'singular_name'         => _x( 'integrante', 'Post Type Singular Name', 'electricidad' ),
		'menu_name'             => __( 'Equipo', 'electricidad' ),
		'name_admin_bar'        => __( 'integrante', 'electricidad' ),
		'archives'              => __( 'Archivo', 'electricidad' ),
		'attributes'            => __( 'Atributos', 'electricidad' ),
		'parent_item_colon'     => __( 'integrante Padre', 'electricidad' ),
		'all_items'             => __( 'Todas Las Equipo', 'electricidad' ),
		'add_new_item'          => __( 'Agregar integrante', 'electricidad' ),
		'add_new'               => __( 'Agregar integrante', 'electricidad' ),
		'new_item'              => __( 'Nueva integrante', 'electricidad' ),
		'edit_item'             => __( 'Editar integrante', 'electricidad' ),
		'update_item'           => __( 'Actualizar integrante', 'electricidad' ),
		'view_item'             => __( 'Ver integrante', 'electricidad' ),
		'view_items'            => __( 'Ver Equipo', 'electricidad' ),
		'search_items'          => __( 'Buscar integrante', 'electricidad' ),
		'not_found'             => __( 'No Encontrado', 'electricidad' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'electricidad' ),
		'featured_image'        => __( 'Imagen Destacada', 'electricidad' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'electricidad' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'electricidad' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'electricidad' ),
		'insert_into_item'      => __( 'Insertar en integrante', 'electricidad' ),
		'uploaded_to_this_item' => __( 'Agregado en integrante', 'electricidad' ),
		'items_list'            => __( 'Lista de Equipo', 'electricidad' ),
		'items_list_navigation' => __( 'Navegación de Equipo', 'electricidad' ),
		'filter_items_list'     => __( 'Filtrar Equipo', 'electricidad' ),
	);
	$args = array(
		'label'                 => __( 'Equipo', 'electricidad' ),
		'description'           => __( 'Equipo para el Sitio Web', 'electricidad' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'menu_position'         => 7,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Equipo', $args );

}
add_action( 'init', 'electricidad_equipo_post_type', 0 );