<?php
/**
 * The template for displaying the blog posts index.
 * Redesigned to match the About Us and Service page styles.
 */

/**
 * Helper function to estimate reading time
 * Defined at the top to ensure it is available before the loop.
 */
if ( ! function_exists( 'webbird_reading_time' ) ) {
    function webbird_reading_time($content) {
        $word_count = str_word_count(strip_tags($content));
        $reading_time = ceil($word_count / 200);
        return $reading_time > 0 ? $reading_time : 1;
    }
}

get_header(); ?>

<!-- BLOG CONTENT AREA -->
<main class="pt-12 pb-32 px-4 sm:px-8 max-w-7xl mx-auto space-y-16 sm:space-y-24">

    <!-- HERO SECTION WINDOW -->
    <section id="blog-hero" class="mt-4 sm:mt-10">
        <div class="os-window glass rounded-2xl overflow-hidden animate-in fade-in slide-in-from-bottom-10 duration-1000">
            <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest">WebBird — Our Digital Journal</div>
            </div>
            <div class="p-8 sm:p-16 lg:p-20 text-center lg:text-left">
                <div class="max-w-4xl">
                    <h2 class="text-blue-600 font-black text-xs uppercase tracking-[0.3em] mb-4">Insights & News</h2>
                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-slate-900 leading-tight mb-8">
                        Our Popular Articles
                    </h1>
                    <p class="text-lg sm:text-xl text-slate-600 leading-relaxed italic border-l-4 border-blue-500 pl-6 mb-12">
                        Explore the latest trends in web design, development, and digital strategy. Discover insights from London's leading experts to help your business grow and succeed in the digital landscape.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG FEED SECTION -->
    <section id="posts-grid">
        <div class="text-center mb-16">
            <h2 class="text-xs font-black text-white uppercase tracking-[0.4em] mb-4">Latest Stories</h2>
            <h3 class="text-3xl sm:text-4xl font-black text-white mb-6">Explore Our Digital Journal</h3>
        </div>

        <?php if ( have_posts() ) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php 
                $counter = 0;
                $colors = ['blue', 'purple', 'emerald', 'orange', 'pink', 'cyan'];
                while ( have_posts() ) : the_post(); 
                    $color = $colors[$counter % count($colors)];
                    $counter++;
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
                        <div class="glass p-6 rounded-[2.5rem] border border-white/40 border-b-4 border-<?php echo $color; ?>-500 h-full flex flex-col transition-all duration-500 hover:bg-white hover:shadow-2xl hover:-translate-y-2">
                            
                            <!-- Thumbnail Area -->
                            <div class="rounded-3xl overflow-hidden aspect-[16/10] mb-6 bg-slate-100 relative">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover transition-transform duration-700 group-hover:scale-110')); ?>
                                <?php else : ?>
                                    <div class="w-full h-full flex items-center justify-center text-slate-300">
                                        <i class="fas fa-image text-4xl"></i>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="absolute top-4 left-4">
                                    <?php
                                    $categories = get_the_category();
                                    if ( ! empty( $categories ) ) {
                                        echo '<span class="px-3 py-1 bg-white/90 backdrop-blur-md text-slate-800 rounded-full text-[9px] font-black uppercase tracking-widest shadow-sm">' . esc_html( $categories[0]->name ) . '</span>';
                                    }
                                    ?>
                                </div>
                            </div>

                            <!-- Meta -->
                            <div class="flex items-center text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-4">
                                <span class="flex items-center"><i class="far fa-calendar-alt mr-1.5"></i> <?php echo get_the_date(); ?></span>
                                <span class="mx-2 opacity-30">|</span>
                                <span class="flex items-center"><i class="far fa-clock mr-1.5"></i> <?php echo webbird_reading_time(get_the_content()); ?> min read</span>
                            </div>

                            <!-- Title & Excerpt -->
                            <h3 class="text-xl font-black text-slate-900 mb-4 line-clamp-2 leading-tight group-hover:text-blue-600 transition-colors">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            
                            <p class="text-xs text-slate-500 leading-relaxed mb-8 line-clamp-3">
                                <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
                            </p>

                            <!-- Bottom Action -->
                            <div class="mt-auto pt-6 border-t border-black/5 flex items-center justify-between">
                                <a href="<?php the_permalink(); ?>" class="text-[10px] font-black uppercase tracking-widest text-<?php echo $color; ?>-600 flex items-center group/link">
                                    Read Story 
                                    <i class="fas fa-arrow-right ml-2 transition-transform group-hover/link:translate-x-1"></i>
                                </a>
                                <div class="w-8 h-8 rounded-full border-2 border-white shadow-sm overflow-hidden bg-slate-100">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- PAGINATION WINDOW STYLE -->
            <div class="mt-20 flex justify-center">
                <div class="glass p-2 rounded-2xl border border-white/40 flex items-center space-x-1">
                    <?php
                    echo paginate_links( array(
                        'prev_text' => '<i class="fas fa-chevron-left px-4 py-2 hover:bg-white rounded-xl transition"></i>',
                        'next_text' => '<i class="fas fa-chevron-right px-4 py-2 hover:bg-white rounded-xl transition"></i>',
                        'type'      => 'plain',
                        'before_page_number' => '<span class="px-4 py-2 hover:bg-white rounded-xl transition text-[11px] font-black uppercase tracking-tighter">',
                        'after_page_number'  => '</span>'
                    ) );
                    ?>
                </div>
            </div>

        <?php else : ?>
            <!-- Empty State Window -->
            <div class="os-window glass rounded-[2rem] p-20 text-center border border-white/40">
                <div class="w-20 h-20 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-folder-open text-3xl text-slate-300"></i>
                </div>
                <h3 class="text-xl font-black text-slate-900 mb-2 uppercase tracking-widest">No Items Found</h3>
                <p class="text-sm text-slate-500">We are currently preparing some amazing content for you. Check back soon!</p>
            </div>
        <?php endif; ?>
    </section>

    <!-- NEWSLETTER CTA -->
    <section id="blog-cta">
        <div class="dark-glass rounded-[2rem] border border-white/10 relative overflow-hidden">
            <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                <div class="w-3 h-3 rounded-full bg-green-400"></div>
            </div>
            <div class="p-12 sm:p-20 text-center relative z-10">
                <h3 class="text-3xl sm:text-5xl font-black text-white mb-6 tracking-tighter">Stay ahead of the <span class="text-blue-400">digital curve.</span></h3>
                <p class="text-white/60 text-lg mb-10 max-w-2xl mx-auto italic">Join our community of over 5,000 readers and get exclusive insights delivered to your inbox.</p>
                <div class="flex flex-col sm:row justify-center gap-4 max-w-md mx-auto">
                    <button onclick="toggleModal()" class="px-10 py-5 bg-blue-600 text-white rounded-full font-black hover:bg-blue-700 transition shadow-2xl">Subscribe to Insights</button>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>