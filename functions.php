<?php
/**
 * WebBird functions and definitions
 */

function webbird_scripts() {
    // Tailwind CSS
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false);
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
    
    // Google Fonts - Inter
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap', array(), null);

    // Main Stylesheet
    wp_enqueue_style('webbird-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'webbird_scripts');

function webbird_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // Register Navigation Menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'webbird' ),
    ) );
}
add_action('after_setup_theme', 'webbird_theme_setup');

/**
 * Filter menu link attributes to maintain macOS modal functionality dynamically.
 * If a menu item is named "About", "Services", or "Contact", it will trigger the modals.
 */
function webbird_menu_link_attributes( $atts, $item, $args ) {
    if ( isset($args->theme_location) && $args->theme_location == 'primary' ) {
        $title = strtolower($item->title);
        
        if ( $title === 'about' ) {
            $atts['onclick'] = 'toggleAboutModal()';
            $atts['href'] = 'javascript:void(0)';
            $atts['class'] = 'opacity-80 cursor-pointer hover:opacity-100 transition-opacity';
        } elseif ( $title === 'services' ) {
            $atts['onclick'] = 'toggleServicesModal()';
            $atts['href'] = 'javascript:void(0)';
            $atts['class'] = 'opacity-80 cursor-pointer hover:opacity-100 transition-opacity';
        } elseif ( $title === 'contact' ) {
            $atts['onclick'] = 'toggleModal()';
            $atts['href'] = 'javascript:void(0)';
            $atts['class'] = 'opacity-80 cursor-pointer hover:opacity-100 transition-opacity';
        } else {
            $atts['class'] = 'opacity-80 hover:opacity-100 transition-opacity';
        }
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'webbird_menu_link_attributes', 10, 3 );