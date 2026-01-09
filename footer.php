<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package halepath_theme
 */

?>


<footer class="pt-14 pb-4 relative">
    <div class="container mx-auto px-4 grid lg:grid-cols-5 md:grid-cols-2 grid-cols-1 justify-between gap-7">

        <!-- Company -->
        <div>
            <h6 class="text-2xl font-semibold text-title_Clr mb-6 PoppinsMedium">
                Company
                <span class="block border-b-2 border-title_Clr max-w-[61px] mt-3"></span>
            </h6>
            <ul class="flex flex-col gap-2.5">
                <li><a href="<?php echo home_url(); ?>"
                        class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Home</a></li>
                <li><a href="<?php echo home_url('/about-us'); ?>"
                        class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>About Us</a></li>
                <li><a href="<?php echo home_url('/categories'); ?>"
                        class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Product By Industry</a></li>
                <li><a href="<?php echo home_url('/products'); ?>"
                        class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Products</a></li>
                <li><a href="<?php echo home_url('/about-us#testimonials'); ?>"
                        class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Testimonials</a></li>
                <li><a href="<?php echo home_url('/about-us#faqs'); ?>"
                        class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>FAQ's</a></li>
                <li><a href="<?php echo home_url('/contact-us'); ?>"
                        class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Contact</a></li>
            </ul>
        </div>

        <!-- Products Packaging -->
        <div>
            <h6 class="text-2xl font-semibold text-title_Clr mb-6 PoppinsMedium">
                Products Packaging
                <span class="block border-b-2 border-title_Clr max-w-[61px] mt-3"></span>
            </h6>
            <ul class="flex flex-col gap-2.5">
                <li><a href="<?php echo home_url('/category/cosmetic-boxes'); ?>"
                        class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Cosmetic Boxes</a></li>
                <li><a href="<?php echo home_url('/category/cardboard-boxes'); ?>"
                        class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Cardboard Boxes</a></li>
                <li><a href="<?php echo home_url('/category/cbd-boxes'); ?>"
                        class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>CBD Boxes</a></li>
                <li><a href="<?php echo home_url('/category/display-boxes'); ?>"
                        class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Display Boxes</a></li>
                <li><a href="<?php echo home_url('/category/bottle-boxes'); ?>"
                        class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Bottle Boxes</a></li>
                <li><a href="<?php echo home_url('/category/retail-boxes'); ?>"
                        class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Retail Boxes</a></li>
                <li><a href="#" class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Sustainable Packaging</a></li>
            </ul>
        </div>

        <!-- Packaging Style -->
        <div>
            <h6 class="text-2xl font-semibold text-title_Clr mb-6 PoppinsMedium">
                Packaging Style
                <span class="block border-b-2 border-title_Clr max-w-[61px] mt-3"></span>
            </h6>
            <ul class="flex flex-col gap-2.5">
                <li><a href="#" class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Sleeve & Tray</a></li>
                <li><a href="#" class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Die Cut Boxes</a></li>
                <li><a href="#" class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Cigerate Boxes</a></li>
                <li><a href="#" class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Child Resistance Boxes</a></li>
                <li><a href="#" class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Window Boxes</a></li>
                <li><a href="#" class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Gable Boxes</a></li>
            </ul>
        </div>

        <!-- Inspiration -->
        <div>
            <h6 class="text-2xl font-semibold text-title_Clr mb-6 PoppinsMedium">
                Inspiration
                <span class="block border-b-2 border-title_Clr max-w-[61px] mt-3"></span>
            </h6>
            <ul class="flex flex-col gap-2.5">
                <li><a href="<?php echo home_url('/blog'); ?>"
                        class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Blog</a></li>
                <li><a href="#" class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>Client Success Stories</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h6 class="text-2xl font-semibold text-title_Clr mb-6 PoppinsMedium">
                Contact
                <span class="block border-b-2 border-title_Clr max-w-[61px] mt-3"></span>
            </h6>
            <ul class="flex flex-col gap-2.5">
                <li><a href="tel:866-225-2112"
                        class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>866-225-2112</a></li>
                <li><a href="mailto:info@halepathpack.com" target="_blank"
                        class="text-base font-normal text-title_Clr flex items-center gap-2 PoppinsRegular">
                        <span class="w-[3px] bg-title_Clr h-[11px] block"></span>info@halepathpack.com</a></li>
            </ul>
        </div>

    </div>

    <!-- Reviews & Partners -->
    <div class="container mx-auto px-4 flex md:flex-row flex-col md:items-center justify-between gap-7 mt-7">
        <div>
            <h6 class="text-base font-semibold text-title_Clr mb-6">Where We’re Trusted</h6>
            <div class="flex flex-wrap sm:flex-nowrap gap-5 items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-reviws.png"
                    alt="google-reviws" class="md:w-full w-1/3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trustpilot.png" alt="trustpilot"
                    class="md:w-full w-1/3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bbb.png" alt="bbb"
                    class="md:w-full w-1/3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-io.png" alt="reviews-io"
                    class="md:w-full w-1/3">
            </div>
        </div>
        <div>
            <h6 class="text-base font-semibold text-title_Clr mb-6">Our Logistics Partners</h6>
            <div class="flex justify-end items-end">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fedex.png" alt="fedex">
            </div>
        </div>
    </div>

    <!-- Logo & Social -->
    <div class="container mx-auto px-4 flex md:flex-row flex-col md:items-center justify-between gap-7 mt-7">
        <div class="flex gap-5 items-center">
            <a href="<?php echo home_url(); ?>"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo"></a>
            <ul class="flex items-center gap-5">
                <li><a href="#" class="text-2xl inline-flex text-[#9C9C9C] hover:text-primary"><i
                            class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" class="text-2xl inline-flex text-[#9C9C9C] hover:text-primary"><i
                            class="fab fa-instagram"></i></a></li>
                <li><a href="#" class="text-2xl inline-flex text-[#9C9C9C] hover:text-primary"><i
                            class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
        <div class="flex justify-end items-end">
            <p class="md:text-lg text-sm font-normal text-title_Clr">
                Copyright <?php echo date('Y'); ?> Hale Path Packaging © All Rights Reserved
            </p>
        </div>
    </div>
</footer>



<?php wp_footer(); ?>

</body>

</html>