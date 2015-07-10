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
					
					

					<?php 

						// echo '<h2 id="sidebar-title"><a href="'.get_category_link( $category_id ).'">'. $cat_title .'</a></h2>';

						if($cat_title == 'Uncategorized') {
							$parent_title = get_the_title($post->post_parent);
							echo '<h2 id="sidebar-title">'.$parent_title.'</h2>';
						} else {
							echo '<h2 id="sidebar-title"><a href="'.get_category_link( $category_id ).'">'. $cat_title .'</a></h2>';							
						}

						// if( is_page() && $post->post_parent > 0 ) { 
						// 	$parent_title = get_the_title($post->post_parent);
						// 	echo '<h2 id="sidebar-title">'.$parent_title.'</h2>';
						// } else {
						// 	echo '<h1>Hey</h1>';
						// 	// echo '<h2 id="sidebar-title"><a href="'.get_category_link( $category_id ).'">'. $cat_title .'</a></h2>'		
						// }
					?>


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
											<?php //printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format'))); ?>
										</p>


										<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
											//the_post_thumbnail( 'news-post-thumbnail' );
											$post_thumbnail_id = get_post_thumbnail_id();
										    $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );										 
										?>
										<div class="post-image">
										    <img title="image title" alt="thumb image" class="wp-post-image" src="<?php echo $post_thumbnail_url; ?>" style="width:100%; height:auto;">
										</div>
										<?php } ?>


										<p><?php the_content()?></p>
										<!-- <p><?php the_excerpt()?></p> -->
										<?php //endwhile; else: endif; 




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
								</section>


							</article>




							<?php endwhile; else: ?>
								<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<!-- <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1> -->
										<h3 class="no-found-msg">No news has been posted.</h3>
									</header>
									<!-- <section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
										<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
									</footer> -->
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
