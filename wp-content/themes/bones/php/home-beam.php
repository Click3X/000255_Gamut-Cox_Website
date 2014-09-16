<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<section class="entry-content cf" itemprop="articleBody">

		<!-- START CHARLES PARALLAX -->
<!-- 		<div class="debug">
			<label><input type="checkbox"> Debug</label>
		</div> -->

		<div class="">

			<div>
				<div>
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
			

			<div class="gamut-defined-wrapper" style="position: relative; height: 400px; background-repeat: no-repeat; background-image: url('<?php echo $bg_img['url'] ?>'); background-size: cover;">
				<div class="home-wrap">
					<h1><?php echo $gamut_defined_title ?></h1>
					<div style="margin-left: 10%"><?php echo $gamut_defined_content ?></div>
				</div>
			</div>

			<div class="our-solutions-wrapper" style="position: relative; height: 400px; background-color: #3d3d3d">
				<div class="home-wrap white">
					<h1><?php echo $our_solutions_title ?></h1>
					<div style="margin-left: 10%"><?php echo $our_solutions_content ?></div>
				</div>
			</div>


			<!-- SUBPAGE CONTAINER -->
			<div id="" class="subpage-container clearfix ">
				<div class="">
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
							<a href="#" class="gamut-btn abs-center">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
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
							<a href="#" class="gamut-btn abs-center">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
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
							<a href="#" class="gamut-btn abs-center">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
						</div>
						<div class="half red">
							<img id="crossmedia-logo" src="<?php bloginfo('url'); ?>/img/home-logos/crossmedia-logo.png">
							<div id="fly-it-4" class="bg-img crossmedia"></div>
						</div>
					</div>
				</div>

			</div> <!-- END SUB PAGE CONTAINER -->


			<!-- Gamut Difference -->
			<div class="our-solutions-wrapper" style="position: relative; height: 400px; background-color: #3d3d3d">
				<div class="home-wrap white">
					<h1><?php echo $gamut_difference_title ?></h1>
					<div style="margin-left: 10%"><?php echo $gamut_difference_content ?></div>
				</div>
			</div>
				
			<!-- Smart Service -->
			<div class="smart-service-wrapper" style="height: 500px;">
				<!-- image container -->
				<div style="height: 0; width: 50%; padding-bottom: 40%; float: left; background-image:url('<?php echo $smart_service_image['url'] ?>'); background-size: cover; display: inline-block"></div>
				<div style="width: 450px; float: left; margin-left: 8%; padding-top: 10%;">
					<img src="<?php bloginfo('url'); ?>/img/plus-sign.png" style="display: inline-block; width: 30px; height: 30px; vertical-align: middle; margin-right: 10px"><h1 style="display: inline-block;"> <?php echo $smart_service_title ?></h1>
					<p style=""><?php echo $smart_service_content ?></p>
				</div>
			</div>

			<div style="clear: both"></div>

			<!-- Careers -->
			<div class="careers-wrapper" style="height: 500px; background-color: #f8f8ef">
				<div style="width: 450px; float: left; margin-left: 8%; padding-top: 10%;">
					<h1><?php echo $careers_title ?></h1>
					<p style=""><?php echo $careers_content ?></p>
				</div>
				<!-- image container -->
				<div style="height: 500px; width: 40%; float: right; background-image:url('<?php echo $careers_image['url'] ?>'); background-size: cover; display: inline-block"></div>
			</div>

		</div> <!--  END PARALLAX -->

	</section>
</article>