<?php
	// SPECIAL CLASS FOR OUR LEADERSHIP SIDEBAR
	$sidebar_class="d-2of7";
	if(is_page(48)) {
		$sidebar_class="d-1of7";
	}
?>
<div id="sidebar1" class="sidebar m-all t-1of3 cf <?php echo $sidebar_class; ?>" role="complementary">

	<div id="sidebar-beam-container">

		<div id="sidebar-beam" style="background-image: url(<?php bloginfo('url'); ?>/img/sidebar-beam.png);"></div>

	</div>

	<?php $parent_title = get_the_title($post->post_parent); ?>

	<h2 id="sidebar-title"><?php echo $parent_title; ?></h2>

	<?php 

		// dynamic_sidebar( 'sidebar1' ); 
		global $post; // Setup the global variable $post
		if ( is_page() && $post->post_parent ) // Make sure we are on a page and that the page is a parent
			$kiddies = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
		else
			$kiddies = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

		if ( $kiddies ) {
			// TOP NAV OF SIDEBAR - SHOWS BIZ PAGES
			echo '<ul class="secondary">';
			echo $kiddies;
			echo '</ul>';
		}

		// add content below sidebar
		$sidebar_intro = get_field('sidebar-intro');
		if ($sidebar_intro) {
			echo '<div id="sidebar-intro" class="sidebar-intro">'.$sidebar_intro.'</div>';
		}
		?>


	<?php // else : ?>

		<?php
			/*
			 * This content shows up if there are no widgets defined in the backend.
			*/
		?>
		
	<?php // endif; ?>
</div>
