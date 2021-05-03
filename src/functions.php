<?php

add_filter( 'wp_enqueue_scripts', 'remove_shit', PHP_INT_MAX );

function remove_shit() {
    //wp_dequeue_script('jquery');
    //wp_deregister_script('jquery');
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style( 'style-simple-red' );
    wp_dequeue_style( 'ajax-search-lite' );
    //wp_dequeue_style( 'contact-form-7' );
}

add_action('init', function() {
    remove_action('rest_api_init', 'wp_oembed_register_route');
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
}, PHP_INT_MAX - 1 );


/* Enable upload for webp image files */
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');


add_action( 'after_setup_theme', 'setup' );
function setup() {
    load_theme_textdomain( 'template', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    //global $content_width;
    //if (!isset($content_width)) $content_width = 640;
    register_nav_menu('nav-menu',__('Menu nawigacyjne'));
    register_nav_menu('nav-menu-mobile',__('Menu mobilne'));
    register_nav_menu('catalog-menu',__('Katalog'));
}


/* Filter menu classes and ids */
function nav_menu_attributes_filter($var) {
    return is_array($var) ? array_intersect($var, array('current_page_item', 'current-menu-ancestor', 'current_page_parent')) : '';
}
add_filter('nav_menu_css_class', 'nav_menu_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'nav_menu_attributes_filter', 100, 1);
add_filter('page_css_class', 'nav_menu_attributes_filter', 100, 1);


add_filter( 'document_title_separator', 'cyb_document_title_separator' );
function cyb_document_title_separator( $sep ) {
    return "|";
}

add_filter( 'the_title', 'title' );
function title( $title ) {
    if ( $title == '' ) {
        return '&rarr;';
    } else {
        return $title;
    }
}

add_filter( 'wp_title', 'filter_wp_title' );
function filter_wp_title( $title ) {
    return $title . esc_attr( get_bloginfo( 'name' ) );
}


function custom_excerpt_length( $length ) {
    return 5;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function javascript_variables() { ?>
    <script type="text/javascript">
        let ajax_url = '<?php echo admin_url( "admin-ajax.php" ); ?>';
        let form_nonce = '<?php echo wp_create_nonce( "form_nonce" ); ?>';
    </script><?php
}
add_action ( 'wp_head', 'javascript_variables' );


/*function remove_category( $string, $type )  {
    if ( $type != 'single' && $type == 'category' && ( strpos( $string, 'category' ) !== false ) )
    {
        $url_without_category = str_replace( "/category/", "/", $string );
        return trailingslashit( $url_without_category );
    }
    return $string;  }
add_filter( 'user_trailingslashit', 'remove_category', 100, 2);*/