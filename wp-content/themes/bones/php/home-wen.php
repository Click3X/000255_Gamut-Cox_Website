<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<section class="entry-content cf" itemprop="articleBody">

		<div id="homeSliderContainer">
			<div id="home-slider">
				<div id="bg">
					<img src=""/>
				</div>
				<div id="fg">
					<img src="<?php bloginfo('url'); ?>/img/fg-long-copy2.png" alt="slide">
				</div> 
			</div>
		</div>

		<!-- STATIC IMG IN PLACE OF HOME SLIDER -->
		<!-- <div class="gamut-defined-wrapper bg-i h-slider-pic" style="background-image: url('<?php bloginfo('url'); ?>/img/gamut_slide4.png');"></div> -->

		<!-- DEFINED -->
		<div class="clearfix gamut-defined-wrapper bg-i defined-pic" style="background-image: url('<?php echo $bg_img['url'] ?>');">
			<div class="home-wrap">
				<h1><?php echo $gamut_defined_title ?></h1>
				<div style="margin-left: 9%"><?php echo $gamut_defined_content ?></div>
			</div>
		</div>

		<!-- OUR SOLUTIONS -->
		<div class="clearfix our-solutions-wrapper our-sol-pic">
			<div class="home-wrap white">
				<h1><?php echo $our_solutions_title ?></h1>
				<div style="margin-left: 9%"><?php echo $our_solutions_content ?></div>
			</div>
		</div>

		<!-- Business Units -->
		<div class="business-units-container">
			<!-- Programmatic -->
					<div class="subpage-wrapper clearfix">
						<div class="p-holder">
							<p class="p"><?php echo $programmatic_intro_content; ?></p>
						</div>
						<div class="half blue">
							<a href="#" class="gamut-btn abs-center">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
						</div>
						<div class="half red">
							<img id="pro-logo" src="<?php bloginfo('url'); ?>/img/home-logos/programmatic-logo.png" alt="programmatic">
							<div id="fly-it" class="bg-img programmatic"></div>
						</div>
					</div>



					<!-- Reps -->
					<div class="subpage-wrapper clearfix">
						<div class="p-holder">
							<p class="p"><?php echo $reps_intro_content; ?></p>
						</div>
						<div class="half blue">
							<a href="#" class="gamut-btn abs-center">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
						</div>
						<div class="half red">
							<img id="rep-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reps-logo.png" alt="reps">
							<div id="fly-it-2" class="bg-img reps"></div>
						</div>
					</div>



					<!-- Reach -->
					<div class="subpage-wrapper clearfix">
						<div class="p-holder">
							<p class="p"><?php echo $reach_intro_content; ?></p>
						</div>
						<div class="half blue">
							<a href="#" class="gamut-btn abs-center">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
						</div>
						<div class="half red">
							<img id="reach-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reach-logo.png" alt="reach">
							<div id="fly-it-3" class="bg-img reach"></div>
						</div>
					</div>


					<!-- Cross Media -->
					<div class="subpage-wrapper clearfix">
						<div class="p-holder">
							<p class="p"><?php echo $convergence_intro_content; ?></p>
						</div>
						<div class="half blue">
							<a href="#" class="gamut-btn abs-center">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
						</div>
						<div class="half red">
							<img id="crossmedia-logo" src="<?php bloginfo('url'); ?>/img/home-logos/crossmedia-logo.png" alt="crossmedia">
							<div id="fly-it-4" class="bg-img crossmedia"></div>
						</div>
					</div>
				</div>
		<!-- </div> -->

		<!-- Gamut Difference -->
		<div class="our-solutions-wrapper grey-bg-box">
			<div class="home-wrap white">
				<h1><?php echo $gamut_difference_title ?></h1>
				<div class="difference"><?php echo $gamut_difference_content ?></div>
				<a href="#" class="gamut-btn diff">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
			</div>
		</div>
			
		<!-- Smart Service -->
		<div class="smart-service-wrapper">
			<!-- image container -->
			<div class="smart-pic" style="background-image:url('<?php echo $careers_image['url'];?>');"></div>
			<div class="smart-copy">
				<img src="<?php bloginfo('url'); ?>/img/plus-sign.png" style="display: inline-block; width: 30px; height: 30px; vertical-align: middle; margin-right: 10px" alt="plus">
				<h1 style="display: inline-block;"> <?php echo $smart_service_title ?></h1>
				<?php echo $smart_service_content ?>
			</div>
		</div>

		<div style="clear: both"></div>

		<!-- Careers -->
		<div class="clearfix careers-wrapper" style="background-color: #f8f8ef">
			<div class="career-copy-c">
				<h1><?php echo $careers_title ?></h1>
				<?php echo $careers_content ?>
			</div>
			<!-- image container -->
			<div class="career-pic-c bg-i" style="background-image:url('<?php echo $smart_service_image['url'];?>');"></div>
		</div>
			
	</section>
</article>