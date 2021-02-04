<?php
/**
 * This is the component that displays pagination
 *
 * @package WLSN
 */

the_posts_pagination(
    array(
        'prev_text' => get_svg('arrow') . '<span class="screen-reader-text">' . __('Föregående sida', 'wlsn') . '</span>',
        'next_text' => '<span class="screen-reader-text">' . __('Nästa sida', 'wlsn') . '</span>' . get_svg('arrow'),
        'before_page_number' => '<span class="screen-reader-text">' . __('Sida', 'wlsn') . ' </span>',
    )
);
