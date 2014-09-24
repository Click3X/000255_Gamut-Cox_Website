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
			$empId = $empThumb[0];
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
			$teamMembers[$key]['largeThumb'] = $largeThumb[0];
			$teamMembers[$key]['largeThumb-width'] = $largeThumb[1];
			$teamMembers[$key]['largeThumb-height'] = $largeThumb[2];
			$teamMembers[$key]['new-thumb'] = $newThumb;

		}
	}
	endwhile;

endif;

wp_reset_postdata();


?>

<div id="content">

	<header class="article-header">
		<div class="page-header" style="background-image: url('<?php echo $header['url'] ?>')"></div>
	</header>

	<div id="inner-content" class="wrap cf">

		<?php get_sidebar(); ?>

		<div id="main" class="m-all t-2of3 d-6of7 cf" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

				<section class="entry-content cf" itemprop="articleBody">

					<div class="sub-page-content-wrapper" style="">
						<h1><?php the_title(); ?></h1>
					</div>

					<ul id="og-grid" class="og-grid">

						<?php 

							foreach ($teamMembers as $key => $teamMember) { ?>

								<li id="post-<?php echo $teamMember['id']; ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
									<a href="<?php echo $teamMember['link']; ?>" data-largesrc="<?php echo $teamMember['largeThumb']; ?>" data-largeheight="<?php echo $teamMember['largeThumb-height']; ?>" data-largewidth="<?php echo $teamMember['largeThumb-width']; ?>" data-title="<?php echo $teamMember['name']; ?>" data-description="<?php echo $teamMember['add_info']; ?>" data-etitle="<?php echo $teamMember['emp_title']; ?>">
									<?php echo '<a href="'.$teamMember['link'].'">';
										echo '<img src="'.$teamMember['new-thumb'].'" alt="'.$teamMember['name'].'" class="grid-thumb">';
										echo '<h2 class="small-name gothic">'.$teamMember['name'].'</h2>';
										echo '<h3 class="small-title gothic">'.$teamMember['emp_title'].'</h3>';
										?>
									</a>
								</li>
							
							<?php

							}
						?>

					</ul>

				</section>

			</article>

		</div>

	</div>

</div>

<?php get_footer(); ?>