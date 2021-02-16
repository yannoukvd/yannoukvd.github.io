$(document).ready(function () {

/* SMOOTH SCROLL */

  $(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top - 200
          }, 1000);
          return false;
        }
      }
    });
  });

  $(window).scroll(function() {
    var scrollPos = $(window).scrollTop();
    if (scrollPos <= 0) {
        $("header .top").fadeOut();
    } else {
        $("header .top").fadeIn();
    }
});


  /* NAV */

  $(".m-nav-btn").click(function () {
    console.log("hello");
    $(this).toggleClass('open');
    $(".m-nav").slideToggle(500);
    $('open').delay(1000).removeClass('m-nav-btn-white');
  });

  $(window).resize(function () {
    $(".m-nav").slideUp(500);
    $(".m-nav-btn").removeClass('open');
  });

  $(".m-nav ul li a").click(function () {
    $(".m-nav").slideUp(500);
    $(".m-nav-btn").removeClass('open');
  });

 /* SLIDER */

// console.log("test");

var timer = null;
function startInterval(){
  timer = setInterval(slider, 6000);
}
startInterval();

function slider(){
  console.log($(".slider-container .slider").css("left"));
  if($(".slider-container .slider").css("left") === "-1560px"){
    $(".slider-container .slider").animate({
      "left":"0"
    }, 1000);
  } else {
    $(".slider-container .slider").animate({
      "left":"-=100%"
    }, 1000);
  }
}

$(".arrow-next").click(function(){
  console.log("next");
  console.log($(".slider-container .slider").css("left"));
  clearInterval(timer);
  if($(".slider-container .slider").css("left") === "-1560px"){
    $(".slider-container .slider").animate({
      "left":"0"
    }, 1000);
  } else {
    $(".slider-container .slider").animate({
      "left":"-=100%"
    }, 1000);
  }
});

$(".arrow-prev").click(function(){
  console.log("prev");
  console.log($(".slider-container .slider").css("left"));
  clearInterval(timer);
  if($(".slider-container .slider").css("left") === "0px"){
    $(".slider-container .slider").animate({
      "left":"-1560px"
    }, 1000);
  } else {
    $(".slider-container .slider").animate({
      "left":"+=100%"
    }, 1000);
  }
});


      
}); 