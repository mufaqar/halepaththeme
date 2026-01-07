<?php
class Tailwind_Nav_Walker extends Walker_Nav_Menu {

    // Start Level (submenu)
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $submenu_classes = $depth === 0
            ? 'absolute left-0 top-full hidden group-hover:block bg-white shadow-lg min-w-[220px] z-50'
            : 'ml-4 hidden group-hover:block';

        $output .= "\n$indent<ul class=\"$submenu_classes\">\n";
    }

    // Start Element
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $has_children = in_array('menu-item-has-children', $item->classes);

        $li_classes = [
            'relative',
            $has_children ? 'group' : '',
        ];

        $output .= $indent . '<li class="' . implode(' ', array_filter($li_classes)) . '">';

        $atts = '';
        $atts .= ! empty($item->url) ? ' href="' . esc_url($item->url) . '"' : '';
        $atts .= ' class="block px-4 py-2 text-gray-800 hover:text-primary hover:bg-gray-100 transition"';

        $output .= '<a' . $atts . '>';
        $output .= esc_html($item->title);

        // Dropdown icon
        if ($has_children && $depth === 0) {
            $output .= ' <span class="ml-1 text-xs">▼</span>';
        }

        $output .= '</a>';
    }

    // End Element
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }
}
