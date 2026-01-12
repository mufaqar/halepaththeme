<?php
$images = [
    get_template_directory_uri() . '/assets/images/about-page/about-bg-img_2.png',
    get_template_directory_uri() . '/assets/images/about-page/image_1.png',
    get_template_directory_uri() . '/assets/images/about-page/about-bg-img.png',
];
?>

<section class="max_content mt-14 py-8">
    <div class="hale_container hale_flex">
        <!-- LEFT: IMAGES -->
        <div class="md:w-1/2 relative w-full">
            <div class="overflow-hidden h-[467px]" id="imageContainer">
                <?php foreach ($images as $index => $img): ?>
                    <figure class="image-slide <?php echo $index === 0 ? 'block' : 'hidden'; ?>"
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
                <a href="#" class="btn_secondry">
                    About Us
                </a>
            </div>
        </div>
        <!-- RIGHT: SCROLL TEXT -->
        <div class="relative md:w-1/2">
            <div id="scrollText" class="w-full max-h-[467px] overflow-y-scroll scroll_Left">
                <?php for ($i = 0; $i < 6; $i++): ?>
                    <p class="slide_txt">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.
                    </p>
                <?php endfor; ?>
            </div>

            <div class="slide_text_overlay">
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const scrollBox = document.getElementById('scrollText');
        const images = document.querySelectorAll('.image-slide');

        if (!scrollBox || images.length === 0) return;

        scrollBox.addEventListener('scroll', function () {
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