<?php
/**
 * WebBird functions and definitions
 */

function webbird_scripts() {
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap', array(), null);
    wp_enqueue_style('webbird-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'webbird_scripts');

function webbird_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus( array('primary' => __( 'Primary Menu', 'webbird' )));
}
add_action('after_setup_theme', 'webbird_theme_setup');

// AJAX Contact Form Handler
add_action('wp_ajax_webbird_contact', 'webbird_contact_handler');
add_action('wp_ajax_nopriv_webbird_contact', 'webbird_contact_handler');

function webbird_contact_handler() {
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);
    $admin_email = get_option('admin_email');

    $headers = array('Content-Type: text/html; charset=UTF-8');

    // 1. Admin Notification
    $admin_subject = "New Lead: Contact Form Submission from " . $name;
    $admin_body = "<h2>New Contact Form Submission</h2>
                   <p><strong>Name:</strong> $name</p>
                   <p><strong>Email:</strong> $email</p>
                   <p><strong>Message:</strong><br>$message</p>";
    
    wp_mail($admin_email, $admin_subject, $admin_body, $headers);

    // 2. Customer Receipt
    $cust_subject = "We've received your message - WebBird London";
    $cust_body = "<div style='font-family: sans-serif; padding: 20px; border: 1px solid #eee;'>
                    <h2 style='color: #2563eb;'>Hello $name,</h2>
                    <p>Thank you for reaching out to WebBird. Our team has received your message and will get back to you within 24 hours.</p>
                    <hr>
                    <p style='color: #666;'><strong>Your message:</strong><br>$message</p>
                    <hr>
                    <p>Best regards,<br><strong>WebBird Support Team</strong></p>
                  </div>";

    wp_mail($email, $cust_subject, $cust_body, $headers);

    wp_send_json_success('Message sent successfully!');
}

// Existing Search Logic
add_action('wp_ajax_data_fetch', 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch', 'data_fetch');
function data_fetch() {
    $the_query = new WP_Query(array('posts_per_page' => 5, 's' => esc_attr($_POST['keyword']), 'post_type' => array('post', 'page'), 'post_status' => 'publish'));
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="search-suggestion-item" onclick="window.location.href='<?php the_permalink(); ?>'">
                <div class="w-10 h-10 rounded-lg bg-slate-100 flex items-center justify-center text-slate-500 mr-3 overflow-hidden border border-black/5">
                    <?php if ( has_post_thumbnail() ) : the_post_thumbnail('thumbnail', array('class' => 'w-full h-full object-cover')); else : ?>
                        <i class="fas <?php echo (get_post_type() === 'page') ? 'fa-file' : 'fa-align-left'; ?> text-xs"></i>
                    <?php endif; ?>
                </div>
                <div class="flex flex-col">
                    <span class="text-sm font-semibold text-slate-800 line-clamp-1"><?php the_title(); ?></span>
                    <span class="text-[9px] font-bold text-blue-500 uppercase tracking-widest"><?php echo get_post_type(); ?></span>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); else: echo '<p class="text-xs text-slate-400 p-4">No results found.</p>'; endif; die();
}