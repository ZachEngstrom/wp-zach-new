$(function() {

  /**
   * Change Navbar color when scrolling
   * @link http://lukedowding.com/change-nav-bar-menu-add-css-class-scroll/
   * @link https://codepen.io/LukeD1uk/pen/zvGQZN
   */
  var header = $(".navbar");
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 75) {
      header.addClass("navbar-dark bg-dark");
      header.removeClass("navbar-light bg-light");
    } else {
      header.addClass("navbar-light bg-light");
      header.removeClass("navbar-dark bg-dark");
    }
  });

});