jQuery(document).ready(function($){
/*
// meanmenu
$('#mobile-menu').meanmenu({
	meanMenuContainer: '.mobile-menu',
	meanScreenWidth: "992"
});
*/
// Sticky header
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 60) {
		$(".main-header").removeClass("sticky");
	} else {
		$(".main-header").addClass("sticky");
	}
});

/* scrollToTop
$.scrollUp({
	scrollName: 'scrollUp', // Element ID
	topDistance: '300', // Distance from top before showing element (px)
	topSpeed: 300, // Speed back to top (ms)
	animation: 'fade', // Fade, slide, none
	animationInSpeed: 200, // Animation in speed (ms)
	animationOutSpeed: 200, // Animation out speed (ms)
	scrollText: '<i class="icofont icofont-long-arrow-up"></i>', // Text for element
	activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
});
*/
	$('.pretzel-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		autoplay: false,
		autoplaySpeed: 3000,
		zIndex: 900,
		dots: true,
		dotsClass: 'slider-dots',
		prevArrow: '<button class="slider-btn prev-arrow"><i class="fal fa-arrow-left"></i></button>',
		nextArrow: '<button class="slider-btn next-arrow"><i class="fal fa-arrow-right"></i></button>',
	});

})(jQuery);
