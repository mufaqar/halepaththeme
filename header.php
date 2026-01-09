<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <?php if (is_search()) { ?>
        <meta name="robots" content="noindex, nofollow" />
    <?php } ?>
    <title>
        <?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged, $post;

        wp_title('|', true, 'right');

        // Add the blog name.
        bloginfo('name');

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page()))
            echo " | $site_description";

        // Add a page number if necessary:
        if ($paged >= 2 || $page >= 2)
            echo ' | ' . sprintf(__('Page %s', 'wpv'), max($paged, $page));
        ?>
    </title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (is_singular())
        wp_enqueue_script('comment-reply'); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/output.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom.css" />
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <!-- Top Bar -->
        <div class="bg-secondary py-[18px] hidden md:block">
            <div class="container mx-auto px-4 flex items-center justify-between">
                <p class="text-base font-medium text-white">
                    Welcome To Hale Path Packaging
                </p>

                <ul class="flex items-center divide-x-2 divide-white">
                    <li>
                        <a href="tel:+9212312312345"
                            class="text-base font-medium text-white flex items-center gap-1 px-5">
                            <i class="fas fa-phone-alt"></i>
                            +92 123 123 12345
                        </a>
                    </li>
                    <li>
                        <a href="mailto:loremipsum@gmail.com"
                            class="text-base font-medium text-white flex items-center gap-1 px-5">
                            <i class="fas fa-envelope"></i>
                            loremipsum@gmail.com
                        </a>
                    </li>
                    <li>
                        <span class="text-base font-medium text-white flex items-center gap-1 px-5">
                            <i class="fas fa-map-marker-alt"></i>
                            City, Country, Code-12345
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Header -->
        <header class="bg-white sticky top-0 z-50" style="box-shadow: rgba(149,157,165,0.2) 0px 8px 24px;">
            <div class="container mx-auto px-4 py-1 flex items-center justify-between gap-5">

                <!-- Logo -->
                <div class="lg:w-[8%] w-1/2">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                            alt="Hale Path Packaging Logo" height="60" width="60" />
                    </a>
                </div>

                <!-- Navigation -->
                <nav class="lg:w-[68%] w-1/2 flex justify-end items-center">

                    <!-- Mobile Menu Button -->
                    <button id="menu-toggle" class="lg:hidden text-3xl ml-auto">
                        <i class="fas fa-bars"></i>
                    </button>

                    <?php
                    wp_nav_menu([
                        'theme_location' => 'primary_menu',
                        'container' => false,
                        'menu_id' => 'primary-menu',
                        'menu_class' => 'hidden lg:flex flex-col lg:flex-row gap-5 lg:gap-3 
                         px-4 py-8 lg:p-0 bg-white lg:bg-transparent 
                         absolute lg:static top-16 left-0 right-0',
                        'fallback_cb' => false,
                        'walker' => new Tailwind_Nav_Walker(),
                    ]);
                    ?>
                </nav>

                <!-- Buttons -->
                <div class="lg:w-[27%] hidden lg:flex gap-5 justify-end">
                    <a href="/contact-us"
                        class="border-2 border-primary px-5 py-2.5 text-[15px] uppercase font-medium text-primary rounded-full hover:bg-primary hover:text-white">
                        Contact Us
                    </a>

                    <a href="/get-qoute"
                        class="border-2 border-primary bg-primary px-5 py-2.5 text-[15px] uppercase font-medium text-white rounded-full hover:bg-transparent hover:text-primary">
                        Get Quote Now
                    </a>
                </div>

            </div>
        </header>

        <script>
            document.addEventListener('DOMContentLoaded', function () {

                const toggleBtn = document.getElementById('menu-toggle');
                const menu = document.getElementById('primary-menu');

                /* ===============================
                   MAIN MOBILE MENU TOGGLE
                =============================== */
                if (toggleBtn && menu) {
                    toggleBtn.addEventListener('click', function () {
                        menu.classList.toggle('hidden');
                    });
                }

                /* ===============================
                   SUBMENU TOGGLE (ARROW ONLY)
                =============================== */
                document.querySelectorAll('.submenu-toggle').forEach(btn => {
                    const parentLi = btn.closest('li');
                    const submenu = parentLi.querySelector('.sub-menu');

                    if (!submenu) return;

                    // Show submenu on mouse enter
                    btn.addEventListener('mouseenter', function (e) {
                        e.preventDefault();
                        e.stopPropagation();

                        // Close sibling submenus
                        parentLi.parentElement.querySelectorAll('.sub-menu').forEach(ul => {
                            if (ul !== submenu) {
                                ul.classList.add('hidden');
                            }
                        });

                        submenu.classList.remove('hidden');
                        // btn.classList.add('-rotate-90'); // Optional rotation
                    });

                    // Hide submenu on mouse leave
                    parentLi.addEventListener('mouseleave', function (e) {
                        e.preventDefault();
                        e.stopPropagation();

                        submenu.classList.add('hidden');
                        // btn.classList.remove('-rotate-90'); // Optional rotation reset
                    });
                });
            });
        </script>