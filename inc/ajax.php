<?php


add_action('wp_ajax_live_search_products', 'live_search_products');
add_action('wp_ajax_nopriv_live_search_products', 'live_search_products');

function live_search_products(){

  $keyword = sanitize_text_field($_POST['keyword']);

  $args = array(
    'post_type'      => 'product',
    'posts_per_page' => 5,
    's'              => $keyword,
    'post_status'    => 'publish',
  );

  $query = new WP_Query($args);

  if($query->have_posts()){
    echo '<ul class="divide-y divide-gray-200">';
    while($query->have_posts()){
      $query->the_post();

      $product = wc_get_product(get_the_ID());
      $price   = $product->get_price_html();
      $image   = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');

      echo '<li class="flex items-center p-2 hover:bg-gray-100">';
      echo '<a href="'.get_permalink().'" class="flex items-center w-full">';
      echo '<img src="'.$image.'" class="w-12 h-12 object-cover rounded mr-3">';
      echo '<div class="flex-1">';
      echo '<p class="font-semibold text-gray-800">'.get_the_title().'</p>';
      echo '</div>';
      echo '<span class="text-green-600 font-medium">'.$price.'</span>';
      echo '</a>';
      echo '</li>';
    }
    echo '</ul>';
  } else {
    echo '<p class="p-2 text-gray-500">No products found.</p>';
  }

  wp_die();
}