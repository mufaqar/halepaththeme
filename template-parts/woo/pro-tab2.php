<?php
$materials = [
    [
        'code' => 'OP501',
        'name' => 'SBS C1S',
        'image' => 'op501.jpg',
    ],
    [
        'code' => 'OP502',
        'name' => 'SBS C2S',
        'image' => 'op502.jpg',
    ],
    [
        'code' => 'OP503',
        'name' => 'CCNB',
        'image' => 'op503.jpg',
    ],
    [
        'code' => 'OP504',
        'name' => 'Fully Recycled CCNB',
        'image' => 'op504.jpg',
    ],
    [
        'code' => 'OP505',
        'name' => 'Natural Brown Kraft',
        'image' => 'op505.jpg',
    ],
    [
        'code' => 'OP506',
        'name' => 'White Kraft',
        'image' => 'op506.jpg',
    ],
    [
        'code' => 'OP507',
        'name' => 'Black Kraft',
        'image' => 'op507.jpg',
    ],
    [
        'code' => 'OP509',
        'name' => 'Uncoated Unbleached Kraft (UUK)',
        'image' => 'op509.jpg',
    ],
    [
        'code' => 'OP510',
        'name' => 'Clay Coated Kraft Back (CCK)',
        'image' => 'op510.jpg',
    ],
    [
        'code' => 'OP511',
        'name' => 'Clay Natural Kraft (CNK)',
        'image' => 'op511.jpg',
    ],
    [
        'code' => 'OP512',
        'name' => 'Metallic Paper',
        'image' => 'op512.jpg',
    ],
    [
        'code' => 'OP513',
        'name' => 'Holographic',
        'image' => 'op513.jpg',
    ],
    [
        'code' => 'OP514',
        'name' => 'Textured',
        'image' => 'op514.jpg',
    ],
];

$printings = [
    [
        'code' => 'OP024',
        'name' => 'Offset Print',
        'image' => 'op024.jpg',
    ],
    [
        'code' => 'OP027',
        'name' => 'Digital Print',
        'image' => 'op027.jpg',
    ],
    [
        'code' => 'OP030',
        'name' => 'UV Print',
        'image' => 'op030.jpg',
    ],
];

$finishings = [
    [
        'code' => 'OP028',
        'name' => 'Scodix Digital Enhancement',
        'image' => 'op028.jpg',
    ],
    [
        'code' => 'OP009',
        'name' => 'Aqueous Coating',
        'image' => 'op009.jpg',
    ],
    [
        'code' => 'OP010',
        'name' => 'UV Coating',
        'image' => 'op010.jpg',
    ],
    [
        'code' => 'OP011',
        'name' => 'Spot Gloss UV',
        'image' => 'op011.jpg',
    ],
    [
        'code' => 'OP012',
        'name' => 'Soft Touch Coating',
        'image' => 'op012.jpg',
    ],
    [
        'code' => 'OP013',
        'name' => 'Varnish',
        'image' => 'op013.jpg',
    ],
    [
        'code' => 'OP014',
        'name' => 'Lamination',
        'image' => 'op014.jpg',
    ],
    [
        'code' => 'OP015',
        'name' => 'Anti-scratch lamination',
        'image' => 'op015.jpg',
    ],
    [
        'code' => 'OP016',
        'name' => 'Soft touch / Silk Lamination',
        'image' => 'op016.jpg',
    ],
];
$additions = [
    [
        'code' => 'OP017',
        'name' => 'Hot Foil Stamping',
        'image' => 'op017.jpg',
    ],
    [
        'code' => 'OP018',
        'name' => 'Cold Foil Printing',
        'image' => 'op018.jpg',
    ],
    [
        'code' => 'OP019',
        'name' => 'Blind Embossing',
        'image' => 'op019.jpg',
    ],
    [
        'code' => 'OP020',
        'name' => 'Blind Debossing',
        'image' => 'op020.jpg',
    ],
    [
        'code' => 'OP021',
        'name' => 'Registered Embossing',
        'image' => 'op021.jpg',
    ],
    [
        'code' => 'OP022',
        'name' => 'Combination Embossing',
        'image' => 'op022.jpg',
    ],
    [
        'code' => 'OP023',
        'name' => 'Window Patching',
        'image' => 'op023.jpg',
    ],
];
$addons = [
    [
        'code' => 'CI016',
        'name' => 'Natural Kraft Paperboard Insert',
        'image' => 'ci016.jpg',
    ],
    [
        'code' => 'CI020',
        'name' => 'Folding Carton Box Divider Inserts',
        'image' => 'ci020.jpg',
    ],
    [
        'code' => 'CI014',
        'name' => 'Natural Kraft Corrugated Insert',
        'image' => 'ci014.jpg',
    ],
    [
        'code' => 'CI021',
        'name' => 'Corrugated Box Divider Inserts',
        'image' => 'ci021.jpg',
    ],
    [
        'code' => 'CI013',
        'name' => 'Standard White Corrugated Insert',
        'image' => 'ci013.jpg',
    ],
    [
        'code' => 'CI008',
        'name' => 'PETG Blister Insert',
        'image' => 'ci008.jpg',
    ],
    [
        'code' => 'CI007',
        'name' => 'PVC Blister Insert',
        'image' => 'ci007.jpg',
    ],
    [
        'code' => 'CI006',
        'name' => 'HIPS Blister Insert',
        'image' => 'ci006.jpg',
    ],
];
?>

<section class="">
    <div class="hale_container flex md:flex-row flex-col gap-5 border-b border-gray-300 py-16">
        <div class="md:w-1/5 w-full px-5">
            <h3 class="text-2xl font-bold text-title_Clr">
                Materials
            </h3>
        </div>
        <div class="md:w-4/5 w-full grid md:grid-cols-4 grid-cols-1 gap-5">
            <?php foreach ($materials as $material): ?>
                <div
                    class="materialBox shadow-[0_0_2px_0_rgba(23,43,77,0.4)] hover:shadow-lg transition-all ease-in-out duration-300">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/material/' . $material['image']); ?>"
                        alt="<?php echo esc_attr($material['name']); ?>" class="w-full" />
                    <div class="px-5 py-6 text-center">
                        <p class="text-base font-semibold text-title_Clr/80 mb-2">
                            <?php echo esc_html($material['code']); ?>
                        </p>
                        <h3 class="text-lg leading-none font-semibold text-title_Clr">
                            <?php echo esc_html($material['name']); ?>
                        </h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="hale_container flex md:flex-row flex-col gap-5 border-b border-gray-300 py-16">
        <div class="md:w-1/5 w-full px-5">
            <h3 class="text-2xl font-bold text-title_Clr ">
                Printing Methods
            </h3>
        </div>
        <div class="md:w-4/5 w-full grid md:grid-cols-4 grid-cols-1 gap-5">
            <?php foreach ($printings as $printing): ?>
                <div
                    class="materialBox shadow-[0_0_2px_0_rgba(23,43,77,0.4)] hover:shadow-lg transition-all ease-in-out duration-300">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/printing/' . $printing['image']); ?>"
                        alt="<?php echo esc_attr($printing['name']); ?>" class="w-full" />
                    <div class="px-5 py-6 text-center">
                        <p class="text-base font-semibold text-title_Clr/80 mb-2">
                            <?php echo esc_html($printing['code']); ?>
                        </p>
                        <h3 class="text-lg leading-none font-semibold text-title_Clr">
                            <?php echo esc_html($printing['name']); ?>
                        </h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="hale_container flex md:flex-row flex-col gap-5 border-b border-gray-300 py-16">
        <div class="md:w-1/5 w-full px-5">
            <h3 class="text-2xl font-bold text-title_Clr ">
                Finishings
            </h3>
        </div>
        <div class="md:w-4/5 w-full grid md:grid-cols-4 grid-cols-1 gap-5">
            <?php foreach ($finishings as $finishing): ?>
                <div
                    class="materialBox shadow-[0_0_2px_0_rgba(23,43,77,0.4)] hover:shadow-lg transition-all ease-in-out duration-300">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/finishing/' . $finishing['image']); ?>"
                        alt="<?php echo esc_attr($finishing['name']); ?>" class="w-full" />
                    <div class="px-5 py-6 text-center">
                        <p class="text-base font-semibold text-title_Clr/80 mb-2">
                            <?php echo esc_html($finishing['code']); ?>
                        </p>
                        <h3 class="text-lg leading-none font-semibold text-title_Clr">
                            <?php echo esc_html($finishing['name']); ?>
                        </h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="hale_container flex md:flex-row flex-col gap-5 border-b border-gray-300 py-16">
        <div class="md:w-1/5 w-full px-5">
            <h3 class="text-2xl font-bold text-title_Clr ">
                Addition Options
            </h3>
        </div>
        <div class="md:w-4/5 w-full grid md:grid-cols-4 grid-cols-1 gap-5">
            <?php foreach ($additions as $addition): ?>
                <div
                    class="materialBox shadow-[0_0_2px_0_rgba(23,43,77,0.4)] hover:shadow-lg transition-all ease-in-out duration-300">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/addition/' . $addition['image']); ?>"
                        alt="<?php echo esc_attr($addition['name']); ?>" class="w-full" />
                    <div class="px-5 py-6 text-center">
                        <p class="text-base font-semibold text-title_Clr/80 mb-2">
                            <?php echo esc_html($addition['code']); ?>
                        </p>
                        <h3 class="text-lg leading-none font-semibold text-title_Clr">
                            <?php echo esc_html($addition['name']); ?>
                        </h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="hale_container flex md:flex-row flex-col gap-5 border-b border-gray-300 py-16">
        <div class="md:w-1/5 w-full px-5">
            <h3 class="text-2xl font-bold text-title_Clr ">
                Add-on
            </h3>
        </div>
        <div class="md:w-4/5 w-full grid md:grid-cols-4 grid-cols-1 gap-5">
            <?php foreach ($addons as $addon): ?>
                <div
                    class="materialBox shadow-[0_0_2px_0_rgba(23,43,77,0.4)] hover:shadow-lg transition-all ease-in-out duration-300">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/addon/' . $addon['image']); ?>"
                        alt="<?php echo esc_attr($addon['name']); ?>" class="w-full" />
                    <div class="px-5 py-6 text-center">
                        <p class="text-base font-semibold text-title_Clr/80 mb-2">
                            <?php echo esc_html($addon['code']); ?>
                        </p>
                        <h3 class="text-lg leading-none font-semibold text-title_Clr">
                            <?php echo esc_html($addon['name']); ?>
                        </h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>