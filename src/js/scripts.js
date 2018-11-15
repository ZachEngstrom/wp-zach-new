$(function() {

  /**
   * Change Navbar color when scrolling
   * @link http://lukedowding.com/change-nav-bar-menu-add-css-class-scroll/
   * @link https://codepen.io/LukeD1uk/pen/zvGQZN
   */
  var header = $(".navbar");
  var navbarHeight = header.height() + 16;
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 75) {
      header.addClass("fixed-top navbar-dark bg-dark").css({
        'padding-left': '1rem',
        'padding-right': '1rem',
      });
      $('body').css('margin-top',navbarHeight);
      header.removeClass("navbar-light bg-light");
    } else {
      header.addClass("navbar-light bg-light").css({
        'padding-left': '0px',
        'padding-right': '0px',
      });
      header.removeClass("fixed-top navbar-dark bg-dark");
      $('body').css('margin-top','0px');
    }
  });

});