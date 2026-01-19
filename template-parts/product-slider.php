<?php
$direction     = $args['direction'] ?? 'ltr';
$slidesToShow  = $args['slidesToShow'] ?? 5;

/**
 * Pass category slug via $args['category']
 * Example:
 * get_template_part('template-parts/product-slider', null, [
 *   'category' => 'packaging',
 *   'slidesToShow' => 4,
 *   'direction' => 'ltr'
 * ]);
 */
$category = $args['category'] ?? '';

$query_args = [
    'post_type'      => 'product',
    'posts_per_page' => 10,
    'post_status'    => 'publish',
];

if ( ! empty($category) ) {
    $query_args['tax_query'] = [
        [
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => $category,
        ]
    ];
}

$products = new WP_Query($query_args);
?>

<?php if ( $products->have_posts() ) : ?>
<div class="product-slider" data-direction="<?php echo esc_attr($direction); ?>"
    data-slides="<?php echo esc_attr($slidesToShow); ?>">

    <?php while ( $products->have_posts() ) : $products->the_post(); ?>
    <?php
        global $product;
        if ( ! $product ) continue;

        $image_id  = $product->get_image_id();
        $image_url = $image_id
            ? wp_get_attachment_image_url($image_id, 'large')
            : wc_placeholder_img_src();
        ?>
    <div class="p-3">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>"
                class="maskimage img-full">
        </a>

        <a href="<?php the_permalink(); ?>" class="box_link">
            <?php the_title(); ?>
        </a>
    </div>
    <?php endwhile; ?>

</div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>


<script>
jQuery(document).ready(function($) {
    $('.product-slider').each(function() {
        const slides = $(this).data('slides') || 4;
        const direction = $(this).data('direction') || 'ltr';

        $(this).slick({
            arrows: false,
            dots: false,
            infinite: true,
            autoplay: true,
            speed: 12000,
            cssEase: 'linear',
            pauseOnHover: true,
            swipeToSlide: true,
            draggable: true,
            slidesToShow: slides,
            slidesToScroll: 1,
            rtl: direction === 'rtl',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
});
</script>