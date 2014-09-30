<?php
// CHARLES SLIDER
// ALREADY IN WP LOOP FROM TEMPLATE FILE

$slides = get_field('slides');

// ARRAY TO HOLD SLIDES
$mySlides = array();

function helper($array) {
	echo '<pre>'.print_r($array).'</pre>';
}


// helper($slides);

foreach ($slides as $key => $slide) {
	if($slide['image']) { $mySlides[$key]['image'] = $slide['image']; }
	if($slide['text']) { $mySlides[$key]['text'] = $slide['text']; }
	if($slide['color_bars']) { $mySlides[$key]['color_bars'] = $slide['color_bars']; }
}

// helper($mySlides);

?>

<div class="clearfix">
	<div id="charles-slider" class="royalSlider rsDefault">

		<?php 
		foreach ($mySlides as $key => $mySlide) {
			echo '<div class=""><img src="'.$mySlide['image'].'" alt=""></div>';
		}
		?>

	</div>
</div>