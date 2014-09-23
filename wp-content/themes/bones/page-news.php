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

			<div id="content">

			<?php $header_image = get_field('header-image');?>

				<header class="clearfix article-header">
					<div class="page-header" style="background-image: url('<?php echo $header_image['url'] ?>')"></div>					
				</header>

				<div id="inner-content" class="wrap cf">

				<?php get_sidebar(); ?>

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

						<div class="sub-page-content-wrapper">

						<?php query_posts( 'cat=18' ); ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article class="news-post-wrapper" id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="entry-content cf news-post-inner" itemprop="articleBody">
									
										<!-- // the content (pretty self explanatory huh)
										//the_content(); -->

										
										
										<h1 class="post-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
										<p class="byline vcard">
											<?php printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format'))); ?>
										</p>
										<p><?php the_excerpt()?></p>
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

								


								<!-- <footer class="article-footer"> -->

                 <!--  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?> -->

								<!-- </footer> -->

								

							</article>



							<?php endwhile; else: endif;  ?>


						</div> 
						<!-- end of content wrapper with formatting -->

					</div>

				</div>

			</div>


<?php get_footer(); ?>
