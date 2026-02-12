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
    <meta name="google-site-verification" content="vxJVqkHpw-YU0K97Hbs-wFEVtQhadmF2d19hVFWCuSU" />
</head>
<?php
$megaMenus = [
    "industries" => [
        "title" => "Industries We Serve",
        "link" => "/industries",

        "groups" => [

            "Beauty & Personal Care" => [
                "link" => "/industries/beauty",
                "image" => true,
                "items" => [
                    ["title" => "Cosmetics", "link" => "/industries/beauty/cosmetics"],
                    ["title" => "Fragrances & Perfumes", "link" => "/industries/beauty/fragrances"],
                    ["title" => "Skincare", "link" => "/industries/beauty/skincare"],
                    ["title" => "Hair Care", "link" => "/industries/beauty/hair-care"],
                    ["title" => "Nail Care", "link" => "/industries/beauty/nail-care"],
                    ["title" => "Soap & Body Care", "link" => "/industries/beauty/soap-body"],
                    ["title" => "Bath Products", "link" => "/industries/beauty/bath-products"],
                    ["title" => "Mens Grooming", "link" => "/industries/beauty/mens-grooming"],
                    ["title" => "Spa & Wellness", "link" => "/industries/beauty/spa"],
                    ["title" => "Tissue & Hygiene", "link" => "/industries/beauty/tissue"],
                ]
            ],

            "Food & Beverage" => [
                "link" => "/industries/food",
                "image" => true,
                "items" => [
                    ["title" => "Food & Restaurant", "link" => "/industries/food/restaurant"],
                    ["title" => "Bakery & Confectionery", "link" => "/industries/food/bakery"],
                    ["title" => "Chocolate", "link" => "/industries/food/chocolate"],
                    ["title" => "Candy & Sweets", "link" => "/industries/food/candy"],
                    ["title" => "Coffee & Tea", "link" => "/industries/food/coffee"],
                    ["title" => "Beverages & Drinks", "link" => "/industries/food/beverages"],
                    ["title" => "Snacks & Chips", "link" => "/industries/food/snacks"],
                    ["title" => "Frozen Foods", "link" => "/industries/food/frozen"],
                    ["title" => "Dairy Products", "link" => "/industries/food/dairy"],
                    ["title" => "Wine & Spirits", "link" => "/industries/food/wine"],
                    ["title" => "Energy Drinks & Juice", "link" => "/industries/food/energy"],
                    ["title" => "Ice Cream & Desserts", "link" => "/industries/food/ice-cream"],
                    ["title" => "Food Delivery Packaging", "link" => "/industries/food/delivery"],
                    ["title" => "Meal Kits", "link" => "/industries/food/meal-kits"],
                ]
            ],

            "Retail & E-commerce" => [
                "link" => "/industries/retail",
                "image" => true,
                "items" => [
                    ["title" => "E-commerce Packaging", "link" => "/industries/retail/ecommerce"],
                    ["title" => "Retail Boxes", "link" => "/industries/retail/boxes"],
                    ["title" => "Shopping Bags", "link" => "/industries/retail/bags"],
                    ["title" => "Point of Sale Display", "link" => "/industries/retail/pos"],
                    ["title" => "Subscription Boxes", "link" => "/industries/retail/subscription"],
                    ["title" => "Boutique & Specialty Shops", "link" => "/industries/retail/boutique"],
                ]
            ],

            "Cannabis & CBD" => [
                "link" => "/industries/cbd",
                "image" => true,
                "items" => [
                    ["title" => "CBD Products", "link" => "/industries/cbd/products"],
                    ["title" => "Marijuana & Cannabis Packaging", "link" => "/industries/cbd/packaging"],
                    ["title" => "Vape & E-Cigarettes", "link" => "/industries/cbd/vape"],
                    ["title" => "Hemp Products", "link" => "/industries/cbd/hemp"],
                    ["title" => "Compliance Packaging", "link" => "/industries/cbd/compliance"],
                ]
            ],

            "Tobacco & Vaping" => [
                "link" => "/industries/tobacco",
                "image" => true,
                "items" => [
                    ["title" => "Tobacco Products", "link" => "/industries/tobacco/products"],
                    ["title" => "Cigars", "link" => "/industries/tobacco/cigars"],
                    ["title" => "Cigarettes", "link" => "/industries/tobacco/cigarettes"],
                    ["title" => "Vape & E-cigarette", "link" => "/industries/tobacco/vape"],
                    ["title" => "Smoking Accessories", "link" => "/industries/tobacco/accessories"],
                ]
            ],

            "Gifts & Celebrations" => [
                "link" => "/industries/gifts",
                "image" => false,
                "items" => [
                    ["title" => "Candles", "link" => "/industries/gifts/candles"],
                    ["title" => "Gift Boxes", "link" => "/industries/gifts/boxes"],
                    ["title" => "Holiday Packaging", "link" => "/industries/gifts/holiday"],
                    ["title" => "Wedding & Events", "link" => "/industries/gifts/wedding"],
                    ["title" => "Party Supplies", "link" => "/industries/gifts/party"],
                    ["title" => "Home Decor", "link" => "/industries/gifts/home-decor"],
                    ["title" => "Aromatherapy", "link" => "/industries/gifts/aroma"],
                    ["title" => "Crafts & Handmade", "link" => "/industries/gifts/crafts"],
                ]
            ],

            "Apparel & Fashion" => [
                "link" => "/industries/fashion",
                "image" => false,
                "items" => [
                    ["title" => "Garment Packaging", "link" => "/industries/fashion/garment"],
                    ["title" => "Jewelry Packaging", "link" => "/industries/fashion/jewelry"],
                    ["title" => "Gadgets & Accessories", "link" => "/industries/fashion/gadgets"],
                    ["title" => "Luxury Fashion", "link" => "/industries/fashion/luxury"],
                    ["title" => "Clothing & Hand Bags", "link" => "/industries/fashion/clothing"],
                    ["title" => "Footwear & Shoes", "link" => "/industries/fashion/shoes"],
                    ["title" => "Watches", "link" => "/industries/fashion/watches"],
                    ["title" => "Activewear & Sportswear", "link" => "/industries/fashion/activewear"],
                ]
            ],

            "Pet Products" => [
                "link" => "/industries/pet",
                "image" => false,
                "items" => [
                    ["title" => "Pet Food", "link" => "/industries/pet/food"],
                    ["title" => "Pet Treats & Snacks", "link" => "/industries/pet/snacks"],
                    ["title" => "Pet Accessories", "link" => "/industries/pet/accessories"],
                    ["title" => "Pet Healthcare", "link" => "/industries/pet/healthcare"],
                ]
            ],

            "Pharmaceuticals" => [
                "link" => "/industries/pharma",
                "image" => false,
                "items" => [
                    ["title" => "Supplements & Vitamins", "link" => "/industries/pharma/supplements"],
                    ["title" => "Prescription Medications", "link" => "/industries/pharma/prescription"],
                    ["title" => "Healthcare Products", "link" => "/industries/pharma/healthcare"],
                    ["title" => "Diagnostic & Surgical Equipment", "link" => "/industries/pharma/diagnostic"],
                    ["title" => "Medical Kits", "link" => "/industries/pharma/kits"],
                ]
            ],

            "Consumer Goods & Electronics" => [
                "link" => "/industries/electronics",
                "image" => false,
                "items" => [
                    ["title" => "Mobile Accessories", "link" => "/industries/electronics/mobile"],
                    ["title" => "Smart Home Devices", "link" => "/industries/electronics/smart-home"],
                    ["title" => "Audio Equipment", "link" => "/industries/electronics/audio"],
                    ["title" => "Wearable Technology", "link" => "/industries/electronics/wearable"],
                ]
            ],

            "Automotive Industry" => [
                "link" => "/industries/automotive",
                "image" => false,
                "items" => [
                    ["title" => "Auto Parts & Components", "link" => "/industries/automotive/parts"],
                    ["title" => "Car Accessories", "link" => "/industries/automotive/accessories"],
                    ["title" => "Lubricants & Fluids", "link" => "/industries/automotive/lubricants"],
                    ["title" => "Automotive Tools", "link" => "/industries/automotive/tools"],
                ]
            ],

            "Industrial Products" => [
                "link" => "/industries/industrial",
                "image" => false,
                "items" => [
                    ["title" => "Manufacturing Components", "link" => "/industries/industrial/components"],
                    ["title" => "Industrial Tools", "link" => "/industries/industrial/tools"],
                    ["title" => "Safety Equipment", "link" => "/industries/industrial/safety"],
                    ["title" => "Chemicals & Raw Materials", "link" => "/industries/industrial/chemicals"],
                ]
            ],

            "Sports & Fitness" => [
                "link" => "/industries/sports",
                "image" => false,
                "items" => [
                    ["title" => "Fitness Accessories", "link" => "/industries/sports/fitness"],
                    ["title" => "Sports Equipment", "link" => "/industries/sports/equipment"],
                    ["title" => "Athletic Footwear", "link" => "/industries/sports/footwear"],
                    ["title" => "Sports Nutrition", "link" => "/industries/sports/nutrition"],
                ]
            ],

            "Toys & Games" => [
                "link" => "/industries/toys",
                "image" => false,
                "items" => [
                    ["title" => "Board Games & Puzzles", "link" => "/industries/toys/board"],
                    ["title" => "Electronic Games & Video Games", "link" => "/industries/toys/electronic"],
                    ["title" => "Educational Toys", "link" => "/industries/toys/educational"],
                    ["title" => "Playing & Education cards", "link" => "/industries/toys/cards"],
                ]
            ],

            "Stationery & Office Supplies" => [
                "link" => "/industries/stationery",
                "image" => false,
                "items" => [
                    ["title" => "Paper Products", "link" => "/industries/stationery/paper"],
                    ["title" => "School Supplies", "link" => "/industries/stationery/school"],
                    ["title" => "Cards & Envelopes", "link" => "/industries/stationery/cards"],
                    ["title" => "Labels & Tags", "link" => "/industries/stationery/labels"],
                ]
            ],

            "Print, Advertising & Marketing" => [
                "link" => "/industries/print",
                "image" => false,
                "items" => [
                    ["title" => "Business Cards & Stationery", "link" => "/industries/print/business"],
                    ["title" => "Brochures & Catalogs", "link" => "/industries/print/brochures"],
                    ["title" => "Promotional Materials", "link" => "/industries/print/promotional"],
                    ["title" => "Clothing & Sports Teamwears", "link" => "/industries/print/teamwear"],
                ]
            ],

            "Transport & Shipping Industry" => [
                "link" => "/industries/shipping",
                "image" => false,
                "items" => [
                    ["title" => "Corrugated Boxes & Containers", "link" => "/industries/shipping/corrugated"],
                    ["title" => "Shipping Carton", "link" => "/industries/shipping/carton"],
                    ["title" => "Hazardous Materials Packaging", "link" => "/industries/shipping/hazardous"],
                    ["title" => "Industrial Packaging", "link" => "/industries/shipping/industrial"],
                    ["title" => "Pallets & Crates", "link" => "/industries/shipping/pallets"],
                    ["title" => "Protective Packaging Materials", "link" => "/industries/shipping/protective"],
                ]
            ],

            "Furniture Packaging" => [
                "link" => "/industries/furniture",
                "image" => false,
                "items" => [
                    ["title" => "Office & Home Furniture Packaging", "link" => "/industries/furniture/office"],
                    ["title" => "Sofas & Armchairs Packaging", "link" => "/industries/furniture/sofas"],
                    ["title" => "Storage Solutions", "link" => "/industries/furniture/storage"],
                    ["title" => "Decorative Furniture", "link" => "/industries/furniture/decorative"],
                ]
            ],

            "Sustainable Solutions" => [
                "link" => "/industries/sustainable",
                "image" => false,
                "items" => [
                    ["title" => "Eco-Friendly Materials", "link" => "/industries/sustainable/eco"],
                    ["title" => "Recyclable Packaging", "link" => "/industries/sustainable/recyclable"],
                    ["title" => "Biodegradable Options", "link" => "/industries/sustainable/biodegradable"],
                    ["title" => "Compostable Packaging", "link" => "/industries/sustainable/compostable"],
                    ["title" => "Reusable Packaging", "link" => "/industries/sustainable/reusable"],
                    ["title" => "Hemp Paper Packaging", "link" => "/industries/sustainable/hemp"],
                ]
            ],

        ]
    ],

    "flexible" => [
        "title" => "Flexible Packaging & Pouches",
        "link" => "/flexible-packaging",
        "groups" => [

            "Flexible Packaging Bags" => [
                "link" => "/flexible/packaging-bags",
                "image" => true,
                "items" => [
                    ["title" => "Stand Up Pouch", "link" => "/flexible/stand-up-pouch"],
                    ["title" => "Flat Bottom Pouch", "link" => "/flexible/flat-bottom-pouch"],
                    ["title" => "Maylar Bags", "link" => "/flexible/maylar-bags"],
                    ["title" => "Child Resistant Bags", "link" => "/flexible/child-resistant-bags"],
                    ["title" => "Shrink Sleeve Labels", "link" => "/flexible/shrink-sleeve-labels"],
                    ["title" => "Spout Pouch", "link" => "/flexible/spout-pouch"],
                    ["title" => "3 Side Seal Pouch", "link" => "/flexible/3-side-seal-pouch"],
                    ["title" => "Side Gusset Bags", "link" => "/flexible/side-gusset-bags"],
                    ["title" => "Shaped Pouch", "link" => "/flexible/shaped-pouch"],
                    ["title" => "Packaging Film Roll", "link" => "/flexible/film-roll"],
                    ["title" => "Kraft Paper Pouch", "link" => "/flexible/kraft-paper-pouch"],
                    ["title" => "Recycleable Pouches", "link" => "/flexible/recycleable-pouches"],
                    ["title" => "Biodegradable Pouches", "link" => "/flexible/biodegradable-pouches"],
                ],
            ],

            "Food Packaging" => [
                "link" => "/flexible/food-packaging",
                "image" => true,
                "items" => [
                    ["title" => "Coffee Packaging", "link" => "/flexible/coffee-packaging"],
                    ["title" => "Bakery & Confectionery", "link" => "/flexible/bakery-packaging"],
                    ["title" => "Chocolate Bar Packaging", "link" => "/flexible/chocolate-bar-packaging"],
                    ["title" => "Candy & Sweets", "link" => "/flexible/candy-packaging"],
                    ["title" => "Coffee & Tea Packaging", "link" => "/flexible/coffee-tea-packaging"],
                    ["title" => "Beverages & Drinks", "link" => "/flexible/beverages-packaging"],
                    ["title" => "Snacks & Chips", "link" => "/flexible/snacks-packaging"],
                    ["title" => "Frozen Foods", "link" => "/flexible/frozen-packaging"],
                    ["title" => "Dairy Products", "link" => "/flexible/dairy-packaging"],
                    ["title" => "Wine & Spirits Pouch", "link" => "/flexible/wine-spirits-packaging"],
                    ["title" => "Energy Drinks & Juice", "link" => "/flexible/energy-drinks-packaging"],
                    ["title" => "Ice Cream & Desserts", "link" => "/flexible/ice-cream-packaging"],
                    ["title" => "Food Delivery Packaging", "link" => "/flexible/delivery-packaging"],
                    ["title" => "Meal Kits", "link" => "/flexible/meal-kits"],
                    ["title" => "Cannabis Packaging", "link" => "/flexible/cannabis-packaging"],
                    ["title" => "Pet Food Packaging", "link" => "/flexible/pet-food-packaging"],
                    ["title" => "Protein Powder Packaging", "link" => "/flexible/protein-powder-packaging"],
                    ["title" => "Nuts Packaging", "link" => "/flexible/nuts-packaging"],
                    ["title" => "Retort Pouch", "link" => "/flexible/retort-pouch"],
                    ["title" => "Condiment Packaging", "link" => "/flexible/condiment-packaging"],
                    ["title" => "Rice Pouches", "link" => "/flexible/rice-pouches"],
                    ["title" => "Fish, Meat & Jerky Packaging", "link" => "/flexible/fish-meat-packaging"],
                    ["title" => "Supplement & Protein Packaging", "link" => "/flexible/supplement-packaging"],
                ],
            ],

            "Non-Food Packaging" => [
                "link" => "/flexible/non-food-packaging",
                "image" => true,
                "items" => [
                    ["title" => "Beauty & Cosmetic Packaging", "link" => "/flexible/beauty-packaging"],
                    ["title" => "Facial Mask Packaging", "link" => "/flexible/facial-mask-packaging"],
                    ["title" => "Detergent Packaging", "link" => "/flexible/detergent-packaging"],
                    ["title" => "Sample Sachet Packaging", "link" => "/flexible/sample-sachet-packaging"],
                    ["title" => "Cat Litter Packaging", "link" => "/flexible/cat-litter-packaging"],
                    ["title" => "Mailing Bags", "link" => "/flexible/mailing-bags"],
                    ["title" => "Bin Bags & Waste Sacks", "link" => "/flexible/bin-bags"],
                    ["title" => "Polythene Bags", "link" => "/flexible/polythene-bags"],
                    ["title" => "Buble Wrap Bags", "link" => "/flexible/bubble-wrap-bags"],
                    ["title" => "Paper Bags", "link" => "/flexible/paper-bags"],
                    ["title" => "Bath & Salt Packaging", "link" => "/flexible/bath-salt-packaging"],
                    ["title" => "Postal Packaging", "link" => "/flexible/postal-packaging"],
                    ["title" => "Meal Kits", "link" => "/flexible/meal-kits"],
                    ["title" => "Meal Kits", "link" => "/flexible/meal-kits"],
                ],
            ],

        ],
    ],


    "custom_packaging" => [
        "title" => "Custom Packaging",
        "link" => "/custom-packaging",
        "groups" => [],
    ],

    "corrugated" => [
        "title" => "Corrugated Packaging",
        "link" => "/corrugated-packaging",
        "groups" => [],
    ],

    "printing" => [
        "title" => "Commercial Printing",
        "link" => "/commercial-printing",
        "groups" => [
            "Printing" => [
                "link" => "/commercial-printing/printing",
                "image" => false,
                "items" => [
                    ["title" => "Offset Printing (Lithography)", "link" => "/commercial-printing/printing/offset"],
                    ["title" => "Flexographic Printing (Flexo)", "link" => "/commercial-printing/printing/flexo"],
                    ["title" => "Gravure Printing (Flexible Packaging)", "link" => "/commercial-printing/printing/gravure"],
                    ["title" => "Digital Printing", "link" => "/commercial-printing/printing/digital"],
                    ["title" => "Screen Printing", "link" => "/commercial-printing/printing/screen"],
                    ["title" => "Letterpress (Specialty)", "link" => "/commercial-printing/printing/letterpress"],
                ],
            ],
        ],
    ],

    "advertising" => [
        "title" => "Print & Advertising",
        "link" => "/print-advertising",
        "groups" => [
            "Advertising" => [
                "link" => "/print-advertising/advertising",
                "image" => false,
                "items" => [
                    ["title" => "Office Supplies", "link" => "/print-advertising/advertising/office-supplies"],
                    ["title" => "Tissue & Hygiene", "link" => "/print-advertising/advertising/tissue-hygiene"],
                ],
            ],
        ],
    ],

    "innovation" => [
        "title" => "Innovation",
        "link" => "/innovation",
        "groups" => [
            "Branding" => [
                "link" => "/innovation/branding",
                "image" => false,
                "items" => [
                    ["title" => "Branded Finishes", "link" => "/innovation/branding/branded-finishes"],
                    ["title" => "UV Printing", "link" => "/innovation/branding/uv-printing"],
                    ["title" => "Foil Printing", "link" => "/innovation/branding/foil-printing"],
                    ["title" => "Privacy Printing", "link" => "/innovation/branding/privacy-printing"],
                    ["title" => "Experience Centers", "link" => "/innovation/branding/experience-centers"],
                    ["title" => "Client Success Stories", "link" => "/innovation/branding/client-success"],
                    ["title" => "Design 2 Markets", "link" => "/innovation/branding/design-2-markets"],
                ],
            ],
        ],
    ],

];
?>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <?php get_template_part('template-parts/theme/top-bar'); ?>
        <!-- Header -->
        <header class="bg-white sticky top-0 z-50 py-[15px]">
            <div class="hale_container py-1 flex lg:flex-col flex-row items-center justify-between gap-5">
                <!-- Logo -->
                <div class="lg:hidden w-1/2">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo"
                            height="60" width="60" />
                    </a>
                </div>
                <!-- Navigation -->
                <nav class="lg:w-full w-1/2 flex lg:justify-center justify-end items-center">
                    <button id="mobileMenuBtn" class="lg:hidden">
                        <svg id="mobileMenuIcon" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <!-- Hamburger -->
                            <path id="hamburgerIcon" stroke-linecap="round" stroke-linejoin="round"
                                d="M4 6h16M4 12h16M4 18h16" />

                            <!-- Close -->
                            <path id="closeIcon" class="hidden" stroke-linecap="round" stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <ul class="hidden lg:flex gap-5 justify-between w-full">
                        <?php foreach ($megaMenus as $key => $menu): ?>
                            <li class="cursor-pointer flex items-center" <?php if (!empty($menu['groups'])): ?>data-mega-target="megaMenu-<?php echo $key; ?>" <?php endif; ?>>
                                <a href="<?php echo esc_url($menu['link']); ?>"
                                    class="text-sm font-normal capitalize text-title_Clr hover:text-primary flex items-center justify-between">
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
            <!-- Desktop Mega Menus -->
            <?php foreach ($megaMenus as $key => $menu): ?>
                <?php if (!empty($menu['groups'])): ?>
                    <div id="megaMenu-<?php echo $key; ?>"
                        class="megaMenu hidden lg:absolute left-0 top-[58px] w-full   z-50 overflow-y-auto min-h-[90vh] h-full">
                        <div class="hale_container mx-auto !px-0  grid grid-cols-4 gap-8 rounded-b-2xl shadow-xl bg-white">
                            <!-- Column 1: Parent Groups -->
                            <div class="bg-[#f5f5f5] px-6 py-4 rounded-bl-2xl " >
                                <ul class="space-y-1">
                                    <?php $i = 0; ?>
                                    <?php foreach ($menu['groups'] as $groupName => $items): ?>
                                        <li class="mainCat w-fit flex items-center gap-2" data-index="<?php echo $i; ?>">
                                            <a href="<?php echo esc_url($items['link']); ?>"
                                                class="text-sm capitalize hover:text-primary cursor-pointer flex items-center gap-2">
                                                <?php echo $groupName; ?>
                                            </a>
                                        </li>
                                        <?php $i++; endforeach; ?>
                                </ul>
                            </div>
                            <!-- Column 2: Child Items -->
                            <div class="col-span-2 py-4" >
                                <?php $i = 0;
                                foreach ($menu['groups'] as $groupName => $groupData): ?>
                                    <div class="hidden childGroups" data-group="<?php echo $i; ?>">
                                        <ul class="space-y-1">
                                            <?php foreach ($groupData['items'] as $item): ?>
                                                <li>
                                                    <a href="<?php echo esc_url($item['link']); ?>"
                                                        class="text-sm capitalize hover:text-primary">
                                                        <?php echo $item['title']; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <?php $i++; endforeach; ?>
                            </div>
                            <!-- Column 3: Images -->
                            <?php if ($key !== false): ?>
                                <div class=" py-4 px-4" >
                                    <?php $i = 0; ?>
                                    <?php foreach ($menu['groups'] as $groupName => $items): ?>
                                        <?php if (!empty($items['image']) && $items['image'] === true): ?>
                                            <div class="hidden menuImage rounded-lg grid grid-cols-2 gap-4" data-image="<?php echo $i; ?>">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/boxgal3.png"
                                                    class="rounded-lg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/boxgal5.png"
                                                    class="rounded-lg">
                                            </div>
                                        <?php endif; ?>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden lg:hidden bg-white px-4 pt-5">
                <ul class="space-y-3 h-full overflow-y-scroll">
                    <?php foreach ($megaMenus as $key => $menu): ?>
                        <li class="flex flex-col">
                            <span class="flex">
                                <a href="<?php echo esc_url($menu['link']); ?>"
                                    class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary flex items-center justify-between">
                                    <?php echo $menu['title']; ?>

                                </a>
                                <?php if (!empty($menu['groups'])): ?>
                                    <i class="fa fa-chevron-down ml-2"></i>
                                <?php endif; ?>
                            </span>
                            <?php if (!empty($menu['groups'])): ?>
                                <div class="mobileMegaContent hidden px-2 pt-2 space-y-2">
                                    <?php foreach ($menu['groups'] as $groupName => $groupData): ?>
                                        <div>
                                            <ul class="space-y-2 list-none">
                                                <li>
                                                    <a href="<?php echo esc_url($groupData['link']); ?>"
                                                        class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">
                                                        <?php echo $groupName; ?>
                                                    </a>
                                                    <?php if (!empty($groupData['items'])): ?>
                                                        <ul class="pt-2 px-2 space-y-2 list-none">
                                                            <?php foreach ($groupData['items'] as $item): ?>
                                                                <li>
                                                                    <a href="<?php echo esc_url($item['link']); ?>"
                                                                        class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary">
                                                                        <?php echo $item['title']; ?>
                                                                    </a>
                                                                </li>

                                                            <?php endforeach; ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                </li>

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

        <!-- Scripts -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const allMegaMenus = document.querySelectorAll('.megaMenu');
                allMegaMenus.forEach(menu => {
                    const parents = menu.querySelectorAll('.mainCat');
                    const groups = menu.querySelectorAll('.childGroups');
                    const images = menu.querySelectorAll('.menuImage');
                    // Create a single arrow element
                    const arrow = document.createElement('i');
                    arrow.className = 'fa-solid fa-arrow-up-right-from-square ml-2';
                    parents[0].querySelector('a')?.appendChild(arrow); // first item
                    // Show first group/image by default
                    groups[0]?.classList.remove('hidden');
                    images[0]?.classList.remove('hidden');

                    // Make first parent active by default
                    parents[0]?.classList.add('active');

                    parents.forEach(p => {
                        p.addEventListener('mouseenter', () => {
                            const index = p.dataset.index;

                            // ✅ Remove active from all parents
                            parents.forEach(parentEl => parentEl.classList.remove('active'));

                            // ✅ Add active to the hovered parent
                            p.classList.add('active');
                            // Move arrow to current active
                            p.querySelector('a')?.appendChild(arrow);
                            // Hide all groups & images
                            groups.forEach(g => g.classList.add('hidden'));
                            images.forEach(img => img.classList.add('hidden'));

                            // Show the current group's children & image
                            menu.querySelector(`[data-group="${index}"]`)?.classList.remove('hidden');
                            menu.querySelector(`[data-image="${index}"]`)?.classList.remove('hidden');
                        });
                    });
                });

                // Show/Hide Mega Menus when hovering main nav items
                const desktopMenuItems = document.querySelectorAll('li[data-mega-target]');
                desktopMenuItems.forEach(li => {
                    const targetId = li.dataset.megaTarget;
                    const megaMenu = document.getElementById(targetId);
                    if (!megaMenu) return;

                    li.addEventListener('mouseenter', () => {
                        allMegaMenus.forEach(menu => menu.classList.add('hidden'));
                        megaMenu.classList.remove('hidden');
                    });

                    // li.addEventListener('mouseleave', (e) => {
                    //     if (!megaMenu.contains(e.relatedTarget)) megaMenu.classList.add('hidden');
                    // });

                    megaMenu.addEventListener('mouseleave', () => {
                        megaMenu.classList.add('hidden');
                    });
                });
            });

            // Mobile Menu Toggle
            document.addEventListener('DOMContentLoaded', () => {
                const mobileMenuBtn = document.getElementById('mobileMenuBtn');
                const mobileMenu = document.getElementById('mobileMenu');
                const hamburgerIcon = document.getElementById('hamburgerIcon');
                const closeIcon = document.getElementById('closeIcon');

                if (mobileMenuBtn && mobileMenu) {
                    mobileMenuBtn.addEventListener('click', () => {
                        mobileMenu.classList.toggle('hidden');

                        // Toggle icons
                        hamburgerIcon.classList.toggle('hidden');
                        closeIcon.classList.toggle('hidden');
                    });
                }

                // Mobile Mega Menu Toggle
                const mobileMenuItems = document.querySelectorAll('#mobileMenu > ul > li');
                mobileMenuItems.forEach(li => {
                    const toggleIcon = li.querySelector('i.fa-chevron-down');
                    const content = li.querySelector('.mobileMegaContent');
                    if (toggleIcon && content) {
                        toggleIcon.addEventListener('click', () => {
                            mobileMenuItems.forEach(otherLi => {
                                const otherContent = otherLi.querySelector('.mobileMegaContent');
                                if (otherContent && otherContent !== content) otherContent.classList.add('hidden');
                            });
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