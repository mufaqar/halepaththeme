<section class="bg-cover mt-10 bg-no-repeat about_bg"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about-page/bg.png'">
    <div class="hale_container pt-[110px]!">
        <h2 class="text-white font-bold text-3xl md:text-5xl lg:text-[51px]">
            Corrugated Packaging
        </h2>
    </div>
    <div
        class="bg-secondary/50 backdrop-blur-sm py-10 pr-8 md:p-[46px] max-w-[90%] md:max-w-[80%] lg:max-w-[70%] rounded-tr-[140px] mt-[110px]">
        <div class="hale_container">
            <h5 class="text-white font-bold text-xl md:text-[25px]">
                Hale Path Provide Best Packaging Services
            </h5>
            <p class="font-medium text-white text-xl md:text-[27px] mb-6 mt-2 leading-normal">
                At Hale Path Packaging, we deliver premium corrugated packaging across the UK& whole Europe, combining
                strength, precision printing, and luxury finishes. Our custom boxes protect your products, elevate your
                brand, and ensure reliable nationwide delivery with trusted quality.
            </p>

        </div>
    </div>
</section>


<section class="py-12">
    <div class="hale_container flex flex-col justify-center items-center">
        <h6 class="sub_title">
            Our Products
            <div class="sub_title_line"></div>
        </h6>
        <h2 class="h2">
            Corrugated Packaging
        </h2>
    </div>
    <?php
        get_template_part(
            'template-parts/product-slider',
            null,
            [
                'category'     => 'custom-boxes',
                'slidesToShow' => 4,
                'direction'    => 'ltr'
            ]
        );?>
</section>

<section class="py-12">
    <?php
    get_template_part(
        'template-parts/product-slider',
        null,
        ['direction' => 'ltr', 'slidesToShow' => 4,]
    ); ?>

    <a href="/products" class="btn_secondry flex items-center gap-2 mt-12 w-fit mx-auto">
        See All Corrugated Packaging
    </a>
</section>