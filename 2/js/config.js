/* topmenubtn */
jQuery(document).ready(function($){
	$('#topmenubtn').click(function(){
		$('#topmenu ul').animate({ height : 'toggle' },function(){$(this).css('display','').toggleClass('menuon');});
	});

	//pagetop
	$("#pagetop").click(function(){
		$('html, body').animate({
			'scrollTop': 0
		},900,'easeInOutExpo');
		return false;
	});
});