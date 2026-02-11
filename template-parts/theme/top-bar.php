<!-- Top Bar -->
<div class="bg-secondary py-2.5 hidden md:block">
    <div class="hale_container flex items-center justify-between">
        <ul class="flex items-center divide-x-2 divide-white">
            <li>
                <a href="tel:+9212312312345"
                    class="text-sm font-normal text-white flex items-center gap-1 px-2 cursor-pointer">
                    <i class="fas fa-phone-alt"></i>
                    +92 123 123 12345
                </a>
            </li>
            <li>
                <a href="mailto:loremipsum@gmail.com"
                    class="text-sm font-normal text-white flex items-center gap-1 px-2 cursor-pointer">
                    <i class="fas fa-envelope"></i>
                    loremipsum@gmail.com
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="bg-white py-1.5 hidden lg:block">
    <div class="hale_container flex items-center justify-between">
        <!-- Logo -->
        <div class="lg:block hidden lg:w-[25%] w-1/2">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                    alt="Hale Path Packaging Logo" height="90" width="90" class="h-full w-full" />
            </a>
        </div>
        <div class="lg:block hidden w-1/2">
            <div class="relative w-full">
                <input type="text" id="live-search" placeholder="Search products..." autocomplete="off"
                    class="text-sm md:leading-[40px] font-normal text-[#7C7C7C] placeholder:text-[#7C7C7C] bg-white px-7  border border-secondary focus:border-primary outline-none rounded-full w-full" />

                <div id="live-search-results" class="absolute z-60 w-full mt-1 bg-white rounded-lg shadow-lg hidden">
                </div>
            </div>
        </div>
        <!-- Buttons -->
        <div class="lg:w-1/4 hidden lg:flex gap-5 justify-end">
            <a href="/contact-us"
                class="border-2 border-primary px-5 py-2 text-[13px] uppercase font-medium text-primary rounded-full hover:bg-primary hover:text-white">
                Contact Us
            </a>
            <a href="/get-qoute"
                class="border-2 border-primary bg-primary px-5 py-2 text-[13px] uppercase font-medium text-white rounded-full hover:bg-transparent hover:text-primary">
                Get Quote Now
            </a>
        </div>
    </div>
</div>