<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
        :root { --macos-bg: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab, #8b5cf6, #f43f5e); }
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            overflow-x: hidden;
            background: var(--macos-bg);
            background-size: 400% 400%;
            animation: gradient-shift 10s ease infinite;
            background-attachment: fixed;
            min-height: 100vh;
        }
        .glass { background: rgba(255, 255, 255, 0.75); backdrop-filter: blur(25px); -webkit-backdrop-filter: blur(25px); border: 1px solid rgba(255, 255, 255, 0.4); }
        .dark-glass { background: rgba(15, 23, 42, 0.6); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .dock-item { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); transform-origin: bottom; }
        .dock-item:hover { transform: scale(1.3) translateY(-5px); }
        .os-window { box-shadow: 0 40px 80px -20px rgba(0, 0, 0, 0.4); border: 1px solid rgba(255, 255, 255, 0.2); }
        .window-dot { width: 12px; height: 12px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 8px; color: rgba(0,0,0,0.5); cursor: pointer; }
        .full-screen-window { position: fixed !important; inset: 1rem !important; max-width: none !important; width: auto !important; z-index: 210; }
        
        /* Mobile Menu Styles */
        #mobile-menu-overlay {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0;
            pointer-events: none;
            transform: scale(1.1);
        }
        #mobile-menu-overlay.active {
            opacity: 1;
            pointer-events: auto;
            transform: scale(1);
        }

        /* FIX: Remove dots from mobile menu list items */
        #mobile-menu-overlay ul, 
        #mobile-menu-overlay li {
            list-style: none !important;
            list-style-type: none !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        .mobile-nav-link {
            transition: all 0.3s ease;
            transform: translateY(20px);
            opacity: 0;
            display: block;
        }
        #mobile-menu-overlay.active .mobile-nav-link {
            transform: translateY(0);
            opacity: 1;
        }

        .top-nav ul {
            display: flex;
            align-items: center;
            list-style: none;
            padding: 0;
            margin: 0;
            gap: 1.5rem;
        }
        .top-nav a { text-decoration: none; color: inherit; transition: opacity 0.2s; }

        .search-suggestion-item {
            transition: background 0.2s;
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            border-radius: 0.75rem;
            cursor: pointer;
        }
        .search-suggestion-item:hover { background: rgba(59, 130, 246, 0.1); }
    </style>
</head>
<body <?php body_class('text-slate-900'); ?>>

    <div class="w-full h-8 dark-glass fixed top-0 left-0 z-[100] flex items-center px-4 justify-between text-white text-[10px] sm:text-xs font-semibold">
        <div class="flex items-center space-x-3 sm:space-x-4">
            <i class="fab fa-apple text-base sm:text-lg cursor-pointer hover:opacity-70" onclick="toggleMobileMenu()"></i>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="font-bold text-white no-underline"><?php bloginfo('name'); ?></a>
            
            <nav class="top-nav hidden md:block">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'fallback_cb'    => false,
                ) );
                ?>
            </nav>
        </div>
        <div class="flex items-center space-x-3 sm:space-x-4">
            <i class="fas fa-search cursor-pointer opacity-80 hover:opacity-100" onclick="toggleSearchModal()"></i>
            <i class="fas fa-wifi hidden sm:inline"></i>
            <i class="fas fa-battery-full hidden sm:inline"></i>
            <span id="system-time">12:00 PM</span>
            <i class="fas fa-bars md:hidden cursor-pointer" onclick="toggleMobileMenu()"></i>
        </div>
    </div>

    <div id="mobile-menu-overlay" class="fixed inset-0 z-[150] bg-black/60 backdrop-blur-3xl flex flex-col items-center justify-center p-6 text-white">
        <button onclick="toggleMobileMenu()" class="absolute top-8 right-8 text-3xl opacity-50 hover:opacity-100 transition-opacity">
            <i class="fas fa-times"></i>
        </button>
        
        <div class="w-full max-w-sm text-center">
            <i class="fab fa-apple text-6xl mb-10 opacity-20"></i>
            
            <nav class="space-y-6 mb-12">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'items_wrap'     => '<ul class="space-y-6">%3$s</ul>',
                    'link_before'    => '<span class="mobile-nav-link text-3xl font-black">',
                    'link_after'     => '</span>',
                    'fallback_cb'    => false,
                ) );
                ?>
            </nav>

            <button onclick="toggleMobileMenu(); toggleModal();" class="mobile-nav-link w-full py-4 bg-blue-600 text-white rounded-2xl font-black uppercase tracking-widest text-xs shadow-xl shadow-blue-600/20 hover:bg-blue-700 transition-all mb-12">
                Get in Touch
            </button>

            <div class="mobile-nav-link space-y-4 text-sm text-white/60 font-medium">
                <div class="flex items-center justify-center space-x-3">
                    <i class="fas fa-map-marker-alt text-blue-400"></i>
                    <span>Halley Rd, London E12 6UB</span>
                </div>
                <div class="flex items-center justify-center space-x-3">
                    <i class="fas fa-phone text-blue-400"></i>
                    <span>+44 7557 126699</span>
                </div>
                <div class="flex items-center justify-center space-x-3">
                    <i class="fas fa-envelope text-blue-400"></i>
                    <span>hi@webbird.co.uk</span>
                </div>
            </div>
        </div>
    </div>

    <div id="search-modal" class="fixed inset-0 z-[300] hidden items-start justify-center pt-[15vh] px-4">
        <div class="absolute inset-0 bg-black/20 backdrop-blur-md" onclick="toggleSearchModal()"></div>
        <div class="relative w-full max-w-2xl bg-white/90 backdrop-blur-2xl rounded-2xl overflow-hidden shadow-[0_30px_60px_-15px_rgba(0,0,0,0.3)] border border-white/50">
            <div class="flex items-center p-4 border-b border-gray-200/50">
                <i class="fas fa-search text-slate-400 text-xl ml-2"></i>
                <input type="search" id="spotlight-input" placeholder="Spotlight Search" class="w-full p-4 bg-transparent outline-none text-2xl font-light text-slate-800" oninput="handleSearch(this.value)">
            </div>
            
            <div id="search-results-area" class="p-4 max-h-[60vh] overflow-y-auto">
                <div id="quick-links">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-3 ml-2">Quick Links</p>
                    <div class="grid grid-cols-1 gap-1">
                        <div class="search-suggestion-item" onclick="location.href='/services'">
                            <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3"><i class="fas fa-rocket text-xs"></i></div>
                            <span class="text-sm font-semibold">Our Digital Services</span>
                        </div>
                        <div class="search-suggestion-item" onclick="location.href='/pricing'">
                            <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white mr-3"><i class="fas fa-tags text-xs"></i></div>
                            <span class="text-sm font-semibold">View Pricing Plans</span>
                        </div>
                        <div class="search-suggestion-item" onclick="toggleSearchModal(); toggleAboutModal();">
                            <div class="w-8 h-8 rounded-lg bg-purple-500 flex items-center justify-center text-white mr-3"><i class="fas fa-info-circle text-xs"></i></div>
                            <span class="text-sm font-semibold">About WebBird London</span>
                        </div>
                    </div>
                </div>
                <div id="dynamic-results" class="hidden">
                    <p class="text-[10px] font-black text-blue-600 uppercase tracking-widest mb-3 ml-2">Top Hits</p>
                    <div id="results-list" class="grid grid-cols-1 gap-1"></div>
                </div>
            </div>
            <div class="p-3 bg-gray-50/50 text-[10px] text-slate-400 flex justify-end space-x-4 border-t border-gray-200/50">
                <span><kbd class="bg-white border rounded px-1">ESC</kbd> to close</span>
                <span><kbd class="bg-white border rounded px-1">ENTER</kbd> to search all</span>
            </div>
        </div>
    </div>

    <script>
    // Live Search JavaScript
    function handleSearch(keyword) {
        const dynamicResults = document.getElementById('dynamic-results');
        const quickLinks = document.getElementById('quick-links');
        const resultsList = document.getElementById('results-list');

        if (keyword.length < 2) {
            resultsList.innerHTML = '';
            dynamicResults.classList.add('hidden');
            quickLinks.classList.remove('hidden');
            return;
        }

        quickLinks.classList.add('hidden');

        const formData = new FormData();
        formData.append('action', 'data_fetch');
        formData.append('keyword', keyword);

        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            resultsList.innerHTML = data;
            dynamicResults.classList.remove('hidden');
        });
    }
    </script>