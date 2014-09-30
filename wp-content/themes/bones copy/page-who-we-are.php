<?php get_header(); 

$args = array(
	// 'post_type'=>'page',
	'post_type'=>'team_members',
	// 'page_id' => 163,
	'posts_per_page'=>-1
	);

$the_query = new WP_Query( $args );

?>

 			<div id="content">

				<div id="inner-content" class="wrap cf">

					<?php get_sidebar(); ?>

					<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

						<ul id="og-grid" class="og-grid">

						<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 

							$emp_title = get_field('title');
							$title = get_the_title();
							$content = get_the_content();

							$size = 'thumb';
							$full = 'large';
							$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID) , 'emp-thumb');
							$largeThumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID) , 'emp-large');
						?>

							<li id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<a href="<?php the_permalink(); ?>" data-largesrc="<?php echo $largeThumb[0]; ?>" data-title="<?php echo $title; ?>" data-description="<?php echo $content; ?>" data-etitle="<?php echo $emp_title; ?>">
								<?php echo '<a href="'.get_the_permalink().'">';
									echo '<img src="'.$thumb[0].'" alt="'.$title.'" class="grid-thumb">';
									echo '<h2 class="small-name gothic">'.$title.'</h2>';
									echo '<h3 class="small-title gothic">'.$emp_title.'</h3>';
									?>
								</a>
							</li>

							<?php endwhile; ?>

							<?php endif; ?>

						</ul>

					</div>

				</div>

			</div> 

			


<?php get_footer(); ?>