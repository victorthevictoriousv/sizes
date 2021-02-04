function menu() {
  $(".menu-item").each(function () {
    if ($(this).hasClass("menu-item-has-children")) {
      $(this).children("a").after("<span>&#x2b;</span>");

      if ($(this).parents(".footer__menu").length) {
        $("a:first", this).addClass("footer__title");
      }

      $(this).click((e) => {
        const isClose = $(this).children(".sub-menu").is(":hidden");
        const subMenu = $(this).children(".sub-menu");

        if ($(e.target).is("a")) return;

        if (isClose) {
          subMenu.slideDown();
          return $(this).children("span").html("&#x2212;");
        }
        subMenu.slideUp();
        return $(this).children("span").html("&#x2b;");
      });
    }
  });
}

export default menu;
