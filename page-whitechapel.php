<?php
/**
 * Template Name: Whitechapel Landing Page
 * The template for displaying the Whitechapel specialized landing page.
 */

get_header(); ?>

<!-- WHITECHAPEL CONTENT AREA -->
<main class="pt-12 pb-32 px-4 sm:px-8 max-w-7xl mx-auto space-y-16 sm:space-y-24">

    <!-- HERO SECTION WINDOW -->
    <section id="whitechapel-hero" class="mt-4 sm:mt-10">
        <div class="os-window glass rounded-[1rem] overflow-hidden animate-in fade-in slide-in-from-bottom-10 duration-1000 shadow-2xl">
            <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest"></div>
            </div>
            <div class="p-8 sm:p-16 lg:p-20 text-center lg:text-left">
                <div class="max-w-4xl">
                    <h2 class="text-blue-600 font-black text-xs uppercase tracking-[0.3em] mb-4">Whitechapel Web Design Agency</h2>
                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-slate-900 leading-tight mb-8 tracking-tighter">
                        Web Design Agency London | <span class="text-blue-600">Whitechapel</span> & UK – Web Bird
                    </h1>
                    <p class="text-lg sm:text-xl text-slate-600 leading-relaxed italic border-l-4 border-blue-500 pl-6 mb-12">
                        We’re here to help. Feel free to reach out to our team of experts for any assistance you need. We’re just a message away and excited to connect with you.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <button onclick="toggleModal()" class="px-10 py-5 bg-blue-600 text-white rounded-full font-black hover:bg-blue-700 transition shadow-2xl shadow-blue-500/20 active:scale-95">Get Started Today</button>
                        <a href="#our-services" class="px-10 py-5 glass border border-white/20 text-slate-800 rounded-full font-bold hover:bg-white/50 transition text-center">Explore Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- REDESIGNED INTRO SECTION -->
    <section id="whitechapel-intro" class="relative">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- Main Content Glass Box -->
            <div class="lg:col-span-8 glass rounded-[1rem] border border-white/40 overflow-hidden flex flex-col shadow-xl">
                <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                    <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest"></div>
                </div>
                <div class="p-8 sm:p-12 space-y-8">
                    <div>
                        <h3 class="text-blue-600 font-black text-[10px] uppercase tracking-[0.4em] mb-3">Serving Whitechapel & Beyond</h3>
                        <h2 class="text-3xl sm:text-4xl font-black text-slate-900 leading-tight tracking-tight">Professional Web Design Agency in London</h2>
                    </div>
                    
                    <div class="space-y-6 text-slate-600 leading-relaxed text-sm sm:text-base">
                        <p class="italic border-l-2 border-blue-500/30 pl-4">In today’s fast-moving digital world, your website is more than just a digital business card—it’s your storefront, your customer’s first impression, and often the deciding factor.</p>
                        
                        <p>At <span class="text-slate-900 font-bold">Web Bird</span>, we understand the power of professional web design and the impact it has on visibility, trust, and sales. As a London-based web design agency, we specialise in creating websites that not only look beautiful but also deliver measurable results for businesses across the capital and beyond.</p>
                        
                        <p>Based in the heart of London, our team of designers and developers are passionate about crafting websites that help businesses succeed. Our reach doesn’t stop at East London—we proudly work with companies across the UK who are looking for fresh, modern, and effective web solutions.</p>
                    </div>

                    <!-- Location Tags -->
                    <div class="pt-6 border-t border-black/5">
                        <span class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-4">Active Service Nodes:</span>
                        <div class="flex flex-wrap gap-2">
                            <?php 
                            $locations = ['Whitechapel', 'Shoreditch', 'Aldgate', 'Bethnal Green', 'Canary Wharf', 'East London', 'UK Wide'];
                            foreach($locations as $loc): ?>
                                <span class="px-4 py-2 bg-white/50 border border-white/60 rounded-xl text-[10px] font-bold text-slate-700 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all cursor-default"><?php echo $loc; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expertise Widget Column -->
            <div class="lg:col-span-4 flex flex-col gap-8">
                <!-- Local Expertise Card -->
                <div class="dark-glass rounded-[1rem] p-10 border border-white/10 text-center relative overflow-hidden flex-grow flex flex-col justify-center items-center group shadow-xl">
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-500/10 blur-[80px] rounded-full group-hover:bg-blue-500/20 transition-all duration-700"></div>
                    <div class="w-20 h-20 bg-blue-500/10 rounded-3xl flex items-center justify-center mb-6 border border-blue-500/20 group-hover:scale-110 transition-transform duration-500">
                        <i class="fas fa-map-marker-alt text-4xl text-blue-400"></i>
                    </div>
                    <h4 class="text-2xl font-black text-white mb-4 tracking-tight">Local Expertise</h4>
                    <p class="text-white/60 text-sm leading-relaxed max-w-[200px] mx-auto">Strategically located to serve the vibrant business community of <span class="text-white font-bold">East London</span> with global standards.</p>
                    
                    <div class="mt-8 flex items-center space-x-2">
                        <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                        <span class="text-[10px] font-black text-green-400 uppercase tracking-widest">Available Locally</span>
                    </div>
                </div>

                <!-- Quick Action Card -->
                <div class="glass rounded-[1rem] p-8 border border-white/40 flex flex-col items-center text-center shadow-xl">
                    <h5 class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-4">Start Local</h5>
                    <button onclick="toggleModal()" class="w-full py-4 bg-slate-900 text-white rounded-xl font-black text-[10px] uppercase tracking-widest hover:bg-blue-600 transition-colors shadow-lg">Book Consultation</button>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY WEB DESIGN MATTERS -->
    <section id="importance">
        <div class="os-window glass rounded-[1rem] border border-white/40 overflow-hidden shadow-xl">
            <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest">WebBird — Whitechapel & London Specialists</div>
            </div>
            <div class="p-10 sm:p-20">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-2xl sm:text-4xl font-black text-slate-900 mb-8">Why Web Design Matters in 2026</h2>
                    <p class="text-slate-600 leading-relaxed mb-12">
                        Your website is the foundation of your digital presence. A poorly designed or outdated website can harm your credibility, frustrate visitors, and cost you valuable sales opportunities. On the other hand, a <span class="text-blue-600 font-bold">well-designed, mobile-friendly, and SEO-optimised website</span> has the power to attract new customers, generate leads, and establish your brand as trustworthy and professional.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left">
                        <div class="flex gap-6 group">
                            <div class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold mb-2">First Impressions</h4>
                                <p class="text-sm text-slate-500">Your site is often the deciding factor between a conversion and a bounce.</p>
                            </div>
                        </div>
                        <div class="flex gap-6 group">
                            <div class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-search-location"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold mb-2">Visibility</h4>
                                <p class="text-sm text-slate-500">Whether searching for "web design in Whitechapel" or "London," being visible is essential.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES GRID -->
    <section id="our-services">
        <div class="text-center mb-16">
            <h2 class="text-xs font-black text-white uppercase tracking-[0.4em] mb-4">Our Services</h2>
            <h3 class="text-3xl sm:text-5xl font-black text-white mb-6 tracking-tight">Tailored Digital Solutions</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- 1. Custom Web Design -->
            <div class="glass p-10 rounded-[1rem] border border-white/40 hover:bg-white transition-all duration-500 group shadow-lg">
                <div class="w-14 h-14 bg-blue-500/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i class="fas fa-laptop-code text-2xl"></i>
                </div>
                <h4 class="text-2xl font-black mb-4 tracking-tight">Custom Web Design & Development</h4>
                <p class="text-sm text-slate-500 leading-relaxed">Tailored websites fitting your brand identity. Modern, responsive, and built for Whitechapel cafés, Shoreditch startups, or corporate brands.</p>
            </div>

            <!-- 2. E-Commerce -->
            <div class="glass p-10 rounded-[1rem] border border-white/40 hover:bg-white transition-all duration-500 group shadow-lg">
                <div class="w-14 h-14 bg-purple-500/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                    <i class="fas fa-shopping-cart text-2xl"></i>
                </div>
                <h4 class="text-2xl font-black mb-4 tracking-tight">E-Commerce Solutions</h4>
                <p class="text-sm text-slate-500 leading-relaxed">Secure, easy-to-navigate online stores. We optimize product catalogues and checkouts to drive conversions.</p>
            </div>

            <!-- 3. SEO -->
            <div class="glass p-10 rounded-[1rem] border border-white/40 hover:bg-white transition-all duration-500 group shadow-lg">
                <div class="w-14 h-14 bg-emerald-500/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    <i class="fas fa-search-dollar text-2xl"></i>
                </div>
                <h4 class="text-2xl font-black mb-4 tracking-tight">SEO & Digital Marketing</h4>
                <p class="text-sm text-slate-500 leading-relaxed">Integrated SEO strategies. Keyword research and local optimization to rank higher in competitive London markets.</p>
            </div>

            <!-- 4. Branding -->
            <div class="glass p-10 rounded-[1rem] border border-white/40 hover:bg-white transition-all duration-500 group shadow-lg">
                <div class="w-14 h-14 bg-pink-500/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-pink-600 group-hover:text-white transition-colors">
                    <i class="fas fa-fingerprint text-2xl"></i>
                </div>
                <h4 class="text-2xl font-black mb-4 tracking-tight">Branding & Creative Strategy</h4>
                <p class="text-sm text-slate-500 leading-relaxed">Creating strong, memorable identities that carry across your website, social media, and marketing materials.</p>
            </div>

            <!-- 5. Support -->
            <div class="glass p-10 rounded-[1rem] border border-white/40 hover:bg-white transition-all duration-500 group shadow-lg">
                <div class="w-14 h-14 bg-orange-500/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                    <i class="fas fa-tools text-2xl"></i>
                </div>
                <h4 class="text-2xl font-black mb-4 tracking-tight">Website Support & Maintenance</h4>
                <p class="text-sm text-slate-500 leading-relaxed">Ongoing maintenance so you can focus on your business. We handle security checks and performance improvements.</p>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section id="why-choose-whitechapel">
        <div class="dark-glass rounded-[1rem] p-12 sm:p-20 border border-white/10 shadow-2xl">
            <h2 class="text-3xl sm:text-5xl font-black text-white mb-12 text-center tracking-tight">Why Choose Web Bird?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <div class="text-blue-400 font-black text-2xl italic tracking-tighter">01.</div>
                    <h4 class="text-white font-black text-lg">Local Expertise</h4>
                    <p class="text-white/50 text-xs leading-relaxed">Based in London, we understand the unique needs of Whitechapel and broader global markets.</p>
                </div>
                <div class="space-y-4">
                    <div class="text-blue-400 font-black text-2xl italic tracking-tighter">02.</div>
                    <h4 class="text-white font-black text-lg">Conversion-Focused</h4>
                    <p class="text-white/50 text-xs leading-relaxed">Our goal is to create websites that actually generate leads and sales, not just look good.</p>
                </div>
                <div class="space-y-4">
                    <div class="text-blue-400 font-black text-2xl italic tracking-tighter">03.</div>
                    <h4 class="text-white font-black text-lg">Mobile-First</h4>
                    <p class="text-white/50 text-xs leading-relaxed">Flawless function on smartphones and tablets, where the majority of web traffic now originates.</p>
                </div>
                <div class="space-y-4">
                    <div class="text-blue-400 font-black text-2xl italic tracking-tighter">04.</div>
                    <h4 class="text-white font-black text-lg">Affordable</h4>
                    <p class="text-white/50 text-xs leading-relaxed">Transparent, competitive pricing designed to be accessible for businesses of all sizes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- THE PROMISE SECTION -->
    <section id="promise">
        <div class="os-window glass rounded-[1rem] border border-white/40 overflow-hidden shadow-xl">
            <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest"></div>
            </div>
            <div class="p-10 sm:p-20 flex flex-col lg:flex-row gap-16 items-center">
                <div class="lg:w-1/2">
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 mb-6 tracking-tight">The Web Bird Promise</h2>
                    <p class="text-slate-600 mb-8 italic leading-relaxed">Our mission is simple: to help businesses thrive online. We combine creativity with technical expertise to deliver websites that are strategically built for growth.</p>
                    <ul class="space-y-4">
                        <li class="flex items-center text-sm font-bold text-slate-700"><i class="fas fa-check-circle text-blue-600 mr-3"></i> Fast-loading and fully responsive</li>
                        <li class="flex items-center text-sm font-bold text-slate-700"><i class="fas fa-check-circle text-blue-600 mr-3"></i> Optimised for SEO from day one</li>
                        <li class="flex items-center text-sm font-bold text-slate-700"><i class="fas fa-check-circle text-blue-600 mr-3"></i> Secure, reliable, and future-ready</li>
                        <li class="flex items-center text-sm font-bold text-slate-700"><i class="fas fa-check-circle text-blue-600 mr-3"></i> Designed to showcase your brand in the best light</li>
                    </ul>
                </div>
                <div class="lg:w-1/2 dark-glass p-8 rounded-3xl border border-white/10 text-center shadow-2xl relative overflow-hidden group">
                    <div class="absolute -inset-10 bg-blue-600/5 blur-3xl rounded-full group-hover:bg-blue-600/10 transition-all"></div>
                    <div class="relative z-10">
                        <h3 class="text-2xl font-black text-white mb-6 tracking-tighter">Get Started Today</h3>
                        <p class="text-white/60 text-sm mb-10 leading-relaxed">Your website is often the first interaction a potential customer has with your brand. Make it count.</p>
                        <button onclick="toggleModal()" class="w-full py-4 bg-white text-blue-600 rounded-2xl font-black hover:bg-blue-50 transition shadow-xl uppercase tracking-widest text-[10px]">Free Consultation</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>