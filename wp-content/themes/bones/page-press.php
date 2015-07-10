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
						$first_parent = get_page($parent[0]);
						$parent_title = $first_parent->post_title;
					?>
					<h2 id="sidebar-title"><a href="<?php echo get_permalink($first_parent->ID); ?>"><?php echo $parent_title; ?></a></h2>

					<?php $defaults = array(
						'theme_location'  => '',
						'menu'            => 'Watch & Read',
						'container'       => '',
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
						?>

						<!-- Media Logos -->
						<?php if(get_field('logo_list')): ?>

							<ul>

							<?php while(has_sub_field('logo_list')): 

								$logo = get_sub_field('logo'); 

								$logo_url = $logo['url']; ?>

								<li style=" display: inline-block; padding: 0 10px;"><img style="height: 30px;" src="<?php echo $logo_url; ?>"></li>

							<?php endwhile; ?>

							</ul>

						<?php endif; ?>
										

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article class="news-post-wrapper" id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="entry-content cf news-post-inner" itemprop="articleBody">

										<h1 class="post-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
										<p class="byline vcard">
											<?php printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format'))); ?>
										</p>

										<p><?php the_excerpt()?></p>
										
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
