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
		var currentAttrValue = $(this).attr('href');
		$('.tabs ' + currentAttrValue).fadeIn(400).siblings().hide();
	});

	$('.tabs .tab-links li').click(function(){
		$(this).addClass('current').siblings().removeClass('current');
	});

});