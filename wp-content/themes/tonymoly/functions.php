<?php

add_theme_support( 'woocommerce' );

function apk_load_styles_scripts() {
//CSS
wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all');// para registrar el css
wp_enqueue_style('theme_style');
//JS

wp_enqueue_script( 'bootstrap4', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script2', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'slick-custom', get_template_directory_uri() . '/assets/js/slick-custom.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array ( 'jquery' ), 1.1, true);

}

function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

add_action('wp_enqueue_scripts', 'apk_load_styles_scripts');

add_filter('woocommerce_checkout_fields', 'addBootstrapToCheckoutFields' );

function addBootstrapToCheckoutFields($fields) {
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            // if you want to add the form-group class around the label and the input
            // $field['class'][] = 'form-group';
            // $field['placeholder'] [] = $field['label'];
            // add form-control to the actual input
            $field['input_class'][] = 'form-control';
        }
    }
    return $fields;
}

if ( ! function_exists('banner') ) {

    // Register Custom Post Type
    function banner() {
    
        $labels = array(
            'name'                  => _x( 'banners', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'banner', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'banners', 'text_domain' ),
            'name_admin_bar'        => __( 'banners', 'text_domain' ),
            'archives'              => __( 'archivos de banner', 'text_domain' ),
            'attributes'            => __( 'atributos de banner', 'text_domain' ),
            'parent_item_colon'     => __( 'Objeto de banner', 'text_domain' ),
            'all_items'             => __( 'Todos los banner', 'text_domain' ),
            'add_new_item'          => __( 'añadir banner', 'text_domain' ),
            'add_new'               => __( 'Añadir', 'text_domain' ),
            'new_item'              => __( 'Nuevo', 'text_domain' ),
            'edit_item'             => __( 'Editar', 'text_domain' ),
            'update_item'           => __( 'Actualizar', 'text_domain' ),
            'view_item'             => __( 'Ver', 'text_domain' ),
            'view_items'            => __( 'Ver Todos', 'text_domain' ),
            'search_items'          => __( 'Buscar', 'text_domain' ),
            'not_found'             => __( 'No encontro ningun banner', 'text_domain' ),
            'not_found_in_trash'    => __( 'No hay ningun banner borrado', 'text_domain' ),
            'featured_image'        => __( 'Imagen de banner', 'text_domain' ),
            'set_featured_image'    => __( 'Cambiar Imagen', 'text_domain' ),
            'remove_featured_image' => __( 'Borrar imagen', 'text_domain' ),
            'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
            'insert_into_item'      => __( 'Insertar en banner', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Actualizar banner', 'text_domain' ),
            'items_list'            => __( 'Lista de banners', 'text_domain' ),
            'items_list_navigation' => __( 'Lista de navegacion de banner', 'text_domain' ),
            'filter_items_list'     => __( 'Filtrar Lista de banners', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'banner', 'text_domain' ),
            'description'           => __( 'banners', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title'),
            'taxonomies'            => array( 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-welcome-view-site',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'banner', $args );
    
    }
    add_action( 'init', 'banner', 0 );
    
    }

    function cptui_register_my_cpts() {

        /**
         * Post Type: tonytvs.
         */
    
        $labels = [
            "name" => __( "tonytvs", "custom-post-type-ui" ),
            "singular_name" => __( "tonytv", "custom-post-type-ui" ),
            "menu_name" => __( "My tonytvs", "custom-post-type-ui" ),
            "all_items" => __( "All tonytvs", "custom-post-type-ui" ),
            "add_new" => __( "Add new", "custom-post-type-ui" ),
            "add_new_item" => __( "Add new tonytv", "custom-post-type-ui" ),
            "edit_item" => __( "Edit tonytv", "custom-post-type-ui" ),
            "new_item" => __( "New tonytv", "custom-post-type-ui" ),
            "view_item" => __( "View tonytv", "custom-post-type-ui" ),
            "view_items" => __( "View tonytvs", "custom-post-type-ui" ),
            "search_items" => __( "Search tonytvs", "custom-post-type-ui" ),
            "not_found" => __( "No tonytvs found", "custom-post-type-ui" ),
            "not_found_in_trash" => __( "No tonytvs found in trash", "custom-post-type-ui" ),
            "parent" => __( "Parent tonytv:", "custom-post-type-ui" ),
            "featured_image" => __( "Featured image for this tonytv", "custom-post-type-ui" ),
            "set_featured_image" => __( "Set featured image for this tonytv", "custom-post-type-ui" ),
            "remove_featured_image" => __( "Remove featured image for this tonytv", "custom-post-type-ui" ),
            "use_featured_image" => __( "Use as featured image for this tonytv", "custom-post-type-ui" ),
            "archives" => __( "tonytv archives", "custom-post-type-ui" ),
            "insert_into_item" => __( "Insert into tonytv", "custom-post-type-ui" ),
            "uploaded_to_this_item" => __( "Upload to this tonytv", "custom-post-type-ui" ),
            "filter_items_list" => __( "Filter tonytvs list", "custom-post-type-ui" ),
            "items_list_navigation" => __( "tonytvs list navigation", "custom-post-type-ui" ),
            "items_list" => __( "tonytvs list", "custom-post-type-ui" ),
            "attributes" => __( "tonytvs attributes", "custom-post-type-ui" ),
            "name_admin_bar" => __( "tonytv", "custom-post-type-ui" ),
            "item_published" => __( "tonytv published", "custom-post-type-ui" ),
            "item_published_privately" => __( "tonytv published privately.", "custom-post-type-ui" ),
            "item_reverted_to_draft" => __( "tonytv reverted to draft.", "custom-post-type-ui" ),
            "item_scheduled" => __( "tonytv scheduled", "custom-post-type-ui" ),
            "item_updated" => __( "tonytv updated.", "custom-post-type-ui" ),
            "parent_item_colon" => __( "Parent tonytv:", "custom-post-type-ui" ),
        ];
    
        $args = [
            "label" => __( "tonytvs", "custom-post-type-ui" ),
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "publicly_queryable" => true,
            "show_ui" => true,
            "show_in_rest" => true,
            "rest_base" => "",
            "rest_controller_class" => "WP_REST_Posts_Controller",
            "has_archive" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "delete_with_user" => false,
            "exclude_from_search" => false,
            "capability_type" => "post",
            "map_meta_cap" => true,
            "hierarchical" => false,
            "rewrite" => [ "slug" => "tonytv", "with_front" => true ],
            "query_var" => true,
            "menu_icon" => "dashicons-video-alt3",
            "supports" => [ "title", "editor", "thumbnail", "excerpt", "author" ],
            "taxonomies" => [ "category", "post_tag" ],
        ];
    
        register_post_type( "tonytv", $args );
    }
    
    add_action( 'init', 'cptui_register_my_cpts' );    

    //Include  ACF
    // Define path and URL to the ACF plugin.
    define( 'MY_ACF_PATH', get_stylesheet_directory() . '/inc/acf/' );
    define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/' );

    // Include the ACF plugin.
    include_once( MY_ACF_PATH . 'acf.php' );

    // Customize the url setting to fix incorrect asset URLs.
    add_filter('acf/settings/url', 'my_acf_settings_url');
    function my_acf_settings_url( $url ) {
        return MY_ACF_URL;
    }

    // (Optional) Hide the ACF admin menu item.
    add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
    function my_acf_settings_show_admin( $show_admin ) {
        return true;
    }
    /*Por si toca hacer ajustes administrables*/
    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page(array(
            'page_title' 	=> 'Theme General Settings',
            'menu_title'	=> 'Theme Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
        
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Header Settings',
            'menu_title'	=> 'Header',
            'parent_slug'	=> 'theme-general-settings',
        ));
        
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Footer Settings',
            'menu_title'	=> 'Footer',
            'parent_slug'	=> 'theme-general-settings',
        ));
        
    }

    add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
    function my_acf_json_save_point( $path ) {
        
        // update path
        $path = get_stylesheet_directory() . '/inc/acf-json';
        
        
        // return
        return $path;
        
    }

?>
