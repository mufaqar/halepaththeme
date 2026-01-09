<section class="mt-20 max-w-[2200px] mx-auto px-3 lg:px-0">
	<h2 class="text-2xl text-center mb-8 sm:text-3xl md:text-5xl font-bold">Custom Retail Boxes Gallery</h2>
	<?php
	// Get global product
	global $product;
	if (!$product)
		return;

	// Get product gallery IDs
	$gallery_ids = $product->get_gallery_image_ids();

	// Include featured image as first slide
	$images = [];

	if (has_post_thumbnail($product->get_id())) {
		$images[] = [
			'url' => get_the_post_thumbnail_url($product->get_id(), 'large'),
			'alt' => get_post_meta(get_post_thumbnail_id($product->get_id()), '_wp_attachment_image_alt', true),
		];
	}

	// Add gallery images
	foreach ($gallery_ids as $id) {
		$images[] = [
			'url' => wp_get_attachment_url($id),
			'alt' => get_post_meta($id, '_wp_attachment_image_alt', true),
		];
	}

	// Stop if no images
	if (empty($images))
		return;
	?>

	<div class="relative w-full py-8">
		<!-- Navigation Buttons -->
		<button
			class="swiper-prev min-w-[32px] cursor-pointer text-xs absolute left-1 top-1/2 transform -translate-y-1/2 z-10 bg-gray-700 text-white p-2 rounded-full hover:bg-gray-900"
			aria-label="Previous Slide">
			<i class="fa fa-chevron-left"></i>
		</button>
		<button
			class="swiper-next min-w-[32px] cursor-pointer text-xs absolute right-1 top-1/2 transform -translate-y-1/2 z-10 bg-gray-700 text-white p-2 rounded-full hover:bg-gray-900"
			aria-label="Next Slide">
			<i class="fa fa-chevron-right"></i>
		</button>

		<!-- Swiper -->
		<div class="swiper mySwiper h-[480px]">
			<div class="swiper-wrapper">
				<?php foreach ($images as $index => $image): ?>
					<div class="swiper-slide">
						<figure class="rounded-2xl overflow-hidden">
							<img src="<?php echo esc_url($image['url']); ?>"
								alt="<?php echo esc_attr($image['alt'] ?? "Slide " . ($index + 1)); ?>" loading="lazy"
								class="!h-[460px] w-full object-cover scale-105 rounded-2xl">
						</figure>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const swiper = new Swiper(".mySwiper", {
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

<section class="my-20">
	<div class="container md:flex items-center gap-5 md:gap-0 mx-auto px-3 flex-row-reverse">
		<!-- Image Section -->
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
</section>

<section class="my-20">
	<div class="container md:flex items-center gap-5 md:gap-0 mx-auto px-3 flex-row">
		<!-- Image Section -->
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
</section>

<section class="pt-16">
	<h2 class="font-extrabold md:text-4xl text-2xl text-center text-title_Clr mb-5">Learn More About Custom Retail
		Boxes</h2>
	<div class="container px-3 desc_content mx-auto mt-5 overflow-y-auto max_content max-h-[812px]">
		<h2><strong>Custom Candle Accessories Boxes: Elegant Packaging for Every Detail</strong></h2>
		<p>In the luxury candle market, presentation extends beyond the candle itself. High-end accessories like wick
			trimmers, snuffers, and matches also deserve packaging that reflects sophistication and purpose. At
			<strong>Hale Path Packaging</strong>, we specialize in <strong>candle accessories boxes</strong> that
			elevate your entire product line.
		</p>
		<h3><strong>Packaging Designed for Protection and Presentation</strong></h3>
		<p>Our candle accessories boxes are crafted using sturdy, eco-conscious materials that provide secure storage
			while enhancing visual appeal. Whether you're packaging individual accessories or offering a complete
			candle care kit, our custom boxes ensure every piece is displayed with elegance and organized to
			perfection.</p>
		<h3><strong>Tailored to Modern Packaging Industry Needs</strong></h3>
		<p>Today’s packaging industry demands sustainability, customization, and aesthetic excellence. Hale Path
			Packaging delivers all three. We offer various box styles—magnetic closures, drawer boxes, and rigid
			kits—with advanced finishing options like foil stamping, embossing, spot UV, and window cutouts. Each
			design is carefully tailored to reflect your brand’s identity while providing functional excellence.</p>
		<h3><strong>Sustainable and Brand-Driven</strong></h3>
		<p>As eco-consciousness becomes a central theme in packaging, Hale Path Packaging stays ahead by using
			recyclable and biodegradable materials. Our candle accessories boxes not only showcase your tools
			beautifully but also support your commitment to sustainability.</p>
		<h3><strong>Why Choose Hale Path Packaging?</strong></h3>
		<p>With unmatched attention to detail and a passion for packaging innovation, Hale Path Packaging helps candle
			brands deliver a seamless, luxurious experience—down to the smallest accessory.</p>
	</div>
</section>


<!-- Capabilities Section Start -->
<section class="container mx-auto px-3 mt-20">
	<!-- Section Title -->
	<span class="text-[#111827] font-bold text-2xl">Our Capabilities</span>
	<!-- Capabilities Grid -->
	<div class="mt-12 grid grid-cols-3 sm:grid-cols-5 md:grid-cols-6 lg:grid-cols-8 gap-2">
		<!-- Capability Items -->
		<div class="bg-[#EFEFEF] flex flex-col justify-center items-center px-1.5 py-[15px] rounded-[16px]">
			<img alt="International Sourcing"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/category/glob.png" />
			<h6 class="text-[#111827] text-center !font-normal text-xs mt-3">International Sourcing</h6>
		</div>
		<div class="bg-[#EFEFEF] flex flex-col justify-center items-center px-1.5 py-[15px] rounded-[16px]">
			<img alt="Easy Price Matching"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/category/price.png" />
			<h6 class="text-[#111827] text-center !font-normal text-xs mt-3">Easy Price Matching</h6>
		</div>
		<div class="bg-[#EFEFEF] flex flex-col justify-center items-center px-1.5 py-[15px] rounded-[16px]">
			<img alt="3D Design Studio"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/category/studio.png" />
			<h6 class="text-[#111827] text-center !font-normal text-xs mt-3">3D Design Studio</h6>
		</div>
		<div class="bg-[#EFEFEF] flex flex-col justify-center items-center px-1.5 py-[15px] rounded-[16px]">
			<img alt="Multiple Lead Times Option"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/category/calculator.png" />
			<h6 class="text-[#111827] text-center !font-normal text-xs mt-3">Multiple Lead Times Option to Fit Your
				Budget
			</h6>
		</div>
		<div class="bg-[#EFEFEF] flex flex-col justify-center items-center px-1.5 py-[15px] rounded-[16px]">
			<img alt="Printing Capacity"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/category/capacity.png" />
			<h6 class="text-[#111827] text-center !font-normal text-xs mt-3">Printing Capacity of One Million Quantities
				in
				One Day</h6>
		</div>
		<div class="bg-[#EFEFEF] flex flex-col justify-center items-center px-1.5 py-[15px] rounded-[16px]">
			<img alt="24/7 Service"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/category/agent.png" />
			<h6 class="text-[#111827] text-center !font-normal text-xs mt-3">24/7 Service</h6>
		</div>
		<div class="bg-[#EFEFEF] flex flex-col justify-center items-center px-1.5 py-[15px] rounded-[16px]">
			<img alt="Flexible Payment Terms"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/category/payment.png" />
			<h6 class="text-[#111827] text-center !font-normal text-xs mt-3">Flexible Payment Terms</h6>
		</div>
		<div class="bg-[#EFEFEF] flex flex-col justify-center items-center px-1.5 py-[15px] rounded-[16px]">
			<img alt="Warehousing and IMS"
				src="<?php echo get_template_directory_uri(); ?>/assets/images/category/house.png" />
			<h6 class="text-[#111827] text-center !font-normal text-xs mt-3">Warehousing and IMS</h6>
		</div>
	</div>
	<!-- Buttons -->
	<div class="flex flex-col sm:flex-row text-center gap-4 mt-6">
		<a class="py-[9px] px-[41px] text-white bg-[#1C2E42] rounded-md" href="/category/product-by-industry#">
			Browse Our Catalogue
		</a>
		<a class="py-[9px] px-[41px] text-white bg-[#1C2E42] rounded-md" href="/category/product-by-industry#">
			View Company Profile
		</a>
	</div>
</section>
<!-- Capabilities Section End -->



<?php
get_template_part('template-parts/woo/product-faq'); ?>

<section class="mt-20 overflow-hidden">
	<div class="container mx-auto px-4">
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