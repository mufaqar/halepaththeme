<?php
$images = [
    get_template_directory_uri() . '/assets/images/about-page/about-bg-img_2.png',
    get_template_directory_uri() . '/assets/images/about-page/image_1.png',
    get_template_directory_uri() . '/assets/images/about-page/about-bg-img.png',
];
?>

<section class="max_content mt-14 py-8">
    <main class="container mx-auto px-4 flex items-center md:flex-row flex-col gap-[70px]">

        <!-- LEFT: IMAGES -->
        <div class="md:w-1/2 relative w-full">
            <div class="overflow-x-hidden h-[467px] relative" id="imageContainer">
                <?php foreach ($images as $index => $img): ?>
                    <figure
                        class="absolute inset-0 w-full h-full rounded-2xl overflow-hidden image-slide <?php echo $index === 0 ? 'block' : 'hidden'; ?>"
                        data-index="<?php echo $index; ?>"
                    >
                        <img
                            src="<?php echo esc_url($img); ?>"
                            alt="Image <?php echo $index + 1; ?>"
                            class="w-full h-full object-cover rounded-2xl scale-110"
                        />
                    </figure>
                <?php endforeach; ?>

                <!-- BACKGROUND SHADOW IMAGES -->
                <figure>
                    <img
                        src="<?php echo esc_url($images[0]); ?>"
                        class="w-[80%] mx-auto h-full absolute z-[-1] scale-105 -top-10 rounded-3xl"
                        alt=""
                    />
                </figure>

                <figure>
                    <img
                        src="<?php echo esc_url($images[1]); ?>"
                        class="w-[90%] mx-auto h-full absolute z-[-1] scale-105 -top-5 rounded-3xl"
                        alt=""
                    />
                </figure>
            </div>

            <div class="mt-5 flex justify-center">
                <a href="#"
                   class="bg-secondary hover:bg-white px-9 py-3 text-lg font-medium text-white hover:text-secondary rounded-full border-2 border-secondary">
                    About Us
                </a>
            </div>
        </div>

        <!-- RIGHT: SCROLL TEXT -->
        <div class="relative md:w-1/2">
            <div
                id="scrollText"
                class="w-full max-h-[467px] overflow-y-scroll scroll_Left"
            >
                <?php for ($i = 0; $i < 6; $i++): ?>
                    <p class="md:text-[29px] md:leading-[41px] text-lg font-normal text-title_Clr mb-2">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.
                    </p>
                <?php endfor; ?>
            </div>

            <div class="absolute right-0 left-3 bottom-0 top-[60%] bg-gradient-to-t from-white/90 via-white/80 to-transparent"></div>
        </div>

    </main>
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
