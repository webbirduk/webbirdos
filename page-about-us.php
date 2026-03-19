<?php
/**
 * Template Name: About Us Page
 * The template for displaying the About Us page content.
 */

get_header(); ?>

<!-- ABOUT US CONTENT AREA -->
<main class="pt-12 pb-32 px-4 sm:px-8 max-w-7xl mx-auto space-y-16 sm:space-y-24">

    <!-- HERO SECTION WINDOW: Innovative Digital Solutions -->
    <section id="about-hero" class="mt-4 sm:mt-10">
        <div class="os-window glass rounded-2xl overflow-hidden animate-in fade-in slide-in-from-bottom-10 duration-1000">
            <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest">About — Innovative Digital Solutions</div>
            </div>
            <div class="p-8 sm:p-16 lg:p-20">
                <div class="max-w-4xl">
                    <h2 class="text-blue-600 font-black text-xs uppercase tracking-[0.3em] mb-4">Our Journey</h2>
                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-slate-900 leading-tight mb-8">
                        Innovative Digital Solutions
                    </h1>
                    <p class="text-lg sm:text-xl text-slate-600 leading-relaxed italic border-l-4 border-blue-500 pl-6 mb-12">
                        Our journey began with a simple goal — to help businesses thrive online through smart, impactful web design. Based in London, we combine creativity, strategy, and code to deliver websites that do more than look good — they perform, scale, and convert.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-16">
                        <div class="space-y-4">
                            <h3 class="text-2xl font-black text-slate-900 flex items-center">
                                <i class="fas fa-eye text-blue-500 mr-3 text-xl"></i> Our Vision
                            </h3>
                            <p class="text-sm text-slate-500 leading-relaxed">
                                To be the global benchmark for creative digital excellence, bridging the gap between human emotion and technical precision.
                            </p>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-2xl font-black text-slate-900 flex items-center">
                                <i class="fas fa-bullseye text-pink-500 mr-3 text-xl"></i> Our Mission
                            </h3>
                            <p class="text-sm text-slate-500 leading-relaxed">
                                To redefine how businesses connect with their audience online by delivering powerful, purposeful, and beautifully crafted digital experiences. We aim to be a trusted creative partner for brands across the UK and beyond.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHO WE ARE & STATS -->
    <section id="who-we-are">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
            <!-- Experience Block -->
            <div class="lg:col-span-4 dark-glass rounded-3xl p-10 flex flex-col justify-center items-center text-center border border-white/20">
                <div class="relative mb-6">
                    <span class="text-7xl sm:text-8xl font-black text-white glow-text tracking-tighter">20+</span>
                    <div class="absolute -top-4 -right-4 w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white animate-bounce">
                        <i class="fas fa-award"></i>
                    </div>
                </div>
                <h4 class="text-white/60 font-black uppercase tracking-[0.2em] text-sm">Years of Collective Experience</h4>
            </div>

            <!-- Content Block -->
            <div class="lg:col-span-8 glass rounded-3xl p-8 sm:p-12 border border-white/40">
                <h2 class="text-xs font-black text-blue-600 uppercase tracking-widest mb-4">Who We Are</h2>
                <h3 class="text-3xl sm:text-4xl font-black text-slate-900 mb-6">Digital Solutions For Your Business Goals!</h3>
                <p class="text-slate-600 leading-relaxed mb-10">
                    We’re a London-based team of creative web designers, developers, and digital thinkers dedicated to helping businesses thrive online. We create custom websites and digital solutions that are tailored to your brand, your audience, and your goals.
                </p>
                
                <!-- Expertise Bars -->
                <div class="space-y-6">
                    <div class="group">
                        <div class="flex justify-between items-end mb-2">
                            <span class="text-[11px] text-slate-800 font-black uppercase tracking-widest">Web Design</span>
                            <span class="text-blue-600 font-black">95%</span>
                        </div>
                        <div class="h-2 w-full bg-slate-200 rounded-full overflow-hidden p-[1px]">
                            <div class="h-full bg-blue-600 rounded-full w-[95%] transition-all duration-1000"></div>
                        </div>
                    </div>
                    <div class="group">
                        <div class="flex justify-between items-end mb-2">
                            <span class="text-[11px] text-slate-800 font-black uppercase tracking-widest">Full-Stack Development</span>
                            <span class="text-purple-600 font-black">92%</span>
                        </div>
                        <div class="h-2 w-full bg-slate-200 rounded-full overflow-hidden p-[1px]">
                            <div class="h-full bg-purple-600 rounded-full w-[92%] transition-all duration-1000"></div>
                        </div>
                    </div>
                    <div class="group">
                        <div class="flex justify-between items-end mb-2">
                            <span class="text-[11px] text-slate-800 font-black uppercase tracking-widest">Support & Maintenance</span>
                            <span class="text-emerald-600 font-black">97%</span>
                        </div>
                        <div class="h-2 w-full bg-slate-200 rounded-full overflow-hidden p-[1px]">
                            <div class="h-full bg-emerald-600 rounded-full w-[97%] transition-all duration-1000"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE VALUES SECTION -->
    <section id="values">
        <div class="text-center mb-16">
            <h2 class="text-xs font-black text-white uppercase tracking-[0.4em] mb-4">Our Core Values</h2>
            <h3 class="text-3xl sm:text-5xl font-black text-white mb-6">What Drives Us to Give Our Advantages</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="glass p-8 rounded-3xl group hover:bg-white transition-all duration-300">
                <div class="w-14 h-14 bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i class="fas fa-lightbulb text-2xl"></i>
                </div>
                <h4 class="text-xl font-bold mb-3">Creativity & Innovation</h4>
                <p class="text-xs text-slate-500 leading-relaxed">Web design thrives on fresh ideas. A great agency constantly experiments, evolves, and adapts.</p>
            </div>
            <div class="glass p-8 rounded-3xl group hover:bg-white transition-all duration-300">
                <div class="w-14 h-14 bg-pink-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-pink-600 group-hover:text-white transition-colors">
                    <i class="fas fa-heart text-2xl"></i>
                </div>
                <h4 class="text-xl font-bold mb-3">Commitment</h4>
                <p class="text-xs text-slate-500 leading-relaxed">Dedicated to providing top-notch service. Every post, campaign, and strategy counts.</p>
            </div>
            <div class="glass p-8 rounded-3xl group hover:bg-white transition-all duration-300">
                <div class="w-14 h-14 bg-emerald-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    <i class="fas fa-eye text-2xl"></i>
                </div>
                <h4 class="text-xl font-bold mb-3">Transparency</h4>
                <p class="text-xs text-slate-500 leading-relaxed">At the heart of everything we do. We keep you informed at every step of the journey.</p>
            </div>
            <div class="glass p-8 rounded-3xl group hover:bg-white transition-all duration-300">
                <div class="w-14 h-14 bg-orange-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                    <i class="fas fa-users text-2xl"></i>
                </div>
                <h4 class="text-xl font-bold mb-3">Collaboration</h4>
                <p class="text-xs text-slate-500 leading-relaxed">The best campaigns come from strong teamwork — both internally and with our clients.</p>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->
    <section id="team">
        <div class="os-window glass rounded-[1rem] border border-white/50 overflow-hidden">
            <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest">Our Team — The Experts Behind Success</div>
            </div>
            <div class="p-12 sm:p-20 text-center">
                <h2 class="text-blue-600 font-black text-xs uppercase tracking-widest mb-4">Our Creative Team</h2>
                <h3 class="text-3xl sm:text-5xl font-black mb-16">The experts behind our success</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <!-- Team Member 1 -->
                    <div class="group">
                        <div class="relative mb-6 overflow-hidden rounded-[2rem] aspect-square bg-slate-200">
                            <!-- In a real WP site, use get_template_directory_uri() or dynamic images -->
                            <div class="absolute inset-0 flex items-center justify-center text-slate-400">
                                <i class="fas fa-user-circle text-8xl"></i>
                            </div>
                            <div class="absolute inset-0 bg-blue-600/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4">
                                <a href="#" class="text-white hover:scale-125 transition"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="text-white hover:scale-125 transition"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-white hover:scale-125 transition"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <h4 class="text-xl font-black text-slate-900">AR Riyad</h4>
                        <p class="text-xs text-blue-600 font-bold uppercase tracking-widest mt-1">Founder & Web Designer</p>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="group">
                        <div class="relative mb-6 overflow-hidden rounded-[2rem] aspect-square bg-slate-200">
                            <div class="absolute inset-0 flex items-center justify-center text-slate-400">
                                <i class="fas fa-user-circle text-8xl"></i>
                            </div>
                            <div class="absolute inset-0 bg-purple-600/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4">
                                <a href="#" class="text-white hover:scale-125 transition"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="text-white hover:scale-125 transition"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-white hover:scale-125 transition"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <h4 class="text-xl font-black text-slate-900">Abu Shoaib</h4>
                        <p class="text-xs text-purple-600 font-bold uppercase tracking-widest mt-1">Full Stack Developer</p>
                    </div>
                    <!-- Team Member 3 -->
                    <div class="group">
                        <div class="relative mb-6 overflow-hidden rounded-[2rem] aspect-square bg-slate-200">
                            <div class="absolute inset-0 flex items-center justify-center text-slate-400">
                                <i class="fas fa-user-circle text-8xl"></i>
                            </div>
                            <div class="absolute inset-0 bg-pink-600/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4">
                                <a href="#" class="text-white hover:scale-125 transition"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="text-white hover:scale-125 transition"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-white hover:scale-125 transition"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <h4 class="text-xl font-black text-slate-900">T. Sebaba</h4>
                        <p class="text-xs text-pink-600 font-bold uppercase tracking-widest mt-1">Graphic Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>