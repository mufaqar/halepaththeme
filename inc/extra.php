<?php
class Tailwind_Nav_Walker extends Walker_Nav_Menu {

    // Submenu wrapper
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);

        $submenu_classes = $depth === 0
            ? 'sub-menu absolute lg:absolute left-0 top-full hidden bg-white md:shadow-lg md:py-5 pl-4 min-w-[220px] w-full z-50'
            : 'sub-menu hidden  lg:absolute left-full top-0 bg-white md:shadow-lg md:py-5 pl-4 min-w-[220px] w-full z-50';

        $output .= "\n$indent<ul class=\"$submenu_classes\">\n";
    }

    // Menu item
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {

        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $has_children = in_array('menu-item-has-children', $item->classes);

        $output .= $indent . '<li class="relative group">';

        // Link
        $output .= '<div class="flex items-center justify-between">';

        $output .= '<a href="' . esc_url($item->url) . '"
            class="header_link">
            ' . esc_html($item->title) . '
        </a>';

        // Mobile toggle button (ONLY arrow)  
        if ($has_children) {
            $output .= '
            <button type="button"
                class="submenu-toggle ml-2 mr-2  text-xs"
                aria-expanded="false">
                <i class="fa fa-chevron-down"></i>
            </button>';
        }

        $output .= '</div>';
    }

    // Close item
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }
}



/* Filters and Hooks  */

// Remove breadcrumb only
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
// Remove page title
add_filter('woocommerce_show_page_title', '__return_false');

function mytheme_remove_add_to_cart_buttons() {
    if ( is_shop() || is_product_category() || is_product_tag() ) {
        remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
    }
}
add_action( 'wp', 'mytheme_remove_add_to_cart_buttons' );



// Mega meunu logic
function is_menu_active($url) {
    $current_url = trailingslashit(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    $menu_url    = trailingslashit($url);

    return $current_url === $menu_url;
}

function is_parent_active($menu) {
    $current_url = trailingslashit(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

    // Check main link
    if (!empty($menu['link']) && trailingslashit($menu['link']) === $current_url) {
        return true;
    }

    // Check dropdown items
    if (!empty($menu['items'])) {
        foreach ($menu['items'] as $item) {
            if (trailingslashit($item['link']) === $current_url) {
                return true;
            }
        }
    }

    // Check mega groups
    if (!empty($menu['groups'])) {
        foreach ($menu['groups'] as $group) {
            if (trailingslashit($group['link']) === $current_url) {
                return true;
            }

            if (!empty($group['items'])) {
                foreach ($group['items'] as $item) {
                    if (trailingslashit($item['link']) === $current_url) {
                        return true;
                    }
                }
            }
        }
    }

    return false;
}
?>
