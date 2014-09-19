<?php 

get_header(); 

// VARIABLE TO HOLD TEAM MEMBERS
$teamMembers = array();

// GO THROUGH LOOP FIRST AND CACHE DATA BEFORE PRINTING
// ANY HTML TAGS
if (have_posts()) : while (have_posts()) : the_post(); 

// GET HEADER
$header = get_field('header-image');

// GET TEAM MEMBER POSTS RELATIONSHIP FIELD FROM 'OUR-LEADERSHIP' ADMIN PAGE
// if( get_field('team_members') )
// 	{
// 		while( has_sub_field('team_members') )
// 		{ 
// 			$team_member = get_sub_field('team_member');

// 			foreach ($team_member as $key => $member) {
// 				// $MEMBER HOLDS DATA

// 				$id = $member->ID;

// 				// CONTENT FIELDS
// 				// $content = $member->post_content;
// 				$name = $member->post_title;
// 				$link = $member->guid;

// 				// CUSTOM FIELDS
// 				$emp_title = get_post_custom_values('title', $id)[0];

// 				// IMAGES
// 				$size = 'thumb';
// 				$full = 'large';
// 				$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'emp-thumb');
// 				$largeThumb = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'emp-large');

// 				//STORE VARS IN TEAM MEMBERS ARRAY
// 				$teamMembers[$key]['id'] = $id;
// 				// $teamMembers[$key]['content'] = $content;
// 				$teamMembers[$key]['name'] = $name;
// 				$teamMembers[$key]['link'] = $link;
// 				$teamMembers[$key]['emp_title'] = $emp_title;
// 				$teamMembers[$key]['thumb'] = $thumb;
// 				$teamMembers[$key]['large_thumb'] = $largeThumb;

// 			}
// 		}
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