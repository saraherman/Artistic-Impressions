$(document).ready(function() {
	// height is porportional to width at start of session

	$width = $('.slider-frame').width();

	$height = $width/1.54;
	$('.slider-frame').css('height', $height);

	$('.slider-frame img').css('height', $height);


	// height stays proportional, ie: on resize
	resizeSlider = function(){
		$width = $('.slider-frame').width();

		$height = $width/1.54;
		$('.slider-frame').css('height', $height);
		$('.slider-frame img').css('height', $height);
	}
});