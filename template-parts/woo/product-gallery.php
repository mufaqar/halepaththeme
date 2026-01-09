<?php
/**
 * WooCommerce Product Gallery
 */

if (!is_product())
    return;

global $product;

$attachment_ids = $product->get_gallery_image_ids();
$main_image_id = $product->get_image_id();

// Include featured image first
$images = [];

if ($main_image_id) {
    array_unshift($attachment_ids, $main_image_id);
}

foreach ($attachment_ids as $id) {
    $images[] = [
        'full' => wp_get_attachment_image_url($id, 'large'),
        'thumb' => wp_get_attachment_image_url($id, 'thumbnail'),
        'alt' => get_post_meta($id, '_wp_attachment_image_alt', true),
    ];
}

if (empty($images))
    return;
?>

<div class="content single">
    <div class="container">

        <!-- MAIN SLIDER -->
        <div class="product-slider">
            <?php foreach ($images as $index => $img): ?>
                <div class="w-full rounded-[21px] h-[435px]">
                    <img src="<?php echo esc_url($img['full']); ?>" alt="<?php echo esc_attr($img['alt']); ?>"
                        class="w-full !max-h-[435px] object-cover rounded-[21px]" loading="lazy">
                </div>
            <?php endforeach; ?>
        </div>

        <!-- THUMBNAILS -->
        <div class="thumb-wrapper product-thumbs singleproducts">
            <?php foreach ($images as $index => $img): ?>
                <div class="group !h-[131px] min-w-[167px] m-1.5 p-3 rounded-[11px] border-2 border-[#1C2E4230]">
                    <img src="<?php echo esc_url($img['thumb']); ?>" alt="<?php echo esc_attr($img['alt']); ?>"
                        class="w-full group-hover:scale-110 rounded-[11px] transition-all duration-200 ease-linear object-cover"
                        loading="lazy">
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

<script>
    jQuery(document).ready(function ($) {

        $('.product-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            loop: true,
            infinite: true,
            speed: 500,
            asNavFor: '.product-thumbs',
            lazyLoad: 'ondemand'
        });

        $('.product-thumbs').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            loop: true,
            asNavFor: '.product-slider',
            focusOnSelect: true,
            arrows: false,
            infinite: true,
            variableWidth: true
        });

    });
</script>