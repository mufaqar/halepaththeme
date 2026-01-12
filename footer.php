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
    <div class="hale_container grid lg:grid-cols-5 md:grid-cols-2 grid-cols-1 justify-between gap-7">

        <!-- Company -->
        <div>
            <h6 class="footer_title">
                Company
                <span class=""></span>
            </h6>
            <ul class="flex flex-col gap-2.5">
                <li><a href="<?php echo home_url(); ?>" class="footer_link">
                        <span class="marker"></span>Home</a></li>
                <li><a href="<?php echo home_url('/about-us'); ?>" class="footer_link">
                        <span class="marker"></span>About Us</a></li>
                <li><a href="<?php echo home_url('/categories'); ?>" class="footer_link">
                        <span class="marker"></span>Product By Industry</a></li>
                <li><a href="<?php echo home_url('/products'); ?>" class="footer_link">
                        <span class="marker"></span>Products</a></li>
                <li><a href="<?php echo home_url('/about-us#testimonials'); ?>" class="footer_link">
                        <span class="marker"></span>Testimonials</a></li>
                <li><a href="<?php echo home_url('/about-us#faqs'); ?>" class="footer_link">
                        <span class="marker"></span>FAQ's</a></li>
                <li><a href="<?php echo home_url('/contact-us'); ?>" class="footer_link">
                        <span class="marker"></span>Contact</a></li>
            </ul>
        </div>

        <!-- Products Packaging -->
        <div>
            <h6 class="footer_title">
                Products Packaging
                <span class=""></span>
            </h6>
            <ul class="flex flex-col gap-2.5">
                <li><a href="<?php echo home_url('/category/cosmetic-boxes'); ?>" class="footer_link">
                        <span class="marker"></span>Cosmetic Boxes</a></li>
                <li><a href="<?php echo home_url('/category/cardboard-boxes'); ?>" class="footer_link">
                        <span class="marker"></span>Cardboard Boxes</a></li>
                <li><a href="<?php echo home_url('/category/cbd-boxes'); ?>" class="footer_link">
                        <span class="marker"></span>CBD Boxes</a></li>
                <li><a href="<?php echo home_url('/category/display-boxes'); ?>" class="footer_link">
                        <span class="marker"></span>Display Boxes</a></li>
                <li><a href="<?php echo home_url('/category/bottle-boxes'); ?>" class="footer_link">
                        <span class="marker"></span>Bottle Boxes</a></li>
                <li><a href="<?php echo home_url('/category/retail-boxes'); ?>" class="footer_link">
                        <span class="marker"></span>Retail Boxes</a></li>
                <li><a href="#" class="footer_link">
                        <span class="marker"></span>Sustainable Packaging</a></li>
            </ul>
        </div>

        <!-- Packaging Style -->
        <div>
            <h6 class="footer_title">
                Packaging Style
                <span class=""></span>
            </h6>
            <ul class="flex flex-col gap-2.5">
                <li><a href="#" class="footer_link">
                        <span class="marker"></span>Sleeve & Tray</a></li>
                <li><a href="#" class="footer_link">
                        <span class="marker"></span>Die Cut Boxes</a></li>
                <li><a href="#" class="footer_link">
                        <span class="marker"></span>Cigerate Boxes</a></li>
                <li><a href="#" class="footer_link">
                        <span class="marker"></span>Child Resistance Boxes</a></li>
                <li><a href="#" class="footer_link">
                        <span class="marker"></span>Window Boxes</a></li>
                <li><a href="#" class="footer_link">
                        <span class="marker"></span>Gable Boxes</a></li>
            </ul>
        </div>

        <!-- Inspiration -->
        <div>
            <h6 class="footer_title">
                Inspiration
                <span class=""></span>
            </h6>
            <ul class="flex flex-col gap-2.5">
                <li><a href="<?php echo home_url('/blog'); ?>" class="footer_link">
                        <span class="marker"></span>Blog</a></li>
                <li><a href="#" class="footer_link">
                        <span class="marker"></span>Client Success Stories</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h6 class="footer_title">
                Contact
                <span class=""></span>
            </h6>
            <ul class="flex flex-col gap-2.5">
                <li><a href="tel:866-225-2112" class="footer_link">
                        <span class="marker"></span>866-225-2112</a></li>
                <li><a href="mailto:info@halepathpack.com" target="_blank" class="footer_link">
                        <span class="marker"></span>info@halepathpack.com</a></li>
            </ul>
        </div>

    </div>

    <!-- Reviews & Partners -->
    <div class="hale_container flex md:flex-row flex-col md:items-center justify-between gap-7 mt-7">
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
    <div class="hale_container flex md:flex-row flex-col md:items-center justify-between gap-7 mt-7">
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