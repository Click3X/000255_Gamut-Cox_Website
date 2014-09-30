<?php 
 /* 

Template Name: Contact

 */

get_header(); 

if (have_posts()) : while (have_posts()) : the_post(); 

$header_image = get_field('header-image');
$contact_title = get_field('contact-title');
$locations_title = get_field('locations-title');
$header_image = get_field('header-image');

endwhile;

endif;
	
?>
<div id="content">

	<header class="clearfix article-header">
		<div id="map-canvas" class="clearfix page-header"></div>
	</header>

	<div id="inner-content" class="wrap cf">					

		<div id="main" class="m-all t-3of3 d-7of7 cf" role="main">						
			
			<article>
				
				<section class="entry-content cf" itemprop="articleBody">

					<div class="contact-container">

						<div id="contact-beam-container">

							<div id="contact-beam" style="background-image: url(<?php bloginfo('url'); ?>/img/contact-beam.png);"></div>

						</div>

						<h1 class="contact-title"><?php echo $contact_title; ?></h1>
						<hr>
					
						<?php if(get_field('location-list')): ?>

								<h3 class="gothic"><?php echo $locations_title; ?></h3>
											
									<ul>

										<?php while(has_sub_field('location-list')): ?>

											<li class="location">
												<h3 class="gothic"><?php the_sub_field('city'); ?></h3>
												<?php the_sub_field('address'); ?>
											</li>

										<?php endwhile; ?>

									</ul>

						<?php endif;

						wp_reset_postdata();

						// insert tabs first
						// insert contact forms
						echo do_shortcode('[tabby title="General"]

						[contact-form-7 id="284" title="General"]

						[tabby title="Advertisers"]

						[contact-form-7 id="285" title="Advertisers"]

						[tabby title="Publishers"]

						[contact-form-7 id="286" title="Publishers"]
						[tabbyending]');

							?>
				</section> <?php // end article section ?>

			</article>

		</div>

	</div>

</div>

<?php get_footer(); ?>