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

// AJAX Live Search Logic
add_action('wp_ajax_data_fetch', 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch', 'data_fetch');
function data_fetch() {
    $the_query = new WP_Query(array(
        'posts_per_page' => 5,
        's' => esc_attr($_POST['keyword']),
        'post_type' => array('post', 'page'),
        'post_status' => 'publish'
    ));

    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="search-suggestion-item" onclick="window.location.href='<?php the_permalink(); ?>'">
                <div class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center text-slate-500 mr-3">
                    <i class="fas <?php echo (get_post_type() === 'page') ? 'fa-file' : 'fa-align-left'; ?> text-xs"></i>
                </div>
                <span class="text-sm font-semibold text-slate-800"><?php the_title(); ?></span>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    else:
        echo '<p class="text-xs text-slate-400 p-4">No results found.</p>';
    endif;
    die();
}