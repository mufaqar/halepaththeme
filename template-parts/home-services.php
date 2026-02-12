<?php
$slides = [
    [
        "image" => "/assets/images/about-page/slider.png",
        "title" => "Good Quality Packaging",
        "link" => "#",
        "bg" => "slider_bg",
        "text" => ""
    ],
    [
        "image" => "/assets/images/about-page/s1.png",
        "title" => "Good Quality Packaging",
        "link" => "#",
        "bg" => "slider_bg2",
        "text" => "text-white"
    ],
    [
        "image" => "/assets/images/about-page/s2.webp",
        "title" => "Good Quality Packaging",
        "link" => "#",
        "bg" => "slider_bg3",
        "text" => "text-white"
    ],
];
?>
<section class="about">
    <div class="slider-full">
        <?php foreach ($slides as $slide): ?>
        <div class="!grid md:grid-cols-2 slider-item">
            <!-- IMAGE -->
            <figure class="h-full">
                <img src="<?php echo get_template_directory_uri() . $slide['image']; ?>" alt="Packaging Image"
                    class="img-full" />
            </figure>
            <!-- CONTENT -->
            <div
                class="bg-cover bg-no-repeat flex justify-center md:items-center flex-col px-10 md:px-5 pb-14 md:pb-10 py-10 p-5 <?php echo $slide['bg']; ?>">
                <div class="<?php echo $slide['text']; ?> slider-content">
                    <h6 class="animate-slide">
                        Hale Path Packaging
                    </h6>
                    <h2 class="animate-slide delay-200">
                        <?php echo esc_html($slide['title']); ?>
                    </h2>
                    <div class="flex mt-5 animate-slide delay-400">
                        <a href="<?php echo esc_url($slide['link']); ?>" class="btn_secondry">
                            Learn more
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>