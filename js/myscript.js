 $(document).ready(function(){
 
  $(".scroll-top").click(function(){
        
      $("html, body").animate({scrollTop:0}, 2000);
    });

});

$(window).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 100) {
    $('.scroll-top').fadeIn();
  } else {
    $('.scroll-top').fadeOut();
  }
});

//on scroll counter

    $(window).scroll(function(){

      var nav = $('.some-counter');
if (nav.length) {
  

        var HT = $('.some-counter').offset().top,
            HH = $('.some-counter').outerHeight(),
            WH = $(window).height(),
            WS = $(this).scrollTop();
            }
       if (WS > (HT+HH-WH)){
        
               
            $('.count-num').each(function () {
                    $(this).prop('Counter',0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 5000,
                        easing: 'swing',
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
                $('.count-num').removeClass('count-num').addClass('counted');
         }

    });




    $(window).scroll(function() {    
        var sc = $(window).scrollTop();

        if (sc >= 100) {
            $(".dark-header").addClass("light-header");

        } else {
            $(".dark-header").removeClass("light-header");
        }

        
    });

$(window).scroll(function() {    
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            $(".header-color").addClass("mini-header");

        } else {
            $(".header-color").removeClass("mini-header");
        }

        
    });



  







