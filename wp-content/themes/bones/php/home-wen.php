<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<section class="entry-content cf" itemprop="articleBody">

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

		<!-- Business Units -->
		<div class="business-units-container">
			<!-- Programmatic -->
			<div class="programmatic-intro-wrapper biz-content-wrapper">
				<p><?php echo $programmatic_intro_content ?></p>
				<a href="#">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
				<div style="display: inline-block; height: 1.5em" class="biz-logo-container"><img id="pro-logo" src="<?php bloginfo('url'); ?>/img/home-logos/programmatic-logo.png"></div>
				<div class="home-beam-container"><div class="home-beam"></div></div>
			</div>

			<!-- Reps -->
			<div class="reps-intro-wrapper biz-content-wrapper">
				<p><?php echo $reps_intro_content ?></p>
				<a href="#">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #039fd3;"></span></a>
				<div style="display: inline-block; height: 1.5em" class="biz-logo-container"><img id="rep-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reps-logo.png"></div>
				<div class="home-beam-container"><div class="home-beam"></div></div>
			</div>

			<!-- Reach -->
			<div class="reach-intro-wrapper biz-content-wrapper">
				<p><?php echo $reach_intro_content ?></p>
				<a href="#">LEARN MORE &nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #8134d9;"></span></a>
				<div style="display: inline-block; height: 1.2em;" class="biz-logo-container"><img id="rea-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reach-logo.png"></div>
				<div class="home-beam-container"><div class="home-beam"></div></div>
			</div>

			<!-- CrossMedia -->
			<div class="crossmedia-intro-wrapper biz-content-wrapper">
				<p><?php echo $convergence_intro_content ?></p>
				<a href="#">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #f87f13;"></span></a>
				<div style="display: inline-block; height: 1.2em;" class="biz-logo-container"><img id="cro-logo" src="<?php bloginfo('url'); ?>/img/home-logos/crossmedia-logo.png"></div>
				<div class="home-beam-container"><div class="home-beam"></div></div>
			</div>
		</div>

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
			
	</section>
</article>