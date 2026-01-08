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
            class="text-[15px] font-medium uppercase text-title_Clr hover:text-primary py-2 block">
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
