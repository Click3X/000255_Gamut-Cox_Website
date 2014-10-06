//HIDE SCROLL
jQuery(document).ready(function($) {
	// HELPERS
	// function cd(el) {
	// 	console.dir(el);
	// }

	// function cl(el) {
	// 	console.log(el);
	// }

	var paraContainer = $('#charles-parallax'),
	paraScroll;

	// PARALLAX DIVS
	var group2back = $('#charles-group2 > div.charles-parallax__layer.charles-parallax__layer--back'),
	group6back = $('#charles-group6 > div.charles-parallax__layer.charles-parallax__layer--back'),
	flyit = $('#charles-fly-it'),
	flyit2 = $('#charles-fly-it-2'),
	flyit3 = $('#charles-fly-it-3'),
	flyit4 = $('#charles-fly-it-4');

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


	// function hideEl(el, winScroll, offsetAmt, hideShow) {

	//	// HIDE IMAGE
	//	if(hideShow == 'hide') {
	//		if( winScroll > offsetAmt ) {
	//			// $(el).addClass('no-vis');
	//			if(!$(el).hasClass('no-vis')) {
	//				$(el).addClass('no-vis');
	//			}
	//		} else if (offsetAmt > winScroll) {
	//			if($(el).hasClass('no-vis')) {
	//				$(el).removeClass('no-vis');
	//			}
	//		}
	//	}


	//	// HIDE IMAGE
	//	if(hideShow == 'show') {
	//		if( winScroll > offsetAmt ) {
	//			//$(el).addClass('no-vis');
	//			if($(el).hasClass('no-vis')) {
	//				$(el).removeClass('no-vis');
	//			}
	//		} else if (offsetAmt > winScroll) {
	//			if(!$(el).hasClass('no-vis')) {
	//				$(el).addClass('no-vis');
	//			}
	//		}
	//	}
	// }


	function flyItOut(el, winScroll, offsetAmt) {
		if( winScroll > offsetAmt ) {
			$(el).addClass('flyout');
		} else if (offsetAmt > winScroll) {
			$(el).removeClass('flyout');
		}
	}


	function paraScrollTop () {
		return function () {
			paraScroll = paraContainer[0].scrollTop;

			// HIDE GROUP 2 BACK
			// hideEl(group2back, paraScroll, 1200, 'hide');
			// hideEl(group6back, paraScroll, 3060, 'show');

			var base = 1700;
			// flyItOut(flyit, paraScroll, 1450);
			flyItOut(flyit, paraScroll, base);

			// flyItOut(flyit2, paraScroll, 1830);
			flyItOut(flyit2, paraScroll, base + 372);

			// flyItOut(flyit3, paraScroll, 2260);
			flyItOut(flyit3, paraScroll, base + ( 372 * 2 ) );

			// flyItOut(flyit4, paraScroll, 2690);
			flyItOut(flyit4, paraScroll, base + ( 372 * 3 ) );
		};
	}

	
	var handler = paraScrollTop();

	//CALL FUNCTION
	$(paraContainer).on('DOMContentLoaded load resize scroll', handler);
	

}); /* end of as page load scripts */
