<?php get_header(); ?>

<!-- MAIN CONTENT AREA -->
    <main class="pt-12 pb-32 px-4 sm:px-8 max-w-7xl mx-auto space-y-16 sm:space-y-24">
        
        <!-- HERO SECTION WINDOW -->
        <section id="home" class="mt-4 sm:mt-10">
            <div class="os-window glass rounded-2xl overflow-hidden animate-in fade-in slide-in-from-bottom-10 duration-1000">
                <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                    <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest">WebBird — Home</div>
                </div>
                <div class="p-6 sm:p-12 lg:p-16 flex flex-col lg:flex-row items-center gap-12">
                    <div class="lg:w-3/5 text-center lg:text-left">
                        <h2 class="text-blue-600 font-bold mb-2 text-sm sm:text-base">#1 Best Web Design Agency in London</h2>
                        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-slate-900 leading-tight mb-6">
                            Best Affordable Web Design Services
                        </h1>
                        <p class="text-base sm:text-xl text-slate-600 mb-8 leading-relaxed">
                            We’re Webbird – The best Web Design agency in London, UK helping brands build bold, modern websites that do more than just look good. They perform.
                        </p>
                        <div class="flex flex-col sm:row justify-center lg:justify-start gap-4">
                            <a href="#pricing" class="px-8 py-4 bg-blue-600 text-white rounded-full font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-200 text-center flex items-center justify-center"><i class="fas fa-tag mr-2"></i>Pricing Plan</a>
                            <button onclick="toggleModal()" class="px-8 py-4 glass border border-blue-200 text-blue-800 rounded-full font-bold hover:bg-white/50 transition flex items-center justify-center"><i class="fas fa-comment-dots mr-2"></i>Let's Talk</button>
                        </div>
                        <div class="mt-12 flex flex-wrap justify-center lg:justify-start items-center gap-8">
                            <div>
                                <span class="block text-3xl font-bold text-slate-800">210+</span>
                                <span class="text-xs text-slate-500 uppercase tracking-widest font-bold">Happy customers</span>
                            </div>
                            <div class="hidden sm:block h-10 w-px bg-gray-300"></div>
                            <div>
                                <span class="block text-xs font-bold text-slate-700 uppercase tracking-widest mb-1">Verified by</span>
                                <div class="logo-slide-container">
                                    <div class="logo-slide-track text-blue-500 text-3xl flex items-center">
                                        <i class="fab fa-wordpress"></i>
                                        <i class="fab fa-google"></i>
                                        <i class="fab fa-upwork"></i>
                                        <i class="fab fa-stack-overflow"></i>
                                        <i class="fab fa-shopify"></i>
                                        <i class="fab fa-elementor"></i>
                                        <i class="fab fa-android"></i>
                                        <i class="fab fa-apple"></i>
                                        <i class="fab fa-wix"></i>
                                        <i class="fab fa-flutter"></i>
                                        <i class="fab fa-woocommerce"></i>
                                        <!-- Seamless Loop Duplicates -->
                                        <i class="fab fa-wordpress"></i>
                                        <i class="fab fa-google"></i>
                                        <i class="fab fa-upwork"></i>
                                        <i class="fab fa-stack-overflow"></i>
                                        <i class="fab fa-shopify"></i>
                                        <i class="fab fa-elementor"></i>
                                        <i class="fab fa-android"></i>
                                        <i class="fab fa-apple"></i>
                                        <i class="fab fa-wix"></i>
                                        <i class="fab fa-flutter"></i>
                                        <i class="fab fa-woocommerce"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- DASHBOARD SECTION -->
                    <div class="lg:w-2/5 w-full">
                        <div class="dark-glass p-1 rounded-[2rem] border border-white/20 shadow-2xl relative overflow-hidden">
                            <div class="bg-slate-900/40 rounded-[1.8rem] p-6 sm:p-8">
                                <div class="flex items-start justify-between mb-8">
                                    <div>
                                        <h4 class="text-[10px] text-blue-400 font-black uppercase tracking-[0.2em] mb-1">Live Feed</h4>
                                        <h3 class="text-white text-xl font-black glow-text">Agency Dashboard</h3>
                                    </div>
                                    <div class="flex items-center space-x-2 bg-green-500/10 border border-green-500/20 px-3 py-1 rounded-full">
                                        <span class="relative flex h-2 w-2">
                                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                                        </span>
                                        <span class="text-[9px] text-green-400 font-black uppercase tracking-tighter">System Online</span>
                                    </div>
                                </div>
                                <div class="space-y-8">
                                    <div class="group">
                                        <div class="flex justify-between items-end mb-3">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center border border-blue-500/30">
                                                    <i class="fas fa-layer-group text-blue-400 text-xs"></i>
                                                </div>
                                                <span class="text-[11px] text-white/60 font-bold uppercase tracking-wide">Workload Capacity</span>
                                            </div>
                                            <span class="text-white font-black text-lg tracking-tight">4 <span class="text-[10px] text-white/40 font-normal uppercase ml-1">Live Projects</span></span>
                                        </div>
                                        <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden p-[2px] border border-white/10">
                                            <div class="h-full bg-gradient-to-r from-blue-600 to-indigo-400 rounded-full w-[22%] shadow-[0_0_10px_rgba(59,130,246,0.3)]"></div>
                                        </div>
                                    </div>
                                    <div class="bg-white/5 border border-white/10 rounded-2xl p-4 relative overflow-hidden group hover:bg-white/10 transition-colors">
                                        <div class="relative z-10">
                                            <div class="flex justify-between items-center mb-4">
                                                <span class="text-[10px] text-white/50 font-black uppercase tracking-[0.15em]">Global Success Rate</span>
                                                <div class="flex items-center text-green-400 text-[10px] font-black">
                                                    <i class="fas fa-caret-up mr-1"></i> 0.2%
                                                </div>
                                            </div>
                                            <div class="flex items-baseline space-x-2 mb-4">
                                                <span class="text-4xl font-black text-white glow-text tracking-tighter">99.9%</span>
                                                <span class="text-green-400 text-xs font-bold uppercase tracking-widest">Target Met</span>
                                            </div>
                                            <div class="success-track">
                                                <div class="success-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between pt-2">
                                        <div class="flex items-center space-x-3">
                                            <div class="flex -space-x-2">
                                                <div class="w-7 h-7 rounded-full border-2 border-slate-900 bg-slate-800 flex items-center justify-center text-[8px] text-white font-black" title="United Kingdom">UK</div>
                                                <div class="w-7 h-7 rounded-full border-2 border-slate-900 bg-blue-600 flex items-center justify-center text-[8px] text-white font-black" title="United States">US</div>
                                                <div class="w-7 h-7 rounded-full border-2 border-slate-900 bg-emerald-600 flex items-center justify-center text-[8px] text-white font-black" title="Europe">EU</div>
                                            </div>
                                            <span class="text-[9px] text-white/30 font-bold uppercase tracking-[0.1em]">Global Nodes Active</span>
                                        </div>
                                        <div class="text-right">
                                            <span class="block text-[8px] text-white/40 font-black uppercase tracking-tighter">Updated</span>
                                            <span class="text-[10px] text-white/70 font-mono">Just now</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHY WORK WITH US SECTION -->
        <section id="why-us">
            <div class="glass rounded-[1rem] border border-white/40 overflow-hidden">
                <!-- Dummy Window Header -->
                <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                </div>
                <div class="p-8 sm:p-16 grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    <div>
                        <h2 class="text-blue-600 font-black text-xs uppercase tracking-[0.3em] mb-4">Why Work With Us?</h2>
                        <h3 class="text-3xl sm:text-5xl font-black text-slate-900 mb-8 leading-tight">The Smartest Choice for Your Website Design</h3>
                        <p class="text-lg text-slate-600 leading-relaxed mb-8 italic">We’re not just web designers — we’re problem solvers, collaborators, and growth partners. Based in London, we bring together creativity and technical expertise.</p>
                    </div>
                    <div class="space-y-10">
                        <div class="flex gap-6 group">
                            <div class="text-4xl font-black text-blue-600 opacity-20 group-hover:opacity-100 transition">01</div>
                            <div>
                                <h4 class="text-xl font-bold mb-2">London-Based Experts</h4>
                                <p class="text-sm text-slate-500 leading-relaxed">We’re a team of professional web designers in London who understand the local market and global standards.</p>
                            </div>
                        </div>
                        <div class="flex gap-6 group">
                            <div class="text-4xl font-black text-blue-600 opacity-20 group-hover:opacity-100 transition">02</div>
                            <div>
                                <h4 class="text-xl font-bold mb-2">Custom Design, No Templates</h4>
                                <p class="text-sm text-slate-500 leading-relaxed">Every website we build is tailored to your brand, goals, and audience. No shortcuts — just smart, strategic design.</p>
                            </div>
                        </div>
                        <div class="flex gap-6 group">
                            <div class="text-4xl font-black text-blue-600 opacity-20 group-hover:opacity-100 transition">03</div>
                            <div>
                                <h4 class="text-xl font-bold mb-2">Built for Speed & SEO</h4>
                                <p class="text-sm text-slate-500 leading-relaxed">We create websites that load fast, rank well, and convert visitors into customers — with mobile-first design.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- INTRODUCTION ABOUT US -->
        <section id="about-us">
            <div class="os-window bg-white/40 backdrop-blur-xl rounded-[1rem] border border-white/60 overflow-hidden">
                <!-- Dummy Window Header -->
                <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                </div>
                <div class="p-8 sm:p-16 max-w-4xl mx-auto">
                    <h2 class="text-xs font-black text-blue-600 uppercase tracking-widest mb-4">Introduction About Us</h2>
                    <h3 class="text-3xl sm:text-5xl font-black text-slate-900 mb-8">Transforming Brands Through Web Design</h3>
                    <p class="text-lg text-slate-600 leading-relaxed mb-10">
                        We’re a London-based team of web designers, developers, and digital thinkers who build websites that do more than look great — they deliver results. We combine clean, modern design with smart strategy to help businesses grow online.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-12">
                        <div class="flex items-center space-x-3 text-slate-700 font-semibold">
                            <i class="fas fa-check-circle text-blue-600"></i>
                            <span>London-based, UK-focused</span>
                        </div>
                        <div class="flex items-center space-x-3 text-slate-700 font-semibold">
                            <i class="fas fa-check-circle text-blue-600"></i>
                            <span>WordPress, Webflow, Shopify, Wix</span>
                        </div>
                        <div class="flex items-center space-x-3 text-slate-700 font-semibold">
                            <i class="fas fa-check-circle text-blue-600"></i>
                            <span>Clarity, Creativity & Communication</span>
                        </div>
                        <div class="flex items-center space-x-3 text-slate-700 font-semibold">
                            <i class="fas fa-check-circle text-blue-600"></i>
                            <span>258+ Project Done</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- OUR SERVICES - FULLY LOADED & SEO FRIENDLY -->
        <section id="services">
            <div class="text-center mb-16">
                <h2 class="text-xs font-black text-white uppercase tracking-[0.4em] mb-4">Specialized Services</h2>
                <h3 class="text-3xl sm:text-5xl font-black text-white mb-6 max-w-3xl mx-auto tracking-tight">Full-Stack Digital Solutions in London</h3>
                <p class="text-white/80 max-w-3xl mx-auto px-4 italic font-medium">As a leading London web design agency, we provide end-to-end digital services to ensure your business stays ahead of the competition.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Service 1 -->
                <div class="glass p-8 rounded-[2rem] service-card border-b-4 border-blue-500">
                    <div class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-laptop-code text-blue-600 text-xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-3">Custom Web Design</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">Unique, high-performance UI/UX designs crafted specifically for your brand identity and target London audience.</p>
                    <ul class="text-[10px] space-y-2 font-bold text-slate-400 uppercase tracking-widest">
                        <li><i class="fas fa-check text-blue-500 mr-2"></i> Responsive Layouts</li>
                        <li><i class="fas fa-check text-blue-500 mr-2"></i> User Research</li>
                    </ul>
                </div>
                <!-- Service 2 -->
                <div class="glass p-8 rounded-[2rem] service-card border-b-4 border-purple-500">
                    <div class="w-12 h-12 bg-purple-500/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-shopping-cart text-purple-600 text-xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-3">E-Commerce Development</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">Scalable Shopify & WooCommerce stores built to maximize conversions and simplify inventory management.</p>
                    <ul class="text-[10px] space-y-2 font-bold text-slate-400 uppercase tracking-widest">
                        <li><i class="fas fa-check text-purple-500 mr-2"></i> Secure Payments</li>
                        <li><i class="fas fa-check text-purple-500 mr-2"></i> High ROI Focus</li>
                    </ul>
                </div>
                <!-- Service 3 -->
                <div class="glass p-8 rounded-[2rem] service-card border-b-4 border-green-500">
                    <div class="w-12 h-12 bg-green-500/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-search text-green-600 text-xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-3">Technical SEO</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">Comprehensive search engine optimization to boost your rankings on Google and drive organic traffic locally and globally.</p>
                    <ul class="text-[10px] space-y-2 font-bold text-slate-400 uppercase tracking-widest">
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Keyword Research</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Schema Markup</li>
                    </ul>
                </div>
                <!-- Service 4 -->
                <div class="glass p-8 rounded-[2rem] service-card border-b-4 border-orange-500">
                    <div class="w-12 h-12 bg-orange-500/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-tools text-orange-600 text-xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-3">Website Maintenance</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">24/7 security monitoring, routine backups, and content updates to keep your site fast, secure, and modern.</p>
                    <ul class="text-[10px] space-y-2 font-bold text-slate-400 uppercase tracking-widest">
                        <li><i class="fas fa-check text-orange-500 mr-2"></i> Daily Backups</li>
                        <li><i class="fas fa-check text-orange-500 mr-2"></i> SSL Management</li>
                    </ul>
                </div>
                <!-- Service 5 -->
                <div class="glass p-8 rounded-[2rem] service-card border-b-4 border-pink-500">
                    <div class="w-12 h-12 bg-pink-500/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-pen-nib text-pink-600 text-xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-3">Branding & Identity</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">From logo design to complete brand guidelines, we build a cohesive visual story that resonates with your customers.</p>
                    <ul class="text-[10px] space-y-2 font-bold text-slate-400 uppercase tracking-widest">
                        <li><i class="fas fa-check text-pink-500 mr-2"></i> Logo Design</li>
                        <li><i class="fas fa-check text-pink-500 mr-2"></i> Brand Strategy</li>
                    </ul>
                </div>
                <!-- Service 6 -->
                <div class="glass p-8 rounded-[2rem] service-card border-b-4 border-cyan-500">
                    <div class="w-12 h-12 bg-cyan-500/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-tachometer-alt text-cyan-600 text-xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-3">Speed Optimization</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">Core Web Vitals improvement and image compression to ensure your site loads in under 2 seconds across all devices.</p>
                    <ul class="text-[10px] space-y-2 font-bold text-slate-400 uppercase tracking-widest">
                        <li><i class="fas fa-check text-cyan-500 mr-2"></i> 90+ PageSpeed Score</li>
                        <li><i class="fas fa-check text-cyan-500 mr-2"></i> CDN Setup</li>
                    </ul>
                </div>
                <!-- Service 7 -->
                <div class="glass p-8 rounded-[2rem] service-card border-b-4 border-indigo-500">
                    <div class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-bullhorn text-indigo-600 text-xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-3">Digital Marketing</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">Strategic PPC and social media campaigns designed to put your business in front of the right London audience.</p>
                    <ul class="text-[10px] space-y-2 font-bold text-slate-400 uppercase tracking-widest">
                        <li><i class="fas fa-check text-indigo-500 mr-2"></i> Google Ads</li>
                        <li><i class="fas fa-check text-indigo-500 mr-2"></i> Social Ads</li>
                    </ul>
                </div>
                <!-- Service 8 -->
                <div class="glass p-8 rounded-[2rem] service-card border-b-4 border-red-500">
                    <div class="w-12 h-12 bg-red-500/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-puzzle-piece text-red-600 text-xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-3">Custom Integrations</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">Connecting your website with CRM, ERP, or custom APIs to automate workflows and improve efficiency.</p>
                    <ul class="text-[10px] space-y-2 font-bold text-slate-400 uppercase tracking-widest">
                        <li><i class="fas fa-check text-red-500 mr-2"></i> API Sync</li>
                        <li><i class="fas fa-check text-red-500 mr-2"></i> CRM Connect</li>
                    </ul>
                </div>
                <!-- Service 9: iOS App Development -->
                <div class="glass p-8 rounded-[2rem] service-card border-b-4 border-sky-400">
                    <div class="w-12 h-12 bg-sky-400/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fab fa-apple text-sky-600 text-xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-3">iOS App Development</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">High-performance native iOS applications designed for elegance, leveraging the latest Swift and SwiftUI frameworks.</p>
                    <ul class="text-[10px] space-y-2 font-bold text-slate-400 uppercase tracking-widest">
                        <li><i class="fas fa-check text-sky-500 mr-2"></i> iPhone & iPad</li>
                        <li><i class="fas fa-check text-sky-500 mr-2"></i> App Store Ready</li>
                    </ul>
                </div>
                <!-- Service 10: Android Development -->
                <div class="glass p-8 rounded-[2rem] service-card border-b-4 border-lime-500">
                    <div class="w-12 h-12 bg-lime-500/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fab fa-android text-lime-600 text-xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-3">Android Development</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">Scalable and robust Android solutions built with Kotlin, ensuring compatibility across all modern mobile devices.</p>
                    <ul class="text-[10px] space-y-2 font-bold text-slate-400 uppercase tracking-widest">
                        <li><i class="fas fa-check text-lime-500 mr-2"></i> Play Store Strategy</li>
                        <li><i class="fas fa-check text-lime-500 mr-2"></i> Kotlin Native</li>
                    </ul>
                </div>
                <!-- Service 11: Web App (PWA) -->
                <div class="glass p-8 rounded-[2rem] service-card border-b-4 border-fuchsia-500">
                    <div class="w-12 h-12 bg-fuchsia-500/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-globe text-fuchsia-600 text-xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-3">Web App (PWA)</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">Progressive Web Applications that provide an app-like experience through the browser with offline support.</p>
                    <ul class="text-[10px] space-y-2 font-bold text-slate-400 uppercase tracking-widest">
                        <li><i class="fas fa-check text-fuchsia-500 mr-2"></i> Offline Mode</li>
                        <li><i class="fas fa-check text-fuchsia-500 mr-2"></i> Push Notifications</li>
                    </ul>
                </div>
                <!-- Service 12: Native Mobile Apps -->
                <div class="glass p-8 rounded-[2rem] service-card border-b-4 border-amber-600">
                    <div class="w-12 h-12 bg-amber-600/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-mobile text-amber-600 text-xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-3">Native Mobile Apps</h4>
                    <p class="text-xs text-slate-500 leading-relaxed mb-4">Hybrid and native cross-platform apps using Flutter or React Native for cost-effective, high-quality deployment.</p>
                    <ul class="text-[10px] space-y-2 font-bold text-slate-400 uppercase tracking-widest">
                        <li><i class="fas fa-check text-amber-600 mr-2"></i> Dual-Platform Launch</li>
                        <li><i class="fas fa-check text-amber-600 mr-2"></i> Shared Codebase</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- OUR PROCESS SECTION -->
        <section id="process">
            <div class="text-center mb-16">
                <h2 class="text-xs font-black text-white uppercase tracking-[0.4em] mb-4">Our Simple Process</h2>
                <h3 class="text-3xl sm:text-5xl font-black text-white mb-6 max-w-3xl mx-auto">How We Build Your Digital Success</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="glass p-8 rounded-3xl relative overflow-hidden group">
                    <div class="text-6xl font-black text-slate-900/5 absolute -right-2 -top-2 transition group-hover:text-blue-500/10">01</div>
                    <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center mb-6 border border-blue-500/20">
                        <i class="fas fa-search-dollar text-blue-600"></i>
                    </div>
                    <h4 class="text-xl font-black mb-3">Discovery</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">We dive deep into your goals and audience to create a roadmap for success.</p>
                </div>
                <div class="glass p-8 rounded-3xl relative overflow-hidden group">
                    <div class="text-6xl font-black text-slate-900/5 absolute -right-2 -top-2 transition group-hover:text-purple-500/10">02</div>
                    <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center mb-6 border border-purple-500/20">
                        <i class="fas fa-paint-brush text-purple-600"></i>
                    </div>
                    <h4 class="text-xl font-black mb-3">UI/UX Design</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Visualizing your brand through modern, high-converting interfaces.</p>
                </div>
                <div class="glass p-8 rounded-3xl relative overflow-hidden group">
                    <div class="text-6xl font-black text-slate-900/5 absolute -right-2 -top-2 transition group-hover:text-indigo-500/10">03</div>
                    <div class="w-12 h-12 bg-indigo-500/20 rounded-xl flex items-center justify-center mb-6 border border-indigo-500/20">
                        <i class="fas fa-paint-brush text-indigo-600"></i>
                    </div>
                    <h4 class="text-xl font-black mb-3">Development</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Turning designs into fast, secure, and SEO-optimized code.</p>
                </div>
                <div class="glass p-8 rounded-3xl relative overflow-hidden group">
                    <div class="text-6xl font-black text-slate-900/5 absolute -right-2 -top-2 transition group-hover:text-green-500/10">04</div>
                    <div class="w-12 h-12 bg-green-500/20 rounded-xl flex items-center justify-center mb-6 border border-green-500/20">
                        <i class="fas fa-rocket text-green-600"></i>
                    </div>
                    <h4 class="text-xl font-black mb-3">Launch</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Polishing final details and pushing your site live to the world.</p>
                </div>
            </div>
        </section>

        <!-- CASE STUDIES - FULLY LOADED -->
      <section id="case-studies" class="py-10">
    <div class="glass rounded-[2rem] border border-white/50 overflow-hidden shadow-2xl">
        <div class="h-10 bg-gray-200/50 flex items-center px-6 space-x-2 border-b border-gray-300/30">
            <div class="w-3 h-3 rounded-full bg-red-400"></div>
            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
            <div class="w-3 h-3 rounded-full bg-green-400"></div>
        </div>
        
        <div class="p-10 sm:p-20">
            <div class="flex flex-col lg:flex-row justify-between items-center lg:items-end mb-16 gap-8 text-center lg:text-left">
                <div>
                    <h2 class="text-blue-600 font-black text-xs uppercase tracking-widest mb-4">Success Stories</h2>
                    <h3 class="text-4xl sm:text-6xl font-black tracking-tight text-slate-900">Recent Projects</h3>
                </div>
                <a href="<?php echo site_url('/portfolio'); ?>" class="px-10 py-4 bg-slate-900 text-white text-xs font-bold rounded-full hover:bg-black transition">
                    View Full Portfolio
                </a>
            </div>

            <div class="relative overflow-hidden" id="project-slider-viewport">
                <div class="flex transition-transform duration-300 ease-in-out" id="project-slider-track">
                    <?php
                    global $wpdb;
                    $table_name = $wpdb->prefix . 'case_studies';
                    $projects = $wpdb->get_results("SELECT * FROM $table_name");

                    if ($projects) :
                        foreach ($projects as $project) :
                            $tech_stack = explode(',', $project->tech_keywords);
                    ?>
                        <div class="project-slide flex-shrink-0 w-full md:w-1/2 px-4">
                            <div class="relative group h-90 overflow-hidden rounded-[1rem] shadow-xl cursor-pointer" 
                                 onclick="window.open('<?php echo esc_url($project->project_url); ?>', '_blank')">
                                
                                <?php if($project->project_image): ?>
                                    <img src="<?php echo esc_url($project->project_image); ?>" class="w-full h-full object-cover">
                                <?php else: ?>
                                    <div class="w-full h-full bg-slate-200 flex items-center justify-center">Image Coming Soon</div>
                                <?php endif; ?>

                                <div class="absolute inset-0 bg-blue-600/90 opacity-0 group-hover:opacity-100 transition-all duration-300 backdrop-blur-sm flex flex-col justify-center items-center p-6 text-center">
                                    <span class="px-3 py-1 bg-white text-slate-900 rounded-full text-[9px] font-black uppercase mb-3">
                                        <?php echo esc_html($project->category); ?>
                                    </span>
                                    <h4 class="text-2xl font-black text-white mb-2"><?php echo esc_html($project->project_name); ?></h4>
                                    <div class="flex flex-wrap justify-center gap-1">
                                        <?php foreach ($tech_stack as $tech) : ?>
                                            <span class="text-[8px] font-bold text-white/80 border border-white/30 px-2 py-0.5 rounded uppercase">
                                                <?php echo esc_html(trim($tech)); ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

       
        <!-- TECH STACK SECTION -->
        <section id="tech-stack">
            <div class="glass rounded-[3rem] p-12 text-center border border-white/50">
                <h2 class="text-xs font-black text-blue-600 uppercase tracking-widest mb-6">Technologies We Master</h2>
                <div class="flex flex-wrap justify-center gap-8 md:gap-16 items-center opacity-60 hover:opacity-100 transition duration-500">
                    <div class="flex flex-col items-center"><i class="fab fa-wordpress text-4xl mb-2"></i><span class="text-[10px] font-bold uppercase tracking-widest">WordPress</span></div>
                    <div class="flex flex-col items-center"><i class="fab fa-shopify text-4xl mb-2"></i><span class="text-[10px] font-bold uppercase tracking-widest">Shopify</span></div>
                    <div class="flex flex-col items-center"><i class="fab fa-react text-4xl mb-2"></i><span class="text-[10px] font-bold uppercase tracking-widest">React.js</span></div>
                    <div class="flex flex-col items-center"><i class="fab fa-php text-4xl mb-2"></i><span class="text-[10px] font-bold uppercase tracking-widest">PHP</span></div>
                    <div class="flex flex-col items-center"><i class="fab fa-elementor text-4xl mb-2"></i><span class="text-[10px] font-bold uppercase tracking-widest">Elementor</span></div>
                    <div class="flex flex-col items-center"><i class="fab fa-sass text-4xl mb-2"></i><span class="text-[10px] font-bold uppercase tracking-widest">Sass</span></div>
                </div>
            </div>
        </section>

		  <!-- reviews -->
        <section id="reviews">
            <div class="os-window glass rounded-[1rem] border border-white/50 overflow-hidden">
                <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                    <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest">Client Feedback</div>
                </div>
                <div class="p-8 sm:p-16">
                    
                    <div class="trustindex-container max-w-5xl mx-auto">
                        <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRICING PLAN -->
        <section id="pricing">
            <div class="text-center mb-16">
                <h2 class="text-xs font-black text-white uppercase tracking-widest mb-4">Pricing Plan</h2>
                <h3 class="text-3xl sm:text-5xl font-black text-white mb-6">Find the right Price Package</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="glass rounded-[2.5rem] p-10 flex flex-col border border-white/20">
                    <h3 class="text-2xl font-black mb-2">Starter Website</h3>
                    <div class="text-4xl font-black text-blue-600 mb-4">£499<span class="text-sm font-normal text-slate-500 italic"> /one off</span></div>
                    <ul class="space-y-4 mb-10 flex-grow text-sm">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> 1–3 Page Custom Design</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Responsive Layout</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Basic On-Page SEO</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> 7–10 Days Delivery</li>
                    </ul>
                    <button onclick="toggleModal()" class="w-full py-4 bg-slate-900 text-white rounded-2xl font-bold hover:bg-black transition">Select Plan</button>
                </div>
                <div class="bg-white rounded-[2.5rem] p-10 flex flex-col shadow-2xl scale-100 md:scale-105 border-4 border-blue-500 relative">
                    <div class="absolute -top-5 left-1/2 -translate-x-1/2 bg-blue-500 text-white px-8 py-2 rounded-full text-[10px] font-black tracking-widest uppercase">BEST VALUE</div>
                    <h3 class="text-2xl font-black mb-2">Professional</h3>
                    <div class="text-4xl font-black text-blue-600 mb-4">£999<span class="text-sm font-normal text-slate-500 italic"> /one off</span></div>
                    <ul class="space-y-4 mb-10 flex-grow text-sm">
                        <li class="flex items-center font-semibold"><i class="fas fa-check text-blue-500 mr-2"></i> 2-5 Page Custom Design</li>
                        <li class="flex items-center font-semibold"><i class="fas fa-check text-blue-500 mr-2"></i> CMS (WordPress/Webflow)</li>
                        <li class="flex items-center font-semibold"><i class="fas fa-check text-blue-500 mr-2"></i> SEO-Optimised Pages</li>
                        <li class="flex items-center font-semibold"><i class="fas fa-check text-blue-500 mr-2"></i> 1 Month Free Support</li>
                    </ul>
                    <button onclick="toggleModal()" class="w-full py-4 bg-blue-600 text-white rounded-2xl font-bold hover:bg-blue-700 transition">Select Plan</button>
                </div>
                <div class="glass rounded-[2.5rem] p-10 flex flex-col border border-white/20">
                    <h3 class="text-2xl font-black mb-2">Premium Website</h3>
                    <div class="text-4xl font-black text-blue-600 mb-4">£1,499<span class="text-sm font-normal text-slate-500 italic"> /one off</span></div>
                    <ul class="space-y-4 mb-10 flex-grow text-sm">
                        <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i> 10+ Pages / E-commerce</li>
                        <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i> Custom UI/UX Design</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> CRM or API Integration</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> 3 Month Free Support</li>
                    </ul>
                    <button onclick="toggleModal()" class="w-full py-4 bg-slate-900 text-white rounded-2xl font-bold hover:bg-black transition">Select Plan</button>
                </div>
            </div>
        </section>
        
<div class="os-window bg-blue-600 rounded-[1rem] p-10 md:p-16 text-white relative overflow-hidden shadow-2xl shadow-blue-600/20 mb-24">
    <div class="h-8 bg-black/10 flex items-center px-4 space-x-2 border-b border-white/10 absolute top-0 left-0 right-0">
        <div class="w-2.5 h-2.5 rounded-full bg-white/20"></div>
        <div class="w-2.5 h-2.5 rounded-full bg-white/20"></div>
        <div class="w-2.5 h-2.5 rounded-full bg-white/20"></div>
    </div>
    
    <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8 mt-4">
        <div class="text-center md:text-left">
            <h3 class="text-3xl md:text-5xl font-black mb-3 leading-tight tracking-tighter">
                Custom Query
            </h3>
            <p class="text-blue-100 text-lg font-medium opacity-90 italic">
                For any other specific services or large-scale projects.
            </p>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4">
            <button onclick="toggleModal()" class="px-12 py-5 bg-white text-blue-600 rounded-2xl font-black uppercase tracking-widest text-xs hover:scale-105 transition-transform shadow-xl">
                Contact Us
            </button>
        </div>
    </div>

    <i class="fab fa-apple absolute -bottom-10 -right-10 text-[15rem] opacity-10 rotate-12"></i>
</div>

        <!-- FAQ SECTION -->
        <section id="faq">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <div>
                    <h2 class="text-blue-600 font-black text-xs uppercase tracking-[0.3em] mb-4">Support & FAQ</h2>
                    <h3 class="text-3xl sm:text-5xl font-black text-white leading-tight mb-8">Frequently Asked Questions</h3>
                    <p class="text-lg text-white/60 leading-relaxed mb-8 italic">Have questions about your project? Here are the most common queries our clients ask.</p>
                    <button onclick="toggleModal()" class="px-8 py-4 bg-white text-blue-600 rounded-full font-bold hover:bg-blue-50 transition shadow-xl">Still Have Questions?</button>
                </div>
                <div class="space-y-4">
                    <div class="glass p-6 rounded-2xl border border-white/20 transition hover:bg-white/90">
                        <h4 class="text-sm font-black mb-2">How long does it take to build a website?</h4>
                        <p class="text-[11px] text-slate-500 leading-relaxed">Typically, a standard website takes 7–14 days. Custom or e-commerce projects may take 3–5 weeks depending on the complexity.</p>
                    </div>
                    <div class="glass p-6 rounded-2xl border border-white/20 transition hover:bg-white/90">
                        <h4 class="text-sm font-black mb-2">Will my website be mobile-friendly?</h4>
                        <p class="text-[11px] text-slate-500 leading-relaxed">Absolutely! Every site we build is 100% responsive, meaning it will function perfectly on all devices.</p>
                    </div>
                    <div class="glass p-6 rounded-2xl border border-white/20 transition hover:bg-white/90">
                        <h4 class="text-sm font-black mb-2">Is SEO included in your packages?</h4>
                        <p class="text-[11px] text-slate-500 leading-relaxed">All our websites include basic on-page SEO. For more advanced results, we offer technical SEO as a specialized service.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL CTA SECTION -->
        <section id="final-cta">
            <div class="dark-glass rounded-[1rem] border border-white/10 relative overflow-hidden">
                <!-- Dummy Window Header -->
                <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                </div>
                <div class="p-12 sm:p-20 text-center relative z-10">
                    <div class="absolute -left-20 -top-20 w-64 h-64 bg-blue-500/10 blur-[100px] rounded-full"></div>
                    <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-purple-500/10 blur-[100px] rounded-full"></div>
                    <h3 class="text-3xl sm:text-6xl font-black text-white mb-8 tracking-tighter">Ready to build your <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">dream website?</span></h3>
                    <p class="text-white/60 text-lg mb-10 max-w-2xl mx-auto italic">Let’s turn your vision into a digital reality. Reach out today and let's get started on your success story.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-6">
                        <button onclick="toggleModal()" class="px-10 py-5 bg-blue-600 text-white rounded-full font-black hover:bg-blue-700 transition shadow-2xl shadow-blue-500/20 active:scale-95">Get Started Now</button>
                        <a href="#pricing" class="px-10 py-5 glass border border-white/20 text-white rounded-full font-bold hover:bg-white/10 transition">View Pricing</a>
                    </div>
                </div>
            </div>
        </section>
        

    </main>


<?php get_footer(); ?>