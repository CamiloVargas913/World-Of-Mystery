$(document).ready(function(){
	var imag= $('.slider li').length;
	var imgPos=1;
	for (var i = 1; i <= imag; i++) {
		$('.pagination').append('<li><span class="fa fa-circle"></span></li>');
	}
	$('.slider li').hide();
	$('.slider li:first').show();
	$('.pagination li:first').css({'color':'#CD6E2E'});

	$('.pagination li').click(pagination);
	$('.right span').click(nexSlider);
	$('.left span').click(prevSlider);

	setInterval(function(){
		nexSlider();
	},8000);

	function pagination(){
		var pagiPos = $(this).index()+1;
		$('.slider li').hide();
		$('.slider li:nth-child('+pagiPos+')').fadeIn();

		$('.pagination li').css({'color':'#858585'});
		$(this).css({'color':'#CD6E2E'});
		imgPos=pagiPos;
	}
	function nexSlider(){
		if (imgPos>=imag) {
			imgPos=1;
		}else{
			imgPos++;
		}
		$('.pagination li').css({'color':'#858585'});
		$('.pagination li:nth-child('+imgPos+')').css({'color':'#CD6E2E'});
		$('.slider li').hide();
		$('.slider li:nth-child('+imgPos+')').fadeIn();
	}
	function prevSlider(){
		if (imgPos<=1) {
			imgPos=imag;
		}else{
			imgPos--;
		}
		$('.pagination li').css({'color':'#858585'});
		$('.pagination li:nth-child('+imgPos+')').css({'color':'#CD6E2E'});
		$('.slider li').hide();
		$('.slider li:nth-child('+imgPos+')').fadeIn();
	}
})