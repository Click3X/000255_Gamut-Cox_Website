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

				<section class="clearfix contact-container division-list">
					<?php			
						//get all categories then display all posts in each term
						//get all categories then display all posts in each term
						$taxonomy = 'division';
						$term_args=array(
						  'orderby' => 'name',
						  'order' => 'ASC'
						);
						$terms = get_terms($taxonomy,$term_args);
						if ($terms) {
						  foreach( $terms as $term ) {
						    $args=array(
						      'post_type' => 'team_members',
						      'post_status' => 'publish',
						      'posts_per_page' => -1,
						      'caller_get_posts'=> 1,
							  'tax_query' => array(
									array(
										'taxonomy' => 'division',
										'terms' => array($term->term_id),
										'include_children' => true,
										'operator' => 'IN'
									)
								)
						      );
						    $my_query = null;
						    $my_query = new WP_Query($args);
						    if( $my_query->have_posts() ) { ?>
						      <div class="category section">
							    <h2 class="division-title gothic"><?php echo $term->name;?></h2>
							    

							    <?php
						      while ($my_query->have_posts()) : $my_query->the_post(); 
						       // helper($my_query); 
						      	$title = get_field('title'); 
						       	$email = get_field('email'); 
						       	$telephone = get_field('telephone'); 
						       ?>
						       <ul class="team-member">
							        <li class="address"><h3 class="gothic"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></li>
							        <li class="emp-title"><?php echo $title; ?></li>
							        <li class="email"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
							        <li class="telephone"><a href="tel:<?php echo $telephone; ?>"></a><?php echo $telephone; ?></li>
						        </ul>
						       <?php
						      endwhile;
						      ?>
						      
						      </div>
						 <?php
						    }
						  }
						}
						wp_reset_query();  // Restore global post data stomped by the_post().
						?>
				</section>

			</article>

		</div>

	</div>

</div>

<?php get_footer(); ?>