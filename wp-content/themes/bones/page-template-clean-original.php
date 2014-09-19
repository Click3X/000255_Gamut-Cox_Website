<?php 
/*
	Template Name: Clean
*/

get_header(); 

?>

<h1>This is as clean as it gets!</h1>

<div id="content">

<header class="article-header">
	<div class="page-header" style="background-image: url('<?php echo $header['url'] ?>')"></div>
</header>

<div id="inner-content" class="wrap cf">

	<?php get_sidebar(); ?>

	<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

		<ul id="og-grid" class="og-grid">

		<?php 
		
		// GO THROUGH LOOP AGAIN
		if (have_posts()) : while (have_posts()) : the_post(); 

		// GET HEADER
		$header = get_field('header-image');

		// GET TEAM MEMBER POSTS RELATIONSHIP FIELD FROM 'OUR-LEADERSHIP' ADMIN PAGE
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

						// IMAGES
						$size = 'thumb';
						$full = 'large';
						$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'emp-thumb');
						$largeThumb = wp_get_attachment_image_src(get_post_thumbnail_id($id) , 'emp-large');

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
		
		endwhile;

		endif;

		?>

		</ul>

	</div>

</div>

</div>

<?php get_footer(); ?>