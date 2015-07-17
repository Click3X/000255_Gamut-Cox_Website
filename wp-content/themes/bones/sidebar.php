<?php
	// SPECIAL CLASS FOR OUR LEADERSHIP SIDEBAR
	$sidebar_class="d-2of7";
	if( is_page(48) || is_tax( 'team' ) ) {
		$sidebar_class="d-1of7";
	}
?>
<div id="sidebar1" class="sidebar m-all t-1of3 cf <?php echo $sidebar_class; ?>" role="complementary">

	<div id="sidebar-beam-container">
		<div id="sidebar-beam" style="background-image: url(<?php bloginfo('url'); ?>/img/sidebar-beam.png);"></div>
	</div>

	<?php 
		if( is_tax( 'team' ) ) {
			global $wp_query;
			$term = $wp_query->get_queried_object();
			$parent_title = $term->name;
		} else {
			$parent_title = get_the_title($post->post_parent); 
		}
	?>

	<h2 id="sidebar-title"><?php echo $parent_title; ?></h2>

	<?php 
		// dynamic_sidebar( 'sidebar1' ); 
		global $post; // Setup the global variable $post
		if ( is_page() && $post->post_parent ) // Make sure we are on a page and that the page is a parent
			$kiddies = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
		else
			$kiddies = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

		// IF IS OUR LEADERSHIP PAGE, OUTPUT CUSTOM MENU MADE IN ADMIN 'OUR LEADERSHIP'
		// SO THAT TEAM TAXONOMY MENU IS LISTED
		if(is_page(48) || is_tax( 'team' ) ) {
			wp_nav_menu(array(
				'container' => false,                           // remove nav container
				'container_class' => 'menu cf',                 // class of container (should you choose to use it)
				'menu' => __( 'Our Leadership', 'bonestheme' ),  // nav name
				'menu_class' => 'secondary cf',               // adding custom nav class
				'theme_location' => 'our-leadership'               // where it's located in the them
			));
		} elseif ( $kiddies ) {
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

</div>
