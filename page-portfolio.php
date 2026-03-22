<?php
/**
 * Template Name: Portfolio Page
 * Professional Case Studies Explorer with AJAX filtering and conversion-focused CTA.
 */

get_header(); 

global $wpdb;
$table_name = $wpdb->prefix . 'case_studies';

// Dynamically fetch categories for the navigation filter
$categories = $wpdb->get_results("SELECT DISTINCT category FROM $table_name");
?>

<main class="pt-24 pb-32 px-4 sm:px-8 max-w-7xl mx-auto space-y-28">

    <section id="portfolio-hero">
        <div class="os-window glass rounded-[1rem] overflow-hidden shadow-2xl border border-white/50 animate-in fade-in slide-in-from-bottom-10 duration-1000">
            <div class="h-12 bg-gray-200/40 flex items-center px-6 space-x-2 border-b border-gray-300/30">
                <div class="flex space-x-2">
                    <div class="w-3.5 h-3.5 rounded-full bg-[#ff5f56] shadow-sm"></div>
                    <div class="w-3.5 h-3.5 rounded-full bg-[#ffbd2e] shadow-sm"></div>
                    <div class="w-3.5 h-3.5 rounded-full bg-[#27c93f] shadow-sm"></div>
                </div>
                <div class="flex-grow text-center">
                    <span class="text-[10px] text-slate-500 font-mono uppercase tracking-[0.4em] font-bold opacity-60">WebBird // Archive.Project_Explorer</span>
                </div>
            </div>
            
            <div class="p-12 sm:p-24 relative overflow-hidden">
                <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-500/10 blur-[120px] rounded-full"></div>
                <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-purple-500/10 blur-[120px] rounded-full"></div>
                
                <div class="max-w-4xl relative z-10 text-center lg:text-left">
                    <h2 class="text-blue-600 font-black text-xs uppercase tracking-[0.5em] mb-6">Our Portfolio</h2>
                    <h1 class="text-5xl sm:text-7xl font-[900] text-slate-900 leading-[1.1] mb-8 tracking-tighter">
                        Digital Craft. <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600">Global Impact.</span>
                    </h1>
                    <p class="text-lg text-slate-600 mb-12 max-w-2xl leading-relaxed font-medium italic border-l-4 border-blue-500 pl-6">
                        We don't just build websites; we engineer digital growth. Explore our curated selection of high-performance solutions.
                    </p>
                    
                    <div class="flex flex-wrap justify-center lg:justify-start gap-3 mt-10" id="portfolio-filters">
                        <button data-category="all" class="filter-btn px-10 py-4 rounded-2xl text-[11px] font-black uppercase tracking-widest transition-all bg-slate-900 text-white shadow-2xl hover:scale-105 active:scale-95">
                           All Projects
                        </button>
                        <?php if($categories): foreach($categories as $cat): ?>
                            <button data-category="<?php echo esc_attr($cat->category); ?>" 
                               class="filter-btn px-10 py-4 rounded-2xl text-[11px] font-black uppercase tracking-widest transition-all glass text-slate-600 hover:bg-white hover:text-blue-600 hover:shadow-xl hover:scale-105 active:scale-95">
                               <?php echo esc_html($cat->category); ?>
                            </button>
                        <?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio-stats" class="grid grid-cols-2 lg:grid-cols-4 gap-6">
        <?php 
        $stats = [
            ['99%', 'Success Rate', 'blue'],
            ['250+', 'Projects Live', 'indigo'],
            ['40%', 'Avg. Conversion', 'purple'],
            ['14+', 'Awards Won', 'emerald']
        ];
        foreach($stats as $stat): ?>
        <div class="glass p-10 rounded-[1rem] text-center border border-white/40 shadow-sm hover:shadow-md transition-shadow">
            <span class="block text-5xl font-[900] text-slate-900 mb-2 tracking-tighter"><?php echo $stat[0]; ?></span>
            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest"><?php echo $stat[1]; ?></span>
        </div>
        <?php endforeach; ?>
    </section>

    <section id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 gap-12 min-h-[500px] transition-opacity duration-300">
        <div class="col-span-full py-32 text-center" id="portfolio-loader">
            <div class="inline-block animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-blue-600"></div>
            <p class="mt-6 text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Querying Archive...</p>
        </div>
    </section>

    <section id="portfolio-cta">
        <div class="dark-glass rounded-[3rem] border border-white/10 relative overflow-hidden shadow-2xl">
            <div class="h-10 bg-white/5 flex items-center px-6 space-x-2 border-b border-white/5">
                <div class="w-2.5 h-2.5 rounded-full bg-white/10"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-white/10"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-white/10"></div>
            </div>
            
            <div class="p-16 sm:p-28 text-center relative z-10">
                <div class="max-w-3xl mx-auto">
                    <h3 class="text-4xl sm:text-6xl font-[900] text-white mb-8 tracking-tighter leading-tight">
                        Elevate your <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">Digital Presence.</span>
                    </h3>
                    <p class="text-white/60 text-lg mb-12 italic leading-relaxed font-medium">
                        Our London-based team is ready to transform your vision into a high-performance reality. Let's discuss your next breakthrough project.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-6">
                        <button onclick="toggleModal()" class="px-12 py-5 bg-blue-600 text-white rounded-2xl font-black uppercase tracking-widest text-[10px] shadow-2xl shadow-blue-600/30 hover:bg-blue-700 hover:scale-105 active:scale-95 transition-all">
                            <i class="fas fa-paper-plane mr-3"></i> Request a Proposal
                        </button>
                        <button onclick="toggleServicesModal()" class="px-12 py-5 glass border border-white/20 text-white rounded-2xl font-black uppercase tracking-widest text-[10px] hover:bg-white/10 hover:scale-105 active:scale-95 transition-all">
                            Browse Services
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const grid = document.getElementById('portfolio-grid');
    const buttons = document.querySelectorAll('.filter-btn');

    /**
     * AJAX fetch with fade transition
     */
    function loadProjects(category = 'all') {
        grid.style.opacity = '0.3';
        
        const formData = new FormData();
        formData.append('action', 'filter_portfolio');
        formData.append('category', category);

        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            body: formData
        })
        .then(res => res.text())
        .then(data => {
            grid.innerHTML = data;
            grid.style.opacity = '1';
        })
        .catch(() => {
            grid.innerHTML = '<div class="col-span-full py-20 glass rounded-3xl text-center font-bold text-red-500">Connection error. Please refresh.</div>';
            grid.style.opacity = '1';
        });
    }

    buttons.forEach(btn => {
        btn.addEventListener('click', function() {
            buttons.forEach(b => {
                b.classList.remove('bg-slate-900', 'text-white', 'shadow-2xl');
                b.classList.add('glass', 'text-slate-600');
            });
            this.classList.remove('glass', 'text-slate-600');
            this.classList.add('bg-slate-900', 'text-white', 'shadow-2xl');
            loadProjects(this.dataset.category);
        });
    });

    loadProjects();
});
</script>

<?php get_footer(); ?>