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
        <!-- Swiper -->
        <div class="swiper mySwiper h-full">
            <div class="swiper-wrapper">
                <?php foreach ($product_gallery as $image): ?>
                    <div class="swiper-slide">
                        <figure class="rounded-2xl overflow-hidden">
                            <img src="<?php echo esc_url($image['url']); ?>"
                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                 loading="lazy"
                                 class="!h-full w-full object-cover scale-105 rounded-2xl">
                        </figure>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
</section>
