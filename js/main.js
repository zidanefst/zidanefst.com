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

$('a[href*=\\#]').on('click', function(event){     
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top-100}, 500);
});


//Button Send Message

//Success
$('button').click(function() {
    $(this).toggleClass('success');
    $('button p').text(function(i, text) {
      return text === "Email Me" ? "Email Me" : "Email Me";
    });
  });

//Error
/* $('button').click(function() {
    $(this).toggleClass('error');
    $('button p').text(function(i, text) {
      return text === "Try again!" ? "Send" : "Try again!";
    });
  }); */