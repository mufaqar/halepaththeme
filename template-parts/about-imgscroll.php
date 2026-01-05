<?php
$about_images = [
    get_template_directory_uri() . '/assets/images/about-page/about-bg-img_2.png',
    get_template_directory_uri() . '/assets/images/about-page/image_1.png',
    get_template_directory_uri() . '/assets/images/about-page/about-bg-img.png',
];
?>

<section class="max_content mt-14 py-8">
    <div class="container mx-auto px-4 flex md:flex-row flex-col items-center gap-[70px]">
        <!-- Left side: Image -->
        <div class="md:w-1/2 relative w-full">
            <div class="overflow-hidden h-[467px] relative" id="image-container">
                <?php foreach ($about_images as $index => $src): ?>
                    <figure
                        class="absolute w-full h-full rounded-2xl overflow-hidden <?php echo $index === 0 ? 'block' : 'hidden'; ?>"
                        data-index="<?php echo $index; ?>">
                        <img src="<?php echo $src; ?>" alt="Image <?php echo $index + 1; ?>"
                            class="w-full h-full object-cover rounded-2xl scale-110">
                    </figure>
                <?php endforeach; ?>

                <!-- Decorative background images -->
                <figure class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/about-bg-img_2.png"
                        class="w-full h-full object-cover rounded-3xl" />
                </figure>
                <figure class="absolute z-[-1] w-[90%] mx-auto h-full top-[-1.25rem] rounded-3xl scale-105">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/image_1.png"
                        class="w-full h-full object-cover rounded-3xl" />
                </figure>
            </div>

            <div class="mt-5 text-center">
                <a href="#"
                    class="bg-secondary hover:bg-white px-9 py-3 text-lg font-medium text-white hover:text-secondary rounded-full border-2 border-secondary flex items-center gap-2 w-fit mx-auto">
                    About Us
                </a>
            </div>
        </div>

        <!-- Right side: Scrollable text -->
        <div class="relative md:w-1/2">
            <div id="scroll-content" class="w-full max-h-[467px] h-full overflow-y-scroll">
                <?php for ($i = 0; $i < 6; $i++): ?>
                    <p class="md:text-[29px] md:leading-[41px] text-lg font-normal text-title_Clr mb-2">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s.
                    </p>
                <?php endfor; ?>
            </div>
            <div
                class="absolute right-0 left-3 bottom-0 bg-gradient-to-t from-white/90 via-white/80 to-transparent top-[60%]">
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const scrollContent = document.getElementById("scroll-content");
        const images = document.querySelectorAll("#image-container figure[data-index]");

        scrollContent.addEventListener("scroll", function () {
            const scrollTop = scrollContent.scrollTop;
            const scrollHeight = scrollContent.scrollHeight - scrollContent.clientHeight;
            const totalImages = images.length;

            const newIndex = Math.min(totalImages - 1, Math.floor((scrollTop / scrollHeight) * totalImages));

            images.forEach((img, index) => {
                if (index === newIndex) {
                    img.classList.remove("hidden");
                    img.classList.add("block");
                } else {
                    img.classList.remove("block");
                    img.classList.add("hidden");
                }
            });
        });
    });
</script>