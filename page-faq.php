<?php
/**
 * Template Name: FAQ Page
 */

get_header(); ?>

<main class="pt-32 pb-20 px-4">
    <div class="max-w-4xl mx-auto">
        <div class="os-window glass rounded-[2.5rem] p-8 md:p-16 mb-12 text-center border border-white/40">
            <h1 class="text-[10px] font-black uppercase tracking-[0.2em] text-blue-600 mb-4">FAQs</h1>
            <h2 class="text-4xl md:text-6xl font-black text-slate-900 mb-6 leading-tight">
                Do You Have a <span class="text-white">Questions?</span>
            </h2>
            <p class="text-slate-600 max-w-2xl mx-auto mb-10 font-medium">
                Find answers to common inquiries about our social media marketing agency’s services, pricing, and strategies in our FAQ section.
            </p>
            
            <div class="relative max-w-lg mx-auto">
                <i class="fas fa-search absolute left-5 top-1/2 -translate-y-1/2 text-slate-400"></i>
                <input type="text" placeholder="Search" 
                       class="w-full pl-14 pr-6 py-5 rounded-2xl glass border border-white/40 focus:ring-2 focus:ring-blue-500 outline-none text-sm font-medium">
            </div>
        </div>

        <div class="space-y-6 mb-20">


            <?php
            $faqs = [
                "What services does your agency provide?" => "
                    We provide end-to-end digital solutions including:
                    <ul class='grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-2 mt-4 text-xs font-bold uppercase text-blue-600'>
                        <li><i class='fas fa-check mr-2'></i> Custom Web Design</li>
                        <li><i class='fas fa-check mr-2'></i> E-Commerce Development</li>
                        <li><i class='fas fa-check mr-2'></i> Technical SEO</li>
                        <li><i class='fas fa-check mr-2'></i> Website Maintenance</li>
                        <li><i class='fas fa-check mr-2'></i> Branding & Identity</li>
                        <li><i class='fas fa-check mr-2'></i> Speed Optimization</li>
                        <li><i class='fas fa-check mr-2'></i> Digital Marketing</li>
                        <li><i class='fas fa-check mr-2'></i> Custom Integrations</li>
                        <li><i class='fas fa-check mr-2'></i> iOS App Development</li>
                        <li><i class='fas fa-check mr-2'></i> Android Development</li>
                        <li><i class='fas fa-check mr-2'></i> Web App (PWA)</li>
                        <li><i class='fas fa-check mr-2'></i> Native Mobile Apps</li>
                    </ul>",
                "How can a social media agency help my business?" => "We help businesses thrive online through smart, impactful design and social strategy that performs, scales, and converts your target audience.",
                "What industries do you specialize in?" => "Based in London, we specialize in a wide range of industries, from local startups to large-scale enterprises, providing tailored digital experiences.",
                "Do you work with small businesses and startups?" => "Absolutely. We offer scalable packages specifically designed to help small businesses and startups grow their digital footprint efficiently.",
                "How do you develop a social media strategy?" => "We combine creativity, strategy, and data. We research your audience, innovate on content, and keep you informed through a transparent collaboration process."
            ];

            $i = 1;
            foreach ($faqs as $question => $answer) : ?>
                <div class="os-window glass rounded-3xl overflow-hidden border border-white/20 transition-all duration-300 hover:border-white/60">
                    <button class="w-full px-8 py-6 text-left flex items-center justify-between group" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('.fa-chevron-down').classList.toggle('rotate-180')">
                        <span class="flex items-center space-x-4">
                            <span class="text-blue-600 font-black text-lg"><?php echo $i++; ?>.</span>
                            <span class="font-bold text-slate-800"><?php echo $question; ?></span>
                        </span>
                        <i class="fas fa-chevron-down text-slate-400 transition-transform duration-300"></i>
                    </button>
                    <div class="hidden px-8 pb-8 pt-2">
                        <div class="h-px bg-black/5 mb-6"></div>
                        <div class="text-slate-600 leading-relaxed text-sm">
                            <?php echo $answer; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="os-window bg-blue-600 rounded-[2.5rem] p-10 md:p-16 text-center text-white relative overflow-hidden shadow-2xl shadow-blue-600/20">
            <div class="relative z-10">
                <h4 class="text-xs font-black uppercase tracking-[0.3em] mb-6 opacity-80">Let's Grow With Us!</h4>
                <h3 class="text-3xl md:text-5xl font-black mb-8 leading-tight">
                    Transform Your Social Media <br>Presence Now!
                </h3>
                <p class="text-blue-100 mb-10 max-w-xl mx-auto font-medium">
                    We shift you from todays reality to tomorrow’s potential ensuring lasting growth and digital excellence.
                </p>
                <button onclick="toggleModal()" class="px-12 py-5 bg-white text-blue-600 rounded-2xl font-black uppercase tracking-widest text-xs hover:scale-105 transition-transform">
                    Get Started Now
                </button>
            </div>
            <i class="fab fa-apple absolute -bottom-10 -right-10 text-[15rem] opacity-10 rotate-12"></i>
        </div>
    </div>
</main>

<style>
    .rotate-180 { transform: rotate(180deg); }
    .glass { background: rgba(255, 255, 255, 0.75); backdrop-filter: blur(25px); -webkit-backdrop-filter: blur(25px); }
</style>

<?php get_footer(); ?>