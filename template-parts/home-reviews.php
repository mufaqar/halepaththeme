<?php
$testimonialsRes = [
    [
        'review' => 'Kraft Single Wall Hot Cup Range Bcz quality is ok Kraft Single Wall Hot Cup Range Bcz quality is ok',
        'name' => 'Koaml',
        'location' => 'Kew, GB',
        'time' => '1 month ago',
        'rating' => 4.5,
    ],
    [
        'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'name' => 'John Doe',
        'location' => 'Kew, GB',
        'time' => '1 month ago',
        'rating' => 5,
    ],
    [
        'review' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'name' => 'Jane Smith',
        'location' => 'Kew, GB',
        'time' => '1 month ago',
        'rating' => 3,
    ],
    [
        'review' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.',
        'name' => 'Michael Johnson',
        'location' => 'Kew, GB',
        'time' => '1 month ago',
        'rating' => 2,
    ],
];
?>

<section class="py-[60px]">
    <div class="hale_container flex md:flex-row flex-col gap-6">
        <!-- Rating Summary -->
        <div class="py-10 md:w-1/4 w-full bg-secondary text-center space-y-0.5 flex flex-col justify-center items-center">
            <h3 class="text-xl font-semibold text-white">Excellent</h3>
            <ul class="flex gap-1 justify-center items-center text-sm">
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <li class="text-[#FFAE00]"><i class="fa-solid fa-star"></i></li>
                <?php endfor; ?>
            </ul>
            <p class="text-sm font-normal text-white">4.82 average</p>
            <p class="text-sm font-normal text-white">2,634 reviews</p>
        </div>

        <!-- Testimonials Slider -->
        <div class="md:w-3/4 w-full relative px-5">
            <div class="testimonials-slider flex gap-4">
                <?php foreach ($testimonialsRes as $testimonial): ?>
                    <div class="px-2 w-full h-full">
                        <div class="w-full bg-white p-4 border shadow border-black/15 h-full flex flex-col justify-between">
                            <div class="flex items-center gap-2 mb-1">
                                <h3 class="text-base font-normal text-title_Clr"> <?php echo $testimonial['name']; ?> </h3>
                                <ul class="flex gap-1 justify-center items-center text-xs">
                                    <?php
                                    $fullStars = floor($testimonial['rating']);
                                    $halfStar = ($testimonial['rating'] - $fullStars) >= 0.5 ? true : false;
                                    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                    for ($i = 0; $i < $fullStars; $i++) {
                                        echo '<li class="text-[#FFAE00]"><i class="fa-solid fa-star"></i></li>';
                                    }
                                    if ($halfStar) {
                                        echo '<li class="text-[#FFAE00]"><i class="fa-solid fa-star-half-stroke"></i></li>';
                                    }
                                    for ($i = 0; $i < $emptyStars; $i++) {
                                        echo '<li class="text-[#FFAE00]/50"><i class="fa-regular fa-star"></i></li>'; // faded/empty star
                                    }
                                    ?>
                                </ul>
                            </div>
                            <p class="text-base font-normal text-title_Clr mb-1">
                                <i class="fa-solid fa-circle-check text-sm text-[#FFAE00]"></i> Verified Customer
                            </p>
                            <p class="text-base font-normal text-title_Clr italic mb-5">
                                <?php echo $testimonial['review']; ?>
                            </p>
                            <p class="text-base font-normal text-title_Clr mb-5">
                                <i class="fa-solid fa-circle-check text-sm text-[#FFAE00]"></i> Incentivized
                            </p>
                            <p class="text-sm font-normal text-title_Clr">
                                <?php echo $testimonial['location']; ?>, <?php echo $testimonial['time']; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- arrows buttons -->
            <button class="prev hover:text-[#47AFC3] absolute top-1/2 -translate-y-1/2 left-0">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="next hover:text-[#47AFC3] absolute top-1/2 -translate-y-1/2 right-0">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function ($) {
        $('.testimonials-slider').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            dots: false,
            infinite: true,
            adaptiveHeight: true
        });
    });
</script>