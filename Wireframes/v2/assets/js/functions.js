var resizeSmoothScroll = function() {
  if ($(window).width() >= 720){ $('.post-top__comments a, .comments__jump-link').smoothScroll({offset: -90}); }
  else { $('.post-top__comments a, .comments__jump-link').smoothScroll({offset: -10}); }
};

var Site = window.Site || {};
(function($) {
  $(function() {
    
    // NAV TOGGLE
    
    $('.nav-toggle').click(function(){
      $(this).toggleClass('open');
      $('.site-navigation').slideToggle();
      return false;
    });
    
    // SEARCH TOGGLE
    
    $('.search-toggle').click(function(){
      $('.search-bar').toggleClass('open');
    });
    
    // SMOOTH-SCROLL

    resizeSmoothScroll();
    
    // FLEXSLIDER
    
    $('.home-features').flexslider({
      animation: 'fade',
      slideshow: false,
      touch: false
    });
    
  });
})(jQuery);