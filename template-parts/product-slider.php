<?php
$direction     = $args['direction'] ?? 'ltr';
$slidesToShow  = $args['slidesToShow'] ?? 5;

$productsRes = [
    ['title' => 'Cardboard Box',     'image' => get_template_directory_uri() . '/assets/images/product/boxgal2.png', 'slug' => 'cardboard-box'],
    ['title' => 'Custom Packaging',  'image' => get_template_directory_uri() . '/assets/images/product/boxgal3.png', 'slug' => 'custom-packaging'],
    ['title' => 'Eco Friendly Box',  'image' => get_template_directory_uri() . '/assets/images/product/boxgal4.png', 'slug' => 'eco-friendly-box'],
    ['title' => 'Retail Packaging',  'image' => get_template_directory_uri() . '/assets/images/product/boxgal5.png', 'slug' => 'retail-packaging'],
    ['title' => 'Mascara Boxes',     'image' => get_template_directory_uri() . '/assets/images/product/boxgal6.png', 'slug' => 'mascara-boxes'],
    ['title' => 'CBD Cream Boxes',   'image' => get_template_directory_uri() . '/assets/images/product/boxgal4.png', 'slug' => 'cbd-cream-boxes'],
];
?>

<div class="product-slider"
     data-direction="<?php echo esc_attr($direction); ?>"
     data-slides="<?php echo esc_attr($slidesToShow); ?>">

    <?php foreach ($productsRes as $p): ?>
        <div class="p-3">
            <a href="<?php echo esc_url(site_url('/product/' . $p['slug'])); ?>">
                <img
                    src="<?php echo esc_url($p['image']); ?>"
                    alt="<?php echo esc_attr($p['title']); ?>"
                    class="maskimage img-full"
                >
            </a>

            <a href="<?php echo esc_url(site_url('/product/' . $p['slug'])); ?>"
               class="cat_title">
                <?php echo esc_html($p['title']); ?>
            </a>
        </div>
    <?php endforeach; ?>

</div>

<script>
jQuery(document).ready(function ($) {
    $('.product-slider').each(function () {
        const slides    = $(this).data('slides') || 5;
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

            responsive: [
                { breakpoint: 1024, settings: { slidesToShow: 3 } },
                { breakpoint: 600,  settings: { slidesToShow: 2 } },
                { breakpoint: 480,  settings: { slidesToShow: 1 } }
            ]
        });
    });
});
</script>
