<?php
$slides = [
  [
    "image" => "/assets/images/about-page/offset.jpeg",
    "title" => "Offset Printing",
    "link" => "#",
    "bg" => "slider_bg",
    "text" => "text-white",
    "desc" => "Discover top-notch custom offset printing services for your packaging needs right here. We deliver sharp, vibrant colors on boxes and labels that make your products pop on shelves. Ideal for big orders, this method cuts costs while ensuring consistent quality across paperboard and cardstock. Count on us for precise details that boost your brand visibility in retail settings."
  ],
  [
    "image" => "/assets/images/about-page/corrugated.jpeg",
    "title" => "Corrugated Packaging",
    "link" => "#",
    "bg" => "slider_bg2",
    "text" => "text-white",
    "desc" => "Get durable custom corrugated printing for boxes that protect and promote your goods. Our process adds strong designs to fluted materials, perfect for shipping. Enjoy lightweight options that resist crushing, with eco-friendly inks. Tailor sizes and graphics to fit your business."
  ],
  [
    "image" => "/assets/images/about-page/flexible.jpeg",
    "title" => "Good Quality Packaging",
    "link" => "#",
    "bg" => "slider_bg3",
    "text" => "text-white",
    "desc" => "Explore flexible packaging with custom Mylar bags for freshness and style. These pouches block moisture and odors to keep contents safe. Add zippers for easy use, plus bold prints of your logo for standout presence. Great for snacks or cosmetics in various sizes."
  ],
  [
    "image" => "/assets/images/about-page/print.jpeg",
    "title" => "Print & Advertising & Office Supplies",
    "link" => "#",
    "bg" => "slider_bg2",
    "text" => "text-white",
    "desc" => "Find print, advertising, and office supplies with our custom services. We handle business cards, banners, and branded stationery to match your packaging. Quick turnaround on high-quality prints helps you market while stocking essentials like envelopes."
  ],
];
?>


<main class="Main_hori slider-full ">
  <?php foreach ($slides as $slide): ?>
    <section class="panel bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_template_directory_uri() . $slide['image']; ?>');">
      <div class="w-full grid md:grid-cols-2 justify-center gap-8 h-full">
        <figure class="h-full">
          <!-- <img src="<?php //echo get_template_directory_uri() . $slide['image']; ?>" alt="Packaging Image"
                class="img-full " /> -->
        </figure>
        <div
          class="flex justify-center md:items-center flex-col h-full <?php //echo $slide['bg']; ?>">
          <div class="<?php echo $slide['text']; ?> slider-content h-full bg-white/5 backdrop-blur-[10px] py-10 p-10 rounded-lg">
            <h6 class="animate-slide">Hale Path Packaging</h6>
            <h2 class="animate-slide delay-200"><?php echo esc_html($slide['title']); ?></h2>
            <p class="animate-slide delay-200 md:max-w-4/5"><?php echo esc_html($slide['desc']); ?></p>
            <div class="flex mt-5 animate-slide delay-400">
              <a href="<?php echo esc_url($slide['link']); ?>" class="btn_secondry">View All Products</a>
            </div>
          </div>
        </div>
      </div>

    </section>
  <?php endforeach; ?>
</main>
<style>
  .Main_hori {
  display: flex;
  overflow-x: auto; /* changed from hidden */
  overflow-y: hidden;
  scroll-behavior: smooth;
}

.Main_hori::-webkit-scrollbar {
  display: none;
}
.panel {
  min-width: 100%;
}
</style>

<script>
const scrollContainer = document.querySelector(".Main_hori");
const panels = document.querySelectorAll(".panel");

let currentIndex = 0;
let isAnimating = false;

function goToSlide(index) {
  if (index < 0 || index >= panels.length) return;

  isAnimating = true;
  currentIndex = index;

  scrollContainer.scrollTo({
    left: panels[index].offsetLeft,
    behavior: "smooth"
  });

  // reset animation flag after scroll
  setTimeout(() => {
    isAnimating = false;
  }, 800); // match smooth scroll duration
}

// Wheel event only triggers on the slider container
scrollContainer.addEventListener("wheel", function (evt) {
  evt.preventDefault(); // prevent page scrolling
  if (isAnimating) return;

  if (evt.deltaY > 0) {
    goToSlide(currentIndex + 1);
  } else {
    goToSlide(currentIndex - 1);
  }
}, { passive: false });
</script>