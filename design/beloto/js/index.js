//Sticky Nav
var mn = $(".mainnav");
mns = "fixednav";
hdr = 150;

$(window).scroll(function () {
  if ($(this).scrollTop() > hdr) {
    mn.addClass(mns);
  } else {
    mn.removeClass(mns);
  }
});

$(window).on('resize', function() {
    if($(window).height() < 800) {
        $('.home').addClass('.blackheader');
        $('.home').removeClass('.blackheader');
    }
//      else{
//        $('.home h1').addClass('limit400');
//        $('.home h1').removeClass('limit1200');
//    }
})

//Smooth Scroll
$(function () {
  $('a[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

//Carousel
