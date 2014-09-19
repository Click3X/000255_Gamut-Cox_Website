// RS-SLIDER JS
jQuery( document ).ready(function($) {
    console.log( "ready!" );

  //   $('#parallax-slider').royalSlider({
		// autoScaleSlider:true,
		// // autoScaleSliderWidth:100%,
		// // autoScaleSliderHeight:800,
		// // imageScaleMode:'fit',
		// imageScalePadding:0,
		// slidesSpacing:0,
		// // imageAlignCenter:true
  //   });

	$marqueeSlider = $('#marquee-slider');
	// INITIALIZE SLIDERS
    $marqueeSlider.royalSlider({
        autoHeight: true,
        transitionSpeed:1200,
        arrowsNav: true,
        arrowsNavAutoHide:false,
        fadeinLoadedSlide: false,
        controlNavigationSpacing: 0,
        controlNavigation: 'none',
        imageScaleMode: 'none',
        imageAlignCenter:false,
        slidesSpacing:0,
        loop: true,
        loopRewind:false,
        numImagesToPreload: 6,
        keyboardNavEnabled: true,
        usePreloader: true,
        autoPlay: {
            // autoplay options go gere
            enabled: true,
            pauseOnHover: true,
            delay:6000
        }
    });
});