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

					wp_nav_menu( $defaults ); ?>

				</div>

				<div id="inner-content" class="wrap cf">





					<div id="main" class="news-content-wrapper cf" role="main">



						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<!-- Media logo -->
<!-- 							<?php $media_logo = get_field('media_logo');

							if( !empty($media_logo) ): ?>

								<img src="<?php echo $media_logo['url']; ?>" />

							<?php endif; ?> -->

							<?php
								/*
								 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
								 *
								 * So this function will bting in the needed template file depending on what the post
								 * format is. The different post formats are located in the post-formats folder.
								 *
								 *
								 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
								 * A SPECIFIC POST FORMAT.
								 *
								 * If you want to remove post formats, just delete the post-formats folder and
								 * replace the function below with the contents of the "format.php" file.
								*/
								get_template_part( 'post-formats/format', get_post_format() );

							?>

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
