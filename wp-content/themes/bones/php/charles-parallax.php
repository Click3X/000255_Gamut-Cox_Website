<div class="debug">
	<label><input type="checkbox"> Debug</label>
</div>

<div class="charles-parallax">

	<div id="charles-group1" class="charles-parallax__group">
		<div class="charles-parallax__layer charles-parallax__layer--base">
			<!-- <div class="title">Base Layer</div> -->
			<?php include('home/slider.php'); ?>
		</div>
	</div>


	<div id="charles-group2" class="charles-parallax__group">
		<div class="charles-parallax__layer charles-parallax__layer--base">
			<!-- <div class="title">Base Layer</div> -->
			<div class="clearfix charles-txt-holder">
				<div class="clearfix charles-txt float-middle c-ab-center">
					<h1 id="defined-title"><?php echo $gamut_defined_title; ?></h1>
					<div class="difference"><?php echo $gamut_defined_content; ?></div>
				</div>
			</div>
		</div>
		<div id="gamut-defined-bg" class="charles-parallax__layer charles-parallax__layer--back gamut-defined-bg move-up">
			<div class="title">Background Layer</div>
		</div>
	</div>


	<div id="charles-group3" class="charles-parallax__group grey-block">
		<div class="charles-parallax__layer charles-parallax__layer--fore">
			<!-- <div class="title">Foreground Layer</div> -->
			<div class="clearfix charles-txt-holder">
				<div class="clearfix charles-txt float-middle c-ab-center">
					<h1 id="solutions-title"><?php echo $our_solutions_title; ?></h1>
					<div class="difference"><?php echo $our_solutions_content; ?></div>
				</div>
			</div>
		</div>
		<div class="charles-parallax__layer charles-parallax__layer--base grey-block-bg">
			<div class="title">Base Layer</div>
		</div>
	</div>


	<div id="charles-group4" class="charles-parallax__group">
		<div class="charles-parallax__layer charles-parallax__layer--base">
			<!-- <div class="title">Base Layer</div> -->

			<!-- PROGRAMMATIC -->
			<div class="clearfix charles-subpage-wrap">
				<div class="clearfix charles-subpage float-middle">

					<div class="charles-p-holder">
						<?php echo $programmatic_intro_content; ?>
					</div>
					<div class="clearfix charles-blue">
						<!-- <div class="clearfix c-gam-holder"> -->
							<a href="<?php echo get_permalink(11);?>" class="charles-gamut-btn" id="home-btn-pro">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" id="home-btn-pro-arrow"></span></a>
						<!-- </div> -->
					</div>
					<div class="clearfix charles-red">
						<img id="pro-logo" src="<?php bloginfo('url'); ?>/img/home-logos/programmatic-logo.png" alt="programmatic">
						<!-- <div id="fly-it" class="bg-img programmatic"></div> -->
					</div>

				</div>
			</div>

			<!-- REPS -->
			<div class="clearfix charles-subpage-wrap">
				<div class="clearfix charles-subpage float-middle">
					<div class="charles-p-holder">
					 	<?php echo $reps_intro_content; ?>
					</div>

					<div class="clearfix charles-blue">
						<!-- <div class="clearfix c-gam-holder"> -->
							<a href="<?php echo get_permalink(15);?>" class="charles-gamut-btn" id="home-btn-rep">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" id="home-btn-rep-arrow"></span></a>
						<!-- </div> -->
					</div>

					<div class="clearfix charles-red">
						<img id="rep-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reps-logo.png" alt="reps">
						<!-- <div id="fly-it-2" class="bg-img reps"></div> -->
					</div>
				</div>
			</div>

			<!-- REACH -->
			<div class="clearfix charles-subpage-wrap">
				<div class="clearfix charles-subpage float-middle">
					<div class="charles-p-holder">
						<?php echo $reach_intro_content; ?>
					</div>

					<div class="clearfix charles-blue">
						<!-- <div class="clearfix c-gam-holder"> -->
							<a href="<?php echo get_permalink(24);?>" class="charles-gamut-btn" id="home-btn-rea">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" id="home-btn-rea-arrow"></span></a>
						<!-- </div> -->
						<!-- <a href="<?php echo get_permalink(24);?>"><button class="home-btn-test">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" id="home-btn-rea-arrow"></span></button></a> -->
					</div>

					<div class="clearfix charles-red">
						<img id="reach-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reach-logo.png" alt="reach">
						<!-- <div id="fly-it-3" class="bg-img reach"></div> -->
					</div>
				</div>
			</div>

			<!-- CROSSMEDIA -->
			<div class="clearfix charles-subpage-wrap">
				<div class="clearfix charles-subpage float-middle">
					<div class="charles-p-holder">
						<?php echo $convergence_intro_content; ?>
					</div>

					<div class="clearfix charles-blue">
						<!-- <div class="clearfix c-gam-holder"> -->
							<a href="<?php echo get_permalink(13);?>" class="charles-gamut-btn" id="home-btn-cro">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" id="home-btn-cro-arrow"></span></a>
						<!-- </div> -->
					</div>

					<div class="clearfix charles-red">
						<img id="crossmedia-logo" src="<?php bloginfo('url'); ?>/img/home-logos/crossmedia-logo.png" alt="crossmedia">
						<!-- <div id="fly-it-4" class="bg-img crossmedia"></div> -->
					</div>
				</div>
			</div>
			
		</div>

		<div class="charles-parallax__layer charles-parallax__layer--back">
			<div class="title">Background Layer</div>
		</div>
		<div class="charles-parallax__layer charles-parallax__layer--deep">
			<div class="title">Deep Background Layer</div>
		</div>
	</div>


	<div id="charles-group5" class="charles-parallax__group grey-block">
		<div class="charles-parallax__layer charles-parallax__layer--fore">
			<!-- <div class="title">Foreground Layer</div> -->
			<div class="clearfix charles-txt-holder">
				<div class="clearfix charles-txt float-middle c-ab-center">
					<h1 id="difference-title"><?php echo $gamut_difference_title; ?></h1>
					<div class="difference"><?php echo $gamut_difference_content; ?></div>
					<a href="<?php echo get_permalink(184);?>" class="charles-gamut-btn" id="home-btn-difference">LEARN HOW&nbsp;&nbsp;<span class="arrow-right" id="home-btn-difference-arrow" style="border-left: 6px solid #ed228b;"></span></a>
				</div>
			</div>
		</div>
		<div class="charles-parallax__layer charles-parallax__layer--base grey-block-bg">
			<div class="title">Base Layer</div>
		</div>
	</div>

	
	<div id="charles-group6" class="charles-parallax__group">
		<div class="charles-parallax__layer charles-parallax__layer--back">
			<div class="title">Background Layer</div>
			
<!-- 			<div class="clearfix charles-ss-bg-holder">
				<div id="smart-service-bg" class="smart-service-image charles-ss-image"></div>
			</div>

			<div class="clearfix charles-cc-bg-holder">
				<div id="careers-bg" class="careers-image charles-cc-image"></div>
			</div> -->

		</div>

		<div class="charles-parallax__layer charles-parallax__layer--base">
			<div class="title">Base Layer</div>
			
			<div class="clearfix charles-txt-holder float-middle">
				<div class="clearfix charles-txt-smart">
					<h1 class="plus-sign"><?php echo $smart_service_title; ?></h1>
		            <?php echo $smart_service_content; ?>
		            <div class="clearfix c-btn-hold">
		            	<a href="<?php echo get_permalink(61);?>" class="gamut-btn" id="home-btn-service">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" id="home-btn-service-arrow" style="border-left: 6px solid #ed228b;"></span></a>
		            </div>
				</div>
			</div>

		</div>

	</div>


	
	<div id="charles-group7" class="charles-parallax__group">
		<div class="charles-parallax__layer charles-parallax__layer--base">
			<div class="title">Base Layer</div>
			
			<div class="clearfix charles-txt-holder float-middle">
				<div class="clearfix charles-txt-careers">
					<h1><?php echo $careers_title; ?></h1>
		            <?php echo $careers_content; ?>
		            <div class="clearfix c-btn-hold">
		            	<a href="<?php echo get_permalink(388);?>" class="gamut-btn" id="home-btn-careers">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" id="home-btn-careers-arrow" style="border-left: 6px solid #ed228b;"></span></a>
		            </div>
				</div>
			</div>

			<?php 
				// INCLUDE CHARLES FOOTER
				include('charles-footer.php'); 
			?>

		</div>
	</div>


</div>

<script>
	var debugInput = document.querySelector("input");
	function updateDebugState() {
			document.body.classList.toggle('debug-on', debugInput.checked);
	}
	debugInput.addEventListener("click", updateDebugState);
	updateDebugState();
</script>