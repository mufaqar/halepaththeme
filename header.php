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
<?php

$megaMenus = [

    "industries" => [
        "title" => "Industries We Serve",
        "groups" => [
            "Beauty & Personal Care" => [
                "Cosmetics",
                "Fragrances & Perfumes",
                "Skincare",
                "Hair Care",
                "Nail Care",
                "Soap & Body Care",
                "Bath Products",
                "Mens Grooming",
                "Spa & Wellness",
                "Tissue & Hygiene",
            ],
            "Food & Beverage" => [
                "Food & Restaurant",
                "Bakery & Confectionery",
                "Chocolate",
                "Candy & Sweets",
                "Coffee & Tea",
                "Beverages & Drinks",
                "Snacks & Chips",
                "Frozen Foods",
                "Dairy Products",
                "Wine & Spirits",
                "Energy Drinks & Juice",
                "Ice Cream & Desserts",
                "Food Delivery Packaging",
                "Meal Kits",
            ],
            "Retail & E-commerce" => [
                "E-commerce Packaging",
                "Retail Boxes",
                "Shopping Bags",
                "Point of Sale Display",
                "Subscription Boxes",
                "Boutique & Specialty Shops",
            ],
            "Cannabis & CBD" => [
                "CBD Products",
                "Marijuana & Cannabis Packaging",
                "Vape & E-Cigarettes",
                "Hemp Products",
                "Compliance Packaging",
            ],
            "Tobacco & Vaping" => [
                "Tobacco Products",
                "Cigars",
                "Cigarettes",
                "Vape & E-cigarette",
                "Smoking Accessories",
            ],
            "Gifts & Celebrations" => [
                "Candles",
                "Gift Boxes",
                "Holiday Packaging",
                "Wedding & Events",
                "Party Supplies",
                "Home Decor",
                "Aromatherapy",
                "Crafts & Handmade",
            ],
            "Apparel & Fashion" => [
                "Garment Packaging",
                "Jewelry Packaging",
                "Gadgets & Accessories",
                "Luxury Fashion",
                "Clothing & Hand Bags",
                "Footwear & Shoes",
                "Watches",
                "Activewear & Sportswear",
            ],
            "Pet Products" => [
                "Pet Food",
                "Pet Treats & Snacks",
                "Pet Accessories",
                "Pet Healthcare",
            ],
            "Pharmaceuticals" => [
                "Supplements & Vitamins",
                "Prescription Medications",
                "Healthcare Products",
                "Diagnostic & Surgical Equipment",
                "Medical Kits",
            ],
            "Consumer Goods & Electronics" => [
                "Mobile Accessories",
                "Smart Home Devices",
                "Audio Equipment",
                "Wearable Technology",
            ],
            "Automotive Industry" => [
                "Auto Parts & Components",
                "Car Accessories",
                "Lubricants & Fluids",
                "Automotive Tools",
            ],
            "Industrial Products" => [
                "Manufacturing Components",
                "Industrial Tools",
                "Safety Equipment",
                "Chemicals & Raw Materials",
            ],
            "Sports & Fitness" => [
                "Fitness Accessories",
                "Sports Equipment",
                "Athletic Footwear",
                "Sports Nutrition",
            ],
            "Toys & Games" => [
                "Board Games & Puzzles",
                "Electronic Games & Video Games",
                "Educational Toys",
                "Playing & Education Cards",
            ],
            "Stationery & Office Supplies" => [
                "Paper Products (Notebooks, Notepads, Paper)",
                "School Supplies",
                "Cards & Envelopes",
                "Labels & Tags",
            ],
            "Print, Advertising & Marketing" => [
                "Business Cards & Stationery",
                "Brochures & Catalogs",
                "Promotional Materials",
                "Clothing & Sports Teamwears",
            ],
            "Transport & Shipping Industry" => [
                "Corrugated Boxes & Containers",
                "Shipping Carton",
                "Hazardous Materials Packaging",
                "Industrial Packaging",
                "Pallets & Crates",
                "Protective Packaging Materials",
            ],
            "Furniture Packaging" => [
                "Office & Home Furniture Packaging",
                "Sofas & Armchairs Packaging",
                "Storage Solutions",
                "Decorative Furniture",
            ],
            "Sustainable Solutions" => [
                "Eco-Friendly Materials",
                "Recyclable Packaging",
                "Biodegradable Options",
                "Compostable Packaging",
                "Reusable Packaging",
                "Hemp Paper Packaging",
            ],
        ]
    ],

    "custom_packiging" => [
        "title" => "Custom Packaging",
    ],

    "flexible" => [
        "title" => "Flexible Packaging & Pouches",
        "groups" => [
            "Packaging Bags" => [
                "Stand Up Pouch",
                "Flat Bottom Pouch",
                "Mylar Bags",
                "Child Resistant Bags",
                "Shrink Sleeve Labels",
                "Spout Pouch",
                "3 Side Seal Pouch",
                "Side Gusset Bags",
                "Shaped Pouch",
                "Packaging Film Roll",
                "Kraft Paper Pouch",
                "Recycleable Pouches",
                "Biodegradable Pouches",
            ],
            "Food Packaging" => [
                "Coffee Packaging",
                "Bakery & Confectionery",
                "Chocolate Bar Packaging",
                "Candy & Sweets",
                "Coffee & Tea Packaging",
            ]
        ]
    ],
    "corrugated" => [
        "title" => "Corrugated Packaging ",
    ],
    "printing" => [
        "title" => "Commercial Printing",
        "groups" => [
            "Printing" => [
                "Offset Printing",
                "Flexographic Printing",
                "Gravure Printing",
                "Digital Printing",
                "Screen Printing",
                "Letterpress",
            ]
        ]
    ],

    "advertising" => [
        "title" => "Print & Advertising",
        "groups" => [
            "Advertising" => ["Office Supplies ", "Tissue & Hygiene",]
        ]
    ],

    "innovation" => [
        "title" => "Innovation",
        "groups" => [
            "Branding" => [
                "Branded Finishes",
                "UV Printing",
                "Foil Printing",
                "Privacy Printing",
                "Experience Centers",
                "Client Success Stories",
                "Design 2 Markets",
            ]
        ]
    ],
    "about_us" => [
        "title" => "About US ",
    ],
];
?>

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
            <div class="hale_container py-1 flex md:flex-col flex-row items-center justify-between gap-5">
                <!-- Logo -->
                <div class="lg:w-[8%] w-1/2">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                            alt="Hale Path Packaging Logo" height="60" width="60" />
                    </a>
                </div>
                <!-- Navigation -->
                <nav class="lg:w-full w-1/2 flex justify-center items-center">
                    <!-- MOBILE BUTTON -->
                    <button id="mobileMenuBtn" class="lg:hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    <!-- DESKTOP MENU -->
                    <ul class="hidden lg:flex gap-3">
                        <?php foreach ($megaMenus as $key => $menu): ?>
                            <li class="cursor-pointer flex items-center" <?php if (!empty($menu['groups'])): ?>
                                    data-mega-target="megaMenu-<?php echo $key; ?>" <?php endif; ?>>
                                <a href="#"
                                    class="text-[13px] font-medium uppercase text-title_Clr hover:text-primary flex items-center justify-between">
                                    <?php echo $menu['title']; ?>
                                    <?php if (!empty($menu['groups'])): ?>
                                        <i class="fa fa-chevron-down ml-2"></i>
                                    <?php endif; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                </nav>
            </div>
            <!-- DESKTOP MEGA MENUS -->
            <?php foreach ($megaMenus as $key => $menu): ?>
                <?php if (!empty($menu['groups'])): ?>
                    <?php
                    $groupCount = count($menu['groups']); // total groups in this menu
            
                    // Determine grid columns
                    if ($key === 'industries') {
                        $gridColsClass = 'lg:grid-cols-5';
                    } else {
                        // default to 3 or dynamically based on number of groups
                        $gridColsClass = 'lg:grid-cols-3';
                    }
                    ?>
                    <div id="megaMenu-<?php echo $key; ?>"
                        class="megaMenu hidden lg:absolute left-0 top-full w-full bg-white shadow-xl z-50">
                        <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 <?php echo $gridColsClass; ?> gap-8">
                            <?php foreach ($menu['groups'] as $groupName => $items): ?>
                                <div>
                                    <h3 class="font-semibold mb-4"><?php echo $groupName; ?></h3>
                                    <ul class="space-y-2">
                                        <?php foreach ($items as $item): ?>
                                            <li>
                                                <a href="#" class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">
                                                    <?php echo $item; ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                            <?php
                            $groupCount = count($menu['groups']); // total groups in this menu
                    
                            if ($key === 'industries') {
                                $gridColsClass = 'lg:grid-cols-5';
                                $showImages = false; // flag to show images specifically for industries
                            } else {
                                $gridColsClass = 'lg:grid-cols-3'; // default
                                $showImages = true;
                            }
                            ?>
                            <?php if ($showImages): ?>
                                <div class="grid grid-cols-2 gap-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/boxgal3.png"
                                        class="rounded-lg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/boxgal4.png"
                                        class="rounded-lg">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>


            <!-- MOBILE MENU -->
            <div id="mobileMenu" class="hidden lg:hidden bg-white px-4">
                <ul class="space-y-3 h-full overflow-y-scroll">
                    <?php foreach ($megaMenus as $key => $menu): ?>
                        <li class="flex flex-col">
                            <a href="#"
                                class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary flex items-center justify-between">
                                <?php echo $menu['title']; ?>
                                <?php if (!empty($menu['groups'])): ?>
                                    <i class="fa fa-chevron-down ml-2"></i>
                                <?php endif; ?>
                            </a>

                            <?php if (!empty($menu['groups'])): ?>
                                <div class="mobileMegaContent hidden px-2 py-4 space-y-2">
                                    <?php foreach ($menu['groups'] as $groupName => $items): ?>
                                        <div>
                                            <ul class="space-y-2 list-none">
                                                <li>
                                                    <a href="#"
                                                        class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">
                                                        <?php echo $groupName; ?>
                                                    </a>
                                                </li>
                                                <?php foreach ($items as $item): ?>
                                                    <li>
                                                        <a href="#"
                                                            class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">
                                                            <?php echo $item; ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </header>

        <script>
            // Desktop Mega Menu Hover (only one open at a time)
            document.addEventListener('DOMContentLoaded', () => {
                const desktopMenuItems = document.querySelectorAll('li[data-mega-target]');
                const allMegaMenus = document.querySelectorAll('.megaMenu');

                desktopMenuItems.forEach(li => {
                    const targetId = li.dataset.megaTarget;
                    const megaMenu = document.getElementById(targetId);

                    if (!megaMenu) return;

                    // Show mega menu on hover
                    li.addEventListener('mouseenter', () => {
                        // Hide all mega menus first
                        allMegaMenus.forEach(menu => menu.classList.add('hidden'));
                        // Show this one
                        megaMenu.classList.remove('hidden');
                    });

                    // Optional: hide menu when mouse leaves menu item itself
                    li.addEventListener('mouseleave', (e) => {
                        // Only hide if mouse is NOT moving into the mega menu
                        if (!megaMenu.contains(e.relatedTarget)) {
                            megaMenu.classList.add('hidden');
                        }
                    });
                });

                // Also hide all mega menus when mouse leaves the mega menu itself
                allMegaMenus.forEach(menu => {
                    menu.addEventListener('mouseleave', () => {
                        menu.classList.add('hidden');
                    });
                });
            });
            // Mobile main menu toggle
            document.addEventListener('DOMContentLoaded', () => {
                const mobileMenuBtn = document.getElementById('mobileMenuBtn');
                const mobileMenu = document.getElementById('mobileMenu');

                if (mobileMenuBtn && mobileMenu) {
                    mobileMenuBtn.addEventListener('click', () => {
                        mobileMenu.classList.toggle('hidden');
                    });
                }
            });
            // Mobile mega menu toggle (only one open at a time)
            document.addEventListener('DOMContentLoaded', () => {
                const mobileMenuItems = document.querySelectorAll('#mobileMenu > ul > li');

                mobileMenuItems.forEach(li => {
                    const toggleIcon = li.querySelector('i.fa-chevron-down');
                    const content = li.querySelector('.mobileMegaContent');

                    if (toggleIcon && content) {
                        toggleIcon.addEventListener('click', () => {
                            // Close all other mobile mega contents
                            mobileMenuItems.forEach(otherLi => {
                                const otherContent = otherLi.querySelector('.mobileMegaContent');
                                if (otherContent && otherContent !== content) {
                                    otherContent.classList.add('hidden');
                                }
                            });
                            // Toggle this one
                            content.classList.toggle('hidden');
                        });
                    }
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