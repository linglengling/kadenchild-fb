(function($){
	$(document).ready(function(){
		if($('.wm-competition').length > 0){
			$('.wm-competition').slick({
				dots: false,
				infinite: false,
				speed: 500,
				swipe: true,
				centerMode: false,
				variableWidth: true,
				swipeToSlide: true,
				arrows: false
			});
		}
	});
})(jQuery);