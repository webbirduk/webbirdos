<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <footer class="os-window glass rounded-[3rem] p-10 lg:p-16 border border-white/40 mb-32">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-16">
            <div class="lg:col-span-2 text-center lg:text-left">
                <div class="flex items-center justify-center lg:justify-start space-x-3 mb-6">
                    <i class="fab fa-apple text-3xl text-slate-900"></i>
                    <span class="text-2xl font-black tracking-tighter">WebBird</span>
                </div>
                <p class="text-sm text-slate-600 leading-relaxed mb-8 mx-auto lg:mx-0 max-w-xs">
                    London’s Trusted Web Design & Digital Solutions Partner.
                </p>
                <div class="flex items-center justify-center lg:justify-start space-x-4">
                    <a href="#" class="w-10 h-10 rounded-full glass border border-white/40 flex items-center justify-center text-slate-700 hover:bg-blue-600 hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full glass border border-white/40 flex items-center justify-center text-slate-700 hover:bg-pink-500 hover:text-white transition"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="text-center lg:text-left">
                <h4 class="text-xs font-black uppercase tracking-widest mb-6 text-slate-900">Company</h4>
                <ul class="space-y-4 text-sm text-slate-500 font-medium">
                    <li><a href="https://webbird.co.uk/about-us/"  class="hover:text-blue-600">About Us</a></li>
                    <li><a href="https://webbird.co.uk/services/" class="hover:text-blue-600">Services</a></li>
                    <li><a href="https://webbird.co.uk/website-design-prices-uk/"  class="hover:text-blue-600">Pricing Plan</a></li>
                    <li><a href="https://webbird.co.uk/contact-us/" class="hover:text-blue-600">Contact Us</a></li>
                </ul>
            </div>

            <div class="text-center lg:text-left">
                <h4 class="text-xs font-black uppercase tracking-widest mb-6 text-slate-900">Support</h4>
                <ul class="space-y-4 text-sm text-slate-500 font-medium">
                    <li><a href="#" class="hover:text-blue-600">Help Center</a></li>
                    <li><a href="javascript:void(0)" onclick="toggleModal()" class="hover:text-blue-600">Contact us</a></li>
                </ul>
            </div>

            <div class="text-center lg:text-left lg:col-span-1">
                <h4 class="text-xs font-black uppercase tracking-widest mb-6 text-slate-900">Contacts</h4>
                <ul class="space-y-4 text-sm text-slate-500">
                    <li class="flex items-start justify-center lg:justify-start space-x-3">
                        <i class="fas fa-map-marker-alt text-blue-600 mt-1"></i>
                        <span>Halley Rd, London E12 6UB</span>
                    </li>
                    <li class="flex items-center justify-center lg:justify-start space-x-3">
                        <i class="fas fa-envelope text-blue-600"></i>
                        <a href="mailto:hi@webbird.co.uk">hi@webbird.co.uk</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="bg-white/30 border border-white/40 p-6 sm:p-8 rounded-3xl flex flex-col lg:flex-row items-center justify-between gap-6 mb-16 relative z-10">
            <div class="text-center lg:text-left">
                <h4 class="text-xl font-black mb-1">Subscribe to our news</h4>
                <p class="text-xs text-slate-500 font-medium">Get notifications about new insights.</p>
            </div>
            <form id="newsletter-form" class="flex flex-col sm:flex-row w-full lg:w-auto gap-3">
                <input type="email" name="subscribe_email" placeholder="Email Address" required 
                       class="w-full sm:w-64 px-6 py-4 rounded-2xl glass border border-white/40 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
                <button type="submit" class="w-full sm:w-auto px-8 py-4 bg-slate-900 text-white rounded-2xl font-bold hover:bg-black transition text-sm">
                    <span id="sub-btn-text">Subscribe</span>
                </button>
            </form>
            <p id="subscribe-response" class="text-[10px] font-bold mt-2 hidden"></p>
        </div>

        <div class="pt-8 border-t border-black/5 flex flex-col md:flex-row items-center justify-between gap-6 text-[11px] text-slate-400 font-bold uppercase text-center">
            <p>© Webbird By Arafat. All Right Reserved 2026.</p>
        </div>
    </footer>
</div>

<div id="about-modal" class="fixed inset-0 z-[250] hidden items-center justify-center p-4">
    <div class="absolute inset-0 bg-black/20 backdrop-blur-sm" onclick="toggleAboutModal()"></div>
    <div id="about-modal-window" class="os-window glass w-full max-w-4xl rounded-2xl overflow-hidden shadow-2xl relative animate-in fade-in zoom-in duration-300">
        <div class="h-10 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
            <div class="window-dot bg-red-400" onclick="toggleAboutModal()"><i class="fas fa-times opacity-0 hover:opacity-100"></i></div>
            <div class="window-dot bg-yellow-400" onclick="toggleAboutModal()"><i class="fas fa-minus opacity-0 hover:opacity-100"></i></div>
            <div class="window-dot bg-green-400" onclick="maximizeWindow('about-modal-window')"><i class="fas fa-expand-alt opacity-0 hover:opacity-100"></i></div>
            <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest">About WebBird</div>
        </div>
        <div class="max-h-[75vh] overflow-y-auto p-8 sm:p-12 space-y-10">
            <div class="text-center">
                <h2 class="text-3xl font-black text-slate-900 mb-4">Innovative Digital Solutions</h2>
                <p class="text-slate-600 leading-relaxed italic">Our journey began with a simple goal — to help businesses thrive online through smart, impactful web design. Based in London, we combine creativity, strategy, and code to deliver websites that do more than look good — they perform, scale, and convert.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-black text-blue-600 mb-2">Our Vision</h3>
                    <p class="text-sm text-slate-500">To be the global benchmark for creative digital excellence, bridging the gap between human emotion and technical precision.</p>
                </div>
                <div>
                    <h3 class="text-xl font-black text-blue-600 mb-2">Our Mission</h3>
                    <p class="text-sm text-slate-500">To redefine how businesses connect with their audience online by delivering powerful, purposeful, and beautifully crafted digital experiences. We aim to be a trusted creative partner for brands across the UK and beyond.</p>
                </div>
            </div>
            <div class="bg-blue-600 rounded-2xl p-8 text-center text-white">
                <span class="text-5xl font-black block mb-2">20+</span>
                <span class="text-xs font-bold uppercase tracking-widest">Years Collective Experience</span>
            </div>
            <div>
                <h3 class="text-2xl font-black text-slate-900 mb-4">Who We Are</h3>
                <p class="text-sm text-slate-600 mb-6">We’re a London-based team of creative web designers, developers, and digital thinkers dedicated to helping businesses thrive online. We create custom websites and digital solutions that are tailored to your brand, your audience, and your goals.</p>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-[10px] font-black uppercase mb-1"><span>Web Design</span><span>95%</span></div>
                        <div class="h-1.5 bg-gray-200 rounded-full overflow-hidden"><div class="h-full bg-blue-600 w-[95%]"></div></div>
                    </div>
                    <div>
                        <div class="flex justify-between text-[10px] font-black uppercase mb-1"><span>Full-Stack Development</span><span>92%</span></div>
                        <div class="h-1.5 bg-gray-200 rounded-full overflow-hidden"><div class="h-full bg-purple-600 w-[92%]"></div></div>
                    </div>
                    <div>
                        <div class="flex justify-between text-[10px] font-black uppercase mb-1"><span>Support & Maintenance</span><span>97%</span></div>
                        <div class="h-1.5 bg-gray-200 rounded-full overflow-hidden"><div class="h-full bg-emerald-600 w-[97%]"></div></div>
                    </div>
                </div>
            </div>
            <div class="text-center pt-8 border-t border-black/5">
                <h3 class="text-2xl font-black mb-8">Our Creative Team</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="space-y-2"><div class="w-16 h-16 bg-slate-100 rounded-full mx-auto flex items-center justify-center"><i class="fas fa-user text-slate-300"></i></div><h4 class="font-black text-sm">AR Riyad</h4><p class="text-[10px] text-blue-600 font-bold uppercase">Founder</p></div>
                    <div class="space-y-2"><div class="w-16 h-16 bg-slate-100 rounded-full mx-auto flex items-center justify-center"><i class="fas fa-code text-slate-300"></i></div><h4 class="font-black text-sm">Abu Shoaib</h4><p class="text-[10px] text-purple-600 font-bold uppercase">Developer</p></div>
                    <div class="space-y-2"><div class="w-16 h-16 bg-slate-100 rounded-full mx-auto flex items-center justify-center"><i class="fas fa-pen-nib text-slate-300"></i></div><h4 class="font-black text-sm">T. Sebaba</h4><p class="text-[10px] text-pink-600 font-bold uppercase">Designer</p></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="services-modal" class="fixed inset-0 z-[250] hidden items-center justify-center p-4">
    <div class="absolute inset-0 bg-black/20 backdrop-blur-sm" onclick="toggleServicesModal()"></div>
    <div id="services-modal-window" class="os-window glass w-full max-w-6xl rounded-2xl overflow-hidden shadow-2xl relative animate-in fade-in zoom-in duration-300">
        <div class="h-10 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
            <div class="window-dot bg-red-400" onclick="toggleServicesModal()"><i class="fas fa-times opacity-0 hover:opacity-100"></i></div>
            <div class="window-dot bg-yellow-400" onclick="toggleServicesModal()"><i class="fas fa-minus opacity-0 hover:opacity-100"></i></div>
            <div class="window-dot bg-green-400" onclick="maximizeWindow('services-modal-window')"><i class="fas fa-expand-alt opacity-0 hover:opacity-100"></i></div>
            <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest">Our Specialized Services</div>
        </div>
        <div class="max-h-[75vh] overflow-y-auto p-8 sm:p-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-black text-slate-900 mb-4">Full-Stack Digital Solutions</h2>
                <p class="text-slate-500 max-w-2xl mx-auto">As a leading London web design agency, we provide end-to-end digital services to ensure your business stays ahead of the competition.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="modal-service-card p-6 rounded-2xl bg-white/40 border border-white/60">
                    <i class="fas fa-laptop-code text-blue-600 text-2xl mb-4"></i>
                    <h4 class="font-black text-lg mb-2">Custom Web Design</h4>
                    <p class="text-xs text-slate-500 mb-4">Unique, high-performance UI/UX designs crafted specifically for your brand identity and target London audience.</p>
                    <div class="flex flex-wrap gap-2 text-[9px] font-black uppercase">
                        <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded">RESPONSIVE LAYOUTS</span>
                        <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded">USER RESEARCH</span>
                    </div>
                </div>
                <div class="modal-service-card p-6 rounded-2xl bg-white/40 border border-white/60">
                    <i class="fas fa-shopping-cart text-purple-600 text-2xl mb-4"></i>
                    <h4 class="font-black text-lg mb-2">E-Commerce Development</h4>
                    <p class="text-xs text-slate-500 mb-4">Scalable Shopify & WooCommerce stores built to maximize conversions and simplify inventory management.</p>
                    <div class="flex flex-wrap gap-2 text-[9px] font-black uppercase">
                        <span class="bg-purple-100 text-purple-600 px-2 py-1 rounded">SECURE PAYMENTS</span>
                        <span class="bg-purple-100 text-purple-600 px-2 py-1 rounded">HIGH ROI FOCUS</span>
                    </div>
                </div>
                <div class="modal-service-card p-6 rounded-2xl bg-white/40 border border-white/60">
                    <i class="fas fa-search text-emerald-600 text-2xl mb-4"></i>
                    <h4 class="font-black text-lg mb-2">Technical SEO</h4>
                    <p class="text-xs text-slate-500 mb-4">Comprehensive search engine optimization to boost your rankings on Google and drive organic traffic locally and globally.</p>
                    <div class="flex flex-wrap gap-2 text-[9px] font-black uppercase">
                        <span class="bg-emerald-100 text-emerald-600 px-2 py-1 rounded">KEYWORD RESEARCH</span>
                        <span class="bg-emerald-100 text-emerald-600 px-2 py-1 rounded">SCHEMA MARKUP</span>
                    </div>
                </div>
                <div class="modal-service-card p-6 rounded-2xl bg-white/40 border border-white/60">
                    <i class="fas fa-tools text-orange-600 text-2xl mb-4"></i>
                    <h4 class="font-black text-lg mb-2">Website Maintenance</h4>
                    <p class="text-xs text-slate-500 mb-4">24/7 security monitoring, routine backups, and content updates to keep your site fast, secure, and modern.</p>
                    <div class="flex flex-wrap gap-2 text-[9px] font-black uppercase">
                        <span class="bg-orange-100 text-orange-600 px-2 py-1 rounded">DAILY BACKUPS</span>
                        <span class="bg-orange-100 text-orange-600 px-2 py-1 rounded">SSL MANAGEMENT</span>
                    </div>
                </div>
                <div class="modal-service-card p-6 rounded-2xl bg-white/40 border border-white/60">
                    <i class="fas fa-pen-nib text-pink-600 text-2xl mb-4"></i>
                    <h4 class="font-black text-lg mb-2">Branding & Identity</h4>
                    <p class="text-xs text-slate-500 mb-4">From logo design to complete brand guidelines, we build a cohesive visual story that resonates with your customers.</p>
                    <div class="flex flex-wrap gap-2 text-[9px] font-black uppercase">
                        <span class="bg-pink-100 text-pink-600 px-2 py-1 rounded">LOGO DESIGN</span>
                        <span class="bg-pink-100 text-pink-600 px-2 py-1 rounded">BRAND STRATEGY</span>
                    </div>
                </div>
                <div class="modal-service-card p-6 rounded-2xl bg-white/40 border border-white/60">
                    <i class="fas fa-bolt text-cyan-500 text-2xl mb-4"></i>
                    <h4 class="font-black text-lg mb-2">Speed Optimization</h4>
                    <p class="text-xs text-slate-500 mb-4">Core Web Vitals improvement and image compression to ensure your site loads in under 2 seconds across all devices.</p>
                    <div class="flex flex-wrap gap-2 text-[9px] font-black uppercase">
                        <span class="bg-cyan-100 text-cyan-600 px-2 py-1 rounded">90+ PAGESPEED SCORE</span>
                        <span class="bg-cyan-100 text-cyan-600 px-2 py-1 rounded">CDN SETUP</span>
                    </div>
                </div>
                <div class="modal-service-card p-6 rounded-2xl bg-white/40 border border-white/60">
                    <i class="fas fa-bullhorn text-indigo-600 text-2xl mb-4"></i>
                    <h4 class="font-black text-lg mb-2">Digital Marketing</h4>
                    <p class="text-xs text-slate-500 mb-4">Strategic PPC and social media campaigns designed to put your business in front of the right London audience.</p>
                    <div class="flex flex-wrap gap-2 text-[9px] font-black uppercase">
                        <span class="bg-indigo-100 text-indigo-600 px-2 py-1 rounded">GOOGLE ADS</span>
                        <span class="bg-indigo-100 text-indigo-600 px-2 py-1 rounded">SOCIAL ADS</span>
                    </div>
                </div>
                <div class="modal-service-card p-6 rounded-2xl bg-white/40 border border-white/60">
                    <i class="fas fa-puzzle-piece text-red-600 text-2xl mb-4"></i>
                    <h4 class="font-black text-lg mb-2">Custom Integrations</h4>
                    <p class="text-xs text-slate-500 mb-4">Connecting your website with CRM, ERP, or custom APIs to automate workflows and improve efficiency.</p>
                    <div class="flex flex-wrap gap-2 text-[9px] font-black uppercase">
                        <span class="bg-red-100 text-red-600 px-2 py-1 rounded">API SYNC</span>
                        <span class="bg-red-100 text-red-600 px-2 py-1 rounded">CRM CONNECT</span>
                    </div>
                </div>
                <div class="modal-service-card p-6 rounded-2xl bg-white/40 border border-white/60">
                    <i class="fab fa-apple text-sky-500 text-2xl mb-4"></i>
                    <h4 class="font-black text-lg mb-2">iOS App Development</h4>
                    <p class="text-xs text-slate-500 mb-4">High-performance native iOS applications designed for elegance, leveraging the latest Swift and SwiftUI frameworks.</p>
                    <div class="flex flex-wrap gap-2 text-[9px] font-black uppercase">
                        <span class="bg-sky-100 text-sky-600 px-2 py-1 rounded">IPHONE & IPAD</span>
                        <span class="bg-sky-100 text-sky-600 px-2 py-1 rounded">APP STORE READY</span>
                    </div>
                </div>
                <div class="modal-service-card p-6 rounded-2xl bg-white/40 border border-white/60">
                    <i class="fab fa-android text-lime-600 text-2xl mb-4"></i>
                    <h4 class="font-black text-lg mb-2">Android Development</h4>
                    <p class="text-xs text-slate-500 mb-4">Scalable and robust Android solutions built with Kotlin, ensuring compatibility across all modern mobile devices.</p>
                    <div class="flex flex-wrap gap-2 text-[9px] font-black uppercase">
                        <span class="bg-lime-100 text-lime-600 px-2 py-1 rounded">PLAY STORE STRATEGY</span>
                        <span class="bg-lime-100 text-lime-600 px-2 py-1 rounded">KOTLIN NATIVE</span>
                    </div>
                </div>
                <div class="modal-service-card p-6 rounded-2xl bg-white/40 border border-white/60">
                    <i class="fas fa-globe text-fuchsia-600 text-2xl mb-4"></i>
                    <h4 class="font-black text-lg mb-2">Web App (PWA)</h4>
                    <p class="text-xs text-slate-500 mb-4">Progressive Web Applications that provide an app-like experience through the browser with offline support.</p>
                    <div class="flex flex-wrap gap-2 text-[9px] font-black uppercase">
                        <span class="bg-fuchsia-100 text-fuchsia-600 px-2 py-1 rounded">OFFLINE MODE</span>
                        <span class="bg-fuchsia-100 text-fuchsia-600 px-2 py-1 rounded">PUSH NOTIFICATIONS</span>
                    </div>
                </div>
                <div class="modal-service-card p-6 rounded-2xl bg-white/40 border border-white/60">
                    <i class="fas fa-mobile-alt text-amber-600 text-2xl mb-4"></i>
                    <h4 class="font-black text-lg mb-2">Native Mobile Apps</h4>
                    <p class="text-xs text-slate-500 mb-4">Hybrid and native cross-platform apps using Flutter or React Native for cost-effective, high-quality deployment.</p>
                    <div class="flex flex-wrap gap-2 text-[9px] font-black uppercase">
                        <span class="bg-amber-100 text-amber-600 px-2 py-1 rounded">DUAL-PLATFORM LAUNCH</span>
                        <span class="bg-amber-100 text-amber-600 px-2 py-1 rounded">SHARED CODEBASE</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="pricing-modal" class="fixed inset-0 z-[250] hidden items-center justify-center p-4">
    <div class="absolute inset-0 bg-black/20 backdrop-blur-sm" onclick="togglePricingModal()"></div>
    <div id="pricing-modal-window" class="os-window glass w-full max-w-6xl rounded-2xl overflow-hidden shadow-2xl relative animate-in fade-in zoom-in duration-300">
        <div class="h-10 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
            <div class="window-dot bg-red-400" onclick="togglePricingModal()"><i class="fas fa-times opacity-0 hover:opacity-100"></i></div>
            <div class="window-dot bg-yellow-400" onclick="togglePricingModal()"><i class="fas fa-minus opacity-0 hover:opacity-100"></i></div>
            <div class="window-dot bg-green-400" onclick="maximizeWindow('pricing-modal-window')"><i class="fas fa-expand-alt opacity-0 hover:opacity-100"></i></div>
            <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest">Price Packages</div>
        </div>
        <div class="max-h-[75vh] overflow-y-auto p-8 sm:p-12">
            <div class="text-center mb-12"><h2 class="text-3xl font-black text-slate-900 mb-2">Find the right Price Package</h2><p class="text-slate-500 italic">Transparent pricing for every stage of your growth.</p></div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white/40 p-8 rounded-2xl border border-white/60 flex flex-col">
                    <h4 class="font-black text-lg mb-1">Starter Website</h4>
                    <div class="text-3xl font-black text-blue-600 mb-6">£499<span class="text-[10px] text-slate-400 font-normal uppercase ml-1">/one off</span></div>
                    <ul class="text-xs space-y-3 mb-8 flex-grow">
                        <li><i class="fas fa-check text-green-500 mr-2"></i> 1–3 Page Custom Design</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Responsive Layout</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Basic On-Page SEO</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> 7–10 Days Delivery</li>
                    </ul>
                    <button onclick="togglePricingModal(); toggleModal()" class="w-full py-3 bg-slate-900 text-white rounded-xl text-[10px] font-black uppercase">Select Plan</button>
                </div>
                <div class="bg-white p-8 rounded-2xl border-4 border-blue-500 shadow-xl flex flex-col relative scale-105 z-10">
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-blue-500 text-white px-4 py-1 rounded-full text-[8px] font-black uppercase">BEST VALUE</div>
                    <h4 class="font-black text-lg mb-1">Professional</h4>
                    <div class="text-3xl font-black text-blue-600 mb-6">£999<span class="text-[10px] text-slate-400 font-normal uppercase ml-1">/one off</span></div>
                    <ul class="text-xs space-y-3 mb-8 flex-grow">
                        <li><i class="fas fa-check text-blue-500 mr-2"></i> 2-5 Page Custom Design</li>
                        <li><i class="fas fa-check text-blue-500 mr-2"></i> CMS (WordPress/Webflow)</li>
                        <li><i class="fas fa-check text-blue-500 mr-2"></i> SEO-Optimised Pages</li>
                        <li><i class="fas fa-check text-blue-500 mr-2"></i> 1 Month Free Support</li>
                    </ul>
                    <button onclick="togglePricingModal(); toggleModal()" class="w-full py-3 bg-blue-600 text-white rounded-xl text-[10px] font-black uppercase">Select Plan</button>
                </div>
                <div class="bg-white/40 p-8 rounded-2xl border border-white/60 flex flex-col">
                    <h4 class="font-black text-lg mb-1">Premium Website</h4>
                    <div class="text-3xl font-black text-blue-600 mb-6">£1,499<span class="text-[10px] text-slate-400 font-normal uppercase ml-1">/one off</span></div>
                    <ul class="text-xs space-y-3 mb-8 flex-grow">
                        <li><i class="fas fa-check text-green-500 mr-2"></i> 10+ Pages / E-commerce</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Custom UI/UX Design</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> CRM or API Integration</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> 3 Month Free Support</li>
                    </ul>
                    <button onclick="togglePricingModal(); toggleModal()" class="w-full py-3 bg-slate-900 text-white rounded-xl text-[10px] font-black uppercase">Select Plan</button>
                </div>
            </div>
            <div class="w-full bg-blue-600 rounded-2xl p-8 text-white flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="text-center md:text-left">
                    <h4 class="text-2xl font-black mb-1">Custom Query</h4>
                    <p class="text-sm opacity-90">For any other specific services or large-scale projects.</p>
                </div>
                <button onclick="togglePricingModal(); toggleModal()" class="px-10 py-4 bg-white text-blue-600 rounded-xl font-black uppercase tracking-widest text-xs hover:bg-blue-50 transition-colors">CONTACT US</button>
            </div>
        </div>
    </div>
</div>

<div id="contact-modal" class="fixed inset-0 z-[250] hidden items-center justify-center p-4">
    <div class="absolute inset-0 bg-black/20 backdrop-blur-sm" onclick="toggleModal()"></div>
    <div id="contact-modal-window" class="os-window glass w-full max-w-2xl rounded-2xl overflow-hidden shadow-2xl relative animate-in fade-in zoom-in duration-300">
        <div class="h-10 bg-gray-200/50 flex items-center px-4 space-x-2 border-b border-gray-300/30">
            <div class="window-dot bg-red-400" onclick="toggleModal()"><i class="fas fa-times opacity-0 hover:opacity-100"></i></div>
            <div class="window-dot bg-yellow-400" onclick="toggleModal()"><i class="fas fa-minus opacity-0 hover:opacity-100"></i></div>
            <div class="window-dot bg-green-400" onclick="maximizeWindow('contact-modal-window')"><i class="fas fa-expand-alt opacity-0 hover:opacity-100"></i></div>
            <div class="flex-grow text-center text-[10px] text-gray-500 font-mono uppercase tracking-widest">Connect with Us</div>
        </div>
        <div class="p-8 sm:p-12">
            <form id="webbird-contact-form" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="name" placeholder="Full Name" required class="w-full px-5 py-3 rounded-xl glass border border-white/40 focus:ring-2 focus:ring-blue-500 outline-none text-sm">
                    <input type="email" name="email" placeholder="Email Address" required class="w-full px-5 py-3 rounded-xl glass border border-white/40 focus:ring-2 focus:ring-blue-500 outline-none text-sm">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="tel" name="phone" placeholder="Phone Number" required class="w-full px-5 py-3 rounded-xl glass border border-white/40 focus:ring-2 focus:ring-blue-500 outline-none text-sm">
                    <select name="service" required class="w-full px-5 py-3 rounded-xl glass border border-white/40 focus:ring-2 focus:ring-blue-500 outline-none text-sm appearance-none">
                        <option value="" disabled selected>Select Service</option>
                        <option value="Web Design">Web Design</option>
                        <option value="E-Commerce">E-Commerce</option>
                        <option value="App Development">App Development</option>
                        <option value="SEO">Technical SEO</option>
                        <option value="Other">Other Query</option>
                    </select>
                </div>
                <textarea name="message" rows="4" placeholder="How can we help you?" required class="w-full px-5 py-3 rounded-xl glass border border-white/40 focus:ring-2 focus:ring-blue-500 outline-none text-sm"></textarea>
                <button type="submit" class="w-full py-4 bg-blue-600 text-white rounded-xl font-black uppercase tracking-widest text-[10px] shadow-xl hover:bg-blue-700 transition-all flex items-center justify-center">
                    <span id="submit-text">Send Message</span>
                    <i id="submit-spinner" class="fas fa-spinner fa-spin ml-3 hidden"></i>
                </button>
                <p id="form-response" class="text-center text-xs font-bold hidden"></p>
            </form>
        </div>
    </div>
</div>

<div class="fixed bottom-4 left-1/2 -translate-x-1/2 z-[200]">
    <div class="glass rounded-2xl p-2 flex items-end space-x-2 shadow-2xl border border-white/40">
        <button onclick="window.location.href='<?php echo esc_url( home_url( '/' ) ); ?>'" class="dock-item bg-blue-500 w-12 h-12 rounded-xl flex items-center justify-center text-white"><i class="fas fa-home"></i></button>
        <button onclick="toggleAboutModal()" class="dock-item bg-purple-500 w-12 h-12 rounded-xl flex items-center justify-center text-white"><i class="fas fa-user-tie"></i></button>
        <button onclick="toggleServicesModal()" class="dock-item bg-indigo-500 w-12 h-12 rounded-xl flex items-center justify-center text-white"><i class="fas fa-rocket"></i></button>
        <button onclick="togglePricingModal()" class="dock-item bg-orange-500 w-12 h-12 rounded-xl flex items-center justify-center text-white"><i class="fas fa-tags"></i></button>
        <button onclick="toggleModal()" class="dock-item bg-green-500 w-12 h-12 rounded-xl flex items-center justify-center text-white"><i class="fas fa-paper-plane"></i></button>
        <div class="w-px h-10 bg-gray-400/30 mx-1"></div>
        <button onclick="window.open('https://wa.me/447557126699')" class="dock-item bg-[#25D366] w-12 h-12 rounded-xl flex items-center justify-center text-white"><i class="fab fa-whatsapp text-2xl"></i></button>
    </div>
</div>

<script>
    // Live Search Logic Fixed
    function handleSearch(val) {
        const dynamicResults = document.getElementById('dynamic-results');
        const quickLinks = document.getElementById('quick-links');
        const resultsList = document.getElementById('results-list');

        if (!val || val.length < 2) {
            if(resultsList) resultsList.innerHTML = '';
            if(dynamicResults) dynamicResults.classList.add('hidden');
            if(quickLinks) quickLinks.classList.remove('hidden');
            return;
        }

        if(quickLinks) quickLinks.classList.add('hidden');

        const formData = new FormData();
        formData.append('action', 'data_fetch');
        formData.append('keyword', val);

        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if(resultsList) resultsList.innerHTML = data;
            if(dynamicResults) dynamicResults.classList.remove('hidden');
        });
    }

    // Modal Control Functions
    function toggleModal() { const el = document.getElementById('contact-modal'); if(el) { el.classList.toggle('hidden'); el.classList.toggle('flex'); } }
    function toggleAboutModal() { const el = document.getElementById('about-modal'); if(el) { el.classList.toggle('hidden'); el.classList.toggle('flex'); } }
    function toggleServicesModal() { const el = document.getElementById('services-modal'); if(el) { el.classList.toggle('hidden'); el.classList.toggle('flex'); } }
    function togglePricingModal() { const el = document.getElementById('pricing-modal'); if(el) { el.classList.toggle('hidden'); el.classList.toggle('flex'); } }
    function toggleSearchModal() { 
        const el = document.getElementById('search-modal'); 
        if(el) {
            el.classList.toggle('hidden'); 
            el.classList.toggle('flex'); 
            if(!el.classList.contains('hidden')) {
                const input = document.getElementById('spotlight-input');
                if(input) input.focus();
            }
        }
    }
    function toggleMobileMenu() { 
        const menu = document.getElementById('mobile-menu-overlay');
        if(menu) menu.classList.toggle('active'); 
    }
    function maximizeWindow(id) { 
        const win = document.getElementById(id);
        if(win) win.classList.toggle('full-screen-window'); 
    }

    // AJAX Contact Form Submission
    document.getElementById('webbird-contact-form')?.addEventListener('submit', function(e) {
        e.preventDefault();
        const form = this;
        const text = document.getElementById('submit-text');
        const spinner = document.getElementById('submit-spinner');
        const response = document.getElementById('form-response');

        text.textContent = 'Processing...';
        spinner.classList.remove('hidden');

        const formData = new FormData(form);
        formData.append('action', 'webbird_contact');

        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if(data.success) {
                response.textContent = "Message sent successfully! We will contact you soon.";
                response.className = "text-center text-xs font-bold text-green-600 block";
                form.reset();
                setTimeout(() => toggleModal(), 2000);
            } else {
                throw new Error();
            }
        })
        .catch(() => {
            response.textContent = "Submission failed. Please check your connection.";
            response.className = "text-center text-xs font-bold text-red-600 block";
        })
        .finally(() => {
            text.textContent = 'Send Message';
            spinner.classList.add('hidden');
        });
    });

    // Dynamic Time
    function updateTime() { 
        const now = new Date(); 
        const timeStr = now.toLocaleTimeString('en-GB', { hour: '2-digit', minute: '2-digit', hour12: true }).toUpperCase();
        const el = document.getElementById('system-time');
        if(el) el.textContent = timeStr;
    }
    setInterval(updateTime, 1000);
    updateTime();

    // Escape Key to Close
    document.addEventListener('keydown', (e) => {
        if(e.key === "Escape") {
            const search = document.getElementById('search-modal');
            const menu = document.getElementById('mobile-menu-overlay');
            if(search) search.classList.add('hidden');
            if(menu) menu.classList.remove('active');
            
            ['about-modal', 'services-modal', 'pricing-modal', 'contact-modal'].forEach(id => {
                const modal = document.getElementById(id);
                if(modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            });
        }
    });
    
    // Newsletter Subscription Logic
    document.getElementById('newsletter-form')?.addEventListener('submit', function(e) {
        e.preventDefault();
        const form = this;
        const btnText = document.getElementById('sub-btn-text');
        const response = document.getElementById('subscribe-response');
        const email = form.querySelector('input[name="subscribe_email"]').value;
    
        btnText.textContent = 'Processing...';
        response.classList.add('hidden');
    
        const formData = new FormData();
        formData.append('action', 'webbird_subscribe');
        formData.append('email', email);
    
        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if(data.success) {
                response.textContent = "Thank you for subscribing!";
                response.className = "text-[10px] font-bold mt-2 text-green-600 block";
                form.reset();
            } else {
                throw new Error(data.data);
            }
        })
        .catch((err) => {
            response.textContent = err.message || "Subscription failed.";
            response.className = "text-[10px] font-bold mt-2 text-red-600 block";
        })
        .finally(() => {
            btnText.textContent = 'Subscribe';
        });
    });
    
    
    
</script>

<?php wp_footer(); ?>
</body>
</html>