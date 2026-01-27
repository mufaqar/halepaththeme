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
<?php
$featureproductsRes = [
    [
        'title' => 'Eco Packaging',
        'excerpt' => 'Sustainable and recyclable packaging solutions.',
        'slug' => ['current' => 'eco-packaging'],
        'gallery' => [
            ['asset' => ['url' => get_template_directory_uri() . '/assets/images/design/1.png']]
        ],
    ],
    [
        'title' => 'Custom Boxes',
        'excerpt' => 'Tailor-made boxes for your brand.',
        'slug' => ['current' => 'custom-boxes'],
        'gallery' => [
            ['asset' => ['url' => get_template_directory_uri() . '/assets/images/design/2.png']]
        ],
    ],
    [
        'title' => 'Luxury Packaging',
        'excerpt' => 'Premium packaging for high-end products.',
        'slug' => ['current' => 'luxury-packaging'],
        'gallery' => [
            ['asset' => ['url' => get_template_directory_uri() . '/assets/images/design/3.png']]
        ],
    ],
    [
        'title' => 'Retail Packs',
        'excerpt' => 'Perfect packaging for retail shelves.',
        'slug' => ['current' => 'retail-packs'],
        'gallery' => [
            ['asset' => ['url' => get_template_directory_uri() . '/assets/images/design/4.png']]
        ],
    ],
];
?>


<?php get_template_part('template-parts/main-banner'); ?>

<?php get_template_part('template-parts/about-imgscroll'); ?>
<!-- Category Slider Starts -->
<section class="bg-[#F5F5F5] py-10">
    <h2 class="h2">
        Our Latest Category
    </h2>

    <?php get_template_part('template-parts/category-slider'); ?>
</section>
<!-- Category Slider end -->
<?php get_template_part('template-parts/home-cta'); ?>
<!-- Product Slider Starts -->
<section class="py-12">
    <div class="hale_container flex flex-col justify-center items-center">
        <h6 class="sub_title">
            Our Products
            <div class="sub_title_line"></div>
        </h6>
        <h2 class="h2">
            Our Latest Products
        </h2>
    </div>

    <?php
    get_template_part(
        'template-parts/product-slider',
        null,
        ['direction' => 'ltr', 'slidesToShow' => 4,]
    ); ?>
    <a href="/products" class="btn_secondry flex items-center gap-2 mt-12 w-fit mx-auto">
        See All Products
    </a>
</section>
<!-- Product Slider end -->
<section class="pb-12 md:px-4 px-4">
    <div
        class="hale_container md:p-14! p-8! bg-secondary flex md:flex-row flex-col gap-7 justify-between items-center rounded-[19px]">
        <!-- Left Text + Button -->
        <div>
            <p class="md:text-4xl text-2xl font-normal text-white mb-10">
                Globally Expertise Delivered Locally
            </p>
            <a href="<?php echo site_url('/products'); ?>" class="btn_primary">
                See All Products
            </a>
        </div>

        <!-- Right Stats -->
        <div class="flex md:flex-row flex-col gap-7 justify-between">
            <div class="count_box">
                <span class=""></span>
                <h3 class="">
                    35
                </h3>
                <p class="">
                    Lorem Ipsum Lorem Ipsum
                </p>
            </div>
            <div class="count_box">
                <span class=""></span>
                <h3 class="">
                    35,000
                </h3>
                <p class="">
                    Lorem Ipsum Lorem Ipsum
                </p>
            </div>
            <div class="count_box">
                <span class=""></span>
                <h3 class="">
                    350
                </h3>
                <p class="">
                    Lorem Ipsum Lorem Ipsum
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Brands Section -->
<section class="pb-12 md:px-4 px-4">
    <div class="hale_container md:p-8! p-8! shadow-[0_0_5px_0_rgba(0,0,0,0.31)] rounded-[19px]">
        <h2 class="h2">
            Brand That Trust Us
        </h2>
        <div class="flex md:flex-row flex-col gap-7 justify-between">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/1.png" alt="brand1" width="179"
                height="101" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/2.png" alt="brand2" width="179"
                height="101" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/3.png" alt="brand3" width="179"
                height="101" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/4.png" alt="brand4" width="179"
                height="101" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/5.png" alt="brand5" width="179"
                height="101" />
        </div>
    </div>
</section>
<!-- Brands Section End -->
<!-- Corrugated Packaging Starts -->
<section class="bg-cover mt-10 bg-no-repeat about_bg"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about-page/bg.png'">
    <div class="hale_container pt-[110px]!">
        <h2 class="text-white font-bold text-3xl md:text-5xl lg:text-[51px]">
            Corrugated Packaging
        </h2>
    </div>
    <div
        class="bg-[#1C2E42] py-10 pr-8 md:p-[46px] max-w-[90%] md:max-w-[80%] lg:max-w-[70%] rounded-tr-[140px] mt-[110px]">
        <div class="hale_container">
            <h5 class="text-white font-bold text-xl md:text-[25px]">
                Hale Path Provide Best Packaging Services
            </h5>
            <p class="font-medium text-white text-xl md:text-[27px] mb-6 mt-2 leading-normal">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's. Lorem Ipsum has
                been the industry's.
            </p>
            <a href="<?php echo site_url('/about-us'); ?>"
                class="bg-[#53B6C9] px-[35px] rounded-full font-medium text-[17px] py-[14px] inline-block">
                About Us
            </a>
        </div>
    </div>
</section>
<!-- Corrugated Packaging End -->
<!-- Product Slider Starts -->
<section class="py-12">
    <?php
        get_template_part(
            'template-parts/product-slider',
            null,
            [
                'category'     => 'custom-boxes',
                'slidesToShow' => 5,
                'direction'    => 'ltr'
            ]
        );?>
</section>
<!-- Product Slider end -->
<!-- CTA Starts -->
<?php get_template_part('template-parts/home-cta'); ?>
<!-- CTA end -->
<!-- Product Slider Starts -->
<section class="py-12">
    <?php
    get_template_part(
        'template-parts/product-slider',
        null,
        ['direction' => 'ltr', 'slidesToShow' => 5,]
    ); ?>
</section>
<!-- Product Slider end -->
<!-- Qoute Section Starts -->
<?php get_template_part('template-parts/get-qoute', ); ?>
<!-- Qoute Section end -->
<!-- What We Offer Starts -->
<?php get_template_part('template-parts/what-weoffer', ); ?>
<!-- What We Offer end -->
<!-- About Slider Starts -->
<section class="about pt-[60px]">
    <div class="hale_container flex flex-col justify-center items-center">
        <h6 class="text-[#1C2E42] font-semibold flex gap-2 items-center">
            What We Offer
            <div class="sub_title_line"></div>
        </h6>
       <h2 class="h2">
            Sustainable Products & Services
        </h2>
    </div>
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
<!-- About Slider end -->
<!-- Category Slider Starts -->
<section class="py-16 bg-[#EAF6F9]">
    <div class="mb-16">
        <h2 class="h2 md:mb-5!">
            Explore Our Custom Printing and Packaging Design
        </h2>
        <p class="text-lg font-normal text-txt_Clr text-center md:w-5/6 mx-auto">
            Start designing unique boxes with different styles, sizes, and
            choices. Custom rigid boxes or Kraft boxes for retail products and
            many more?We can help, Custom printing and packaging services ideas
            abound.
        </p>
    </div>

    <?php get_template_part('template-parts/category-slider'); ?>
</section>
<!-- Category Slider end -->

<!-- The work we do Starts -->
<section class="py-16">
    <div class="hale_container">
        <h2 class="h2 md:mb-5!">
            The work we do and <span class="text-primary">love doing</span>
        </h2>
        <p class="md:text-xl text-base font-normal text-title_Clr text-center max-w-[640px] mx-auto">
            Lorem Ipsum is simply dummy to text of the printing and typesetting industry. Lorem and Ipsum has been the
            industry's standard.
        </p>
        <a href="<?php echo site_url('/products'); ?>" class="btn_secondry flex items-center gap-2 mt-12 w-fit mx-auto">
            See All Products
        </a>
    </div>

    <div class="hale_container flex md:flex-row flex-col md:gap-40 gap-7 mt-10">
        <div class="md:w-1/2 w-full flex md:flex-row flex-col items-start gap-7 [&>*:nth-child(1)]:md:-mt-40">
            <?php foreach ([$featureproductsRes[0], $featureproductsRes[1]] as $product): ?>
                <div class='feature_box'>
                    <div>
                        <a href="<?php echo esc_url($product['slug']['current']); ?>">
                            <img src="<?php echo esc_url($product['gallery'][0]['asset']['url']); ?>" alt="img"
                                class='img-full h-auto!' width="292" height="226" />
                        </a>
                    </div>
                    <div class='md:p-8 p-6'>
                        <h3 class=''>
                            <a
                                href="<?php echo esc_url($product['slug']['current']); ?>"><?php echo esc_html($product['title']); ?></a>
                        </h3>
                        <p class='md:text-xl text-lg font-normal text-title_Clr'>
                            <?php echo esc_html($product['excerpt']); ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="md:w-1/2 w-full flex md:flex-row flex-col items-start gap-7 [&>*:nth-child(2)]:md:-mt-40">
            <?php foreach ([$featureproductsRes[2], $featureproductsRes[3]] as $product): ?>
                <div class='feature_box'>
                    <div>
                        <a href="<?php echo esc_url($product['slug']['current']); ?>">
                            <img src="<?php echo esc_url($product['gallery'][0]['asset']['url']); ?>" alt="img"
                                class='img-full h-auto!' width="292" height="226" />
                        </a>
                    </div>
                    <div class='md:p-8 p-6'>
                        <h3 class=''>
                            <a
                                href="<?php echo esc_url($product['slug']['current']); ?>"><?php echo esc_html($product['title']); ?></a>
                        </h3>
                        <p class=''>
                            <?php echo esc_html($product['excerpt']); ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- The work we do end -->

<!-- Testimonial And Faq Starts -->
<?php get_template_part('template-parts/testimonial-and-faq'); ?>
<!-- Testimonial And Faq end -->


<!-- Career Section Start -->
<section class="md:pt-24 pb-10 py-16 px-4 md:pr-20">
    <div class="relative container mx-auto px-8 bg-cover bg-no-repeat bg-center rounded-[20px] md:pt-14 md:pl-14 md:pr-0 p-10 md:pb-0 pb-0"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/career-bg.png'">
        <div class="flex md:flex-row flex-col md:gap-8 gap-8">
            <!-- Left Content -->
            <div class="md:w-2/5 w-full">
                <p
                    class="text-lg font-normal text-white mb-7 uppercase tracking-[5px] border-l-2 border-secondary pl-1.5">
                    Careers with Ball
                </p>
                <h2 class="md:text-[56px] md:leading-normal text-4xl font-medium text-white mb-9">
                    Be unstoppable.
                </h2>
                <p class="text-base font-normal text-white mb-6">
                    <strong>We believe our packaging can change the world — and you can too.</strong> Join us on our
                    journey to provide the most sustainable packaging solutions on the planet.
                </p>
                <p class="text-base font-normal text-white">
                    With Ball, you’re working toward something bigger than yourself.
                </p>
                <a href="#"
                    class="bg-secondary hover:bg-white px-8 py-2.5 text-sm font-medium text-white hover:text-secondary rounded-full border-2 border-secondary flex items-center gap-2 mt-8 w-fit">
                    Explore Ball Careers
                </a>
                <ul class="career_list text-white flex flex-col gap-4 md:mt-16 mt-10 md:mb-24 mb-10">
                    <li class="text-base font-medium text-white">Medical, dental and vision insurance</li>
                    <li class="text-base font-medium text-white">Employee stock purchase and company match</li>
                    <li class="text-base font-medium text-white">Paid holidays, vacation and sick leave & parental leave
                    </li>
                    <li class="text-base font-medium text-white">Life Insurance</li>
                    <li class="text-base font-medium text-white">401(k) plan</li>
                </ul>
            </div>

            <!-- Right Content / Team Images -->
            <div class="md:w-3/5 w-full flex md:flex-row flex-col items-start gap-5 md:-mr-20">
                <div class="w-full rounded-[13px] shadow-[0_233px_93px_0_rgba(1,97,207,0.05)]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team1.png" alt="team1"
                        class="w-full object-cover object-center rounded-[13px]">
                </div>
                <div class="w-full rounded-[13px] shadow-[0_233px_93px_0_rgba(1,97,207,0.05)]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team2.png" alt="team2"
                        class="w-full object-cover object-center rounded-[13px]">
                </div>
                <div class="w-full rounded-[13px] shadow-[0_233px_93px_0_rgba(1,97,207,0.05)]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team2.png" alt="team2"
                        class="w-full object-cover object-center rounded-[13px]">
                </div>
                <div class="w-full rounded-[13px] shadow-[0_233px_93px_0_rgba(1,97,207,0.05)]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team3.png" alt="team3"
                        class="w-full object-cover object-center rounded-[13px]">
                </div>
            </div>

            <!-- Background Main Image -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/teammain.png" alt="teammain"
                class="absolute bottom-0 right-0 ml-auto mr-0 md:w-2/3">
        </div>
    </div>
</section>

<!-- Career Section Ends -->
<!-- Instagram Starts -->
<section class="bg-[#EAF6F9] pt-14 px-4">
    <h2 class="h2">
        Instagram Posts
    </h2>
    <div class="mt-9 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
        <!-- First Image -->
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/i1.png"
                alt="Instagram Post 1" class="w-full h-full" />
        </div>
        <!-- Next 4 Images -->
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/o<?php echo $i; ?>.png"
                    alt="Instagram Post <?php echo $i + 1; ?>" class="w-full h-full" />
            </div>
        <?php endfor; ?>
    </div>
</section>
<!-- Instagram end -->
<?php get_footer() ?>

<script>
    jQuery(document).ready(function ($) {
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