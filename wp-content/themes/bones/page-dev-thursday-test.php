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

<?php 
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

	// PARALLAX FILE
	// include('php/para-friday.php'); 

	// PARALLAX FILE
	include('php/para-tues.php'); 

?>	

<?php get_footer(); ?>