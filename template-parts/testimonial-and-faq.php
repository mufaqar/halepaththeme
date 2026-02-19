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
];

?>

<section class="py-[60px] bg-[#F5F5F5]">
    <div class="hale_container grid md:grid-cols-1 gap-6">
        <!-- FAQs -->
        <div id="faqs" class="pt-8">
            <h2 class="h2">
                Frequently Asked <span class="text-[#47AFC3]">Questions</span>
            </h2>
            <div class="mt-10 grid gap-1 md:grid-cols-2 grid-cols-1">
                <?php foreach ($faqRes as $idx => $faq): ?>
                    <div>
                        <div class="faq-item">
                            <h3 class="faq-title">
                                <?php echo esc_html($faq['question']); ?>
                                <span class="text-xl"><i class="fa fa-chevron-down"></i></span>
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