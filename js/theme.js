jQuery(document).ready(function($) {	

	$(function() {
		$('a[href*="#"]:not([href="#"]):not(.mm-next)').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});
	

	$('.entry-content').imagesLoaded().progress( function( instance ) {
		$('.entry-content img').each( function(){
				// Create new offscreen image to test
				$(this).addClass('img-fluid');
			});
	});

	function enableScroll() {
		if ($( window ).width() < 991) {
			$('body').niceScroll({
				zindex : 999999,
				cursorwidth : 10,
				cursorborder : "1px solid #000",
				cursoropacitymax : .7,
				cursorminheight: 5
			});	
		} else {
			$('body').getNiceScroll().remove();
		}
	}
	
	enableScroll();		
	

	$( window ).resize(function(event) {
		/* Act on the event */
		enableScroll();
	});

	$('.main.menu  .ui.dropdown').dropdown({
		on: 'hover'
	});
	
});
