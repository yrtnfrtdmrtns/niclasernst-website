$(document).ready(function() {
	$("#fakeLoader").fakeLoader({
		timeToHide:1200, //Time in milliseconds for fakeLoader disappear
		zIndex:"999",//Default zIndex
		spinner:"spinner1",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
		bgColor:"#fff", //Hex, RGB or RGBA colors
	});

	var $status = $('.project-slider-pagination');
    var $slickElement = $('.project-slider');

    $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.text('0' + i + ' / ' + '0' + slick.slideCount);
    });

    $slickElement.slick({});

	$('.slick-prev, .slick-next').text("");

	$('.nav-icon').click(function(){
		$('.responsive-nav').addClass('active');
	});

	$('.nav-icon-close').click(function() {
		$('.responsive-nav').removeClass('active');
	});
})