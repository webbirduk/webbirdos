<!-- FOOTER SECTION -->
    <footer class="os-window glass rounded-[3rem] p-10 lg:p-16 border border-white/40 max-w-7xl mx-auto mb-32">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-16">
            <div class="lg:col-span-2">
                <div class="flex items-center space-x-3 mb-6">
                    <i class="fab fa-apple text-3xl text-slate-900"></i>
                    <span class="text-2xl font-black tracking-tighter">WebBird</span>
                </div>
                <p class="text-sm text-slate-600 leading-relaxed mb-8 max-w-xs">
                    London’s Trusted Web Design & Digital Solutions Partner. Helping businesses create impactful, user-friendly websites that drive growth and engagement.
                </p>
                <div class="flex items-center space-x-4">
                    <a href="#" class="w-10 h-10 rounded-full glass border border-white/40 flex items-center justify-center text-slate-700 hover:bg-blue-600 hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full glass border border-white/40 flex items-center justify-center text-slate-700 hover:bg-pink-500 hover:text-white transition"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div>
                <h4 class="text-xs font-black uppercase tracking-widest mb-6 text-slate-900">Company</h4>
                <ul class="space-y-4 text-sm text-slate-500 font-medium">
                    <li><a href="#" onclick="toggleAboutModal()" class="hover:text-blue-600">About Us</a></li>
                    <li><a href="#" onclick="toggleServicesModal()" class="hover:text-blue-600">Services</a></li>
                    <li><a href="#" onclick="togglePricingModal()" class="hover:text-blue-600">Pricing Plan</a></li>
                    <li><a href="#" onclick="toggleModal()" class="hover:text-blue-600">Contact Us</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-xs font-black uppercase tracking-widest mb-6 text-slate-900">Support</h4>
                <ul class="space-y-4 text-sm text-slate-500 font-medium">
                    <li><a href="#" class="hover:text-blue-600">Help Center</a></li>
                    <li><a href="#" class="hover:text-blue-600">Support</a></li>
                    <li><a href="#" class="hover:text-blue-600">Product knowledge</a></li>
                    <li><a href="#" onclick="toggleModal()" class="hover:text-blue-600">Contact us</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-xs font-black uppercase tracking-widest mb-6 text-slate-900">Contacts</h4>
                <ul class="space-y-4 text-sm text-slate-500">
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-map-marker-alt text-blue-600 mt-1"></i>
                        <span>Halley Rd, London E12 6UB</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-envelope text-blue-600"></i>
                        <a href="mailto:hi@webbird.co.uk">hi@webbird.co.uk</a>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-phone text-blue-600"></i>
                        <span>+44 7557 126699</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="bg-white/30 border border-white/40 p-8 rounded-3xl flex flex-col lg:flex-row items-center justify-between gap-8 mb-16 relative z-10">
                <div class="text-center lg:text-left">
                    <h4 class="text-xl font-black mb-1">Subscribe to our news</h4>
                    <p class="text-xs text-slate-500 font-medium">Subscribe to our newsletter and get a notification about new insight</p>
                </div>
                <div class="flex w-full lg:w-auto gap-2">
                    <input type="email" placeholder="Email Address" class="flex-grow lg:w-64 px-6 py-4 rounded-2xl glass border border-white/40 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
                    <button class="px-8 py-4 bg-slate-900 text-white rounded-2xl font-bold hover:bg-black transition text-sm">Subscribe</button>
                </div>
        </div>

        <div class="pt-8 border-t border-black/5 flex flex-col md:flex-row items-center justify-between gap-6 text-[11px] text-slate-400 font-bold uppercase">
            <p>© Webbird By Arafat. All Right Reserved 2026.</p>
            <div class="flex gap-6">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Legal Info</a>
                <a href="#">Refund Policy</a>
            </div>
        </div>
    </footer>

    <!-- MACOS DOCK -->
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

    <!-- MAIN CONTACT MODAL -->
    <div id="contact-modal" class="fixed inset-0 z-[300] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm" onclick="toggleModal()"></div>
        <div id="contact-window" class="relative glass max-w-lg w-full rounded-2xl overflow-hidden shadow-2xl animate-in zoom-in-95 duration-200">
            <div class="h-10 bg-gray-100/80 flex items-center px-4 border-b border-gray-200/50">
                <div onclick="toggleModal()" class="window-dot bg-red-400 mr-2 hover:opacity-80 transition-all flex items-center justify-center"><i class="fas fa-times text-[6px] opacity-0 hover:opacity-100"></i></div>
                <div onclick="toggleModal()" class="window-dot bg-yellow-400 mr-2 opacity-50"></div>
                <div onclick="maximizeWindow('contact-window')" class="window-dot bg-green-400 mr-2 hover:opacity-80 transition-all flex items-center justify-center"><i class="fas fa-expand-arrows-alt text-[6px] opacity-0 hover:opacity-100"></i></div>
                <span class="flex-grow text-center text-[10px] font-bold text-gray-500 uppercase tracking-widest">Connect with WebBird</span>
            </div>
            <div class="p-8 max-h-[80vh] overflow-y-auto">
                <h2 class="text-2xl font-black mb-2">Start Your Journey</h2>
                <p class="text-xs text-slate-500 mb-6 font-medium">Tell us about your project and we'll get back to you within 24 hours.</p>
                <input type="text" placeholder="Full Name" class="w-full mb-3 px-4 py-3 bg-white/50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                <input type="email" placeholder="Email Address" class="w-full mb-3 px-4 py-3 bg-white/50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                <textarea placeholder="Tell us about your goals..." class="w-full mb-4 px-4 py-3 bg-white/50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition" rows="4"></textarea>
                <button class="w-full py-4 bg-blue-600 text-white rounded-xl font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 active:scale-95 transition-all">Send Request</button>
            </div>
        </div>
    </div>

    <!-- ABOUT MODAL -->
    <div id="about-modal" class="fixed inset-0 z-[300] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm" onclick="toggleAboutModal()"></div>
        <div id="about-window" class="relative glass max-w-4xl w-full rounded-2xl overflow-hidden shadow-2xl animate-in zoom-in-95 duration-200">
            <div class="h-10 bg-gray-100/80 flex items-center px-4 border-b border-gray-200/50">
                <div onclick="toggleAboutModal()" class="window-dot bg-red-400 mr-2 hover:opacity-80 transition-all flex items-center justify-center"><i class="fas fa-times text-[6px] opacity-0 hover:opacity-100"></i></div>
                <div onclick="toggleAboutModal()" class="window-dot bg-yellow-400 mr-2 opacity-50"></div>
                <div onclick="maximizeWindow('about-window')" class="window-dot bg-green-400 mr-2 hover:opacity-80 transition-all flex items-center justify-center"><i class="fas fa-expand-arrows-alt text-[6px] opacity-0 hover:opacity-100"></i></div>
                <span class="flex-grow text-center text-[10px] font-bold text-gray-500 uppercase tracking-widest">About WebBird — Our Journey</span>
            </div>
            <div class="p-8 sm:p-12 max-h-[85vh] overflow-y-auto">
                <div class="mb-12">
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 mb-6">Innovative Digital Solutions</h2>
                    <p class="text-base text-slate-600 leading-relaxed border-l-4 border-blue-500 pl-6 mb-8 italic">
                        Our journey began with a simple goal — to help businesses thrive online through smart, impactful web design. Based in London, we combine creativity, strategy, and code to deliver websites that do more than look good — they perform, scale, and convert.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                        <div class="p-6 bg-white/40 rounded-2xl border border-white/60">
                            <h4 class="text-xl font-black mb-3 text-slate-900"><i class="fas fa-eye text-blue-500 mr-2"></i> Our Vision</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">To be the global benchmark for creative digital excellence, bridging the gap between human emotion and technical precision.</p>
                        </div>
                        <div class="p-6 bg-white/40 rounded-2xl border border-white/60">
                            <h4 class="text-xl font-black mb-3 text-slate-900"><i class="fas fa-bullseye text-pink-500 mr-2"></i> Our Mission</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">To redefine how businesses connect with their audience online by delivering powerful, purposeful, and beautifully crafted digital experiences. We aim to be a trusted creative partner for brands across the UK and beyond — helping them grow through innovative web design, thoughtful strategy, and lasting impact.</p>
                        </div>
                    </div>
                </div>

                <!-- Stats & Expertise -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mb-16">
                    <div class="lg:col-span-4 bg-slate-900 rounded-3xl p-8 flex flex-col justify-center items-center text-center text-white border border-white/10">
                        <span class="text-6xl font-black mb-2">20+</span>
                        <span class="text-[10px] font-black uppercase tracking-widest opacity-60">Years Experience</span>
                    </div>
                    <div class="lg:col-span-8 p-8 bg-white/50 rounded-3xl border border-white/60">
                        <h4 class="text-xs font-black text-blue-600 uppercase tracking-widest mb-2">Who We Are</h4>
                        <h3 class="text-xl font-black text-slate-900 mb-4">Digital Solutions For Your Business Goals!</h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-6">We’re a London-based team of creative web designers, developers, and digital thinkers dedicated to helping businesses thrive online. We create custom websites and digital solutions that are tailored to your brand, your audience, and your goals.</p>
                        
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-[10px] font-black uppercase mb-1"><span>Web Design</span><span>94%</span></div>
                                <div class="h-1.5 w-full bg-slate-200 rounded-full overflow-hidden"><div class="h-full bg-blue-600 w-[94%]"></div></div>
                            </div>
                            <div>
                                <div class="flex justify-between text-[10px] font-black uppercase mb-1"><span>Full-Stack Development</span><span>91%</span></div>
                                <div class="h-1.5 w-full bg-slate-200 rounded-full overflow-hidden"><div class="h-full bg-purple-600 w-[91%]"></div></div>
                            </div>
                            <div>
                                <div class="flex justify-between text-[10px] font-black uppercase mb-1"><span>Ongoing Support & Maintenance</span><span>95%</span></div>
                                <div class="h-1.5 w-full bg-slate-200 rounded-full overflow-hidden"><div class="h-full bg-emerald-600 w-[95%]"></div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Core Values -->
                <div class="mb-16">
                    <div class="text-center mb-10">
                        <h2 class="text-[10px] font-black text-blue-600 uppercase tracking-widest mb-1">Our Core Values</h2>
                        <h3 class="text-2xl font-black text-slate-900">What Drives Us to Give Our Advantages</h3>
                        <p class="text-xs text-slate-500 mt-2 max-w-2xl mx-auto">Our work is guided by values that shape every project, partnership, and decision. These are the principles behind our results — and what sets us apart.</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="p-6 bg-white/40 rounded-2xl border border-white/60 hover:bg-white transition">
                            <i class="fas fa-lightbulb text-blue-500 mb-4"></i>
                            <h4 class="font-black text-sm mb-2">Creativity & Innovation</h4>
                            <p class="text-[10px] text-slate-500 leading-relaxed">Web design thrives on fresh ideas. A great agency constantly experiments, evolves, and adapts.</p>
                        </div>
                        <div class="p-6 bg-white/40 rounded-2xl border border-white/60 hover:bg-white transition">
                            <i class="fas fa-heart text-pink-500 mb-4"></i>
                            <h4 class="font-black text-sm mb-2">Commitment</h4>
                            <p class="text-[10px] text-slate-500 leading-relaxed">We are dedicated to providing top-notch service to our clients. Every post, campaign, & strategy counts.</p>
                        </div>
                        <div class="p-6 bg-white/40 rounded-2xl border border-white/60 hover:bg-white transition">
                            <i class="fas fa-eye text-emerald-500 mb-4"></i>
                            <h4 class="font-black text-sm mb-2">Transparency</h4>
                            <p class="text-[10px] text-slate-500 leading-relaxed">Transparency is at the heart of everything we do. We keep you informed at every step.</p>
                        </div>
                        <div class="p-6 bg-white/40 rounded-2xl border border-white/60 hover:bg-white transition">
                            <i class="fas fa-users text-orange-500 mb-4"></i>
                            <h4 class="font-black text-sm mb-2">Collaboration</h4>
                            <p class="text-[10px] text-slate-500 leading-relaxed">The best campaigns come from strong teamwork—both internally and with clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Team -->
                <div>
                    <div class="text-center mb-10">
                        <h2 class="text-[10px] font-black text-blue-600 uppercase tracking-widest mb-1">Our Creative Team</h2>
                        <h3 class="text-2xl font-black text-slate-900">The experts behind our success</h3>
                        <p class="text-xs text-slate-500 mt-2 max-w-2xl mx-auto">Together, we combine innovative ideas with proven processes to craft websites that drive meaningful results.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center group">
                            <div class="w-32 h-32 bg-slate-200 rounded-full mx-auto mb-4 overflow-hidden flex items-center justify-center text-slate-400">
                                <i class="fas fa-user text-4xl"></i>
                            </div>
                            <h4 class="font-black text-slate-900">AR Riyad</h4>
                            <p class="text-[9px] font-black text-blue-600 uppercase tracking-widest mb-3">Founder & Web Designer</p>
                            <div class="flex justify-center gap-3 text-slate-400">
                                <a href="#" class="hover:text-blue-600"><i class="fab fa-facebook-f text-xs"></i></a>
                                <a href="#" class="hover:text-blue-400"><i class="fab fa-twitter text-xs"></i></a>
                                <a href="#" class="hover:text-pink-500"><i class="fab fa-instagram text-xs"></i></a>
                            </div>
                        </div>
                        <div class="text-center group">
                            <div class="w-32 h-32 bg-slate-200 rounded-full mx-auto mb-4 overflow-hidden flex items-center justify-center text-slate-400">
                                <i class="fas fa-user text-4xl"></i>
                            </div>
                            <h4 class="font-black text-slate-900">abu shoaib</h4>
                            <p class="text-[9px] font-black text-purple-600 uppercase tracking-widest mb-3">Full Stack Developer</p>
                            <div class="flex justify-center gap-3 text-slate-400">
                                <a href="#" class="hover:text-blue-600"><i class="fab fa-facebook-f text-xs"></i></a>
                                <a href="#" class="hover:text-blue-400"><i class="fab fa-twitter text-xs"></i></a>
                                <a href="#" class="hover:text-pink-500"><i class="fab fa-instagram text-xs"></i></a>
                            </div>
                        </div>
                        <div class="text-center group">
                            <div class="w-32 h-32 bg-slate-200 rounded-full mx-auto mb-4 overflow-hidden flex items-center justify-center text-slate-400">
                                <i class="fas fa-user text-4xl"></i>
                            </div>
                            <h4 class="font-black text-slate-900">T. Sebaba</h4>
                            <p class="text-[9px] font-black text-pink-600 uppercase tracking-widest mb-3">Graphic Designer</p>
                            <div class="flex justify-center gap-3 text-slate-400">
                                <a href="#" class="hover:text-blue-600"><i class="fab fa-facebook-f text-xs"></i></a>
                                <a href="#" class="hover:text-blue-400"><i class="fab fa-twitter text-xs"></i></a>
                                <a href="#" class="hover:text-pink-500"><i class="fab fa-instagram text-xs"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-16 text-center">
                    <button onclick="toggleAboutModal(); toggleModal();" class="px-12 py-4 bg-blue-600 text-white rounded-2xl font-black uppercase tracking-widest text-[10px] shadow-xl">Start Your Project</button>
                </div>
            </div>
        </div>
    </div>

    <!-- SERVICES MODAL -->
    <div id="services-modal" class="fixed inset-0 z-[300] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm" onclick="toggleServicesModal()"></div>
        <div id="services-window" class="relative glass max-w-5xl w-full rounded-2xl overflow-hidden shadow-2xl animate-in zoom-in-95 duration-200">
            <div class="h-10 bg-gray-100/80 flex items-center px-4 border-b border-gray-200/50">
                <div onclick="toggleServicesModal()" class="window-dot bg-red-400 mr-2 hover:opacity-80 transition-all flex items-center justify-center"><i class="fas fa-times text-[6px] opacity-0 hover:opacity-100"></i></div>
                <div onclick="toggleServicesModal()" class="window-dot bg-yellow-400 mr-2 opacity-50"></div>
                <div onclick="maximizeWindow('services-window')" class="window-dot bg-green-400 mr-2 hover:opacity-80 transition-all flex items-center justify-center"><i class="fas fa-expand-arrows-alt text-[6px] opacity-0 hover:opacity-100"></i></div>
                <span class="flex-grow text-center text-[10px] font-bold text-gray-500 uppercase tracking-widest">Specialized Services — Full-Stack Digital Solutions</span>
            </div>
            <div class="p-8 sm:p-12 max-h-[85vh] overflow-y-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 mb-4 tracking-tight">Full-Stack Digital Solutions in London</h2>
                    <p class="text-xs text-slate-500 max-w-2xl mx-auto">As a leading London web design agency, we provide end-to-end digital services to ensure your business stays ahead of the competition.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- S1 -->
                    <div class="p-8 bg-white/40 rounded-3xl border border-white/60 modal-service-card">
                        <i class="fas fa-laptop-code text-blue-600 mb-5 text-2xl"></i>
                        <h4 class="font-black mb-3 text-base">Custom Web Design</h4>
                        <p class="text-[11px] text-slate-500 leading-relaxed mb-4">Unique, high-performance UI/UX designs crafted specifically for your brand identity and target London audience.</p>
                        <div class="flex flex-col gap-2 text-[9px] font-black uppercase tracking-widest text-blue-600">
                            <span><i class="fas fa-check mr-1"></i> Responsive Layouts</span>
                            <span><i class="fas fa-check mr-1"></i> User Research</span>
                        </div>
                    </div>
                    <!-- S2 -->
                    <div class="p-8 bg-white/40 rounded-3xl border border-white/60 modal-service-card">
                        <i class="fas fa-shopping-cart text-purple-600 mb-5 text-2xl"></i>
                        <h4 class="font-black mb-3 text-base">E-Commerce Development</h4>
                        <p class="text-[11px] text-slate-500 leading-relaxed mb-4">Scalable Shopify & WooCommerce stores built to maximize conversions and simplify inventory management.</p>
                        <div class="flex flex-col gap-2 text-[9px] font-black uppercase tracking-widest text-purple-600">
                            <span><i class="fas fa-check mr-1"></i> Secure Payments</span>
                            <span><i class="fas fa-check mr-1"></i> High ROI Focus</span>
                        </div>
                    </div>
                    <!-- S3 -->
                    <div class="p-8 bg-white/40 rounded-3xl border border-white/60 modal-service-card">
                        <i class="fas fa-search-plus text-emerald-600 mb-5 text-2xl"></i>
                        <h4 class="font-black mb-3 text-base">Technical SEO</h4>
                        <p class="text-[11px] text-slate-500 leading-relaxed mb-4">Comprehensive search engine optimization to boost your rankings on Google and drive organic traffic.</p>
                        <div class="flex flex-col gap-2 text-[9px] font-black uppercase tracking-widest text-emerald-600">
                            <span><i class="fas fa-check mr-1"></i> Keyword Research</span>
                            <span><i class="fas fa-check mr-1"></i> Schema Markup</span>
                        </div>
                    </div>
                    <!-- S4 -->
                    <div class="p-8 bg-white/40 rounded-3xl border border-white/60 modal-service-card">
                        <i class="fas fa-tools text-orange-600 mb-5 text-2xl"></i>
                        <h4 class="font-black mb-3 text-base">Website Maintenance</h4>
                        <p class="text-[11px] text-slate-500 leading-relaxed mb-4">24/7 security monitoring, routine backups, and content updates to keep your site fast, secure, and modern.</p>
                        <div class="flex flex-col gap-2 text-[9px] font-black uppercase tracking-widest text-orange-600">
                            <span><i class="fas fa-check mr-1"></i> Daily Backups</span>
                            <span><i class="fas fa-check mr-1"></i> SSL Management</span>
                        </div>
                    </div>
                    <!-- S5 -->
                    <div class="p-8 bg-white/40 rounded-3xl border border-white/60 modal-service-card">
                        <i class="fas fa-fingerprint text-pink-600 mb-5 text-2xl"></i>
                        <h4 class="font-black mb-3 text-base">Branding & Identity</h4>
                        <p class="text-[11px] text-slate-500 leading-relaxed mb-4">From logo design to complete brand guidelines, we build a cohesive visual story that resonates.</p>
                        <div class="flex flex-col gap-2 text-[9px] font-black uppercase tracking-widest text-pink-600">
                            <span><i class="fas fa-check mr-1"></i> Logo Design</span>
                            <span><i class="fas fa-check mr-1"></i> Brand Strategy</span>
                        </div>
                    </div>
                    <!-- S6 -->
                    <div class="p-8 bg-white/40 rounded-3xl border border-white/60 modal-service-card">
                        <i class="fas fa-bolt text-cyan-600 mb-5 text-2xl"></i>
                        <h4 class="font-black mb-3 text-base">Speed Optimization</h4>
                        <p class="text-[11px] text-slate-500 leading-relaxed mb-4">Core Web Vitals improvement and image compression to ensure your site loads in under 2 seconds.</p>
                        <div class="flex flex-col gap-2 text-[9px] font-black uppercase tracking-widest text-cyan-600">
                            <span><i class="fas fa-check mr-1"></i> 90+ PageSpeed Score</span>
                            <span><i class="fas fa-check mr-1"></i> CDN Setup</span>
                        </div>
                    </div>
                    <!-- S7 -->
                    <div class="p-8 bg-white/40 rounded-3xl border border-white/60 modal-service-card">
                        <i class="fas fa-bullhorn text-indigo-600 mb-5 text-2xl"></i>
                        <h4 class="font-black mb-3 text-base">Digital Marketing</h4>
                        <p class="text-[11px] text-slate-500 leading-relaxed mb-4">Strategic PPC and social media campaigns designed to put your business in front of the right audience.</p>
                        <div class="flex flex-col gap-2 text-[9px] font-black uppercase tracking-widest text-indigo-600">
                            <span><i class="fas fa-check mr-1"></i> Google Ads</span>
                            <span><i class="fas fa-check mr-1"></i> Social Ads</span>
                        </div>
                    </div>
                    <!-- S8 -->
                    <div class="p-8 bg-white/40 rounded-3xl border border-white/60 modal-service-card">
                        <i class="fas fa-project-diagram text-red-600 mb-5 text-2xl"></i>
                        <h4 class="font-black mb-3 text-base">Custom Integrations</h4>
                        <p class="text-[11px] text-slate-500 leading-relaxed mb-4">Connecting your website with CRM, ERP, or custom APIs to automate workflows and improve efficiency.</p>
                        <div class="flex flex-col gap-2 text-[9px] font-black uppercase tracking-widest text-red-600">
                            <span><i class="fas fa-check mr-1"></i> API Sync</span>
                            <span><i class="fas fa-check mr-1"></i> CRM Connect</span>
                        </div>
                    </div>
                    <!-- S9 -->
                    <div class="p-8 bg-white/40 rounded-3xl border border-white/60 modal-service-card">
                        <i class="fab fa-apple text-sky-500 mb-5 text-2xl"></i>
                        <h4 class="font-black mb-3 text-base">iOS App Development</h4>
                        <p class="text-[11px] text-slate-500 leading-relaxed mb-4">High-performance native iOS applications designed for elegance, leveraging Swift and SwiftUI.</p>
                        <div class="flex flex-col gap-2 text-[9px] font-black uppercase tracking-widest text-sky-600">
                            <span><i class="fas fa-check mr-1"></i> iPhone & iPad</span>
                            <span><i class="fas fa-check mr-1"></i> App Store Ready</span>
                        </div>
                    </div>
                    <!-- S10 -->
                    <div class="p-8 bg-white/40 rounded-3xl border border-white/60 modal-service-card">
                        <i class="fab fa-android text-lime-600 mb-5 text-2xl"></i>
                        <h4 class="font-black mb-3 text-base">Android Development</h4>
                        <p class="text-[11px] text-slate-500 leading-relaxed mb-4">Scalable and robust Android solutions built with Kotlin, ensuring modern compatibility.</p>
                        <div class="flex flex-col gap-2 text-[9px] font-black uppercase tracking-widest text-lime-600">
                            <span><i class="fas fa-check mr-1"></i> Play Store Strategy</span>
                            <span><i class="fas fa-check mr-1"></i> Kotlin Native</span>
                        </div>
                    </div>
                    <!-- S11 -->
                    <div class="p-8 bg-white/40 rounded-3xl border border-white/60 modal-service-card">
                        <i class="fas fa-globe-americas text-fuchsia-600 mb-5 text-2xl"></i>
                        <h4 class="font-black mb-3 text-base">Web App (PWA)</h4>
                        <p class="text-[11px] text-slate-500 leading-relaxed mb-4">Progressive Web Applications that provide an app-like experience with offline support.</p>
                        <div class="flex flex-col gap-2 text-[9px] font-black uppercase tracking-widest text-fuchsia-600">
                            <span><i class="fas fa-check mr-1"></i> Offline Mode</span>
                            <span><i class="fas fa-check mr-1"></i> Push Notifications</span>
                        </div>
                    </div>
                    <!-- S12 -->
                    <div class="p-8 bg-white/40 rounded-3xl border border-white/60 modal-service-card">
                        <i class="fas fa-mobile-alt text-amber-600 mb-5 text-2xl"></i>
                        <h4 class="font-black mb-3 text-base">Native Mobile Apps</h4>
                        <p class="text-[11px] text-slate-500 leading-relaxed mb-4">Hybrid and native cross-platform apps using Flutter or React Native for cost-effective deployment.</p>
                        <div class="flex flex-col gap-2 text-[9px] font-black uppercase tracking-widest text-amber-600">
                            <span><i class="fas fa-check mr-1"></i> Dual-Platform Launch</span>
                            <span><i class="fas fa-check mr-1"></i> Shared Codebase</span>
                        </div>
                    </div>
                </div>
                <div class="mt-12 text-center">
                    <button onclick="toggleServicesModal(); toggleModal();" class="px-12 py-4 bg-blue-600 text-white rounded-2xl font-black uppercase tracking-widest text-[10px] shadow-xl">Get a Free Consultation</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PRICING MODAL -->
    <div id="pricing-modal" class="fixed inset-0 z-[300] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm" onclick="togglePricingModal()"></div>
        <div id="pricing-window" class="relative glass max-w-5xl w-full rounded-2xl overflow-hidden shadow-2xl animate-in zoom-in-95 duration-200">
            <div class="h-10 bg-gray-100/80 flex items-center px-4 border-b border-gray-200/50">
                <div onclick="togglePricingModal()" class="window-dot bg-red-400 mr-2 hover:opacity-80 transition-all flex items-center justify-center"><i class="fas fa-times text-[6px] opacity-0 hover:opacity-100"></i></div>
                <div onclick="togglePricingModal()" class="window-dot bg-yellow-400 mr-2 opacity-50"></div>
                <div onclick="maximizeWindow('pricing-window')" class="window-dot bg-green-400 mr-2 hover:opacity-80 transition-all flex items-center justify-center"><i class="fas fa-expand-arrows-alt text-[6px] opacity-0 hover:opacity-100"></i></div>
                <span class="flex-grow text-center text-[10px] font-bold text-gray-500 uppercase tracking-widest">Pricing Plan — Find the right Price Package</span>
            </div>
            <div class="p-8 sm:p-12 max-h-[85vh] overflow-y-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 mb-2">Pricing Plan</h2>
                    <p class="text-xs text-slate-500 uppercase tracking-[0.2em] font-bold">Find the right Price Package</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pb-8">
                    <!-- Starter -->
                    <div class="glass rounded-[2.5rem] p-10 flex flex-col border border-white/20 transition-all hover:bg-white hover:shadow-xl">
                        <h3 class="text-2xl font-black mb-2 text-slate-900 tracking-tight">Starter Website</h3>
                        <div class="text-4xl font-black text-blue-600 mb-6">£499<span class="text-xs font-normal text-slate-400 italic"> /one off</span></div>
                        <ul class="space-y-4 mb-10 flex-grow text-xs text-slate-600 font-medium">
                            <li class="flex items-center"><i class="fas fa-check text-emerald-500 mr-3"></i> 1–3 Page Custom Design</li>
                            <li class="flex items-center"><i class="fas fa-check text-emerald-500 mr-3"></i> Responsive Layout</li>
                            <li class="flex items-center"><i class="fas fa-check text-emerald-500 mr-3"></i> Basic On-Page SEO</li>
                            <li class="flex items-center"><i class="fas fa-check text-emerald-500 mr-3"></i> 7–10 Days Delivery</li>
                        </ul>
                        <button onclick="togglePricingModal(); toggleModal();" class="w-full py-4 bg-slate-900 text-white rounded-2xl font-black uppercase tracking-widest text-[10px] hover:bg-black transition">Select Plan</button>
                    </div>
                    <!-- Pro -->
                    <div class="bg-white rounded-[2.5rem] p-10 flex flex-col shadow-2xl scale-100 md:scale-105 border-4 border-blue-500 relative">
                        <div class="absolute -top-5 left-1/2 -translate-x-1/2 bg-blue-500 text-white px-8 py-2 rounded-full text-[9px] font-black tracking-widest uppercase">BEST VALUE</div>
                        <h3 class="text-2xl font-black mb-2 text-slate-900 tracking-tight">Professional</h3>
                        <div class="text-4xl font-black text-blue-600 mb-6">£999<span class="text-xs font-normal text-slate-400 italic"> /one off</span></div>
                        <ul class="space-y-4 mb-10 flex-grow text-xs text-slate-600 font-semibold">
                            <li class="flex items-center"><i class="fas fa-check text-blue-600 mr-3"></i> 2-5 Page Custom Design</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-600 mr-3"></i> CMS (WordPress/Webflow)</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-600 mr-3"></i> SEO-Optimised Pages</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-600 mr-3"></i> 1 Month Free Support</li>
                        </ul>
                        <button onclick="togglePricingModal(); toggleModal();" class="w-full py-4 bg-blue-600 text-white rounded-2xl font-black uppercase tracking-widest text-[10px] shadow-lg shadow-blue-200 hover:bg-blue-700 transition">Select Plan</button>
                    </div>
                    <!-- Premium -->
                    <div class="glass rounded-[2.5rem] p-10 flex flex-col border border-white/20 transition-all hover:bg-white hover:shadow-xl">
                        <h3 class="text-2xl font-black mb-2 text-slate-900 tracking-tight">Premium Website</h3>
                        <div class="text-4xl font-black text-blue-600 mb-6">£1,499<span class="text-xs font-normal text-slate-400 italic"> /one off</span></div>
                        <ul class="space-y-4 mb-10 flex-grow text-xs text-slate-600 font-medium">
                            <li class="flex items-center"><i class="fas fa-check text-emerald-500 mr-3"></i> 10+ Pages / E-commerce</li>
                            <li class="flex items-center"><i class="fas fa-check text-emerald-500 mr-3"></i> Custom UI/UX Design</li>
                            <li class="flex items-center"><i class="fas fa-check text-emerald-500 mr-3"></i> CRM or API Integration</li>
                            <li class="flex items-center"><i class="fas fa-check text-emerald-500 mr-3"></i> 3 Month Free Support</li>
                        </ul>
                        <button onclick="togglePricingModal(); toggleModal();" class="w-full py-4 bg-slate-900 text-white rounded-2xl font-black uppercase tracking-widest text-[10px] hover:bg-black transition">Select Plan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Generic Toggle Logic
        function toggleModal() { 
            const el = document.getElementById('contact-modal');
            el.classList.toggle('hidden'); 
            el.classList.toggle('flex'); 
        }
        function toggleAboutModal() { 
            const el = document.getElementById('about-modal');
            el.classList.toggle('hidden'); 
            el.classList.toggle('flex'); 
        }
        function toggleServicesModal() { 
            const el = document.getElementById('services-modal');
            el.classList.toggle('hidden'); 
            el.classList.toggle('flex'); 
        }
        function togglePricingModal() { 
            const el = document.getElementById('pricing-modal');
            el.classList.toggle('hidden'); 
            el.classList.toggle('flex'); 
        }

        // Window Management
        function maximizeWindow(id) {
            const win = document.getElementById(id);
            win.classList.toggle('full-screen-window');
        }

        // Time Update
        function updateTime() { 
            const now = new Date(); 
            document.getElementById('system-time').textContent = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }); 
        }
        setInterval(updateTime, 1000); 
        updateTime();
    </script>

    <?php wp_footer(); ?>
</body>
</html>