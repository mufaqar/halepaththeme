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

defined('ABSPATH') || exit;

get_header('shop');


?>


<main class="py-10 lg:py-20">
  <div class="container mx-auto px-3 grid items-center md:grid-cols-2 gap-4 md:gap-8 lg:gap-10 xl:gap-[70px]">
    <?php
    // Get WooCommerce product categories
    $categories = get_terms(array(
      'taxonomy' => 'product_cat',
      'hide_empty' => false,
    ));

    // Loop through categories (example: just showing the first one)
    if (!empty($categories) && !is_wp_error($categories)) {
      $category = $categories[0]; // get the first category
    
      // Get category image
      $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
      $image_url = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : '';
      ?>
      <div class="h-full">
        <?php if ($image_url): ?>
          <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($category->name); ?>"
            class="w-full rounded-[22px] h-full! object-cover">
        <?php endif; ?>
      </div>
      <div>
        <h4 class="font-bold text-3xl lg:text-5xl">
          <?php echo esc_html($category->name); ?>
        </h4>
        <p class="xl:text-[19px] mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting
          industry.
          Lorem Ipsum has been the industry's standard dummy text ever since the
          1500s, when an unknown printer took a galley of type and scrambled it to
          make a type specimen book. It has survived not only five centuries, but
          also the leap into electronic typesetting, remaining essentially unchanged.
          It was popularized in the 1960s with the release of Letraset sheets containing
          Lorem Ipsum passages, and more recently with desktop publishing software
          like Aldus PageMaker including versions of Lorem Ipsum</p>
      </div>
    <?php } ?>
  </div>
</main>
<!-- Qoute Form Start-->
<section>
  <div class="container mx-auto px-3 ">
    <p class="font-extrabold text-4xl text-center">Get Custom Quote</p>
  </div>
  <?php get_template_part('template-parts/woo/qoute-form'); ?>
</section>

<!-- Qoute Form End-->

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
  do_action('woocommerce_before_main_content');

  /**
   * Hook: woocommerce_shop_loop_header.
   *
   * @since 8.6.0
   *
   * @hooked woocommerce_product_taxonomy_archive_header - 10
   */
  do_action('woocommerce_shop_loop_header');

  if (woocommerce_product_loop()) {

    /**
     * Hook: woocommerce_before_shop_loop.
     *
     * @hooked woocommerce_output_all_notices - 10
     * @hooked woocommerce_result_count - 20
     * @hooked woocommerce_catalog_ordering - 30
     */
    do_action('woocommerce_before_shop_loop');

    woocommerce_product_loop_start();

    if (wc_get_loop_prop('total')) {
      while (have_posts()) {
        the_post();

        /**
         * Hook: woocommerce_shop_loop.
         */
        do_action('woocommerce_shop_loop');

        wc_get_template_part('content', 'product');
      }
    }

    woocommerce_product_loop_end();

    /**
     * Hook: woocommerce_after_shop_loop.
     *
     * @hooked woocommerce_pagination - 10
     */
    do_action('woocommerce_after_shop_loop');
  } else {
    /**
     * Hook: woocommerce_no_products_found.
     *
     * @hooked wc_no_products_found - 10
     */
    do_action('woocommerce_no_products_found');
  }

  /**
   * Hook: woocommerce_after_main_content.
   *
   * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
   */
  do_action('woocommerce_after_main_content');

  /**
   * Hook: woocommerce_sidebar.
   *
   * @hooked woocommerce_get_sidebar - 10
   */
  //do_action('woocommerce_sidebar');
  ?>
</section>
<section class="my-20">
  <div class="container md:flex items-center gap-5 md:gap-0 mx-auto px-3 flex-row-reverse">
    <!-- Image Section -->
    <figure class="md:w-1/2">
      <img alt="Why Us Image" src="<?php echo get_template_directory_uri(); ?>/assets/images/category/why-us.png">
    </figure>
    <!-- Content Section -->
    <div class="flex md:w-1/2 justify-center md:justify-start items-center md:items-start flex-col">
      <h4 class="text-[#111827] mt-5 md:mt-0 font-bold text-3xl text-center md:text-left mb-4">
        Why Us?
      </h4>
      <p class="mb-7 text-center md:text-left">
        Half Price Packaging offers wholesale discounts, low MOQs, free packaging design support,
        and free shipping services in the USA, Australia, and Canada. We only make high-quality
        designs and take pride in offering a client-centric approach and a proven history of 5000+
        satisfied clients that has taken us to a 4.9 rating on TrustPilot, and a 4.6 rating on REVIEWS.io
      </p>
      <a class="py-[9px] px-[41px] text-white bg-[#1C2E42] rounded-md" href="/category/product-by-industry#">
        Get Custom Quote
      </a>
    </div>
  </div>
</section>
<section class="my-20">
  <div class="container md:flex items-center gap-5 md:gap-0 mx-auto px-3">
    <!-- Image Section -->
    <figure class="md:w-1/2">
      <img alt="Why Us Image" src="<?php echo get_template_directory_uri(); ?>/assets/images/category/why-us.png">
    </figure>
    <!-- Content Section -->
    <div class="flex md:w-1/2 justify-center md:justify-start items-center md:items-start flex-col">
      <h4 class="text-[#111827] mt-5 md:mt-0 font-bold text-3xl text-center md:text-left mb-4">
        Get Prominent in the Market with Custom
      </h4>
      <p class="mb-7 text-center md:text-left">
        Our premium quality retail box packaging with extensive customizations in shapes, styles,
        sizes, and printing can be a game-changer for your brand. We let you choose packaging
        materials that are appropriate, economical, and eco-friendly. The exquisite design, chic
        color combination, and perfect branding technique are sure to boost your sales.
        Personalized custom retail packaging boxes encourage you to develop brand loyalty, so
        create something that appeals to your target demographic while still including your brand visuals.
      </p>
      <a class="py-[9px] px-[41px] text-white bg-[#1C2E42] rounded-md" href="/category/product-by-industry#">
        Get Custom Quote
      </a>
    </div>
  </div>
</section>
<section class="pt-16">
  <!-- Section Title -->
  <h2 class="font-extrabold md:text-4xl text-2xl text-center text-title_Clr mb-5">
    Learn More About Custom Retail Boxes
  </h2>

  <!-- Content Container -->
  <div class="container px-3 desc_content mx-auto mt-5 overflow-y-scroll max_content max-h-[712px]">

    <h3>Lorem ipsum dolor</h3>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit elittellus, luctus nec ullamc
      mattis pulvinar dapibus cras risus dui euismo et sapien molestie sollicitudin sodale
      dolor aliquam nec sagittis felis pellentesque ultricies. Lorem ipsum dolor sit amet,
      consectetur adipiscing elit elittellus, luctus nec ullamc mattis pulvinar dapibus cras
      risus dui euismo et sapien molestie sollicitudin sodale dolor aliquam nec sagittis felis
      pellentesque ultricies.
    </p>

    <p>
      <br>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit elittellus, luctus nec ullamc
      mattis pulvinar dapibus cras risus dui euismo et sapien molestie sollicitudin sodale
      dolor aliquam nec sagittis felis pellentesque ultricies. Lorem ipsum dolor sit amet,
      consectetur adipiscing elit elittellus, luctus nec ullamc mattis pulvinar dapibus cras
      risus dui euismo et sapien molestie sollicitudin sodale dolor aliquam nec sagittis felis
      pellentesque ultricies.
    </p>

    <h4>
      <br>Lorem ipsum dolor
    </h4>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit elittellus, luctus nec ullamc
      mattis pulvinar dapibus cras risus dui euismo et sapien molestie sollicitudin sodale
      dolor aliquam nec sagittis felis pellentesque ultricies. Lorem ipsum dolor sit amet,
      consectetur adipiscing elit elittellus, luctus nec ullamc mattis pulvinar dapibus cras
      risus dui euismo et sapien molestie sollicitudin sodale dolor aliquam nec sagittis felis
      pellentesque ultricies.
    </p>

    <h3>
      <br>Lorem ipsum dolor
    </h3>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit elittellus, luctus nec ullamc
      mattis pulvinar dapibus cras risus dui euismo et sapien molestie sollicitudin sodale
      dolor aliquam nec sagittis felis pellentesque ultricies. Lorem ipsum dolor sit amet,
      consectetur adipiscing elit elittellus, luctus nec ullamc mattis pulvinar dapibus cras
      risus dui euismo et sapien molestie sollicitudin sodale dolor aliquam nec sagittis felis
      pellentesque ultricies.
    </p>
    <h3>
      <br>Lorem ipsum dolor
    </h3>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit elittellus, luctus nec ullamc
      mattis pulvinar dapibus cras risus dui euismo et sapien molestie sollicitudin sodale
      dolor aliquam nec sagittis felis pellentesque ultricies. Lorem ipsum dolor sit amet,
      consectetur adipiscing elit elittellus, luctus nec ullamc mattis pulvinar dapibus cras
      risus dui euismo et sapien molestie sollicitudin sodale dolor aliquam nec sagittis felis
      pellentesque ultricies.
    </p>
    <h3>
      <br>Lorem ipsum dolor
    </h3>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit elittellus, luctus nec ullamc
      mattis pulvinar dapibus cras risus dui euismo et sapien molestie sollicitudin sodale
      dolor aliquam nec sagittis felis pellentesque ultricies. Lorem ipsum dolor sit amet,
      consectetur adipiscing elit elittellus, luctus nec ullamc mattis pulvinar dapibus cras
      risus dui euismo et sapien molestie sollicitudin sodale dolor aliquam nec sagittis felis
      pellentesque ultricies.
    </p>
  </div>
</section>

<section class="container mx-auto px-3 mt-20">

  <!-- Section Title -->
  <span class="text-[#111827] font-bold text-2xl">Our Capabilities</span>

  <!-- Capabilities Grid -->
  <div class="mt-12 grid grid-cols-3 sm:grid-cols-5 md:grid-cols-6 lg:grid-cols-8 gap-2">

    <!-- Capability Items -->
    <div class="bg-[#EFEFEF] flex flex-col justify-center items-center px-1.5 py-[15px] rounded-[16px]">
      <img alt="International Sourcing"
        src="<?php echo get_template_directory_uri(); ?>/assets/images/category/glob.png" />
      <h6 class="text-[#111827] text-center !font-normal text-xs mt-3">International Sourcing</h6>
    </div>

    <div class="bg-[#EFEFEF] flex flex-col justify-center items-center px-1.5 py-[15px] rounded-[16px]">
      <img alt="Easy Price Matching"
        src="<?php echo get_template_directory_uri(); ?>/assets/images/category/price.png" />
      <h6 class="text-[#111827] text-center !font-normal text-xs mt-3">Easy Price Matching</h6>
    </div>

    <div class="bg-[#EFEFEF] flex flex-col justify-center items-center px-1.5 py-[15px] rounded-[16px]">
      <img alt="3D Design Studio" src="<?php echo get_template_directory_uri(); ?>/assets/images/category/studio.png" />
      <h6 class="text-[#111827] text-center !font-normal text-xs mt-3">3D Design Studio</h6>
    </div>

    <div class="bg-[#EFEFEF] flex flex-col justify-center items-center px-1.5 py-[15px] rounded-[16px]">
      <img alt="Multiple Lead Times Option"
        src="<?php echo get_template_directory_uri(); ?>/assets/images/category/calculator.png" />
      <h6 class="text-[#111827] text-center !font-normal text-xs mt-3">Multiple Lead Times Option to Fit Your Budget
      </h6>
    </div>

    <div class="bg-[#EFEFEF] flex flex-col justify-center items-center px-1.5 py-[15px] rounded-[16px]">
      <img alt="Printing Capacity" src="<?php echo get_template_directory_uri(); ?>/assets/images/category/capacity.png" />
      <h6 class="text-[#111827] text-center !font-normal text-xs mt-3">Printing Capacity of One Million Quantities in
        One Day</h6>
    </div>

    <div class="bg-[#EFEFEF] flex flex-col justify-center items-center px-1.5 py-[15px] rounded-[16px]">
      <img alt="24/7 Service" src="<?php echo get_template_directory_uri(); ?>/assets/images/category/agent.png" />
      <h6 class="text-[#111827] text-center !font-normal text-xs mt-3">24/7 Service</h6>
    </div>

    <div class="bg-[#EFEFEF] flex flex-col justify-center items-center px-1.5 py-[15px] rounded-[16px]">
      <img alt="Flexible Payment Terms"
        src="<?php echo get_template_directory_uri(); ?>/assets/images/category/payment.png" />
      <h6 class="text-[#111827] text-center !font-normal text-xs mt-3">Flexible Payment Terms</h6>
    </div>

    <div class="bg-[#EFEFEF] flex flex-col justify-center items-center px-1.5 py-[15px] rounded-[16px]">
      <img alt="Warehousing and IMS"
        src="<?php echo get_template_directory_uri(); ?>/assets/images/category/house.png" />
      <h6 class="text-[#111827] text-center !font-normal text-xs mt-3">Warehousing and IMS</h6>
    </div>

  </div>

  <!-- Buttons -->
  <div class="flex flex-col sm:flex-row text-center gap-4 mt-6">
    <a class="py-[9px] px-[41px] text-white bg-[#1C2E42] rounded-md" href="/category/product-by-industry#">
      Browse Our Catalogue
    </a>
    <a class="py-[9px] px-[41px] text-white bg-[#1C2E42] rounded-md" href="/category/product-by-industry#">
      View Company Profile
    </a>
  </div>

</section>


<?php
get_template_part('template-parts/woo/product-faq');


get_footer('shop');