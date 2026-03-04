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
                "link" => "/product-category/beauty-personal-care",
                "image" => true,
                "items" => [
                    ["title" => "Cosmetics", "link" => "/product-category/beauty-personal-care/cosmetics"],
                    ["title" => "Fragrances & Perfumes", "link" => "/product-category/beauty-personal-care/fragrances"],
                    ["title" => "Skincare", "link" => "/product-category/beauty-personal-care/skincare"],
                    ["title" => "Hair Care", "link" => "/product-category/beauty-personal-care/hair-care"],
                    ["title" => "Nail Care", "link" => "/product-category/beauty-personal-care/nail-care"],
                    ["title" => "Soap & Body Care", "link" => "/product-category/beauty-personal-care/soap-body"],
                    ["title" => "Bath Products", "link" => "/product-category/beauty-personal-care/bath-products"],
                    ["title" => "Mens Grooming", "link" => "/product-category/beauty-personal-care/mens-grooming"],
                    ["title" => "Spa & Wellness", "link" => "/product-category/beauty-personal-care/spa"],
                    ["title" => "Tissue & Hygiene", "link" => "/product-category/beauty-personal-care/tissue"],
                ]
            ],

            "Food & Beverage" => [
                "link" => "/industries/food",
                "image" => false,
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
                "image" => false,
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
                "image" => false,
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
                "image" => false,
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
                    ["title" => "Playing & Education Cards", "link" => "/industries/toys/cards"],
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
    "corrugated_packaging" => [
        "title" => "Corrugated Packaging",
        "link" => "/product-category/corrugated-packaging",
        "groups" => [
            "Food & Beverage Packaging" => [
                "link" => "/product-category/corrugated-packaging/food-beverage-packaging",
                "image" => true,
                "items" => [
                    ["title" => "Fresh Produce", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/food-beverage-packaging/fresh-produce/"],
                    ["title" => "Frozen & Chilled", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/food-beverage-packaging/frozen-chilled/"],
                    ["title" => "Bakery & Confectionery", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/food-beverage-packaging/bakery-confectionery/"],
                    ["title" => "Meat, Poultry & Seafood", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/food-beverage-packaging/meat-poultry-seafood/"],
                    ["title" => "Dairy Products", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/food-beverage-packaging/dairy-products/"],
                    ["title" => "Dry / Cupboard Foods", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/food-beverage-packaging/dry-cupboard-foods/"],
                ]
            ],

            "Beverage Multipacks & Systems" => [
                "link" => "/product-category/corrugated-packaging/beverage-multipacks-systems/",
                "image" => false,
                "items" => [
                    ["title" => "Bottle Carriers", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/beverage-multipacks-systems/bottle-carriers/"],
                    ["title" => "Can Multipacks", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/beverage-multipacks-systems/can-multipacks/"],
                    ["title" => "Bag-in-Box Outer Packaging", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/beverage-multipacks-systems/bag-in-box-outer-packaging/"],
                    ["title" => "Plastic-Free Carriers", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/beverage-multipacks-systems/plastic-free-carriers/"],
                ]
            ],

            "E-Commerce Packaging" => [
                "link" => "/product-category/corrugated-packaging/e-commerce-packaging/",
                "image" => false,
                "items" => [
                    ["title" => "Standard Mailing Boxes", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/e-commerce-packaging/standard-mailing-boxes/"],
                    ["title" => "Crash-Lock Mailers", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/e-commerce-packaging/crash-lock-mailers/"],
                    ["title" => "Pizza-Style / Flat Postal Boxes", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/e-commerce-packaging/pizza-style-flat-postal-boxes/"],
                    ["title" => "Letterbox-Sized Packs", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/e-commerce-packaging/letterbox-sized-packs/"],
                    ["title" => "Returns & Resealable Packaging", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/e-commerce-packaging/returns-resealable-packaging/"],
                    ["title" => "Frustration-Free / Amazon-Compatible", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/e-commerce-packaging/frustration-free-amazon-compatible/"],
                ]
            ],

            "Shipping & Transport" => [
                "link" => "/product-category/corrugated-packaging/shipping-transport/",
                "image" => false,
                "items" => [
                    ["title" => "Standard Shipping Boxes", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/shipping-transport/standard-shipping-boxes/"],
                    ["title" => "Hazardous Goods / UN Certified", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/shipping-transport/hazardous-goods-un-certified/"],
                    ["title" => "Pallet Boxes & Large Containers", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/shipping-transport/pallet-boxes-large-containers/"],
                    ["title" => "Export / Moisture-Resistant", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/shipping-transport/export-moisture-resistant/"],
                ]
            ],

            "Wall Constructions" => [
                "link" => "/product-category/corrugated-packaging/wall-constructions/",
                "image" => false,
                "items" => [
                    ["title" => "Single Wall Boxes", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/wall-constructions/single-wall-boxes/"],
                    ["title" => "Double Wall Boxes", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/wall-constructions/double-wall-boxes/"],
                    ["title" => "Tri Wall Boxes", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/wall-constructions/tri-wall-boxes/"],
                    ["title" => "Custom Multi-Wall Options", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/wall-constructions/custom-multi-wall-options/"],
                ]
            ],

            "Slotted & Standard Boxes" => [
                "link" => "/product-category/corrugated-packaging/slotted-standard-boxes/",
                "image" => false,
                "items" => [
                    ["title" => "Regular Slotted Containers", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/slotted-standard-boxes/regular-slotted-containers/"],
                    ["title" => "Half Slotted Containers", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/slotted-standard-boxes/half-slotted-containers/"],
                    ["title" => "Full Overlap Slotted", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/slotted-standard-boxes/full-overlap-slotted/"],
                    ["title" => "Center Special Slotted", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/slotted-standard-boxes/center-special-slotted/"],
                    ["title" => "Heavy-Duty Shipping Containers", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/slotted-standard-boxes/heavy-duty-shipping-containers/"],
                ]
            ],

            "Functional & Automation-Friendly Boxes" => [
                "link" => "/product-category/corrugated-packaging/functional-automation-friendly-boxes/",
                "image" => false,
                "items" => [
                    ["title" => "Crash Lock Boxes", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/functional-automation-friendly-boxes/crash-lock-boxes/"],
                    ["title" => "Wrap Around Boxes", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/functional-automation-friendly-boxes/wrap-around-boxes/"],
                    ["title" => "Load-Sharing Wraparounds", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/functional-automation-friendly-boxes/load-sharing-wraparounds/"],
                    ["title" => "Wrap 8 / Multi-Sided Wraparounds", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/functional-automation-friendly-boxes/wrap-8-multi-sided-wraparounds/"],
                    ["title" => "SRP Split Wrap", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/functional-automation-friendly-boxes/srp-split-wrap/"],
                ]
            ],

            "Trays & Retail Ready Solutions" => [
                "link" => "/product-category/corrugated-packaging/trays-retail-ready-solutions/",
                "image" => false,
                "items" => [
                    ["title" => "Corrugated Trays", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/trays-retail-ready-solutions/corrugated-trays/"],
                    ["title" => "Retail Ready Packaging", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/trays-retail-ready-solutions/retail-ready-packaging/"],
                    ["title" => "Shelf-Ready Trays", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/trays-retail-ready-solutions/shelf-ready-trays/"],
                    ["title" => "High-Graphic Retail Boxes", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/trays-retail-ready-solutions/high-graphic-retail-boxes/"],
                ]
            ],

            "Bulk & Industrial Solutions" => [
                "link" => "/product-category/corrugated-packaging/bulk-industrial-solutions/",
                "image" => false,
                "items" => [
                    ["title" => "Bulk Bins & Containers", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/bulk-industrial-solutions/bulk-bins-containers/"],
                    ["title" => "Laminated Bulk Bins", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/bulk-industrial-solutions/laminated-bulk-bins/"],
                    ["title" => "Heavy-Duty Industrial Boxes", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/bulk-industrial-solutions/heavy-duty-industrial-boxes/"],
                    ["title" => "Protective Inserts & Dividers", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/bulk-industrial-solutions/protective-inserts-dividers/"],
                ]
            ],

            "Specialty Corrugated Packaging" => [
                "link" => "/product-category/corrugated-packaging/specialty-corrugated-packaging/",
                "image" => false,
                "items" => [
                    ["title" => "eCommerce Mailer Boxes", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/specialty-corrugated-packaging/ecommerce-mailer-boxes/"],
                    ["title" => "Bag-in-Box Outer Corrugated Boxes", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/specialty-corrugated-packaging/bag-in-box-outer-corrugated-boxes/"],
                    ["title" => "Display & Point-of-Sale Units", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/specialty-corrugated-packaging/display-point-of-sale-units/"],
                    ["title" => "Custom Die-Cut & Protective Packaging", "link" => "https://halepathpackaging.co.uk/product-category/corrugated-packaging/specialty-corrugated-packaging/custom-die-cut-protective-packaging/"],
                ]
            ],

        ]
    ],
    "flexible_packaging" => [
        "title" => "Flexible Packaging & Pouches",
        "link" => "/product-category/flexible-packaging-pouches/",
        "groups" => [
            "Flexible Flexible Packaging Bags" => [
                "link" => "/product-category/flexible-packaging-pouches/flexible-packaging-bags/",
                "image" => true,
                "items" => [
                    ["title" => "Stand Up Pouch", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/flexible-packaging-bags/stand-up-pouch/"],
                    ["title" => "Flat Bottom Pouch", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/flexible-packaging-bags/flat-bottom-pouch/"],
                    ["title" => "Mylar Bags", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/flexible-packaging-bags/mylar-bags/"],
                    ["title" => "Child Resistant Bags", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/flexible-packaging-bags/child-resistant-bags/"],
                    ["title" => "Shrink Sleeve Labels", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/flexible-packaging-bags/shrink-sleeve-labels/"],
                    ["title" => "Spout Pouch", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/flexible-packaging-bags/spout-pouch/"],
                    ["title" => "3 Side Seal Pouch", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/flexible-packaging-bags/3-side-seal-pouch/"],
                    ["title" => "Side Gusset Bags", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/flexible-packaging-bags/side-gusset-bags/"],
                    ["title" => "Shaped Pouch", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/flexible-packaging-bags/shaped-pouch/"],
                    ["title" => "Packaging Film Roll", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/flexible-packaging-bags/packaging-film-roll/"],
                    ["title" => "Kraft Paper Pouch", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/flexible-packaging-bags/kraft-paper-pouch/"],
                    ["title" => "Recyclable Pouches", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/flexible-packaging-bags/recyclable-pouches/"],
                    ["title" => "Biodegradable Pouches", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/flexible-packaging-bags/biodegradable-pouches/"],
                ]
            ],

            "Food Packaging" => [
                "link" => "/product-category/flexible-packaging-pouches/food-packaging/",
                "image" => false,
                "items" => [
                    ["title" => "Coffee Packaging", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/coffee-packaging/"],
                    ["title" => "Bakery & Confectionery", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/bakery-confectionery-food-packaging/"],
                    ["title" => "Chocolate Bar Packaging", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/chocolate-bar-packaging/"],
                    ["title" => "Candy & Sweets", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/candy-sweets/"],
                    ["title" => "Coffee & Tea Packaging", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/coffee-tea-packaging/"],
                    ["title" => "Beverages & Drinks", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/beverages-drinks/"],
                    ["title" => "Snacks & Chips", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/snacks-chips/"],
                    ["title" => "Frozen Foods", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/frozen-foods/"],
                    ["title" => "Dairy Products", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/dairy-products-food-packaging/"],
                    ["title" => "Wine & Spirits Pouch", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/wine-spirits-pouch/"],
                    ["title" => "Energy Drinks & Juice", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/energy-drinks-juice/"],
                    ["title" => "Ice Cream & Desserts", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/ice-cream-desserts/"],
                    ["title" => "Food Delivery Packaging", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/food-delivery-packaging/"],
                    ["title" => "Meal Kits", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/meal-kits/"],
                    ["title" => "Cannabis Packaging", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/cannabis-packaging/"],
                    ["title" => "Pet Food Packaging", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/pet-food-packaging/"],
                    ["title" => "Protein Powder Packaging", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/protein-powder-packaging/"],
                    ["title" => "Nuts Packaging", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/nuts-packaging/"],
                    ["title" => "Retort Pouch", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/retort-pouch/"],
                    ["title" => "Condiment Packaging", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/condiment-packaging/"],
                    ["title" => "Rice Pouches", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/rice-pouches/"],
                    ["title" => "Fish, Meat & Jerky Packaging", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/fish-meat-jerky-packaging/"],
                    ["title" => "Supplement & Protein Packaging", "link" => "https://halepathpackaging.co.uk/product-category/flexible-packaging-pouches/food-packaging/supplement-protein-packaging/"],
                ]
            ],

        ]
    ],
    "custom_packaging" => [
        "title" => "Custom Packaging Solution",
        "link" => "/product-category/custom-packaging-solution/",
        "groups" => [
            "Box Styles" => [
                "link" => "/product-category/custom-packaging-solution/box-styles/",
                "image" => true,
                "items" => [
                    ["title" => "Folding Carton Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/folding-carton-boxes/"],
                    ["title" => "Tuck End", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/tuck-end/"],
                    ["title" => "Auto Lock Bottom", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/auto-lock-bottom/"],
                    ["title" => "Snap Lock Bottom", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/snap-lock-bottom/"],
                    ["title" => "Seal End", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/seal-end/"],
                    ["title" => "Double Wall Tuck", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/double-wall-tuck/"],
                    ["title" => "Lock Cap Bottom", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/lock-cap-bottom/"],
                    ["title" => "Rigid & Premium Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/rigid-premium-boxes/"],
                    ["title" => "Window Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/window-boxes/"],
                    ["title" => "Pillow Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/pillow-boxes-box-styles/"],
                    ["title" => "Gable Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/gable-boxes/"],
                    ["title" => "Die-Cut & Custom Shape Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/die-cut-custom-shape-boxes/"],
                    ["title" => "Hanger Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/hanger-boxes/"],
                    ["title" => "Tray, Sleeve & Lid Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/tray-sleeve-lid-boxes/"],
                    ["title" => "Lid Off Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/lid-off-boxes/"],
                    ["title" => "Foot Lock Tray", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/foot-lock-tray-box-styles/"],
                    ["title" => "Mailer Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/mailer-boxes/"],
                    ["title" => "Display Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/display-boxes/"],
                    ["title" => "White Cardboard Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/white-cardboard-boxes/"],
                    ["title" => "Corrugated Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/corrugated-boxes-box-styles/"],
                    ["title" => "Holographic Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/holographic-boxes/"],
                    ["title" => "Paper / Kraft Bags", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/paper-kraft-bags/"],
                    ["title" => "Shopping Bags", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/shopping-bags/"],
                    ["title" => "Stand-Up Pouches", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/box-styles/stand-up-pouches/"],
                ]
            ],

            "By Industry" => [
                "link" => "/product-category/custom-packaging-solution/by-industry/",
                "image" => false,
                "items" => [
                    ["title" => "CBD & Cannabis", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-industry/cbd-cannabis/"],
                    ["title" => "Cosmetic Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-industry/cosmetic-boxes-by-industry/"],
                    ["title" => "Candle Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-industry/candle-boxes/"],
                    ["title" => "Food & Beverage", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-industry/food-beverage/"],
                    ["title" => "Tobacco Products", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-industry/tobacco-products/"],
                    ["title" => "Cigarette Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-industry/cigarette-boxes/"],
                    ["title" => "Child Resistant Packaging", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-industry/child-resistant-packaging/"],
                    ["title" => "Apparel & Fashion", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-industry/apparel-fashion/"],
                    ["title" => "Pharmaceutical & Healthcare", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-industry/pharmaceutical-healthcare/"],
                    ["title" => "Pet Products", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-industry/pet-products/"],
                    ["title" => "Electronics & Gadgets", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-industry/electronics-gadgets/"],
                    ["title" => "Toys & Games", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-industry/toys-games/"],
                    ["title" => "Automotive & Office", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-industry/automotive-office/"],
                    ["title" => "Stationery & Pen Boxes", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-industry/stationery-pen-boxes/"],
                ]
            ],

            "By Purpose" => [
                "link" => "/product-category/custom-packaging-solution/by-purpose/",
                "image" => false,
                "items" => [
                    ["title" => "Retail & Display", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-purpose/retail-display/"],
                    ["title" => "Shipping & E-commerce", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-purpose/shipping-e-commerce/"],
                    ["title" => "Gift & Presentation", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-purpose/gift-presentation/"],
                    ["title" => "Product Protection", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-purpose/product-protection/"],
                    ["title" => "Food & Beverage", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-purpose/food-beverage-by-purpose/"],
                    ["title" => "Industrial & Bulk", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-purpose/industrial-bulk/"],
                    ["title" => "Promotional Packaging", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-purpose/promotional-packaging/"],
                    ["title" => "Seasonal & Event", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/by-purpose/seasonal-event/"],
                ]
            ],

            "Materials" => [
                "link" => "/product-category/custom-packaging-solution/materials/",
                "image" => false,
                "items" => [
                    ["title" => "Core Materials", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/materials/core-materials/"],
                    ["title" => "Kraft Paper", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/materials/kraft-paper/"],
                    ["title" => "Cardboard / Paperboard", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/materials/cardboard-paperboard/"],
                    ["title" => "Corrugated Board", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/materials/corrugated-board/"],
                    ["title" => "Rigid Board", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/materials/rigid-board/"],
                    ["title" => "Bux Board", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/materials/bux-board/"],
                    ["title" => "Eco-Friendly Materials", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/materials/eco-friendly-materials/"],
                    ["title" => "Recyclable Materials", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/materials/recyclable-materials/"],
                    ["title" => "Biodegradable Packaging", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/materials/biodegradable-packaging/"],
                    ["title" => "FSC-Certified Paper", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/materials/fsc-certified-paper/"],
                ]
            ],

            "Services" => [
                "link" => "/product-category/custom-packaging-solution/services/",
                "image" => false,
                "items" => [
                    ["title" => "Design & Sampling", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/services/design-sampling/"],
                    ["title" => "Production & Orders", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/services/production-orders/"],
                    ["title" => "Logistics & Support", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/services/logistics-support/"],
                    ["title" => "Printing & Finishing", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/services/printing-finishing/"],
                    ["title" => "Foil Stamping", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/services/foil-stamping/"],
                    ["title" => "Embossing / Debossing", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/services/embossing-debossing/"],
                    ["title" => "Lamination & Varnish", "link" => "https://halepathpackaging.co.uk/product-category/custom-packaging-solution/services/lamination-varnish/"],
                ]
            ],

        ]
    ],
    "commercial_printing" => [
        "title" => "Commercial Printing",
        "link" => "commercial-printing/",
        "groups" => [
            "Offset Printing (Lithography)" => [
                "link" => "/product-category/commercial-printing/offset-printing-lithography/",
                "image" => true,
                "items" => [
                    ["title" => "Digital Printing", "link" => "https://halepathpackaging.co.uk/product-category/commercial-printing/offset-printing-lithography/digital-printing/", "image" => true],
                    ["title" => "Flexographic Printing (Flexo)", "link" => "https://halepathpackaging.co.uk/product-category/commercial-printing/offset-printing-lithography/flexographic-printing-flexo/"],
                    ["title" => "Gravure Printing (Flexible Packaging)", "link" => "https://halepathpackaging.co.uk/product-category/commercial-printing/offset-printing-lithography/gravure-printing-flexible-packaging/"],
                    ["title" => "Spot UV", "link" => "https://halepathpackaging.co.uk/product-category/commercial-printing/offset-printing-lithography/spot-uv-offset-printing-lithography/"],
                    ["title" => "Screen Printing", "link" => "https://halepathpackaging.co.uk/product-category/commercial-printing/offset-printing-lithography/screen-printing/"],
                    ["title" => "Letterpress (Specialty)", "link" => "https://halepathpackaging.co.uk/product-category/commercial-printing/offset-printing-lithography/letterpress-specialty/"],
                    ["title" => "UV Offset Printing", "link" => "https://halepathpackaging.co.uk/product-category/commercial-printing/offset-printing-lithography/uv-offset-printing/"],
                    ["title" => "Foil Printing", "link" => "https://halepathpackaging.co.uk/product-category/commercial-printing/offset-printing-lithography/foil-printing/"],
                ],
            ],
        ]
    ],
    "print_advertising" => [
        "title" => "Print & Advertising",
        "link" => "/product-category/print-advertising/",
        "groups" => [

            "Office Supplies" => [
                "link" => "/product-category/print-advertising/office-supplies/",
                "image" => true,
                "items" => [
                    ["title" => "Workspace Accessories", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/office-supplies/workspace-accessories/"],
                    ["title" => "Pens, Pencils & Markers", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/office-supplies/pens-pencils-markers/"],
                    ["title" => "Notes & Badge Holders", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/office-supplies/notes-badge-holders/"],
                ]
            ],

            "Business Cards" => [
                "link" => "/product-category/print-advertising/business-cards/",
                "image" => false,
                "items" => [
                    ["title" => "Standard Card", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/business-cards/standard-card/"],
                    ["title" => "Premium Card", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/business-cards/premium-card/"],
                    ["title" => "Deluxe Card", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/business-cards/deluxe-card/"],
                    ["title" => "Magnetic Business Card", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/business-cards/magnetic-business-card/"],
                    ["title" => "Loyalty Card", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/business-cards/loyalty-card/"],
                ]
            ],

            "Postcards" => [
                "link" => "/product-category/print-advertising/postcards/",
                "image" => false,
                "items" => [
                    ["title" => "Standard Postcard", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/postcards/standard-postcard/"],
                    ["title" => "Die Cut Postcard", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/postcards/die-cut-postcard/"],
                    ["title" => "Rounded Corner Postcard", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/postcards/rounded-corner-postcard/"],
                    ["title" => "Mailing Postcard", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/postcards/mailing-postcard/"],
                    ["title" => "EDDM Postcard", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/postcards/eddm-postcard/"],
                ]
            ],

            "Marketing Materials" => [
                "link" => "/product-category/print-advertising/marketing-materials/",
                "image" => false,
                "items" => [
                    ["title" => "Flyers", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/marketing-materials/flyers/"],
                    ["title" => "Brochures", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/marketing-materials/brochures/"],
                    ["title" => "Folders", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/marketing-materials/folders/"],
                    ["title" => "Rack Cards", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/marketing-materials/rack-cards/"],
                    ["title" => "Door Hangers", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/marketing-materials/door-hangers/"],
                    ["title" => "Custom Tickets", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/marketing-materials/custom-tickets/"],
                    ["title" => "Gift Certificates", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/marketing-materials/gift-certificates/"],
                ]
            ],

            "Business Stationery" => [
                "link" => "/product-category/print-advertising/business-stationery/",
                "image" => false,
                "items" => [
                    ["title" => "Shipping Mailers & Envelopes", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/business-stationery/shipping-mailers-envelopes/"],
                    ["title" => "Letterheads", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/business-stationery/letterheads/"],
                    ["title" => "Business Invitations", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/business-stationery/business-invitations/"],
                    ["title" => "Calendars, Stamps & Ink", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/business-stationery/calendars-stamps-ink/"],
                ]
            ],

            "Banners & Displays" => [
                "link" => "/product-category/print-advertising/banners-displays/",
                "image" => false,
                "items" => [
                    ["title" => "Hanging Banner", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/banners-displays/hanging-banner/"],
                    ["title" => "Standing Banner", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/banners-displays/standing-banner/"],
                    ["title" => "Table Covers", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/banners-displays/table-covers/"],
                    ["title" => "Display & Tent", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/banners-displays/display-tent/"],
                    ["title" => "Portable Counter", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/banners-displays/portable-counter/"],
                ]
            ],

            "Decals & Signage" => [
                "link" => "/product-category/print-advertising/decals-signage/",
                "image" => false,
                "items" => [
                    ["title" => "Wall & Window Decals", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/decals-signage/wall-window-decals/"],
                    ["title" => "Car Decals & Magnets", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/decals-signage/car-decals-magnets/"],
                    ["title" => "Yard Signs", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/decals-signage/yard-signs/"],
                    ["title" => "Rigid Signs & Boards", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/decals-signage/rigid-signs-boards/"],
                    ["title" => "Canvas Prints & Wall Art", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/decals-signage/canvas-prints-wall-art/"],
                    ["title" => "A-Frame & Desk Signs", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/decals-signage/a-frame-desk-signs/"],
                ]
            ],

            "Labels & Stickers" => [
                "link" => "/product-category/print-advertising/labels-stickers/",
                "image" => false,
                "items" => [
                    ["title" => "Sticker Singles", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/labels-stickers/sticker-singles/"],
                    ["title" => "Die-Cut Stickers", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/labels-stickers/die-cut-stickers/"],
                    ["title" => "Kiss-Cut Stickers", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/labels-stickers/kiss-cut-stickers/"],
                    ["title" => "Sheet Stickers", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/labels-stickers/sheet-stickers/"],
                    ["title" => "Product Stickers on Sheet", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/labels-stickers/product-stickers-on-sheet/"],
                    ["title" => "Return Address Labels", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/labels-stickers/return-address-labels/"],
                    ["title" => "Roll Label Stickers", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/labels-stickers/roll-label-stickers/"],
                    ["title" => "Die-Cut Sticker Rolls", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/labels-stickers/die-cut-sticker-rolls/"],
                ]
            ],

            "Promotional Products" => [
                "link" => "/product-category/print-advertising/promotional-products/",
                "image" => false,
                "items" => [
                    ["title" => "Booklet Catalogs", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/promotional-products/booklet-catalogs/"],
                    ["title" => "Clothing", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/promotional-products/clothing/"],
                    ["title" => "Hats", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/promotional-products/hats/"],
                    ["title" => "Drinkware", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/promotional-products/drinkware/"],
                    ["title" => "Snacks & Candy", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/promotional-products/snacks-candy/"],
                    ["title" => "Lifestyle & Personal Items", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/promotional-products/lifestyle-personal-items/"],
                ]
            ],

            "Invitations, Cards & Gifts" => [
                "link" => "/product-category/print-advertising/invitations-cards-gifts/",
                "image" => false,
                "items" => [
                    ["title" => "Invitations & Announcements", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/invitations-cards-gifts/invitations-announcements/"],
                    ["title" => "Party Invitations", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/invitations-cards-gifts/party-invitations/"],
                    ["title" => "Thank You & Holiday Cards", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/invitations-cards-gifts/thank-you-holiday-cards/"],
                    ["title" => "Corporate Gifts", "link" => "https://halepathpackaging.co.uk/product-category/print-advertising/invitations-cards-gifts/corporate-gifts/"],
                ]
            ],

        ]
    ],
    "innovation" => [
        "title" => "Innovation",
        "link" => "/product-category/innovation/",
        "groups" => [
            "Branded Finishes" => [
                "link" => "/product-category/innovation/branded-finishes-innovation/",
                "image" => true,
                "items" => [
                    ["title" => "UV Printing Technology", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/uv-printing-technology/", "image" => true],
                    ["title" => "Foil Printing Solutions", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/foil-printing-solutions/"],
                    ["title" => "Privacy Printing", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/privacy-printing/"],
                    ["title" => "Research & Development (R&D)", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/research-development-rd/"],
                    ["title" => "Sustainable Innovation", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/sustainable-innovation/"],
                    ["title" => "Material Innovation", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/material-innovation/"],
                    ["title" => "Structural Innovation", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/structural-innovation/"],
                    ["title" => "Smart Packaging Technology", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/smart-packaging-technology/"],
                    ["title" => "Digital Printing Advancement", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/digital-printing-advancement/"],
                    ["title" => "Surface Coating Technology", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/surface-coating-technology/"],
                    ["title" => "Security Printing Solutions", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/security-printing-solutions/"],
                    ["title" => "Prototype Development", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/prototype-development/"],
                    ["title" => "Automation & Technology Integration", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/automation-technology-integration/"],
                    ["title" => "Color Management Systems", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/color-management-systems/"],
                    ["title" => "Experience Centers", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/experience-centers/"],
                    ["title" => "Client Success Stories", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/client-success-stories/"],
                    ["title" => "Blogs", "link" => "https://halepathpackaging.co.uk/product-category/innovation/branded-finishes-innovation/blogs/"],
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
                            data-mega-target="megaMenu-<?php echo $key; ?>" <?php endif; ?> <?php if ($isDropdown): ?>
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
                class="megaMenu hidden lg:absolute left-1/2 -translate-x-1/2 2xl:top-[74px]  top-[94px] hale_container mx-auto  z-50 overflow-y-auto min-h-[65vh] h-full">
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
                            <li class="mainCat flex items-center gap-2 py-5 px-5 " data-index="<?php echo $i; ?>">
                                <a href="<?php echo esc_url($items['link']); ?>"
                                    class="text-sm capitalize text-white cursor-pointer flex items-center gap-2">
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
                                <li class="py-[18px] px-5">
                                    <a href="<?php echo esc_url($item['link']); ?>"
                                        class="text-sm capitalize text-white hover:text-primary">
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
        jQuery(document).ready(function($) {
            $('#live-search').on('keyup', function() {
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
                    success: function(res) {
                        $('#live-search-results').removeClass('hidden').html(res);
                    }
                });

            });

        });
        </script>