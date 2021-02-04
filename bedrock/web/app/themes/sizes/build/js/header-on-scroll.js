export default function () {
  var $win = $(window);

  $win.scroll(function () {
    if ($win.scrollTop() == 0) {
      $(".header").removeClass("header__scrolled");
    }
    if ($win.scrollTop() !== 0) {
      $(".header").addClass("header__scrolled");
    }
  });
}
