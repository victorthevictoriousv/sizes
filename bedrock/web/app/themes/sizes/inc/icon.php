<?php

// Icon
function the_svg($name, $size = 'sm') {
    $output =  '<svg class="icon icon-'.$name.' icon--'.$size.'">';
    $output .= '<use xlink:href="'.get_bloginfo('stylesheet_directory').'/dist/img/icons.svg#'.$name.'"></use>';
    $output .= '</svg>';

    echo $output;
}

function get_svg($name, $size = 'sm') {
    $output =  '<svg class="icon icon-'.$name.' icon--'.$size.'">';
    $output .= '<use xlink:href="'.get_bloginfo('stylesheet_directory').'/dist/img/icons.svg#'.$name.'"></use>';
    $output .= '</svg>';

    return $output;
}