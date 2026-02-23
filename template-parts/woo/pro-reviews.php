<?php
$testimonialsRes = [
    [
        'review' => 'Amazing quality and fast delivery. Highly recommended!',
        'name' => 'John Smith',
        'location' => 'New York, USA',
        'rating' => 5,
    ],
    [
        'review' => 'Very professional service and great communication.',
        'name' => 'Emma Johnson',
        'location' => 'London, UK',
        'rating' => 4,
    ],
    [
        'review' => 'Loved the packaging and print quality. Will order again.',
        'name' => 'Michael Brown',
        'location' => 'Toronto, Canada',
        'rating' => 5,
    ],
];
?>

<section>
    <div>
        <div class="hale_container mx-auto flex md:flex-row flex-col gap-5 items-center">
            <div class="md:w-1/3 w-full">
                <h6 class="text-[#1C2E42] font-semibold flex gap-2 items-center">
                    Testimonials
                    <div class="sub_title_line"></div>
                </h6>
                <h2 class="h2 !text-left">
                    What Customers Says
                    <span class="text-[#47AFC3]">About Us</span>
                </h2>

            </div>
            <div class="md:w-2/3 w-full">
                <div class="pro_testi_slider">
                    <?php foreach ($testimonialsRes as $testimonial): ?>
                        <div>
                            <div class="testi_box">
                                <div class="testi_inner">

                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/about-page/qoute-icon.png'); ?>"
                                        alt="Quote Icon" class="w-[66px] h-[54px]">

                                    <p class="mt-4">
                                        <?php echo esc_html($testimonial['review']); ?>
                                    </p>

                                    <!-- Stars -->
                                    <div class="mt-2 flex gap-1">
                                        <?php
                                        for ($i = 1; $i <= 5; $i++):
                                            ?>
                                            <span
                                                class="<?php echo $i <= $testimonial['rating'] ? 'text-[#FFAE00]' : 'text-gray-300'; ?>">
                                                ★
                                            </span>
                                        <?php endfor; ?>
                                    </div>

                                    <div class="mt-5 flex gap-2 items-center">
                                        <figure class="testi_img">
                                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/about-page/user.jpg'); ?>"
                                                alt="User" class="rounded-full w-[49px] h-[49px]">
                                        </figure>
                                        <div>
                                            <h6 class="testi_title">
                                                <?php echo esc_html($testimonial['name']); ?>
                                            </h6>
                                            <p class="text-[#1C1C1CE8]">
                                                <?php echo esc_html($testimonial['location']); ?>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

                <!-- Arrows -->
                <div class="flex justify-center gap-4 text-3xl mt-4">
                    <button class="testi-prev hover:text-[#47AFC3]">&#8592;</button>
                    <button class="testi-next hover:text-[#47AFC3]">&#8594;</button>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    jQuery(document).ready(function ($) {
        $('.pro_testi_slider').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.testi-prev'),
            nextArrow: $('.testi-next'),
            dots: false,
            infinite: true,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: { slidesToShow: 3 }
                },
                {
                    breakpoint: 768,
                    settings: { slidesToShow: 2 }
                },
                {
                    breakpoint: 480,
                    settings: { slidesToShow: 1 }
                }
            ]
        });
    });
</script>