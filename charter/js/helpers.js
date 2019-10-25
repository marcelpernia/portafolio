$(document).ready(function(){

	$('.navicon, .menu-responsive a').click(function(){
		$('.menu-responsive').slideToggle();
	});

	$(window).scroll(function () {
	    var scrollTop = $(window).scrollTop();
	    var height = $(window).height();

	    $('.op').css({
	        'opacity': ((height - scrollTop) / height),
	    }); 

	    if ($(this).scrollTop() > 600) {
	    	$('.op').hide();
	    	// $('body.home .head').fadeIn();
	    } else {
	    	$('.op').show();
	    	// $('body.home .head').fadeOut();
	    }

	});



	$('a[id^="box-"]').click(function(){
		$('body').css('overflow-y','hidden');
	});

	$('.close-box').click(function(){
		$(this).parent().fadeOut();
		$('body').css('overflow-y','auto');
	});

	$('#box-1').click(function(){
		$('.box1').fadeIn();
	});
	$('#box-2').click(function(){
		$('.box2').fadeIn();
	});
	$('#box-3').click(function(){
		$('.box3').fadeIn();
	});
	$('#box-4').click(function(){
		$('.box4').fadeIn();
	});
	$('#box-5').click(function(){
		$('.box5').fadeIn();
	});
	$('#box-6').click(function(){
		$('.box6').fadeIn();
	});
	$('#box-7').click(function(){
		$('.box7').fadeIn();
	});
	$('#box-8').click(function(){
		$('.box8').fadeIn();
	});
	$('#box-9').click(function(){
		$('.box9').fadeIn();
	});
	$('#box-10').click(function(){
		$('.box10').fadeIn();
	});
	$('#box-11').click(function(){
		$('.box11').fadeIn();
	});
	$('#box-12').click(function(){
		$('.box12').fadeIn();
	});
	$('#box-13').click(function(){
		$('.box13').fadeIn();
	});
	$('#box-14').click(function(){
		$('.box14').fadeIn();
	});




	$('input#oneway').click(function(){
			$('#date_timepicker_end').attr("disabled", true);
	});

	$('input#round').click(function(){
			$('#date_timepicker_end').attr("disabled", false);
	});





	$(".deslizar").click(function(event){
    event.preventDefault()
    
    $('html, body').animate({
    scrollTop: $($(this).attr("href")).offset().top
    }, 1000);
	});



});