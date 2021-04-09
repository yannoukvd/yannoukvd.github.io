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

/* CONTACT */

$("#bestel-cd1").click(function () {
  console.log("test");
  $("#subject").val('CD bestellen');
  $(".address").show();
});

$("#subject").on('change', function() {
  console.log("subject");
  if ($('#subject').val() == "CD bestellen") {
  $(".address").show();
  console.log("selected");
} else {
  $(".address").hide();
}
});

$(".work-grid-image").each(function () {
    $(this).click(function () {
      console.log("test");
      //var src = $(this).attr("background-image").replace(/^url|[\(\'\")]/g, ''),
        //alt = src.split("/").pop();
      var src = $(this).attr("src");
      $(this).parent().parent().next().fadeIn(200);
      $(this).parent().parent().next().children().children().children().children().attr("src", src);
      //$(this).parent().next().children().children().children().children().attr("alt", alt);
    });
  });

  $(".work-image").each(function () {
    $(this).click(function () {
      console.log("test");
      //var src = $(this).attr("background-image").replace(/^url|[\(\'\")]/g, ''),
        //alt = src.split("/").pop();
      var src = $(this).attr("src");
      $(this).parent().next().next().fadeIn(200);
      $(this).parent().parent().next().children().children().children().children().attr("src", src);
      //$(this).parent().next().children().children().children().children().attr("alt", alt);
    });
  });


  /* Fullscreen View Photo */
  $(".fullscreen").hide();


  /* Fullscreen View Video */

  $(".post-cover").click(function () {
    $(this).next().fadeIn(200).fadeIn(200);
    var src = $(this).next().children().children().children().children().attr("src");
    src += "?autoplay=1";
    $(this).next().children().children().children().children().attr("src", src);
  });

  $(".fullscreen").click(function () {
    var src1 = $(this).children().children().children().children().attr("src"),
      src2 = src1.substring(0, src1.indexOf('?'));
    $(this).children().children().children().children().attr("src", src2);
    $(".fullscreen").fadeOut(200);
  });

  $(".fullscreen").click(function () {
    $(".fullscreen").fadeOut(200);
  });



      
}); 