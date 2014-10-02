<div id="home-slider-holder" class="container clearfix">
	
	<?php 
		require_once 'Mobile_Detect.php'; 
		$detect = new Mobile_Detect;
	?>

	<?php if ( $detect->isMobile() ) : ?>
	
		<img src="<?php bloginfo('url'); ?>/wp-content/videos/gamut_intro_1.gif" width="100%"/>
		
	<?php  else : ?>

		<!-- VIDEO -->
		<video id="video" width="100%" loop autoplay muted>
			<source src="<?php bloginfo('url'); ?>/wp-content/videos/GAMUT_new.mp4" type="video/mp4">
			<source src="<?php bloginfo('url'); ?>/wp-content/videos/GAMUT_new.ogv" type="video/ogg">
			<source src="<?php bloginfo('url'); ?>/wp-content/videos/GAMUT_new.webm" type="video/webm">

			<img src="<?php bloginfo('url'); ?>/wp-content/videos/gamut_intro_1.gif" width="100%"/>
		</video>

		<!-- VIDEO CONTROLS -->
		<div id="video-controls">
			<button id="mute" class="stopsound" type="button"></button>
		</div>

	<?php endif; ?>

</div> 