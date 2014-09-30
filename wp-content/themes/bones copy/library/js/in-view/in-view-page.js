jQuery(document).ready(function($) {

	Function.prototype.debounce = function(threshold){
	    var callback = this;
	    var timeout;
	    return function() {
	        var context = this, params = arguments;
	        window.clearTimeout(timeout);
	        timeout = window.setTimeout(function() {
	            callback.apply(context, params);
	        }, threshold);
	    };
	};


	$.fn.isOnScreen = function(){
	    var viewport = {};
	    viewport.top = $(window).scrollTop();
	    viewport.bottom = viewport.top + $(window).height();
	    var bounds = {};
	    bounds.top = this.offset().top;
	    bounds.bottom = bounds.top + this.outerHeight();
	    return ((bounds.top <= viewport.bottom) && (bounds.bottom >= viewport.top));
	};

	

	function group5() {
		if ( $('group5').isOnScreen() ) {

		 // $('body').css('background-color','red');
		 console.log('YES YES YES YES YES YES');
		 console.dir(this);
		} 
	}

	// console.log('I am here and ready for codes!');
	// var smartBg = $('#smart-service-bg'),
	// careerBg = $('#careers-bg');
 		
 // 	var smartInView;

 // // 	$(window).scroll(function () {
	// // 	smartInView = $("#smart-service-bg:in-viewport");
	// // 	console.log('Thisi is smartInView');
	// // 	console.log(smartInView);
	// // });

	// var isInView = debounce(function($) {
	// 	if ( $('#smart-service-bg').isOnScreen() ) {

	// 	 // $('body').css('background-color','red');
	// 	 console.log('YES YES YES YES YES YES');
	// 	 console.dir(this);
	// 	} 
	// }, 250);


	// $(window).scroll(function () {
	// 	// window.addEventListener('resize', isInView);
	// 	// if ( $('group5').isOnScreen() ) {

	// 	//  // $('body').css('background-color','red');
	// 	//  console.log('YES YES YES YES YES YES');
	// 	//  console.dir(this);
	// 	// } 

	// });

	// var tester = $('#group5');
	// var check = function(){
	//   var visible = tester.isOnScreen(0.1, 0.2);
	//   console.log(visible);
	//   console.log('Group5 is visible!');
	//   $('#smart-service-bg').removeClass('no-vis');
	// }
	// var debounced = check.debounce(10);
	// $(window).on('scroll', debounced);


});