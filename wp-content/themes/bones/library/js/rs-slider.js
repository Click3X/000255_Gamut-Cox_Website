// RS-SLIDER JS
jQuery( document ).ready(function($) {

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