<section class="pt-[60px] bg-[#F5F5F5]">
    <div class="container flex flex-col justify-center items-center mx-auto px-4">
        <h6 class="text-[#1C2E42] font-semibold flex gap-2 items-center">
            What We Offer
            <div class="h-[3px] bg-[#1C2E42] w-16"></div>
        </h6>
        <h2 class="text-2xl lg:text-[43px] text-center font-semibold leading-normal">
            Sustainable Products & Services
        </h2>
    </div>
    <div class="offerbg bg-cover bg-no-repeat mt-60 border" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about-page/offer-bg.png'">
        <div class="container mx-auto px-4">
            <div
                class="p-6 bg-white grid grid-cols-1 pb-24 gap-5 xl:gap-2 sm:grid-cols-2 xl:grid-cols-4 mb-32 -mt-48 border border-black/10">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <div class="relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/o<?php echo $i; ?>.png"
                            alt="" class="w-full" width="344" height="344" />
                        <div class="px-4 absolute -bottom-28 left-4 right-4 z-10">
                            <div class="border border-black/10 bg-white p-3 px-5">
                                <h5
                                    class="flex group cursor-pointer md:text-xl lg:text-2xl font-medium justify-between border-b-[3px] py-3 pt-1 border-black">
                                    Packaging
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/li_move-up-right.svg"
                                        alt="" class="group-hover:scale-110 transition-all duration-300" width="30"
                                        height="30" />
                                </h5>
                                <p class="mt-3">Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>