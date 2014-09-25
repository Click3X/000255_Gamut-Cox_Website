jQuery(document).ready(function($) {

	function debounce(func, wait, immediate) {
		var timeout;
		return function() {
			var context = this, args = arguments;
			var later = function() {
				timeout = null;
				if (!immediate) func.apply(context, args);
			};
			var callNow = immediate && !timeout;
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
			if (callNow) func.apply(context, args);
		};
	};

	console.log('I am here and ready for codes!');
	var smartBg = $('#smart-service-bg'),
	careerBg = $('#careers-bg');
 		
 	var smartInView;

 // 	$(window).scroll(function () {
	// 	smartInView = $("#smart-service-bg:in-viewport");
	// 	console.log('Thisi is smartInView');
	// 	console.log(smartInView);
	// });

	var isInView = debounce(function($) {
		if ($(el)) {

		 // $('body').css('background-color','red');
		 console.log('YES YES YES YES YES YES');
		 console.dir(this);
		} 
	}, 250);


	$(window).scroll(function () {
		window.addEventListener('resize', isInView);
	});


});