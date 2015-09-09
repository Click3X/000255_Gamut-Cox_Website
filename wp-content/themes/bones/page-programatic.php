<?php 
 /* 

Template Name: Programmatic

 */

get_header();

?>

<div id="content" class="fixed-header-bg">
	
<?php

	$header = get_field('header');
	$main_sub_title = get_field('main-sub-title');
	$main_first_p = get_field('main-first-p');
	$main_p = get_field('main-p');

	$lower_sub_title = get_field('lower-sub-title');
	$lower_sub_title2 = get_field('lower-sub-title2');
	$lower_sub_title2_caption = get_field('lower-sub-title2-caption');

?>
	<header class="article-header">
		<div class="page-header" style="background-image: url('<?php echo $header['url'] ?>')"></div>
	</header>

	<div class="wrap-wrap cf">

	<div id="inner-content" class="wrap cf">

		<div id="sidebar1" class="sidebar m-all t-1of3 cf d-2of7" role="complementary">
			<div id="sidebar-beam-container">
				<div id="sidebar-beam" style="background-image: url(<?php bloginfo('url'); ?>/img/sidebar-beam.png);"></div>
			</div>
			<?php 
				$parent = array_reverse(get_post_ancestors($post->ID));
				$first_parent = get_page($parent[0]);
				$parent_title = $first_parent->post_title;

				$sidebar_intro = get_field('sidebar-intro');
			?>
			<h2 id="sidebar-title"><a href="<?php echo get_permalink(184); ?>"><?php echo $parent_title; ?></a></h2>

			<?php $defaults = array(
				'theme_location'  => '',
				'menu'            => 'Our Solutions',
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

			<?php if ($sidebar_intro) :?>
			<div id="sidebar-intro" class="sidebar-intro"><?php echo $sidebar_intro; ?></div>
			<?php endif; ?>	
		</div>	


				

		<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

			<section class="entry-content cf" itemprop="articleBody">

					<div class="sub-page-content-wrapper">
						<!-- different pages different logos -->
						<?php 
							// // PAGE LOGOS
							// if (is_page(11)) { 
							// 	echo '<img src="'.get_bloginfo('url').'/img/our-solutions/pro-logo.png">';
							// } elseif (is_page(15)) {
							// 	echo '<img src="'.get_bloginfo('url').'/img/our-solutions/rep-logo.png">';
							// } elseif (is_page(24)) {
							// 	echo '<img src="'.get_bloginfo('url').'/img/our-solutions/rea-logo.png">';
							// } elseif (is_page(13)) {
							// 	echo '<img src="'.get_bloginfo('url').'/img/our-solutions/cro-logo.png">';
							// }

							// TAKE OUT PAGE LOGOS AND REPLACE WITH TITLE TEXT
							
							// OVERRIDE PAGE TITLE IF TITLE OVERRIDE FIELD IS NOT EMPTY
							// echo '<h1>'.get_the_title().'</h1>';
							titleOverride();
						?>
						<!-- <p class="first-p"></p> -->
							<div class="main-p-first-wrap">
								<?php echo $main_first_p; ?>
							</div>
							<?php echo $main_p; ?>

						<!-- if statements -->
						<!-- adding lower part on 4 product pages -->
						<div class="lower-content">
						<?php //if (is_page(11)) { 
							if(get_field('three-column-content')): ?>

							<div class="lower-columns">

								<h2><?php echo $lower_sub_title; ?></h2>
								
								<ul>

								<?php while(has_sub_field('three-column-content')): ?>

									<li>
									<!-- different pages different colors -->
									<?php if (is_page(11)) { ?>
										<h3 class="pro-color"><?php the_sub_field('column-title'); ?></h3>
									<?php } elseif (is_page(15)) { ?>
										<h3 class="rep-color"><?php the_sub_field('column-title'); ?></h3>
									<?php } elseif (is_page(24)) { ?>
										<h3 class="rea-color"><?php the_sub_field('column-title'); ?></h3>
									<?php } elseif (is_page(13)) { ?>
										<h3 class="cro-color"><?php the_sub_field('column-title'); ?></h3>
									<?php } else  { ?>
										<h3><?php the_sub_field('column-title'); ?></h3>
									<?php } ?>
										<p><?php the_sub_field('column-content'); ?></p>
									</li>

								<?php endwhile; ?>

								</ul>

							</div>

							<?php endif; 

							if (get_field('three-column-contact')):  ?>

								<div class="lower-contact">
									<!-- different pages different colors -->
									<?php if (is_page(15)) { ?>
										<span class="rep-color"><?php echo $lower_sub_title2; //this is already wrapped with h2 tag backend?></span>
									<?php } elseif (is_page(24)) { ?>
										<span class="rea-color"><?php echo $lower_sub_title2; //this is already wrapped with h2 tag backend?></span>
									<?php } elseif (is_page(13)) { ?>
										<span class="cro-color"><?php echo $lower_sub_title2; //this is already wrapped with h2 tag backend?></span>
									<?php } ?>
									 
									<h4><?php echo $lower_sub_title2_caption; ?></h4>

									<ul>

									<?php while(has_sub_field('three-column-contact')): ?>

										<li>

											<!-- different pages different colors -->
											<?php if (is_page(11)) { ?>
												<h3 class="pro-color"><?php the_sub_field('column-department'); ?></h3>
											<?php } elseif (is_page(15)) { ?>
												<h3 class="rep-color"><?php the_sub_field('column-department'); ?></h3>
											<?php } elseif (is_page(24)) { ?>
												<h3 class="rea-color"><?php the_sub_field('column-department'); ?></h3>
											<?php } elseif (is_page(13)) { ?>
												<h3 class="cro-color"><?php the_sub_field('column-department'); ?></h3>
											<?php } ?>

											<?php the_sub_field('column-person'); ?>
										</li>

									<?php endwhile; ?>

									</ul>

								</div>

							<?php endif; ?>

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

</div>

<?php get_footer(); ?>