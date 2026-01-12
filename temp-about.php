<?php
/** Template Name: About */
get_header();
?>

<section class="max_content mt-14 py-8">
    <main class="hale_container flex items-center md:flex-row flex-col gap-[70px]">

        <!-- LEFT IMAGE SECTION -->
        <div class="md:w-1/2 relative w-full">
            <div class="relative overflow-hidden h-[467px]">

                <?php
        $images = [
          get_template_directory_uri() . "/assets/images/about-page/about-bg-img_2.png",
          get_template_directory_uri() . "/assets/images/about-page/image_1.png",
          get_template_directory_uri() . "/assets/images/about-page/about-bg-img.png",
        ];
        ?>

                <?php foreach ($images as $index => $img): ?>
                <figure class="absolute w-full h-full rounded-2xl overflow-hidden image-slide"
                    style="display: <?php echo $index === 0 ? 'block' : 'none'; ?>;">
                    <img src="<?php echo esc_url($img); ?>" alt="About image <?php echo $index + 1; ?>"
                        class="w-full h-full object-cover rounded-2xl scale-110" />
                </figure>
                <?php endforeach; ?>

                <!-- Background layered images -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/about-page/about-bg-img_2.png"
                    class="w-[80%] mx-auto h-full absolute z-[-1] scale-105 -top-10 rounded-3xl" alt="" />

                <img src="<?php echo get_template_directory_uri(); ?>/images/about-page/image_1.png"
                    class="w-[90%] mx-auto h-full absolute z-[-1] scale-105 -top-5 rounded-3xl" alt="" />
            </div>

            <a href="#"
                class="btn_secondry flex items-center gap-2 mt-5 w-fit mx-auto">
                About Us
            </a>
        </div>

        <!-- RIGHT SCROLL CONTENT -->
        <div class="relative md:w-1/2">
            <div id="scrollContent" class="w-full max-h-[467px] h-full overflow-y-scroll scroll_Left">
                <?php for ($i = 0; $i < 12; $i++): ?>
                <p class="md:text-[29px] md:leading-[41px] text-lg font-normal text-title_Clr mb-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                <?php endfor; ?>
            </div>

            <div
                class="absolute right-0 left-3 bottom-0 bg-gradient-to-t from-white/90 via-white/80 to-transparent top-[60%]">
            </div>
        </div>

    </main>
</section>

<!-- SCROLL IMAGE SWITCH SCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const scrollBox = document.getElementById("scrollContent");
    const images = document.querySelectorAll(".image-slide");

    if (!scrollBox || images.length === 0) return;

    const totalImages = images.length;

    scrollBox.addEventListener("scroll", function() {
        const scrollTop = scrollBox.scrollTop;
        const maxScroll = scrollBox.scrollHeight - scrollBox.clientHeight;

        if (maxScroll <= 0) return;

        const index = Math.min(
            totalImages - 1,
            Math.floor((scrollTop / maxScroll) * totalImages)
        );

        images.forEach((img, i) => {
            img.style.display = i === index ? "block" : "none";
        });
    });
});
</script>


<!-- Corrugated Packaging -->
<section class="bg-cover mt-10 bg-no-repeat about_bg">
    <div class="hale_container pt-[110px]">
        <h2 class="text-white font-bold text-3xl md:text-5xl lg:text-[51px]">
            Corrugated Packaging
        </h2>
    </div>
    <div
        class="bg-[#1C2E42] py-10 pr-8 md:p-[46px] max-w-[90%] md:max-w-[80%] lg:max-w-[70%] rounded-tr-[140px] mt-[110px]">
        <div class="hale_container">
            <h5 class="text-white font-bold text-xl md:text-[25px]">
                Hale Path Provide Best Packaging Services
            </h5>
            <p class="font-medium text-white text-xl md:text-[27px] mb-6 mt-2 leading-normal">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's. Lorem Ipsum has
                been the industry's.
            </p>
            <Link href="/about-us" class="bg-[#53B6C9] px-[35px] rounded-full font-medium text-[17px] py-[14px]">
            About Us
            </Link>
        </div>
    </div>
</section>


<!-- What We Offer -->
<section class="pt-[60px] bg-[#F5F5F5]">
    <div class="container flex flex-col justify-center items-center mx-auto px-4">
        <h6 class="text-[#1C2E42] font-semibold flex gap-2 items-center">
            What We Offer
            <div class="h-[3px] bg-[#1C2E42] w-16"></div>
        </h6>

        <h2 class="text-2xl lg:text-[43px] text-center font-semibold leading-normal">
            Sustainable Products & Services
        </h2>
    </div>
    <div class="offerbg bg-cover bg-no-repeat mt-60 border border-black">
        <div class="hale_container">
            <div
                class="p-6 bg-white grid grid-cols-1 pb-24 gap-5 xl:gap-2 sm:grid-cols-2 xl:grid-cols-4 mb-32 -mt-48 border">
                <?php
        $offers = [
          "Packaging",
          "Recycling",
          "Eco Materials",
          "Green Energy"
        ];
        foreach ($offers as $index => $title):
        ?>
                <div class="relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/o<?php echo $index + 1; ?>.png"
                        alt="<?php echo esc_attr($title); ?>" class="w-full" width="344" height="344" />
                    <div class="px-4 absolute -bottom-28 left-4 right-4 z-10">
                        <div class="border bg-white p-3 px-5">
                            <h5
                                class="flex group cursor-pointer md:text-xl lg:text-2xl font-medium justify-between border-b-[3px] py-3 pt-1 border-black">
                                <?php echo esc_html($title); ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/li_move-up-right.svg"
                                    alt="" class="group-hover:scale-110 transition-all duration-300" width="30"
                                    height="30" />
                            </h5>
                            <p class="mt-3">Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>


<!-- Hale Path Packaging -->
<section class="about">
    <div class="slider-full">
        <?php
    $slides = [
      [
        "image" => "/assets/images/about-page/slider.png",
        "title" => "Good Quality Packaging",
        "link"  => "#",
        "bg"    => "slider_bg",
        "text"  => ""
      ],
      [
        "image" => "/assets/images/about-page/s1.png",
        "title" => "Good Quality Packaging",
        "link"  => "#",
        "bg"    => "slider_bg2",
        "text"  => "text-white"
      ],
      [
        "image" => "/assets/images/about-page/s2.webp",
        "title" => "Good Quality Packaging",
        "link"  => "#",
        "bg"    => "slider_bg3",
        "text"  => "text-white"
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
</section>

<!-- Testimonials -->

<section class="py-[60px] bg-[#F5F5F5]" id="testimonials">
  <div class="hale_container grid md:grid-cols-2 gap-6">

    <!-- LEFT: TESTIMONIALS -->
    <div>
      <div class="md:max-w-[470px] max-w-[350px] mx-auto">

        <h6 class="text-[#1C2E42] font-semibold flex gap-2 items-center">
          Testimonials
          <div class="h-[3px] bg-[#1C2E42] w-16"></div>
        </h6>

        <h2 class="text-2xl lg:text-[43px] lg:leading-[50px] mt-5 font-semibold leading-normal">
          What Customers Says <span class="text-[#47AFC3]">About Us</span>
        </h2>

        <?php
        $testimonials = [
          [
            "review" => "Lorem Ipsum is simply dummy text of the printing industry.",
            "name"   => "John Doe"
          ],
          [
            "review" => "Amazing service and excellent product quality!",
            "name"   => "Sarah Khan"
          ],
          [
            "review" => "Highly recommended. Professional and reliable.",
            "name"   => "Michael Lee"
          ],
        ];
        ?>

        <section class="testimonials-slider mt-6">

          <?php foreach ($testimonials as $item): ?>
            <div class="px-1 pb-4">
              <div class="p-8 bg-white mt-10 border shadow rounded-[19px]">

                <img
                  src="<?php echo get_template_directory_uri(); ?>/images/about-page/qoute-icon.png"
                  alt=""
                  width="66"
                  height="54"
                />

                <p class="mt-4"><?php echo esc_html($item['review']); ?></p>

                <!-- STARS -->
                <div class="mt-2 flex gap-1">
                  <?php for ($i = 0; $i < 5; $i++): ?>
                    <svg class="w-4 h-4 text-[#FFAE00]" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.538 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.783.57-1.838-.197-1.538-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.719c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                  <?php endfor; ?>
                </div>

                <!-- USER -->
                <div class="mt-5 flex gap-2 items-center">
                  <figure class="p-[2px] border-[1.5px] border-[#47AFC3] w-fit rounded-full overflow-hidden">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/images/about-page/user.jpg"
                      alt=""
                      width="49"
                      height="49"
                      class="rounded-full"
                    />
                  </figure>

                  <div>
                    <h6 class="font-semibold text-2xl text-[#1C1C1C]">
                      <?php echo esc_html($item['name']); ?>
                    </h6>
                    <p class="text-[#1C1C1CE8]">Co founder</p>
                  </div>
                </div>

              </div>
            </div>
          <?php endforeach; ?>

        </section>

        <!-- ARROWS -->
        <div class="flex justify-center gap-4 text-4xl mt-4">
          <button class="testimonial-prev hover:text-[#47AFC3]">&#8592;</button>
          <button class="testimonial-next hover:text-[#47AFC3]">&#8594;</button>
        </div>

      </div>
    </div>

    <!-- RIGHT: FAQ -->
    <div>
      <h3 class="text-2xl font-semibold mb-4">FAQs</h3>

      <?php
      $faqs = [
        ["q" => "What services do you offer?", "a" => "We offer packaging solutions."],
        ["q" => "Are your products eco-friendly?", "a" => "Yes, fully sustainable."],
        ["q" => "Do you support bulk orders?", "a" => "Absolutely."],
      ];
      ?>

      <?php foreach ($faqs as $faq): ?>
        <details class="mb-3 bg-white p-4 rounded">
          <summary class="font-medium cursor-pointer">
            <?php echo esc_html($faq['q']); ?>
          </summary>
          <p class="mt-2 text-gray-600"><?php echo esc_html($faq['a']); ?></p>
        </details>
      <?php endforeach; ?>
    </div>

  </div>
  <script>
jQuery(document).ready(function ($) {
  $('.testimonials-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    infinite: true,
    speed: 500
  });

  $('.testimonial-prev').on('click', function () {
    $('.testimonials-slider').slick('slickPrev');
  });

  $('.testimonial-next').on('click', function () {
    $('.testimonials-slider').slick('slickNext');
  });
});
</script>

</section>






<?php get_footer(); ?>