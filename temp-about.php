<?php
/** Template Name: About */
get_header();
?>

<?php get_template_part('template-parts/about-imgscroll'); ?>


<!-- Corrugated Packaging -->
<?php get_template_part('template-parts/home-corrugated'); ?>


<!-- What We Offer -->
<?php get_template_part('template-parts/what-weoffer', ); ?>


<!-- Hale Path Packaging -->
<section class="about">
  <div class="slider-full">
    <?php
    $slides = [
      [
        "image" => "/assets/images/about-page/slider.png",
        "title" => "Good Quality Packaging",
        "link" => "#",
        "bg" => "slider_bg",
        "text" => ""
      ],
      [
        "image" => "/assets/images/about-page/s1.png",
        "title" => "Good Quality Packaging",
        "link" => "#",
        "bg" => "slider_bg2",
        "text" => "text-white"
      ],
      [
        "image" => "/assets/images/about-page/s2.webp",
        "title" => "Good Quality Packaging",
        "link" => "#",
        "bg" => "slider_bg3",
        "text" => "text-white"
      ],
    ];
    ?>

    <?php foreach ($slides as $slide): ?>
      <div class="!grid md:grid-cols-2 slider-item">

        <!-- IMAGE -->
        <figure>
          <img src="<?php echo get_template_directory_uri() . $slide['image']; ?>" alt="Packaging Image"
            class="w-full object-cover h-[400px] md:h-[690px]" />
        </figure>

        <!-- CONTENT -->
        <div
          class="bg-cover bg-no-repeat flex justify-center md:items-center flex-col px-10 md:px-5 pb-14 md:pb-10 py-10 p-5 <?php echo $slide['bg']; ?>">
          <div class="<?php echo $slide['text']; ?> slider-content">

            <h6 class="font-semibold text-xl relative w-fit animate-slide">
              Hale Path Packaging
            </h6>

            <h2
              class="font-semibold relative my-2 xl:text-[100px] max-w-[580px] text-[50px] leading-[60px] lg:text-[70px] lg:leading-[80px] xl:leading-[105px] animate-slide delay-200">
              <?php echo esc_html($slide['title']); ?>
            </h2>

            <div class="flex mt-5 animate-slide delay-400">
              <a href="<?php echo esc_url($slide['link']); ?>"
                class="bg-[#1C2E42] text-white px-[35px] rounded-full font-medium text-[17px] py-[14px]">
                Learn more
              </a>
            </div>

          </div>
        </div>

      </div>
    <?php endforeach; ?>
  </div>
  <script>
    jQuery(document).ready(function ($) {
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
</section>

<!-- Testimonials -->
<?php get_template_part('template-parts/home-reviews'); ?>
<?php get_template_part('template-parts/testimonial-and-faq'); ?>





<?php get_footer(); ?>