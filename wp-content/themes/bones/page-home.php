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

			<div id="content">

				<div id="inner-content" class="cf">

						<div id="main" class="m-all t-2of3 cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

<!-- 								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>

									<p class="byline vcard">
										<?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
									</p>


								</header> -->

								<section class="entry-content cf" itemprop="articleBody">

								<?php // layerslider(1) ?>


									<?php
										// the content (pretty self explanatory huh)
										// the_content();


									

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


										?>
											
											<div class="gamut-defined-wrapper" style="position: relative; height: 400px; background-repeat: no-repeat; background-image: url('<?php echo $bg_img['url'] ?>'); background-size: cover;">
												<div style="position: absolute; width: 60%; left:20%; top: 100px">
													<h1 ><?php echo $gamut_defined_title ?></h1>
													<div style="margin-left: 10%"><?php echo $gamut_defined_content ?></div>
												</div>
											</div>

											<div class="our-solutions-wrapper" style="position: relative; height: 400px; background-color: #3d3d3d">
												<div style="position: absolute; width: 60%; left:20%; top: 100px; color: #ffffff">
													<h1 ><?php echo $our_solutions_title ?></h1>
													<div style="margin-left: 10%"><?php echo $our_solutions_content ?></div>
												</div>
											</div>

											<!-- Business Units -->

										<div class="business-units-container">
											<div class="programmatic-intro-wrapper biz-content-wrapper">
												<p>
													<?php echo $programmatic_intro_content ?>
												</p>

												<a href="#">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 0.6em solid #dd1420;"></span></a>
												<div style="display: inline-block"><?php echo $programmatic_intro_title ?></div>
											</div>
											<div class="convergence-intro-wrapper biz-content-wrapper">
												<p>
													<?php echo $convergence_intro_content ?>
												</p>

												<a href="#">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 0.6em solid #f87f13;"></span></a>
												<div style="display: inline-block"><?php echo $convergence_intro_title ?></div>
											</div>
											<div class="reps-intro-wrapper biz-content-wrapper">
												<p>
													<?php echo $reps_intro_content ?>
												</p>

												<a href="#">LEARN MORE&nbsp;&nbsp;<span class="arrow-right" style="border-left: 0.6em solid #039fd3;"></span></a>
												<div style="display: inline-block"><?php echo $reps_intro_title ?></div>
											</div>
											<div class="reach-intro-wrapper biz-content-wrapper">
												<p>
													<?php echo $reach_intro_content ?>
												</p>

												<a href="#">LEARN MORE &nbsp;&nbsp;<span class="arrow-right" style="border-left: 0.6em solid #8134d9;"></span></a>
												<div style="display: inline-block"><?php echo $reach_intro_title ?></div>
											</div>

										</div>

										<!-- Gamut Difference -->
										<div class="our-solutions-wrapper" style="position: relative; height: 400px; background-color: #3d3d3d">
												<div style="position: absolute; width: 60%; left:20%; top: 100px; color: #ffffff">
													<h1 ><?php echo $gamut_difference_title ?></h1>
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
												<h1 ><?php echo $careers_title ?></h1>
												<p style=""><?php echo $careers_content ?></p>
											</div>
											<!-- image container -->
											<div style="height: 500px; width: 40%; float: right; background-image:url('<?php echo $careers_image['url'] ?>'); background-size: cover; display: inline-block"></div>
	
										</div>
										
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
								</section>


								<footer class="article-footer">

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer>



								

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>



				</div>

			</div>


<?php get_footer(); ?>
