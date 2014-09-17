<?php 
 /* 

Template Name: Contact

 */

get_header(); ?>

			<div id="content">
			<?php
				$contact_title = get_field('contact-title');
				$locations_title = get_field('locations-title');
				// $main_first_p = get_field('main-first-p');
				// $main_p = get_field('main-p');

				// $lower_sub_title = get_field('lower-sub-title');
				// $lower_sub_title2 = get_field('lower-sub-title2');
				// $lower_sub_title2_caption = get_field('lower-sub-title2-caption');
				

			?>
				<header class="article-header">
					<?php echo do_shortcode('[wpgmza id="1"]'); ?>					
				</header>

				<div id="inner-content" class="wrap cf">					

					<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">						

						<section class="entry-content cf" itemprop="articleBody">

							<div class="contact-container">

								<div id="contact-beam-container">

									<div id="contact-beam" style="background-image: url(<?php bloginfo('url'); ?>/img/contact-beam.png);"></div>

								</div>

								<h2><?php echo $contact_title; ?></h2>
								<hr>
							
								<?php if(get_field('location-list')): ?>

										<h3 class="gothic"><?php echo $locations_title; ?></h3>
													
											<ul>

												<?php while(has_sub_field('location-list')): ?>

													<li>
														<h3 class="gothic"><?php the_sub_field('city'); ?></h3>
														<?php the_sub_field('address'); ?>
													</li>

												<?php endwhile; ?>

											</ul>

									

								<?php endif; ?>


								<!-- contact info list -->
								<!-- something here -->

							</div>
									

									<?

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
						</section> <?php // end article section ?>

								


					</div>

						

				</div>

			</div>

<?php get_footer(); ?>