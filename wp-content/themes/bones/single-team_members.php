<?php get_header(); ?>

			<div id="content">


				<div id="sidebar1" class="news-sidebar sidebar m-all cf <?php echo $sidebar_class; ?>" role="complementary">

					<div id="sidebar-beam-container">

						<div id="sidebar-beam" style="background-image: url(<?php bloginfo('url'); ?>/img/sidebar-beam.png);"></div>

					</div>

					<?php //$parent_title = get_the_title($post->post_parent); ?>

					<!-- go back to previous page -->					
					<a class="page-link" href="javascript:javascript:history.go(-1)"><h2 id="sidebar-title">Back</h2></a>
					

					

				</div>

				<div id="inner-content" class="wrap cf">



					<div id="main" class="news-content-wrapper cf" role="main">





						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


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
								get_template_part( 'post-formats/format-team_members', get_post_format() );
								
								
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
