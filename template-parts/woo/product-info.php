<section class="mt-20 max-w-[2200px] mx-auto px-3 lg:px-0">
    <h2 class="text-2xl text-center mb-8 sm:text-3xl md:text-5xl font-bold">
        <?php the_title(); ?> Gallery
    </h2>

    <?php
    $product_gallery = get_field('product_gallery');

    if (empty($product_gallery)) {
        return;
    }
    ?>

    <div class="relative w-full py-8">
        <div class="full_gallery">
            <?php foreach ($product_gallery as $image): ?>
                <div class="px-2">
                    <figure class="rounded-2xl h-[450px]">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                            loading="lazy" class="!h-full w-full object-cover rounded-2xl">
                    </figure>
                </div>
            <?php endforeach; ?>


        </div>
        <!-- Arrows -->
        <div class="flex justify-center gap-4 text-3xl mt-4">
            <button class="gallery-prev hover:text-[#47AFC3] cursor-pointer">&#8592;</button>
            <button class="gallery-next hover:text-[#47AFC3] cursor-pointer">&#8594;</button>
        </div>
    </div>

    <script>
        jQuery(document).ready(function ($) {
            $('.full_gallery').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: $('.gallery-prev'),
                nextArrow: $('.gallery-next'),
                dots: false,
                infinite: true,
                adaptiveHeight: false,
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
</section>

<!-- <section class="mt-20 max-w-[2200px] mx-auto px-3 lg:px-0">
    <h2 class="text-2xl text-center mb-8 sm:text-3xl md:text-5xl font-bold">
        <?php the_title(); ?> Gallery
    </h2>

    <?php
    $product_gallery = get_field('product_gallery');

    if (empty($product_gallery)) {
        return;
    }
    ?>

    <div class="relative w-full py-8">
        Swiper
        <div class="swiper mySwiper h-full">
            <div class="swiper-wrapper">
                <?php foreach ($product_gallery as $image): ?>
                    <div class="swiper-slide">
                        <figure class="rounded-2xl overflow-hidden">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                                loading="lazy" class="!h-full w-full object-cover scale-105 rounded-2xl max-h-[550px]">
                        </figure>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper(".mySwiper", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                loop: true,
                loopedSlides: 4,          // ✅ Make loop perfect for 4 slides per view
                slideToClickedSlide: true, // 🔥 Click on left/right slides to navigate

                coverflowEffect: {
                    rotate: 0,
                    stretch: 0,
                    depth: 200,
                    modifier: 1,
                    slideShadows: false,
                },

                breakpoints: {
                    320: { slidesPerView: 1, loopedSlides: 1 },
                    640: { slidesPerView: 2, loopedSlides: 2 },
                    1024: { slidesPerView: 4, loopedSlides: 4 },
                },
            });
        });
    </script>
</section> -->

<section class="mt-10 ">
    <!-- Tabs Buttons -->
    <div class="hale_container !px-0 flex border-b border-gray-300">
        <button class="tab-btn tab_active" data-tab="tab1">
            Details
        </button>
        <button class="tab-btn" data-tab="tab2">
            Available Options
        </button>
        <button class="tab-btn" data-tab="tab3">
            Order Process
        </button>
    </div>
    <!-- Tabs Content -->
    <div class="tab-content mt-6">
        <!-- Tab 1 Panel (Details) -->
        <div class="tab-panel" id="tab1">
            <?php get_template_part('template-parts/woo/pro-tab1'); ?>
        </div>

        <!-- Tab 2 Panel (Available Options) -->
        <div class="tab-panel hidden" id="tab2">
            <?php get_template_part('template-parts/woo/pro-tab2'); ?>
        </div>

        <!-- Tab 3 Panel (Order Process) -->
        <div class="tab-panel hidden" id="tab3">
            <?php get_template_part('template-parts/woo/pro-tab3'); ?>
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabPanels = document.querySelectorAll('.tab-panel');

        function openTab(tabId) {
            tabPanels.forEach(panel => panel.classList.add('hidden'));
            tabButtons.forEach(btn => btn.classList.remove('tab_active'));
            document.getElementById(tabId).classList.remove('hidden');
            document.querySelector(`.tab-btn[data-tab="${tabId}"]`).classList.add('tab_active');
        }

        if (tabButtons.length > 0) openTab(tabButtons[0].dataset.tab);

        tabButtons.forEach(button => {
            button.addEventListener('click', () => openTab(button.dataset.tab));
        });
    });
</script>

