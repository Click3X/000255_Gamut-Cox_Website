<?php
/*
 Template Name: Home
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

	<div class="debug">
		<label><input type="checkbox"> Debug</label>
	</div>

	<div id="content">

		<div id="inner-content" class="cf">

			<div id="main" class="m-all cf" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); 
					// DECLARE VARIABLES
					$bg_img = get_field('gamut-defined-bg');
					$gamut_defined_title = get_field('gamut-defined-title');
					$gamut_defined_content = get_field('gamut-defined-content');

					$our_solutions_title = get_field('our-solutions-title');
					$our_solutions_content = get_field('our-solutions-content');

					$programmatic_intro_content = get_field('programmatic-intro-content');
					$programmatic_intro_title = get_field('programmatic-intro-title');

					$convergence_intro_content = get_field('convergence-intro-content');
					$convergence_intro_title = get_field('convergence-intro-title');

					$reps_intro_content = get_field('reps-intro-content');
					$reps_intro_title = get_field('reps-intro-title');

					$reach_intro_content = get_field('reach-intro-content');
					$reach_intro_title = get_field('reach-intro-title');

					$gamut_difference_title = get_field('gamut-difference-title');
					$gamut_difference_content = get_field('gamut-difference-content');

					$smart_service_title = get_field('smart-service-title');
					$smart_service_content = get_field('smart-service-content');
					$smart_service_image = get_field('smart-service-image');

					$careers_title = get_field('careers-title');
					$careers_content = get_field('careers-content');
					$careers_image = get_field('careers-image');

				?>

				<?php 
					// WEN'S HOME PAGE FILE
				//	include('php/home-wen.php');
				?>	

				<!-- START CHARLES PARALLAX -->
				<div class="parallax">

					<div id="group1" class="parallax__group">
						<div class="parallax__layer parallax__layer--base">
							<div id="homeSliderContainer">
								<div id="home-slider">
									<div id="bg">
										<img src=""/>
									</div>
									<div id="fg">
										<img src="<?php bloginfo('url'); ?>/img/fg-long copy2.png"/>
									</div> 
								</div>
							</div>
						</div>
					</div>
					

					<div id="group2" class="parallax__group small">
						<div class="home-wrap">
							<h1><?php echo $gamut_defined_title ?></h1>
							<div style="margin-left: 10%"><?php echo $gamut_defined_content ?></div>
						</div>
				
						<div class="parallax__layer parallax__layer--back" style="background-repeat: no-repeat; background-image: url('<?php echo $bg_img['url'] ?>'); background-size: cover;">
							<!-- <div class="title">Background Layer</div> -->
						</div>
					</div>


					<div id="group3" class="parallax__group">
						<div class="parallax__layer parallax__layer--fore">
							<!-- <div class="title">Foreground Layer</div> -->
							<div class="home-wrap white">
								<h1><?php echo $our_solutions_title ?></h1>
								<div style="margin-left: 10%"><?php echo $our_solutions_content ?></div>
							</div>
						</div>
						<div class="parallax__layer parallax__layer--base">
							<div class="title">Base Layer</div>
						</div>
					</div>
					

					<div id="group4" class="parallax__group">
						<div class="parallax__layer parallax__layer--base">
							<div class="title">Base Layer</div>
						</div>
						<div class="parallax__layer parallax__layer--back">
							<div class="title">Background Layer</div>
						</div>
						<div class="parallax__layer parallax__layer--deep">
							<div class="title">Deep Background Layer</div>
						</div>
					</div>
					

					<div id="group5" class="parallax__group">
						<div class="parallax__layer parallax__layer--fore">
							<div class="title">Foreground Layer</div>
						</div>
						<div class="parallax__layer parallax__layer--base">
							<div class="title">Base Layer</div>
						</div>
					</div>

					
					<div id="group6" class="parallax__group">
						<div class="parallax__layer parallax__layer--back">
							<div class="title">Background Layer</div>
						</div>
						<div class="parallax__layer parallax__layer--base">
							<div class="title">Base Layer</div>
						</div>
					</div>
					
					<div id="group7" class="parallax__group">
						<div class="parallax__layer parallax__layer--base">
							<div class="title">Base Layer</div>
						</div>
					</div>
				</div>			

				<?php endwhile; ?>

				<?php endif; ?>

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

<?php get_footer(); ?>