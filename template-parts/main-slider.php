<?php
// Place this in your template file where you want the slider to appear
?>

<!-- Slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<section class="main-slider relative">
    <div class="slider">
        <!-- Slide 1: Video -->
        <div class="relative w-full h-screen">
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
                <source src="<?php echo get_template_directory_uri(); ?>/video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="md:py-44 py-24 relative bg-center bg-no-repeat bg-cover 
                        before:content-[''] before:absolute before:w-full before:bg-gradient-to-r 
                        before:from-black/90 before:from-30% before:via-black/70 before:h-full before:top-0">
                <div class="container mx-auto px-4 relative z-10">
                    <div class="md:w-1/2 w-full">
                        <h1 class="md:text-6xl md:leading-tight text-3xl font-bold text-white mb-10">
                            Custom cardboard packaging solutions
                        </h1>
                        <a href="#"
                            class="bg-primary hover:bg-white px-5 py-4 text-lg font-medium text-white hover:text-primary rounded-full border-2 border-primary inline-flex items-center gap-2">
                            Enquire Now &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2: Image -->
        <div class="relative w-full h-screen">
            <div class="md:py-44 py-24 relative bg-center bg-no-repeat bg-cover 
                        before:content-[''] before:absolute before:w-full before:bg-gradient-to-r 
                        before:from-black/90 before:from-30% before:via-black/70 before:h-full before:top-0"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/banner.png');">
                <div class="container mx-auto px-4 relative z-10">
                    <div class="md:w-1/2 w-full">
                        <h1 class="md:text-6xl md:leading-tight text-3xl font-bold text-white mb-10">
                            Custom cardboard packaging solutions
                        </h1>
                        <a href="#"
                            class="bg-primary hover:bg-white px-5 py-4 text-lg font-medium text-white hover:text-primary rounded-full border-2 border-primary inline-flex items-center gap-2">
                            Enquire Now &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3: Another image slide example -->
        <div class="relative w-full h-screen">
            <div class="md:py-44 py-24 relative bg-center bg-no-repeat bg-cover 
                        before:content-[''] before:absolute before:w-full before:bg-gradient-to-r 
                        before:from-black/90 before:from-30% before:via-black/70 before:h-full before:top-0"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/banner2.png');">
                <div class="container mx-auto px-4 relative z-10">
                    <div class="md:w-1/2 w-full">
                        <h1 class="md:text-6xl md:leading-tight text-3xl font-bold text-white mb-10">
                            Another custom solution
                        </h1>
                        <a href="#"
                            class="bg-primary hover:bg-white px-5 py-4 text-lg font-medium text-white hover:text-primary rounded-full border-2 border-primary inline-flex items-center gap-2">
                            Enquire Now &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- jQuery + Slick JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->

<script>
    jQuery(document).ready(function ($) {
        $('.slider').slick({
            dots: true,
            arrows: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 5000, // 5 seconds
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    });
</script>

<!-- Optional: Custom Tailwind styling for slick dots -->
<!-- <style>
    .slick-dots {
        bottom: 20px;
    }

    .slick-dots li button:before {
        color: white;
        /* Dot color */
    }

    .slick-dots li.slick-active button:before {
        color: #f43f5e;
        /* Active dot color (Tailwind pink-500) */
    }
</style> -->