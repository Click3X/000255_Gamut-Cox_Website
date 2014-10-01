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
			<!-- <div class="page-header" style="background-image: url('<?php echo $header_image['url'] ?>')"></div> -->
			<div id="page-header-<?php echo get_queried_object_id(); ?>" class="page-header"></div>
		</header>

		<div class="wrap-wrap cf">

			<div id="inner-content" class="wrap cf">

				<?php get_sidebar(); ?>

				<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<section class="entry-content cf" itemprop="articleBody">

							<div class="sub-page-content-wrapper" style="">
								<?php echo $sub_page_title 
								// in back-end the title is wrapped with <h1> already
								?> 
								<div>
									<!-- in back-end the title is wrapped with <p> already -->
									<?php echo $sub_page_content ?>
								</div>
							</div>


							<!-- if statements -->
							<!-- adding content on Our Solutions page -->
							<?php if (is_page(184)) { ?>

							<div class="our-solutions-list-wrapper">
							   
							   <div class="our-solutions-list">
							   		<a href="<?php echo get_permalink(11); ?>">
								   		<img src="<?php bloginfo('url'); ?>/img/our-solutions/pro-logo.png">
								   	</a>
								   <!-- 	<h2 class="pro-color"><?php echo $pro_caption ?></h2> -->
							   </div>

							   <div class="our-solutions-list">
							   		<a href="<?php echo get_permalink(15); ?>">
								   		<img src="<?php bloginfo('url'); ?>/img/our-solutions/rep-logo.png">
								   	</a>
								   	<!-- <h2 class="rep-color"><?php echo $rep_caption ?></h2> -->
							   </div>

							   <div class="our-solutions-list">
							   		<a href="<?php echo get_permalink(24); ?>">
								   		<img class="logo-smaller" src="<?php bloginfo('url'); ?>/img/our-solutions/rea-logo.png">
								   	</a>
								   <!-- 	<h2 class="rea-color"><?php echo $rea_caption ?></h2> -->
							   </div>

							   <div class="our-solutions-list">
							   		<a href="<?php echo get_permalink(13); ?>">
								   		<img class="logo-smaller" src="<?php bloginfo('url'); ?>/img/our-solutions/cro-logo.png">
								   	</a>
								   	<!-- <h2 class="cro-color"><?php echo $cro_caption ?></h2> -->
							   </div>

							 </div>


							<?php } ?>

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
