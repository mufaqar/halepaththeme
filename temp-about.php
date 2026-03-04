<?php
/** Template Name: About */
get_header();
?>

<?php get_template_part('template-parts/about-imgscroll'); ?>


<!-- Corrugated Packaging -->
<?php get_template_part('template-parts/home-corrugated'); ?>


<!-- What We Offer -->
<?php get_template_part('template-parts/what-weoffer', ); ?>


<?php get_template_part('template-parts/home-services'); ?>
<!-- Testimonials -->
<?php get_template_part('template-parts/home-reviews'); ?>
<?php get_template_part('template-parts/testimonial-and-faq'); ?>





<?php get_footer(); ?>