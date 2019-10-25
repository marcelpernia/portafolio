$(document).ready(function(){
	var slider = $('.slider');
	slider.bxSlider({
		mode: 'fade',
		speed: 250,
		startSlide: 0,
		pager: true,
		pagerType: 'short',
		controls: false,
		adaptiveHeight: true,
		keyboardEnabled: true,
		infiniteLoop: false,
		onSlideAfter: function($slideElement) {
	        setTimeout(function() {
	        	$("html, body").animate({scrollTop: 0}, 200);
	        	$(".bx-wrapper .bx-pager").fadeIn('fast');
		    },0);
	    },
	});

	let count = slider.getSlideCount();

	if (count > 1) {
		$('.slider__controls').show();

		$("html").mousemove(function( event ) {
			$(".bx-wrapper .bx-pager").fadeIn('fast');

			myStopFunction();
			myFunction();
		});

		function myFunction() {
			myVar = setTimeout(function(){
				$(".bx-wrapper .bx-pager").fadeOut('fast');
				}, 2000);
			}
			function myStopFunction() {
				if(typeof myVar != "undefined"){
				clearTimeout(myVar);
			}
		}

        if (localStorage.getItem('help') != 'hide') {
			setTimeout(function() {
	        	$('.help').fadeIn('fast');
		    },1000);
		}
	}

	$('.next').click(function(){
		slider.goToNextSlide();
	});

	$('.prev').click(function(){
		slider.goToPrevSlide();
	});

    $('.help .close').click(function(){
    	$(this).parent().hide();
    	localStorage.setItem('help', 'hide')
    });

    $(window).load(function(){
    	slider.reloadSlider();
    });

});