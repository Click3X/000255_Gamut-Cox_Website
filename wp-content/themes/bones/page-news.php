<?php
/*
 Template Name: News
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content" class="fixed-header-bg">

			<?php 
				$header_image = get_field('header-image');
				$sub_page_content = get_field('sub-page-content');
				$category_id = get_field("category_id");
				$cat_title = get_cat_name( $category_id );
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
					
					<h2 id="sidebar-title">
						<?php $permalink = get_permalink($post->post_parent); ?>
						<a href="<?php echo $permalink; ?>">
							<?php 
							echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
							?>
						</a>
					</h2>


					<?php 

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

										<?php if ( has_post_thumbnail() ) { 
											// check if the post has a Post Thumbnail assigned to it.
											//the_post_thumbnail( 'news-post-thumbnail' );
											$post_thumbnail_id = get_post_thumbnail_id();
										    $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );										 
										?>
										<div class="post-image">
										    <img title="image title" alt="thumb image" class="wp-post-image" src="<?php echo $post_thumbnail_url; ?>" style="width:100%; height:auto;">
										</div>
										<?php } ?>


										<p><?php the_content()?></p>

										<?php 
					                		// PRINT CUSTOM ICONS FROM ADD TO ANY
					                		printCustomIcons();
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

							<div class="media-inquiry-info"><?php echo $sub_page_content  ?></div>

						</div> 
						<!-- end of content wrapper with formatting -->

					</div>

				</div>

				</div>

			</div>


<?php get_footer(); ?>
