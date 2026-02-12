<?php
$featureproductsRes = [
    [
        'title' => 'Eco Packaging',
        'excerpt' => 'Sustainable and recyclable packaging solutions.',
        'slug' => ['current' => 'eco-packaging'],
        'gallery' => [
            ['asset' => ['url' => get_template_directory_uri() . '/assets/images/design/1.png']]
        ],
    ],
    [
        'title' => 'Custom Boxes',
        'excerpt' => 'Tailor-made boxes for your brand.',
        'slug' => ['current' => 'custom-boxes'],
        'gallery' => [
            ['asset' => ['url' => get_template_directory_uri() . '/assets/images/design/2.png']]
        ],
    ],
    [
        'title' => 'Luxury Packaging',
        'excerpt' => 'Premium packaging for high-end products.',
        'slug' => ['current' => 'luxury-packaging'],
        'gallery' => [
            ['asset' => ['url' => get_template_directory_uri() . '/assets/images/design/3.png']]
        ],
    ],
    [
        'title' => 'Retail Packs',
        'excerpt' => 'Perfect packaging for retail shelves.',
        'slug' => ['current' => 'retail-packs'],
        'gallery' => [
            ['asset' => ['url' => get_template_directory_uri() . '/assets/images/design/4.png']]
        ],
    ],
];
?>

<!-- The work we do Starts -->
<section class="py-16">
    <div class="hale_container">
        <h2 class="h2 md:mb-5!">
            The work we do and <span class="text-primary">love doing</span>
        </h2>
        <p class="md:text-xl text-base font-normal text-title_Clr text-center max-w-[640px] mx-auto">
           We thrive on turning ideas into standout packaging. Our R&D department boosts branding with innovative research, creating strategies that elevate your market presence. Dive into graphic designing and custom manufacturing where our experts build tailored boxes from scratch. Rely on top-tier commercial printing for crisp, vibrant finishes. Plus, our logistics solutions handle seamless shipping and supply chain needs worldwide.
        </p>
        <a href="<?php echo site_url('/products'); ?>" class="btn_secondry flex items-center gap-2 mt-12 w-fit mx-auto">
            See All Products
        </a>
    </div>

    <div class="hale_container flex md:flex-row flex-col md:gap-40 gap-7 mt-10">
        <div class="md:w-1/2 w-full flex md:flex-row flex-col items-start gap-7 [&>*:nth-child(1)]:md:-mt-40">
            <?php foreach ([$featureproductsRes[0], $featureproductsRes[1]] as $product): ?>
            <div class='feature_box'>
                <div>
                    <a href="<?php echo esc_url($product['slug']['current']); ?>">
                        <img src="<?php echo esc_url($product['gallery'][0]['asset']['url']); ?>" alt="img"
                            class='img-full h-auto!' width="292" height="226" />
                    </a>
                </div>
                <div class='md:p-8 p-6'>
                    <h3 class=''>
                        <a
                            href="<?php echo esc_url($product['slug']['current']); ?>"><?php echo esc_html($product['title']); ?></a>
                    </h3>
                    <p class='md:text-xl text-lg font-normal text-title_Clr'>
                        <?php echo esc_html($product['excerpt']); ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="md:w-1/2 w-full flex md:flex-row flex-col items-start gap-7 [&>*:nth-child(2)]:md:-mt-40">
            <?php foreach ([$featureproductsRes[2], $featureproductsRes[3]] as $product): ?>
            <div class='feature_box'>
                <div>
                    <a href="<?php echo esc_url($product['slug']['current']); ?>">
                        <img src="<?php echo esc_url($product['gallery'][0]['asset']['url']); ?>" alt="img"
                            class='img-full h-auto!' width="292" height="226" />
                    </a>
                </div>
                <div class='md:p-8 p-6'>
                    <h3 class=''>
                        <a
                            href="<?php echo esc_url($product['slug']['current']); ?>"><?php echo esc_html($product['title']); ?></a>
                    </h3>
                    <p class=''>
                        <?php echo esc_html($product['excerpt']); ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- The work we do end -->