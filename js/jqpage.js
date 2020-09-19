var height = $('#header').height();
$(window).scroll (function(){

	if($(this).scrollTop()>height){
		$('.menu').addClass('fixed');
	}else{
		$('.menu').removeClass('fixed');
	}
});
