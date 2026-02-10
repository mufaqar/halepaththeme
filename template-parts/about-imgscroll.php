<?php
$images = [
    get_template_directory_uri() . '/assets/images/about-page/about-bg-img_2.png',
    get_template_directory_uri() . '/assets/images/about-page/image_1.png',
    get_template_directory_uri() . '/assets/images/about-page/about-bg-img.png',
];
?>

<section class="max_content mt-14 py-8">
    <div class="hale_container hale_flex items-start!">
        <!-- LEFT: IMAGES -->
        <div class="md:w-2/5 relative w-full">
            <div class="overflow-hidden h-[567px]" id="imageContainer">
                <?php foreach ($images as $index => $img): ?>
                <figure class="image-slide  <?php echo $index === 0 ? 'block' : 'hidden'; ?>"
                    data-index="<?php echo $index; ?>">
                    <img src="<?php echo esc_url($img); ?>" alt="Image <?php echo $index + 1; ?>" class="rounded_img" />
                </figure>
                <?php endforeach; ?>

                <!-- BACKGROUND SHADOW IMAGES -->
                <figure>
                    <img src="<?php echo esc_url($images[0]); ?>" class="w-[80%] -top-10 fixed_img" alt="" />
                </figure>

                <figure>
                    <img src="<?php echo esc_url($images[1]); ?>" class="w-[90%] -top-5 fixed_img" alt="" />
                </figure>
            </div>

            <div class="mt-10 flex justify-center">
                <a href="/about-us/" class="btn_secondry">
                    About Us
                </a>
            </div>
        </div>
        <!-- RIGHT: SCROLL TEXT -->
        <div class="relative md:w-3/5">
            <div id="scrollText" class="w-full max-h-[567px] overflow-y-scroll scroll_Left">

                <p class="slide_txt">
                    Hale Path Packaging is the 21 st digital solution provider for all with varying types of printing
                    and packaging needs. So you have the perfect product, but do you have the perfect packaging? Enter:
                    Hale Path Packaging. Our business idea is achieving and excelling in 100% of everything – we do not
                    believe in second bests,
                </p>
                <p class="slide_txt">

                    and that’s what we introduce in the market, nothing but the best! Whether it’s the customizable
                    options, the design, the service, the technology or the material, we have put great mind in getting
                    the best of everything for our clients. Hale Path Packaging proudly offers a large series of options
                    in textures, materials, designs, innovations and outlooks for our clients’ needs.
                </p>
                <p class="slide_txt">We cater to a wide clientele and have managed to acquire a huge customer base with
                    glowing reviews. Our printing and packaging solutions are for all. So if you’re a home-based start
                    up business, a flourishing business with wholesale custom packaging needs, an individual with
                    packaging needs for events and occasions, Hale Path Packaging has got the answer for you! </p>

            </div>

            <div class="slide_text_overlay">
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const scrollBox = document.getElementById('scrollText');
    const images = document.querySelectorAll('.image-slide');

    if (!scrollBox || images.length === 0) return;

    scrollBox.addEventListener('scroll', function() {
        const scrollTop = scrollBox.scrollTop;
        const scrollHeight = scrollBox.scrollHeight - scrollBox.clientHeight;
        const totalImages = images.length;

        let index = Math.floor((scrollTop / scrollHeight) * totalImages);
        index = Math.min(totalImages - 1, index);

        images.forEach((img, i) => {
            img.classList.toggle('hidden', i !== index);
            img.classList.toggle('block', i === index);
        });
    });
});
</script>