$(document).ready(function(){

	$('form').submit(function(){
	  $(this).find('button[type="submit"]').addClass('inprogress');
	});	

// Width ajax
/*	
	$('.loading').click(function(){
	  $(this).addClass('progressbtn');
	});

	jQuery.ajaxSetup({
	  beforeSend: function() {
	    $('.progressbtn').addClass('inprogress').prop('disabled',true);
	  },
	  complete: function(){
	    $('.progressbtn').removeClass('inprogress').prop('disabled',false);
	  }
	});
*/


});