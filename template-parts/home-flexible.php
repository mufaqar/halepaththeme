<section class="py-12">
    <div class="hale_container flex flex-col justify-center items-center">
       
        <h2 class="h2">
            Flexible Packaging / Maylar bags
        </h2>
         <p class="text-lg font-normal text-txt_Clr text-center md:w-5/6 mx-auto">
          Flexible Solutions, Unmatched Quality – Packaging That Sells Your Brand.
        </p>
    </div>

    <?php
        get_template_part(
            'template-parts/product-slider',
            null,
            [
                'category'     => 'flexible-packaging-pouches',
                'slidesToShow' => 4,
                'direction'    => 'ltr'
            ]
        );?>
    <a href="<?php echo home_url('/product-category/flexible-packaging-pouches'); ?>" class="btn_secondry flex items-center gap-2 mt-12 w-fit mx-auto">
        See All Flexible Packaging
    </a>
</section>