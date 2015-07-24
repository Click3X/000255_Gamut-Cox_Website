<?php
/*
 Template Name: News Category
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
 * THIS PAGE IS BASED OF 'News' TEMPLATE
*/
?>

<?php get_header(); ?>

			<div id="content" class="fixed-header-bg">

			<?php 
				$header_image = get_field('header-image');
				$sub_page_content = get_field('sub-page-content');
				$category_id = get_field("category_id");
			?>

				<header class="clearfix article-header">
					<div class="page-header" style="background-image: url('<?php echo $header_image['url'] ?>')"></div>					
				</header>

				<div class="wrap-wrap cf">

					<div id="inner-content" class="wrap cf">

						<div id="sidebar1" class="sidebar m-all t-1of3 cf d-2of7" role="complementary">
							<div id="sidebar-beam-container">
								<div id="sidebar-beam" style="background-image: url(<?php bloginfo('url'); ?>/img/sidebar-beam.png);"></div>
							</div>
							<?php 
								$parent = array_reverse(get_post_ancestors($post->ID));
								$first_parent = get_page($parent);
								$parent_title = $first_parent->post_title;
							?>
							<h2 id="sidebar-title"><a href="<?php echo get_permalink($first_parent->ID); ?>"><?php echo $parent_title; ?></a></h2>

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

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

							<div class="sub-page-content-wrapper">
								<?php
									// GET PAGE VARS FOR LATER USE
									$wp_pages = get_pages();
								?>

								<?php 
									// OVERRIDE PAGE TITLE IF TITLE OVERRIDE FIELD IS NOT EMPTY
									// echo '<h1>'.get_the_title().'</h1>';
									titleOverride();
								?>

								<?php
									// ORDER POSTS BY CATEGORY - MOST RECENTLY UPDATED
									$cat_array = array();
									$args=array(
									  'post_type' => 'post',
									  'post_status' => 'publish',
									  'posts_per_page' => -1
									  );
									$my_query = null;

									$feat_id = 31;

									$my_query = new WP_Query($args);
										if( $my_query->have_posts() ) {
										  while ($my_query->have_posts()) : $my_query->the_post();
										    $cat_args=array('orderby' => 'none');
										    $cats = wp_get_post_terms( $post->ID , 'category', $cat_args);
										    foreach($cats as $cat) {
										      $cat_array[$cat->term_id] = $cat->term_id;
										    }
										  endwhile;
										}

										if ($cat_array) {
										  foreach($cat_array as $cat)  {	  

										    $category = get_term_by('ID',$cat, 'category');
											if ( $category->name != 'Uncategorized' && $category->name != 'Featured'){

										    	// START POSTS
										    	$args=array(
													'orderby' => 'date',
													'order' => 'DESC',
													'showposts' => -1,
													'category__and' => array( $feat_id, $cat )
												);
												
												$posts=get_posts($args);
												if ($posts) {

													// GET PAGE THAT CORRESPONDS WITH THE SAME CATEGORY NAME
													foreach ($wp_pages as $key => $wp_page) {
														if($category->name == $wp_page->post_title) {
															echo '<h2 class="gamut-cat-title"><a href="'.get_the_permalink($wp_page->ID).'">' . $category->name . '</a></h2> ';
														}
													}

													foreach($posts as $post) {
														setup_postdata($post); ?>

														<!-- // POS DATA GOES HERE -->
														<article class="news-post-wrapper" id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
															<section class="entry-content cf news-post-inner" itemprop="articleBody">
																	<h1 class="post-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

																	<p><?php the_excerpt(); ?></p>

																	<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
																		$post_thumbnail_id = get_post_thumbnail_id();
																	    $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );										 
																	?>
																		<div class="post-image">
																		    <img title="image title" alt="thumb image" class="wp-post-image" src="<?php echo $post_thumbnail_url; ?>" style="width:100%; height:auto;">
																		</div>
																	<?php } ?>

																	<?php 
												                		// PRINT CUSTOM ICONS FROM ADD TO ANY
												                		printCustomIcons();
												                	?>
															</section>
														</article>													
														<!-- END POST DATA -->
													<?php
													} // foreach($posts
												} // END POSTS
											}
										}
									}
									wp_reset_query();  // Restore global post data stomped by the_post().
								?>

								<div class="media-inquiry-info"><?php echo $sub_page_content; ?></div>

							</div><!-- end of content wrapper with formatting -->

						</div>

					</div>

				</div>

			</div>

<?php get_footer(); ?>