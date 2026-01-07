<?php
/**
 * halepath_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package halepath_theme
 */


include_once get_template_directory() . '/inc/extra.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function halepath_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on halepath_theme, use a find and replace
		* to change 'halepath_theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'halepath_theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary_menu' => esc_html__( 'Primary', 'halepath_theme' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

		// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	
}
add_action( 'after_setup_theme', 'halepath_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function halepath_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'halepath_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'halepath_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function halepath_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'halepath_theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'halepath_theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'halepath_theme_widgets_init' );

function theme_assets() {
	
    // Tailwind
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/style.css', [], filemtime(get_template_directory() . '/assets/css/style.css'));


	  wp_enqueue_style(
    'font-awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'
  );
    // Slick CSS
   wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', [], '1.8.1');
   wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', ['slick-css'], '1.8.1');

    // jQuery (WordPress includes it)
   wp_enqueue_script('jquery');

    // Slick JS
   wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], '1.8.1', true);

    // Slick Init JS
//    wp_enqueue_script('slick-init', get_template_directory_uri() . '/assets/js/slick-init.js', ['jquery', 'slick-js'], filemtime(get_template_directory() . '/assets/js/slick-init.js'), true);
}
add_action('wp_enqueue_scripts', 'theme_assets');



function migrate_posts_to_products() {

    $posts = get_posts([
        'post_type'      => 'post',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    ]);

    foreach ($posts as $post) {

        wp_update_post([
            'ID'        => $post->ID,
            'post_type' => 'product',
        ]);

        // Set product type
        wp_set_object_terms($post->ID, 'simple', 'product_type');
    }
}


function migrate_product_price() {

    $products = get_posts([
        'post_type'      => 'product',
        'posts_per_page' => -1,
    ]);

    foreach ($products as $product) {

        $price = get_post_meta($product->ID, 'product_price', true);

        if ($price !== '' && is_numeric($price)) {

            update_post_meta($product->ID, '_regular_price', $price);
            update_post_meta($product->ID, '_price', $price);
        }
    }
}


function migrate_categories_to_product_categories() {

    $categories = get_categories([
        'taxonomy'   => 'category',
        'hide_empty' => false,
    ]);

    foreach ($categories as $cat) {

        if (!term_exists($cat->slug, 'product_cat')) {

            wp_insert_term(
                $cat->name,
                'product_cat',
                [
                    'slug' => $cat->slug,
                ]
            );
        }
    }
}


function assign_product_categories() {

    $products = get_posts([
        'post_type'      => 'product',
        'posts_per_page' => -1,
    ]);

    foreach ($products as $product) {

        $post_categories = wp_get_post_categories($product->ID);
        $product_cat_ids = [];

        foreach ($post_categories as $cat_id) {

            $cat = get_category($cat_id);

            if ($cat) {
                $term = get_term_by('slug', $cat->slug, 'product_cat');
                if ($term) {
                    $product_cat_ids[] = $term->term_id;
                }
            }
        }

        if (!empty($product_cat_ids)) {
            wp_set_object_terms($product->ID, $product_cat_ids, 'product_cat');
        }
    }
}

function ensure_product_featured_image() {

    $products = get_posts([
        'post_type'      => 'product',
        'posts_per_page' => -1,
    ]);

    foreach ($products as $product) {

        // Skip if already has featured image
        if (has_post_thumbnail($product->ID)) {
            continue;
        }

        // Get images from content
        if (preg_match('/<img.+src=["\'](.+?)["\']/', $product->post_content, $matches)) {

            $image_url = $matches[1];

            $attachment_id = attachment_url_to_postid($image_url);

            if ($attachment_id) {
                set_post_thumbnail($product->ID, $attachment_id);
            }
        }
    }
}



add_action('init', function () {

    migrate_posts_to_products();                 // 1️⃣ post → product
    migrate_product_price();                     // 2️⃣ price
    migrate_categories_to_product_categories();  // 3️⃣ categories
    assign_product_categories();                 // 4️⃣ assign
	ensure_product_featured_image();            // 5️⃣ featured image
});







 


