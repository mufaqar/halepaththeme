<?php /** Template Name: Home */ get_header();

?>
<?php
$steps = [
    [
        "id" => 1,
        "title" => "Place Your Order",
        "description" => "Place your order online quickly and easily, share your requirements, receive a fast quote, and start your packaging project confidently."
    ],
    [
        "id" => 2,
        "title" => "Artwork Creation",
        "description" => "Our expert team creates custom packaging designs, provides mockups for approval, and ensures your branding looks professional and impactful."
    ],
    [
        "id" => 3,
        "title" => "Production",
        "description" => "Review final details, approve artwork and specifications, confirm pricing, and give production approval before we begin manufacturing your packaging."
    ],
    [
        "id" => 4,
        "title" => "Fast Doorstep Delivery",
        "description" => "Your finished packaging is carefully produced, securely packed, and delivered on time across the UK with reliable tracking."
    ],
];
?>





<?php get_template_part('template-parts/main-banner'); ?>
<?php get_template_part('template-parts/about-imgscroll'); ?>
    <section class="bg-[#F5F5F5] py-10">
    <h2 class="h2">Our Latest Category</h2>
    <?php get_template_part('template-parts/category-slider'); ?>
    </section>
<?php get_template_part('template-parts/home-cta'); ?>
<?php get_template_part('template-parts/home-offset'); ?>
<?php get_template_part('template-parts/home-trusted'); ?>
<?php get_template_part('template-parts/home-brands'); ?>
<?php get_template_part('template-parts/home-corrugated'); ?>
<?php get_template_part('template-parts/get-qoute', ); ?>
<?php get_template_part('template-parts/what-weoffer', ); ?>
<?php get_template_part('template-parts/home-flexible', ); ?>
<?php get_template_part('template-parts/home-cta'); ?>
<?php get_template_part('template-parts/home-services'); ?>
<?php get_template_part('template-parts/home-printadvertising'); ?>
<?php get_template_part('template-parts/home-work'); ?>
<?php get_template_part('template-parts/testimonial-and-faq'); ?>
<?php get_template_part('template-parts/home-career'); ?>
<?php get_template_part('template-parts/temp-instagram'); ?>
<?php get_footer() ?>

<script>
jQuery(document).ready(function($) {
    $('.slider-full').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true
    });
});
</script>