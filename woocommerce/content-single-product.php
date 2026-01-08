<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

    <?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
//	do_action( 'woocommerce_before_single_product_summary' );
	?>

    <div class="summary entry-summary">
        <?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
	//	do_action( 'woocommerce_single_product_summary' );
		?>
    </div>

    <?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
//	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<section class="pt-14">
    <div class="container mx-auto px-4 flex md:flex-row flex-col gap-7">
        <div class="md:w-1/2 w-full">
            <h1 class="md:text-[40px] md:leading-normal text-3xl font-bold text-title_Clr mb-4">Candle Accessories Boxes
            </h1>
            <p class="text-xl font-normal text-title_Clr mb-8">Hale Path Packaging offers custom candle accessories
                boxes that ensure elegance, durability, and secure organization for tools like wick trimmers, snuffers,
                and matches. Our eco-friendly, customizable packaging helps brands stand out with luxury and
                sustainability.


            </p>
            <div class="content single">
                <div class="container">
                    <div class="slick-slider slick-initialized" dir="ltr">
                        <div class="slick-list">
                            <div class="slick-track"
                                style="width: 5632px; opacity: 1; transform: translate3d(-2112px, 0px, 0px);">
                                <div data-index="0" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline: none; width: 704px;">
                                    <div>
                                        <div class="null rounded-[21px] h-[435px]" tabindex="-1"
                                            style="width: 100%; display: inline-block;"><img
                                                alt="Candle Accessories Boxes" loading="lazy" width="435" height="365"
                                                decoding="async" data-nimg="1"
                                                class="w-full h-full object-cover rounded-[21px]"
                                                srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F820fbaea21bf31c0bb01eebfa3e0d304eaa60e32-1669x1677.jpg%3Fw%3D534%26fit%3Dmax%26auto%3Dformat&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F820fbaea21bf31c0bb01eebfa3e0d304eaa60e32-1669x1677.jpg%3Fw%3D534%26fit%3Dmax%26auto%3Dformat&amp;w=1080&amp;q=75 2x"
                                                src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F820fbaea21bf31c0bb01eebfa3e0d304eaa60e32-1669x1677.jpg%3Fw%3D534%26fit%3Dmax%26auto%3Dformat&amp;w=1080&amp;q=75"
                                                style="color: transparent;"></div>
                                    </div>
                                </div>
                                <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline: none; width: 704px;">
                                    <div>
                                        <div class="null rounded-[21px] h-[435px]" tabindex="-1"
                                            style="width: 100%; display: inline-block;"><img
                                                alt="Candle Accessories Boxes" loading="lazy" width="435" height="365"
                                                decoding="async" data-nimg="1"
                                                class="w-full h-full object-cover rounded-[21px]"
                                                srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F6644b0bec58557418db4790c8865149d36eae5e6-2000x2000.jpg%3Fw%3D534%26fit%3Dmax%26auto%3Dformat&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F6644b0bec58557418db4790c8865149d36eae5e6-2000x2000.jpg%3Fw%3D534%26fit%3Dmax%26auto%3Dformat&amp;w=1080&amp;q=75 2x"
                                                src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F6644b0bec58557418db4790c8865149d36eae5e6-2000x2000.jpg%3Fw%3D534%26fit%3Dmax%26auto%3Dformat&amp;w=1080&amp;q=75"
                                                style="color: transparent;"></div>
                                    </div>
                                </div>
                                <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline: none; width: 704px;">
                                    <div>
                                        <div class="null rounded-[21px] h-[435px]" tabindex="-1"
                                            style="width: 100%; display: inline-block;"><img
                                                alt="Candle Accessories Boxes" loading="lazy" width="435" height="365"
                                                decoding="async" data-nimg="1"
                                                class="w-full h-full object-cover rounded-[21px]"
                                                srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F29b43d368ae53bfd91cbf8d98907aff84b84c955-1536x1536.jpg%3Fw%3D534%26fit%3Dmax%26auto%3Dformat&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F29b43d368ae53bfd91cbf8d98907aff84b84c955-1536x1536.jpg%3Fw%3D534%26fit%3Dmax%26auto%3Dformat&amp;w=1080&amp;q=75 2x"
                                                src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F29b43d368ae53bfd91cbf8d98907aff84b84c955-1536x1536.jpg%3Fw%3D534%26fit%3Dmax%26auto%3Dformat&amp;w=1080&amp;q=75"
                                                style="color: transparent;"></div>
                                    </div>
                                </div>
                                <div data-index="3" class="slick-slide slick-active slick-current" tabindex="-1"
                                    aria-hidden="false" style="outline: none; width: 704px;">
                                    <div>
                                        <div class="active rounded-[21px] h-[435px]" tabindex="-1"
                                            style="width: 100%; display: inline-block;"><img
                                                alt="Candle Accessories Boxes" loading="lazy" width="435" height="365"
                                                decoding="async" data-nimg="1"
                                                class="w-full h-full object-cover rounded-[21px]"
                                                srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F1712a75b26679d363b2af36a36110edb1707b4a7-1613x1632.jpg%3Fw%3D534%26fit%3Dmax%26auto%3Dformat&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F1712a75b26679d363b2af36a36110edb1707b4a7-1613x1632.jpg%3Fw%3D534%26fit%3Dmax%26auto%3Dformat&amp;w=1080&amp;q=75 2x"
                                                src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F1712a75b26679d363b2af36a36110edb1707b4a7-1613x1632.jpg%3Fw%3D534%26fit%3Dmax%26auto%3Dformat&amp;w=1080&amp;q=75"
                                                style="color: transparent;"></div>
                                    </div>
                                </div>
                                <div data-index="4" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline: none; width: 704px;"></div>
                                <div data-index="5" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline: none; width: 704px;"></div>
                                <div data-index="6" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline: none; width: 704px;"></div>
                                <div data-index="7" class="slick-slide" tabindex="-1" aria-hidden="true"
                                    style="outline: none; width: 704px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="thumb-wrapper flex overflow-x-auto !justify-start singleproducts">
                        <div class="null group h-[131px] min-w-[167px] p-3"><img alt="Candle Accessories Boxes"
                                loading="lazy" width="154" height="131" decoding="async" data-nimg="1"
                                class="w-full group-hover:scale-110 rounded-md transition-all duration-200 ease-linear object-cover"
                                srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F820fbaea21bf31c0bb01eebfa3e0d304eaa60e32-1669x1677.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=256&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F820fbaea21bf31c0bb01eebfa3e0d304eaa60e32-1669x1677.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=384&amp;q=75 2x"
                                src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F820fbaea21bf31c0bb01eebfa3e0d304eaa60e32-1669x1677.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=384&amp;q=75"
                                style="color: transparent;"></div>
                        <div class="null group h-[131px] min-w-[167px] p-3"><img alt="Candle Accessories Boxes"
                                loading="lazy" width="154" height="131" decoding="async" data-nimg="1"
                                class="w-full group-hover:scale-110 rounded-md transition-all duration-200 ease-linear object-cover"
                                srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F6644b0bec58557418db4790c8865149d36eae5e6-2000x2000.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=256&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F6644b0bec58557418db4790c8865149d36eae5e6-2000x2000.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=384&amp;q=75 2x"
                                src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F6644b0bec58557418db4790c8865149d36eae5e6-2000x2000.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=384&amp;q=75"
                                style="color: transparent;"></div>
                        <div class="null group h-[131px] min-w-[167px] p-3"><img alt="Candle Accessories Boxes"
                                loading="lazy" width="154" height="131" decoding="async" data-nimg="1"
                                class="w-full group-hover:scale-110 rounded-md transition-all duration-200 ease-linear object-cover"
                                srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F29b43d368ae53bfd91cbf8d98907aff84b84c955-1536x1536.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=256&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F29b43d368ae53bfd91cbf8d98907aff84b84c955-1536x1536.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=384&amp;q=75 2x"
                                src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F29b43d368ae53bfd91cbf8d98907aff84b84c955-1536x1536.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=384&amp;q=75"
                                style="color: transparent;"></div>
                        <div class="active group h-[131px] min-w-[167px] p-3"><img alt="Candle Accessories Boxes"
                                loading="lazy" width="154" height="131" decoding="async" data-nimg="1"
                                class="w-full group-hover:scale-110 rounded-md transition-all duration-200 ease-linear object-cover"
                                srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F1712a75b26679d363b2af36a36110edb1707b4a7-1613x1632.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=256&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F1712a75b26679d363b2af36a36110edb1707b4a7-1613x1632.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=384&amp;q=75 2x"
                                src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F1712a75b26679d363b2af36a36110edb1707b4a7-1613x1632.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=384&amp;q=75"
                                style="color: transparent;"></div>
                        <div class="null group h-[131px] min-w-[167px] p-3"><img alt="Candle Accessories Boxes"
                                loading="lazy" width="154" height="131" decoding="async" data-nimg="1"
                                class="w-full group-hover:scale-110 rounded-md transition-all duration-200 ease-linear object-cover"
                                srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F042216729765818d7ffb0370d073e47a415df9bc-1776x2104.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=256&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F042216729765818d7ffb0370d073e47a415df9bc-1776x2104.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=384&amp;q=75 2x"
                                src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F042216729765818d7ffb0370d073e47a415df9bc-1776x2104.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=384&amp;q=75"
                                style="color: transparent;"></div>
                        <div class="null group h-[131px] min-w-[167px] p-3"><img alt="Candle Accessories Boxes"
                                loading="lazy" width="154" height="131" decoding="async" data-nimg="1"
                                class="w-full group-hover:scale-110 rounded-md transition-all duration-200 ease-linear object-cover"
                                srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F44dbfa8d6cc852535cc385b1abe90f58b629fe90-1000x1000.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=256&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F44dbfa8d6cc852535cc385b1abe90f58b629fe90-1000x1000.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=384&amp;q=75 2x"
                                src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F44dbfa8d6cc852535cc385b1abe90f58b629fe90-1000x1000.jpg%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=384&amp;q=75"
                                style="color: transparent;"></div>
                        <div class="null group h-[131px] min-w-[167px] p-3"><img alt="Candle Accessories Boxes"
                                loading="lazy" width="154" height="131" decoding="async" data-nimg="1"
                                class="w-full group-hover:scale-110 rounded-md transition-all duration-200 ease-linear object-cover"
                                srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F0fb0b3e4cbcc949c71b86b42c2827924e647a072-1080x1080.webp%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=256&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F0fb0b3e4cbcc949c71b86b42c2827924e647a072-1080x1080.webp%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=384&amp;q=75 2x"
                                src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F0fb0b3e4cbcc949c71b86b42c2827924e647a072-1080x1080.webp%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=384&amp;q=75"
                                style="color: transparent;"></div>
                        <div class="null group h-[131px] min-w-[167px] p-3"><img alt="Candle Accessories Boxes"
                                loading="lazy" width="154" height="131" decoding="async" data-nimg="1"
                                class="w-full group-hover:scale-110 rounded-md transition-all duration-200 ease-linear object-cover"
                                srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F8d6dff7dd40430ac153eed0b8b8ef483773e7b81-1882x1344.png%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=256&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F8d6dff7dd40430ac153eed0b8b8ef483773e7b81-1882x1344.png%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=384&amp;q=75 2x"
                                src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F8d6dff7dd40430ac153eed0b8b8ef483773e7b81-1882x1344.png%3Fw%3D154%26fit%3Dmax%26auto%3Dformat&amp;w=384&amp;q=75"
                                style="color: transparent;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:w-1/2 w-full">
            <h2 class="md:text-[41px] md:leading-normal text-3xl font-bold text-title_Clr mb-3">Get Custom Quote</h2>
            <div class="container mx-auto mt-10 rounded-[19px] bg-[#CCCCCCB5]/70">
                <form class="grid w-full gap-2 items-center px-3 sm:px-5 py-6 md:py-10">
                    <div class="w-full gap-2.5">
                        <section class="grid grid-cols-2 gap-2.5">
                            <div class=""><label for="name"
                                    class="text-sm font-medium leading-none hidden">Name</label><input
                                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-[16px] border border-[#CACACA] focus:border-secondary  outline-none rounded-full w-full"
                                    type="text" name="name" id="name" placeholder="Your Name"></div>
                            <div class=""><label for="phone" class="text-sm font-medium leading-none hidden">Phone
                                    Number</label><input
                                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-[16px] border border-[#CACACA] focus:border-secondary  outline-none rounded-full w-full"
                                    type="tel" name="phone" id="phone" placeholder="Phone  Number"></div>
                        </section>
                        <section class="grid grid-cols-2 gap-2.5 mt-2.5">
                            <div class=""><label for="email" class="text-sm font-medium leading-none hidden">Email
                                    Address</label><input
                                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-[16px] border border-[#CACACA] focus:border-secondary  outline-none rounded-full w-full"
                                    type="email" name="email" id="email" placeholder="Email  Address"></div>
                            <div class=" relative"><label for="Unit"
                                    class="text-sm font-medium leading-none hidden">Select Product</label><select
                                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr cursor-pointer bg-white p-[16px] border border-[#CACACA] focus:border-secondary appearance-none outline-none rounded-full w-full"
                                    id="Product" placeholder="Select Product" name="Product">
                                    <option value="Select Product">Select Product </option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24"
                                    class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2" height="1em"
                                    width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                    </path>
                                </svg></div>
                        </section>
                    </div>
                    <div class="w-full">
                        <section class="grid grid-cols-3 gap-2 items-start">
                            <div class="flex-1"><label for="Length"
                                    class="text-sm font-medium leading-none hidden">Length</label><input
                                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr rounded-full bg-white p-[16px] border border-[#CACACA] focus:border-secondary  outline-none w-full"
                                    type="number" name="Length" id="Length" placeholder="Length"></div>
                            <div class="flex-1"><label for="Width"
                                    class="text-sm font-medium leading-none hidden">Width</label><input
                                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-[16px] border border-[#CACACA] focus:border-secondary  outline-none rounded-full w-full"
                                    type="number" name="Width" id="Width" placeholder="Width"></div>
                            <div class="flex-1"><label for="Depth"
                                    class="text-sm font-medium leading-none hidden">Depth</label><input
                                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-[16px] border border-[#CACACA] focus:border-secondary outline-none rounded-full w-full"
                                    type="number" name="Depth" id="Depth" placeholder="Depth"></div>
                        </section>
                        <section class="grid grid-cols-3 mt-2.5 gap-2 items-start">
                            <div class="relative"><label for="packing"
                                    class="text-sm font-medium leading-none hidden">Colors</label><select
                                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr cursor-pointer bg-white p-[16px] border border-[#CACACA] focus:border-secondary appearance-none outline-none rounded-full w-full"
                                    id="Colors" name="Colors">
                                    <option value="Colors">Colors </option>
                                    <option value="Cosmetics Box">1 color</option>
                                    <option value="Cosmetics Box">2 colors</option>
                                    <option value="Cosmetics Box">3 colors</option>
                                    <option value="Cosmetics Box">4 colors</option>
                                    <option value="Cosmetics Box">5 colors</option>
                                </select><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24"
                                    class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2" height="1em"
                                    width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                    </path>
                                </svg></div>
                            <div class="relative"><label for="Unit"
                                    class="text-sm font-medium leading-none hidden">Select Unit</label><select
                                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-[16px] border border-[#CACACA] focus:border-secondary appearance-none outline-none rounded-full cursor-pointer w-full"
                                    id="Unit" name="Unit">
                                    <option value="Select Unit">Select Unit </option>
                                    <option value="Cosmetics Box">Inches</option>
                                    <option value="Cosmetics Box">CM</option>
                                    <option value="Cosmetics Box">MM</option>
                                </select><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24"
                                    class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2" height="1em"
                                    width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                    </path>
                                </svg></div>
                            <div class="relative"><label for="Unit"
                                    class="text-sm font-medium leading-none hidden">Select Stock</label><select
                                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-[16px] border border-[#CACACA] focus:border-secondary appearance-none outline-none rounded-full cursor-pointer w-full"
                                    id="Stock" name="Stock">
                                    <option value="Select Stock">Select Stock </option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24"
                                    class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2" height="1em"
                                    width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                                    </path>
                                </svg></div>
                        </section>
                        <section class="col-span-2 md:col-span-1 mt-2.5"><textarea
                                class="text-sm font-medium rounded-[20px] h-[141px] text-txt_Clr placeholder:text-txt_Clr bg-white p-[16px] border border-[#CACACA] focus:border-secondary  outline-none w-full"
                                id="detail" name="detail" rows="3" placeholder="Write Your Message..."></textarea>
                        </section>
                        <div class="flex gap-2 mt-3 items-center"><input type="checkbox" id="agree"
                                class="p-2 w-4 h-4"><label for="agree" class="cursor-pointer text-sm">I Agree that my
                                data is&nbsp;<strong>collected and Stored.</strong></label></div>
                    </div>
                    <section class="flex items-center gap-2 justify-between mt-2.5">
                        <div class="w-full"><button type="submit"
                                class="text-base max-w-full font-semibold text-white bg-[#1C2E42] hover:bg-secondary px-4 py-3 rounded-full w-full">SUBMIT</button>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
</section>

<?php do_action( 'woocommerce_after_single_product' ); ?>