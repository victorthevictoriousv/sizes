<?php
/**
 * This is the component that displays when a post cannot be found
 *
 * @package WLSN
 */
?>

<article id="post-<?php the_ID(); ?> section" <?php post_class(); ?>>
    <h2><?php _e('Inga poster hittades', 'wlsn'); ?></h2>
</article>