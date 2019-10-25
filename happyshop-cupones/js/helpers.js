$(document).ready(function(){

	var htmlHeight = $('html').height();
	var headHeight = $('.head').height();
	var footerHeight = $('.footer').height();
	var minimunHeight = htmlHeight - headHeight - footerHeight;
	$('.min-height').css({minHeight:minimunHeight});

	var userMenuTrigger = $('.user-menu-trigger');
	var userMenu = $('.user-menu');

	var sidebarTrigger = $('.sidebar-trigger');
	var sidebar = $('.sidebar');

	$('html').click(function() {
	    userMenu.hide();
	});

	userMenuTrigger.click(function(e){
		$(this).parent().find(userMenu).toggle();
		e.stopPropagation();
	})

	sidebarTrigger.click(function(){
		sidebar.toggleClass('show-sidebar');
	});

	$('#change-pass-region').css('display','none');
	$('#change-pass-toggle').click(function(){
		$('#change-pass-region').show();
	});

});