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
			
			$empTitle = get_post_custom_values('title', $team_member->ID);
			$emp_title = $empTitle[0];

			$teamMembers[$key]['id'] = $id;
			$teamMembers[$key]['name'] = $name;
			$teamMembers[$key]['link'] = $link;
			$teamMembers[$key]['emp_title'] = $emp_title;

			$size = 'thumb';
			$full = 'large';
			$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'emp-thumb');
			$largeThumb = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'emp-large');

			$teamMembers[$key]['thumb'] = $thumb[0];
			$teamMembers[$key]['largeThumb'] = $largeThumb[0];

		}
	}
	// helper($teamMembers);

	endwhile;

endif;

wp_reset_postdata();

// helper($teamMembers);

?>

<div id="content">

<header class="article-header">
	<div class="page-header" style="background-image: url('<?php echo $header['url'] ?>')"></div>
</header>

<div id="inner-content" class="wrap cf">

	<?php get_sidebar(); ?>

	<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

		<ul id="og-grid" class="og-grid">

			<?php 

				foreach ($teamMembers as $key => $teamMember) { ?>
					<li id="post-<?php echo $teamMember['id']; ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<a href="<?php echo $teamMember['link']; ?>" data-largesrc="<?php echo $teamMember['largeThumb']; ?>" data-title="<?php echo $teamMember['name']; ?>" data-description="<?php echo $teamMember['content']; ?>" data-etitle="<?php echo $teamMember['emp_title']; ?>">
						<?php echo '<a href="'.$teamMember['link'].'">';
							echo '<img src="'.$teamMember['thumb'].'" alt="'.$teamMember['name'].'" class="grid-thumb">';
							echo '<h2 class="small-name gothic">'.$teamMember['name'].'</h2>';
							echo '<h3 class="small-title gothic">'.$teamMember['emp_title'].'</h3>';
							?>
						</a>
					</li>
				<?php

				}
			?>

		</ul>

	</div>

</div>

</div>

<?php get_footer(); ?>