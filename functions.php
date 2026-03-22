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

function webbird_contact_handler() {
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);
    $admin_email = get_option('admin_email');

    $headers = array('Content-Type: text/html; charset=UTF-8');

    $admin_subject = "New Lead: Contact Form Submission from " . $name;
    $admin_body = "<h2>New Contact Form Submission</h2>
                   <p><strong>Name:</strong> $name</p>
                   <p><strong>Email:</strong> $email</p>
                   <p><strong>Message:</strong><br>$message</p>";
    
    wp_mail($admin_email, $admin_subject, $admin_body, $headers);

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

/**
 * AJAX Portfolio Filter Handler
 * Modern Bento-Grid Logic
 */
// Portfolio AJAX Filter Handler
add_action('wp_ajax_filter_portfolio', 'filter_portfolio_handler');
add_action('wp_ajax_nopriv_filter_portfolio', 'filter_portfolio_handler');

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
            $color = $project->category_color ?: 'blue';
            $display_host = parse_url($project->project_url, PHP_URL_HOST) ?: 'View Project';
            ?>
            <div class="os-window glass rounded-[2.5rem] overflow-hidden group border border-white/40 hover:bg-white transition-all duration-500 shadow-xl flex flex-col animate-in fade-in zoom-in duration-500">
                <div class="h-8 bg-gray-100/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                    <div class="w-2.5 h-2.5 rounded-full bg-red-400"></div>
                    <div class="w-2.5 h-2.5 rounded-full bg-yellow-400"></div>
                    <div class="w-2.5 h-2.5 rounded-full bg-green-400"></div>
                    <div class="flex-grow text-[9px] text-gray-400 font-mono uppercase tracking-widest text-center">
                        <?php echo esc_html($display_host); ?>
                    </div>
                </div>
                
                <div class="aspect-video bg-slate-100 relative overflow-hidden">
                    <img src="<?php echo esc_url($project->project_image); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>

                <div class="p-10 flex-grow flex flex-col">
                    <div class="flex justify-between items-start mb-6">
                        <span class="px-4 py-1.5 bg-<?php echo $color; ?>-500/10 text-<?php echo $color; ?>-600 rounded-full text-[10px] font-black uppercase tracking-widest">
                            <?php echo esc_html($project->category); ?>
                        </span>
                        <a href="<?php echo esc_url($project->project_url); ?>" target="_blank" class="w-8 h-8 rounded-full glass flex items-center justify-center text-slate-400 hover:text-blue-600 transition">
                            <i class="fas fa-external-link-alt text-xs"></i>
                        </a>
                    </div>
                    
                    <h4 class="text-2xl font-black text-slate-900 mb-4"><?php echo esc_html($project->project_name); ?></h4>
                    <p class="text-sm text-slate-500 leading-relaxed mb-8"><?php echo esc_html($project->description); ?></p>
                    
                    <div class="mt-auto pt-6 border-t border-black/5 flex flex-wrap gap-2">
                        <?php 
                        $tags = explode(',', $project->tech_keywords);
                        foreach($tags as $tag): if(trim($tag)): ?>
                            <span class="text-[9px] font-bold text-slate-400 bg-black/5 px-2 py-1 rounded uppercase"><?php echo esc_html(trim($tag)); ?></span>
                        <?php endif; endforeach; ?>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo '<div class="col-span-full py-20 text-center glass rounded-3xl">No projects found in this category.</div>';
    }
    die();
}