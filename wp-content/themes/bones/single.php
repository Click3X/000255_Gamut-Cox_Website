<?php get_header(); 

$cat_id = "";
$pre_cat = "";
$next_cat = "";

?>

			<div id="content">

				<div class="wrap-wrap cf">

					<div id="inner-content" class="wrap cf">

						<div id="sidebar1" class="sidebar m-all t-1of3 cf d-2of7" role="complementary">
							<div id="sidebar-beam-container">
								<div id="sidebar-beam" style="background-image: url(<?php bloginfo('url'); ?>/img/sidebar-beam.png);"></div>
							</div>

							<?php 
								// PRINT POST CATEGORY (BUT NOT FEATURED CAT)
								printCatTitle();
							?>

							<?php 

							$args = array(
								'show_option_all'    => '',
								'orderby'            => 'name',
								'order'              => 'ASC',
								'style'              => 'list',
								'show_count'         => 0,
								'hide_empty'         => 1,
								'use_desc_for_title' => 1,
								'child_of'           => 0,
								'feed'               => '',
								'feed_type'          => '',
								'feed_image'         => '',
								'exclude'            => array(1, 31),
								'exclude_tree'       => '',
								'include'            => '',
								'hierarchical'       => 1,
								'title_li'           => __( '' ),
								'show_option_none'   => __( '' ),
								'number'             => null,
								'echo'               => 1,
								'depth'              => 0,
								'current_category'   => 0,
								'pad_counts'         => 0,
								'taxonomy'           => 'category',
								'walker'             => null
							);

							// wp_nav_menu( $defaults ); 
							// echo '<ul id="cat-menu" class="secondary">';
							// 	wp_list_categories($args);
							// echo '</ul>';

							$defaults = array(
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

							?>
						</div>

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

							<div class="sub-page-content-wrapper">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				                <!-- ADDING IN NEW REQUESTED NEXT/PREV POST ARROWS -->

				                <div class="gamut-navigation cf">
				                	 <?php 
				                	 	// FEATURED IS ID 31
				                	 	// $exes = array(31);
				                	 	$exes = '';
				                	 	// GET CURRENT CAT, NOT FEATURED
				                	 	foreach((get_the_category()) as $category) {
											if ($category->category_parent == 0) {
												if($category->term_id != 31) {
													$cat_id = $category->term_id;	
												}
											}
										}

				                	 	// PREVIOUS CAT
				                	 	$prev_post = get_adjacent_post( true, $exes, true); 
				                	 	foreach((get_the_category($prev_post->ID)) as $category) {
											if ($category->category_parent == 0) {
												if($category->term_id != 31) {
													$pre_cat = $category->term_id;	
												}
											}
										}

										// NEXT CAT
										$next_post = get_adjacent_post( true, $exes, false); 
										foreach((get_the_category($next_post->ID)) as $category) {
											if ($category->category_parent == 0) {
												if($category->term_id != 31) {
													$next_cat = $category->term_id;	
												}
											}
										}

				                		if ( (is_a( $prev_post, 'WP_Post' )) && ($pre_cat == $cat_id) ) { ?>
									 		<a href="<?php echo get_permalink( $prev_post->ID ); ?>" rel="prev">&laquo; Previous Post</a>
									 <?php } 

									 	if ( (is_a( $next_post, 'WP_Post' )) && ($next_cat == $cat_id) ) { ?>
									 		<a href="<?php echo get_permalink( $next_post->ID ); ?>" rel="next">Next Post &raquo;</a>
									 <?php } ?>
								
				                </div>

				                <header class="article-header">

				                  <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

				                  <h2 class="entry-subtitle"><?php the_field('title'); ?></h2>

				                  	<?php 
				                		// PRINT CUSTOM ICONS FROM ADD TO ANY
				                		printCustomIcons();
				                	?>

				                </header> <?php // end article header ?>

				                <section class="entry-content cf" itemprop="articleBody">
						                  
						                  <?php
						                    // GET FEATURED IMAGE
						                    // $size = 'thumb';
						                  	$size = 'full';
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
							<!-- end of content wrapper with formatting -->
						</div>

					</div>

				</div>

			</div>

<?php get_footer(); ?>