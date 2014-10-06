//HIDE SCROLL
jQuery(document).ready(function($) {
	// HELPERS
	function cd(el) {
		console.dir(el);
	}

	function cl(el) {
		console.log(el);
	}


	// var paraContainer = $('#parallax-kieth'),
	// el = jQuery('#solutions-title'),
	// paraScroll;

	// // PARALLAX DIVS
	// var group2back = $('#group2 > div.parallax__layer.parallax__layer--back'),
	// group6back = $('#group6 > div.parallax__layer.parallax__layer--back'),
	// flyit = $('#fly-it'),
	// flyit2 = $('#fly-it-2'),
	// flyit3 = $('#fly-it-3'),
	// flyit4 = $('#fly-it-4');

	// // Returns a function, that, as long as it continues to be invoked, will not
	// // be triggered. The function will be called after it stops being called for
	// // N milliseconds. If `immediate` is passed, trigger the function on the
	// // leading edge, instead of the trailing.
	// debounce = function(func, wait, immediate) {
	// 	var timeout;
	// 	var returnWidth;
	// 	return function() {
	// 		var context = this, args = arguments;
	// 		var later = function() {
	// 			timeout = null;
	// 			if (!immediate) func.apply(context, args);
	// 		};
	// 		var callNow = immediate && !timeout;
	// 		clearTimeout(timeout);
	// 		timeout = setTimeout(later, wait);
	// 		if (callNow) func.apply(context, args);
	// 	};
	// };



	// function isElementInViewport (el) {

	// 		//special bonus for those using jQuery
	// 		if (typeof jQuery === "function" && el instanceof jQuery) {
	// 			el = el[0];
	// 		}

	// 		var rect = el.getBoundingClientRect();

	// 		return (
	// 				rect.top >= 0 &&
	// 				rect.left >= 0 &&
	// 				rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
	// 				rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
	// 		);
	// 	}




	// function callback () {
	// 	//your code here, e.g. console.log('is visible now');
	// 	// cl('This is visisble now');
	// }


	// function noCallback () {
	// 	//your code here, e.g. console.log('is visible now');
	// 	// cl('Hidden');
	// }


	// function hideEl(el, winScroll, offsetAmt, hideShow) {

	// 	// HIDE IMAGE
	// 	if(hideShow == 'hide') {
	// 		if( winScroll > offsetAmt ) {
	// 			// $(el).addClass('no-vis');
	// 			if(!$(el).hasClass('no-vis')) {
	// 				$(el).addClass('no-vis');
	// 			}
	// 		} else if (offsetAmt > winScroll) {
	// 			if($(el).hasClass('no-vis')) {
	// 				$(el).removeClass('no-vis');
	// 			}
	// 		}
	// 	}


	// 	// HIDE IMAGE
	// 	if(hideShow == 'show') {
	// 		if( winScroll > offsetAmt ) {
	// 			// $(el).addClass('no-vis');
	// 			if($(el).hasClass('no-vis')) {
	// 				$(el).removeClass('no-vis');
	// 			}
	// 		} else if (offsetAmt > winScroll) {
	// 			if(!$(el).hasClass('no-vis')) {
	// 				$(el).addClass('no-vis');
	// 			}
	// 		}
	// 	}

	// }


	// function flyItOut(el, winScroll, offsetAmt) {
	// 	if( winScroll > offsetAmt ) {
	// 		$(el).addClass('flyout');
	// 	} else if (offsetAmt > winScroll) {
	// 		$(el).removeClass('flyout');
	// 	}
	// }


	// function paraScrollTop (el, callback) {
	// 	return function () {
	// 		paraScroll = paraContainer[0].scrollTop;
	// 		// cl(paraScroll);

	// 		// HIDE GROUP 2 BACK
	// 		// hideEl(group2back, paraScroll, 1280, 'hide');
	// 		hideEl(group2back, paraScroll, 1200, 'hide');
	// 		// hideEl(group6back, paraScroll, 2793, 'show');
	// 		// hideEl(group6back, paraScroll, 2800, 'show');
	// 		hideEl(group6back, paraScroll, 3060, 'show');
	// 		// hideEl(group6back, paraScroll, 2915, 'show');

	// 		flyItOut(flyit, paraScroll, 1450);

	// 		flyItOut(flyit2, paraScroll, 1830);

	// 		flyItOut(flyit3, paraScroll, 2260);

	// 		flyItOut(flyit4, paraScroll, 2690);


	// 		// cd(paraContainer[0].scrollTop);

	// 		// if ( isElementInViewport(el) ) {
	// 		//		callback();
	// 		// } else {
	// 		//	noCallback();
	// 		// }
	// 	};
	// }

	
	// // cd(el);

	// var handler = paraScrollTop (el, callback);



	// //CALL FUNCTION
	// // $(window).on('DOMContentLoaded load resize scroll', handler);
	// $(paraContainer).on('DOMContentLoaded load resize scroll', handler);


	///////////////////////////////// NEW PARALLAX TRY ///////////////////////////////////////////////

	// STORE VARIABLES
	// HOLDERS
	// var cParallax = $('#charles-parallax'),
	// video = $('#video'),
	// gamDefBg = $('#gamut-defined-bg'),
	// careerSmartBg = $('career-smart-bg'),
	// cGroup4 = $('#charles-group4'),
	// flyit = $('#charles-fly-it'),
	// flyit2 = $('#charles-fly-it-2'),
	// flyit3 = $('#charles-fly-it-3'),
	// flyit4 = $('#charles-fly-it-4');

	// // UTIL VARIABLES
	// var scrollTop,
	// cenScreen,
	// paraHeight,
	// videoHeight,
	// percentVideo,
	// paraScrollHeight,
	// scrollPercent,
	// scrollPercentRounded,
	// lessVideo,
	// flyitPos,
	// flyit2Pos,
	// flyit3Pos,
	// flyit4Pos,
	// cGroup4offset,
	// elemOffset;

	// function getHeight(elem, index, cenScreen, scrollTop) {
	// 	var elem = elem, 
	// 	index = index,
	// 	cenScreen = cenScreen,
	// 	scrollTop = scrollTop;

	// 	cGroup4offset = cGroup4.get(0).offsetTop;
	// 	var elemOffset = cGroup4offset + ( ( 380 * index ) - 130 );

	// 	cl( 'This is elemOffset: ');
	// 	cl(elemOffset );
	// 	cl('This is cenScreen');
	// 	cl(cenScreen);
	// 	cl('This is scrollTop');
	// 	cl(scrollTop);

	// 	// return elemOffset;
 //        if ( ( elemOffset + (380*3) -cenScreen ) < scrollTop ) {
 //        	console.log('flyitOffset4 is past!');
 //        	flyit4.toggleClass('flyout');
 //        } else if( ( elemOffset + (380*2) -cenScreen ) < scrollTop ) {
 //        	console.log('flyitOffset3 is past!');
 //        	flyit3.toggleClass('flyout');
 //        } else if( ( elemOffset + (380) -cenScreen ) < scrollTop ) {
 //        	console.log('flyitOffset2 is past!');
 //        	flyit2.toggleClass('flyout');
 //        } else if( ( elemOffset-cenScreen ) < scrollTop ) {
 //        	console.log('flyitOffset is past!');
 //        	flyit.toggleClass('flyout');
 //        }

	// }


	// // $(window).scroll(function(e){
	// $(cParallax).scroll(function(e){
 //        scrollTop = cParallax.scrollTop();
 //        paraHeight = cParallax.height();
 //        cenScreen = paraHeight/2;
 //        videoHeight = video.height();
 //        paraScrollHeight = cParallax.get(0).scrollHeight;
 //        percentVideo = Math.round( (videoHeight/paraScrollHeight) * 100 );
 //        scrollPercent = (scrollTop) / (paraScrollHeight - paraHeight);
 //        // scrollPercent = (scrollTop) / (paraScrollHeight - paraHeight + videoHeight);
 //        scrollPercentRounded = Math.round(scrollPercent*100);
 //        lessVideo = scrollPercentRounded - percentVideo;

 //        // cl('This is flyit 1:');
 //        // cd(flyit);
 //        // cl('This is cGroup4');
 //        // cd(cGroup4);
 //        // cl(cGroup4.get(0).offsetTop);
 //  		// flyitPos = flyit;
	// 	// flyit2Pos = flyit2;
	// 	// flyit3Pos = flyit3;
	// 	// flyit4Pos = flyit4;

        
 //        // cl('Here are the details ya;ll:');
 //        // cl('ScrollTop: ' + scrollTop);
 //        // // cl('videoHeight: ' + videoHeight);
 //        // // cl('percentVideo: ' + percentVideo);
 //        // cl('Paraheight: ' + paraHeight);
 //        // cl('paraScrollHeight: ' + paraScrollHeight);
 //        // // cl('ScrollPercent: ' + scrollPercent);
 //        // cl('ScrollPercentRounded: ' + scrollPercentRounded);
 //        // cl('lessVideo: ' + lessVideo);

 //        // cd(cParallax);

 //        getHeight(flyit, 1, cenScreen, scrollTop);

 //        // $('#scrollPercentLabel>span').html(scrollPercentRounded);
 //        $('#scrollPercentLabel>span').html(scrollPercentRounded);
 //        repositionLabel();
 //    });

 //    $('#charles-parallax').resize(function(){
 //        repositionLabel();
 //    });

 //    function repositionLabel() {
 //        $('#scrollPercentLabel').css({
 //            position:'fixed',
 //            left: ($('#charles-parallax').width() - $('#scrollPercentLabel').outerWidth()) / 2,
 //            top: (($('#charles-parallax').height() - $('#scrollPercentLabel').outerHeight()) / 2) - $('#scrollPercentLabel').height()
 //        });
 //    }

 //    repositionLabel();
	

}); /* end of as page load scripts */
