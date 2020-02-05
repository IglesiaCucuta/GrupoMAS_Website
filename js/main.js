(function ($) {
	"use strict";
	/*----------------------------
	Animation js active
	------------------------------ */
	AOS.init();
	
	/*----------------------------
     Video Popup JS
	----------------------------*/
	$('.popup-youtube').magnificPopup({
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});

	/*----------------------------
	Search
	------------------------------ */
	var changeClass = function (name) {
		$('#search, .search-icon-area a').removeAttr('class').addClass(name);
	}
	/*----------------------------
	jQuery Mean Menu
	------------------------------ */
	$("#mobile-menu").meanmenu({
		meanMenuContainer: ".mobile-menu",
		meanScreenWidth: "767"
	});
	$(".info-bar").on("click", function () {
		$(".extra-info").addClass("info-open");
	});
	$(".close-icon").on("click", function () {
		$(".extra-info").removeClass("info-open");
	});
	/*----------------------------
    Sticky menu active
    ------------------------------ */
	function fixed_top_menu() {
		var windows = $(window);
		windows.on("scroll", function () {
			var header_height = $(".main-navigation").height();
			var scrollTop = windows.scrollTop();
			if (scrollTop > header_height) {
				$(".main-navigation").addClass("sticky");
			} else {
				$(".main-navigation").removeClass("sticky");
			}
		});
	}
	fixed_top_menu();

	
	/*-----------------
    Portfolio Filter
    -----------------*/
	var $grid = $('.grid').isotope({
		percentPosition: true,
	})

	var $equipos = $('.equipos').isotope({
		percentPosition: true,
	});

	$('.portfolio-filter').on('click', 'a', function (e) {
		e.preventDefault();
		$(this).parent().addClass('active').siblings().removeClass('active');
		var filterValue = $(this).attr('data-filter');
		$grid.isotope({
			filter: filterValue
		});
	});

	$('.equipo-filter').on('click', 'a', function (e) {
		e.preventDefault();
		$(this).parent().addClass('active').siblings().removeClass('active');
		var filterValue = $(this).attr('data-filter');
		$equipos.isotope({
			filter: filterValue
		});
	});

	/*----------------------------
	       Menu active JS
	     ----------------------------*/
	$('.portfolio-filter ul li a').on('click', function () {
		$('.portfolio-filter ul li a').removeClass("current");
		$(this).addClass("current");
	});

	  $('.main-menu ul li a').on ('click', function () {
        $('.main-menu ul li a').removeClass("current");
        $(this).addClass("current");
    });
	/*----------------------------
	Preloader
	------------------------------ */
	$(window).on('load', function () {
		$("#status").on('fadeOut', "slow");
		$("#preloader").on('delay', 500).on('fadeOut', "slow").remove();
	});
	/*----------------------------
	Move Background
	------------------------------ */
	$(function () {
		$('.big-footer').backgroundMove();
	});


})(jQuery);