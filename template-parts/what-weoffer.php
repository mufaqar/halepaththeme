<section class="pt-[60px] bg-[#F5F5F5]">
    <div class="hale_container flex flex-col justify-center items-center">
        <h6 class="text-[#1C2E42] font-semibold flex gap-2 items-center">
            Sustainable Products & Services
            <div class="sub_title_line"></div>
        </h6>
        <h2 class="h2">
            Eco-Smart Packaging That Builds Stronger Brands and a Greener Future.
        </h2>
    </div>
    <div class="offerbg bg-cover bg-no-repeat mt-60 border"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about-page/offer-bg.png'">
        <div class="hale_container">
            <div
                class="p-6 bg-white grid grid-cols-1 pb-24 gap-5 xl:gap-2 sm:grid-cols-2 xl:grid-cols-4 mb-32 -mt-48 border border-black/10">
                <?php
$services = [
    [
        'title' => 'Custom Packaging Solutions',
        'description' => 'Your premium corrugated and bespoke packaging not only protects products but also elevates brand perception. Designed for strength, precision printing, and tailored to your exact needs, our packaging delivers reliability across eCommerce, retail, and wholesale channels — combining performance with sophistication.'
    ],
    [
        'title' => 'Recycling & Circularity',
        'description' => 'We prioritise fully recyclable materials that support the circular economy. Paper and board packaging continually return to the supply chain, reducing waste and conserving resources. Our solutions are easy to recycle, align with UK recycling systems, and help brands lower their environmental footprint responsibly.'
    ],
    [
        'title' => 'Eco-Friendly Kraft Paper',
        'description' => 'Our kraft paper options are renewable, biodegradable, and high-strength. Sourced from sustainably managed forests, kraft paper breaks down naturally and can be repurposed multiple times, helping reduce reliance on plastics while boosting your brand’s green credentials.'
    ],
    [
        'title' => 'Performance-Driven Sustainability',
        'description' => 'Many businesses focus only on “eco claims” without proving impact. At Hale Path Packaging, we go further: our sustainable packaging maintains product protection standards while reducing materials, using responsible inks and coatings, and offering options that meet strict UK environmental goals — balancing eco-responsibility with real world performance.'
    ],
];
?>

                <?php foreach ($services as $index => $service): ?>
                <div class="relative service_box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/o<?php echo $index + 1; ?>.png"
                        alt="<?php echo esc_attr($service['title']); ?>" class="w-full" width="344" height="344" />

                    <div class="service_inner">
                        <div class="content">
                            <h5 class="group">
                                <?php echo esc_html($service['title']); ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/li_move-up-right.svg"
                                    alt="" class="group-hover:scale-110 transition-all duration-300" width="30"
                                    height="30" />
                            </h5>

                            <p class="mt-3  max-h-[120px] overflow-y-auto">
                                <?php echo esc_html($service['description']); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>