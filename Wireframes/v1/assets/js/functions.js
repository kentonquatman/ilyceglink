var resizeSmoothScroll = function() {
  if ($(window).width() >= 720){ $('.post-top__comments a, .comments__jump-link').smoothScroll({offset: -90}); }
  else { $('.post-top__comments a, .comments__jump-link, .site-subheader .social-links .mailing-list a').smoothScroll(); }
};

var Site = window.Site || {};
(function($) {
  $(function() {

    // PLACEHOLDER
    
    $('input, textarea').placeholder();
    
    // NAV TOGGLE
    
    $('.nav-toggle').click(function(){
      $(this).toggleClass('open');
      $('.site-navigation').slideToggle();
      return false;
    });
    
    // MAILING LIST TOGGLE
    
    var mlLink = $('.social-links .mailing-list a');
    var mlContainer = $('.social-links .mailing-list');
    var mlForm = $('.social-links .mailing-list');
    if ($(window).width() >= 720){
      $(mlLink).click(function(){
        $(mlContainer).toggleClass('show');
        return false;
      });
      $('body').click(function(){
        $(mlContainer).removeClass('show');
      });
      $(mlForm).click(function(event){
        event.stopPropagation();
      });
    }
    
    // SMOOTH-SCROLL

    resizeSmoothScroll();
    
  });
})(jQuery);