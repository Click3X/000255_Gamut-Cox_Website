<?php get_header(); ?>

			<div id="content" class="fixed-header-bg">
			<?php
				$header_image = get_field('header-image');
				$sub_page_title = get_field('sub-page-title');
				$sub_page_content = get_field('sub-page-content');
				$pro_caption = get_field('pro-caption');
				$rep_caption = get_field('rep-caption');
				$rea_caption = get_field('rea-caption');
				$cro_caption = get_field('cro-caption');

			?>
				<header class="article-header">
					<div class="page-header" style="background-image: url('<?php echo $header_image['url'] ?>')"></div>
				</header>

				<div class="wrap-wrap cf">

					<div id="inner-content" class="wrap cf">

						<?php if( is_page(1079)) : ?>

						<div id="sidebar1" class="sidebar m-all t-1of3 cf d-2of7" role="complementary">
							<div id="sidebar-beam-container">
								<div id="sidebar-beam" style="background-image: url(<?php bloginfo('url'); ?>/img/sidebar-beam.png);"></div>
							</div>
							
							<h2 id="sidebar-title">
								<?php $permalink = get_permalink($post->post_parent); ?>
								<a href="<?php echo $permalink; ?>">
									<?php 
									echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
									?>
								</a>
							</h2>
							

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

							wp_nav_menu( $defaults ); ?>
						</div>
						
						<?php else: ?>

						<?php get_sidebar(); ?>

						<?php endif; ?>

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="entry-content cf" itemprop="articleBody">

									<div class="sub-page-content-wrapper" style="">
										<?php 
											echo $sub_page_title 
											// in back-end the title is wrapped with <h1> already
										?> 
										
										<?php 
											if (is_page(1079)) { 
												// PRINT SOCIAL ICONS
												printCustomIcons();
											} 
										?>
										<div>
											<!-- in back-end the title is wrapped with <p> already -->
											<?php echo $sub_page_content ?>
										</div>
									</div>


			
								</section> <?php // end article section ?>

								<footer class="article-footer cf">

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
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>
						
					</div>						

				</div>

			</div>

<?php get_footer(); ?>
