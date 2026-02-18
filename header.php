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
    "flexible_packaging" => [
        "title" => "Flexible Packaging & Pouches",
        "link" => "/flexible-packaging",
        "groups" => [
            "Flexible Packaging Bags" => [
                "link" => "/flexible-packaging/bags",
                 "image" => true,
                "items" => [
                    ["title" => "Stand Up Pouch", "link" => "/flexible-packaging/bags/stand-up"],
                    ["title" => "Flat Bottom Pouch", "link" => "/flexible-packaging/bags/flat-bottom"],
                    ["title" => "Mylar Bags", "link" => "/flexible-packaging/bags/mylar"],
                    ["title" => "Child Resistant Bags", "link" => "/flexible-packaging/bags/child-resistant"],
                    ["title" => "Shrink Sleeve Labels", "link" => "/flexible-packaging/bags/shrink-sleeve"],
                    ["title" => "Spout Pouch", "link" => "/flexible-packaging/bags/spout"],
                    ["title" => "3 Side Seal Pouch", "link" => "/flexible-packaging/bags/3-side-seal"],
                    ["title" => "Side Gusset Bags", "link" => "/flexible-packaging/bags/side-gusset"],
                    ["title" => "Shaped Pouch", "link" => "/flexible-packaging/bags/shaped"],
                    ["title" => "Packaging Film Roll", "link" => "/flexible-packaging/bags/film-roll"],
                    ["title" => "Kraft Paper Pouch", "link" => "/flexible-packaging/bags/kraft"],
                    ["title" => "Recyclable Pouches", "link" => "/flexible-packaging/bags/recyclable"],
                    ["title" => "Biodegradable Pouches", "link" => "/flexible-packaging/bags/biodegradable"],
                ]
            ],

            "Food Packaging" => [
                "link" => "/flexible-packaging/food",
                "image" => false,
                "items" => [
                    ["title" => "Coffee Packaging", "link" => "/flexible-packaging/food/coffee"],
                    ["title" => "Bakery & Confectionery", "link" => "/flexible-packaging/food/bakery"],
                    ["title" => "Chocolate Bar Packaging", "link" => "/flexible-packaging/food/chocolate"],
                    ["title" => "Candy & Sweets", "link" => "/flexible-packaging/food/candy"],
                    ["title" => "Coffee & Tea Packaging", "link" => "/flexible-packaging/food/coffee-tea"],
                    ["title" => "Beverages & Drinks", "link" => "/flexible-packaging/food/beverages"],
                    ["title" => "Snacks & Chips", "link" => "/flexible-packaging/food/snacks"],
                    ["title" => "Frozen Foods", "link" => "/flexible-packaging/food/frozen"],
                    ["title" => "Dairy Products", "link" => "/flexible-packaging/food/dairy"],
                    ["title" => "Wine & Spirits Pouch", "link" => "/flexible-packaging/food/wine"],
                    ["title" => "Energy Drinks & Juice", "link" => "/flexible-packaging/food/energy"],
                    ["title" => "Ice Cream & Desserts", "link" => "/flexible-packaging/food/ice-cream"],
                    ["title" => "Food Delivery Packaging", "link" => "/flexible-packaging/food/delivery"],
                    ["title" => "Meal Kits", "link" => "/flexible-packaging/food/meal-kits"],
                    ["title" => "Cannabis Packaging", "link" => "/flexible-packaging/food/cannabis"],
                    ["title" => "Pet Food Packaging", "link" => "/flexible-packaging/food/pet"],
                    ["title" => "Protein Powder Packaging", "link" => "/flexible-packaging/food/protein"],
                    ["title" => "Nuts Packaging", "link" => "/flexible-packaging/food/nuts"],
                    ["title" => "Retort Pouch", "link" => "/flexible-packaging/food/retort"],
                    ["title" => "Condiment Packaging", "link" => "/flexible-packaging/food/condiment"],
                    ["title" => "Rice Pouches", "link" => "/flexible-packaging/food/rice"],
                    ["title" => "Fish, Meat & Jerky Packaging", "link" => "/flexible-packaging/food/meat"],
                    ["title" => "Supplement & Protein Packaging", "link" => "/flexible-packaging/food/supplement"],
                ]
            ],

        ]
    ],
    "custom_packaging" => [
        "title" => "Custom Packaging",
        "link" => "/custom-packaging",
        "groups" => [
            "Box Styles" => [
                "link" => "/custom-packaging/box-styles",
                  "image" => true,
                "items" => [
                    ["title" => "Folding Carton Boxes", "link" => "/custom-packaging/box-styles/folding-carton"],
                    ["title" => "Tuck End", "link" => "/custom-packaging/box-styles/tuck-end"],
                    ["title" => "Auto Lock Bottom", "link" => "/custom-packaging/box-styles/auto-lock"],
                    ["title" => "Snap Lock Bottom", "link" => "/custom-packaging/box-styles/snap-lock"],
                    ["title" => "Seal End", "link" => "/custom-packaging/box-styles/seal-end"],
                    ["title" => "Double Wall Tuck", "link" => "/custom-packaging/box-styles/double-wall"],
                    ["title" => "Lock Cap Bottom", "link" => "/custom-packaging/box-styles/lock-cap"],
                    ["title" => "Rigid & Premium Boxes", "link" => "/custom-packaging/box-styles/rigid"],
                    ["title" => "Window Boxes", "link" => "/custom-packaging/box-styles/window"],
                    ["title" => "Pillow Boxes", "link" => "/custom-packaging/box-styles/pillow"],
                    ["title" => "Gable Boxes", "link" => "/custom-packaging/box-styles/gable"],
                    ["title" => "Die-Cut & Custom Shape Boxes", "link" => "/custom-packaging/box-styles/die-cut"],
                    ["title" => "Hanger Boxes", "link" => "/custom-packaging/box-styles/hanger"],
                    ["title" => "Tray, Sleeve & Lid Boxes", "link" => "/custom-packaging/box-styles/tray-sleeve"],
                    ["title" => "Lid Off Boxes", "link" => "/custom-packaging/box-styles/lid-off"],
                    ["title" => "Foot Lock Tray", "link" => "/custom-packaging/box-styles/foot-lock"],
                    ["title" => "Mailer Boxes", "link" => "/custom-packaging/box-styles/mailer"],
                    ["title" => "Display Boxes", "link" => "/custom-packaging/box-styles/display"],
                    ["title" => "White Cardboard Boxes", "link" => "/custom-packaging/box-styles/white-cardboard"],
                    ["title" => "Corrugated Boxes", "link" => "/custom-packaging/box-styles/corrugated"],
                    ["title" => "Holographic Boxes", "link" => "/custom-packaging/box-styles/holographic"],
                    ["title" => "Paper / Kraft Bags", "link" => "/custom-packaging/box-styles/kraft-bags"],
                    ["title" => "Shopping Bags", "link" => "/custom-packaging/box-styles/shopping-bags"],
                    ["title" => "Stand-Up Pouches", "link" => "/custom-packaging/box-styles/standup-pouches"],
                ]
            ],

            "By Industry" => [
                "link" => "/custom-packaging/by-industry",
                "image" => false,
                "items" => [
                    ["title" => "CBD & Cannabis", "link" => "/custom-packaging/industry/cbd"],
                    ["title" => "Cosmetic Boxes", "link" => "/custom-packaging/industry/cosmetics"],
                    ["title" => "Candle Boxes", "link" => "/custom-packaging/industry/candles"],
                    ["title" => "Food & Beverage", "link" => "/custom-packaging/industry/food"],
                    ["title" => "Tobacco Products", "link" => "/custom-packaging/industry/tobacco"],
                    ["title" => "Cigarette Boxes", "link" => "/custom-packaging/industry/cigarette"],
                    ["title" => "Child Resistant Packaging", "link" => "/custom-packaging/industry/child-resistant"],
                    ["title" => "Apparel & Fashion", "link" => "/custom-packaging/industry/apparel"],
                    ["title" => "Pharmaceutical & Healthcare", "link" => "/custom-packaging/industry/pharma"],
                    ["title" => "Pet Products", "link" => "/custom-packaging/industry/pet"],
                    ["title" => "Electronics & Gadgets", "link" => "/custom-packaging/industry/electronics"],
                    ["title" => "Toys & Games", "link" => "/custom-packaging/industry/toys"],
                    ["title" => "Automotive & Office", "link" => "/custom-packaging/industry/automotive"],
                    ["title" => "Stationery & Pen Boxes", "link" => "/custom-packaging/industry/stationery"],
                ]
            ],

            "By Purpose" => [
                "link" => "/custom-packaging/by-purpose",
                "image" => false,
                "items" => [
                    ["title" => "Retail & Display", "link" => "/custom-packaging/purpose/retail"],
                    ["title" => "Shipping & E-commerce", "link" => "/custom-packaging/purpose/shipping"],
                    ["title" => "Gift & Presentation", "link" => "/custom-packaging/purpose/gift"],
                    ["title" => "Product Protection", "link" => "/custom-packaging/purpose/protection"],
                    ["title" => "Food & Beverage", "link" => "/custom-packaging/purpose/food"],
                    ["title" => "Industrial & Bulk", "link" => "/custom-packaging/purpose/industrial"],
                    ["title" => "Promotional Packaging", "link" => "/custom-packaging/purpose/promotional"],
                    ["title" => "Seasonal & Event", "link" => "/custom-packaging/purpose/seasonal"],
                ]
            ],

            "Materials" => [
                "link" => "/custom-packaging/materials",
                "image" => false,
                "items" => [
                    ["title" => "Core Materials", "link" => "/custom-packaging/materials/core"],
                    ["title" => "Kraft Paper", "link" => "/custom-packaging/materials/kraft"],
                    ["title" => "Cardboard / Paperboard", "link" => "/custom-packaging/materials/cardboard"],
                    ["title" => "Corrugated Board", "link" => "/custom-packaging/materials/corrugated"],
                    ["title" => "Rigid Board", "link" => "/custom-packaging/materials/rigid"],
                    ["title" => "Bux Board", "link" => "/custom-packaging/materials/bux"],
                    ["title" => "Eco-Friendly Materials", "link" => "/custom-packaging/materials/eco"],
                    ["title" => "Recyclable Materials", "link" => "/custom-packaging/materials/recyclable"],
                    ["title" => "Biodegradable Packaging", "link" => "/custom-packaging/materials/biodegradable"],
                    ["title" => "FSC-Certified Paper", "link" => "/custom-packaging/materials/fsc"],
                ]
            ],

            "Services" => [
                "link" => "/custom-packaging/services",
                "image" => false,
                "items" => [
                    ["title" => "Design & Sampling", "link" => "/custom-packaging/services/design"],
                    ["title" => "Production & Orders", "link" => "/custom-packaging/services/production"],
                    ["title" => "Logistics & Support", "link" => "/custom-packaging/services/logistics"],
                    ["title" => "Printing & Finishing", "link" => "/custom-packaging/services/printing"],
                    ["title" => "Foil Stamping", "link" => "/custom-packaging/services/foil"],
                    ["title" => "Embossing / Debossing", "link" => "/custom-packaging/services/emboss"],
                    ["title" => "Lamination & Varnish", "link" => "/custom-packaging/services/lamination"],
                ]
            ],

        ]
    ],
    "corrugated_packaging" => [
        "title" => "Corrugated Packaging",
        "link" => "/corrugated-packaging",
        "groups" => [
            "Food & Beverage Packaging" => [
                "link" => "/corrugated-packaging/food",
                  "image" => true,
                "items" => [
                    ["title" => "Fresh Produce", "link" => "/corrugated-packaging/food/fresh-produce"],
                    ["title" => "Frozen & Chilled", "link" => "/corrugated-packaging/food/frozen"],
                    ["title" => "Bakery & Confectionery", "link" => "/corrugated-packaging/food/bakery"],
                    ["title" => "Meat, Poultry & Seafood", "link" => "/corrugated-packaging/food/meat"],
                    ["title" => "Dairy Products", "link" => "/corrugated-packaging/food/dairy"],
                    ["title" => "Dry / Cupboard Foods", "link" => "/corrugated-packaging/food/dry"],
                ]
            ],

            "Beverage Multipacks & Systems" => [
                "link" => "/corrugated-packaging/beverage",
                "image" => false,
                "items" => [
                    ["title" => "Bottle Carriers", "link" => "/corrugated-packaging/beverage/bottle"],
                    ["title" => "Can Multipacks", "link" => "/corrugated-packaging/beverage/cans"],
                    ["title" => "Bag-in-Box Outer Packaging", "link" => "/corrugated-packaging/beverage/bag-in-box"],
                    ["title" => "Plastic-Free Carriers", "link" => "/corrugated-packaging/beverage/plastic-free"],
                ]
            ],

            "E-Commerce Packaging" => [
                "link" => "/corrugated-packaging/ecommerce",
                "image" => false,
                "items" => [
                    ["title" => "Standard Mailing Boxes", "link" => "/corrugated-packaging/ecommerce/mailing"],
                    ["title" => "Crash-Lock Mailers", "link" => "/corrugated-packaging/ecommerce/crash-lock"],
                    ["title" => "Pizza-Style / Flat Postal Boxes", "link" => "/corrugated-packaging/ecommerce/pizza"],
                    ["title" => "Letterbox-Sized Packs", "link" => "/corrugated-packaging/ecommerce/letterbox"],
                    ["title" => "Returns & Resealable Packaging", "link" => "/corrugated-packaging/ecommerce/returns"],
                    ["title" => "Frustration-Free / Amazon-Compatible", "link" => "/corrugated-packaging/ecommerce/sioc"],
                ]
            ],

            "Shipping & Transport" => [
                "link" => "/corrugated-packaging/shipping",
                "image" => false,
                "items" => [
                    ["title" => "Standard Shipping Boxes", "link" => "/corrugated-packaging/shipping/standard"],
                    ["title" => "Hazardous Goods / UN Certified", "link" => "/corrugated-packaging/shipping/hazardous"],
                    ["title" => "Pallet Boxes & Large Containers", "link" => "/corrugated-packaging/shipping/pallet"],
                    ["title" => "Export / Moisture-Resistant", "link" => "/corrugated-packaging/shipping/export"],
                ]
            ],

            "Wall Constructions" => [
                "link" => "/corrugated-packaging/walls",
                "image" => false,
                "items" => [
                    ["title" => "Single Wall Boxes", "link" => "/corrugated-packaging/walls/single"],
                    ["title" => "Double Wall Boxes", "link" => "/corrugated-packaging/walls/double"],
                    ["title" => "Tri Wall Boxes", "link" => "/corrugated-packaging/walls/tri"],
                    ["title" => "Custom Multi-Wall Options", "link" => "/corrugated-packaging/walls/custom"],
                ]
            ],

            "Slotted & Standard Boxes" => [
                "link" => "/corrugated-packaging/slotted",
                "image" => false,
                "items" => [
                    ["title" => "Regular Slotted Containers", "link" => "/corrugated-packaging/slotted/rsc"],
                    ["title" => "Half Slotted Containers", "link" => "/corrugated-packaging/slotted/hsc"],
                    ["title" => "Full Overlap Slotted", "link" => "/corrugated-packaging/slotted/fol"],
                    ["title" => "Center Special Slotted", "link" => "/corrugated-packaging/slotted/css"],
                    ["title" => "Heavy-Duty Shipping Containers", "link" => "/corrugated-packaging/slotted/heavy"],
                ]
            ],

            "Functional & Automation-Friendly Boxes" => [
                "link" => "/corrugated-packaging/automation",
                "image" => false,
                "items" => [
                    ["title" => "Crash Lock Boxes", "link" => "/corrugated-packaging/automation/crash-lock"],
                    ["title" => "Wrap Around Boxes", "link" => "/corrugated-packaging/automation/wrap"],
                    ["title" => "Load-Sharing Wraparounds", "link" => "/corrugated-packaging/automation/load-sharing"],
                    ["title" => "Wrap 8 / Multi-Sided Wraparounds", "link" => "/corrugated-packaging/automation/wrap8"],
                    ["title" => "SRP Split Wrap", "link" => "/corrugated-packaging/automation/srp"],
                ]
            ],

            "Trays & Retail Ready Solutions" => [
                "link" => "/corrugated-packaging/trays",
                "image" => false,
                "items" => [
                    ["title" => "Corrugated Trays", "link" => "/corrugated-packaging/trays/corrugated"],
                    ["title" => "Retail Ready Packaging", "link" => "/corrugated-packaging/trays/retail"],
                    ["title" => "Shelf-Ready Trays", "link" => "/corrugated-packaging/trays/shelf"],
                    ["title" => "High-Graphic Retail Boxes", "link" => "/corrugated-packaging/trays/graphic"],
                ]
            ],

            "Bulk & Industrial Solutions" => [
                "link" => "/corrugated-packaging/bulk",
                "image" => false,
                "items" => [
                    ["title" => "Bulk Bins & Containers", "link" => "/corrugated-packaging/bulk/bins"],
                    ["title" => "Laminated Bulk Bins", "link" => "/corrugated-packaging/bulk/laminated"],
                    ["title" => "Heavy-Duty Industrial Boxes", "link" => "/corrugated-packaging/bulk/industrial"],
                    ["title" => "Protective Inserts & Dividers", "link" => "/corrugated-packaging/bulk/inserts"],
                ]
            ],

            "Specialty Corrugated Packaging" => [
                "link" => "/corrugated-packaging/specialty",
                "image" => false,
                "items" => [
                    ["title" => "eCommerce Mailer Boxes", "link" => "/corrugated-packaging/specialty/mailers"],
                    ["title" => "Bag-in-Box Outer Corrugated Boxes", "link" => "/corrugated-packaging/specialty/bag-box"],
                    ["title" => "Display & Point-of-Sale Units", "link" => "/corrugated-packaging/specialty/pos"],
                    ["title" => "Custom Die-Cut & Protective Packaging", "link" => "/corrugated-packaging/specialty/diecut"],
                ]
            ],

        ]
    ],
    "commercial_printing" => [
        "title" => "Commercial Printing",
        "link" => "/commercial-printing",
        "items" => [
            ["title" => "Offset Printing (Lithography)", "link" => "/commercial-printing/offset", "image" => true],
            ["title" => "Digital Printing", "link" => "/commercial-printing/digital", "image" => true],
            ["title" => "Flexographic Printing (Flexo)", "link" => "/commercial-printing/flexo"],
            ["title" => "Gravure Printing (Flexible Packaging)", "link" => "/commercial-printing/gravure"],
            ["title" => "Spot UV", "link" => "/commercial-printing/spot-uv"],
            ["title" => "Screen Printing", "link" => "/commercial-printing/screen"],
            ["title" => "Letterpress (Specialty)", "link" => "/commercial-printing/letterpress"],
            ["title" => "UV Offset Printing", "link" => "/commercial-printing/uv-offset"],
            ["title" => "Foil Printing", "link" => "/commercial-printing/foil"],
        ],
    ],
    "print_advertising" => [
        "title" => "Print & Advertising",
        "link" => "/print-advertising",
        "groups" => [

            "Office Supplies" => [
                "link" => "/print-advertising/office",
                  "image" => true,
                "items" => [
                    ["title" => "Workspace Accessories", "link" => "/print-advertising/office/workspace"],
                    ["title" => "Pens, Pencils & Markers", "link" => "/print-advertising/office/pens"],
                    ["title" => "Notes & Badge Holders", "link" => "/print-advertising/office/notes"],
                ]
            ],

            "Business Cards" => [
                "link" => "/print-advertising/business-cards",
                "image" => false,
                "items" => [
                    ["title" => "Standard Card", "link" => "/print-advertising/business-cards/standard"],
                    ["title" => "Premium Card", "link" => "/print-advertising/business-cards/premium"],
                    ["title" => "Deluxe Card", "link" => "/print-advertising/business-cards/deluxe"],
                    ["title" => "Magnetic Business Card", "link" => "/print-advertising/business-cards/magnetic"],
                    ["title" => "Loyalty Card", "link" => "/print-advertising/business-cards/loyalty"],
                ]
            ],

            "Postcards" => [
                "link" => "/print-advertising/postcards",
                "image" => false,
                "items" => [
                    ["title" => "Standard Postcard", "link" => "/print-advertising/postcards/standard"],
                    ["title" => "Die Cut Postcard", "link" => "/print-advertising/postcards/die-cut"],
                    ["title" => "Rounded Corner Postcard", "link" => "/print-advertising/postcards/rounded"],
                    ["title" => "Mailing Postcard", "link" => "/print-advertising/postcards/mailing"],
                    ["title" => "EDDM Postcard", "link" => "/print-advertising/postcards/eddm"],
                ]
            ],

            "Marketing Materials" => [
                "link" => "/print-advertising/marketing",
                "image" => false,
                "items" => [
                    ["title" => "Flyers", "link" => "/print-advertising/marketing/flyers"],
                    ["title" => "Brochures", "link" => "/print-advertising/marketing/brochures"],
                    ["title" => "Folders", "link" => "/print-advertising/marketing/folders"],
                    ["title" => "Rack Cards", "link" => "/print-advertising/marketing/rack"],
                    ["title" => "Door Hangers", "link" => "/print-advertising/marketing/door"],
                    ["title" => "Custom Tickets", "link" => "/print-advertising/marketing/tickets"],
                    ["title" => "Gift Certificates", "link" => "/print-advertising/marketing/gift"],
                ]
            ],

            "Business Stationery" => [
                "link" => "/print-advertising/stationery",
                "image" => false,
                "items" => [
                    ["title" => "Shipping Mailers & Envelopes", "link" => "/print-advertising/stationery/mailers"],
                    ["title" => "Letterheads", "link" => "/print-advertising/stationery/letterheads"],
                    ["title" => "Business Invitations", "link" => "/print-advertising/stationery/invitations"],
                    ["title" => "Calendars, Stamps & Ink", "link" => "/print-advertising/stationery/calendar"],
                ]
            ],

            "Banners & Displays" => [
                "link" => "/print-advertising/banners",
                "image" => false,
                "items" => [
                    ["title" => "Hanging Banner", "link" => "/print-advertising/banners/hanging"],
                    ["title" => "Standing Banner", "link" => "/print-advertising/banners/standing"],
                    ["title" => "Table Covers", "link" => "/print-advertising/banners/table"],
                    ["title" => "Display & Tent", "link" => "/print-advertising/banners/tent"],
                    ["title" => "Portable Counter", "link" => "/print-advertising/banners/counter"],
                ]
            ],

            "Decals & Signage" => [
                "link" => "/print-advertising/decals",
                "image" => false,
                "items" => [
                    ["title" => "Wall & Window Decals", "link" => "/print-advertising/decals/wall"],
                    ["title" => "Car Decals & Magnets", "link" => "/print-advertising/decals/car"],
                    ["title" => "Yard Signs", "link" => "/print-advertising/decals/yard"],
                    ["title" => "Rigid Signs & Boards", "link" => "/print-advertising/decals/rigid"],
                    ["title" => "Canvas Prints & Wall Art", "link" => "/print-advertising/decals/canvas"],
                    ["title" => "A-Frame & Desk Signs", "link" => "/print-advertising/decals/aframe"],
                ]
            ],

            "Labels & Stickers" => [
                "link" => "/print-advertising/stickers",
                "image" => false,
                "items" => [
                    ["title" => "Sticker Singles", "link" => "/print-advertising/stickers/single"],
                    ["title" => "Die-Cut Stickers", "link" => "/print-advertising/stickers/diecut"],
                    ["title" => "Kiss-Cut Stickers", "link" => "/print-advertising/stickers/kiss"],
                    ["title" => "Sheet Stickers", "link" => "/print-advertising/stickers/sheet"],
                    ["title" => "Product Stickers on Sheet", "link" => "/print-advertising/stickers/product"],
                    ["title" => "Return Address Labels", "link" => "/print-advertising/stickers/address"],
                    ["title" => "Roll Label Stickers", "link" => "/print-advertising/stickers/roll"],
                    ["title" => "Die-Cut Sticker Rolls", "link" => "/print-advertising/stickers/roll-diecut"],
                ]
            ],

            "Promotional Products" => [
                "link" => "/print-advertising/promo",
                "image" => false,
                "items" => [
                    ["title" => "Booklet Catalogs", "link" => "/print-advertising/promo/catalog"],
                    ["title" => "Clothing", "link" => "/print-advertising/promo/clothing"],
                    ["title" => "Hats", "link" => "/print-advertising/promo/hats"],
                    ["title" => "Drinkware", "link" => "/print-advertising/promo/drinkware"],
                    ["title" => "Snacks & Candy", "link" => "/print-advertising/promo/snacks"],
                    ["title" => "Lifestyle & Personal Items", "link" => "/print-advertising/promo/lifestyle"],
                ]
            ],

            "Invitations, Cards & Gifts" => [
                "link" => "/print-advertising/invitations",
                "image" => false,
                "items" => [
                    ["title" => "Invitations & Announcements", "link" => "/print-advertising/invitations/announcements"],
                    ["title" => "Party Invitations", "link" => "/print-advertising/invitations/party"],
                    ["title" => "Thank You & Holiday Cards", "link" => "/print-advertising/invitations/holiday"],
                    ["title" => "Corporate Gifts", "link" => "/print-advertising/invitations/corporate"],
                ]
            ],

        ]
    ],
    "innovation" => [
        "title" => "Innovation",
        "link" => "/innovation",
        "items" => [
            ["title" => "Branded Finishes", "link" => "/innovation/branded-finishes", "image" => true],
            ["title" => "UV Printing Technology", "link" => "/innovation/uv-printing", "image" => true],
            ["title" => "Foil Printing Solutions", "link" => "/innovation/foil-printing"],
            ["title" => "Privacy Printing", "link" => "/innovation/privacy-printing"],
            ["title" => "Research & Development (R&D)", "link" => "/innovation/research-development"],
            ["title" => "Sustainable Innovation", "link" => "/innovation/sustainable"],
            ["title" => "Material Innovation", "link" => "/innovation/material"],
            ["title" => "Structural Innovation", "link" => "/innovation/structural"],
            ["title" => "Smart Packaging Technology", "link" => "/innovation/smart-packaging"],
            ["title" => "Digital Printing Advancement", "link" => "/innovation/digital-printing"],
            ["title" => "Surface Coating Technology", "link" => "/innovation/surface-coating"],
            ["title" => "Security Printing Solutions", "link" => "/innovation/security-printing"],
            ["title" => "Prototype Development", "link" => "/innovation/prototype"],
            ["title" => "Automation & Technology Integration", "link" => "/innovation/automation"],
            ["title" => "Color Management Systems", "link" => "/innovation/color-management"],
            ["title" => "Experience Centers", "link" => "/innovation/experience-centers"],
            ["title" => "Client Success Stories", "link" => "/innovation/success-stories"],
            ["title" => "Blogs", "link" => "/innovation/blogs"],
        ],
    ],
    "about_us" => [
        "title" => "About Us",
        "link" => "/about-us",
        "items" => [
            ["title" => "Company Overview", "link" => "/about-us/company-overview", "image" => true],
            ["title" => "Quality Commitment", "link" => "/about-us/quality-commitment", "image" => true],
            ["title" => "Innovation Approach", "link" => "/about-us/innovation-approach"],
            ["title" => "Sustainability Focus", "link" => "/about-us/sustainability"],
            ["title" => "Why Choose Us", "link" => "/about-us/why-choose-us"],
        ],
    ],
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
                            <li class="relative cursor-pointer flex items-center " <?php if ($isMega): ?>data-mega-target="megaMenu-<?php echo $key; ?>" <?php endif; ?>     <?php if ($isDropdown): ?>data-dropdown="true" <?php endif; ?>>

                                <a href="<?php echo esc_url($menu['link']); ?>"
                                    class="text-sm font-normal capitalize text-title_Clr hover:text-white hover:bg-primary px-2 py-2 rounded-[30px] flex items-center">
                                    <?php echo $menu['title']; ?>
                                    <?php if ($isMega || $isDropdown): ?>
                                        <i class="fa fa-chevron-down ml-1.5"></i>
                                    <?php endif; ?>
                                </a>
                                <!-- NORMAL DROPDOWN -->
                                <?php if ($isDropdown): ?>
                                    <ul
                                        class="dropdownMenu hidden absolute right-0 top-full mt-2 bg-black/20 backdrop-blur-[10px] shadow-xl rounded-lg p-4 min-w-[300px] space-y-2 z-50">
                                        <?php foreach ($menu['items'] as $item): ?>
                                            <li>
                                                <a href="<?php echo esc_url($item['link']); ?>"
                                                    class="block text-sm capitalize text-white hover:text-primary">
                                                    <?php echo $item['title']; ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
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
                        class="megaMenu hidden lg:absolute left-1/2 -translate-x-1/2 min-lg:top-[75px] top-[94px] hale_container mx-auto  z-50 overflow-y-auto min-h-[65vh] h-full">
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
                            class="mx-auto !px-0 grid <?php echo $hasImage ? 'grid-cols-4 hale_container' : 'grid-cols-4 hale_container'; ?> gap-8 rounded-b-2xl shadow-xl bg-black/20 backdrop-blur-[10px]">
                            <!-- Column 1: Parent Groups -->
                            <div class="px-6 py-4 rounded-bl-2xl ">
                                <ul class="space-y-2">
                                    <?php $i = 0; ?>
                                    <?php foreach ($menu['groups'] as $groupName => $items): ?>
                                        <li class="mainCat w-fit flex items-center gap-2 " data-index="<?php echo $i; ?>">
                                            <a href="<?php echo esc_url($items['link']); ?>"
                                                class="text-sm capitalize text-white cursor-pointer flex items-center gap-2">
                                                <?php echo $groupName; ?>
                                            </a>
                                        </li>
                                        <?php $i++; endforeach; ?>
                                </ul>
                            </div>
                            <!-- Column 2: Child Items -->
                            <div class="col-span-1 py-4">
                                <?php $i = 0;
                                foreach ($menu['groups'] as $groupName => $groupData): ?>
                                    <div class="hidden childGroups" data-group="<?php echo $i; ?>">
                                        <ul class="space-y-1">
                                            <?php foreach ($groupData['items'] as $item): ?>
                                                <li>
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
                                <div class="col-span-2 py-4 px-4">
                                    <?php $i = 0; ?>
                                    <?php foreach ($menu['groups'] as $groupName => $items): ?>
                                        <?php if (!empty($items['image']) && $items['image'] === true): ?>
                                            <div class="hidden menuImage rounded-lg grid grid-cols-5 gap-4" data-image="<?php echo $i; ?>">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/boxgal4.png"
                                                    class="rounded-2xl h-full w-full object-cover col-span-2">
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
                // Helper to close all menus
                function closeAllMenus() {
                    allNavItems.forEach(item => {
                        const dropdown = item.querySelector('.dropdownMenu');
                        if (dropdown) dropdown.classList.add('hidden');
                    });
                    allMegaMenus.forEach(menu => menu.classList.add('hidden'));
                }
                allNavItems.forEach(item => {
                    const dropdown = item.querySelector('.dropdownMenu');
                    const megaTarget = item.dataset.megaTarget;
                    const megaMenu = megaTarget ? document.getElementById(megaTarget) : null;
                    const link = item.querySelector('a');

                    item.addEventListener('mouseenter', () => {

                        // Remove active from all links
                        allNavItems.forEach(nav => {
                            nav.querySelector('a')?.classList.remove('main_active');
                        });

                        closeAllMenus();

                        // Show menu
                        if (dropdown) dropdown.classList.remove('hidden');
                        if (megaMenu) megaMenu.classList.remove('hidden');

                        // Add active class
                        link?.classList.add('main_active');
                    });
                });


                // Close dropdowns when mouse leaves them
                allNavItems.forEach(item => {
                    const dropdown = item.querySelector('.dropdownMenu');
                    if (dropdown) {
                        dropdown.addEventListener('mouseleave', () => {
                            dropdown.classList.add('hidden');
                            item.querySelector('a')?.classList.remove('main_active');
                        });
                    }
                });

                // Close mega menus when mouse leaves them
                allMegaMenus.forEach(menu => {
                    menu.addEventListener('mouseleave', () => {
                        menu.classList.add('hidden');

                        allNavItems.forEach(nav => {
                            nav.querySelector('a')?.classList.remove('main_active');
                        });
                    });
                });

                // ===== MEGA MENU CHILD SWITCHING =====
                allMegaMenus.forEach(menu => {
                    const parents = menu.querySelectorAll('.mainCat');
                    const groups = menu.querySelectorAll('.childGroups');
                    const images = menu.querySelectorAll('.menuImage');

                    const arrow = document.createElement('i');
                    arrow.className = 'fa-solid fa-arrow-up-right-from-square ml-2';

                    if (parents[0]) {
                        parents[0].querySelector('a')?.appendChild(arrow);
                        parents[0].classList.add('active');
                    }

                    groups[0]?.classList.remove('hidden');
                    images[0]?.classList.remove('hidden');

                    parents.forEach(p => {
                        p.addEventListener('mouseenter', () => {
                            const index = p.dataset.index;

                            groups.forEach(g => g.classList.add('hidden'));
                            images.forEach(img => img.classList.add('hidden'));
                            parents.forEach(pr => pr.classList.remove('active'));

                            menu.querySelector(`[data-group="${index}"]`)?.classList.remove('hidden');
                            menu.querySelector(`[data-image="${index}"]`)?.classList.remove('hidden');

                            p.classList.add('active');
                            p.querySelector('a')?.appendChild(arrow);
                        });
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