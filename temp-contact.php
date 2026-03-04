<?php
/** Template Name: Contact */
get_header();
?>
<?php
    $steps = [
        [
            "id" => 1,
            "title" => "Book Online",
            "description" => "Lpsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been."
        ],
        [
            "id" => 2,
            "title" => "Choose Design",
            "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
        ],
        [
            "id" => 3,
            "title" => "Confirmation",
            "description" => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."
        ],
        [
            "id" => 4,
            "title" => "Delivery",
            "description" => "Lpsum is simply dummy text of the printing and typesetting is industry. Lorem Ipsum has been."
        ],
    ];
    ?>

<?php get_template_part('template-parts/get-qoute', ); ?>

<?php get_template_part('template-parts/home-reviews'); ?>


<?php get_template_part('template-parts/temp-instagram'); ?>


<?php get_footer(); ?>

