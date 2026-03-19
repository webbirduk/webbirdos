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
        @keyframes logo-slide { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .logo-slide-container { display: flex; overflow: hidden; width: 200px; mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent); }
        .logo-slide-track { display: flex; align-items: center; gap: 1.5rem; animation: logo-slide 12s linear infinite; }
        .success-bar { background: linear-gradient(90deg, #10b981, #34d399, #6ee7b7); width: 99.9%; box-shadow: 0 0 15px rgba(16, 185, 129, 0.4); }

        /* WordPress Menu Styling to match macOS top bar */
        .top-nav ul {
            display: flex;
            align-items: center;
            list-style: none;
            padding: 0;
            margin: 0;
            gap: 1rem;
        }
        .top-nav li {
            display: inline-flex;
            align-items: center;
        }
        @media (min-width: 640px) {
            .top-nav ul { gap: 1rem; }
        }
    </style>
</head>
<body <?php body_class('text-slate-900'); ?>>

    <!-- TOP MENU BAR -->
    <div class="w-full h-8 dark-glass fixed top-0 left-0 z-[100] flex items-center px-4 justify-between text-white text-[10px] sm:text-xs font-semibold">
        <div class="flex items-center space-x-3 sm:space-x-4">
            <i class="fab fa-apple text-base sm:text-lg"></i>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="font-bold text-white no-underline"><?php bloginfo('name'); ?></a>
            
            <!-- DYNAMIC WORDPRESS MENU -->
            <nav class="top-nav hidden sm:block">
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
            <i class="fas fa-wifi"></i>
            <i class="fas fa-battery-full"></i>
            <span id="system-time">12:00 PM</span>
            <i class="fas fa-search cursor-pointer opacity-80 hover:opacity-100" onclick="toggleSearchModal()"></i>
        </div>
    </div>