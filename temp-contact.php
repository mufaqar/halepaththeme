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

<section class="md:py-14 py-10 relative bg-center bg-no-repeat bg-cover "
    style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/qoute-bg.png')">
    <div class="container mx-auto px-4 relative z-10 flex md:flex-row flex-col gap-7">

        <!-- LEFT -->
        <div class="md:w-1/2 w-full">

            <div
                class="bg-title_Clr h-full max-w-[546px] mx-auto rounded-2xl md:px-14 md:py-8 p-8 md:gap-12 gap-12 flex flex-col">
                <?php foreach ($steps as $index => $step): ?>
                <div class="relative flex md:flex-row flex-col md:gap-[30px] gap-7">
                    <span
                        class="text-xl font-medium text-white PoppinsMedium bg-secondary p-[18px] border-[18px] border-primary rounded-full flex items-center justify-center w-[89px] h-[89px] <?php echo $index === count($steps) - 1 ? '' : 'before_line'; ?>">
                        <?php echo sprintf("0%d", $step['id']); ?>
                    </span>
                    <div>
                        <h4 class="text-xl font-medium text-primary mb-2 PoppinsMedium">
                            <?php echo $step['title']; ?>
                        </h4>
                        <p class="text-sm font-light text-white">
                            <?php echo $step['description']; ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>


        <!-- RIGHT -->
        <div class="md:w-1/2 w-full ">
            <h4 class="text-xl font-semibold text-white mb-4 flex items-center gap-3">
                <span>Contact Us</span>
                <span class="block border-b-2 border-white max-w-[61px] w-full"></span>
            </h4>

            <h2 class="md:text-4xl text-3xl font-bold text-white mb-8">
                Request Your Any Query Now!
            </h2>

            <form id="contactForm" class="grid w-full gap-4 items-center mt-5 bg-primary md:p-8 p-6 rounded-[19px]">

                <div class="flex gap-4">
                    <input class="input" type="text" name="fullname" placeholder="Full Name" required>
                    <input class="input" type="tel" name="phone" placeholder="Your Contact" required>
                </div>

                <div class="flex gap-4">
                    <input class="input" type="email" name="email" placeholder="Email Address" required>
                    <select class="input" name="product">
                        <option>Select the Product</option>
                        <option>Product1</option>
                    </select>
                </div>

                <textarea class="input" name="message" rows="3" placeholder="Write Your Message..."></textarea>

                <label class="text-white">
                    <input type="checkbox" required> I Agree that my data is collected and stored.
                </label>

                <button id="submitBtn" type="submit"
                    class="text-lg font-normal text-white bg-secondary rounded-full w-full">
                    SUBMIT
                </button>

                <p id="formMsg" class="text-white mt-2"></p>
            </form>
        </div>

    </div>
</section>



<!--  : TESTIMONIALS -->

<section class="py-[60px] bg-[#F5F5F5]" id="testimonials">
    <div class="container mx-auto px-4 grid md:grid-cols-2 gap-6">

        <!-- LEFT: TESTIMONIALS -->
        <div>
            <div class="md:max-w-[470px] max-w-[350px] mx-auto">
                <h6 class="text-[#1C2E42] font-semibold flex gap-2 items-center">
                    Testimonials
                    <div class="h-[3px] bg-[#1C2E42] w-16"></div>
                </h6>

                <h2 class="text-2xl lg:text-[43px] lg:leading-[50px] mt-5 font-semibold">
                    What Customers Says <span class="text-[#47AFC3]">About Us</span>
                </h2>

                <div class="testimonials-slider mt-10">
                    <?php
                    $testimonials = new WP_Query([
                        'post_type' => 'testimonials',
                        'posts_per_page' => -1
                    ]);
                    while ($testimonials->have_posts()) : $testimonials->the_post();
                    ?>
                    <div class="px-1 pb-4">
                        <div class="p-8 bg-white mt-10 border shadow rounded-[19px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about-page/qoute-icon.png"
                                width="66" alt="">
                            <p class="mt-4"><?php the_content(); ?></p>
                            <div class="mt-2 flex gap-1 text-[#FFAE00]">
                                ★★★★★
                            </div>
                            <div class="mt-5 flex gap-2 items-center">
                                <figure
                                    class="p-[2px] border-[1.5px] border-[#47AFC3] w-fit rounded-full overflow-hidden">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="rounded-full"
                                        width="49" alt="">
                                </figure>
                                <div>
                                    <h6 class="font-semibold text-2xl text-[#1C1C1C]"><?php the_title(); ?></h6>
                                    <p class="text-[#1C1C1CE8]">Co founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>


                <!-- ARROWS -->
                <div class="flex justify-center gap-2 text-4xl ">
                    <button class="prev hover:text-[#47AFC3]">←</button>
                    <button class="next hover:text-[#47AFC3]">→</button>
                </div>

            </div>
        </div>

        <!-- RIGHT: FAQ -->
        <div>
            <?php
      $faqs = new WP_Query([
        'post_type' => 'faqs',
        'posts_per_page' => 6
      ]);
      while ($faqs->have_posts()) : $faqs->the_post(); ?>
            <div class="mb-4 bg-white p-4 rounded shadow">
                <h4 class="font-semibold"><?php the_title(); ?></h4>
                <div class="text-sm mt-2"><?php the_content(); ?></div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>

    </div>

</section>




<!-- Instagram Posts -->

<section class="bg-[#EAF6F9] pt-14 px-4">
    <h2 class="text-3xl sm:text-[43px] lg:leading-[50px] mt-5 font-semibold leading-normal text-center">
        Instagram Posts
    </h2>
    <div class="mt-9 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
        <!-- First Image -->
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/i1.png"
                alt="Instagram Post 1" class="w-full h-full" />
        </div>
        <!-- Next 4 Images -->
        <?php for ($i = 1; $i <= 4; $i++) : ?>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/o<?php echo $i; ?>.png"
                alt="Instagram Post <?php echo $i + 1; ?>" class="w-full h-full" />
        </div>
        <?php endfor; ?>
    </div>
</section>

















<?php get_footer(); ?>

<script>
jQuery(document).ready(function($) {
    $('.testimonials-slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        arrows: true,
    });
});
</script>
<script>
document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const btn = document.getElementById("submitBtn");
    const msg = document.getElementById("formMsg");

    btn.innerText = "SENDING...";
    btn.disabled = true;

    const data = new FormData(this);
    data.append("action", "send_quote");

    fetch("<?php echo admin_url('admin-ajax.php'); ?>", {
            method: "POST",
            body: data
        })
        .then(res => res.json())
        .then(() => {
            msg.innerText = "Message sent successfully!";
            btn.innerText = "SUBMIT";
            btn.disabled = false;
            this.reset();
        })
        .catch(() => {
            msg.innerText = "Something went wrong!";
            btn.innerText = "SUBMIT";
            btn.disabled = false;
        });
});
</script>