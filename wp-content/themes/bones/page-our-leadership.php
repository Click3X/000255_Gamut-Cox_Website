<?php get_header(); 

// $args = array(
// 	'post_type'=>'team_members',
// 	'posts_per_page'=>-1
// 	);

// $the_query = new WP_Query( $args );

?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<?php get_sidebar(); ?>

					<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

						<ul id="og-grid" class="og-grid">

						<?php 
						

						if (have_posts()) : while (have_posts()) : the_post(); 

						// GET TEAM MEMBER POSTS RELATIONSHIP FIELD FROM 'OUR-LEADERSHIP' ADMIN PAGE
						// query_posts('section_name=Team_Member_Reorder');
						// echo query_posts('section_name=Team_Member_Reorder');
						if( get_field('team_members') )
							{
								while( has_sub_field('team_members') )
								{ 
									$team_member = get_sub_field('team_member');

									foreach ($team_member as $key => $member) {
										// $MEMBER HOLDS DATA

										$id = $member->ID;

										// CONTENT FIELDS
										$content = $member->post_content;
										$name = $member->post_title;
										$link = $member->guid;

										// CUSTOM FIELDS
										$emp_title = get_post_custom_values('title', $id)[0];
										// helper($emp_title);

										// IMAGES
										$size = 'thumb';
										$full = 'large';
										$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'emp-thumb');
										$largeThumb = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'emp-large');

										// echo '<h1>THis is id: '.$id.'.</h1>';
										// helper($member);

										?>

										<li id="post-<?php echo $id; ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
											<a href="<?php echo $link; ?>" data-largesrc="<?php echo $largeThumb[0]; ?>" data-title="<?php echo $name; ?>" data-description="<?php echo $content; ?>" data-etitle="<?php echo $emp_title; ?>">
											<?php echo '<a href="'.$link.'">';
												echo '<img src="'.$thumb[0].'" alt="'.$name.'" class="grid-thumb">';
												echo '<h2 class="small-name gothic">'.$name.'</h2>';
												echo '<h3 class="small-title gothic">'.$emp_title.'</h3>';
												?>
											</a>
										</li>

										<?php

									}
								}
							}

						// helper($posts);
						// foreach ($tm_posts as $key => $tm_post) {
						// 	helper($tm_post);
						// }


						// foreach ($posts as $key => $post) {
						// 	helper($post);
						// }
						
						endwhile;

						endif;

						?>

						</ul>

					</div>

				</div>

			</div>

<?php get_footer(); ?>