/* function preloaderFadeOutInit(){
    $('.preloader').fadeOut('slow');
    $('body').attr('id','');
}

// Window load function
jQuery(window).on('load', function () {
    (function ($) {
        preloaderFadeOutInit();
    })(jQuery);
}); */

//Button Send Message

//Success
/* $('button').click(function() {
  $(this).toggleClass('success');
  $('button p').text(function(i, text) {
    return text === "Email Me" ? "Email Me" : "Email Me";
  });
}); */

//Error
/* $('button').click(function() {
  $(this).toggleClass('error');
  $('button p').text(function(i, text) {
    return text === "Try again!" ? "Send" : "Try again!";
  });
}); */

$('a[href*=\\#]').on('click', function(event){     
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top-100}, 500);
});

/* github hide and show pop-up */
$('.fa-times').on('click', function(){     
  $('#github').fadeOut();
});

/* add bg-color to navbar on scroll */
$(function() {
  $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
      if (scroll >= 50) {
        $("#navbar").addClass("scrolled");
      } else {
        $("#navbar").removeClass("scrolled");
      }
  });
});