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
                    <li><a href="#" onclick="toggleAboutModal()" class="hover:text-blue-600">About Us</a></li>
                    <li><a href="#" onclick="toggleServicesModal()" class="hover:text-blue-600">Services</a></li>
                    <li><a href="#" onclick="togglePricingModal()" class="hover:text-blue-600">Pricing Plan</a></li>
                    <li><a href="#" onclick="toggleModal()" class="hover:text-blue-600">Contact Us</a></li>
                </ul>
            </div>

            <div class="text-center lg:text-left">
                <h4 class="text-xs font-black uppercase tracking-widest mb-6 text-slate-900">Support</h4>
                <ul class="space-y-4 text-sm text-slate-500 font-medium">
                    <li><a href="#" class="hover:text-blue-600">Help Center</a></li>
                    <li><a href="#" onclick="toggleModal()" class="hover:text-blue-600">Contact us</a></li>
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
            <div class="flex flex-col sm:flex-row w-full lg:w-auto gap-3">
                <input type="email" placeholder="Email Address" class="w-full sm:w-64 px-6 py-4 rounded-2xl glass border border-white/40 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
                <button class="w-full sm:w-auto px-8 py-4 bg-slate-900 text-white rounded-2xl font-bold hover:bg-black transition text-sm">Subscribe</button>
            </div>
        </div>

        <div class="pt-8 border-t border-black/5 flex flex-col md:flex-row items-center justify-between gap-6 text-[11px] text-slate-400 font-bold uppercase text-center">
            <p>© Webbird By Arafat. All Right Reserved 2026.</p>
        </div>
    </footer>
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
    // Live Search Ajax
    function fetchResults() {
        const keyword = document.getElementById('spotlight-input').value;
        const datafetch = document.getElementById('datafetch');
        const quickLinks = document.getElementById('quick-links');

        if (keyword.length < 2) {
            datafetch.innerHTML = '';
            quickLinks.style.display = 'block';
            return;
        }

        quickLinks.style.display = 'none';

        const formData = new FormData();
        formData.append('action', 'data_fetch');
        formData.append('keyword', keyword);

        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            datafetch.innerHTML = data;
        });
    }

    // Modal Control Functions
    function toggleModal() { const el = document.getElementById('contact-modal'); el.classList.toggle('hidden'); el.classList.toggle('flex'); }
    function toggleAboutModal() { const el = document.getElementById('about-modal'); el.classList.toggle('hidden'); el.classList.toggle('flex'); }
    function toggleServicesModal() { const el = document.getElementById('services-modal'); el.classList.toggle('hidden'); el.classList.toggle('flex'); }
    function togglePricingModal() { const el = document.getElementById('pricing-modal'); el.classList.toggle('hidden'); el.classList.toggle('flex'); }
    function toggleSearchModal() { const el = document.getElementById('search-modal'); el.classList.toggle('hidden'); el.classList.toggle('flex'); if(!el.classList.contains('hidden')) document.getElementById('spotlight-input').focus(); }
    function toggleMobileMenu() { document.getElementById('mobile-menu-overlay').classList.toggle('active'); }
    function maximizeWindow(id) { document.getElementById(id).classList.toggle('full-screen-window'); }

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
            document.getElementById('search-modal').classList.add('hidden');
            document.getElementById('mobile-menu-overlay').classList.remove('active');
        }
    });
</script>

<?php wp_footer(); ?>
</body>
</html>