<?php get_header(); 

$args = array(
	'post_type'=>'page',
	// 'post_type'=>'post',
	'page_id' => 163,
	// 'posts_per_page'=>-1
	);

$the_query = new WP_Query( $args );

?>

<!-- 			<div id="content">

				<div id="inner-content" class="wrap cf">

					<?php get_sidebar(); ?>

					<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

						<ul id="og-grid" class="og-grid">

						<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 

							$emp_title = get_field('title');
							$title = get_the_title();
							$content = get_the_content();

							$size = 'thumb';
							$full = 'large';
							$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID) , 'emp-thumb');
							$largeThumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID) , 'emp-large');
						?>

							<li id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<a href="<?php the_permalink(); ?>" data-largesrc="<?php echo $largeThumb[0]; ?>" data-title="<?php echo $title; ?>" data-description="<?php echo $content; ?>" data-etitle="<?php echo $emp_title; ?>">
								<?php echo '<a href="'.get_the_permalink().'">';
									echo '<img src="'.$thumb[0].'" alt="'.$title.'" class="grid-thumb">';
									echo '<h2 class="small-name gothic">'.$title.'</h2>';
									echo '<h3 class="small-title gothic">'.$emp_title.'</h3>';
									?>
								</a>
							</li>

							<?php endwhile; ?>

							<?php endif; ?>

						</ul>

					</div>

				</div>

			</div> -->

			<div id="content">
			<?php
				$header_image = get_field('header-image');
				$sub_page_title = get_field('sub-page-title');
				$sub_page_content = get_field('sub-page-content');

			?>
				<header class="article-header">
					<div class="page-header" style="background-image: url('<?php echo $header_image['url'] ?>')"></div>
				</header>

				<div id="inner-content" class="wrap cf">

						<?php get_sidebar(); ?>

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="entry-content cf" itemprop="articleBody">

									<div class="sub-page-content-wrapper">
										<?php echo $sub_page_title 
										// in back-end the title is wrapped with <h1> already
										?> 
										<div>
											<!-- in back-end the title is wrapped with <p> already -->
											<?php echo $sub_page_content ?>
										</div>
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
								</section> <?php // end article section ?>

								

							</article>

							<?php endwhile; else : ?>


							<?php endif; ?>

						</div>

						

				</div>

			</div>


<?php get_footer(); ?>