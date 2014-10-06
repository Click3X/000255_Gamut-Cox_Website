<?php
/*
 Template Name: Press
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

			<?php $header_image = get_field('header-image');
					$sub_page_content = get_field('sub-page-content');
					//$three_column_purpose = get_sub_field('purpose');

			?>

				<header class="clearfix article-header">
					<!-- <div class="page-header" style="background-image: url('<?php echo $header_image['url'] ?>')"></div>-->
					<div id="page-header-<?php echo get_queried_object_id(); ?>" class="page-header"></div>
				</header>

				<div class="wrap-wrap cf">

				<div id="inner-content" class="wrap cf">

				<?php get_sidebar(); ?>

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

						<div class="sub-page-content-wrapper">
						<!-- IF Events PAGE -->
						<?php if (is_page(298)) { ?>
							<?php query_posts( 'cat=18' ); ?>

							<!-- IF PRESS PAGE -->
						<?php } elseif (is_page(65)) { ?>
							<?php query_posts( 'cat=19' ); ?>
<!-- 							<div class="news-logos-container">
								<img id="logo-fast" src="<?php bloginfo('url'); ?>/img/fastcompany.png">
								<img id="logo-nyt" src="<?php bloginfo('url'); ?>/img/nyt.png">
								<img id="logo-forbes" src="<?php bloginfo('url'); ?>/img/forbes.png">
							</div> -->


						<?php } ?>
										
										

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article class="news-post-wrapper" id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="entry-content cf news-post-inner" itemprop="articleBody">
										


										<h1 class="post-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
										<p class="byline vcard">
											<?php printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format'))); ?>
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

										<?php the_excerpt()?>

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


														<!-- repeater starts -->
							<?php 
							if(get_field('t_column_contact')): ?>

							<div class="lower-columns">

								
								
								<ul>

								<?php while(has_sub_field('t_column_contact')): ?>
									<li>

									<h3><?php echo get_sub_field('purpose'); ?></h3>
																		
										<?php echo get_sub_field('content'); ?>

									</li>

								<?php endwhile; ?>

								</ul>
								

							</div>

							<?php endif; ?>
							<!-- end of repeater -->

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

							<!-- MEDIA INQUIRY INFO -->

							<div class="media-inquiry-info"><?php echo $sub_page_content  ?></div>



						</div> 
						<!-- end of content wrapper with formatting -->

					</div>

				</div>

				</div>

			</div>


<?php get_footer(); ?>
