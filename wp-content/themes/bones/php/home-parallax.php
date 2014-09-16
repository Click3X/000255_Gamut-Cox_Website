<!-- START CHARLES PARALLAX -->
<div class="debug">
	<label><input type="checkbox"> Debug</label>
</div>


<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<section class="entry-content cf" itemprop="articleBody">

		
			

		<div class="parallax">

			<!-- CAROUSEL -->
		    <div id="group1" class="parallax__group">
				<div class="parallax__layer parallax__layer--deep bg-layer" style="background-image:url('<?php echo bloginfo('url'); ?>/img/gamut_slide4.png');"></div>
		    </div>


		    <!-- BG-IMAGE -->
		    <div id="group2" class="parallax__group half-height">
				<div class="parallax__layer parallax__layer--base">
					<div class="home-wrap">
						<h1><?php echo $gamut_defined_title ?></h1>
						<div style="margin-left: 10%"><?php echo $gamut_defined_content ?></div>
					</div>
				</div>
				<div class="parallax__layer parallax__layer--back bg-layer" style="background-image: url('<?php echo $bg_img['url'] ?>');"></div>
		    </div>


		    <!-- GREY -->
		    <div id="group3" class="parallax__group half-height">
				<div class="parallax__layer parallax__layer--fore">
					<div class="home-wrap white">
						<h1><?php echo $our_solutions_title ?></h1>
						<div style="margin-left: 10%"><?php echo $our_solutions_content ?></div>
					</div>
				</div>
				<div class="parallax__layer parallax__layer--base grey-bg"></div>
		    </div>


		    <!-- SUB-PAGE BLOCKS -->
		    <div id="group4" class="parallax__group">
				<div class="parallax__layer parallax__layer--a">
					<!-- Programmatic -->
					<div class="subpage-wrapper clearfix">
						<div class="p-holder">
							<p class="p"><?php echo $programmatic_intro_content; ?></p>
						</div>
						<div class="half blue">
							<a href="#" class="gamut-btn abs-center">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
						</div>
						<div class="half red">
							<img id="pro-logo" src="<?php bloginfo('url'); ?>/img/home-logos/programmatic-logo.png">
							<div id="fly-it" class="bg-img programmatic"></div>
						</div>
					</div>


					<!-- Reps -->
					<div class="subpage-wrapper clearfix">
						<div class="p-holder">
							<p class="p"><?php echo $reps_intro_content; ?></p>
						</div>
						<div class="half blue">
							<a href="#" class="gamut-btn abs-center">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #039fd3;"></span></a>
						</div>
						<div class="half red">
							<img id="rep-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reps-logo.png">
							<div id="fly-it-2" class="bg-img reps"></div>
						</div>
					</div>



					<!-- Reach -->
					<div class="subpage-wrapper clearfix">
						<div class="p-holder">
							<p class="p"><?php echo $reach_intro_content; ?></p>
						</div>
						<div class="half blue">
							<a href="#" class="gamut-btn abs-center">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #8fc73e;"></span></a>
						</div>
						<div class="half red">
							<img id="reach-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reach-logo.png">
							<div id="fly-it-3" class="bg-img reach"></div>
						</div>
					</div>


					<!-- Cross Media -->
					<div class="subpage-wrapper clearfix">
						<div class="p-holder">
							<p class="p"><?php echo $convergence_intro_content; ?></p>
						</div>
						<div class="half blue">
							<a href="#" class="gamut-btn abs-center">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #fba211;"></span></a>
						</div>
						<div class="half red">
							<img id="crossmedia-logo" src="<?php bloginfo('url'); ?>/img/home-logos/crossmedia-logo.png">
							<div id="fly-it-4" class="bg-img crossmedia"></div>
						</div>
					</div>
				</div>
				<div class="parallax__layer parallax__layer--back">
					<div class="title">Background Layer</div>
				</div>
				<div class="parallax__layer parallax__layer--deep">
					<div class="title">Deep Background Layer</div>
				</div>
		    </div>



		    <!-- OUR SOLUTIONS -->	
		    <div id="group5" class="parallax__group half-height">
				<div class="parallax__layer parallax__layer--fore white">
					<!-- <div class="title">Foreground Layer</div> -->\
					<div class="home-wrap">
						<h1><?php echo $gamut_difference_title; ?></h1>
						<div style="margin-left: 10%"><?php echo $gamut_difference_content ?></div>
					</div>
				</div>
				<div class="parallax__layer parallax__layer--base grey-bg"></div>
		    </div>


  			<!-- BG-IMAGE - smart service-->
		    <div id="group6" class="parallax__group half-height">
				<div class="parallax__layer parallax__layer--base">
					<!-- <div class="title">Base Layer</div> -->
					<div class="home-wrap">
						<div class="text-half pull-right">
							<img src="<?php bloginfo('url'); ?>/img/plus-sign.png" style="display: inline-block; width: 30px; height: 30px; vertical-align: middle; margin-right: 10px"><h1 style="display: inline-block;"> <?php echo $smart_service_title ?></h1>
							<div style="margin-left: 10%"><?php echo $smart_service_content ?></div>
						</div>
					</div>
				</div>
				<div class="white-bg"></div>
				<div class="parallax__layer parallax__layer--back bg-layer half-mobile" style="background-image: url('<?php echo $smart_service_image['url']; ?>');"></div>
		    </div>



		    <!-- BG-IMAGE -->
		    <div id="group7" class="parallax__group half-height">
				<div class="parallax__layer parallax__layer--base">
					<!-- <div class="title">Base Layer</div> -->
					<div class="home-wrap">
						<div class="text-half pull-left">
							<h1><?php echo $careers_title ?></h1>
							<div style="margin-left: 10%"><?php echo $careers_content ?></div>
						</div>
					</div>
				</div>
				<div class="white-bg"></div>
				<div class="parallax__layer parallax__layer--back bg-layer half-mobile" style="background-image: url('<?php echo $careers_image['url']; ?>');"></div>
		    </div>



		  </div>

		

		<script>
		// PARALLAX DEBUG SCRIPT - DELETE FOR PRODUCTION		
		var debugInput = document.querySelector("input");
		function updateDebugState() {
		    document.body.classList.toggle('debug-on', debugInput.checked);
		}
		debugInput.addEventListener("click", updateDebugState);
		updateDebugState();
		</script>

	</section>
</article>