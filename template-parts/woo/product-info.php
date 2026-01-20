<section class="mt-20 max-w-[2200px] mx-auto px-3 lg:px-0">
	<h2 class="text-2xl text-center mb-8 sm:text-3xl md:text-5xl font-bold">
		Custom Retail Boxes Gallery
	</h2>
	<?php


	$product_gallery =  get_field('product_gallery');

	//var_dump($product_gallery);
	// Static images array
	// $images = [
	// 	[
	// 		'url' => get_template_directory_uri() . '/assets/images/product/gallery1.jpg',
	// 		'alt' => 'Custom Retail Box 1',
	// 	],
	// 	[
	// 		'url' => get_template_directory_uri() . '/assets/images/product/gallery2.jpg',
	// 		'alt' => 'Custom Retail Box 2',
	// 	],
	// 	[
	// 		'url' => get_template_directory_uri() . '/assets/images/product/gallery3.jpg',
	// 		'alt' => 'Custom Retail Box 3',
	// 	],
	// 	[
	// 		'url' => get_template_directory_uri() . '/assets/images/product/gallery4.jpg',
	// 		'alt' => 'Custom Retail Box 4',
	// 	],
	// 	[
	// 		'url' => get_template_directory_uri() . '/assets/images/product/gallery5.jpg',
	// 		'alt' => 'Custom Retail Box 5',
	// 	],
	// 	[
	// 		'url' => get_template_directory_uri() . '/assets/images/product/gallery6.jpg',
	// 		'alt' => 'Custom Retail Box 5',
	// 	],
	// 	[
	// 		'url' => get_template_directory_uri() . '/assets/images/product/gallery7.jpg',
	// 		'alt' => 'Custom Retail Box 5',
	// 	],
	// 	[
	// 		'url' => get_template_directory_uri() . '/assets/images/product/gallery8.png',
	// 		'alt' => 'Custom Retail Box 5',
	// 	],
	// ];

	if (empty($product_gallery)) {
		return;
	}
	?>

	<div class="relative w-full py-8">
		<!-- Navigation Buttons -->
		<button
			class="swiper-prev min-w-[32px] cursor-pointer text-xs absolute left-1 top-1/2 -translate-y-1/2 z-10 bg-gray-700 text-white p-2 rounded-full hover:bg-gray-900"
			aria-label="Previous Slide">
			<i class="fa fa-chevron-left"></i>
		</button>

		<button
			class="swiper-next min-w-[32px] cursor-pointer text-xs absolute right-1 top-1/2 -translate-y-1/2 z-10 bg-gray-700 text-white p-2 rounded-full hover:bg-gray-900"
			aria-label="Next Slide">
			<i class="fa fa-chevron-right"></i>
		</button>

		<!-- Swiper -->
		<div class="swiper mySwiper h-[480px]">
			<div class="swiper-wrapper">
				<?php foreach ($product_gallery as $index => $image): ?>
					<div class="swiper-slide">
						<figure class="rounded-2xl overflow-hidden">
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
								loading="lazy" class="!h-[460px] w-full object-cover scale-105 rounded-2xl">
						</figure>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			new Swiper(".mySwiper", {
				effect: "coverflow",
				grabCursor: true,
				centeredSlides: true,
				loop: true,
				coverflowEffect: {
					rotate: 0,
					stretch: 0,
					depth: 200,
					modifier: 1,
					slideShadows: false,
				},
				navigation: {
					prevEl: ".swiper-prev",
					nextEl: ".swiper-next",
				},
				breakpoints: {
					320: { slidesPerView: 1 },
					640: { slidesPerView: 2 },
					1024: { slidesPerView: 4 },
				},
			});
		});
	</script>
</section>

<!-- <section class="my-10">
	<div class="hale_container md:flex items-center gap-5 md:gap-0 flex-row-reverse">
		
		<figure class="md:w-1/2">
			<img alt="Why Us Image" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/candle.png"
				height="424" width="678">
		</figure>
		<div class="flex md:w-1/2 justify-center md:justify-start items-center md:items-start flex-col">
			<h4 class="text-[#111827] mt-5 md:mt-0 font-bold text-3xl text-center md:text-left mb-4">Premium Candle
				Accessories Boxes for the Packaging Industry</h4>
			<p class="mb-7 text-center md:text-left">In today’s evolving packaging industry, candle accessories boxes
				play a vital role in brand presentation. Hale Path Packaging crafts elegant, eco-friendly boxes for
				tools like wick trimmers, snuffers, and matches. Designed for protection and beauty, our packaging
				enhances unboxing experiences while aligning with sustainability trends. We offer customizable shapes,
				inserts, and luxury finishes to match your brand style. With Hale Path Packaging, elevate every element
				of your candle offering—from scent to storage—with premium, detail-focused packaging solutions.

			</p>
			<a class="py-[9px] px-[41px] text-white bg-[#1C2E42] rounded-md" href="#">Get Custom Quote</a>
		</div>
	</div>
</section> -->

<!-- <section class="my-10">
	<div class="hale_container md:flex items-center gap-5 md:gap-0 flex-row">
	
		<figure class="md:w-1/2">
			<img alt="Why Us Image" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/disposle.png"
				height="424" width="678">
		</figure>
		<div class="flex md:w-1/2 justify-center md:justify-start items-center md:items-start flex-col">
			<h4 class="text-[#111827] mt-5 md:mt-0 font-bold text-3xl text-center md:text-left mb-4">Premium Candle
				Accessories Boxes for the Packaging Industry</h4>
			<p class="mb-7 text-center md:text-left">In today’s evolving packaging industry, candle accessories boxes
				play a vital role in brand presentation. Hale Path Packaging crafts elegant, eco-friendly boxes for
				tools like wick trimmers, snuffers, and matches. Designed for protection and beauty, our packaging
				enhances unboxing experiences while aligning with sustainability trends. We offer customizable shapes,
				inserts, and luxury finishes to match your brand style. With Hale Path Packaging, elevate every element
				of your candle offering—from scent to storage—with premium, detail-focused packaging solutions.

			</p>
			<a class="py-[9px] px-[41px] text-white bg-[#1C2E42] rounded-md" href="#">Get Custom Quote</a>
		</div>
	</div>
</section> -->

<section class="pt-16">
	<h2 class="font-extrabold md:text-4xl text-2xl text-center text-title_Clr mb-5">Learn More About <?php the_title()?></h2>
	<div class="hale_container desc_content mt-5 overflow-y-auto max_content max-h-[812px]">
		<?php the_content(); ?>
	</div>
</section>
<!-- Capabilities Section Start -->
<section class="hale_container mt-20">
	<!-- Section Title -->
	<span class="text-[#111827] font-bold text-2xl">Our Capabilities</span>
	<!-- Capabilities Grid -->
	<div class="mt-12 grid grid-cols-3 sm:grid-cols-5 md:grid-cols-6 lg:grid-cols-8 gap-2">
		<!-- Capability Items -->
		<div class="icon_box">
			<img alt="International Sourcing"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/category/glob.png" />
			<h6 class="">International Sourcing</h6>
		</div>

		<div class="icon_box">
			<img alt="Easy Price Matching"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/category/price_icon.png" />
			<h6 class="">Easy Price Matching</h6>
		</div>

		<div class="icon_box">
			<img alt="3D Design Studio"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/category/studio.png" />
			<h6 class="">3D Design Studio</h6>
		</div>

		<div class="icon_box">
			<img alt="Multiple Lead Times Option"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/category/calculator.png" />
			<h6 class="">Multiple Lead Times Option to Fit Your Budget
			</h6>
		</div>

		<div class="icon_box">
			<img alt="Printing Capacity"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/category/capacity.png" />
			<h6 class="">Printing Capacity of One Million Quantities in
				One Day</h6>
		</div>

		<div class="icon_box">
			<img alt="24/7 Service"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/category/agent.png" />
			<h6 class="">24/7 Service</h6>
		</div>

		<div class="icon_box">
			<img alt="Flexible Payment Terms"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/category/payment.png" />
			<h6 class="">Flexible Payment Terms</h6>
		</div>

		<div class="icon_box">
			<img alt="Warehousing and IMS"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/category/house.png" />
			<h6 class="">Warehousing and IMS</h6>
		</div>

	</div>
	<!-- Buttons -->
	<div class="flex flex-col sm:flex-row text-center gap-4 mt-6">
		<a class="btn_secondry" href="/category/product-by-industry#">
			Browse Our Catalogue
		</a>
		<a class="btn_secondry" href="/category/product-by-industry#">
			View Company Profile
		</a>
	</div>
</section>
<!-- Capabilities Section End -->

<?php
get_template_part('template-parts/woo/product-faq'); ?>

<section class="mt-20 overflow-hidden">
	<div class="hale_container">
		<h2 class="md:text-[51px] md:leading-normal text-3xl font-bold text-title_Clr text-center mb-4">
			Related Products
		</h2>
	</div>

	<?php
	// Static array of products
	$products = [
		['title' => 'Product One', 'slug' => 'product-one', 'image' => get_template_directory_uri() . '/assets/images/product/boxgal3.png'],
		['title' => 'Product Two', 'slug' => 'product-two', 'image' => get_template_directory_uri() . '/assets/images/product/boxgal3.png'],
		['title' => 'Product Three', 'slug' => 'product-three', 'image' => get_template_directory_uri() . '/assets/images/product/boxgal3.png'],
		['title' => 'Product Four', 'slug' => 'product-four', 'image' => get_template_directory_uri() . '/assets/images/product/boxgal3.png'],
		['title' => 'Product Five', 'slug' => 'product-five', 'image' => get_template_directory_uri() . '/assets/images/product/boxgal3.png'],
		['title' => 'Product Six', 'slug' => 'product-six', 'image' => get_template_directory_uri() . '/assets/images/product/boxgal3.png'],
		['title' => 'Product Seven', 'slug' => 'product-seven', 'image' => get_template_directory_uri() . '/assets/images/product/boxgal3.png'],
		['title' => 'Product Eight', 'slug' => 'product-eight', 'image' => get_template_directory_uri() . '/assets/images/product/boxgal3.png'],
		['title' => 'Product Nine', 'slug' => 'product-nine', 'image' => get_template_directory_uri() . '/assets/images/product/boxgal3.png'],
		['title' => 'Product Ten', 'slug' => 'product-ten', 'image' => get_template_directory_uri() . '/assets/images/product/boxgal3.png'],
	];
	?>

	<div class="slider-center">
		<?php foreach ($products as $item): ?>
			<div class="">
				<a href="<?php echo esc_url(home_url('/' . $item['slug'])); ?>" class="block">
					<div class="w-full !h-[239px]">
						<img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>"
							class="w-full object-cover !h-[239px]" width="363" height="369" loading="lazy" />
					</div>
				</a>
				<h4 class="text-xl text-center mt-6">
					<a href="<?php echo esc_url(home_url('/' . $item['slug'])); ?>">
						<?php echo esc_html($item['title']); ?>
					</a>
				</h4>
			</div>
		<?php endforeach; ?>
	</div>

	<script>
		jQuery(document).ready(function ($) {
			$('.slider-center').slick({
				className: "center",
				centerMode: true,
				slidesToShow: 5,
				speed: 500,
				infinite: true,
				arrows: true,
				responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 3,
							infinite: false,
							arrows: true
						}
					},
					{
						breakpoint: 700,
						settings: {
							slidesToShow: 2,
							infinite: false,
							arrows: true
						}
					},
					{
						breakpoint: 400,
						settings: {
							slidesToShow: 1,
							infinite: false,
							arrows: true
						}
					}
				]
			});
		});
	</script>
</section>