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
			<div class="subpage-wrapper clearfix">
				<div class="p-holder">
					<p class="p"><?php echo $programmatic_intro_content ?></p>
				</div>

				<div class="half blue">
					<a href="#" class="gamut-btn abs-center">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
				</div>
				<div class="half red">
					<img id="pro-logo" class="pro-logo abs-center" src="<?php bloginfo('url'); ?>/img/home-logos/programmatic-logo.png">
					<div id="fly-it" class="bg-img programmatic"></div>
				</div>
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
			<div class="bg-half" style="background-image:url('<?php echo $smart_service_image['url'] ?>');"></div>
			<div class="home-wrap">
				<h1><?php echo $gamut_defined_title ?></h1>
				<div style="margin-left: 10%"><?php echo $smart_service_content ?></div>
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
			<div class="bg-half pull-right" style="background-image:url('<?php echo $careers_image['url'] ?>');"></div>
		</div>
			
	</section>
</article>