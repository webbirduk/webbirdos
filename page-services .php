<?php
/**
 * Template Name: Services Page
 * The template for displaying the Services page content.
 */

get_header(); ?>

<!-- SERVICES CONTENT AREA -->
<main class="pt-12 pb-32 px-4 sm:px-8 max-w-7xl mx-auto space-y-16 sm:space-y-24">

    <!-- HERO SECTION WINDOW: Our Popular Services -->
    <section id="services-hero" class="mt-4 sm:mt-10">
        <div class="os-window glass rounded-2xl overflow-hidden animate-in fade-in slide-in-from-bottom-10 duration-1000">
            <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest">Services — Explore Our Offerings</div>
            </div>
            <div class="p-8 sm:p-16 lg:p-20 text-center lg:text-left">
                <div class="max-w-4xl">
                    <h2 class="text-blue-600 font-black text-xs uppercase tracking-[0.3em] mb-4">Our Popular Services</h2>
                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-slate-900 leading-tight mb-8">
                        Explore Our Services
                    </h1>
                    <p class="text-lg sm:text-xl text-slate-600 leading-relaxed italic border-l-4 border-blue-500 pl-6 mb-12">
                        Discover the core web design and development solutions that have helped countless businesses succeed online. At Webird, we specialize in delivering custom websites tailored to your brand and goals — designed for performance, usability, and growth.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- INTRO SECTION -->
    <section id="services-intro" class="text-center max-w-4xl mx-auto">
        <h2 class="text-xs font-black text-white uppercase tracking-[0.4em] mb-4">Specialized Solutions</h2>
        <h3 class="text-3xl sm:text-4xl font-black text-white mb-6">Smart, Scalable Website Design services</h3>
        <p class="text-white/80 leading-relaxed">
            We offer a full range of web design and development services to help your business thrive online. Whether you need a brand-new site or a complete redesign, we build fast, responsive, and conversion-focused websites tailored to your brand and goals.
        </p>
    </section>

    <!-- COMPREHENSIVE SERVICES GRID -->
    <section id="services-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Service 1: Custom Web Design -->
        <div class="glass p-10 rounded-[2.5rem] border border-white/40 group hover:bg-white transition-all duration-500">
            <div class="w-14 h-14 bg-blue-500/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                <i class="fas fa-paint-brush text-2xl"></i>
            </div>
            <h4 class="text-2xl font-black mb-4">Custom Web Design</h4>
            <p class="text-sm text-slate-500 leading-relaxed mb-6">Unique, high-performance UI/UX designs crafted specifically for your brand identity and target London audience.</p>
            <ul class="space-y-3 text-[11px] font-black uppercase tracking-widest text-slate-400">
                <li class="flex items-center text-blue-600"><i class="fas fa-check mr-2"></i> Responsive Layouts</li>
                <li class="flex items-center text-blue-600"><i class="fas fa-check mr-2"></i> User Research</li>
            </ul>
        </div>

        <!-- Service 2: E-Commerce Development -->
        <div class="glass p-10 rounded-[2.5rem] border border-white/40 group hover:bg-white transition-all duration-500">
            <div class="w-14 h-14 bg-purple-500/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                <i class="fas fa-shopping-bag text-2xl"></i>
            </div>
            <h4 class="text-2xl font-black mb-4">E-Commerce Development</h4>
            <p class="text-sm text-slate-500 leading-relaxed mb-6">Scalable Shopify & WooCommerce stores built to maximize conversions and simplify inventory management.</p>
            <ul class="space-y-3 text-[11px] font-black uppercase tracking-widest text-slate-400">
                <li class="flex items-center text-purple-600"><i class="fas fa-check mr-2"></i> Secure Payments</li>
                <li class="flex items-center text-purple-600"><i class="fas fa-check mr-2"></i> High ROI Focus</li>
            </ul>
        </div>

        <!-- Service 3: Technical SEO -->
        <div class="glass p-10 rounded-[2.5rem] border border-white/40 group hover:bg-white transition-all duration-500">
            <div class="w-14 h-14 bg-emerald-500/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                <i class="fas fa-chart-line text-2xl"></i>
            </div>
            <h4 class="text-2xl font-black mb-4">Technical SEO</h4>
            <p class="text-sm text-slate-500 leading-relaxed mb-6">Comprehensive search engine optimization to boost your rankings on Google and drive organic traffic locally and globally.</p>
            <ul class="space-y-3 text-[11px] font-black uppercase tracking-widest text-slate-400">
                <li class="flex items-center text-emerald-600"><i class="fas fa-check mr-2"></i> Keyword Research</li>
                <li class="flex items-center text-emerald-600"><i class="fas fa-check mr-2"></i> Schema Markup</li>
            </ul>
        </div>

        <!-- Service 4: Website Maintenance -->
        <div class="glass p-10 rounded-[2.5rem] border border-white/40 group hover:bg-white transition-all duration-500">
            <div class="w-14 h-14 bg-orange-500/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                <i class="fas fa-tools text-2xl"></i>
            </div>
            <h4 class="text-2xl font-black mb-4">Website Maintenance</h4>
            <p class="text-sm text-slate-500 leading-relaxed mb-6">24/7 security monitoring, routine backups, and content updates to keep your site fast, secure, and modern.</p>
            <ul class="space-y-3 text-[11px] font-black uppercase tracking-widest text-slate-400">
                <li class="flex items-center text-orange-600"><i class="fas fa-check mr-2"></i> Daily Backups</li>
                <li class="flex items-center text-orange-600"><i class="fas fa-check mr-2"></i> SSL Management</li>
            </ul>
        </div>

        <!-- Service 5: Branding & Identity -->
        <div class="glass p-10 rounded-[2.5rem] border border-white/40 group hover:bg-white transition-all duration-500">
            <div class="w-14 h-14 bg-pink-500/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-pink-600 group-hover:text-white transition-colors">
                <i class="fas fa-fingerprint text-2xl"></i>
            </div>
            <h4 class="text-2xl font-black mb-4">Branding & Identity</h4>
            <p class="text-sm text-slate-500 leading-relaxed mb-6">From logo design to complete brand guidelines, we build a cohesive visual story that resonates with your customers.</p>
            <ul class="space-y-3 text-[11px] font-black uppercase tracking-widest text-slate-400">
                <li class="flex items-center text-pink-600"><i class="fas fa-check mr-2"></i> Logo Design</li>
                <li class="flex items-center text-pink-600"><i class="fas fa-check mr-2"></i> Brand Strategy</li>
            </ul>
        </div>

        <!-- Service 6: Speed Optimization -->
        <div class="glass p-10 rounded-[2.5rem] border border-white/40 group hover:bg-white transition-all duration-500">
            <div class="w-14 h-14 bg-cyan-500/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-cyan-600 group-hover:text-white transition-colors">
                <i class="fas fa-bolt text-2xl"></i>
            </div>
            <h4 class="text-2xl font-black mb-4">Speed Optimization</h4>
            <p class="text-sm text-slate-500 leading-relaxed mb-6">Core Web Vitals improvement and image compression to ensure your site loads in under 2 seconds across all devices.</p>
            <ul class="space-y-3 text-[11px] font-black uppercase tracking-widest text-slate-400">
                <li class="flex items-center text-cyan-600"><i class="fas fa-check mr-2"></i> 90+ PageSpeed Score</li>
                <li class="flex items-center text-cyan-600"><i class="fas fa-check mr-2"></i> CDN Setup</li>
            </ul>
        </div>

        <!-- Additional Services row -->
        <!-- Service 7: iOS App Development -->
        <div class="glass p-10 rounded-[2.5rem] border border-white/40 group hover:bg-white transition-all duration-500">
            <div class="w-14 h-14 bg-sky-400/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-sky-400 group-hover:text-white transition-colors">
                <i class="fab fa-apple text-2xl"></i>
            </div>
            <h4 class="text-2xl font-black mb-4">iOS App Development</h4>
            <p class="text-sm text-slate-500 leading-relaxed mb-6">High-performance native iOS applications designed for elegance, leveraging the latest Swift and SwiftUI frameworks.</p>
            <ul class="space-y-3 text-[11px] font-black uppercase tracking-widest text-slate-400">
                <li class="flex items-center text-sky-500"><i class="fas fa-check mr-2"></i> iPhone & iPad</li>
                <li class="flex items-center text-sky-500"><i class="fas fa-check mr-2"></i> App Store Ready</li>
            </ul>
        </div>

        <!-- Service 8: Android Development -->
        <div class="glass p-10 rounded-[2.5rem] border border-white/40 group hover:bg-white transition-all duration-500">
            <div class="w-14 h-14 bg-lime-500/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-lime-500 group-hover:text-white transition-colors">
                <i class="fab fa-android text-2xl"></i>
            </div>
            <h4 class="text-2xl font-black mb-4">Android Development</h4>
            <p class="text-sm text-slate-500 leading-relaxed mb-6">Scalable and robust Android solutions built with Kotlin, ensuring compatibility across all modern mobile devices.</p>
            <ul class="space-y-3 text-[11px] font-black uppercase tracking-widest text-slate-400">
                <li class="flex items-center text-lime-600"><i class="fas fa-check mr-2"></i> Play Store Strategy</li>
                <li class="flex items-center text-lime-600"><i class="fas fa-check mr-2"></i> Kotlin Native</li>
            </ul>
        </div>

        <!-- Service 9: Web App (PWA) -->
        <div class="glass p-10 rounded-[2.5rem] border border-white/40 group hover:bg-white transition-all duration-500">
            <div class="w-14 h-14 bg-fuchsia-500/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-fuchsia-600 group-hover:text-white transition-colors">
                <i class="fas fa-globe text-2xl"></i>
            </div>
            <h4 class="text-2xl font-black mb-4">Web App (PWA)</h4>
            <p class="text-sm text-slate-500 leading-relaxed mb-6">Progressive Web Applications that provide an app-like experience through the browser with offline support.</p>
            <ul class="space-y-3 text-[11px] font-black uppercase tracking-widest text-slate-400">
                <li class="flex items-center text-fuchsia-600"><i class="fas fa-check mr-2"></i> Offline Mode</li>
                <li class="flex items-center text-fuchsia-600"><i class="fas fa-check mr-2"></i> Push Notifications</li>
            </ul>
        </div>
    </section>

    <!-- HOW IT WORKS SECTION -->
    <section id="how-it-works">
        <div class="text-center mb-16">
            <h2 class="text-xs font-black text-white uppercase tracking-[0.4em] mb-4">How It Works</h2>
            <h3 class="text-3xl sm:text-5xl font-black text-white mb-6">Step-by-Step guide to Website success</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="glass p-8 rounded-3xl relative overflow-hidden group">
                <div class="text-7xl font-black text-slate-900/5 absolute -right-2 -top-2 transition group-hover:text-blue-500/10">01</div>
                <h4 class="text-xl font-black mb-4 relative z-10">Understanding Client's Needs</h4>
                <p class="text-xs text-slate-500 leading-relaxed">We begin by learning about your brand, target audience, and goals to ensure every decision aligns with your vision.</p>
            </div>
            <div class="glass p-8 rounded-3xl relative overflow-hidden group">
                <div class="text-7xl font-black text-slate-900/5 absolute -right-2 -top-2 transition group-hover:text-purple-500/10">02</div>
                <h4 class="text-xl font-black mb-4 relative z-10">Strategic Planning</h4>
                <p class="text-xs text-slate-500 leading-relaxed">Next, we develop a custom web design and development plan, outlining site structure, features, and user experience.</p>
            </div>
            <div class="glass p-8 rounded-3xl relative overflow-hidden group">
                <div class="text-7xl font-black text-slate-900/5 absolute -right-2 -top-2 transition group-hover:text-pink-500/10">03</div>
                <h4 class="text-xl font-black mb-4 relative z-10">Design & Development</h4>
                <p class="text-xs text-slate-500 leading-relaxed">Our team creates the visual design and builds your website with the latest technology — ensuring it’s responsive and fast.</p>
            </div>
            <div class="glass p-8 rounded-3xl relative overflow-hidden group">
                <div class="text-7xl font-black text-slate-900/5 absolute -right-2 -top-2 transition group-hover:text-emerald-500/10">04</div>
                <h4 class="text-xl font-black mb-4 relative z-10">Launch & Support</h4>
                <p class="text-xs text-slate-500 leading-relaxed">After thorough testing, we launch your site and provide ongoing maintenance and support to keep your presence strong.</p>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section id="testimonials">
        <div class="os-window glass rounded-[2.5rem] border border-white/50 overflow-hidden">
            <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest">Testimonials — See What Our Users Say</div>
            </div>
            <div class="p-10 sm:p-20">
                <div class="text-center mb-16">
                    <h2 class="text-blue-600 font-black text-xs uppercase tracking-widest mb-4">Testimonials</h2>
                    <h3 class="text-3xl sm:text-4xl font-black text-slate-900">See What Our Beloved Users Said About Us</h3>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="bg-white/40 p-10 rounded-[2.5rem] border border-white/60">
                        <div class="flex text-yellow-500 mb-6 space-x-1">
                            <i class="fas fa-star text-[10px]"></i><i class="fas fa-star text-[10px]"></i><i class="fas fa-star text-[10px]"></i><i class="fas fa-star text-[10px]"></i><i class="fas fa-star text-[10px]"></i>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed mb-8 italic">"Everything I Needed in One Place !! I'm so glad I found Web Bird. They built my website, designed all my branding, and even handled my social media. It saved me time and stress."</p>
                        <div>
                            <h4 class="text-base font-black text-slate-900">Mehmet Aslan</h4>
                            <p class="text-[10px] text-blue-600 font-black uppercase tracking-widest">Founder of Law Firm</p>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="bg-white/40 p-10 rounded-[2.5rem] border border-white/60">
                        <div class="flex text-yellow-500 mb-6 space-x-1">
                            <i class="fas fa-star text-[10px]"></i><i class="fas fa-star text-[10px]"></i><i class="fas fa-star text-[10px]"></i><i class="fas fa-star text-[10px]"></i><i class="fas fa-star text-[10px]"></i>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed mb-8 italic">"Top-Tier Web Agency for Custom Development Projects.! I had a unique idea for my website, and Web Bird turned it into reality with custom development."</p>
                        <div>
                            <h4 class="text-base font-black text-slate-900">Manikanta</h4>
                            <p class="text-[10px] text-purple-600 font-black uppercase tracking-widest">Marketing Director</p>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="bg-white/40 p-10 rounded-[2.5rem] border border-white/60">
                        <div class="flex text-yellow-500 mb-6 space-x-1">
                            <i class="fas fa-star text-[10px]"></i><i class="fas fa-star text-[10px]"></i><i class="fas fa-star text-[10px]"></i><i class="fas fa-star text-[10px]"></i><i class="fas fa-star text-[10px]"></i>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed mb-8 italic">"Web Bird created a stunning, mobile-friendly website for my business. Their web designers in London are professional, creative, and highly skilled."</p>
                        <div>
                            <h4 class="text-base font-black text-slate-900">Dhrumil Kalyani</h4>
                            <p class="text-[10px] text-pink-600 font-black uppercase tracking-widest">Owner of Gym</p>
                        </div>
                    </div>
                    <!-- Testimonial 4 -->
                    <div class="bg-white/40 p-10 rounded-[2.5rem] border border-white/60">
                        <div class="flex text-yellow-500 mb-6 space-x-1">
                            <i class="fas fa-star text-[10px]"></i><i class="fas fa-star text-[10px]"></i><i class="fas fa-star text-[10px]"></i><i class="fas fa-star text-[10px]"></i><i class="fas fa-star text-[10px]"></i>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed mb-8 italic">"Great Service and Great People. Web Bird helped me launch my business online. They handled the website, branding visuals, and even gave my social media a fresh, consistent look."</p>
                        <div>
                            <h4 class="text-base font-black text-slate-900">Amran</h4>
                            <p class="text-[10px] text-emerald-600 font-black uppercase tracking-widest">Business Owner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION (REDESIGNED) -->
    <section id="faq">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            <!-- Sidebar Header -->
            <div class="lg:col-span-4 lg:sticky lg:top-24">
                <h2 class="text-blue-400 font-black text-xs uppercase tracking-[0.4em] mb-4">Support & Help</h2>
                <h3 class="text-3xl sm:text-5xl font-black text-white leading-tight mb-8 tracking-tighter">Answers to Your Web Design Queries</h3>
                <p class="text-lg text-white/60 leading-relaxed mb-8 italic">Find answers to common questions about our services, process, pricing, and how we help businesses grow online.</p>
                <button onclick="toggleModal()" class="px-8 py-4 bg-white/10 backdrop-blur-md border border-white/20 text-white rounded-full font-bold hover:bg-white hover:text-blue-600 transition shadow-xl flex items-center gap-3">
                    <i class="fas fa-envelope-open-text text-sm"></i> Still have questions?
                </button>
            </div>

            <!-- Accordion List -->
            <div class="lg:col-span-8 space-y-3">
                <!-- Item 1 -->
                <details class="group glass rounded-3xl border border-white/20 transition-all duration-300 open:bg-white/90 open:shadow-2xl overflow-hidden">
                    <summary class="flex items-center justify-between p-6 sm:p-8 cursor-pointer list-none">
                        <h4 class="text-sm sm:text-base font-black text-white group-open:text-slate-900 transition-colors">What services does Webird provide?</h4>
                        <span class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition-transform duration-300 group-open:rotate-180 group-open:bg-blue-600 group-open:text-white">
                            <i class="fas fa-chevron-down text-[10px]"></i>
                        </span>
                    </summary>
                    <div class="px-6 sm:px-8 pb-8 text-xs sm:text-sm text-slate-500 leading-relaxed animate-in fade-in slide-in-from-top-2">
                        We specialize in custom web design, website development, e-commerce solutions, website maintenance, SEO optimization, UX/UI design, and digital branding. Whatever your needs, we create tailored solutions that help your business stand out and succeed online.
                    </div>
                </details>

                <!-- Item 2 -->
                <details class="group glass rounded-3xl border border-white/20 transition-all duration-300 open:bg-white/90 open:shadow-2xl overflow-hidden">
                    <summary class="flex items-center justify-between p-6 sm:p-8 cursor-pointer list-none">
                        <h4 class="text-sm sm:text-base font-black text-white group-open:text-slate-900 transition-colors">How can a web design agency help my business?</h4>
                        <summary class="hidden"></summary> <!-- Fix for some browser summary styles -->
                        <span class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition-transform duration-300 group-open:rotate-180 group-open:bg-blue-600 group-open:text-white">
                            <i class="fas fa-chevron-down text-[10px]"></i>
                        </span>
                    </summary>
                    <div class="px-6 sm:px-8 pb-8 text-xs sm:text-sm text-slate-500 leading-relaxed animate-in fade-in slide-in-from-top-2">
                        A professional agency ensures your site is conversion-focused, SEO-optimized, and reflects your brand accurately. We handle the technical complexities so you can focus on running your business, resulting in higher engagement, better leads, and increased sales.
                    </div>
                </details>

                <!-- Item 3 -->
                <details class="group glass rounded-3xl border border-white/20 transition-all duration-300 open:bg-white/90 open:shadow-2xl overflow-hidden">
                    <summary class="flex items-center justify-between p-6 sm:p-8 cursor-pointer list-none">
                        <h4 class="text-sm sm:text-base font-black text-white group-open:text-slate-900 transition-colors">What industries do you specialize in?</h4>
                        <span class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition-transform duration-300 group-open:rotate-180 group-open:bg-blue-600 group-open:text-white">
                            <i class="fas fa-chevron-down text-[10px]"></i>
                        </span>
                    </summary>
                    <div class="px-6 sm:px-8 pb-8 text-xs sm:text-sm text-slate-500 leading-relaxed animate-in fade-in slide-in-from-top-2">
                        We work across various sectors including Fashion, Law, Fitness, Real Estate, E-commerce, and Professional Services. Our approach is industry-agnostic because we focus on the unique business goals and target audience of each individual client.
                    </div>
                </details>

                <!-- Item 4 -->
                <details class="group glass rounded-3xl border border-white/20 transition-all duration-300 open:bg-white/90 open:shadow-2xl overflow-hidden">
                    <summary class="flex items-center justify-between p-6 sm:p-8 cursor-pointer list-none">
                        <h4 class="text-sm sm:text-base font-black text-white group-open:text-slate-900 transition-colors">Do you work with small businesses and startups?</h4>
                        <span class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition-transform duration-300 group-open:rotate-180 group-open:bg-blue-600 group-open:text-white">
                            <i class="fas fa-chevron-down text-[10px]"></i>
                        </span>
                    </summary>
                    <div class="px-6 sm:px-8 pb-8 text-xs sm:text-sm text-slate-500 leading-relaxed animate-in fade-in slide-in-from-top-2">
                        Yes! We have specialized starter packages designed to help small businesses and startups establish a powerful online presence affordably. We believe great design should be accessible to businesses at every stage of their growth.
                    </div>
                </details>

                <!-- Item 5 -->
                <details class="group glass rounded-3xl border border-white/20 transition-all duration-300 open:bg-white/90 open:shadow-2xl overflow-hidden">
                    <summary class="flex items-center justify-between p-6 sm:p-8 cursor-pointer list-none">
                        <h4 class="text-sm sm:text-base font-black text-white group-open:text-slate-900 transition-colors">How do you develop a web design strategy?</h4>
                        <span class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center transition-transform duration-300 group-open:rotate-180 group-open:bg-blue-600 group-open:text-white">
                            <i class="fas fa-chevron-down text-[10px]"></i>
                        </span>
                    </summary>
                    <div class="px-6 sm:px-8 pb-8 text-xs sm:text-sm text-slate-500 leading-relaxed animate-in fade-in slide-in-from-top-2">
                        Our strategy development is a collaborative 4-step process: (1) Discovery of your goals, (2) User Research and Competitor Analysis, (3) Wireframing and User Experience mapping, and (4) Visual Prototype creation. We ensure every design element serves a specific purpose in your customer's journey.
                    </div>
                </details>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>