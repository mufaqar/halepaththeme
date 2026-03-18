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
        "title" => "Industries",
        "link" => "/industries/",
        "groups" => [
            "Beauty & Personal Care" => [
                "link" => "/industries/beauty-care/",
                "image" => true,
                "items" => [
                    ["title" => "Cosmetics", "link" => "https://halepathpackaging.co.uk/industries/cosmetics/"],
                    ["title" => "Fragrances & Perfumes", "link" => "https://halepathpackaging.co.uk/industries/fragrances-perfumes/"],
                    ["title" => "Skincare", "link" => "https://halepathpackaging.co.uk/industries/skincare/"],
                    ["title" => "Hair Care", "link" => "https://halepathpackaging.co.uk/industries/hair-care/"],
                    ["title" => "Nail Care", "link" => "https://halepathpackaging.co.uk/industries/nail-care/"],
                    ["title" => "Soap & Body Care", "link" => "https://halepathpackaging.co.uk/industries/soap-body-care/"],
                    ["title" => "Bath Products", "link" => "https://halepathpackaging.co.uk/industries/bath-products/"],
                    ["title" => "Mens Grooming", "link" => "https://halepathpackaging.co.uk/industries/mens-grooming/"],
                    ["title" => "Spa & Wellness", "link" => "https://halepathpackaging.co.uk/industries/spa-wellness/"],
                    ["title" => "Tissue & Hygiene", "link" => "https://halepathpackaging.co.uk/industries/tissue-hygiene/"],
                ]
            ],

            "Food & Beverage" => [
                "link" => "/industries/food-beverage/",
                "image" => true,
                "items" => [
                    ["title" => "Food & Restaurant", "link" => "https://halepathpackaging.co.uk/industries/food-restaurant/"],
                    ["title" => "Bakery & Confectionery", "link" => "https://halepathpackaging.co.uk/industries/bakery-confectionery-food-beverage-industries-we-serve/"],
                    ["title" => "Chocolate", "link" => "https://halepathpackaging.co.uk/industries/chocolate/"],
                    ["title" => "Candy & Sweets", "link" => "https://halepathpackaging.co.uk/industries/candy-sweets-food-beverage-industries-we-serve/"],
                    ["title" => "Coffee & Tea", "link" => "https://halepathpackaging.co.uk/industries/coffee-tea/"],
                    ["title" => "Beverages & Drinks", "link" => "https://halepathpackaging.co.uk/industries/beverages-drinks-food-beverage-industries-we-serve/"],
                    ["title" => "Snacks & Chips", "link" => "https://halepathpackaging.co.uk/industries/snacks-chips-food-beverage-industries-we-serve/"],
                    ["title" => "Frozen Foods", "link" => "https://halepathpackaging.co.uk/industries/frozen-foods-food-beverage-industries-we-serve/"],
                    ["title" => "Dairy Products", "link" => "https://halepathpackaging.co.uk/industries/dairy-products-food-beverage-industries-we-serve/"],
                    ["title" => "Wine & Spirits", "link" => "https://halepathpackaging.co.uk/industries/wine-spirits/"],
                    ["title" => "Energy Drinks & Juice", "link" => "https://halepathpackaging.co.uk/industries/energy-drinks-juice-food-beverage-industries-we-serve/"],
                    ["title" => "Ice Cream & Desserts", "link" => "https://halepathpackaging.co.uk/industries/ice-cream-desserts-food-beverage-industries-we-serve/"],
                    ["title" => "Food Delivery Packaging", "link" => "https://halepathpackaging.co.uk/industries/food-delivery-packaging-food-beverage-industries-we-serve/"],
                    ["title" => "Meal Kits", "link" => "https://halepathpackaging.co.uk/industries/meal-kits-food-beverage-industries-we-serve/"],
                ]
            ],

            "Retail & E-commerce" => [
                "link" => "/industries/retail-e-commerce/",
                "image" => true,
                "items" => [
                    ["title" => "E-commerce Packaging", "link" => "https://halepathpackaging.co.uk/industries/e-commerce-packaging-retail-e-commerce/"],
                    ["title" => "Retail Boxes", "link" => "https://halepathpackaging.co.uk/industries/retail-boxes-retail-e-commerce/"],
                    ["title" => "Shopping Bags", "link" => "https://halepathpackaging.co.uk/industries/shopping-bags-retail-e-commerce/"],
                    ["title" => "Point of Sale Display", "link" => "https://halepathpackaging.co.uk/industries/point-of-sale-display/"],
                    ["title" => "Subscription Boxes", "link" => "https://halepathpackaging.co.uk/industries/subscription-boxes/"],
                    ["title" => "Boutique & Specialty Shops", "link" => "https://halepathpackaging.co.uk/industries/boutique-specialty-shops/"],
                ]
            ],

            "Cannabis & CBD" => [
                "link" => "/industries/cannabis/",
                "image" => true,
                "items" => [
                    ["title" => "CBD Products", "link" => "https://halepathpackaging.co.uk/industries/cbd-products/"],
                    ["title" => "Marijuana & Cannabis Packaging", "link" => "https://halepathpackaging.co.uk/industries/marijuana-cannabis-packaging/"],
                    ["title" => "Vape & E-Cigarettes", "link" => "https://halepathpackaging.co.uk/industries/vape-e-cigarettes/"],
                    ["title" => "Hemp Products", "link" => "https://halepathpackaging.co.uk/industries/hemp-products/"],
                    ["title" => "Compliance Packaging", "link" => "https://halepathpackaging.co.uk/industries/compliance-packaging/"],
                ]
            ],

            "Tobacco & Vaping" => [
                "link" => "/industries/tobacco/",
                "image" => false,
                "items" => [
                    ["title" => "Tobacco Products", "link" => "https://halepathpackaging.co.uk/industries/tobacco-products-tobacco-vaping/"],
                    ["title" => "Cigars", "link" => "https://halepathpackaging.co.uk/industries/cigars/"],
                    ["title" => "Cigarettes", "link" => "https://halepathpackaging.co.uk/industries/cigarettes/"],
                    ["title" => "Vape & E-cigarette", "link" => "https://halepathpackaging.co.uk/industries/vape-e-cigarette/"],
                    ["title" => "Smoking Accessories", "link" => "https://halepathpackaging.co.uk/industries/smoking-accessories/"],
                ]
            ],

            "Gifts & Celebrations" => [
                "link" => "/industries/gifts-celebrations/",
                "image" => false,
                "items" => [
                    ["title" => "Candles", "link" => "https://halepathpackaging.co.uk/industries/candles/"],
                    ["title" => "Gift Boxes", "link" => "https://halepathpackaging.co.uk/industries/gift-boxes-gifts-celebrations/"],
                    ["title" => "Holiday Packaging", "link" => "https://halepathpackaging.co.uk/industries/holiday-packaging/"],
                    ["title" => "Wedding & Events", "link" => "https://halepathpackaging.co.uk/industries/wedding-events/"],
                    ["title" => "Party Supplies", "link" => "https://halepathpackaging.co.uk/industries/party-supplies/"],
                    ["title" => "Home Decor", "link" => "https://halepathpackaging.co.uk/industries/home-decor/"],
                    ["title" => "Aromatherapy", "link" => "https://halepathpackaging.co.uk/industries/aromatherapy/"],
                    ["title" => "Crafts & Handmade", "link" => "https://halepathpackaging.co.uk/industries/crafts-handmade/"],
                ]
            ],

            "Apparel & Fashion" => [
                "link" => "/industries/apparel-fashion-industries-we-serve/",
                "image" => false,
                "items" => [
                    ["title" => "Garment Packaging", "link" => "https://halepathpackaging.co.uk/industries/garment-packaging/"],
                    ["title" => "Jewelry Packaging", "link" => "https://halepathpackaging.co.uk/industries/jewelry-packaging/"],
                    ["title" => "Gadgets & Accessories", "link" => "https://halepathpackaging.co.uk/industries/gadgets-accessories/"],
                    ["title" => "Luxury Fashion", "link" => "https://halepathpackaging.co.uk/industries/luxury-fashion/"],
                    ["title" => "Clothing & Hand Bags", "link" => "https://halepathpackaging.co.uk/industries/clothing-hand-bags/"],
                    ["title" => "Footwear & Shoes", "link" => "https://halepathpackaging.co.uk/industries/footwear-shoes/"],
                    ["title" => "Watches", "link" => "https://halepathpackaging.co.uk/industries/watches/"],
                    ["title" => "Activewear & Sportswear", "link" => "https://halepathpackaging.co.uk/industries/activewear-sportswear/"],
                ]
            ],

            "Pet Products" => [
                "link" => "/industries/pet-products-industries-we-serve/",
                "image" => false,
                "items" => [
                    ["title" => "Pet Food", "link" => "https://halepathpackaging.co.uk/industries/pet-food/"],
                    ["title" => "Pet Treats & Snacks", "link" => "https://halepathpackaging.co.uk/industries/pet-treats-snacks/"],
                    ["title" => "Pet Accessories", "link" => "https://halepathpackaging.co.uk/industries/pet-accessories/"],
                    ["title" => "Pet Healthcare", "link" => "https://halepathpackaging.co.uk/industries/pet-healthcare/"],
                ]
            ],

            "Pharmaceuticals" => [
                "link" => "/industries/pharmaceuticals/",
                "image" => false,
                "items" => [
                    ["title" => "Supplements & Vitamins", "link" => "https://halepathpackaging.co.uk/industries/supplements-vitamins/"],
                    ["title" => "Prescription Medications", "link" => "https://halepathpackaging.co.uk/industries/prescription-medications/"],
                    ["title" => "Healthcare Products", "link" => "https://halepathpackaging.co.uk/industries/healthcare-products/"],
                    ["title" => "Diagnostic & Surgical Equipment", "link" => "https://halepathpackaging.co.uk/industries/diagnostic-surgical-equipment/"],
                    ["title" => "Medical Kits", "link" => "https://halepathpackaging.co.uk/industries/medical-kits/"],
                ]
            ],

            "Consumer Goods & Electronics" => [
                "link" => "/industries/goods-electronics",
                "image" => false,
                "items" => [
                    ["title" => "Mobile Accessories", "link" => "https://halepathpackaging.co.uk/industries/mobile-accessories/"],
                    ["title" => "Smart Home Devices", "link" => "https://halepathpackaging.co.uk/industries/smart-home-devices/"],
                    ["title" => "Audio Equipment", "link" => "https://halepathpackaging.co.uk/industries/audio-equipment/"],
                    ["title" => "Wearable Technology", "link" => "https://halepathpackaging.co.uk/industries/wearable-technology/"],
                ]
            ],

            "Automotive Industry" => [
                "link" => "/industries/automotive/",
                "image" => false,
                "items" => [
                    ["title" => "Auto Parts & Components", "link" => "https://halepathpackaging.co.uk/industries/auto-parts-components/"],
                    ["title" => "Car Accessories", "link" => "https://halepathpackaging.co.uk/industries/car-accessories/"],
                    ["title" => "Lubricants & Fluids", "link" => "https://halepathpackaging.co.uk/industries/lubricants-fluids/"],
                    ["title" => "Automotive Tools", "link" => "https://halepathpackaging.co.uk/industries/automotive-tools/"],
                ]
            ],

            "Industrial Products" => [
                "link" => "/industries/industrial/",
                "image" => false,
                "items" => [
                    ["title" => "Manufacturing Components", "link" => "https://halepathpackaging.co.uk/industries/manufacturing-components/"],
                    ["title" => "Industrial Tools", "link" => "https://halepathpackaging.co.uk/industries/industrial-tools/"],
                    ["title" => "Safety Equipment", "link" => "https://halepathpackaging.co.uk/industries/safety-equipment/"],
                    ["title" => "Chemicals & Raw Materials", "link" => "https://halepathpackaging.co.uk/industries/chemicals-raw-materials/"],
                ]
            ],

            "Sports & Fitness" => [
                "link" => "/industries/sports-fitness/",
                "image" => false,
                "items" => [
                    ["title" => "Fitness Accessories", "link" => "https://halepathpackaging.co.uk/industries/fitness-accessories/"],
                    ["title" => "Sports Equipment", "link" => "https://halepathpackaging.co.uk/industries/sports-equipment/"],
                    ["title" => "Athletic Footwear", "link" => "https://halepathpackaging.co.uk/industries/athletic-footwear/"],
                    ["title" => "Sports Nutrition", "link" => "https://halepathpackaging.co.uk/industries/sports-nutrition/"],
                ]
            ],

            "Toys & Games" => [
                "link" => "/industries/toys-games-industries-we-serve/",
                "image" => false,
                "items" => [
                    ["title" => "Board Games & Puzzles", "link" => "https://halepathpackaging.co.uk/industries/board-games-puzzles/"],
                    ["title" => "Electronic Games & Video Games", "link" => "https://halepathpackaging.co.uk/industries/electronic-games-video-games/"],
                    ["title" => "Educational Toys", "link" => "https://halepathpackaging.co.uk/industries/educational-toys/"],
                    ["title" => "Playing & Education Cards", "link" => "https://halepathpackaging.co.uk/industries/playing-education-cards/"],
                ]
            ],

            "Stationery & Office Supplies" => [
                "link" => "/industries/stationary-and-office-supply/",
                "image" => false,
                "items" => [
                    ["title" => "Paper Products", "link" => "https://halepathpackaging.co.uk/industries/paper-products/"],
                    ["title" => "School Supplies", "link" => "https://halepathpackaging.co.uk/industries/school-supplies/"],
                    ["title" => "Cards & Envelopes", "link" => "https://halepathpackaging.co.uk/industries/cards-envelopes/"],
                    ["title" => "Labels & Tags", "link" => "https://halepathpackaging.co.uk/industries/labels-tags/"],
                ]
            ],

            "Print, Advertising & Marketing" => [
                "link" => "/industries/print-advertising/",
                "image" => false,
                "items" => [
                    ["title" => "Business Cards & Stationery", "link" => "https://halepathpackaging.co.uk/industries/business-cards-stationery/"],
                    ["title" => "Brochures & Catalogs", "link" => "https://halepathpackaging.co.uk/industries/brochures-catalogs/"],
                    ["title" => "Promotional Materials", "link" => "https://halepathpackaging.co.uk/industries/promotional-materials/"],
                    ["title" => "Clothing & Sports Teamwears", "link" => "https://halepathpackaging.co.uk/industries/clothing-sports-teamwears/"],
                ]
            ],

            "Transport & Shipping Industry" => [
                "link" => "/industries/transport-shipping/",
                "image" => false,
                "items" => [
                    ["title" => "Corrugated Boxes & Containers", "link" => "https://halepathpackaging.co.uk/industries/corrugated-boxes-containers/"],
                    ["title" => "Shipping Carton", "link" => "https://halepathpackaging.co.uk/industries/shipping-carton/"],
                    ["title" => "Hazardous Materials Packaging", "link" => "https://halepathpackaging.co.uk/industries/hazardous-materials-packaging/"],
                    ["title" => "Industrial Packaging", "link" => "https://halepathpackaging.co.uk/industries/industrial-packaging/"],
                    ["title" => "Pallets & Crates", "link" => "https://halepathpackaging.co.uk/industries/pallets-crates/"],
                    ["title" => "Protective Packaging Materials", "link" => "https://halepathpackaging.co.uk/industries/protective-packaging-materials/"],
                ]
            ],

            "Furniture Packaging" => [
                "link" => "/industries/furniture-packaging/",
                "image" => false,
                "items" => [
                    ["title" => "Office & Home Furniture Packaging", "link" => "https://halepathpackaging.co.uk/industries/office-home-furniture-packaging/"],
                    ["title" => "Sofas & Armchairs Packaging", "link" => "https://halepathpackaging.co.uk/industries/sofas-armchairs-packaging/"],
                    ["title" => "Storage Solutions", "link" => "https://halepathpackaging.co.uk/industries/storage-solutions/"],
                    ["title" => "Decorative Furniture", "link" => "https://halepathpackaging.co.uk/industries/decorative-furniture/"],
                ]
            ],

            "Sustainable Solutions" => [
                "link" => "/industries/sustainable-solutions/",
                "image" => false,
                "items" => [
                    ["title" => "Eco-Friendly Materials", "link" => "https://halepathpackaging.co.uk/industries/eco-friendly-materials-sustainable-solutions/"],
                    ["title" => "Recyclable Packaging", "link" => "https://halepathpackaging.co.uk/industries/recyclable-packaging/"],
                    ["title" => "Biodegradable Options", "link" => "https://halepathpackaging.co.uk/industries/biodegradable-options/"],
                    ["title" => "Compostable Packaging", "link" => "https://halepathpackaging.co.uk/industries/compostable-packaging/"],
                    ["title" => "Reusable Packaging", "link" => "https://halepathpackaging.co.uk/industries/reusable-packaging/"],
                    ["title" => "Hemp Paper Packaging", "link" => "https://halepathpackaging.co.uk/industries/hemp-paper-packaging/"],
                ]
            ],

        ]
    ],
    "custom_packaging" => [
        "title" => "Custom Packaging",
        "link" => "/custom-packaging/",
        "groups" => [
            "Box Styles" => [
                "link" => "/custom-packaging/box-styles/",
                "image" => true,
                "items" => [
                    ["title" => "Folding Carton Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/folding-carton-boxes/"],
                    ["title" => "Tuck End", "link" => "https://halepathpackaging.co.uk/custom-packaging/tuck-end/"],
                    ["title" => "Auto Lock Bottom", "link" => "https://halepathpackaging.co.uk/custom-packaging/auto-lock-bottom/"],
                    ["title" => "Snap Lock Bottom", "link" => "https://halepathpackaging.co.uk/custom-packaging/snap-lock-bottom/"],
                    ["title" => "Seal End", "link" => "https://halepathpackaging.co.uk/custom-packaging/seal-end/"],
                    ["title" => "Double Wall Tuck", "link" => "https://halepathpackaging.co.uk/custom-packaging/double-wall-tuck/"],
                    ["title" => "Lock Cap Bottom", "link" => "https://halepathpackaging.co.uk/custom-packaging/lock-cap-bottom/"],
                    ["title" => "Rigid & Premium Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/rigid-premium-boxes/"],
                    ["title" => "Window Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/window-boxes/"],
                    ["title" => "Pillow Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/pillow-boxes"],
                    ["title" => "Gable Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/gable-boxes/"],
                    ["title" => "Die-Cut & Custom Shape Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/die-cut-custom-shape-boxes/"],
                    ["title" => "Hanger Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/hanger-boxes/"],
                    ["title" => "Tray, Sleeve & Lid Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/tray-sleeve-lid-boxes/"],
                    ["title" => "Lid Off Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/lid-off-boxes/"],
                    ["title" => "Foot Lock Tray", "link" => "https://halepathpackaging.co.uk/custom-packaging/foot-lock-tray/"],
                    ["title" => "Mailer Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/mailer-boxes/"],
                    ["title" => "Display Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/display-boxes/"],
                    ["title" => "White Cardboard Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/white-cardboard-boxes/"],
                    ["title" => "Corrugated Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/corrugated-boxes-box-styles/"],
                    ["title" => "Holographic Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/holographic-boxes/"],
                    ["title" => "Paper / Kraft Bags", "link" => "https://halepathpackaging.co.uk/custom-packaging/paper-kraft-bags/"],
                    ["title" => "Shopping Bags", "link" => "https://halepathpackaging.co.uk/custom-packaging/shopping-bags/"],
                    ["title" => "Stand-Up Pouches", "link" => "https://halepathpackaging.co.uk/custom-packaging/stand-up-pouches/"],
                ]
            ],

            "By Industry" => [
                "link" => "/custom-packaging/by-industry/",
                "image" => false,
                "items" => [
                    ["title" => "CBD & Cannabis", "link" => "https://halepathpackaging.co.uk/custom-packaging/cbd-cannabis/"],
                    ["title" => "Cosmetic Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/cosmetic-boxes/"],
                    ["title" => "Candle Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/candle-boxes/"],
                    ["title" => "Food & Beverage", "link" => "https://halepathpackaging.co.uk/custom-packaging/food-beverage/"],
                    ["title" => "Tobacco Products", "link" => "https://halepathpackaging.co.uk/custom-packaging/tobacco-products/"],
                    ["title" => "Cigarette Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/cigarette-boxes/"],
                    ["title" => "Child Resistant Packaging", "link" => "https://halepathpackaging.co.uk/custom-packaging/child-resistant-packaging/"],
                    ["title" => "Apparel & Fashion", "link" => "https://halepathpackaging.co.uk/custom-packaging/apparel-fashion-packaging/"],
                    ["title" => "Pharmaceutical & Healthcare", "link" => "https://halepathpackaging.co.uk/custom-packaging/pharmaceutical-healthcare/"],
                    ["title" => "Pet Products", "link" => "https://halepathpackaging.co.uk/custom-packaging/pet-products-packaging/"],
                    ["title" => "Electronics & Gadgets", "link" => "https://halepathpackaging.co.uk/custom-packaging/electronics-gadgets/"],
                    ["title" => "Toys & Games", "link" => "https://halepathpackaging.co.uk/custom-packaging/toys-games-packaging/"],
                    ["title" => "Automotive & Office", "link" => "https://halepathpackaging.co.uk/custom-packaging/automotive-packaging/"],
                    ["title" => "Stationery & Pen Boxes", "link" => "https://halepathpackaging.co.uk/custom-packaging/stationery-pen-boxes/"],
                ]
            ],

            "By Purpose" => [
                "link" => "/custom-packaging/by-purpose/",
                "image" => false,
                "items" => [
                    ["title" => "Retail & Display", "link" => "https://halepathpackaging.co.uk/custom-packaging/retail-display/"],
                    ["title" => "Shipping & E-commerce", "link" => "https://halepathpackaging.co.uk/custom-packaging/shipping-e-commerce/"],
                    ["title" => "Gift & Presentation", "link" => "https://halepathpackaging.co.uk/custom-packaging/gift-presentation/"],
                    ["title" => "Product Protection", "link" => "https://halepathpackaging.co.uk/custom-packaging/product-protection/"],
                    ["title" => "Food & Beverage", "link" => "https://halepathpackaging.co.uk/custom-packaging/food-beverage-by-purpose/"],
                    ["title" => "Industrial & Bulk", "link" => "https://halepathpackaging.co.uk/custom-packaging/industrial-bulk/"],
                    ["title" => "Promotional Packaging", "link" => "https://halepathpackaging.co.uk/custom-packaging/promotional-packaging/"],
                    ["title" => "Seasonal & Event", "link" => "https://halepathpackaging.co.uk/custom-packaging/seasonal-event/"],
                ]
            ],

            "Materials" => [
                "link" => "/custom-packaging/materials/",
                "image" => false,
                "items" => [
                    ["title" => "Core Materials", "link" => "https://halepathpackaging.co.uk/custom-packaging/core-materials/"],
                    ["title" => "Kraft Paper", "link" => "https://halepathpackaging.co.uk/custom-packaging/kraft-paper/"],
                    ["title" => "Cardboard / Paperboard", "link" => "https://halepathpackaging.co.uk/custom-packaging/cardboard-paperboard/"],
                    ["title" => "Corrugated Board", "link" => "https://halepathpackaging.co.uk/custom-packaging/corrugated-board/"],
                    ["title" => "Rigid Board", "link" => "https://halepathpackaging.co.uk/custom-packaging/rigid-board/"],
                    ["title" => "Bux Board", "link" => "https://halepathpackaging.co.uk/custom-packaging/bux-board/"],
                    ["title" => "Eco-Friendly Materials", "link" => "https://halepathpackaging.co.uk/custom-packaging/eco-friendly-materials/"],
                    ["title" => "Recyclable Materials", "link" => "https://halepathpackaging.co.uk/custom-packaging/recyclable-materials/"],
                    ["title" => "Biodegradable Packaging", "link" => "https://halepathpackaging.co.uk/custom-packaging/biodegradable-packaging/"],
                    ["title" => "FSC-Certified Paper", "link" => "https://halepathpackaging.co.uk/custom-packaging/fsc-certified-paper/"],
                ]
            ],

            "Services" => [
                "link" => "/custom-packaging/services/",
                "image" => false,
                "items" => [
                    ["title" => "Design & Sampling", "link" => "https://halepathpackaging.co.uk/custom-packaging/design-sampling/"],
                    ["title" => "Production & Orders", "link" => "https://halepathpackaging.co.uk/custom-packaging/production-orders/"],
                    ["title" => "Logistics & Support", "link" => "https://halepathpackaging.co.uk/custom-packaging/logistics-support/"],
                    ["title" => "Printing & Finishing", "link" => "https://halepathpackaging.co.uk/custom-packaging/printing-finishing/"],
                    ["title" => "Foil Stamping", "link" => "https://halepathpackaging.co.uk/custom-packaging/foil-stamping/"],
                    ["title" => "Embossing / Debossing", "link" => "https://halepathpackaging.co.uk/custom-packaging/embossing-debossing/"],
                    ["title" => "Lamination & Varnish", "link" => "https://halepathpackaging.co.uk/custom-packaging/lamination-varnish/"],
                ]
            ],

        ]
    ],
    "corrugated_packaging" => [
        "title" => "Corrugated Packaging",
        "link" => "/corrugated-packaging",
        "groups" => [
            "Food & Beverage Packaging" => [
                "link" => "/corrugated-packaging/food-beverage-packaging",
                "image" => true,
                "items" => [
                    ["title" => "Fresh Produce", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/fresh-produce/"],
                    ["title" => "Frozen & Chilled", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/frozen-chilled/"],
                    ["title" => "Bakery & Confectionery", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/bakery-confectionery/"],
                    ["title" => "Meat, Poultry & Seafood", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/meat-poultry-seafood/"],
                    ["title" => "Dairy Products", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/dairy-products/"],
                    ["title" => "Dry / Cupboard Foods", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/dry-cupboard-foods/"],
                ]
            ],

            "Beverage Multipacks & Systems" => [
                "link" => "/corrugated-packaging/beverage-multipacks/",
                "image" => false,
                "items" => [
                    ["title" => "Bottle Carriers", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/bottle-carriers/"],
                    ["title" => "Can Multipacks", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/can-multipacks/"],
                    ["title" => "Bag-in-Box Outer Packaging", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/bag-in-box-outer-packaging/"],
                    ["title" => "Plastic-Free Carriers", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/plastic-free-carriers/"],
                ]
            ],

            "E-Commerce Packaging" => [
                "link" => "/corrugated-packaging/e-commerce/",
                "image" => false,
                "items" => [
                    ["title" => "Standard Mailing Boxes", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/standard-mailing-boxes/"],
                    ["title" => "Crash-Lock Mailers", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/crash-lock-mailers/"],
                    ["title" => "Pizza-Style / Flat Postal Boxes", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/pizza-style-flat-postal-boxes/"],
                    ["title" => "Letterbox-Sized Packs", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/letterbox-sized-packs/"],
                    ["title" => "Returns & Resealable Packaging", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/returns-resealable-packaging/"],
                    ["title" => "Frustration-Free / Amazon-Compatible", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/frustration-free-amazon-compatible/"],
                ]
            ],

            "Shipping & Transport" => [
                "link" => "/corrugated-packaging/shipping-transport/",
                "image" => false,
                "items" => [
                    ["title" => "Standard Shipping Boxes", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/standard-shipping-boxes/"],
                    ["title" => "Hazardous Goods / UN Certified", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/hazardous-goods-un-certified/"],
                    ["title" => "Pallet Boxes & Large Containers", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/pallet-boxes-large-containers/"],
                    ["title" => "Export / Moisture-Resistant", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/export-moisture-resistant/"],
                ]
            ],

            "Wall Constructions" => [
                "link" => "/corrugated-packaging/wall-constructions/",
                "image" => false,
                "items" => [
                    ["title" => "Single Wall Boxes", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/single-wall-boxes/"],
                    ["title" => "Double Wall Boxes", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/double-wall-boxes/"],
                    ["title" => "Tri Wall Boxes", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/tri-wall-boxes/"],
                    ["title" => "Custom Multi-Wall Options", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/custom-multi-wall-options/"],
                ]
            ],

            "Slotted & Standard Boxes" => [
                "link" => "/corrugated-packaging/slotted-standard-boxes/",
                "image" => false,
                "items" => [
                    ["title" => "Regular Slotted Containers", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/regular-slotted-containers/"],
                    ["title" => "Half Slotted Containers", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/half-slotted-containers/"],
                    ["title" => "Full Overlap Slotted", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/full-overlap-slotted/"],
                    ["title" => "Center Special Slotted", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/center-special-slotted/"],
                    ["title" => "Heavy-Duty Shipping Containers", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/heavy-duty-shipping-containers/"],
                ]
            ],

            "Functional & Automation-Friendly Boxes" => [
                "link" => "/corrugated-packaging/functional-automation/",
                "image" => false,
                "items" => [
                    ["title" => "Crash Lock Boxes", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/crash-lock-boxes/"],
                    ["title" => "Wrap Around Boxes", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/wrap-around-boxes/"],
                    ["title" => "Load-Sharing Wraparounds", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/load-sharing-wraparounds/"],
                    ["title" => "Wrap 8 / Multi-Sided Wraparounds", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/wrap-8-multi-sided-wraparounds/"],
                    ["title" => "SRP Split Wrap", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/srp-split-wrap/"],
                ]
            ],

            "Trays & Retail Ready Solutions" => [
                "link" => "/corrugated-packaging/trays-retail-ready-solutions/",
                "image" => false,
                "items" => [
                    ["title" => "Corrugated Trays", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/corrugated-trays/"],
                    ["title" => "Retail Ready Packaging", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/retail-ready-packaging/"],
                    ["title" => "Shelf-Ready Trays", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/shelf-ready-trays/"],
                    ["title" => "High-Graphic Retail Boxes", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/high-graphic-retail-boxes/"],
                ]
            ],

            "Bulk & Industrial Solutions" => [
                "link" => "/corrugated-packaging/bulk-industrial-solutions/",
                "image" => false,
                "items" => [
                    ["title" => "Bulk Bins & Containers", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/bulk-bins-containers/"],
                    ["title" => "Laminated Bulk Bins", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/laminated-bulk-bins/"],
                    ["title" => "Heavy-Duty Industrial Boxes", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/heavy-duty-industrial-boxes/"],
                    ["title" => "Protective Inserts & Dividers", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/protective-inserts-dividers/"],
                ]
            ],

            "Specialty Corrugated Packaging" => [
                "link" => "/corrugated-packaging/specialty-corrugated-packaging/",
                "image" => false,
                "items" => [
                    ["title" => "eCommerce Mailer Boxes", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/ecommerce-mailer-boxes/"],
                    ["title" => "Bag-in-Box Outer Corrugated Boxes", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/bag-in-box-outer-corrugated-boxes/"],
                    ["title" => "Display & Point-of-Sale Units", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/display-point-of-sale-units/"],
                    ["title" => "Custom Die-Cut & Protective Packaging", "link" => "https://halepathpackaging.co.uk/corrugated-packaging/custom-die-cut-protective-packaging/"],
                ]
            ],

        ]
    ],
    "flexible_packaging" => [
        "title" => "Flexible Packaging",
        "link" => "/flexible-packaging-pouches/",
        "groups" => [
            "Flexible Flexible Packaging Bags" => [
                "link" => "/flexible-packaging-pouches/flexible-packaging-bags/",
                "image" => true,
                "items" => [
                    ["title" => "Stand Up Pouch", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/stand-up-pouch/"],
                    ["title" => "Flat Bottom Pouch", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/flat-bottom-pouch/"],
                    ["title" => "Mylar Bags", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/mylar-bags/"],
                    ["title" => "Child Resistant Bags", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/child-resistant-bags/"],
                    ["title" => "Shrink Sleeve Labels", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/shrink-sleeve-labels/"],
                    ["title" => "Spout Pouch", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/spout-pouch/"],
                    ["title" => "3 Side Seal Pouch", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/3-side-seal-pouch/"],
                    ["title" => "Side Gusset Bags", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/side-gusset-bags/"],
                    ["title" => "Shaped Pouch", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/shaped-pouch/"],
                    ["title" => "Packaging Film Roll", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/packaging-film-roll/"],
                    ["title" => "Kraft Paper Pouch", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/kraft-paper-pouch/"],
                    ["title" => "Recyclable Pouches", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/recyclable-pouches/"],
                    ["title" => "Biodegradable Pouches", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/biodegradable-pouches/"],
                ]
            ],

            "Food Packaging" => [
                "link" => "/flexible-packaging-pouches/food-packaging/",
                "image" => false,
                "items" => [
                    ["title" => "Coffee Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/coffee-packaging/"],
                    ["title" => "Bakery & Confectionery", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/bakery-confectionery-food-packaging/"],
                    ["title" => "Chocolate Bar Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/chocolate-bar-packaging/"],
                    ["title" => "Candy & Sweets", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/candy-sweets/"],
                    ["title" => "Coffee & Tea Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/coffee-tea-packaging/"],
                    ["title" => "Beverages & Drinks", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/beverages-drinks/"],
                    ["title" => "Snacks & Chips", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/snacks-chips/"],
                    ["title" => "Frozen Foods", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/frozen-foods/"],
                    ["title" => "Dairy Products", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/dairy-products-food-packaging/"],
                    ["title" => "Wine & Spirits Pouch", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/wine-spirits-pouch/"],
                    ["title" => "Energy Drinks & Juice", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/energy-drinks-juice/"],
                    ["title" => "Ice Cream & Desserts", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/ice-cream-desserts/"],
                    ["title" => "Food Delivery Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/food-delivery-packaging/"],
                    ["title" => "Meal Kits", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/meal-kits/"],
                    ["title" => "Cannabis Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/cannabis-packaging/"],
                    ["title" => "Pet Food Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/pet-food-packaging/"],
                    ["title" => "Protein Powder Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/protein-powder-packaging/"],
                    ["title" => "Nuts Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/nuts-packaging/"],
                    ["title" => "Retort Pouch", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/retort-pouch/"],
                    ["title" => "Condiment Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/condiment-packaging/"],
                    ["title" => "Rice Pouches", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/rice-pouches/"],
                    ["title" => "Fish, Meat & Jerky Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/fish-meat-jerky-packaging/"],
                    ["title" => "Supplement & Protein Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/supplement-protein-packaging/"],
                ]
            ],
            "Non Food Packaging" => [
                "link" => "/flexible-packaging-pouches/non-food-packaging/",
                "image" => false,
                "items" => [
                    ["title" => "Detergent Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/detergent-packaging/"],
                    ["title" => "Simple Sachet Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/simple-sachet-packaging/"],
                    ["title" => "Cat Litter Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/cat-litter-packaging/"],
                    ["title" => "Lawn & Garden Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/lawn-garden-packaging/"],
                    ["title" => "Construction & Hardware Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/construction-hardware-packaging/"],
                    ["title" => "Agriculture Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/agriculture-packaging/"],
                    ["title" => "Household Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/household-packaging/"],
                    ["title" => "Cleaning Product Packaging", "link" => "https://halepathpackaging.co.uk/flexible-packaging-pouches/cleaning-product-packaging/"]
                ]
            ],

        ]
    ],
    "commercial_printing" => [
        "title" => "Commercial Printing",
        "link" => "commercial-printing/",
        "groups" => [
            "Offset Printing (Lithography)" => [
                "link" => "/commercial-printing/offset-printing-lithography/",
                "image" => true,
                "items" => [
                    ["title" => "Digital Printing", "link" => "https://halepathpackaging.co.uk/commercial-printing/digital-printing/", "image" => true],
                    ["title" => "Flexographic Printing (Flexo)", "link" => "https://halepathpackaging.co.uk/commercial-printing/flexographic-printing-flexo/"],
                    ["title" => "Gravure Printing (Flexible Packaging)", "link" => "https://halepathpackaging.co.uk/commercial-printing/gravure-printing-flexible-packaging/"],
                    ["title" => "Spot UV", "link" => "https://halepathpackaging.co.uk/commercial-printing/spot-uv-offset-printing-lithography/"],
                    ["title" => "Screen Printing", "link" => "https://halepathpackaging.co.uk/commercial-printing/screen-printing/"],
                    ["title" => "Letterpress (Specialty)", "link" => "https://halepathpackaging.co.uk/commercial-printing/letterpress-specialty/"],
                    ["title" => "UV Offset Printing", "link" => "https://halepathpackaging.co.uk/commercial-printing/uv-offset-printing/"],
                    ["title" => "Foil Printing", "link" => "https://halepathpackaging.co.uk/commercial-printing/foil-printing/"],
                ],
            ],
        ]
    ],
    "print_advertising" => [
        "title" => "Print & Advertising",
        "link" => "/print-advertising/",
        "groups" => [

            "Office Supplies" => [
                "link" => "/print-advertising/office-supplies/",
                "image" => true,
                "items" => [
                    ["title" => "Workspace Accessories", "link" => "https://halepathpackaging.co.uk/print-advertising/workspace-accessories/"],
                    ["title" => "Pens, Pencils & Markers", "link" => "https://halepathpackaging.co.uk/print-advertising/pens-pencils-markers/"],
                    ["title" => "Notes & Badge Holders", "link" => "https://halepathpackaging.co.uk/print-advertising/notes-badge-holders/"],
                ]
            ],

            "Business Cards" => [
                "link" => "/print-advertising/business-cards/",
                "image" => false,
                "items" => [
                    ["title" => "Standard Card", "link" => "https://halepathpackaging.co.uk/print-advertising/standard-card/"],
                    ["title" => "Premium Card", "link" => "https://halepathpackaging.co.uk/print-advertising/premium-card/"],
                    ["title" => "Deluxe Card", "link" => "https://halepathpackaging.co.uk/print-advertising/deluxe-card/"],
                    ["title" => "Magnetic Business Card", "link" => "https://halepathpackaging.co.uk/print-advertising/magnetic-business-card/"],
                    ["title" => "Loyalty Card", "link" => "https://halepathpackaging.co.uk/print-advertising/loyalty-card/"],
                ]
            ],

            "Postcards" => [
                "link" => "/print-advertising/postcards/",
                "image" => false,
                "items" => [
                    ["title" => "Standard Postcard", "link" => "https://halepathpackaging.co.uk/print-advertising/standard-postcard/"],
                    ["title" => "Die Cut Postcard", "link" => "https://halepathpackaging.co.uk/print-advertising/die-cut-postcard/"],
                    ["title" => "Rounded Corner Postcard", "link" => "https://halepathpackaging.co.uk/print-advertising/rounded-corner-postcard/"],
                    ["title" => "Mailing Postcard", "link" => "https://halepathpackaging.co.uk/print-advertising/mailing-postcard/"],
                    ["title" => "EDDM Postcard", "link" => "https://halepathpackaging.co.uk/print-advertising/eddm-postcard/"],
                ]
            ],

            "Marketing Materials" => [
                "link" => "/print-advertising/marketing-materials/",
                "image" => false,
                "items" => [
                    ["title" => "Flyers", "link" => "https://halepathpackaging.co.uk/print-advertising/flyers/"],
                    ["title" => "Brochures", "link" => "https://halepathpackaging.co.uk/print-advertising/brochures/"],
                    ["title" => "Folders", "link" => "https://halepathpackaging.co.uk/print-advertising/folders/"],
                    ["title" => "Rack Cards", "link" => "https://halepathpackaging.co.uk/print-advertising/rack-cards/"],
                    ["title" => "Door Hangers", "link" => "https://halepathpackaging.co.uk/print-advertising/door-hangers/"],
                    ["title" => "Custom Tickets", "link" => "https://halepathpackaging.co.uk/print-advertising/custom-tickets/"],
                    ["title" => "Gift Certificates", "link" => "https://halepathpackaging.co.uk/print-advertising/gift-certificates/"],
                ]
            ],

            "Business Stationery" => [
                "link" => "/print-advertising/business-stationery/",
                "image" => false,
                "items" => [
                    ["title" => "Shipping Mailers & Envelopes", "link" => "https://halepathpackaging.co.uk/print-advertising/shipping-mailers-envelopes/"],
                    ["title" => "Letterheads", "link" => "https://halepathpackaging.co.uk/print-advertising/letterheads/"],
                    ["title" => "Business Invitations", "link" => "https://halepathpackaging.co.uk/print-advertising/business-invitations/"],
                    ["title" => "Calendars, Stamps & Ink", "link" => "https://halepathpackaging.co.uk/print-advertising/calendars-stamps-ink/"],
                ]
            ],

            "Banners & Displays" => [
                "link" => "/print-advertising/banners-displays/",
                "image" => false,
                "items" => [
                    ["title" => "Hanging Banner", "link" => "https://halepathpackaging.co.uk/print-advertising/hanging-banner/"],
                    ["title" => "Standing Banner", "link" => "https://halepathpackaging.co.uk/print-advertising/standing-banner/"],
                    ["title" => "Table Covers", "link" => "https://halepathpackaging.co.uk/print-advertising/table-covers/"],
                    ["title" => "Display & Tent", "link" => "https://halepathpackaging.co.uk/print-advertising/display-tent/"],
                    ["title" => "Portable Counter", "link" => "https://halepathpackaging.co.uk/print-advertising/portable-counter/"],
                ]
            ],

            "Decals & Signage" => [
                "link" => "/print-advertising/decals-signage/",
                "image" => false,
                "items" => [
                    ["title" => "Wall & Window Decals", "link" => "https://halepathpackaging.co.uk/print-advertising/wall-window-decals/"],
                    ["title" => "Car Decals & Magnets", "link" => "https://halepathpackaging.co.uk/print-advertising/car-decals-magnets/"],
                    ["title" => "Yard Signs", "link" => "https://halepathpackaging.co.uk/print-advertising/yard-signs/"],
                    ["title" => "Rigid Signs & Boards", "link" => "https://halepathpackaging.co.uk/print-advertising/rigid-signs-boards/"],
                    ["title" => "Canvas Prints & Wall Art", "link" => "https://halepathpackaging.co.uk/print-advertising/canvas-prints-wall-art/"],
                    ["title" => "A-Frame & Desk Signs", "link" => "https://halepathpackaging.co.uk/print-advertising/a-frame-desk-signs/"],
                ]
            ],

            "Labels & Stickers" => [
                "link" => "/print-advertising/labels-stickers/",
                "image" => false,
                "items" => [
                    ["title" => "Sticker Singles", "link" => "https://halepathpackaging.co.uk/print-advertising/sticker-singles/"],
                    ["title" => "Die-Cut Stickers", "link" => "https://halepathpackaging.co.uk/print-advertising/die-cut-stickers/"],
                    ["title" => "Kiss-Cut Stickers", "link" => "https://halepathpackaging.co.uk/print-advertising/kiss-cut-stickers/"],
                    ["title" => "Sheet Stickers", "link" => "https://halepathpackaging.co.uk/print-advertising/sheet-stickers/"],
                    ["title" => "Product Stickers on Sheet", "link" => "https://halepathpackaging.co.uk/print-advertising/product-stickers-on-sheet/"],
                    ["title" => "Return Address Labels", "link" => "https://halepathpackaging.co.uk/print-advertising/return-address-labels/"],
                    ["title" => "Roll Label Stickers", "link" => "https://halepathpackaging.co.uk/print-advertising/roll-label-stickers/"],
                    ["title" => "Die-Cut Sticker Rolls", "link" => "https://halepathpackaging.co.uk/print-advertising/die-cut-sticker-rolls/"],
                ]
            ],

            "Promotional Products" => [
                "link" => "/print-advertising/promotional-products/",
                "image" => false,
                "items" => [
                    ["title" => "Booklet Catalogs", "link" => "https://halepathpackaging.co.uk/print-advertising/booklet-catalogs/"],
                    ["title" => "Clothing", "link" => "https://halepathpackaging.co.uk/print-advertising/clothing/"],
                    ["title" => "Hats", "link" => "https://halepathpackaging.co.uk/print-advertising/hats/"],
                    ["title" => "Drinkware", "link" => "https://halepathpackaging.co.uk/print-advertising/drinkware/"],
                    ["title" => "Snacks & Candy", "link" => "https://halepathpackaging.co.uk/print-advertising/snacks-candy/"],
                    ["title" => "Lifestyle & Personal Items", "link" => "https://halepathpackaging.co.uk/print-advertising/lifestyle-personal-items/"],
                ]
            ],

            "Invitations, Cards & Gifts" => [
                "link" => "/print-advertising/invitations-cards-gifts/",
                "image" => false,
                "items" => [
                    ["title" => "Invitations & Announcements", "link" => "https://halepathpackaging.co.uk/print-advertising/invitations-announcements/"],
                    ["title" => "Party Invitations", "link" => "https://halepathpackaging.co.uk/print-advertising/party-invitations/"],
                    ["title" => "Thank You & Holiday Cards", "link" => "https://halepathpackaging.co.uk/print-advertising/thank-you-holiday-cards/"],
                    ["title" => "Corporate Gifts", "link" => "https://halepathpackaging.co.uk/print-advertising/corporate-gifts/"],
                ]
            ],

        ]
    ],
    "innovation" => [
        "title" => "Innovation",
        "link" => "/innovation/",
        "groups" => [
            "Branded Finishes" => [
                "link" => "/innovation/branded-finishes-innovation/",
                "image" => true,
                "items" => [
                    ["title" => "UV Printing Technology", "link" => "https://halepathpackaging.co.uk/innovation/uv-printing-technology/", "image" => true],
                    ["title" => "Foil Printing Solutions", "link" => "https://halepathpackaging.co.uk/innovation/foil-printing-solutions/"],
                    ["title" => "Privacy Printing", "link" => "https://halepathpackaging.co.uk/innovation/privacy-printing/"],
                    ["title" => "Research & Development (R&D)", "link" => "https://halepathpackaging.co.uk/innovation/research-development-rd/"],
                    ["title" => "Sustainable Innovation", "link" => "https://halepathpackaging.co.uk/innovation/sustainable-innovation/"],
                    ["title" => "Material Innovation", "link" => "https://halepathpackaging.co.uk/innovation/material-innovation/"],
                    ["title" => "Structural Innovation", "link" => "https://halepathpackaging.co.uk/innovation/structural-innovation/"],
                    ["title" => "Smart Packaging Technology", "link" => "https://halepathpackaging.co.uk/innovation/smart-packaging-technology/"],
                    ["title" => "Digital Printing Advancement", "link" => "https://halepathpackaging.co.uk/innovation/digital-printing-advancement/"],
                    ["title" => "Surface Coating Technology", "link" => "https://halepathpackaging.co.uk/innovation/surface-coating-technology/"],
                    ["title" => "Security Printing Solutions", "link" => "https://halepathpackaging.co.uk/innovation/security-printing-solutions/"],
                ],
            ],
        ]
    ],
    // "about_us" => [
    //     "title" => "About Us",
    //     "link" => "/about-us",
    //     "groups" => [
    //         "Company Overview" => [
    //             "link" => "/about-us/company-overview",
    //             "image" => true,
    //             "items" => [
    //                 ["title" => "Quality Commitment", "link" => "/about-us/quality-commitment", "image" => true],
    //                 ["title" => "Innovation Approach", "link" => "/about-us/innovation-approach"],
    //                 ["title" => "Sustainability Focus", "link" => "/about-us/sustainability"],
    //                 ["title" => "Why Choose Us", "link" => "/about-us/why-choose-us"],
    //             ],
    //         ]
    //     ]
    // ]
];
?>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <?php get_template_part('template-parts/theme/top-bar'); ?>
        <!-- Header -->
        <header class="bg-[#f5f5f5] sticky top-0 z-50 py-[15px]">
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
                    <ul id="desktopNav" class="hidden lg:flex gap-1.5 justify-between w-full">
                        <?php foreach ($megaMenus as $key => $menu): ?>
                            <?php
                            $isMega = !empty($menu['groups']);
                            $isDropdown = empty($menu['groups']) && !empty($menu['items']);
                            ?>
                            <li class="relative cursor-pointer flex items-center" <?php if ($isMega): ?>
                                    data-mega-target="megaMenu-<?php echo $key; ?>" <?php endif; ?>     <?php if ($isDropdown): ?>
                                    data-sub-target="subMenu-<?php echo $key; ?>" <?php endif; ?>>

                                <a href="<?php echo esc_url($menu['link']); ?>"
                                    class="text-sm font-normal capitalize text-title_Clr hover:text-white hover:bg-secondary px-2 py-2 rounded-[30px] flex items-center">
                                    <?php echo $menu['title']; ?>
                                    <?php if ($isMega || $isDropdown): ?>
                                        <i class="fa fa-chevron-down ml-1.5"></i>
                                    <?php endif; ?>
                                </a>
                                <!-- subMenu Menus -->
                                <?php if ($isDropdown): ?>
                                    <div id="subMenu-<?php echo $key; ?>"
                                        class="subMenu hidden absolute right-0 top-full translate-y-5 pt-2 bg-black/20 backdrop-blur-[10px] shadow-xl rounded-lg p-4 min-w-[300px] space-y-2 z-50">
                                        <ul>
                                            <?php foreach ($menu['items'] as $item): ?>
                                                <li>
                                                    <a href="<?php echo esc_url($item['link']); ?>"
                                                        class="block text-sm capitalize text-white hover:text-primary">
                                                        <?php echo $item['title']; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>

            <!-- Desktop Mega Menus -->
            <?php foreach ($megaMenus as $key => $menu): ?>
                <?php if (!empty($menu['groups'])): ?>
                    <div id="megaMenu-<?php echo $key; ?>"
                        class="megaMenu hidden lg:absolute left-1/2 -translate-x-1/2 2xl:top-[74px]  top-[94px] hale_container mx-auto  z-50 overflow-y-auto min-h-fit h-full">
                        <?php
                        $hasImage = false;

                        foreach ($menu['groups'] as $groupName => $items) {
                            if (!empty($items['image']) && $items['image'] === true) {
                                $hasImage = true;
                                break;
                            }
                        }
                        ?>
                        <div
                            class="mx-auto !px-0 grid <?php echo $hasImage ? 'grid-cols-4 hale_container' : 'grid-cols-4 hale_container'; ?> gap-0 rounded-b-2xl shadow-xl bg-black/20 backdrop-blur-[10px]">
                            <!-- Column 1: Parent Groups -->
                            <div class="rounded-bl-2xl ">
                                <ul class="space-y-0">
                                    <?php $i = 0; ?>
                                    <?php foreach ($menu['groups'] as $groupName => $items): ?>
                                        <li class="mainCat flex items-center gap-2 py-2 px-5 " data-index="<?php echo $i; ?>">
                                            <a href="<?php echo esc_url($items['link']); ?>"
                                                class="text-xs capitalize text-white cursor-pointer flex items-center gap-2">
                                                <?php echo $groupName; ?>
                                            </a>
                                        </li>
                                        <?php $i++; endforeach; ?>
                                </ul>
                            </div>
                            <!-- Column 2: Child Items -->
                            <div class="col-span-1 bg-secondary/30 backdrop-blur-[10px]">
                                <?php $i = 0;
                                foreach ($menu['groups'] as $groupName => $groupData): ?>
                                    <div class="hidden childGroups" data-group="<?php echo $i; ?>">
                                        <ul class="space-y-0">
                                            <?php foreach ($groupData['items'] as $item): ?>
                                                <li class="py-1 px-5">
                                                    <a href="<?php echo esc_url($item['link']); ?>"
                                                        class="text-xs capitalize text-white hover:text-primary">
                                                        <?php echo $item['title']; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <?php $i++; endforeach; ?>
                            </div>
                            <!-- Column 3: Images -->
                            <?php if ($hasImage): ?>
                                <div class="col-span-2 py-4 px-6">
                                    <?php $i = 0; ?>
                                    <?php foreach ($menu['groups'] as $groupName => $items): ?>
                                        <?php if (!empty($items['image']) && $items['image'] === true): ?>
                                            <div class="hidden menuImage rounded-lg grid grid-cols-5 gap-4" data-image="<?php echo $i; ?>">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/boxgal4.png"
                                                    class="rounded-2xl !h-full w-full object-cover col-span-2">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/boxgal5.png"
                                                    class="rounded-2xl h-full w-full object-cover col-span-3">
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

                const desktopNav = document.getElementById('desktopNav');
                const allNavItems = desktopNav.querySelectorAll('li');
                const allMegaMenus = document.querySelectorAll('.megaMenu');
                const allSubMenus = document.querySelectorAll('.subMenu');

                // =====================================
                // CLOSE ALL MENUS
                // =====================================
                function closeAllMenus() {
                    allMegaMenus.forEach(menu => menu.classList.add('hidden'));
                    allSubMenus.forEach(menu => menu.classList.add('hidden'));

                    allNavItems.forEach(nav => {
                        nav.querySelector('a')?.classList.remove('main_active');
                    });
                }

                // =====================================
                // OPEN MENU ON LI HOVER
                // =====================================
                allNavItems.forEach(item => {

                    const megaTarget = item.dataset.megaTarget;
                    const subTarget = item.dataset.subTarget;

                    const megaMenu = megaTarget ? document.getElementById(megaTarget) : null;
                    const subMenu = subTarget ? document.getElementById(subTarget) : null;

                    const link = item.querySelector('a');

                    item.addEventListener('mouseenter', () => {

                        closeAllMenus();

                        if (megaMenu) megaMenu.classList.remove('hidden');
                        if (subMenu) subMenu.classList.remove('hidden');

                        link?.classList.add('main_active');
                    });
                });

                // =====================================
                // CLOSE SUBMENU ONLY WHEN LEAVING IT
                // =====================================
                allSubMenus.forEach(menu => {
                    menu.addEventListener('mouseleave', () => {

                        menu.classList.add('hidden');

                        allNavItems.forEach(nav => {
                            nav.querySelector('a')?.classList.remove('main_active');
                        });
                    });
                });

                // =====================================
                // CLOSE MEGA ONLY WHEN LEAVING IT
                // =====================================
                allMegaMenus.forEach(menu => {
                    menu.addEventListener('mouseleave', () => {

                        menu.classList.add('hidden');

                        allNavItems.forEach(nav => {
                            nav.querySelector('a')?.classList.remove('main_active');
                        });
                    });
                });

                // =====================================
                // ===== MEGA MENU CHILD SWITCHING =====
                // =====================================
                allMegaMenus.forEach(menu => {

                    const parents = menu.querySelectorAll('.mainCat');
                    const groups = menu.querySelectorAll('.childGroups');
                    const images = menu.querySelectorAll('.menuImage');

                    const arrow = document.createElement('i');
                    arrow.className = 'fa-solid fa-arrow-up-right-from-square ml-2';

                    // Default first active
                    if (parents.length > 0) {

                        parents[0].classList.add('active');
                        parents[0].querySelector('a')?.appendChild(arrow);

                        groups[0]?.classList.remove('hidden');
                        images[0]?.classList.remove('hidden');
                    }

                    parents.forEach(p => {

                        p.addEventListener('mouseenter', () => {

                            const index = p.dataset.index;

                            // Hide all
                            groups.forEach(g => g.classList.add('hidden'));
                            images.forEach(img => img.classList.add('hidden'));
                            parents.forEach(pr => pr.classList.remove('active'));

                            // Show selected
                            menu.querySelector(`[data-group="${index}"]`)?.classList.remove(
                                'hidden');
                            menu.querySelector(`[data-image="${index}"]`)?.classList.remove(
                                'hidden');

                            p.classList.add('active');
                            p.querySelector('a')?.appendChild(arrow);
                        });

                    });

                });

            });

            // ==========================================
            // MOBILE MENU
            // ==========================================
            document.addEventListener('DOMContentLoaded', () => {

                const mobileMenuBtn = document.getElementById('mobileMenuBtn');
                const mobileMenu = document.getElementById('mobileMenu');
                const hamburgerIcon = document.getElementById('hamburgerIcon');
                const closeIcon = document.getElementById('closeIcon');

                if (mobileMenuBtn && mobileMenu) {
                    mobileMenuBtn.addEventListener('click', () => {
                        mobileMenu.classList.toggle('hidden');
                        hamburgerIcon.classList.toggle('hidden');
                        closeIcon.classList.toggle('hidden');
                    });
                }

                // Mobile Mega Toggle
                const mobileMenuItems = document.querySelectorAll('#mobileMenu > ul > li');

                mobileMenuItems.forEach(li => {

                    const toggleIcon = li.querySelector('i.fa-chevron-down');
                    const content = li.querySelector('.mobileMegaContent');

                    if (toggleIcon && content) {
                        toggleIcon.addEventListener('click', () => {

                            // Close others
                            mobileMenuItems.forEach(otherLi => {
                                const otherContent = otherLi.querySelector(
                                    '.mobileMegaContent');
                                if (otherContent && otherContent !== content) {
                                    otherContent.classList.add('hidden');
                                }
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