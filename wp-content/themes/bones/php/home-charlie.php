<!-- START CHARLES PARALLAX -->
<div class="debug">
	<label><input type="checkbox"> Debug</label>
</div>

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
		</div>
	</div>

		<div id="content-wrapper">
			<div id="examples-1">
				<!-- <h2 id="fly-it">Fly It</h2> -->
				<div id="fly-it"><img src="<?php bloginfo('url');?>/img/home-beams/crossmedia-beam.png"></div>

			</div>
		</div>


	<div id="group3" class="parallax__group">
		<div class="parallax__layer parallax__layer--fore">
			<!-- <div class="title">Foreground Layer</div> -->
		</div>
		<div class="parallax__layer parallax__layer--base">
			<!-- <div class="title">Base Layer</div> -->
			<div class="home-wrap white">
				<h1><?php echo $our_solutions_title ?></h1>
				<div style="margin-left: 10%"><?php echo $our_solutions_content ?></div>
			</div>
		</div>
	</div>
	

	<!-- BUSINESS UNITS -->
	<div id="group4" class="parallax__group">
		<div class="parallax__layer parallax__layer--base">
			<!-- <div class="title">Base Layer</div> -->
			<!-- Programmatic -->
			<div class="programmatic-intro-wrapper biz-content-wrapper">
				<p><?php echo $programmatic_intro_content ?></p>
				<a href="#">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #dd1420;"></span></a>
				<div style="display: inline-block; height: 1.5em" class="biz-logo-container"><img id="pro-logo" src="<?php bloginfo('url'); ?>/img/home-logos/programmatic-logo.png"></div>
				<div class="beam-holder">
					<!-- <div id="fly-it" class="home-beam-container"></div> -->
				</div>
			</div> 

			<div class="reps-intro-wrapper biz-content-wrapper">
				<p><?php echo $reps_intro_content ?></p>
				<a href="#">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #039fd3;"></span></a>
				<div style="display: inline-block; height: 1.5em" class="biz-logo-container"><img id="rep-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reps-logo.png"></div>
				<div class="beam-holder">
					<div class="home-beam-container"></div>
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
	

	<div id="group5" class="parallax__group">
		<div class="parallax__layer parallax__layer--fore">
			<div class="title">Foreground Layer</div>
		</div>
		<div class="parallax__layer parallax__layer--base">
			<!-- <div class="title">Base Layer</div> -->
			<!-- Reps -->
		<!-- 	<div class="reps-intro-wrapper biz-content-wrapper">
				<p><?php echo $reps_intro_content ?></p>
				<a href="#">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #039fd3;"></span></a>
				<div style="display: inline-block; height: 1.5em" class="biz-logo-container"><img id="rep-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reps-logo.png"></div>
				<div class="home-beam-container"><div class="home-beam"></div></div>
			</div> -->
		</div>
	</div>

	
	<div id="group6" class="parallax__group">
		<div class="parallax__layer parallax__layer--back">
			<div class="title">Background Layer</div>
		</div>
		<div class="parallax__layer parallax__layer--base">
			<!-- <div class="title"> -->Base Layer</div>
			<!-- Reach -->
			<div class="reach-intro-wrapper biz-content-wrapper">
		<!-- 		<p><?php echo $reach_intro_content ?></p>
				<a href="#">LEARN MORE &nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #8134d9;"></span></a>
				<div style="display: inline-block; height: 1.2em;" class="biz-logo-container"><img id="rea-logo" src="<?php bloginfo('url'); ?>/img/home-logos/reach-logo.png"></div>
				<div class="home-beam-container"><div class="home-beam"></div></div>
			</div> -->

		</div>
	</div>
	
	<div id="group7" class="parallax__group">
		<div class="parallax__layer parallax__layer--base">
			<!-- <div class="title">Base Layer</div> -->
			<!-- CrossMedia -->
			<!-- <div class="crossmedia-intro-wrapper biz-content-wrapper">
				<p><?php echo $convergence_intro_content ?></p>
				<a href="#">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 6px solid #f87f13;"></span></a>
				<div style="display: inline-block; height: 1.2em;" class="biz-logo-container"><img id="cro-logo" src="<?php bloginfo('url'); ?>/img/home-logos/crossmedia-logo.png"></div>
				<div class="home-beam-container"><div class="home-beam"></div></div>
			</div> -->
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