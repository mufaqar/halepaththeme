<?php
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

<section class="bg-[#F5F5F5] py-20 mt-28" id="testimonials">
    <div class="hale_container gap-6">
        <!-- FAQs -->
        <div id="faqs" class="pt-8">
            <h2 class="text-2xl lg:text-[43px] lg:leading-[50px] mt-5 font-semibold leading-normal text-center">
                Frequently Asked <span class="text-[#47AFC3]">Questions</span>
            </h2>
            <div class="mt-10 grid gap-1 grid-cols-2">
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