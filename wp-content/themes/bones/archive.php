<?php get_header(); ?>

			<div id="content" class="fixed-header-bg">

				<?php 

					// GET IMAGE BASED ON CAT-CORRESPONDING PAGE
					$cat_id;
					$single_cat_title = single_cat_title( '', false );

					if($single_cat_title == 'In the Media') {
						$cat_id = 874;
					} elseif($single_cat_title == 'Events') {
						$cat_id = 298;
					} elseif($single_cat_title == 'Press Releases') {
						$cat_id = 65;
					} else {
						$cat_id = 874;
					}

					$cat_page = get_post($cat_id);
					$postid = $cat_page->ID;

					$header_image = get_post_meta($postid, 'header-image', true);
					$sub_page_content = get_post_meta($postid, 'sub-page-content', true);
					$category_id = get_post_meta($postid, 'category_id', true);

					
					$header_image = wp_get_attachment_image_src( $header_image, 'full' );
					$cat_title = get_cat_name( $category_id );

					wp_reset_query();
				?>

				<header class="clearfix article-header">
					<div class="page-header" style="background-image: url('<?php echo $header_image[0] ?>')"></div>					
				</header>

				<div class="wrap-wrap cf">

					<div id="inner-content" class="wrap cf">

						<div id="sidebar1" class="sidebar m-all t-1of3 cf d-2of7" role="complementary">
							<div id="sidebar-beam-container">
								<div id="sidebar-beam" style="background-image: url(<?php bloginfo('url'); ?>/img/sidebar-beam.png);"></div>
							</div>

							<h2 id="sidebar-title"><a href="<?php echo get_category_link( $category_id ); ?>"><?php single_cat_title(); ?></a></h2>

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
							echo '<ul id="cat-menu" class="secondary">';
								wp_list_categories($args);
							echo '</ul>';

							?>
						</div>

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

							<div class="sub-page-content-wrapper">
							
							<?php 
								if(!empty($category_id)){
									query_posts( "cat=".$category_id );
								}
			
								echo '<h1>'.$cat_title.'</h1>';
							?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article class="news-post-wrapper" id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

									<section class="entry-content cf news-post-inner" itemprop="articleBody">

											<h1 class="post-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
											<p class="byline vcard">
												<?php printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format'))); ?>
											</p>

											<p><?php the_excerpt()?></p>

											<?php
												// IF HAS POST THUMBMIAL, PRINT POST THUMBNAIL, ELSE PRINT FPo 
												if ( has_post_thumbnail() ) {
													$img_id = get_post_thumbnail_id();
													$size = 'feat-excerpt';
													$src = wp_get_attachment_image_src( $img_id, $size );
													echo '<div class="feat-img-holder cf">';
														echo '<img src="'. $src[0] .'" class="feat-img-fpo">';
													echo '</div>';
												} else {
													// FEAT IMG FPO
													echo '<div class="feat-img-holder cf">
														<img src="'. get_bloginfo('url') .'/img/fpo.png" class="feat-img-fpo">
													</div>';
												}
											?>
											<?php 

											wp_link_pages( array(
												'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
												'after'       => '</div>',
												'link_before' => '<span>',
												'link_after'  => '</span>',
											) );
										?>
									</section>

								</article>

								<?php endwhile; else: ?>
									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h3 class="no-found-msg">No news has been posted.</h3>
										</header>
					
									</article> 
								<?php endif;  ?>

							</div> 
							<!-- end of content wrapper with formatting -->
						</div>

					</div>

				</div>

			</div>


<?php get_footer(); ?>
