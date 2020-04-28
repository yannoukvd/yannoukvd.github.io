/*--------------------
----------------------
***** JAVASCRIPT *****
----------------------
--------------------*/

/*-----------------------
***** DEFINE JQUERY *****
-----------------------*/

/*jslint browser: true*/
/*global $, document, location, window*/


/*-------------------------------
***** RUN IF PAGE IS LOADED *****
-------------------------------*/

$(document).ready(function () {

	/*--- Use strict ---*/
	'use strict';

	/*--- Nav ---*/

	/* Active */
	$('nav a[href$="' + location.pathname + '"]').addClass('active');
	$('nav a[href$="' + location.pathname + '"]').addClass('active');


	/*--- Mobile nav ---*/

	/* Slide toggle nav on button click */
	$(".m-mainNav-btn").click(function () {
		$(this).toggleClass('open');
		$(".m-mainNav").slideToggle(500);
		$('open').delay(1000).removeClass('m-mainNav-btn-white');
	});


	/* Slide nav up on window resize */
	$(window).resize(function () {
		$(".m-mainNav").slideUp(500);
		$(".m-mainNav-btn").removeClass('open');
	});


	/*--- Smooth Scroll ---*/
	$(function () {
		$('a[href*="#"]:not([href="#"])').click(function () {
			if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
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

	/*--- Home ---*/

	/* Show more link */

	$(".grid-showmore a").html(function () {
		var number = $(this).parent().parent().children().size() - 9;
		return "Show " + number + " more";
	});

	$(".grid-showmore").click(function () {
		window.location = $(this).children().attr("href");
	});
	
	/* Change lay-out */
	var w = $('.grid-image').width(),
		p = w / 2 - $('.grid-showmore a').height() / 2,
		cw1 = $(".post-container").width(),
		//cw2 = $(".post-title a").width(),
		th = $(".post-title").height(),
		t = (cw1 / 2 - th / 2) - 5;
	$('.grid-showmore').css({'height': w + 'px'});
	$('.grid-showmore a').css({'padding-top': p + 'px'});
	$('.grid-image').css({'height': w + 'px'});
	$(".post-container").css({'height': cw1});
	$(".cover").css({'height': cw1});
	$(".post-title a").css({'padding': 2 * t + 'px 0 10px 4%'});


	/*--- Video ---*/

	if (location.pathname === "/video.php") {

		/* Change page title */
		$("title").html("Videos | Yannouk");

		/* Change lay-out */
		$(".cover").css({'height': 'auto'});
		$(".play-large").hide();
		$(".play-small").css("display", "block");

	}


	/*--- Photo ---*/

	if (location.pathname === "/photo.php") {

		/* Change page title */
		$("title").html("Photography | Yannouk");

		/* Change lay-out */
		

	}

	if (location.pathname.indexOf("photo-") > -1) {

		/* Show all photos */
		$(".grid-image").css("display", "block");

		/* Remove link */
		$('.grid-showmore').hide();
		
		/* Change layout */
		$(".post-title").hide();
		$("container").removeClass("post-container");
		$("container").addClass("post-container-fullwidth");
		$(".grid-image").css({'height': 'auto'});
		$('.grid .col:nth-child(1)').removeClass("col-min");
		$('.col').show();
		$(".grid").show();
		$(".images").hide();
		$(".post-cover").hide();
		
		$(".grid-image").each(function () {
			$(this).click(function () {
				//var src = $(this).attr("background-image").replace(/^url|[\(\'\")]/g, ''),
					//alt = src.split("/").pop();
				var src = $(this).attr("src");
				$(this).parent().parent().next().fadeIn(200);
				$(this).parent().parent().next().children().children().children().children().attr("src", src);
				//$(this).parent().next().children().children().children().children().attr("alt", alt);
			});
		});
	}

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


	/*--- Design ---*/

	if (location.pathname === "/design.php") {

		/* Change page title */
		$("title").html("Design | Yannouk");

	}
	
	if (location.pathname.indexOf("design-") > -1) {

		/* Show all photos */
		$(".grid-image").css("display", "block");

		/* Remove link */
		$('.grid-showmore').hide();
		
		/* Change layout */
		$(".post-title").hide();
		$("container").removeClass("post-container");
		$("container").addClass("post-container-fullwidth");
		$(".grid-image").css({'height': 'auto'});
		$('.grid .col:nth-child(1)').removeClass("col-min");
		$('.col').show();
		$(".grid").show();
		$(".images").hide();
		$(".post-cover").hide();
		
		
		$(".grid-image").each(function () {
			$(this).click(function () {
				//var src = $(this).attr("background-image").replace(/^url|[\(\'\")]/g, ''),
					//alt = src.split("/").pop();
				var src = $(this).attr("src");
				$(this).parent().next().fadeIn(200);
				$(this).parent().next().children().children().children().children().attr("src", src);
				//$(this).parent().next().children().children().children().children().attr("alt", alt);
			});
		});

	}

	$(".design-cover").click(function () {
		var src = $(this).parent().parent().prev().prev().children().attr("href");
		window.open(src, '_blank');
	});


	/*--- Tech ---*/

	if (location.pathname === "/tech.php") {

		/* Change page title */
		$("title").html("Tech | Yannouk");
	}

	if (location.pathname.indexOf("tech-") > -1) {

		/* Change lay-out */
		$(".post-image").hide();
		$(".post-link").hide();
		$(".post-content").css("padding", "1% 0");
	}


	/*--- Music ---*/

	if (location.pathname === "/music.php") {

		/* Change page title */
		$("title").html("Music | Yannouk");
		
		/* Change layout */
		$(".post-title").hide();
	}


	/*--- Contact ---*/

	if (location.pathname === "/contact.php") {

		/* Change page title */
		$("title").html("Contact | Yannouk");
	}

});
