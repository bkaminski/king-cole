//jQuery no-conflict mode
(function( $ ) {

//Animate slide up and down nav dropdowns.
$('.dropdown').on('show.bs.dropdown', function(e) {
	$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});
$('.dropdown').on('hide.bs.dropdown', function(e) {
	$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});

//REMOVE TRANSPARENT HEADER ON SCROLL
$(function() {
//caches a jQuery object containing the header element
var header = $(".kc-navbar");
$(window).scroll(function() {
	var scroll = $(window).scrollTop();
	if (scroll >= 450) {
		header.removeClass('kc-navbar').addClass('kc-navbar-solid shadow');
	} else {
		header.removeClass("kc-navbar-solid shadow").addClass('kc-navbar');
	}
});
});


})( jQuery );