<?php
/*
 Template Name: CHARLES PARALLAX
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

	<?php
		// 	GET CONTENT FROM HOME PAGE
		$args = array(
			'page_id'=>107
		);

		$the_query = new WP_Query( $args );

		if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 
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

			// NEW SLIDES FOR CAROUSEL <-CHARLES TRY
			$slides = get_field('slides');
			$images = array();

			foreach ($slides as $key => $slide) {
				$images[$key] = $slide['image'];
			}

			endwhile;

			endif;

			// CHECK FOR PHP BROWSER DETECTION PLUGIN - FOR IE	
			$myUrl = get_bloginfo('url');
			$path = $myUrl .'/wp-content/plugins/php-browser-detection/php-browser-detection.php';
			if ( is_plugin_active( $path ) ) {
				if( is_ie() ) {
					// IF IE - GET FILE WITH NO PARALLAX
					include('php/para-new-new-mobile.php'); 
				} else {
					// OTHERWISE GET PARALLAX FILE
					// include('php/para-kieth.php');
					include('php/charles-parallax.php');
					// echo '</div>';
				}
			} else {
				// IF THERE IS NO PLUGIN, JUST GET PARALLAX FILE
				// include('php/para-kieth.php');
				include('php/charles-parallax.php');
			}

			// include('php/charles-parallax.php');

		?>	

		</div> <!-- END CONTAINER -->

		<?php wp_footer(); ?>
		
		<script>
		// GOOGLE ANALYTICS SCRIPT FROM OLD WEBSITE
		 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-55177925-1', 'auto');
		  ga('send', 'pageview');
		</script>

	</body>
</html>