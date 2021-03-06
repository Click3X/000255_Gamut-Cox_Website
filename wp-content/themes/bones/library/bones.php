<?php
/* Welcome to Bones :)
This is the core Bones file where most of the
main functions & features reside. If you have
any custom functions, it's best to put them
in the functions.php file.

Developed by: Eddie Machado
URL: http://themble.com/bones/

  - head cleanup (remove rsd, uri links, junk css, ect)
  - enqueueing scripts & styles
  - theme support functions
  - custom menu output & fallbacks
  - related post function
  - page-navi function
  - removing <p> from around images
  - customizing the post excerpt
  - custom google+ integration
  - adding custom fields to user profiles

*/

/*********************
WP_HEAD GOODNESS
The default wordpress head is
a mess. Let's clean it up by
removing all the junk we don't
need.
*********************/

function bones_head_cleanup() {
	// category feeds
	// remove_action( 'wp_head', 'feed_links_extra', 3 );
	// post and comment feeds
	// remove_action( 'wp_head', 'feed_links', 2 );
	// EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// index link
	remove_action( 'wp_head', 'index_rel_link' );
	// previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// WP version
	remove_action( 'wp_head', 'wp_generator' );
	// remove WP version from css
	add_filter( 'style_loader_src', 'bones_remove_wp_ver_css_js', 9999 );
	// remove Wp version from scripts
	add_filter( 'script_loader_src', 'bones_remove_wp_ver_css_js', 9999 );

} /* end bones head cleanup */

// A better title
// http://www.deluxeblogtips.com/2012/03/better-title-meta-tag.html
function rw_title( $title, $sep, $seplocation ) {
  global $page, $paged;

  // Don't affect in feeds.
  if ( is_feed() ) return $title;

  // Add the blog's name
  if ( 'right' == $seplocation ) {
    $title .= get_bloginfo( 'name' );
  } else {
    $title = get_bloginfo( 'name' ) . $title;
  }

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );

  if ( $site_description && ( is_home() || is_front_page() ) ) {
    $title .= " {$sep} {$site_description}";
  }

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 ) {
    $title .= " {$sep} " . sprintf( __( 'Page %s', 'dbt' ), max( $paged, $page ) );
  }

  return $title;

} // end better title

// remove WP version from RSS
function bones_rss_version() { return ''; }

// remove WP version from scripts
function bones_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

// remove injected CSS for recent comments widget
function bones_remove_wp_widget_recent_comments_style() {
	if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
		remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
	}
}

// remove injected CSS from recent comments widget
function bones_remove_recent_comments_style() {
	global $wp_widget_factory;
	if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
		remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
	}
}

// remove injected CSS from gallery
function bones_gallery_style($css) {
	return preg_replace( "!<style type='text/css'>(.*?)</style>!s", '', $css );
}


/*********************
SCRIPTS & ENQUEUEING
*********************/

// loading modernizr and jquery, and reply script
function bones_scripts_and_styles() {

  global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  if (!is_admin()) {

		// modernizr (without media query polyfill)
		wp_register_script( 'bones-modernizr', get_stylesheet_directory_uri() . '/library/js/libs/modernizr.custom.min.js', array(), '2.5.3', false );

		

		// register main stylesheet
		wp_register_style( 'bones-stylesheet', get_stylesheet_directory_uri() . '/library/css/style.css', array(), '', 'all' );

		// ie-only style sheet
		wp_register_style( 'bones-ie-only', get_stylesheet_directory_uri() . '/library/css/ie.css', array(), '' );


		//parallax slider
		// wp_register_style( 'bones-pslider', get_stylesheet_directory_uri() . '/library/css/jquery.parallax-slider.css', array(), '' );

		// Lightbox
		wp_register_style( 'fancybox', get_stylesheet_directory_uri() . '/library/css/jquery.fancybox.css', array(), '' );

		// GREY FALLBACK FOR IE11
		// wp_register_style( 'greyscale-stylesheet', get_stylesheet_directory_uri() . '/library/css/gray.css', array(), '' );


    // comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
		  wp_enqueue_script( 'comment-reply' );
    }

		//adding scripts file in the footer
		wp_register_script( 'bones-js', get_stylesheet_directory_uri() . '/library/js/scripts.js', array( 'jquery' ), '', true );

		// jquery ui
		wp_register_script( 'bones-jqueryui', 'http://code.jquery.com/ui/1.11.1/jquery-ui.js', array('jquery'), true );

		// parallax slider
		// wp_register_script( 'bones-slider', get_stylesheet_directory_uri() . '/library/js/libs/jquery.parallax-slider.js', array('jquery'), true );
		// wp_register_script( 'bones-easing', get_stylesheet_directory_uri() . '/library/js/libs/jquery.easing.1.3.js', array('jquery'), true );
		// wp_register_script( 'bones-colors', get_stylesheet_directory_uri() . '/library/js/libs/jquery.animate-colors.js', array('jquery'), true );


		// EXP_GRID for 'who-we-are' page
		// wp_register_script( 'exp-grid-js', get_stylesheet_directory_uri() . '/library/js/libs/exp_grid.js', array('jquery'), '', true );
		// wp_register_style( 'exp-grid-css', get_stylesheet_directory_uri() . '/library/css/exp_grid.css', array(), '', true );


		// IN VIEW PORT
		wp_register_script( 'in-view', get_stylesheet_directory_uri() . '/library/js/in-view/jquery.viewport.min.js', array('jquery'), '', true );
		wp_register_script( 'in-view-page', get_stylesheet_directory_uri() . '/library/js/in-view/in-view-page.js', array('jquery', 'in-view'), '', true );

		// ROYALSLIDER
		wp_register_style( 'rs-css', get_stylesheet_directory_uri() . '/library/js/libs/royalslider/royalslider.css', array(), '', true );
		wp_register_style( 'rs-skin', get_stylesheet_directory_uri() . '/library/js/libs/royalslider/skins/default/rs-default.css', array(), '', true );
		wp_register_script( 'jq-easing', get_stylesheet_directory_uri() . '/library/js/libs/royalslider/jquery.easing-1.3.js', array('jquery'), '', true );
		wp_register_script( 'rs-js', get_stylesheet_directory_uri() . '/library/js/libs/royalslider/jquery.royalslider.min.js', array('jquery'), '', true );
		wp_register_script( 'rs-slider', get_stylesheet_directory_uri() . '/library/js/rs-slider.js', array('jquery', 'rs-js'), '', true );

		// SCROLLORAMA
		wp_register_style( 'scroll-css', get_stylesheet_directory_uri() . '/library/js/libs/scrollorama/css/style.css', array(), '', true );
		wp_register_script( 'timelineMax', get_stylesheet_directory_uri() . '/library/js/libs/scrollorama/js/greensock/TimelineMax.min.js', array(), '', true );
		wp_register_script( 'tweenMax', get_stylesheet_directory_uri() . '/library/js/libs/scrollorama/js/greensock/TweenMax.min.js', array(), '', true );
		wp_register_script( 'scrollorama', get_stylesheet_directory_uri() . '/library/js/libs/scrollorama/js/jquery.superscrollorama.js', array('jquery', 'tweenMax'), '', true );
		wp_register_script( 'scroll', get_stylesheet_directory_uri() . '/library/js/scroll.js', array('jquery', 'tweenMax', 'scrollorama'), '', true );


		// GOOGLE MAP SCRIPTS CHARLIE
		wp_register_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false', array(), '', false );
		wp_register_script( 'g-maps' , get_stylesheet_directory_uri() . '/library/js/g-maps.js', array('g-maps'), '', false );


		// LIGHTBOX
		wp_register_script( 'fancybox-js', get_stylesheet_directory_uri() . '/library/js/jquery.fancybox.js', array('jquery'), '', true );
		wp_register_script( 'fancyboxpack-js', get_stylesheet_directory_uri() . '/library/js/jquery.fancybox.pack.js', array('jquery'), '', true );

		
        // HIDE SCROLL - FOR PARALLAX
        wp_register_script( 'hide-scroll' , get_stylesheet_directory_uri() . '/library/js/hide-scroll.js', array('jquery'), '', true );

        // PLAY SOUND
        wp_register_script( 'play-sound' , get_stylesheet_directory_uri() . '/library/js/play-sound.js', array('jquery'), '', true );

        // GREY FALLBACK FOR IE11
        // wp_register_script( 'grey-scale' , get_stylesheet_directory_uri() . '/library/js/libs/jquery.gray.min.js', array('jquery'), '', true );

        // PAN TO MARKER
        wp_register_script( 'pan-to-marker' , get_stylesheet_directory_uri() . '/library/js/pan-to-marker.js', array('jquery'), '', true );

        // PAN TO MARKER
        wp_register_script( 'side-bar-highlight' , get_stylesheet_directory_uri() . '/library/js/side-bar-highlight.js', array('jquery'), '', true );
        // CONTACT FORM FIX
        wp_register_script( 'contact-form-resize-fix' , get_stylesheet_directory_uri() . '/library/js/contact-form-resize-fix.js', array('jquery'), '', true );

        // enqueue styles and scripts
		wp_enqueue_script( 'bones-modernizr' );
		wp_enqueue_style( 'bones-stylesheet' );
		wp_enqueue_style( 'bones-ie-only' );
		wp_enqueue_style( 'fancybox' );
		// wp_enqueue_style( 'greyscale-stylesheet' );


		$wp_styles->add_data( 'bones-ie-only', 'conditional', 'lt IE 9' ); // add conditional wrapper around ie stylesheet

		/*
		I recommend using a plugin to call jQuery
		using the google cdn. That way it stays cached
		and your site will load faster.
		*/
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'bones-js' );
		wp_enqueue_script( 'bones-jqueryui' );
		wp_enqueue_script( 'fancybox-js' );
		wp_enqueue_script( 'fancyboxpack-js' );
		// wp_enqueue_script( 'grey-scale' );

		// CONDITIONAL SCRIPT TO ONLY LOAD EXP-GRID-JS AND EXP-GRID-CSS ON 'WHO-WE-ARE' PAGE id = 45
		if( is_page(45) || is_page(48)) {
			// wp_enqueue_style( 'exp-grid-css' );
			wp_enqueue_script( 'exp-grid-js' );
		}

		// CONDITIONAL SCRIPT TO LOAD GOOGLE MAPS ON CONTACT PAGE
		if(is_page(9)) {
		// 	wp_enqueue_script( 'google-maps' );
		// 	wp_enqueue_script( 'g-maps' );
			wp_enqueue_script( 'pan-to-marker' );
            wp_enqueue_script( 'contact-form-resize-fix' );
		}

        if(is_single()) {
            wp_enqueue_script( 'side-bar-highlight' );   
        }

		// CONDITIONAL SCRIPT TO LOAD ROYALSLIDER ON HOME PAGE
		if( is_page(107) || is_page(466) || is_page(393) || is_page(472) ) {
			// wp_enqueue_style( 'rs-css' );
			wp_enqueue_script( 'jq-easing' );
			wp_enqueue_script( 'rs-js' );
			wp_enqueue_script( 'rs-slider' );
			// wp_enqueue_style( 'scroll-css' );
			
			// wp_enqueue_script( 'tweenMax' );
			// wp_enqueue_script( 'timelineMax' );
			// wp_enqueue_script( 'scrollorama' );
			// wp_enqueue_script( 'scroll' );

			// wp_enqueue_script( 'in-view' );
			// wp_enqueue_script( 'in-view-page' );

            wp_enqueue_script( 'hide-scroll' );

            wp_enqueue_script( 'play-sound' );
		}
	}
}

/*********************
THEME SUPPORT
*********************/

// Adding WP 3+ Functions & Theme Support
function bones_theme_support() {

	// wp thumbnails (sizes handled in functions.php)
	add_theme_support( 'post-thumbnails' );

	// default thumb size
	set_post_thumbnail_size(125, 125, true);

	// wp custom background (thx to @bransonwerner for update)
	add_theme_support( 'custom-background',
	    array(
	    'default-image' => '',    // background image default
	    'default-color' => '',    // background color default (dont add the #)
	    'wp-head-callback' => '_custom_background_cb',
	    'admin-head-callback' => '',
	    'admin-preview-callback' => ''
	    )
	);

	// rss thingy
	add_theme_support('automatic-feed-links');

	// to add header image support go here: http://themble.com/support/adding-header-background-image-support/

	// adding post format support
	add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	);

	// wp menus
	add_theme_support( 'menus' );

	// registering wp3+ menus
	register_nav_menus(
		array(
			'main-nav' => __( 'The Main Menu', 'bonestheme' ),   // main nav in header
			'footer-links' => __( 'Footer Links', 'bonestheme' ), // secondary nav in footer
            'our-leadership' => __( 'Our Leadership', 'bonestheme' )
		)
	);
} /* end bones theme support */


/*********************
RELATED POSTS FUNCTION
*********************/

// Related Posts Function (call using bones_related_posts(); )
function bones_related_posts() {
	echo '<ul id="bones-related-posts">';
	global $post;
	$tags = wp_get_post_tags( $post->ID );
	if($tags) {
		foreach( $tags as $tag ) {
			$tag_arr .= $tag->slug . ',';
		}
		$args = array(
			'tag' => $tag_arr,
			'numberposts' => 5, /* you can change this to show more */
			'post__not_in' => array($post->ID)
		);
		$related_posts = get_posts( $args );
		if($related_posts) {
			foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
				<li class="related_post"><a class="entry-unrelated" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
			<?php endforeach; }
		else { ?>
			<?php echo '<li class="no_related_post">' . __( 'No Related Posts Yet!', 'bonestheme' ) . '</li>'; ?>
		<?php }
	}
	wp_reset_postdata();
	echo '</ul>';
} /* end bones related posts function */

/*********************
PAGE NAVI
*********************/

// Numeric Page Navi (built into the theme by default)
function bones_page_navi() {
  global $wp_query;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  echo '<nav class="pagination">';
  echo paginate_links( array(
    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format'       => '',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
    'prev_text'    => '&larr;',
    'next_text'    => '&rarr;',
    'type'         => 'list',
    'end_size'     => 3,
    'mid_size'     => 3
  ) );
  echo '</nav>';
} /* end page navi */

/*********************
RANDOM CLEANUP ITEMS
*********************/

// remove the p from around imgs (http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/)
function bones_filter_ptags_on_images($content){
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

// This removes the annoying […] to a Read More link
function bones_excerpt_more($more) {
	global $post;
	// edit here if you like
	return '...  <a class="excerpt-read-more" href="'. get_permalink($post->ID) . '" title="'. __( 'Read ', 'bonestheme' ) . get_the_title($post->ID).'">'. __( 'Read more &raquo;', 'bonestheme' ) .'</a>';
}



?>
