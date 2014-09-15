<?php 
 /* 

Template Name: Programmatic

 */




get_header(); ?>



			<div id="content">
			<?php
				$header = get_field('header');
				$main_sub_title = get_field('main-sub-title');
				$main_first_p = get_field('main-first-p');
				$main_p = get_field('main-p');

				$lower_sub_title = get_field('lower-sub-title');
				

			?>
				<header class="article-header">
					<div class="page-header" style="background-image: url('<?php echo $header['url'] ?>')"></div>
				</header>

				<div id="inner-content" class="wrap cf">

					<?php get_sidebar(); ?>						

					<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

						

								<section class="entry-content cf" itemprop="articleBody">


									<div class="sub-page-content-wrapper">
										<?php echo $main_sub_title 
										// in back-end the title is wrapped with <h1> already
										?> 
										<div>
											<!-- in back-end the title is wrapped with <p> already -->

											<?php 

											echo $main_first_p;
											echo $main_p;

											?>

											

										</div>


									<!-- if statements -->
									<!-- adding lower part on 4 product pages -->
									<div class="lower-content">
									<?php if (is_page(11)) { 
										if(get_field('three-column-content')): ?>

										<div class="lower-columns">

											<h2><?php echo $lower_sub_title; ?></h2>
											

											<ul>

											<?php while(has_sub_field('three-column-content')): ?>

												<li>
													<h3><?php the_sub_field('column-title'); ?></h3>
													<p><?php the_sub_field('column-content'); ?></p>
												</li>

											<?php endwhile; ?>

											</ul>

										</div>

										<?php endif; 

										if (get_field('three-column-contact')):  ?>

											<!-- <h2><?php echo $lower_sub_title; ?></h2> -->
											

											<ul class="lower-contact">

											<?php while(has_sub_field('three-column-contact')): ?>

												<li>
													<h3><?php the_sub_field('column-department'); ?></h3>
													<p><?php the_sub_field('column-person'); ?></p>
												</li>

											<?php endwhile; ?>

											</ul>

										<?php endif; ?>



											<?php } elseif (is_page(8)) { ?>
											   <!-- <image src="<?php bloginfo('stylesheet_directory'); ?>/images/imagename.jpg" /> -->
											<?php } elseif (in_category( '5' )) { ?>
											   <!-- <image src="<?php bloginfo('stylesheet_directory'); ?>/images/imagename.jpg" /> -->
											<?php } ?>

									</div> 
									<!-- end of lower content -->




									</div>
									<!-- end of content wrapper -->


									

									<?php

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

								<footer class="article-footer cf">

								</footer>

								


						</div>

						

				</div>

			</div>

<?php get_footer(); ?>
