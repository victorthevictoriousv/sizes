<?php
/**
 * This is the component that displays a cookie notice
 *
 * @package WLSN
 */
?>

<div id="cookieNotice" class="cookie-notice cookie-notice--hidden">
    <p class="cookie-notice__text">
        <?php _e('Den här webbplatsen använder cookies för att ge dig en förbättrad upplevelse.
        Den har också spårning via Google Analytics och Facebook Pixel. Vi använder oss av dessa
        för att få en bild av hur våra besökare använder webbplatsen och för att anpassa vår 
        marknadsföring. Genom att fortsätta använda denna hemsidan godkänner du detta.', 'wlsn'); ?>
    </p>
    <div class="cookie-notice__controls">
        <button id="cookieDismiss" class="cookie-notice__button button"><?php _e('Ok', 'wlsn'); ?></button>
        <a class="cookie-notice__button button" href=""><?php _e('Läs integritetspolicy', 'wlsn'); ?></a>
    </div>
</div>
