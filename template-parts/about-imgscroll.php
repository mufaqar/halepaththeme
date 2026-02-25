<?php
$images = [
    get_template_directory_uri() . '/assets/images/slid1.jpeg',
    get_template_directory_uri() . '/assets/images/slid2.jpeg',
    get_template_directory_uri() . '/assets/images/slid3.jpeg',
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
                    Hale Path PackagingLtd manufacture every box inhouse production facility of 32000 square foot,
                    Our12–14-day timeline isn't marketing talk. It's what happens when you control production instead of
                    reselling someone else's work. When a candle company needed urgent reorders for Christmas, we had
                    1,500000 custom boxes delivered in 10 days. Their Instagram engagement jumped 340% that quarter.
                    Coincidence? We don't think so.
                </p>
                <p class="slide_txt">

                    MoreoverHale Path Packaging is a printing & packaging company Offering five complementary print
                    technologies– offset ,uv offset, flexo, digital & cold foil/hot foil with state of the art binding
                    and finishing technologies
                </p>
                <p class="slide_txt">We're UK manufacturers, not middlemen. That means we control quality, timelines,
                    and costs from raw material to your doorstep. No overseas delays, no communication nightmares, no
                    surprise fees doubling your invoice. When you call us, you talk to the people who make your boxes.
                    When you need adjustments, we make them. When you have urgent deadlines, we hit them. That's the
                    difference between working with a manufacturer and a reseller.</p>

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