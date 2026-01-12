<?php
$testimonialsRes = [
    [
        'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'name' => 'John Doe',
    ],
    [
        'review' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'name' => 'Jane Smith',
    ],
    [
        'review' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.',
        'name' => 'Michael Johnson',
    ],
];

$faqRes = [
    [
        'question' => 'What is your return policy?',
        'answer' => 'You can return products within 30 days of purchase.',
    ],
    [
        'question' => 'Do you offer custom packaging?',
        'answer' => 'Yes, we offer fully customizable packaging solutions.',
    ],
    [
        'question' => 'How long does shipping take?',
        'answer' => 'Shipping usually takes 5-7 business days.',
    ],
    [
        'question' => 'Can I track my order?',
        'answer' => 'Yes, once your order is shipped you will get a tracking number.',
    ],
];
?>

<section class="py-[60px] bg-[#F5F5F5]" id="testimonials">
    <div class="hale_container grid md:grid-cols-2 gap-6">
        <!-- Testimonials -->
        <div>
            <div class="md:max-w-[470px] max-w-[350px] mx-auto">
                <h6 class="text-[#1C2E42] font-semibold flex gap-2 items-center">
                    Testimonials
                    <div class="sub_title_line"></div>
                </h6>
                <h2 class="h2 text-left!"> 
                    What Customers Says
                    <span class="text-[#47AFC3]">About Us</span>
                </h2>

                <div class="testimonials-slider">
                    <?php foreach ($testimonialsRes as $testimonial): ?>
                        <div>
                            <div class="px-1 pb-4 md:h-[332px]">
                                <div class="h-full p-8 bg-white mt-10 border shadow rounded-[19px] border-black/15">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/qoute-icon.png"
                                        alt="" class="w-[66px] h-[54px]">
                                    <p class="mt-4"><?php echo esc_html($testimonial['review']); ?></p>
                                    <div class="mt-2 flex gap-1">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <span class="text-[#FFAE00]">&#9733;</span>
                                        <?php endfor; ?>
                                    </div>
                                    <div class="mt-5 flex gap-2 items-center">
                                        <figure
                                            class="p-[2px] border-[1.5px] border-[#47AFC3] w-fit rounded-full overflow-hidden">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/user.jpg"
                                                alt="" class="rounded-full w-[49px] h-[49px]">
                                        </figure>
                                        <div>
                                            <h6 class="font-semibold text-2xl text-[#1C1C1C]">
                                                <?php echo esc_html($testimonial['name']); ?>
                                            </h6>
                                            <p class="text-[#1C1C1CE8]">Co founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- arrows buttons -->
                <div class="flex justify-center gap-2 text-4xl">
                    <button class="prev hover:text-[#47AFC3]">&#8592;</button>
                    <button class="next hover:text-[#47AFC3]">&#8594;</button>
                </div>
            </div>
        </div>

        <!-- FAQs -->
        <div id="faqs" class="pt-8">
            <h2 class="h2">
                Frequently Asked    <span class="text-[#47AFC3]">Questions</span>
            </h2>
            <div class="mt-10 grid gap-1 grid-cols-1">
                <?php foreach ($faqRes as $idx => $faq): ?>
                    <div>
                        <div class="border border-black/15 shadow rounded-[10px] w-full bg-white faq-item">
                            <h3
                                class="px-6 py-6 w-full text-[#1C1C1C] text-left text-xl flex items-center gap-4 justify-between cursor-pointer faq-title">
                                <?php echo esc_html($faq['question']); ?>
                                <span class="text-2xl"><i class="fa fa-chevron-down"></i></span>
                            </h3>
                            <div class="faq-content max-h-0 overflow-hidden transition-all duration-200">
                                <p class="text-lg px-6 text-left text-[#1C1C1C] pb-6">
                                    <?php echo esc_html($faq['answer']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>

<script>
    jQuery(document).ready(function ($) {
        // Initialize Slick slider
        var $slider = $('.testimonials-slider'); // cache slider

        $slider.slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 4000
        });

        // Arrows navigation
        $('.prev').click(function () { $slider.slick('slickPrev'); });
        $('.next').click(function () { $slider.slick('slickNext'); });

        // FAQ toggle
        $('.faq-title').click(function () {
            var parent = $(this).closest('.faq-item');
            var content = parent.find('.faq-content');

            // Close other FAQs
            $('.faq-item').not(parent).find('.faq-content').removeClass('max-h-[300px]').addClass('max-h-0');

            // Toggle current FAQ
            if (content.hasClass('max-h-0')) {
                content.removeClass('max-h-0').addClass('max-h-[300px]');
            } else {
                content.removeClass('max-h-[300px]').addClass('max-h-0');
            }
        });
    });
</script>