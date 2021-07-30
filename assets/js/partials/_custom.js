//jQuery no-conflict mode
(function( $ ) {

//Animate slide up and down nav dropdowns.
$('.dropdown').on('show.bs.dropdown', function(e) {
	$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});
$('.dropdown').on('hide.bs.dropdown', function(e) {
	$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});

// Preloader
	$(window).on('load', function() {
		setTimeout(function(){
    		$('#preloader').fadeOut('slow', function () {	
    		});
    	}, 2000);
	});

$('.about--kc').removeClass('brown-border'); 

//REMOVE TRANSPARENT HEADER ON SCROLL
$(function() {
//caches a jQuery object containing the header element
var header = $(".kc-navbar");
$(window).scroll(function() {
	var scroll = $(window).scrollTop();
	if (scroll >= 150) {
		//newImageUrl = "http://localhost/king-cole/wp-content/uploads/white.png";
		header.removeClass('kc-navbar').addClass('kc-navbar-solid shadow');
		$('.nav-icon').attr('src', 'https://www.kingcolefarm.com/wp-content/uploads/white.png').fadeIn('slow');
		$('.navbar-toggler').removeClass('brown-text').addClass('text-white');
	} else {
		header.removeClass("kc-navbar-solid shadow").addClass('kc-navbar');
		$('.nav-icon').attr('src', 'https://www.kingcolefarm.com/wp-content/uploads/kc-icon.png').fadeIn('slow');
		$('.navbar-toggler').removeClass('text-white').addClass('brown-text');
	}
});
});


})( jQuery );