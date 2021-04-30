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

if($(window).width() < 1024)
{
  $('a[href*=\\#]').on('click', function(event){     
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top-75}, 500);
});
}

/* menuham is active class activation */

$('.ham').on('click', function(){     
  $(this).toggleClass('is-active');
  $('.full-menu').toggleClass('is-active');
  $('.line').toggleClass('is-active');
});

$('.menuitem-ham').on('click', function(){     
  /* $('ham').removeClass('is-active');
  $('.full-menu').toggleClass('is-active');
  $('.line').toggleClass('is-active'); */
  $("#menuham").find('.is-active').toggleClass("is-active");
});

/* github hide and show pop-up */
$('.fa-times').on('click', function(){     
  $('#github').fadeOut();
});

/* adding a scroll function for github pop-up */
$(function() {
  $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
      if (scroll >= 500) {
        $('#github').addClass("github-scrolled");
      }
  });
});

/* add bg-color to navbar on scroll */
$(function() {
  $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
      if (scroll >= 50) {
        $("#navbar").addClass("navbar-scrolled");
      } else {
        $("#navbar").removeClass("navbar-scrolled");
      }
  });
});