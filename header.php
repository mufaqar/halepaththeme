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
            <div class="hale_container flex items-center justify-between">
                <ul class="flex items-center divide-x-2 divide-white">
                    <li>
                        <a href="tel:+9212312312345"
                            class="text-sm font-medium text-white flex items-center gap-1 px-2">
                            <i class="fas fa-phone-alt"></i>
                            +92 123 123 12345
                        </a>
                    </li>
                    <li>
                        <a href="mailto:loremipsum@gmail.com"
                            class="text-sm font-medium text-white flex items-center gap-1 px-2">
                            <i class="fas fa-envelope"></i>
                            loremipsum@gmail.com
                        </a>
                    </li>
                </ul>
                <div class="w-[45%]">
                    <div class="relative w-full max-w-md mx-auto">
                        <input type="text" id="live-search" placeholder="Search products..." autocomplete="off"
                            class="text-sm md:leading-[46px] font-normal text-[#7C7C7C] placeholder:text-[#7C7C7C] bg-white px-7  border border-transparent focus:border-secondary outline-none rounded-full w-full" />

                        <div id="live-search-results"
                            class="absolute z-60 w-full mt-1 bg-white rounded-lg shadow-lg hidden"></div>
                    </div>
                </div>
                <!-- Buttons -->
                <div class="lg:w-[25%] hidden lg:flex gap-5 justify-end">
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
        </div>

        <!-- Header -->
        <header class="bg-white sticky top-0 z-50" style="box-shadow: rgba(149,157,165,0.2) 0px 8px 24px;">
            <div class="hale_container py-1 flex items-center justify-between gap-5">
                <!-- Logo -->
                <div class="lg:w-[8%] w-1/2">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                            alt="Hale Path Packaging Logo" height="60" width="60" />
                    </a>
                </div>
                <!-- Navigation -->
                <nav class="lg:w-[92%] w-1/2 flex justify-end items-center">
                    <!-- MOBILE BUTTON -->
                    <button id="mobileMenuBtn" class="lg:hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    <!-- DESKTOP MENU -->
                    <ul class="hidden lg:flex gap-3">
                        <li class="cursor-pointer flex items-center"><a
                                class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary flex items-center justify-between"
                                href="/">Home</a></li>
                        <li class="cursor-pointer flex items-center"><a
                                class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary flex items-center justify-between"
                                href="/about-us">About Us</a></li>
                        <li class="cursor-pointer flex items-center"><a
                                class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary flex items-center justify-between"
                                href="/product-category/product-by-industry">Product By Industry</a> <i id="desktopMegaBtn"
                                class="fa fa-chevron-down ml-2"></i></li>
                        <li class="cursor-pointer flex items-center"><a
                                class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary flex items-center justify-between"
                                href="/product-category/brand-finishes">Brand Finishes</a></li>
                        <li class="cursor-pointer flex items-center"><a
                                class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary flex items-center justify-between"
                                href="/product-category/box-by-style">Box By Style</a></li>
                        <li class="cursor-pointer flex items-center"><a
                                class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary flex items-center justify-between"
                                href="/product-category/custom-printed-box">Custom Printed Box</a></li>
                    </ul>

                </nav>
            </div>
            <!-- MEGA MENU -->
            <div id="megaMenu" class="hidden lg:absolute left-0 top-full w-full bg-white shadow-xl z-50">
                <div class="max-w-5xl mx-auto px-6 py-10 grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- FOILING -->
                    <div class="">
                        <h3 class="font-semibold mb-4">FOILING</h3>
                        <ul class="space-y-2">
                            <li><a href="#"
                                    class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">Copper
                                    Foiling</a></li>
                            <li><a href="#"
                                    class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">Gold
                                    Foiling</a></li>
                            <li><a href="#"
                                    class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">Green
                                    Foiling</a></li>
                            <li><a href="#"
                                    class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">Silver
                                    Foiling</a></li>
                            <li><a href="#"
                                    class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">Holographic
                                    Foiling</a></li>
                        </ul>
                    </div>

                    <!-- OTHER FINISHES -->
                    <div class="">
                        <h3 class="font-semibold mb-4">OTHER FINISHES</h3>
                        <ul class="space-y-2">
                            <li><a href="#"
                                    class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">Embossing
                                    & Debossing</a></li>
                            <li><a href="#"
                                    class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">Fluorescent
                                    Colors</a></li>
                            <li><a href="#"
                                    class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">Spot
                                    UV</a></li>
                        </ul>
                    </div>

                    <!-- IMAGE GRID -->
                    <div class="grid grid-cols-2 gap-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/boxgal3.png"
                            class="rounded-lg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/boxgal4.png"
                            class="rounded-lg">
                    </div>
                </div>
            </div>

            <!-- MOBILE DROPDOWN -->
            <div id="mobileMenu" class="hidden lg:hidden bg-white px-4">
               <ul class="space-y-3">
                <li class=""><a
                        class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary flex items-center justify-between"
                        href="/">Home</a></li>
                <li class=""><a
                        class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary flex items-center justify-between"
                        href="/about-us">About Us</a></li>
                <li class=""><a class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary "
                        href="/product-category/product-by-industry">Product By Industry</a> <i id="mobileMegaBtn"
                        class="fa fa-chevron-down ml-2"></i>
                    <div id="mobileMegaContent" class="hidden px-2 py-4 space-y-6">
                        <div>
                            <h3 class="font-semibold mb-2">FOILING</h3>
                            <ul class="space-y-2 list-none">
                                <li><a href="#"
                                        class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">Copper
                                        Foiling</a></li>
                                <li><a href="#"
                                        class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">Gold
                                        Foiling</a></li>
                                <li><a href="#"
                                        class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">Green
                                        Foiling</a></li>
                                <li><a href="#"
                                        class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">Silver
                                        Foiling</a></li>
                                <li><a href="#"
                                        class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">Holographic
                                        Foiling</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">OTHER FINISHES</h3>
                            <ul class="space-y-2 list-none">
                                <li><a href="#"
                                        class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">Embossing
                                        & Debossing</a></li>
                                <li><a href="#"
                                        class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">Fluorescent
                                        Colors</a></li>
                                <li><a href="#"
                                        class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">Spot
                                        UV</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class=""><a
                        class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary flex items-center justify-between"
                        href="/product-category/brand-finishes">Brand Finishes</a></li>
                <li class=""><a
                        class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary flex items-center justify-between"
                        href="/product-category/box-by-style">Box By Style</a></li>
                <li class=""><a
                        class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary flex items-center justify-between"
                        href="/product-category/custom-printed-box">Custom Printed Box</a></li>
                </ul>

            </div>
        </header>

        <script>
            const desktopBtn = document.getElementById("desktopMegaBtn");
            const megaMenu = document.getElementById("megaMenu");

            // DESKTOP HOVER
            desktopBtn.addEventListener("mouseenter", () => {
                megaMenu.classList.remove("hidden");
            });

            megaMenu.addEventListener("mouseleave", () => {
                megaMenu.classList.add("hidden");
            });

            // MOBILE MENU
            const mobileMenuBtn = document.getElementById("mobileMenuBtn");
            const mobileMenu = document.getElementById("mobileMenu");
            const mobileMegaBtn = document.getElementById("mobileMegaBtn");
            const mobileMegaContent = document.getElementById("mobileMegaContent");

            mobileMenuBtn.addEventListener("click", () => {
                mobileMenu.classList.toggle("hidden");
            });

            mobileMegaBtn.addEventListener("click", () => {
                mobileMegaContent.classList.toggle("hidden");
            });
        </script>

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

        <script>
            jQuery(document).ready(function ($) {

                $('#live-search').on('keyup', function () {

                    var keyword = $(this).val();

                    if (keyword.length < 2) {
                        $('#live-search-results').addClass('hidden').html('');
                        return;
                    }

                    $.ajax({
                        url: '<?php echo admin_url("admin-ajax.php"); ?>',
                        type: 'POST',
                        data: {
                            action: 'live_search_products',
                            keyword: keyword
                        },
                        success: function (res) {
                            $('#live-search-results').removeClass('hidden').html(res);
                        }
                    });

                });

            });
        </script>