<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );


?>

<main class="py-10 lg:py-20">
    <div class="container mx-auto px-3 grid items-center md:grid-cols-2 gap-4 md:gap-8 lg:gap-10 xl:gap-[70px]">
        <div class="h-full"><img alt="" loading="lazy" width="651" height="375" decoding="async" data-nimg="1"
                class="w-full rounded-[22px] h-full object-cover" style="color:transparent"
                srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F01417d15266bc04f8d5321dcce9575fd890f7e29-1050x454.png&amp;w=750&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F01417d15266bc04f8d5321dcce9575fd890f7e29-1050x454.png&amp;w=1920&amp;q=75 2x"
                src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2F6s1xjwlm%2Fproduction%2F01417d15266bc04f8d5321dcce9575fd890f7e29-1050x454.png&amp;w=1920&amp;q=75">
        </div>
        <div>
            <h4 class="font-bold text-3xl lg:text-5xl">Brand Finishes</h4>
            <p class="xl:text-[19px] mt-4">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting
                industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the
                1500s, when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries, but
                also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularized in the 1960s with the release of Letraset sheets containing
                Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum</p>
        </div>
    </div>
</main>


<section>
    <div class="container mx-auto px-3 ">
        <p class="font-extrabold text-4xl text-center">Get Custom Quote</p>
    </div>
    <div class="container mx-auto mt-10 rounded-[19px] bg-[#CCCCCCB5]/70">
        <form class="grid w-full gap-2 items-center px-3 sm:px-5 py-6 md:py-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 w-full gap-2.5">
                <div class=""><label for="name" class="text-sm font-medium leading-none hidden">Name</label><input
                        class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-4 border border-[#CACACA] focus:border-secondary  outline-none rounded-full w-full"
                        type="text" name="name" id="name" placeholder="Your Name"></div>
                <div class=""><label for="phone" class="text-sm font-medium leading-none hidden">Phone
                        Number</label><input
                        class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-4 border border-[#CACACA] focus:border-secondary  outline-none rounded-full w-full"
                        type="tel" name="phone" id="phone" placeholder="Phone  Number"></div>
                <div class=""><label for="email" class="text-sm font-medium leading-none hidden">Email
                        Address</label><input
                        class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-4 border border-[#CACACA] focus:border-secondary  outline-none rounded-full w-full"
                        type="email" name="email" id="email" placeholder="Email  Address"></div>
                <div class=" relative"><label for="Unit" class="text-sm font-medium leading-none hidden">Select
                        Product</label><select
                        class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr cursor-pointer bg-white p-4 border border-[#CACACA] focus:border-secondary appearance-none outline-none rounded-full w-full"
                        id="Unit" name="Unit">
                        <option value="Select Unit">Select Unit </option>
                        <option value="Cosmetics Box">Inches</option>
                        <option value="Cosmetics Box">CM</option>
                        <option value="Cosmetics Box">MM</option>
                    </select><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                        class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                        </path>
                    </svg></div>
                <div class="relative"><label for="packing"
                        class="text-sm font-medium leading-none hidden">Colors</label><select
                        class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr cursor-pointer bg-white p-4 border border-[#CACACA] focus:border-secondary appearance-none outline-none rounded-full w-full"
                        id="Colors" name="Colors">
                        <option value="Colors">Colors </option>
                        <option value="Cosmetics Box">1 color</option>
                        <option value="Cosmetics Box">2 colors</option>
                        <option value="Cosmetics Box">3 colors</option>
                        <option value="Cosmetics Box">4 colors</option>
                        <option value="Cosmetics Box">5 colors</option>
                    </select><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                        class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                        </path>
                    </svg></div>
                <div class=""><label for="Length" class="text-sm font-medium leading-none hidden">Length</label><input
                        class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr rounded-full bg-white p-4 border border-[#CACACA] focus:border-secondary  outline-none w-full"
                        type="number" name="Length" id="Length" placeholder="Length"></div>
                <div class=""><label for="Width" class="text-sm font-medium leading-none hidden">Width</label><input
                        class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-4 border border-[#CACACA] focus:border-secondary  outline-none rounded-full w-full"
                        type="number" name="Width" id="Width" placeholder="Width"></div>
                <div class=""><label for="Depth" class="text-sm font-medium leading-none hidden">Depth</label><input
                        class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-4 border border-[#CACACA] focus:border-secondary outline-none rounded-full w-full"
                        type="number" name="Depth" id="Depth" placeholder="Depth"></div>
                <div class="relative"><label for="Unit" class="text-sm font-medium leading-none hidden">Select
                        Unit</label><select
                        class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-4 border border-[#CACACA] focus:border-secondary appearance-none outline-none rounded-full cursor-pointer w-full"
                        id="Unit" name="Unit">
                        <option value="Select Unit">Select Unit </option>
                        <option value="Cosmetics Box">Inches</option>
                        <option value="Cosmetics Box">CM</option>
                        <option value="Cosmetics Box">MM</option>
                    </select><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                        class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z">
                        </path>
                    </svg></div><textarea
                    class="text-sm font-medium rounded-full text-txt_Clr placeholder:text-txt_Clr bg-white p-4 border border-[#CACACA] focus:border-secondary outline-none w-full"
                    id="detail" name="detail" rows="1" placeholder="Write Your Message..."></textarea>
            </div>
            <div class="grid  gap-2">
                <div class="flex gap-2 my-3 col-span-5 items-center"><input type="checkbox" id="agree"
                        class="p-2 w-4 h-4"><label for="agree" class="cursor-pointer text-sm">I Agree that my data
                        is&nbsp;<strong>collected and Stored.</strong></label></div>
            </div>
            <section class="flex items-center gap-2 justify-between">
                <div class="w-full"><button type="submit"
                        class="text-base max-w-[600px] font-semibold text-white bg-[#1C2E42] hover:bg-secondary px-4 py-3 rounded-full w-full">SUBMIT</button>
                </div>
                <div><input type="file" id="fileInput" style="display:none"><button type="button"
                        class="flex items-center text-nowrap whitespace-nowrap justify-center px-12 py-3 font-medium text-white bg-[#53B6C9] hover:bg-secondary-dark rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary">Attached
                        File</button></div>
            </section>
        </form>
    </div>
</section>
<section class="mt-20 container mx-auto px-3">

    <div>
        <h2 class="font-extrabold text-4xl text-center">Explore Packaging Solutions</h2>
    </div>
    <?php


/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

/**
 * Hook: woocommerce_shop_loop_header.
 *
 * @since 8.6.0
 *
 * @hooked woocommerce_product_taxonomy_archive_header - 10
 */
do_action( 'woocommerce_shop_loop_header' );

if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );
?>
</section>

<?php

get_template_part('template-parts/testimonial-and-faq'); 


get_footer( 'shop' );