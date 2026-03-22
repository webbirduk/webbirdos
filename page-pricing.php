<?php
/**
 * Template Name: Pricing Page
 * The template for displaying the detailed Pricing and Packages page.
 */

get_header(); ?>

<main class="pt-12 pb-32 px-4 sm:px-8 max-w-7xl mx-auto space-y-16 sm:space-y-24">

    <section id="pricing-hero" class="mt-4 sm:mt-10">
        <div class="os-window glass rounded-2xl overflow-hidden animate-in fade-in slide-in-from-bottom-10 duration-1000 shadow-2xl">
            <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest">WebBird — Price Packages</div>
            </div>
            <div class="p-8 sm:p-16 lg:p-20 text-center">
                <div class="max-w-3xl mx-auto">
                    <h2 class="text-blue-600 font-black text-xs uppercase tracking-[0.3em] mb-4">Investment Plans</h2>
                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-slate-900 leading-tight mb-8 tracking-tighter">
                        Find the right <span class="text-blue-600">Price Package</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-slate-600 leading-relaxed italic border-l-4 border-blue-500 pl-6 mb-0 inline-block text-left">
                        Transparent pricing for every stage of your growth. We provide high-end London web design services with no hidden costs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing-cards">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
            
            <div class="glass rounded-[2.5rem] p-10 flex flex-col border border-white/40 transition-all duration-500 hover:bg-white hover:shadow-xl group">
                <div class="mb-8">
                    <h3 class="text-2xl font-black text-slate-900 mb-2">Starter Website</h3>
                    <p class="text-xs text-slate-500 font-medium">Perfect for small businesses & startups.</p>
                </div>
                <div class="text-4xl font-black text-blue-600 mb-8">£499<span class="text-sm font-normal text-slate-400 italic"> /one off</span></div>
                
                <ul class="space-y-4 mb-10 flex-grow text-sm">
                    <li class="flex items-center text-slate-600"><i class="fas fa-check text-green-500 mr-3"></i> 1–3 Page Custom Design</li>
                    <li class="flex items-center text-slate-600"><i class="fas fa-check text-green-500 mr-3"></i> Responsive Layout</li>
                    <li class="flex items-center text-slate-600"><i class="fas fa-check text-green-500 mr-3"></i> Basic On-Page SEO</li>
                    <li class="flex items-center text-slate-600"><i class="fas fa-check text-green-500 mr-3"></i> 7–10 Days Delivery</li>
                    <li class="flex items-center text-slate-400 opacity-50"><i class="fas fa-times mr-3"></i> E-commerce Integration</li>
                </ul>
                
                <button onclick="toggleModal()" class="w-full py-4 bg-slate-900 text-white rounded-2xl font-black uppercase tracking-widest text-[10px] hover:bg-black transition-all">Select Starter</button>
            </div>

            <div class="bg-white rounded-[2.5rem] p-10 flex flex-col shadow-2xl scale-100 md:scale-105 border-4 border-blue-500 relative z-10">
                <div class="absolute -top-5 left-1/2 -translate-x-1/2 bg-blue-500 text-white px-8 py-2 rounded-full text-[10px] font-black tracking-widest uppercase shadow-lg shadow-blue-500/30">BEST VALUE</div>
                
                <div class="mb-8">
                    <h3 class="text-2xl font-black text-slate-900 mb-2">Professional</h3>
                    <p class="text-xs text-slate-500 font-medium">For growing businesses needing a CMS.</p>
                </div>
                <div class="text-4xl font-black text-blue-600 mb-8">£999<span class="text-sm font-normal text-slate-400 italic"> /one off</span></div>
                
                <ul class="space-y-4 mb-10 flex-grow text-sm">
                    <li class="flex items-center font-bold text-slate-800"><i class="fas fa-check text-blue-500 mr-3"></i> 2-5 Page Custom Design</li>
                    <li class="flex items-center font-bold text-slate-800"><i class="fas fa-check text-blue-500 mr-3"></i> CMS (WordPress/Webflow)</li>
                    <li class="flex items-center font-bold text-slate-800"><i class="fas fa-check text-blue-500 mr-3"></i> SEO-Optimised Pages</li>
                    <li class="flex items-center font-bold text-slate-800"><i class="fas fa-check text-blue-500 mr-3"></i> 1 Month Free Support</li>
                    <li class="flex items-center font-bold text-slate-800"><i class="fas fa-check text-blue-500 mr-3"></i> Google Analytics Setup</li>
                </ul>
                
                <button onclick="toggleModal()" class="w-full py-5 bg-blue-600 text-white rounded-2xl font-black uppercase tracking-widest text-[10px] hover:bg-blue-700 shadow-xl shadow-blue-500/20 transition-all">Choose Professional</button>
            </div>

            <div class="glass rounded-[2.5rem] p-10 flex flex-col border border-white/40 transition-all duration-500 hover:bg-white hover:shadow-xl group">
                <div class="mb-8">
                    <h3 class="text-2xl font-black text-slate-900 mb-2">Premium Website</h3>
                    <p class="text-xs text-slate-500 font-medium">Full-scale digital commerce.</p>
                </div>
                <div class="text-4xl font-black text-blue-600 mb-8">£1,499<span class="text-sm font-normal text-slate-400 italic"> /one off</span></div>
                
                <ul class="space-y-4 mb-10 flex-grow text-sm">
                    <li class="flex items-center text-slate-600"><i class="fas fa-check text-blue-500 mr-3"></i> 10+ Pages / E-commerce</li>
                    <li class="flex items-center text-slate-600"><i class="fas fa-check text-blue-500 mr-3"></i> Custom UI/UX Design</li>
                    <li class="flex items-center text-slate-600"><i class="fas fa-check text-green-500 mr-3"></i> CRM or API Integration</li>
                    <li class="flex items-center text-slate-600"><i class="fas fa-check text-green-500 mr-3"></i> 3 Month Free Support</li>
                    <li class="flex items-center text-slate-600"><i class="fas fa-check text-green-500 mr-3"></i> Advanced Speed Optimization</li>
                </ul>
                
                <button onclick="toggleModal()" class="w-full py-4 bg-slate-900 text-white rounded-2xl font-black uppercase tracking-widest text-[10px] hover:bg-black transition-all">Select Premium</button>
            </div>
        </div>
    </section>

    <section id="custom-query">
        <div class="os-window dark-glass rounded-[2rem] border border-white/10 relative overflow-hidden shadow-2xl">
            <div class="h-8 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
                <div class="w-2.5 h-2.5 rounded-full bg-red-400"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-yellow-400"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-green-400"></div>
                <div class="flex-grow text-center text-[9px] text-gray-400 font-mono uppercase tracking-widest">WebBird — Enterprise & Custom Requests</div>
            </div>
            
            <div class="p-12 sm:p-20 text-center relative z-10">
                <div class="absolute -left-20 -top-20 w-64 h-64 bg-blue-500/10 blur-[100px] rounded-full"></div>
                <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-purple-500/10 blur-[100px] rounded-full"></div>
                
                <h3 class="text-3xl sm:text-5xl font-black text-white mb-6 tracking-tighter">Need a <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">Custom Solution?</span></h3>
                <p class="text-white/60 text-lg mb-10 max-w-2xl mx-auto italic">For specific services, large-scale projects, or custom API integrations, we offer bespoke quotes tailored to your exact requirements.</p>
                
                <div class="flex flex-col sm:flex-row justify-center gap-6">
                    <button onclick="toggleModal()" class="px-12 py-5 bg-white text-blue-600 rounded-full font-black uppercase tracking-widest text-xs hover:scale-105 transition-transform shadow-2xl">Contact for Bespoke Quote</button>
                    <a href="https://wa.me/447557126699" target="_blank" class="px-12 py-5 bg-[#25D366] text-white rounded-full font-black uppercase tracking-widest text-xs hover:opacity-90 transition-opacity flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2 text-lg"></i> WhatsApp Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing-faq">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-xs font-black text-white uppercase tracking-[0.4em] mb-4">Common Questions</h2>
                <h3 class="text-3xl font-black text-white">Pricing Transparency</h3>
            </div>
            
            <div class="space-y-4">
                <div class="glass p-6 rounded-2xl border border-white/20">
                    <h4 class="text-sm font-black text-slate-900 mb-2">Are there any monthly fees?</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">No. All our website packages are "one-off" payments. We only charge separately for optional ongoing maintenance or hosting if requested.</p>
                </div>
                <div class="glass p-6 rounded-2xl border border-white/20">
                    <h4 class="text-sm font-black text-slate-900 mb-2">Can I upgrade my plan later?</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Absolutely. Many of our clients start with the Starter package and upgrade to Professional or Premium as their business scales.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>