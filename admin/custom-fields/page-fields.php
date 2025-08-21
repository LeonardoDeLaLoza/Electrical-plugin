<?php
/**
 * My first custom metabox with CMB2
 * 
 * @since 1.0.0
 * @link https://github.com/CMB2/CMB2/blob/develop/example-functions.php
 */

if ( ! function_exists( 'my_first_cmb2_metabox' ) ){

    /**
     * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
     */
    function my_first_cmb2_metabox() {

        $prefix = 'my_first_metabox';
        
        // Sample custom metabox registration
        $plugin_slug_metabox = new_cmb2_box( array(
            'id'            => $prefix,
            'title'         => esc_html__( 'My first metabox', 'plugin-slug' ),
            'object_types'  => array( 'page' ), // Post type
            'context'       => 'normal',
            'priority'      => 'default',
            'show_names'    => true, // Show field names on the left
        ) );

        // Sample custom field into the custom metabox
        $plugin_slug_metabox->add_field( array(
            'name'       => esc_html__( 'Custom Text Field', 'plugin-slug' ),
            'desc'       => esc_html__( 'Write something funny or simply Hello world !', 'plugin-slug' ),
            'id'         => $prefix . '_custom_text_field',
            'type'       => 'text',
        ) );
    }
    add_action( 'cmb2_admin_init', 'my_first_cmb2_metabox' );

}
add_action( 'cmb2_admin_init', 'cmb2_pagina_principal' );
function cmb2_pagina_principal() {

    $prefix = 'pagina_inicio_';
    $pagina_id= get_option('page_on_front');

    // Registro del metabox personalizado
    $cmb = new_cmb2_box( array(
        'id'            => $prefix,
        'title'         => esc_html__( 'Contenido de la pagina de inicio', 'custom_metabox' ),
        'object_types'  => array( 'page' ),
        'context'       => 'normal',
        'priority'      => 'default',
        'show_on'    => array(
            'key' => 'id',
            'value' => $pagina_id,
        ), // Muestra los nombres de los campos
    ) );

    $cmb->add_field( array(
        'name'       => esc_html__( 'Titulo que describe la seccion' ),
        'desc'       => esc_html__( 'describe la seccion' ),
        'id'         => $prefix . 'titulo',
        'type'       => 'text',
    ) );
    $cmb->add_field( array(
        'name'       => esc_html__( 'Descripcion de la seccion' ),
        'desc'       => esc_html__( 'Escribe el Slogan de tu pagina' ),
        'id'         => $prefix . 'slogan',
        'type'       => 'text',
    ) );
    $cmb->add_field( array(
        'name'       => esc_html__( 'Texto descriptivo' ),
        'desc'       => esc_html__( 'Escribe una descripcion de tu pagina' ),
        'id'         => $prefix . 'texto',
        'type'       => 'textarea',
    ) );
    //botones
    $cmb->add_field( array(
        'name'       => esc_html__( 'Boton de ayuda' ),
        'desc'       => esc_html__( 'Aqui puedes poner el texto para tu boton de obtener solucion' ),
        'id'         => $prefix . 'boton_ayuda',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
        'name'       => esc_html__( 'Boton Video' ),
        'desc'       => esc_html__( 'Escribe lo que quieres que diga el boton' ),
        'id'         => $prefix . 'boton_video',
        'type'       => 'text',
    ) );
    $cmb->add_field( array(
        'name'       => esc_html__( 'Boton Leer mas' ),
        'desc'       => esc_html__( 'Escribe lo que quieres que diga el segundo boton' ),
        'id'         => $prefix . 'boton_leer',
        'type'       => 'text',
    ) );
    //botones links
    $cmb->add_field( array(
        'name' => esc_html__( 'link del boton Ver video' ),
        'desc' => esc_html__( 'Agrega la URL del tu video de demostracion'),
        'id'   => $prefix . 'Video_url',
        'type' => 'text_url',
        'protocols' => array( 'https' ),
    ) );


    //Descripcion 2
    $cmb->add_field( array(
        'name'       => esc_html__( 'Titulo que describe la segunda seccion' ),
        'desc'       => esc_html__( 'describe la seccion 2' ),
        'id'         => $prefix . 'titulo2',
        'type'       => 'text',
    ) );
    $cmb->add_field( array(
        'name'       => esc_html__( 'Descripcion de la segunda seccion' ),
        'desc'       => esc_html__( 'Escribe el segundo Slogan de tu pagina' ),
        'id'         => $prefix . 'slogan2',
        'type'       => 'text',
    ) );
    $cmb->add_field( array(
        'name'       => esc_html__( 'Segundo Texto descriptivo' ),
        'desc'       => esc_html__( 'Escribe una segunda descripcion de tu pagina' ),
        'id'         => $prefix . 'texto2',
        'type'       => 'textarea',
    ) );

    //Imagenes de fondo

    $cmb->add_field( array(
        'name'      => 'Imagen principal de carousel',
        'desc'      => 'sube una imagen o ingresa su URL.',
        'id'        => $prefix . 'bg_carousel',
        'type'      => 'file',
    ));

    $cmb->add_field( array(
        'name'      => 'Imagen de fondo',
        'desc'      => 'subir imagen o ingresa su URL.',
        'id'        => $prefix . 'bg_imagen1',
        'type'      => 'file',
    ));
    $cmb->add_field( array(
        'name'      => 'Imagen de fondo 2',
        'desc'      => 'subir imagen o ingresa su URL.',
        'id'        => $prefix . 'bg_imagen2',
        'type'      => 'file',
    ));
    
    
}
add_action( 'cmb2_admin_init', 'cmb2_pagina_nosotros' );
function cmb2_pagina_nosotros() {

    $prefix = 'pagina_nosotros_';


    // Registro del metabox personalizado
    $cmb2 = new_cmb2_box( array(
        'id'            => $prefix,
        'title'         => esc_html__( 'Contenido de la pagina nosotros', 'custom_metabox' ),
        'object_types'  => array( 'page' ),
        'context'       => 'normal',
        'priority'      => 'default',
        'show_names'    => true
    ) );

    $cmb2->add_field( array(
        'name'       => esc_html__( 'titulo seccion' ),
        'desc'       => esc_html__( 'Escribe el titulo de la seccion' ),
        'id'         => $prefix . 'titulo',
        'type'       => 'text',
    ) );

    $cmb2->add_field( array(
        'name'       => esc_html__( 'titulo destacado' ),
        'desc'       => esc_html__( 'Escribe el titulo destacado de la seccion' ),
        'id'         => $prefix . 'titulo_destacado',
        'type'       => 'text',
    ) );

    $cmb2->add_field( array(
        'name'       => esc_html__( 'texto destacado' ),
        'desc'       => esc_html__( 'Escribe el texto destacado de la seccion' ),
        'id'         => $prefix . 'texto_destacado',
        'type'       => 'text',
    ) );
    
    //imagen nosotros
    $cmb2->add_field( array(
        'name'      => 'Imagen Nosotros',
        'desc'      => 'sube una imagen o ingresa su URL.',
        'id'        => $prefix . 'imagen',
        'type'      => 'file',
    ));
    $cmb2->add_field( array(
        'name'      => 'Imagen 2 Nosotros',
        'desc'      => 'sube una imagen o ingresa su URL.',
        'id'        => $prefix . 'imagen2',
        'type'      => 'file',
    ));

    //botones
    $cmb2->add_field( array(
        'name'       => esc_html__( 'Boton de contacto' ),
        'desc'       => esc_html__( 'Aqui puedes poner el texto para tu boton de contacto' ),
        'id'         => $prefix . 'boton_contacto',
        'type'       => 'text',
    ) );

    $group_field_id = $cmb2->add_field( array(
    'id'          => $prefix . 'compromisos',
    'type'        => 'group',
    'description' => __( 'Aqui ingresa los compromisos', 'cmb2' ),
    // 'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => array(
        'group_title'       => __( 'Compromiso{#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
        'add_button'        => __( 'Agregar otro compromiso', 'cmb2' ),
        'remove_button'     => __( 'Eliminar compromiso', 'cmb2' ),
        'sortable'          => true,
        // 'closed'         => true, // true to have the groups closed by default
        'remove_confirm' => esc_html__( 'Estas seguro que quieres eliminarlo', 'cmb2' ), // Performs confirmation before removing group.
    ),
    ) );

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $cmb2->add_group_field( $group_field_id, array(
        'name' => 'Ingresa tu compromiso',
        'id'   => 'compromiso',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );

}

add_action( 'cmb2_admin_init', 'cmb2_banner_nosotros' );
function cmb2_banner_nosotros() {

    $prefix = 'banner_nosotros_';


    // Registro del metabox personalizado
    $cmb2_5= new_cmb2_box( array(
        'id'            => $prefix,
        'title'         => esc_html__( 'Contenido del banner nosotros', 'custom_metabox' ),
        'object_types'  => array( 'page' ),
        'context'       => 'normal',
        'priority'      => 'default',
        'show_names'    => true
    ) );

    $cmb2_5->add_field( array(
        'name'       => esc_html__( 'titulo seccion' ),
        'desc'       => esc_html__( 'Escribe el titulo de la seccion' ),
        'id'         => $prefix . 'titulo',
        'type'       => 'text',
    ) );

    $cmb2_5->add_field( array(
        'name'       => esc_html__( 'titulo destacado' ),
        'desc'       => esc_html__( 'Escribe el slogan destacado de el banner' ),
        'id'         => $prefix . 'titulo_destacado',
        'type'       => 'text',
    ) );

    $cmb2_5->add_field( array(
        'name'       => esc_html__( 'boton' ),
        'desc'       => esc_html__( 'Escribe la descripcion del boton' ),
        'id'         => $prefix . 'boton',
        'type'       => 'text',
    ) );

     $cmb2_5->add_field( array(
        'name'       => esc_html__( 'Banner de Fondo' ),
        'desc'       => esc_html__( 'Sube una imagen o pon su URL' ),
        'id'         => $prefix . 'bg_banner',
        'type'       => 'file',
    ) );

    
}

add_action( 'cmb2_admin_init', 'cmb2_pagina_servicios' );
function cmb2_pagina_servicios() {

    $prefix = 'pagina_servicios_';


    // Registro del metabox personalizado
    $cmb3 = new_cmb2_box( array(
        'id'            => $prefix,
        'title'         => esc_html__( 'Contenido de la paginia servicios', 'custom_metabox' ),
        'object_types'  => array( 'page' ),
        'context'       => 'normal',
        'priority'      => 'default',
        'show_names'    => true
    ) );

    $cmb3->add_field( array(
        'name'       => esc_html__( 'titulo seccion' ),
        'desc'       => esc_html__( 'Escribe el titulo de la seccion' ),
        'id'         => $prefix . 'titulo',
        'type'       => 'text',
    ) );

    $cmb3->add_field( array(
        'name'       => esc_html__( 'titulo destacado' ),
        'desc'       => esc_html__( 'Escribe el titulo destacado de la seccion' ),
        'id'         => $prefix . 'titulo_destacado',
        'type'       => 'text',
    ) );
    $cmb3->add_field( array(
        'name'       => esc_html__( 'texto destacado' ),
        'desc'       => esc_html__( 'Escribe el texto de la seccion' ),
        'id'         => $prefix . 'texto_destacado',
        'type'       => 'text',
    ) );

    //botones

    $cmb3->add_field( array(
        'name'       => esc_html__( 'Boton seccion commercial' ),
        'desc'       => esc_html__( 'Aqui puedes poner el texto para tu boton de personal' ),
        'id'         => $prefix . 'boton_commercial',
        'type'       => 'text',
    ) );

    $cmb3->add_field( array(
        'name'       => esc_html__( 'Boton seccion residencial' ),
        'desc'       => esc_html__( 'Aqui puedes poner el texto para tu boton de residencial' ),
        'id'         => $prefix . 'boton_residencial',
        'type'       => 'text',
    ) );

    $cmb3->add_field( array(
        'name'       => esc_html__( 'Boton seccion industrial' ),
        'desc'       => esc_html__( 'Aqui puedes poner el texto para tu boton de industrial' ),
        'id'         => $prefix . 'boton_industrial',
        'type'       => 'text',
    ) );
    $cmb3->add_field( array(
        'name'       => esc_html__( 'Boton de leer mas' ),
        'desc'       => esc_html__( 'Aqui puedes poner el texto para tu boton de los servicios' ),
        'id'         => $prefix . 'boton_leer',
        'type'       => 'text',
    ) );
    $cmb3->add_field( array(
    'name'           => 'Test Taxonomy Multicheck',
    'desc'           => 'Description Goes Here',
    'id'             => $prefix . 'categorias_servicios',
    'taxonomy'       => 'service_category', //Enter Taxonomy Slug
    'type'           => 'taxonomy_multicheck',
    // Optional :
    'text'           => array(
        'no_terms_text' => 'Sorry, no terms could be found.' // Change default text. Default: "No terms"
    ),
    'remove_default' => 'true', // Removes the default metabox provided by WP core.
    // Optionally override the args sent to the WordPress get_terms function.
    'query_args' => array(
        // 'orderby' => 'slug',
        // 'hide_empty' => true,
    ),
    ) );
}

add_action( 'cmb2_admin_init', 'cmb2_pagina_proyectos' );
function cmb2_pagina_proyectos() {

    $prefix = 'pagina_proyectos_';


    // Registro del metabox personalizado
    $cmb4 = new_cmb2_box( array(
    'id'            => $prefix,
    'title'         => esc_html__( 'Contenido de la paginia proyectos', 'custom_metabox' ),
    'object_types'  => array( 'page' ),
    'context'       => 'normal',
    'priority'      => 'default',
    'show_names'    => true
    ) );

    $cmb4->add_field( array(
        'name'       => esc_html__( 'titulo seccion' ),
        'desc'       => esc_html__( 'Escribe el titulo de la seccion' ),
        'id'         => $prefix . 'titulo',
        'type'       => 'text',
    ) );

    $cmb4->add_field( array(
        'name'       => esc_html__( 'titulo destacado' ),
        'desc'       => esc_html__( 'Escribe el titulo destacado de la seccion' ),
        'id'         => $prefix . 'titulo_destacado',
        'type'       => 'text',
    ) );

    $cmb4->add_field( array(
        'name'       => esc_html__( 'texto destacado' ),
        'desc'       => esc_html__( 'Escribe el texto destacado de la seccion' ),
        'id'         => $prefix . 'texto_destacado',
        'type'       => 'text',
    ) );
    

    //botones
    $cmb4->add_field( array(
        'name'       => esc_html__( 'Boton categoria 1' ),
        'desc'       => esc_html__( 'Aqui puedes poner el texto que describe la categoria 1' ),
        'id'         => $prefix . 'boton_categoria1',
        'type'       => 'text',
    ) );

    $cmb4->add_field( array(
        'name'       => esc_html__( 'Boton categoria 2' ),
        'desc'       => esc_html__( 'Aqui puedes poner el texto que describe la categoria 2' ),
        'id'         => $prefix . 'boton_categoria2',
        'type'       => 'text',
    ) );

    $cmb4->add_field( array(
        'name'       => esc_html__( 'Boton categoria 3' ),
        'desc'       => esc_html__( 'Aqui puedes poner el texto que describe la categoria 3' ),
        'id'         => $prefix . 'boton_categoria3',
        'type'       => 'text',
    ) );
    $cmb4->add_field( array(
        'name'       => esc_html__( 'Boton categoria 4' ),
        'desc'       => esc_html__( 'Aqui puedes poner el texto que describe la categoria 4' ),
        'id'         => $prefix . 'boton_categoria4',
        'type'       => 'text',
    ) );
}

add_action( 'cmb2_admin_init', 'cmb2_entradas' );
function cmb2_entradas() {

    $prefix = 'entradas_';


    // Registro del metabox personalizado
    $cmb4_5 = new_cmb2_box( array(
    'id'            => $prefix,
    'title'         => esc_html__( 'Contenido de las entradas', 'custom_metabox' ),
    'object_types'  => array( 'page' ),
    'context'       => 'normal',
    'priority'      => 'default',
    'show_names'    => true
    ) );

    $cmb4_5->add_field( array(
        'name'       => esc_html__( 'titulo seccion' ),
        'desc'       => esc_html__( 'Escribe el titulo de la seccion' ),
        'id'         => $prefix . 'titulo',
        'type'       => 'text',
    ) );

    $cmb4_5->add_field( array(
        'name'       => esc_html__( 'titulo destacado' ),
        'desc'       => esc_html__( 'Escribe el titulo destacado de la seccion' ),
        'id'         => $prefix . 'titulo_destacado',
        'type'       => 'text',
    ) );

    $cmb4_5->add_field( array(
        'name'       => esc_html__( 'texto destacado' ),
        'desc'       => esc_html__( 'Escribe el texto destacado de la seccion' ),
        'id'         => $prefix . 'texto_destacado',
        'type'       => 'text',
    ) );
    

    //botones
    $cmb4_5->add_field( array(
        'name'       => esc_html__( 'Boton' ),
        'desc'       => esc_html__( 'Aqui puedes poner el texto que describe el boton' ),
        'id'         => $prefix . 'boton',
        'type'       => 'text',
    ) );
}

add_action( 'cmb2_admin_init', 'cmb2_pagina_equipo_datos' );
function cmb2_pagina_equipo_datos() {

    $prefix = 'pagina_equipo_';


    // Registro del metabox personalizado

    
    $cmb5 = new_cmb2_box( array(
    'id'            => $prefix,
    'title'         => esc_html__( 'Redes sociales', 'custom_metabox' ),
    'object_types'  => array( 'equipo' ),
    'context'       => 'normal',
    'priority'      => 'default',
    'show_names'    => true,
    ) );

    // Facebook.

    $cmb5->add_field( array(
        'name' => esc_html__( 'Facebook', 'Plugin-perzonalizado' ),
        'desc' => esc_html__( 'Add your Facebook profile URL', 'Plugin-perzonalizado' ),
        'id'   => $prefix . 'facebook_url',
        'type' => 'text_url',
        'protocols' => array( 'https' ),
    ) );

    // Instagram.
    $cmb5->add_field( array(
        'name' => esc_html__( 'Instagram', 'Plugin-perzonalizado' ),
        'desc' => esc_html__( 'Add your Instagram profile URL', 'Plugin-perzonalizado' ),
        'id'   => $prefix . 'instagram_url',
        'type' => 'text_url',
        'protocols' => array( 'https' ),
    ) );

    // Twitter/X.
    $cmb5->add_field( array(
        'name' => esc_html__( 'Twitter/X', 'Plugin-perzonalizado' ),
        'desc' => esc_html__( 'Add your Twitter/X profile URL', 'Plugin-perzonalizado' ),
        'id'   => $prefix . 'twitter_url',
        'type' => 'text_url',
        'protocols' => array( 'https' ),
    ) );
        // Linkedln.
    $cmb5->add_field( array(
        'name' => esc_html__( 'Linkedln', 'Plugin-perzonalizado' ),
        'desc' => esc_html__( 'Add your Linkedln profile URL', 'Plugin-perzonalizado' ),
        'id'   => $prefix . 'linkedln_url',
        'type' => 'text_url',
        'protocols' => array( 'https' ),
    ) );
}

add_action( 'cmb2_admin_init', 'cmb2_pagina_equipo' );
function cmb2_pagina_equipo() {

    $prefix = 'pagina_equipo_datos_';


    // Registro del metabox personalizado
    $cmb6 = new_cmb2_box( array(
    'id'            => $prefix,
    'title'         => esc_html__( 'Contenido de la pagina equipo', 'custom_metabox' ),
    'object_types'  => array( 'page' ),
    'context'       => 'normal',
    'priority'      => 'default',
    'show_names'    => true
    ) );

    $cmb6->add_field( array(
        'name'       => esc_html__( 'titulo seccion' ),
        'desc'       => esc_html__( 'Escribe el titulo de la seccion' ),
        'id'         => $prefix . 'titulo',
        'type'       => 'text',
    ) );

    $cmb6->add_field( array(
        'name'       => esc_html__( 'titulo destacado' ),
        'desc'       => esc_html__( 'Escribe el titulo destacado de la seccion' ),
        'id'         => $prefix . 'titulo_destacado',
        'type'       => 'text',
    ) );

    $cmb6->add_field( array(
        'name'       => esc_html__( 'texto destacado' ),
        'desc'       => esc_html__( 'Escribe el titulo destacado de la seccion' ),
        'id'         => $prefix . 'texto_destacado',
        'type'       => 'text',
    ) );
        
}

add_action( 'cmb2_admin_init', 'cmb2_pagina_testimoniales' );
function cmb2_pagina_testimoniales() {

    $prefix = 'pagina_testimoniales_';


    // Registro del metabox personalizado
    $cmb7 = new_cmb2_box( array(
    'id'            => $prefix,
    'title'         => esc_html__( 'Contenido de la pagina testimoniales', 'custom_metabox' ),
    'object_types'  => array( 'page' ),
    'context'       => 'normal',
    'priority'      => 'default',
    'show_names'    => true
    ) );

    $cmb7->add_field( array(
        'name'       => esc_html__( 'titulo seccion' ),
        'desc'       => esc_html__( 'Escribe el titulo de la seccion' ),
        'id'         => $prefix . 'titulo',
        'type'       => 'text',
    ) );

    $cmb7->add_field( array(
        'name'       => esc_html__( 'titulo destacado' ),
        'desc'       => esc_html__( 'Escribe el titulo destacado de la seccion' ),
        'id'         => $prefix . 'titulo_destacado',
        'type'       => 'text',
    ) );

    $cmb7->add_field( array(
        'name'       => esc_html__( 'texto destacado' ),
        'desc'       => esc_html__( 'Escribe el titulo destacado de la seccion' ),
        'id'         => $prefix . 'texto_destacado',
        'type'       => 'text',
    ) );

    $cmb7->add_field( array(
        'name'       => esc_html__('boton'),
        'desc'       => esc_html__( 'Escribe que hace el boton' ),
        'id'         => $prefix . 'boton',
        'type'       => 'text',
    ) );
}
add_action( 'cmb2_admin_init', 'cmb2_preguntas' );
function cmb2_preguntas() {

    $prefix = 'seccion_preguntas_';

    //Descripcion Visual

    $cmb8 = new_cmb2_box( array(
        'id'           => 'mi_metabox_preguntas',
        'title'        => 'Lista de preguntas frecuentes',
        'object_types' => array( 'page' ), // o tu CPT
    ) );

    $cmb8->add_field( array(
        'name'       => esc_html__( 'titulo seccion' ),
        'desc'       => esc_html__( 'Escribe el titulo de la seccion' ),
        'id'         => $prefix . 'titulo',
        'type'       => 'text',
    ) );

    $cmb8->add_field( array(
        'name'       => esc_html__( 'titulo destacado' ),
        'desc'       => esc_html__( 'Escribe el titulo destacado de la seccion' ),
        'id'         => $prefix . 'titulo_destacado',
        'type'       => 'text',
    ) );

    $cmb8->add_field( array(
        'name'       => esc_html__( 'texto destacado' ),
        'desc'       => esc_html__( 'Escribe el titulo destacado de la seccion' ),
        'id'         => $prefix . 'texto_destacado',
        'type'       => 'text',
    ) );

    $cmb8->add_field( array(
        'name'       => esc_html__('boton'),
        'desc'       => esc_html__( 'Escribe que hace el boton' ),
        'id'         => $prefix . 'boton',
        'type'       => 'text',
    ) );

    //PREGUNTAS

    $grupo_campo_id = $cmb8->add_field( array(
        'id'          => $prefix . 'mi_grupo_preguntas',
        'type'        => 'group',
        'description' => __( 'Agrega una pregunta frecuente', 'cmb2' ),
        'options'     => array(
            'group_title'   => __( 'Pregunta {#}', 'cmb2' ), // {#} se reemplaza por el número del grupo
            'add_button'    => __( 'Agregar pregunta', 'cmb2' ),
            'remove_button' => __( 'Eliminar pregunta', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

    // Subcampos del grupo
    $cmb8->add_group_field( $grupo_campo_id, array(
        'name' => 'Pregunta',
        'id'   => $prefix . 'pregunta',
        'type' => 'text',
    ) );

    $cmb8->add_group_field( $grupo_campo_id, array(
        'name' => 'respuesta',
        'id'   => $prefix . 'respuesta',
        'type' => 'textarea',
    ) );
}
add_action( 'cmb2_admin_init', 'cmb2_pagina_contacto' );
function cmb2_pagina_contacto() {

    $prefix = 'pagina_contacto_';


    // Registro del metabox personalizado
    $cmb9 = new_cmb2_box( array(
    'id'            => $prefix,
    'title'         => esc_html__( 'Contenido de la pagina de contacto', 'custom_metabox' ),
    'object_types'  => array( 'page' ),
    'context'       => 'normal',
    'priority'      => 'default',
    'show_names'    => true
    ) );

    $cmb9->add_field( array(
        'name'       => esc_html__( 'titulo seccion' ),
        'desc'       => esc_html__( 'Escribe el titulo de la seccion' ),
        'id'         => $prefix . 'titulo',
        'type'       => 'text',
    ) );

    $cmb9->add_field( array(
        'name'       => esc_html__( 'titulo destacado' ),
        'desc'       => esc_html__( 'Escribe el titulo destacado de la seccion' ),
        'id'         => $prefix . 'titulo_destacado',
        'type'       => 'text',
    ) );

    $cmb9->add_field( array(
        'name'       => esc_html__( 'texto destacado' ),
        'desc'       => esc_html__( 'Escribe el titulo destacado de la seccion' ),
        'id'         => $prefix . 'texto_destacado',
        'type'       => 'text',
    ) );

    $cmb9->add_field( array(
        'name'       => esc_html__('boton'),
        'desc'       => esc_html__( 'Escribe que hace el boton' ),
        'id'         => $prefix . 'boton',
        'type'       => 'text',
    ) );
}
