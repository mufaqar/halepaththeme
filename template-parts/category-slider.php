<?php
$categories = [
    [
        'title' => 'Candle Boxes',
        'image' => get_template_directory_uri() . '/assets/images/category/1.png',
        'link' => site_url('/category/candle-boxes')
    ],
    [
        'title' => 'Cosmetic Boxes',
        'image' => get_template_directory_uri() . '/assets/images/category/1.png',
        'link' => site_url('/category/cosmetic-boxes')
    ],
    [
        'title' => 'Product By Industry',
        'image' => get_template_directory_uri() . '/assets/images/category/1.png',
        'link' => site_url('/category/product-by-industry')
    ],
    [
        'title' => 'Retail Boxes',
        'image' => get_template_directory_uri() . '/assets/images/category/1.png',
        'link' => site_url('/category/retail-boxes')
    ],
    [
        'title' => 'CBD Boxes',
        'image' => get_template_directory_uri() . '/assets/images/category/1.png',
        'link' => site_url('/category/cbd-boxes')
    ],
    [
        'title' => 'Custom Printed Box',
        'image' => get_template_directory_uri() . '/assets/images/category/1.png',
        'link' => site_url('/category/custom-printed-box')
    ],
    [
        'title' => 'Box By Style',
        'image' => get_template_directory_uri() . '/assets/images/category/1.png',
        'link' => site_url('/category/box-by-style')
    ],
    [
        'title' => 'Brand Finishes',
        'image' => get_template_directory_uri() . '/assets/images/category/1.png',
        'link' => site_url('/category/brand-finishes')
    ],
    [
        'title' => 'Cardboard Boxes',
        'image' => get_template_directory_uri() . '/assets/images/category/1.png',
        'link' => site_url('/category/cardboard-boxes')
    ],
    [
        'title' => 'Display Boxes',
        'image' => get_template_directory_uri() . '/assets/images/category/1.png',
        'link' => site_url('/category/display-boxes')
    ],
    [
        'title' => 'Bottle Boxes',
        'image' => get_template_directory_uri() . '/assets/images/category/1.png',
        'link' => site_url('/category/bottle-boxes')
    ],
    [
        'title' => 'Bottle Boxes',
        'image' => get_template_directory_uri() . '/assets/images/category/1.png',
        'link' => site_url('/category/bottle-boxes')
    ],
];
?>

<div class="slider-container category-slider">
    <?php foreach ($categories as $item): ?>
        <div class="w-fit p-2">
            <a href="<?php echo esc_url($item['link']); ?>">
                <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>" width="363"
                    height="375" class="maskimage w-full object-cover" loading="lazy" />
            </a>

            <a href="<?php echo esc_url($item['link']); ?>"
                class="text-xl font-normal text-title_Clr text-center flex w-fit mx-auto mt-8">
                <?php echo esc_html($item['title']); ?>
            </a>
        </div>
    <?php endforeach; ?>
</div>


<script>
    jQuery(document).ready(function ($) {
        $('.category-slider').slick({
            dots: false,
            arrows: false,
            infinite: true,
            slidesToShow: 5,
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