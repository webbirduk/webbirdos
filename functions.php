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

// 1. Create/Update Table & Fix Missing Columns
function setup_case_studies_db() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'case_studies';
    $charset_collate = $wpdb->get_charset_collate();

    // Create table if not exists
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        category varchar(100) NOT NULL,
        category_color varchar(20) DEFAULT 'blue',
        project_name varchar(255) NOT NULL,
        description text NOT NULL,
        tech_keywords text NOT NULL,
        project_url varchar(255) DEFAULT '',
        project_image varchar(255) DEFAULT '', 
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    // MANUALLY FIX: Check if project_image column exists, if not, add it
    $column = $wpdb->get_results($wpdb->prepare("SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = %s AND COLUMN_NAME = 'project_image'", $table_name));
    if (empty($column)) {
        $wpdb->query("ALTER TABLE $table_name ADD project_image varchar(255) DEFAULT ''");
    }
}
add_action('admin_init', 'setup_case_studies_db');

// 2. Admin Menu
add_action('admin_menu', 'case_studies_admin_menu');
function case_studies_admin_menu() {
    add_menu_page('Case Studies', 'Case Studies', 'manage_options', 'manage-case-studies', 'case_studies_admin_page', 'dashicons-portfolio', 7);
}

// 3. Admin Page Logic (Edit & Delete Available)
function case_studies_admin_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'case_studies';

    // DELETE Action
    if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
        $wpdb->delete($table_name, ['id' => intval($_GET['id'])]);
        echo '<div class="updated"><p>Project Deleted Successfully!</p></div>';
    }

    // SAVE/UPDATE Action
    if (isset($_POST['save_project'])) {
        $data = [
            'category'       => sanitize_text_field($_POST['category']),
            'category_color' => sanitize_text_field($_POST['category_color']),
            'project_name'   => sanitize_text_field($_POST['project_name']),
            'description'    => sanitize_textarea_field($_POST['description']),
            'tech_keywords'  => sanitize_text_field($_POST['tech_keywords']),
            'project_url'    => esc_url_raw($_POST['project_url']),
            'project_image'  => esc_url_raw($_POST['project_image'])
        ];
        
        if (!empty($_POST['project_id'])) {
            $wpdb->update($table_name, $data, ['id' => intval($_POST['project_id'])]);
            echo '<div class="updated"><p>Project Updated!</p></div>';
        } else {
            $wpdb->insert($table_name, $data);
            echo '<div class="updated"><p>Project Added Successfully!</p></div>';
        }
    }

    // Fetch data for Editing
    $edit_data = null;
    if (isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])) {
        $edit_data = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $_GET['id']));
    }

    $projects = $wpdb->get_results("SELECT * FROM $table_name");
    ?>
    <div class="wrap">
        <h1 class="wp-heading-inline"><?php echo $edit_data ? 'Edit Project' : 'Add Case Study'; ?></h1>
        <hr class="wp-header-end">

        <div style="background:#fff; padding:20px; border:1px solid #ccd0d4; margin-top:20px; max-width:850px;">
            <form method="POST">
                <input type="hidden" name="project_id" value="<?php echo $edit_data ? $edit_data->id : ''; ?>">
                <table class="form-table">
                    <tr>
                        <th>Project Name</th>
                        <td><input type="text" name="project_name" value="<?php echo $edit_data ? esc_attr($edit_data->project_name) : ''; ?>" class="regular-text" required></td>
                    </tr>
                    <tr>
                        <th>Project Image URL</th>
                        <td>
                            <input type="url" name="project_image" value="<?php echo $edit_data ? esc_url($edit_data->project_image) : ''; ?>" class="large-text" placeholder="https://example.com/image.jpg">
                            <p class="description">Paste the direct link to the image.</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Category & Color</th>
                        <td>
                            <input type="text" name="category" value="<?php echo $edit_data ? esc_attr($edit_data->category) : ''; ?>" placeholder="E-Commerce" required>
                            <select name="category_color">
                                <option value="blue" <?php selected($edit_data->category_color ?? '', 'blue'); ?>>Blue</option>
                                <option value="emerald" <?php selected($edit_data->category_color ?? '', 'emerald'); ?>>Emerald</option>
                                <option value="purple" <?php selected($edit_data->category_color ?? '', 'purple'); ?>>Purple</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><textarea name="description" class="large-text" rows="3"><?php echo $edit_data ? esc_textarea($edit_data->description) : ''; ?></textarea></td>
                    </tr>
                    <tr>
                        <th>Tech Stack</th>
                        <td><input type="text" name="tech_keywords" value="<?php echo $edit_data ? esc_attr($edit_data->tech_keywords) : ''; ?>" class="large-text" placeholder="SHOPIFY, SEO, UI DESIGN"></td>
                    </tr>
                    <tr>
                        <th>Project URL</th>
                        <td><input type="url" name="project_url" value="<?php echo $edit_data ? esc_url($edit_data->project_url) : ''; ?>" class="large-text"></td>
                    </tr>
                </table>
                <p class="submit">
                    <button type="submit" name="save_project" class="button button-primary"><?php echo $edit_data ? 'Update Case Study' : 'Save Case Study'; ?></button>
                    <?php if($edit_data): ?>
                        <a href="?page=manage-case-studies" class="button">Cancel Edit</a>
                    <?php endif; ?>
                </p>
            </form>
        </div>

        <h2 style="margin-top:40px;">Manage Existing Projects</h2>
        <table class="wp-list-table widefat fixed striped" style="margin-top:10px;">
            <thead>
                <tr>
                    <th style="width:80px;">Preview</th>
                    <th>Project Name</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if($projects): foreach ($projects as $p): ?>
                <tr>
                    <td><img src="<?php echo $p->project_image; ?>" style="width:60px; height:40px; object-fit:cover; border-radius:4px; background:#eee;"></td>
                    <td><strong><?php echo esc_html($p->project_name); ?></strong></td>
                    <td><?php echo esc_html($p->category); ?></td>
                    <td>
                        <a href="?page=manage-case-studies&action=edit&id=<?php echo $p->id; ?>" class="button button-small">Edit</a>
                        <a href="?page=manage-case-studies&action=delete&id=<?php echo $p->id; ?>" class="button button-small" style="color:red;" onclick="return confirm('Permanently delete this project?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; else: ?>
                <tr><td colspan="4">No projects found. Add one above!</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}

// AJAX Contact Form Handler
add_action('wp_ajax_webbird_contact', 'webbird_contact_handler');
add_action('wp_ajax_nopriv_webbird_contact', 'webbird_contact_handler');

// Updated AJAX Contact Form Handler to include all fields
function webbird_contact_handler() {
    // Sanitize all incoming fields from the form
    $name    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $phone   = sanitize_text_field($_POST['phone']);
    $service = sanitize_text_field($_POST['service']);
    $message = sanitize_textarea_field($_POST['message']);
    
    $admin_email = get_option('admin_email');
    $headers = array('Content-Type: text/html; charset=UTF-8');

    // 1. Detailed Admin Notification
    $admin_subject = "New Lead: " . $service . " Inquiry from " . $name;
    $admin_body = "
        <div style='font-family: sans-serif; padding: 20px; border: 1px solid #eee;'>
            <h2 style='color: #2563eb;'>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Interested Service:</strong> {$service}</p>
            <p><strong>Message:</strong><br>{$message}</p>
            <hr>
            <p style='font-size: 10px; color: #999;'>Sent from Web Bird OS Dashboard</p>
        </div>";
    
    wp_mail($admin_email, $admin_subject, $admin_body, $headers);

    // 2. Modern Professional Confirmation to Customer
    $cust_subject = "We've received your message - Web Bird London";
    $whatsapp_url = "https://wa.me/447557126699";
    
    $cust_body = "
        <div style='background-color: #f8fafc; padding: 40px 20px; font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif;'>
            <div style='max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 24px; overflow: hidden; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); border: 1px solid #e2e8f0;'>
                <div style='background: linear-gradient(135deg, #2563eb, #7c3aed); padding: 40px 30px; text-align: center;'>
                    <h1 style='color: #ffffff; margin: 0; font-size: 28px; font-weight: 800; letter-spacing: -0.025em;'>Web Bird</h1>
                    <p style='color: rgba(255,255,255,0.9); margin-top: 10px; font-size: 16px;'>Digital Excellence Delivered</p>
                </div>
                
                <div style='padding: 40px 30px;'>
                    <h2 style='color: #0f172a; margin: 0 0 20px; font-size: 22px; font-weight: 700;'>Hello {$name},</h2>
                    <p style='color: #475569; font-size: 16px; line-height: 1.6; margin-bottom: 24px;'>
                        Thank you for reaching out to us. We have successfully received your inquiry regarding <strong style='color: #2563eb;'>{$service}</strong>. Our specialists are reviewing your requirements and will get back to you very soon.
                    </p>
                    
                    <div style='background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 16px; padding: 20px; margin-bottom: 30px; text-align: center;'>
                        <p style='color: #166534; font-size: 14px; font-weight: 600; margin: 0 0 12px;'>Need a faster response?</p>
                        <a href='{$whatsapp_url}' style='display: inline-block; background: #22c55e; color: #ffffff; padding: 12px 24px; border-radius: 12px; text-decoration: none; font-weight: 700; font-size: 14px; transition: background 0.2s;'>
                            <img src='https://cdn-icons-png.flaticon.com/512/733/733585.png' width='14' height='14' style='vertical-align: middle; margin-right: 8px;'/>
                            Chat on WhatsApp
                        </a>
                    </div>

                    <div style='background: #f8fafc; border-radius: 16px; padding: 25px; border: 1px solid #f1f5f9;'>
                        <h3 style='color: #64748b; font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; margin: 0 0 12px;'>Your Message Reference</h3>
                        <p style='color: #334155; font-size: 14px; font-style: italic; line-height: 1.5; margin: 0;'>\"{$message}\"</p>
                    </div>
                </div>

                <div style='padding: 30px; border-top: 1px solid #f1f5f9; text-align: center; background: #fafafa;'>
                    <p style='color: #94a3b8; font-size: 13px; margin: 0;'>
                        Best regards,<br/>
                        <strong style='color: #475569;'>Web Bird Support Team</strong>
                    </p>
                    <div style='margin-top: 20px; padding-top: 20px; border-top: 1px solid #f1f5f9; color: #cbd5e1; font-size: 11px;'>
                        © 2026 Web Bird London. All rights reserved.
                    </div>
                </div>
            </div>
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

/**
 * AJAX Portfolio Filter Handler
 * Modern Bento-Grid Logic
 */
// Portfolio AJAX Filter Handler
add_action('wp_ajax_filter_portfolio', 'filter_portfolio_handler');
add_action('wp_ajax_nopriv_filter_portfolio', 'filter_portfolio_handler');

// Updated AJAX Portfolio Filter Handler in functions.php
function filter_portfolio_handler() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'case_studies';
    $category = sanitize_text_field($_POST['category']);

    if ($category === 'all') {
        $projects = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC");
    } else {
        $projects = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE category = %s ORDER BY id DESC", $category));
    }

    if ($projects) {
        foreach ($projects as $project) {
            $color_map = [
                'blue' => 'bg-blue-600',
                'emerald' => 'bg-emerald-600',
                'purple' => 'bg-purple-600'
            ];
            $overlay_color = $color_map[$project->category_color] ?? $color_map['blue'];
            $display_host = parse_url($project->project_url, PHP_URL_HOST) ?: 'View Project';
            $tech_stack = explode(',', $project->tech_keywords);
            ?>
            
            <div class="os-window glass rounded-[1rem] overflow-hidden group border border-white/40 shadow-xl flex flex-col animate-in fade-in zoom-in duration-300">
                <div class="h-8 bg-gray-100/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                    <div class="w-2.5 h-2.5 rounded-full bg-red-400"></div>
                    <div class="w-2.5 h-2.5 rounded-full bg-yellow-400"></div>
                    <div class="w-2.5 h-2.5 rounded-full bg-green-400"></div>
                    <div class="flex-grow text-[9px] text-gray-400 font-mono uppercase tracking-widest text-center">
                        <?php echo esc_html($display_host); ?>
                    </div>
                </div>
                
                <div class="relative bg-slate-100 overflow-hidden cursor-pointer" 
                     onclick="window.open('<?php echo esc_url($project->project_url); ?>', '_blank')">
                    
                    <img src="<?php echo esc_url($project->project_image); ?>" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                    <div class="absolute inset-0 <?php echo $overlay_color; ?>/90 opacity-0 group-hover:opacity-100 transition-all duration-300 backdrop-blur-sm flex flex-col justify-center items-center p-8 text-center">
                        
                        <span class="px-4 py-1 bg-white text-slate-900 rounded-full text-[10px] font-black uppercase tracking-widest mb-4 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <?php echo esc_html($project->category); ?>
                        </span>

                        <h4 class="text-2xl font-black text-white mb-4 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">
                            <?php echo esc_html($project->project_name); ?>
                        </h4>
                        
                        <div class="flex flex-wrap justify-center gap-2 mb-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">
                            <?php foreach ($tech_stack as $tech) : if(trim($tech)): ?>
                                <span class="text-[9px] font-bold text-white/80 border border-white/30 px-2 py-1 rounded uppercase">
                                    <?php echo esc_html(trim($tech)); ?>
                                </span>
                            <?php endif; endforeach; ?>
                        </div>

                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-slate-900 shadow-xl transform scale-50 opacity-0 group-hover:scale-100 group-hover:opacity-100 transition-all duration-300 delay-150">
                            <i class="fas fa-external-link-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo '<div class="col-span-full py-20 text-center glass rounded-3xl">No projects found.</div>';
    }
    die();
}

// AJAX Newsletter Subscription Handler
add_action('wp_ajax_webbird_subscribe', 'webbird_subscribe_handler');
add_action('wp_ajax_nopriv_webbird_subscribe', 'webbird_subscribe_handler');

// Modern Professional Newsletter Subscription Handler
function webbird_subscribe_handler() {
    $email = sanitize_email($_POST['email']);
    
    if (!is_email($email)) {
        wp_send_json_error('Invalid email address.');
    }

    $admin_email = get_option('admin_email');
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $whatsapp_url = "https://wa.me/447557126699";

    // 1. Notify Admin
    $admin_subject = "New Newsletter Subscriber: " . $email;
    $admin_body = "
        <div style='font-family: sans-serif; padding: 20px; border: 1px solid #eee; border-radius: 12px;'>
            <h2 style='color: #2563eb;'>New Subscription Received</h2>
            <p>A new user has subscribed to the Web Bird newsletter.</p>
            <p><strong>Subscriber Email:</strong> {$email}</p>
            <hr style='border:none; border-top:1px solid #eee;'>
            <p style='font-size: 10px; color: #999;'>Sent from Web Bird OS Dashboard</p>
        </div>";
    wp_mail($admin_email, $admin_subject, $admin_body, $headers);

    // 2. Modern Professional Confirmation to User
    $cust_subject = "Welcome to the Web Bird Community!";
    $cust_body = "
        <div style='background-color: #f8fafc; padding: 40px 20px; font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif;'>
            <div style='max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 24px; overflow: hidden; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); border: 1px solid #e2e8e0;'>
                <div style='background: linear-gradient(135deg, #23a6d5, #23d5ab); padding: 40px 30px; text-align: center;'>
                    <h1 style='color: #ffffff; margin: 0; font-size: 28px; font-weight: 800; letter-spacing: -0.025em;'>Web Bird</h1>
                    <p style='color: rgba(255,255,255,0.9); margin-top: 10px; font-size: 16px;'>You're on the list!</p>
                </div>
                
                <div style='padding: 40px 30px;'>
                    <h2 style='color: #0f172a; margin: 0 0 20px; font-size: 22px; font-weight: 700;'>Thanks for joining,</h2>
                    <p style='color: #475569; font-size: 16px; line-height: 1.6; margin-bottom: 24px;'>
                        You've successfully subscribed to our newsletter. You'll now be the first to receive exclusive insights on digital strategy, web trends, and special updates directly from our London studio.
                    </p>
                    
                    <div style='background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 16px; padding: 20px; margin-bottom: 30px; text-align: center;'>
                        <p style='color: #166534; font-size: 14px; font-weight: 600; margin: 0 0 12px;'>Have a specific project in mind?</p>
                        <a href='{$whatsapp_url}' style='display: inline-block; background: #22c55e; color: #ffffff; padding: 12px 24px; border-radius: 12px; text-decoration: none; font-weight: 700; font-size: 14px;'>
                            Quick Chat on WhatsApp
                        </a>
                    </div>

                    <p style='color: #64748b; font-size: 13px; line-height: 1.5; text-align: center;'>
                        Stay tuned for our next update. We promise to only send content that helps your business grow.
                    </p>
                </div>

                <div style='padding: 30px; border-top: 1px solid #f1f5f9; text-align: center; background: #fafafa;'>
                    <p style='color: #94a3b8; font-size: 13px; margin: 0;'>
                        Best regards,<br/>
                        <strong style='color: #475569;'>Web Bird Team</strong>
                    </p>
                    <div style='margin-top: 20px; padding-top: 20px; border-top: 1px solid #f1f5f9; color: #cbd5e1; font-size: 11px;'>
                        © 2026 Web Bird London. <br/>
                        If you didn't mean to subscribe, you can safely ignore this email.
                    </div>
                </div>
            </div>
        </div>";

    wp_mail($email, $cust_subject, $cust_body, $headers);
    wp_send_json_success('Subscribed successfully!');
}


/**
 * Change the default WordPress "From" name and email address
 */
// 1. Change the "From" Name to Web Bird
add_filter('wp_mail_from_name', function($old) {
    return 'Web Bird';
});

// 2. Optional: Change the "From" Email address to your business email
add_filter('wp_mail_from', function($old) {
    return 'hi@webbird.co.uk';
});