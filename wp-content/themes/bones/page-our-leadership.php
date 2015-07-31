<?php 

get_header(); 

// VARIABLE TO HOLD TEAM MEMBERS
$teamMembers = array();

// GO THROUGH LOOP FIRST AND CACHE DATA BEFORE PRINTING
// ANY HTML TAGS
if (have_posts()) : while (have_posts()) : the_post(); 

	// GET HEADER
	$header = get_field('header-image');
	$tmpPosts = get_field('team_members');

	if( $tmpPosts ) {

		$team_members = $tmpPosts[0]['team_member'];

		foreach ($team_members as $key => $team_member) {
			$id = $team_member->ID;
			$name = $team_member->post_title;
			$link = $team_member->guid;
			$size = 'thumb';
			$full = 'full';
			$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'emp-thumb');
			// hover over
			$thumb_hover = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'emp-thumb');
			$largeThumb = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'full');

			
			// GET CUSTOM FIELDS ASSOCIATED WITH TEAM MEMBER
			$empTitle = get_post_custom_values('title', $team_member->ID);
			$emp_title = $empTitle[0];
			$addInfo = get_post_custom_values('additional_info', $team_member->ID);
			$add_info = $addInfo[0];
			$emailAdd = get_post_custom_values('email', $team_member->ID);
			$email = $emailAdd[0];
			$telePhone = get_post_custom_values('telephone', $team_member->ID);
			$tele = $telePhone[0];
			$empThumb = get_post_custom_values('thumbnail', $team_member->ID);
			// hover over
			$empThumb_hover = get_post_custom_values('thumbnail_hover', $team_member->ID);
			$empId = $empThumb[0];


			// hover over
			$empHoverId = $empThumb_hover[0];
			$bwHoverThumb = wp_get_attachment_image_src($empHoverId , 'emp-thumb');
			$newHoverThumb = $bwHoverThumb[0];

			$bwThumb = wp_get_attachment_image_src($empId , 'emp-thumb');
			$newThumb = $bwThumb[0];
			
			// ADD VALUES TO EACH TEAM MEMBER IN ARRAY
			$teamMembers[$key]['id'] = $id;
			$teamMembers[$key]['name'] = $name;
			$teamMembers[$key]['link'] = $link;
			$teamMembers[$key]['emp_title'] = $emp_title;
			$teamMembers[$key]['add_info'] = $add_info;
			$teamMembers[$key]['email'] = $email;
			$teamMembers[$key]['tele'] = $tele;
			$teamMembers[$key]['thumb'] = $thumb[0];
			// hover
			$teamMembers[$key]['thumb_hover'] = $thumb_hover[0];

			$teamMembers[$key]['largeThumb'] = $largeThumb[0];
			$teamMembers[$key]['largeThumb-width'] = $largeThumb[1];
			$teamMembers[$key]['largeThumb-height'] = $largeThumb[2];
			$teamMembers[$key]['new-thumb'] = $newThumb;

			// hover 
			$teamMembers[$key]['newHoverThumb'] = $newHoverThumb;

			// GET THE TEAM FOR EACH MEMBER
			$tm_terms = wp_get_post_terms( $team_member->ID, 'team' );

			foreach ($tm_terms as $nkey => $tm_term) {
				// helper($tm_term);
				if( isset( $tm_term->slug ) ) {
					$teamMembers[$key]['terms'][$nkey] = $tm_term->slug;	
				}
				
			}
		}
	}
	endwhile;

endif;

wp_reset_postdata();

?>

<div id="content" class="fixed-header-bg">

	<header class="article-header">
		<div class="page-header" style="background-image: url('<?php echo $header['url'] ?>')"></div>
	</header>

	<div class="wrap-wrap cf">

	<div id="inner-content" class="wrap cf">

		<?php get_sidebar(); ?>

		<div id="main" class="m-all t-2of3 d-6of7 cf" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

				<section class="entry-content cf" itemprop="articleBody">

					<div class="sub-page-content-wrapper" style="">
						<?php 
							// OVERRIDE PAGE TITLE IF TITLE OVERRIDE FIELD IS NOT EMPTY
							// echo '<h1>'.get_the_title().'</h1>';
							titleOverride();
						?>
					</div>

					<ul id="og-grid" class="og-grid">

						<?php 

							foreach ($teamMembers as $key => $teamMember) { ?>

								<li id="post-<?php echo $teamMember['id']; ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">

									<?php 
										echo '<a class="fancybox various" href="#'.$teamMember['id'].'"';
											if( isset($teamMember['terms']) ) { 
												$len = count($teamMember['terms']);
												echo 'data-team="';
													foreach ($teamMember['terms'] as $key => $term) {
														echo $term;
														if($key < $len-1 ) {
															echo ' ';
														}
													}
												echo '"';
											}
										echo '>';

										echo '<img src="'.$teamMember['new-thumb'].'" alt="'.$teamMember['name'].'" class="grid-thumb grayscale">';
										echo '<h2 class="small-name gothic">'.$teamMember['name'].'</h2>';
										echo '<h3 class="small-title gothic">'.$teamMember['emp_title'].'</h3>';

										echo '</a>';
									?>
										
								</li>

								<div id="<?php echo $teamMember['id']; ?>" style="width:100%;display: none;">
									<?php echo '<img class="bio-left-column-image" src="'.$teamMember['largeThumb'].'" alt="'.$teamMember['name'].'">' ?>
									<div class="bio-right-column-container">
									<h3 class="bio-name"><?php echo $teamMember['name']; ?></h3><br />	
									<h3 class="bio-title"><?php echo $teamMember['emp_title']; ?></h3>	
									<p><?php echo $teamMember['add_info']; ?></p>
									</div>
								</div> 
							
							<?php

							}
						?>

					</ul>


				</section>

			</article>

		</div>

	</div>

	</div>

</div>

<?php get_footer(); ?>