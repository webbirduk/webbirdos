<?php
/**
 * The template for displaying all pages.
 * This is the fallback template when no specific page template is selected.
 * Matches the macOS agency theme with glassmorphism and full Gutenberg support.
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
    .prose img { border-radius: 1rem; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); margin: 2rem 0; }
    .prose .alignwide { margin-left: -10%; margin-right: -10%; width: 120%; max-width: 120%; }
    .prose .alignfull {
        margin-left: calc(50% - 50vw); margin-right: calc(50% - 50vw);
        width: 100vw; max-width: 100vw; position: relative; left: 50%; right: 50%; transform: translateX(-50%);
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

<!-- PAGE CONTENT AREA -->
<main class="pt-12 pb-32 px-4 sm:px-8 max-w-5xl mx-auto space-y-12 sm:space-y-16">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- PAGE HERO WINDOW -->
        <section id="page-hero" class="mt-4 sm:mt-10">
            <div class="os-window glass rounded-[1rem] overflow-hidden animate-in fade-in slide-in-from-bottom-10 duration-1000 shadow-2xl">
                <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                    <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest">WebBird — <?php the_title(); ?></div>
                </div>
                
                <div class="relative">
                    <!-- Featured Image Background Effect -->
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="absolute inset-0 z-0 overflow-hidden">
                            <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover blur-2xl opacity-20 scale-110')); ?>
                        </div>
                    <?php endif; ?>

                    <div class="relative z-10 p-8 sm:p-16 lg:p-20 flex flex-col items-center text-center">
                        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-slate-900 leading-tight mb-8 max-w-4xl tracking-tighter">
                            <?php the_title(); ?>
                        </h1>

                        <div class="flex flex-wrap justify-center items-center gap-6 text-[11px] font-bold text-slate-500 uppercase tracking-widest">
                            <span class="flex items-center"><i class="far fa-clock mr-2 text-blue-500"></i> <?php echo webbird_reading_time(get_the_content()); ?> min read</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAIN CONTENT WINDOW -->
        <article id="page-<?php the_ID(); ?>" <?php post_class('os-window glass rounded-[1rem] border border-white/50 overflow-hidden shadow-xl'); ?>>
            <div class="h-8 bg-gray-100/50 flex items-center px-4 space-x-2 border-b border-gray-200/30">
                <div class="w-2.5 h-2.5 rounded-full bg-slate-300"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-slate-300"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-slate-300"></div>
                <div class="flex-grow text-center text-[9px] text-gray-400 font-mono uppercase tracking-widest">Content View</div>
            </div>

            <div class="p-8 sm:p-12 lg:p-16">
                <!-- Gutenberg Content Container -->
                <div class="prose entry-content">
                    <?php the_content(); ?>
                </div>

                <!-- Footer CTA Section (Similar to single.php) -->
                <div class="mt-16 p-8 rounded-[1rem] bg-blue-500/5 border border-blue-500/10 flex flex-col sm:flex-row items-center justify-between gap-6">
                    <div>
                        <h4 class="text-lg font-black text-slate-900">Need a custom solution?</h4>
                        <p class="text-sm text-slate-500 italic">Let's discuss how we can help your business grow.</p>
                    </div>
                    <button onclick="toggleModal()" class="px-8 py-4 bg-blue-600 text-white rounded-full font-black hover:bg-blue-700 transition shadow-lg shadow-blue-500/20 active:scale-95">Get Started</button>
                </div>
            </div>
        </article>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>