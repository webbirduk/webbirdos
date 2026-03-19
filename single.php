<?php
/**
 * The template for displaying all single posts.
 * Matches the macOS agency theme with glassmorphism and modern typography.
 * Enhanced for full Gutenberg block editor support and consistent styling.
 */

/**
 * Helper function to estimate reading time
 */
if ( ! function_exists( 'webbird_reading_time' ) ) {
    function webbird_reading_time($content) {
        $word_count = str_word_count(strip_tags($content));
        $reading_time = ceil($word_count / 200);
        return $reading_time > 0 ? $reading_time : 1;
    }
}

get_header(); ?>

<style>
    /* Gutenberg Block & General Content Support */
    .prose {
        max-width: none;
        color: #475569; /* slate-600 */
    }
    
    /* Headings */
    .prose h1, .prose h2, .prose h3, .prose h4, .prose h5, .prose h6 {
        color: #0f172a; /* slate-900 */
        font-weight: 900;
        margin-top: 2.5rem;
        margin-bottom: 1.25rem;
        line-height: 1.2;
        letter-spacing: -0.025em;
    }
    .prose h1 { font-size: 2.5rem; }
    .prose h2 { font-size: 2rem; border-bottom: 1px solid rgba(0,0,0,0.05); padding-bottom: 0.5rem; }
    .prose h3 { font-size: 1.5rem; }
    .prose h4 { font-size: 1.25rem; }

    /* Text Elements */
    .prose p { margin-bottom: 1.5rem; line-height: 1.8; }
    .prose strong, .prose b { color: #0f172a; font-weight: 800; }
    .prose em, .prose i { font-style: italic; }
    
    /* Lists */
    .prose ul, .prose ol { 
        margin-bottom: 1.5rem; 
        padding-left: 1.5rem; 
    }
    .prose ul { list-style-type: disc; }
    .prose ol { list-style-type: decimal; }
    .prose li { margin-bottom: 0.5rem; }
    .prose li::marker { color: #2563eb; font-weight: 800; }

    /* Tables */
    .prose table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 2rem;
        background: rgba(255,255,255,0.3);
        border-radius: 1rem;
        overflow: hidden;
        border: 1px solid rgba(0,0,0,0.05);
    }
    .prose th, .prose td {
        padding: 1rem;
        text-align: left;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    .prose th {
        background: rgba(0,0,0,0.02);
        font-weight: 800;
        color: #0f172a;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.05em;
    }

    /* Quotes */
    .prose blockquote {
        border-left: 4px solid #2563eb;
        padding: 1.5rem 2rem;
        background: rgba(37, 99, 235, 0.03);
        border-radius: 0 1.5rem 1.5rem 0;
        margin: 2.5rem 0;
        font-style: italic;
        color: #1e293b;
    }

    /* Images & Alignments */
    .prose img { border-radius: 1.5rem; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); margin: 2rem 0; }
    .prose .alignwide { margin-left: -10%; margin-right: -10%; width: 120%; max-width: 120%; }
    .prose .alignfull {
        margin-left: calc(50% - 50vw); margin-right: calc(50% - 50vw);
        width: 100vw; max-width: 100vw; position: relative; left: 50%; right: 50%; transform: translateX(-50%);
    }

    /* Separators */
    .prose hr, .wp-block-separator {
        border: none;
        border-top: 2px solid rgba(0,0,0,0.05);
        margin: 4rem auto;
        width: 50%;
    }

    /* Buttons */
    .wp-block-button__link {
        background-color: #2563eb !important;
        color: white !important;
        padding: 1rem 2rem !important;
        border-radius: 9999px !important;
        text-decoration: none !important;
        font-weight: 800 !important;
        display: inline-block;
        transition: all 0.3s ease;
        border: none !important;
        box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.2);
    }
    .wp-block-button__link:hover {
        background-color: #1d4ed8 !important;
        transform: translateY(-2px);
        box-shadow: 0 20px 25px -5px rgba(37, 99, 235, 0.3);
    }

    @media (max-width: 768px) {
        .prose .alignwide { margin-left: 0; margin-right: 0; width: 100%; }
        .prose h1 { font-size: 2rem; }
    }
</style>

<!-- SINGLE POST CONTENT AREA -->
<main class="pt-12 pb-32 px-4 sm:px-8 max-w-5xl mx-auto space-y-12 sm:space-y-16">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- POST HERO WINDOW -->
        <section id="post-hero" class="mt-4 sm:mt-10">
            <div class="os-window glass rounded-3xl overflow-hidden animate-in fade-in slide-in-from-bottom-10 duration-1000 shadow-2xl">
                <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                    <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest">Article — <?php the_title(); ?></div>
                </div>
                
                <div class="relative">
                    <!-- Featured Image Background Effect -->
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="absolute inset-0 z-0 overflow-hidden">
                            <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover blur-2xl opacity-20 scale-110')); ?>
                        </div>
                    <?php endif; ?>

                    <div class="relative z-10 p-8 sm:p-16 lg:p-20 flex flex-col items-center text-center">
                        <div class="mb-6 flex flex-wrap justify-center gap-2">
                            <?php
                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) {
                                foreach($categories as $category) {
                                    echo '<span class="px-4 py-1.5 bg-blue-600 text-white rounded-full text-[10px] font-black uppercase tracking-widest shadow-lg shadow-blue-500/20">' . esc_html( $category->name ) . '</span>';
                                }
                            }
                            ?>
                        </div>

                        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-slate-900 leading-tight mb-8 max-w-4xl tracking-tighter">
                            <?php the_title(); ?>
                        </h1>

                        <div class="flex flex-wrap justify-center items-center gap-6 text-[11px] font-bold text-slate-500 uppercase tracking-widest">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full border-2 border-white shadow-sm overflow-hidden bg-slate-100 mr-3">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                                </div>
                                <span><?php the_author(); ?></span>
                            </div>
                            <span class="w-1 h-1 bg-slate-300 rounded-full hidden sm:block"></span>
                            <span class="flex items-center"><i class="far fa-calendar-alt mr-2 text-blue-500"></i> <?php echo get_the_date(); ?></span>
                            <span class="w-1 h-1 bg-slate-300 rounded-full hidden sm:block"></span>
                            <span class="flex items-center"><i class="far fa-clock mr-2 text-blue-500"></i> <?php echo webbird_reading_time(get_the_content()); ?> min read</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAIN ARTICLE CONTENT -->
        <article id="post-<?php the_ID(); ?>" <?php post_class('os-window glass rounded-[1rem] border border-white/50 overflow-hidden shadow-xl'); ?>>
            <div class="h-8 bg-gray-100/50 flex items-center px-4 space-x-2 border-b border-gray-200/30">
                <div class="w-2.5 h-2.5 rounded-full bg-slate-300"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-slate-300"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-slate-300"></div>
            </div>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="w-full aspect-video overflow-hidden">
                    <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover')); ?>
                </div>
            <?php endif; ?>

            <div class="p-8 sm:p-12 lg:p-16">
                <!-- Gutenberg Content Container -->
                <div class="prose entry-content">
                    <?php the_content(); ?>
                </div>

                <!-- Post Tags -->
                <?php if ( has_tag() ) : ?>
                    <div class="mt-16 pt-8 border-t border-black/5">
                        <div class="flex flex-wrap gap-2">
                            <span class="text-[10px] font-black uppercase text-slate-400 mr-2 self-center">Tags:</span>
                            <?php
                            $tags = get_the_tags();
                            foreach($tags as $tag) {
                                echo '<a href="' . get_tag_link($tag->term_id) . '" class="px-3 py-1 bg-slate-100 hover:bg-blue-100 text-slate-500 hover:text-blue-600 rounded-lg text-[10px] font-bold uppercase tracking-widest transition">' . $tag->name . '</a>';
                            }
                            ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Share Section -->
                <div class="mt-12 p-8 rounded-3xl bg-blue-500/5 border border-blue-500/10 flex flex-col sm:flex-row items-center justify-between gap-6">
                    <div>
                        <h4 class="text-lg font-black text-slate-900">Loved this article?</h4>
                        <p class="text-sm text-slate-500">Share it with your network or friends!</p>
                    </div>
                    <div class="flex gap-3">
                        <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" class="w-12 h-12 rounded-2xl glass border border-white/50 flex items-center justify-center text-slate-700 hover:bg-blue-400 hover:text-white transition shadow-sm"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target=\"_blank\" class="w-12 h-12 rounded-2xl glass border border-white/50 flex items-center justify-center text-slate-700 hover:bg-blue-600 hover:text-white transition shadow-sm"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank" class="w-12 h-12 rounded-2xl glass border border-white/50 flex items-center justify-center text-slate-700 hover:bg-blue-700 hover:text-white transition shadow-sm"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </article>

        <!-- NAVIGATION SECTION -->
        <section class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-16">
            <?php
            $prev_post = get_previous_post();
            if ( ! empty( $prev_post ) ) : ?>
                <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="glass p-8 rounded-3xl border border-white/40 group hover:bg-white transition-all duration-300 shadow-sm">
                    <span class="text-[9px] font-black text-blue-500 uppercase tracking-widest mb-2 block"><i class="fas fa-arrow-left mr-2"></i> Previous Post</span>
                    <h4 class="text-base font-black text-slate-900 line-clamp-1 group-hover:text-blue-600 transition-colors"><?php echo esc_html( $prev_post->post_title ); ?></h4>
                </a>
            <?php else: ?>
                <div></div>
            <?php endif; ?>

            <?php
            $next_post = get_next_post();
            if ( ! empty( $next_post ) ) : ?>
                <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="glass p-8 rounded-3xl border border-white/40 text-right group hover:bg-white transition-all duration-300 shadow-sm">
                    <span class="text-[9px] font-black text-blue-500 uppercase tracking-widest mb-2 block">Next Post <i class="fas fa-arrow-right ml-2"></i></span>
                    <h4 class="text-base font-black text-slate-900 line-clamp-1 group-hover:text-blue-600 transition-colors"><?php echo esc_html( $next_post->post_title ); ?></h4>
                </a>
            <?php endif; ?>
        </section>

        <!-- LATEST STORIES SECTION (WIDGET STYLE) -->
        <section id="related-posts" class="mt-24">
            <div class="flex items-center justify-between mb-12">
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">Latest Stories</h3>
                <a href="<?php echo get_post_type_archive_link('post'); ?>" class="text-[10px] font-black uppercase tracking-widest text-blue-600 border-b border-blue-200 pb-1">View All Stories</a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
                $current_post_id = get_the_ID();
                $latest_query = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'post__not_in'   => array($current_post_id),
                    'orderby'        => 'date',
                    'order'          => 'DESC'
                ));

                if ($latest_query->have_posts()) :
                    $colors = ['blue', 'purple', 'emerald'];
                    $i = 0;
                    while ($latest_query->have_posts()) : $latest_query->the_post();
                        $color = $colors[$i % count($colors)];
                        $i++;
                ?>
                    <article class="glass p-6 rounded-[2rem] border border-white/40 border-b-4 border-<?php echo $color; ?>-500 h-full flex flex-col transition-all duration-500 hover:bg-white hover:shadow-2xl hover:-translate-y-2">
                        <div class="rounded-2xl overflow-hidden aspect-[16/10] mb-6 bg-slate-100">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover')); ?>
                            <?php else: ?>
                                <div class="w-full h-full flex items-center justify-center text-slate-300">
                                    <i class="fas fa-image text-2xl"></i>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="flex items-center text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-3">
                            <span><?php echo get_the_date(); ?></span>
                        </div>
                        <h4 class="text-lg font-black text-slate-900 mb-4 line-clamp-2 leading-tight">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <a href="<?php the_permalink(); ?>" class="mt-auto text-[9px] font-black uppercase tracking-widest text-<?php echo $color; ?>-600 flex items-center group">
                            Read More <i class="fas fa-chevron-right ml-2 text-[7px] transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </article>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </section>

        <!-- QUOTE / SERVICES CTA SECTION -->
        <section id="services-quote" class="mt-24">
            <div class="dark-glass rounded-[2rem] border border-white/10 relative overflow-hidden">
                <!-- macOS Traffic Lights Header -->
                <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                    <div class="flex-grow text-center text-[9px] text-gray-400 font-mono uppercase tracking-widest">WebBird — Request a Quote</div>
                </div>
                
                <div class="p-10 sm:p-20 text-center relative z-10 flex flex-col items-center">
                    <!-- Glow Accents -->
                    <div class="absolute -left-20 -top-20 w-64 h-64 bg-blue-500/10 blur-[100px] rounded-full"></div>
                    <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-emerald-500/10 blur-[100px] rounded-full"></div>
                    
                    <h3 class="text-3xl sm:text-5xl font-black text-white mb-6 tracking-tighter">Like what you read? <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">Let’s build it together.</span></h3>
                    <p class="text-white/60 text-lg mb-10 max-w-2xl mx-auto italic leading-relaxed">Whether you need a custom WordPress site, an e-commerce platform, or technical SEO, our London-based experts are ready to deliver excellence.</p>
                    
                    <div class="flex flex-col sm:flex-row gap-6">
                        <button onclick="toggleModal()" class="px-10 py-5 bg-blue-600 text-white rounded-full font-black hover:bg-blue-700 transition shadow-2xl shadow-blue-500/20 active:scale-95 flex items-center">
                            <i class="fas fa-file-invoice mr-3"></i> Get a Free Quote
                        </button>
                        <span onclick="toggleServicesModal()" class="px-10 py-5 glass border border-white/20 text-white rounded-full font-bold hover:bg-white/10 transition cursor-pointer flex items-center">
                            Explore Services
                        </span>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>