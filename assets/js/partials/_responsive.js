//jQuery no-conflict mode
(function( $ ) {

$( document ).ready(function() {

	// RESPONSIVE CONTROLS
	var $window = $(window);
	function checkWidth() {

		if ($window.width() < 976) {
			$('.welcome--1, .welcome--2').removeClass('vertical-center');
			
		};
		if ($window.width() >= 976) {
			$('.welcome--1, .welcome--2').addClass('vertical-center');
			
		}
	}
	
	checkWidth();
	$(window).resize(checkWidth);
	
	// END RESPONSIVE CONTROL
	});	


})( jQuery );