<?php
// Get WooCommerce product categories
$categories = get_terms([
    'taxonomy' => 'product_cat',
    'hide_empty' => true,
]);

if (!empty($categories) && !is_wp_error($categories)):
    ?>
    <div class="slider-container category-slider">

        <?php foreach ($categories as $category):

            // Category link
            $category_link = get_term_link($category);

            // Category thumbnail
            $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
            $image_url = $thumbnail_id
                ? wp_get_attachment_url($thumbnail_id)
                : get_template_directory_uri() . '/assets/images/category.jpg';
            ?>

            <div class="w-full p-2">
                <a href="<?php echo esc_url($category_link); ?>">
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($category->name); ?>" width="363"
                        height="375" class="cat_image img-full" loading="lazy" />
                </a>

                <a href="<?php echo esc_url($category_link); ?>"
                    class="box_link">
                    <?php echo esc_html($category->name); ?>
                </a>
            </div>

        <?php endforeach; ?>

    </div>
<?php endif; ?>

<script>
    jQuery(document).ready(function ($) {
        $('.category-slider').slick({
            dots: false,
            arrows: false,
            infinite: true,
            slidesToShow: 4,  // <-- Changed here
            autoplay: true,
            speed: 12000,
            cssEase: 'linear',
            pauseOnHover: true,
            swipeToSlide: true,
            draggable: true,

            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>
