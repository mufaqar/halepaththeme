<?php /** Template Name: Home */ get_header();

?>

<?php
    $steps = [
        [
            "id" => 1,
            "title" => "Book Online",
            "description" => "Lpsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been."
        ],
        [
            "id" => 2,
            "title" => "Choose Design",
            "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
        ],
        [
            "id" => 3,
            "title" => "Confirmation",
            "description" => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."
        ],
        [
            "id" => 4,
            "title" => "Delivery",
            "description" => "Lpsum is simply dummy text of the printing and typesetting is industry. Lorem Ipsum has been."
        ],
    ];
    ?>

     <?php
    $slides = [
      [
        "image" => "/assets/images/about-page/slider.png",
        "title" => "Good Quality Packaging",
        "link"  => "#",
        "bg"    => "slider_bg",
        "text"  => ""
      ],
      [
        "image" => "/assets/images/about-page/s1.png",
        "title" => "Good Quality Packaging",
        "link"  => "#",
        "bg"    => "slider_bg2",
        "text"  => "text-white"
      ],
      [
        "image" => "/assets/images/about-page/s2.webp",
        "title" => "Good Quality Packaging",
        "link"  => "#",
        "bg"    => "slider_bg3",
        "text"  => "text-white"
      ],
    ];
    ?>






<section class="pt-[60px] bg-[#F5F5F5]">
    <div class="container flex flex-col justify-center items-center mx-auto px-4">
        <h6 class="text-[#1C2E42] font-semibold flex gap-2 items-center">
            What We Offer dfadsfadfdfsdfsdfsd
            <div class="h-[3px] bg-[#1C2E42] w-16"></div>
        </h6>

        <h2 class="text-2xl lg:text-[43px] text-center font-semibold leading-normal">
            Sustainable Products & Services
        </h2>
    </div>

    <div class="offerbg bg-cover bg-no-repeat mt-60 border border-black">
        <div class="container mx-auto px-4">
            <div
                class="p-6 bg-white grid grid-cols-1 pb-24 gap-5 xl:gap-2 sm:grid-cols-2 xl:grid-cols-4 mb-32 -mt-48 border">

                <?php for ($i = 1; $i <= 4; $i++) : ?>
                <div class="relative">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/o<?php echo $i; ?>.png"
                        alt="Offer Image <?php echo $i; ?>" class="w-full" width="344" height="344" />

                    <div class="px-4 absolute -bottom-28 left-4 right-4 z-10">
                        <div class="border bg-white p-3 px-5">
                            <h5
                                class="flex group cursor-pointer md:text-xl lg:text-2xl font-medium justify-between border-b-[3px] py-3 pt-1 border-black">
                                Packaging
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/li_move-up-right.svg"
                                    alt="Arrow Icon" class="group-hover:scale-110 transition-all duration-300"
                                    width="30" height="30" />
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

<section class="bg-secondary py-7">
    <div class="container mx-auto px-4 flex md:flex-row flex-col items-center gap-7 justify-between">
        <div class="md:w-2/3 w-full flex flex-wrap items-center gap-3">
            <h6 class="md:text-xl text-lg font-normal text-white mr-4">
                Need More This Special Year?
            </h6>
            <p class="md:text-3xl text-xl font-normal text-primary">30%</p>
            <p class="md:text-3xl text-xl font-normal text-white">
                Discount Bulk Shopping
            </p>
        </div>
        <div class="md:w-1/3 w-full">
            <Link href="#"
                class="bg-primary hover:bg-white px-5 py-4 text-lg font-medium text-white hover:text-primary rounded-full border-2 border-primary flex w-fit ml-auto md:mr-0 mr-auto items-center gap-2">
            Order Now
            </Link>
        </div>
    </div>
</section>



<section class="pb-12 md:px-4 px-4">
    <div
        class="container mx-auto md:p-14 p-8 bg-secondary flex md:flex-row flex-col gap-7 justify-between items-center rounded-[19px]">
        <!-- LEFT TEXT & BUTTON -->
        <div>
            <p class="md:text-4xl text-2xl font-normal text-white mb-10">
                Globally Expertise Delivered Locally
            </p>
            <a href="/products"
                class="bg-primary hover:bg-white px-9 py-3 text-lg font-medium text-white hover:text-primary rounded-full border-2 border-primary flex items-center gap-2 w-fit">
                See All Products
            </a>
        </div>
        <!-- RIGHT STATS -->
        <div class="flex md:flex-row flex-col gap-7 justify-between">
            <div>
                <span class="block border-b-2 border-primary max-w-[61px] w-full"></span>
                <h3 class="md:text-5xl text-3xl font-bold text-white my-6">
                    35
                </h3>
                <p class="text-lg font-normal text-white">
                    Lorem Ipsum Lorem Ipsum
                </p>
            </div>
            <div>
                <span class="block border-b-2 border-primary max-w-[61px] w-full"></span>
                <h3 class="md:text-5xl text-3xl font-bold text-white my-6">
                    35,000
                </h3>
                <p class="text-lg font-normal text-white">
                    Lorem Ipsum Lorem Ipsum
                </p>
            </div>
            <div>
                <span class="block border-b-2 border-primary max-w-[61px] w-full"></span>
                <h3 class="md:text-5xl text-3xl font-bold text-white my-6">
                    350
                </h3>
                <p class="text-lg font-normal text-white">
                    Lorem Ipsum Lorem Ipsum
                </p>
            </div>
        </div>
    </div>
</section>


<section class="pb-12 md:px-4 px-4">
  <div class="container mx-auto md:p-8 p-8 shadow-[0_0_5px_0_rgba(0,0,0,0.31)] rounded-[19px]">
    <h2 class="md:text-4xl text-2xl font-bold text-title_Clr text-center mb-10">
      Brand That Trust Us
    </h2>
    <div class="flex md:flex-row flex-col gap-7 justify-between">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/1.png" alt="brand1" class="w-[179px] h-[101px]" />
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/2.png" alt="brand2" class="w-[179px] h-[101px]" />
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/3.png" alt="brand3" class="w-[179px] h-[101px]" />
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/4.png" alt="brand4" class="w-[179px] h-[101px]" />
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/5.png" alt="brand5" class="w-[179px] h-[101px]" />
    </div>
  </div>
</section>



<section class="bg-cover mt-10 bg-no-repeat about_bg">
  <div class="container mx-auto px-4 pt-[110px]">
    <h2 class="text-white font-bold text-3xl md:text-5xl lg:text-[51px]">
      Corrugated Packaging
    </h2>
  </div>
  <div class="bg-[#1C2E42] py-10 pr-8 md:p-[46px] max-w-[90%] md:max-w-[80%] lg:max-w-[70%] rounded-tr-[140px] mt-[110px]">
    <div class="container mx-auto px-4">  
      <h5 class="text-white font-bold text-xl md:text-[25px]">
        Hale Path Provide Best Packaging Services
      </h5>
      <p class="font-medium text-white text-xl md:text-[27px] mb-6 mt-2 leading-normal">
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's. Lorem Ipsum has
        been the industry's.
      </p>
      <a href="/about-us" class="bg-[#53B6C9] px-[35px] rounded-full font-medium text-[17px] py-[14px] inline-block">
        About Us
      </a>
    </div>
  </div>
</section>



<section class="bg-secondary py-7">
  <div class="container mx-auto px-4 flex md:flex-row flex-col items-center gap-7 justify-between">
    <!-- LEFT TEXT -->
    <div class="md:w-2/3 w-full flex flex-wrap items-center gap-3">
      <h6 class="md:text-xl text-lg font-normal text-white mr-4">
        Need More This Special Year?
      </h6>
      <p class="md:text-3xl text-xl font-normal text-primary">30%</p>
      <p class="md:text-3xl text-xl font-normal text-white">
        Discount Bulk Shopping
      </p>
    </div>
    <!-- RIGHT BUTTON -->
    <div class="md:w-1/3 w-full">
      <a href="#" class="bg-primary hover:bg-white px-5 py-4 text-lg font-medium text-white hover:text-primary rounded-full border-2 border-primary flex w-fit ml-auto md:mr-0 mr-auto items-center gap-2">
        Order Now
      </a>
    </div>
  </div>
</section>



<section class="md:py-14 py-10 relative bg-center bg-no-repeat bg-cover "
    style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/qoute-bg.png')">
    <div class="container mx-auto px-4 relative z-10 flex md:flex-row flex-col gap-7">
      <!-- LEFT -->
        <div class="md:w-1/2 w-full">
            <div
                class="bg-title_Clr h-full max-w-[546px] mx-auto rounded-2xl md:px-14 md:py-8 p-8 md:gap-12 gap-12 flex flex-col">
                <?php foreach ($steps as $index => $step): ?>
                <div class="relative flex md:flex-row flex-col md:gap-[30px] gap-7">
                    <span
                        class="text-xl font-medium text-white PoppinsMedium bg-secondary p-[18px] border-[18px] border-primary rounded-full flex items-center justify-center w-[89px] h-[89px] <?php echo $index === count($steps) - 1 ? '' : 'before_line'; ?>">
                        <?php echo sprintf("0%d", $step['id']); ?>
                    </span>
                    <div>
                        <h4 class="text-xl font-medium text-primary mb-2 PoppinsMedium">
                            <?php echo $step['title']; ?>
                        </h4>
                        <p class="text-sm font-light text-white">
                            <?php echo $step['description']; ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- RIGHT -->
        <div class="md:w-1/2 w-full ">
            <h4 class="text-xl font-semibold text-white mb-4 flex items-center gap-3">
                <span>Contact Us</span>
                <span class="block border-b-2 border-white max-w-[61px] w-full"></span>
            </h4>
            <h2 class="md:text-4xl text-3xl font-bold text-white mb-8">
                Request Your Any Query Now!
            </h2>
            <form id="contactForm" class="grid w-full gap-4 items-center mt-5 bg-primary md:p-8 p-6 rounded-[19px]">
                <div class="flex gap-4">
                    <input class="input" type="text" name="fullname" placeholder="Full Name" required>
                    <input class="input" type="tel" name="phone" placeholder="Your Contact" required>
                </div>
                <div class="flex gap-4">
                    <input class="input" type="email" name="email" placeholder="Email Address" required>
                    <select class="input" name="product">
                        <option>Select the Product</option>
                        <option>Product1</option>
                    </select>
                </div>
                <textarea class="input" name="message" rows="3" placeholder="Write Your Message..."></textarea>
                <label class="text-white">
                    <input type="checkbox" required> I Agree that my data is collected and stored.
                </label>
                <button id="submitBtn" type="submit"
                    class="text-lg font-normal text-white bg-secondary rounded-full w-full">
                    SUBMIT
                </button>
                <p id="formMsg" class="text-white mt-2"></p>
            </form>
        </div>
    </div>
</section>


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
    <div class="offerbg bg-cover bg-no-repeat mt-60 border border-black">
        <div class="container mx-auto px-4">
            <div
                class="p-6 bg-white grid grid-cols-1 pb-24 gap-5 xl:gap-2 sm:grid-cols-2 xl:grid-cols-4 mb-32 -mt-48 border">
                <?php
        $offers = [
          "Packaging",
          "Recycling",
          "Eco Materials",
          "Green Energy"
        ];
        foreach ($offers as $index => $title):
        ?>
                <div class="relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/o<?php echo $index + 1; ?>.png"
                        alt="<?php echo esc_attr($title); ?>" class="w-full" width="344" height="344" />
                    <div class="px-4 absolute -bottom-28 left-4 right-4 z-10">
                        <div class="border bg-white p-3 px-5">
                            <h5
                                class="flex group cursor-pointer md:text-xl lg:text-2xl font-medium justify-between border-b-[3px] py-3 pt-1 border-black">
                                <?php echo esc_html($title); ?>
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
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>


<section class="about">
    <div class="slider-full">
        <?php foreach ($slides as $slide): ?>
        <div class="!grid md:grid-cols-2 slider-item">
            <!-- IMAGE -->
            <figure>
                <img src="<?php echo get_template_directory_uri() . $slide['image']; ?>" alt="Packaging Image"
                    class="w-full object-cover h-[400px] md:h-[690px]" />
            </figure>
            <!-- CONTENT -->
            <div
                class="bg-cover bg-no-repeat flex justify-center md:items-center flex-col px-10 md:px-5 pb-14 md:pb-10 py-10 p-5 <?php echo $slide['bg']; ?>">
                <div class="<?php echo $slide['text']; ?> slider-content">
                    <h6 class="font-semibold text-xl relative w-fit animate-slide">
                        Hale Path Packaging
                    </h6>
                    <h2
                        class="font-semibold relative my-2 xl:text-[100px] max-w-[580px] text-[50px] leading-[60px] lg:text-[70px] lg:leading-[80px] xl:leading-[105px] animate-slide delay-200">
                        <?php echo esc_html($slide['title']); ?>
                    </h2>
                    <div class="flex mt-5 animate-slide delay-400">
                        <a href="<?php echo esc_url($slide['link']); ?>"
                            class="bg-[#1C2E42] text-white px-[35px] rounded-full font-medium text-[17px] py-[14px]">
                            Learn more
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>



<section class="bg-[#EAF6F9] pt-14 px-4">
    <h2 class="text-3xl sm:text-[43px] lg:leading-[50px] mt-5 font-semibold leading-normal text-center">
        Instagram Posts
    </h2>
    <div class="mt-9 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
        <!-- First Image -->
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/i1.png"
                alt="Instagram Post 1" class="w-full h-full" />
        </div>
        <!-- Next 4 Images -->
        <?php for ($i = 1; $i <= 4; $i++) : ?>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/o<?php echo $i; ?>.png"
                alt="Instagram Post <?php echo $i + 1; ?>" class="w-full h-full" />
        </div>
        <?php endfor; ?>
    </div>
</section>







<?php get_footer()?>





<script>
    jQuery(document).ready(function($) {
        $('.slider-full').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true
        });
    });
    </script>