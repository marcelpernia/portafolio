$(document).ready(function(){

	$('.clickprogress').click(function(){
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
	
});