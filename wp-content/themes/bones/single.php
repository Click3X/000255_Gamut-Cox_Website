<?php get_header(); ?>

			<div id="content">

				<div id="sidebar1" class="news-sidebar sidebar m-all cf <?php echo $sidebar_class; ?>" role="complementary">

					<div id="sidebar-beam-container">
						<div id="sidebar-beam" style="background-image: url(<?php bloginfo('url'); ?>/img/sidebar-beam.png);"></div>
					</div>

					<?php $parentpage = get_page(63); ?>

					<a class="page-link" href="<?php echo get_page_link(63);?>"><h2 id="sidebar-title"><?php echo $parentpage->post_title; ?></h2></a>

					<?php $defaults = array(
						'theme_location'  => '',
						'menu'            => 'Watch & Read',
						'container'       => 'div',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'secondary',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
					);

					wp_nav_menu( $defaults ); 

					wp_reset_postdata();

					?>

				</div>

				<div id="inner-content" class="wrap cf">

					<div id="main" class="news-content-wrapper cf" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<h1>
									<?php
									$category = get_the_category(); 
									// echo $category[0]->cat_name;		
									?>
								</h1>

				                <!-- ADDING IN NEW REQUESTED NEXT/PREV POST ARROWS -->
				                <div class="gamut-navigation cf">
				                  <?php previous_post_link( '%link', 'previous post in category', true ); ?>
				                  <?php next_post_link( '%link', 'Next post in category', true ); ?>
				                </div>
				                

				                <header class="article-header">
				                	<!-- Go to www.addthis.com/dashboard to customize your tools -->
									<div class="addthis_sharing_toolbox"></div>

				                  <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

				                  <h2 class="entry-subtitle"><?php the_field('title'); ?></h2>

				                </header> <?php // end article header ?>

				                <section class="entry-content cf" itemprop="articleBody">
				                  
				                  <?php
				                    // GET TEAM MEMBER IMAGE (FEATURED IMAGE)
				                    $size = 'thumb';
				                    the_post_thumbnail( $size);

				                    // the content (pretty self explanatory huh)
				                    the_content(); 
				                  ?>

				                </section> <?php // end article section ?>

				                <footer class="article-footer">

				                </footer> <?php // end article footer ?>

				              </article> <?php // end article ?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</div>

				</div>

			</div>

<?php get_footer(); ?>