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
	
	// helper($tmpPosts);

	if( $tmpPosts ) {
		// helper($tmpPosts[0]['team_member']);
		$team_members = $tmpPosts[0]['team_member'];
		// helper($team_members);

		foreach ($team_members as $key => $team_member) {
			helper($team_member);
			$id = $team_member->ID;
			$name = $team_member->post_title;
			$link = $team_member->guid;

			$teamMembers[$key]['id'] = $id;
			$teamMembers[$key]['name'] = $name;
			$teamMembers[$key]['link'] = $link;


			echo '<h1>This is id: '.$teamMembers[$key]['id'].'</h1>';
			echo '<h1>This is name: '.$teamMembers[$key]['name'].'</h1>';
			echo '<h1>This is link: '.$teamMembers[$key]['link'].'</h1>';

			// // CONTENT FIELDS
			// // $content = $team_member->post_content;
			// $name = $team_member->post_title;
			// $link = $team_member->guid;

			// // CUSTOM FIELDS
			// $emp_title = get_post_custom_values('title', $id)[0];

			// // IMAGES
			// $size = 'thumb';
			// $full = 'large';
			// $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'emp-thumb');
			// $largeThumb = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'emp-large');

			// //STORE VARS IN TEAM MEMBERS ARRAY
			// $teamMembers[$key]['id'] = $id;
			// // $teamMembers[$key]['content'] = $content;
			// $teamMembers[$key]['name'] = $name;
			// $teamMembers[$key]['link'] = $link;
			// $teamMembers[$key]['emp_title'] = $emp_title;
			// $teamMembers[$key]['thumb'] = $thumb;
			// $teamMembers[$key]['large_thumb'] = $largeThumb;
		}
	}
	helper($teamMembers);

	// GET TEAM MEMBER POSTS RELATIONSHIP FIELD FROM 'OUR-LEADERSHIP' ADMIN PAGE
	// if( $posts )
	// 	{
	// 		foreach( $posts as $post): // variable must be called $post (IMPORTANT);
	//         setup_postdata($post); 
	   		
	//    		// $MEMBER HOLDS DATA

	// 		$id = $post->ID;

	// 		// CONTENT FIELDS
	// 		// $content = $post->post_content;
	// 		$name = $post->post_title;
	// 		$link = $post->guid;

	// 		// CUSTOM FIELDS
	// 		$emp_title = get_post_custom_values('title', $id)[0];

	// 		// IMAGES
	// 		$size = 'thumb';
	// 		$full = 'large';
	// 		$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'emp-thumb');
	// 		$largeThumb = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'emp-large');

	// 		//STORE VARS IN TEAM MEMBERS ARRAY
	// 		$teamMembers[$key]['id'] = $id;
	// 		// $teamMembers[$key]['content'] = $content;
	// 		$teamMembers[$key]['name'] = $name;
	// 		$teamMembers[$key]['link'] = $link;
	// 		$teamMembers[$key]['emp_title'] = $emp_title;
	// 		$teamMembers[$key]['thumb'] = $thumb;
	// 		$teamMembers[$key]['large_thumb'] = $largeThumb;


	//    		endforeach;
	    
	//     wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
		
	// 	}

	endwhile;

endif;

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


		</ul>

	</div>

</div>

</div>

<?php get_footer(); ?>