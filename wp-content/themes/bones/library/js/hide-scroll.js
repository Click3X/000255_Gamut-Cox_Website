//HIDE SCROLL
jQuery(document).ready(function($) {
	// HELPERS
	function cd(el) {
		console.dir(el);
	}

	function cl(el) {
		console.log(el);
	}


	var paraContainer = $('#parallax-kieth'),
	el = jQuery('#solutions-title'),
	paraScroll;

	// PARALLAX DIVS
	var group2back = $('#group2 > div.parallax__layer.parallax__layer--back'),
	group6back = $('#group6 > div.parallax__layer.parallax__layer--back');

	// Returns a function, that, as long as it continues to be invoked, will not
	// be triggered. The function will be called after it stops being called for
	// N milliseconds. If `immediate` is passed, trigger the function on the
	// leading edge, instead of the trailing.
	debounce = function(func, wait, immediate) {
		var timeout;
		var returnWidth;
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



	function isElementInViewport (el) {

			//special bonus for those using jQuery
			if (typeof jQuery === "function" && el instanceof jQuery) {
			el = el[0];
			}

			var rect = el.getBoundingClientRect();

			return (
					rect.top >= 0 &&
					rect.left >= 0 &&
					rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
					rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
			);
	}




	function callback () {
		//your code here, e.g. console.log('is visible now');
		cl('This is visisble now');
	}


	function noCallback () {
		//your code here, e.g. console.log('is visible now');
		cl('Hidden');
	}


	function hideEl(el, winScroll, offsetAmt, hideShow) {

		// HIDE IMAGE
		if(hideShow == 'hide') {
			if( winScroll > offsetAmt ) {
				// $(el).addClass('no-vis');
				if(!$(el).hasClass('no-vis')) {
					$(el).addClass('no-vis');
				}
			} else if (offsetAmt > winScroll) {
				if($(el).hasClass('no-vis')) {
					$(el).removeClass('no-vis');
				}
			}
		}


		// HIDE IMAGE
		if(hideShow == 'show') {
			if( winScroll > offsetAmt ) {
				// $(el).addClass('no-vis');
				if($(el).hasClass('no-vis')) {
					$(el).removeClass('no-vis');
				}
			} else if (offsetAmt > winScroll) {
				if(!$(el).hasClass('no-vis')) {
					$(el).addClass('no-vis');
				}
			}
		}



	}



	function paraScrollTop (el, callback) {
		return function () {
			paraScroll = paraContainer[0].scrollTop;
			cl(paraScroll);

			// HIDE GROUP 2 BACK
			hideEl(group2back, paraScroll, 1280, 'hide');
			hideEl(group6back, paraScroll, 2793, 'show');
			// hideEl(group6back, paraScroll, 2915, 'show');


			// cd(paraContainer[0].scrollTop);

			// if ( isElementInViewport(el) ) {
			// 		callback();
			// } else {
			// 	noCallback();
			// }
		}
	}

	
	cd(el);

	var handler = paraScrollTop (el, callback);





	//CALL FUNCTION
	// $(window).on('DOMContentLoaded load resize scroll', handler);
	$(paraContainer).on('DOMContentLoaded load resize scroll', handler);
	

}); /* end of as page load scripts */
