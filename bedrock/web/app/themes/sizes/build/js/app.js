import cookieNotice from "./cookie-notice.js"; // Cookie window
import toggleMenu from "./toggle-menu.js"; // Responsive menu
import webFont from "webfontloader"; // Web font loader
import svg4everybody from "svg4everybody"; // SVG polyfill
import menu from "./menu.js";
import headerOnScroll from "./header-on-scroll";

// Init cookie notice
cookieNotice();

// Init responsive menu
toggleMenu();

// Init menu
menu();

// Load webfonts
webFont.load({
  google: {
    families: ["Roboto"],
  },
});

// SVG polyfill
svg4everybody();

// Header on scroll
headerOnScroll();
