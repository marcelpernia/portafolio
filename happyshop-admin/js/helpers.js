$(document).ready(function(){

	$('.toggle-min li').click(function(){
		$(this).addClass('active').siblings().removeClass('active');
	});

	$('#min-menu').click(function(){
		$('.menu').addClass('min');
	});

	$('#list-menu').click(function(){
		$('.menu').removeClass('min');
	});

	$('.tabs .tab-links a').on('click', function(e)  {
		var currentAttrValue = $(this).attr('tab-id');
		$('.tabs ' + currentAttrValue).fadeIn(400).siblings().hide();
	});

	$('.tabs .tab-links li').click(function(){
		$(this).addClass('current').siblings().removeClass('current');
	});


	$('#change-pass-region').css('display','none');
	$('#change-pass-toggle').click(function(){
		$('#change-pass-region').show();
	});

	$('.nav li a').each(function(index) {
	    if(this.href.trim() == window.location){
	        $(this).parent().addClass("active");
	        cambio = true;
	    }
	});


});
