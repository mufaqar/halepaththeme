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
        'question' => 'What are the benefits of choosing Hale Path Packaging solutions?',
        'answer' => 'Hale Path Packaging offers high-quality custom packaging that protects products, improves branding, and boosts customer trust. We focus on durability, design, and cost-effective solutions.',
    ],
    [
        'question' => 'How does Hale Path Packaging add value beyond just a box?',
        'answer' => 'We add value by offering smart structural designs, strong corrugated materials, custom printing, and branding support. Our packaging helps products stand out while staying protected.',
    ],
    [
        'question' => 'What do Hale Path Packaging solutions include?',
        'answer' => 'Our solutions include custom box design, material selection, printing, finishing options, bulk production, and fast delivery—all under one roof.',
    ],
    [
        'question' => 'What types of custom packaging do you offer?',
        'answer' => 'We offer a wide range of custom packaging, including mailer boxes, rigid boxes, corrugated boxes, display packaging, and eco-friendly box solutions.',
    ],
    [
        'question' => 'What packaging materials are available for custom boxes?',
        'answer' => 'We use corrugated cardboard, kraft paper, rigid board, and recyclable materials. Each material is chosen based on product safety and branding needs.',
    ],
    [
        'question' => 'Can I customize the design of my boxes?',
        'answer' => 'Yes, you can fully customize box size, shape, colors, printing, and finishes. Our goal is to match your brand and product requirements.',
    ],
    [
        'question' => 'Do you offer design support or assistance?',
        'answer' => 'Yes, we provide free design assistance. Our packaging experts help you create professional and eye-catching designs for your custom boxes.',
    ],
    [
        'question' => 'Can I request samples before placing a bulk order?',
        'answer' => 'Yes, sample boxes are available so you can check material quality, size, and printing before moving forward with bulk production.',
    ],
    [
        'question' => 'Is there a minimum order quantity (MOQ)?',
        'answer' => 'Yes, we have a minimum order quantity, which may vary by box type and material. Bulk orders help reduce the cost per unit.',
    ],
    [
        'question' => 'Can I order custom packaging in bulk?',
        'answer' => 'Absolutely. We specialize in bulk packaging orders and offer competitive pricing for large quantities.',
    ],
    [
        'question' => 'How can I determine the correct box size for my product?',
        'answer' => 'You can share your product’s length, width, and height or send samples to our collection centers. Our team will review your product and help you select the best box size for safe packaging.',
    ],
    [
        'question' => 'Are there packaging solutions for fragile items?',
        'answer' => 'Yes, we offer strong corrugated boxes and custom inserts that provide extra protection for fragile and delicate products.',
    ],
    [
        'question' => 'How long does production usually take?',
        'answer' => 'Production usually takes around 8–12 business days after design approval. Timelines may vary depending on order size and customization.',
    ],
    [
        'question' => 'Where can I buy custom printed packaging boxes?',
        'answer' => 'You can order custom printed boxes directly from Hale Path Packaging. We provide end-to-end packaging solutions with reliable support.',
    ],
    [
        'question' => 'How can I get a quote for my custom packaging needs?',
        'answer' => 'You can request a quote by sharing box details such as size, quantity, material, and printing. Our team responds quickly with pricing.',
    ],
    [
        'question' => 'Can I get a custom quote for special packaging requirements?',
        'answer' => 'Yes, we offer custom quotes based on your specific packaging needs, budget, and order quantity.',
    ],
    [
        'question' => 'How can I contact Hale Path Packaging experts?',
        'answer' => 'You can contact our team via phone, email, or website contact form. Our packaging experts are ready to help you choose the right solution.',
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
                            <div class="testi_box">
                                <div class="testi_inner">
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
                                            class="testi_img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/user.jpg"
                                                alt="" class="rounded-full w-[49px] h-[49px]">
                                        </figure>
                                        <div>
                                            <h6 class="testi_title">
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
                Frequently Asked <span class="text-[#47AFC3]">Questions</span>
            </h2>
            <div class="mt-10 grid gap-1 grid-cols-1">
                <?php foreach ($faqRes as $idx => $faq): ?>
                    <div>
                        <div class="faq-item">
                            <h3 class="faq-title">
                                <?php echo esc_html($faq['question']); ?>
                                <span class="text-2xl"><i class="fa fa-chevron-down"></i></span>
                            </h3>
                            <div class="faq-content max-h-0 overflow-hidden transition-all duration-200">
                                <p class="">
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