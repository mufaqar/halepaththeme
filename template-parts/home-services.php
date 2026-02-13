<?php
$slides = [
    [
        "image" => "/assets/images/about-page/slider.png",
        "title" => "Offset Printing",
        "link" => "#",
        "bg" => "slider_bg",
        "text" => "",
        "desc" => "Discover top-notch custom offset printing services for your packaging needs right here. We deliver sharp, vibrant colors on boxes and labels that make your products pop on shelves. Ideal for big orders, this method cuts costs while ensuring consistent quality across paperboard and cardstock. Count on us for precise details that boost your brand visibility in retail settings."
    ],
    [
        "image" => "/assets/images/about-page/slider.png",
        "title" => "Good Quality Packaging",
        "link" => "#",
        "bg" => "slider_bg2",
        "text" => "text-white",
        "desc" => "Get durable custom corrugated printing for boxes that protect and promote your goods. Our process adds strong designs to fluted materials, perfect for shipping. Enjoy lightweight options that resist crushing, with eco-friendly inks. Tailor sizes and graphics to fit your business."
    ],
    [
        "image" => "/assets/images/about-page/slider.png",
        "title" => "Good Quality Packaging",
        "link" => "#",
        "bg" => "slider_bg3",
        "text" => "text-white",
        "desc" => "Explore flexible packaging with custom Mylar bags for freshness and style. These pouches block moisture and odors to keep contents safe. Add zippers for easy use, plus bold prints of your logo for standout presence. Great for snacks or cosmetics in various sizes."
    ],
     [
     "image" => "/assets/images/about-page/slider.png",
        "title" => "Print & Advertising & Office Supplies",
        "link" => "#",
        "bg" => "slider_bg2",
        "text" => "text-white",
        "desc" => "Find print, advertising, and office supplies with our custom services. We handle business cards, banners, and branded stationery to match your packaging. Quick turnaround on high-quality prints helps you market while stocking essentials like envelopes."
    ],
];
?>
<section class="about relative">
  <!-- The wrapper height defines total scroll area -->
  <div class="slider-scroll-area" style="height: calc(100vh * <?php echo count($slides); ?>);">
    <div class="slider-wrapper sticky top-0 h-screen">
      <div class="slider-full">
        <?php foreach ($slides as $slide): ?>
        <div class="!grid md:grid-cols-2 slider-item">
          <figure class="h-full">
            <img src="<?php echo get_template_directory_uri() . $slide['image']; ?>" alt="Packaging Image" class="img-full " />
          </figure>
          <div class="bg-cover bg-no-repeat flex justify-center md:items-center flex-col px-10 md:px-5 pb-14 md:pb-10 py-10 p-5 <?php echo $slide['bg']; ?>">
            <div class="<?php echo $slide['text']; ?> slider-content">
              <h6 class="animate-slide">Hale Path Packaging</h6>
              <h2 class="animate-slide delay-200"><?php echo esc_html($slide['title']); ?></h2>
              <p class="animate-slide delay-200 max-w-4/5"><?php echo esc_html($slide['desc']); ?></p>
              <div class="flex mt-5 animate-slide delay-400">
                <a href="<?php echo esc_url($slide['link']); ?>" class="btn_secondry">View All Products</a>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<style>
.slider-wrapper {
  position: sticky;
  top: 30;
  height: 100vh;
  overflow: hidden;
}
</style>

<script>
jQuery(document).ready(function($) {
    const $slider = $('.slider-full');
    const totalSlides = $slider.find('.slider-item').length+1;
    let currentSlide = 0;

    // Initialize Slick
    $slider.slick({
        arrows: false,
        dots: true,
        infinite: false,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        swipe: false,
        draggable: false,
    });

    const $scrollArea = $('.slider-scroll-area');
    const scrollAreaTop = $scrollArea.offset().top;
    const scrollAreaHeight = $scrollArea.outerHeight();

    $(window).on('scroll', function() {
        const scrollPos = $(window).scrollTop();

        if (scrollPos >= scrollAreaTop && scrollPos <= scrollAreaTop + scrollAreaHeight) {
            const progress = (scrollPos - scrollAreaTop) / scrollAreaHeight;
            let slideIndex = Math.round(progress * (totalSlides - 1)); // <-- key change

            if (slideIndex !== currentSlide) {
                currentSlide = slideIndex;
                $slider.slick('slickGoTo', currentSlide);
            }
        }
    });
});

</script>
