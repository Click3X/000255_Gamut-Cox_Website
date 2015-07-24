<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

// LOAD BONES CORE (if you remove this, the theme will break)
require_once( 'library/bones.php' );

// USE THIS TEMPLATE TO CREATE CUSTOM POST TYPES EASILY
require_once( 'library/custom-post-type.php' );

// CUSTOMIZE THE WORDPRESS ADMIN (off by default)
// require_once( 'library/admin.php' );

/*********************
LAUNCH BONES
Let's get everything up and running.
*********************/

function bones_ahoy() {

  // let's get language support going, if you need it
  load_theme_textdomain( 'bonestheme', get_template_directory() . '/library/translation' );

  // launching operation cleanup
  add_action( 'init', 'bones_head_cleanup' );
  // A better title
  add_filter( 'wp_title', 'rw_title', 10, 3 );
  // remove WP version from RSS
  add_filter( 'the_generator', 'bones_rss_version' );
  // remove pesky injected css for recent comments widget
  add_filter( 'wp_head', 'bones_remove_wp_widget_recent_comments_style', 1 );
  // clean up comment styles in the head
  add_action( 'wp_head', 'bones_remove_recent_comments_style', 1 );
  // clean up gallery output in wp
  add_filter( 'gallery_style', 'bones_gallery_style' );

  // enqueue base scripts and styles
  add_action( 'wp_enqueue_scripts', 'bones_scripts_and_styles', 999 );
  // ie conditional wrapper

  // launching this stuff after theme setup
  bones_theme_support();

  // adding sidebars to Wordpress (these are created in functions.php)
  add_action( 'widgets_init', 'bones_register_sidebars' );

  // cleaning up random code around images
  add_filter( 'the_content', 'bones_filter_ptags_on_images' );
  // cleaning up excerpt
  add_filter( 'excerpt_more', 'bones_excerpt_more' );

} /* end bones ahoy */

// let's get this party started
add_action( 'after_setup_theme', 'bones_ahoy' );


/************* OEMBED SIZE OPTIONS *************/

if ( ! isset( $content_width ) ) {
	$content_width = 640;
}

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );

// SET IMAGE SIZES FOR EMPLOYEE THUMBMNIAL AND LARGE PIC, - used on 'who-we-are' page
add_image_size( 'emp-thumb', 180, 180, true );
add_image_size( 'emp-large', 250, 250, true );

// SET IMAGES FOR INDIVIDUAL EMPLOYEE PAGE
add_image_size( 'emp-individual', 290, 440, true );

// SET IMAGE SIZE FOR PARALLAX BACKGROUND
add_image_size( 'para-bg', 800, 533, true );

// FEAT IMG PREVIEW NEXT TO EXCERPTS
add_image_size( 'feat-excerpt', 800, 200, array('center', 'center') );

/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

add_filter( 'image_size_names_choose', 'bones_custom_image_sizes' );

function bones_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'bones-thumb-600' => __('600px by 150px'),
        'bones-thumb-300' => __('300px by 100px'),
    ) );
}

/*
The function above adds the ability to use the dropdown menu to select
the new images sizes you have just created from within the media manager
when you add media to your content blocks. If you add more image sizes,
duplicate one of the lines in the array and name it according to your
new image size.
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Sidebar 1', 'bonestheme' ),
		'description' => __( 'The first (primary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __( 'Sidebar 2', 'bonestheme' ),
		'description' => __( 'The second (secondary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!


/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>
  <div id="comment-<?php comment_ID(); ?>" <?php comment_class('cf'); ?>>
    <article  class="cf">
      <header class="comment-author vcard">
        <?php
        /*
          this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
          echo get_avatar($comment,$size='32',$default='<path_to_url>' );
        */
        ?>
        <?php // custom gravatar call ?>
        <?php
          // create variable
          $bgauthemail = get_comment_author_email();
        ?>
        <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=40" class="load-gravatar avatar avatar-48 photo" height="40" width="40" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
        <?php // end custom gravatar call ?>
        <?php printf(__( '<cite class="fn">%1$s</cite> %2$s', 'bonestheme' ), get_comment_author_link(), edit_comment_link(__( '(Edit)', 'bonestheme' ),'  ','') ) ?>
        <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'bonestheme' )); ?> </a></time>

      </header>
      <?php if ($comment->comment_approved == '0') : ?>
        <div class="alert alert-info">
          <p><?php _e( 'Your comment is awaiting moderation.', 'bonestheme' ) ?></p>
        </div>
      <?php endif; ?>
      <section class="comment_content cf">
        <?php comment_text() ?>
      </section>
      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </article>
  <?php // </li> is added by WordPress automatically ?>
<?php
} // don't remove this bracket!


// CHARLES HELPER FUNCTION
function helper($var) {
  $type = gettype ( $var );
  echo '<h2>Var is type: '.$type.'.</h2>';

  if($type == 'array') {
    echo '<pre>'.print_r($var).'</pre>';  
  } elseif($type == 'object') {
    echo '<pre>'.var_dump($var).'</pre>';  
  }
  
}


/*
This is a modification of a function found in the
twentythirteen theme where we can declare some
external fonts. If you're using Google Fonts, you
can replace these fonts, change it in your scss files
and be up and running in seconds.
*/
function bones_fonts() {
  wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
  wp_enqueue_style( 'googleFonts');
}

add_action('wp_print_styles', 'bones_fonts');


// ADD 'CLIENT INFO' TAB TO ADMIN MAIN MENU
function my_acf_options_page_settings( $settings )
{
  $settings['title'] = 'Client Info';
  $settings['pages'] = array('Contact Information');

  return $settings;
}

add_filter('acf/options_page/settings', 'my_acf_options_page_settings');

// CLEAN STING FUNCTION FOR FORMATING STRINGS FOR CSS AND JS USE
function cleanString($string){
  $search = ' ';
  $replace = '-';
  $newString = str_replace($search, $replace, $string);
  $newString = strtolower($newString);

  return $newString;

}

// CHECK FOR IE
function ae_detect_ie() {
    if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        return true;
    else
        return false;
}

// PRINT CAT TITLE
function printCatTitle() {
  // GET GLOBAL POST VAR TO GET CAT VALUES
  Global $post;
  $post_cats = array();
  $post_cats = wp_get_post_categories($post->ID);

  // TAKE OUT FEATURED CATEGORY (31) FROM OUR POST CATS VAR
  $del_val = 31;
  if(($key = array_search($del_val, $post_cats)) !== false) {
    unset($post_cats[$key]);
  }
  // RESET INDEX IN ARRAY
  $post_cats = array_values($post_cats);
  // GET FIST INDEX FORT CAT TITLE
  $cat_title = get_cat_name( $post_cats[0] );

  echo '<a class="page-link" href="'.get_category_link( $post_cats[0] ).'"><h2 id="sidebar-title">'.$cat_title.'</h2></a>';

  wp_reset_query();
}

// CLEAN ADDRESS
function cleanAddress($string){
  $search = '/[^[:alpha:]]/';
  $space = ' ';
  $replace = '-';
  $newString = str_replace($search, $replace, $string);
  $newString = strtolower($newString);
  $newString = str_replace($space, $replace, $newString);

  return $newString;

}


// HIGHLIGHT CATEGORY IN SIDEBAR MENU ON SINGLE PAGES
function sgr_show_current_cat_on_single($output) {

  global $post;

  if( is_single() ) {

    $categories = wp_get_post_categories($post->ID);

    foreach( $categories as $catid ) {
      $cat = get_category($catid);
      // Find cat-item-ID in the string
      if(preg_match('#cat-item-' . $cat->cat_ID . '#', $output)) {
        $output = str_replace('cat-item-'.$cat->cat_ID, 'cat-item-'.$cat->cat_ID . ' current-cat', $output);
      }
    }

  }
  return $output;
}

add_filter('wp_list_categories', 'sgr_show_current_cat_on_single');


// PRINT CUSTOM ICONS
function printCustomIcons() {
  echo '<div class="a2a_kit cf">
            <span class="share-text">Share:</span>
            <a class="a2a_button_twitter sprite sprite-twitter"></a>
            <a class="a2a_button_facebook sprite sprite-facebook"></a>
            <!--
            <a class="a2a_button_google_plus sprite sprite-google-plus"></a>
            -->
            <a class="a2a_button_linkedin sprite sprite-linked-in"></a>
            <a class="a2a_button_email sprite sprite-email"></a>
            <a class="a2a_dd more cf" href="https://www.addtoany.com/share_save">
              <span class="more-text"><span class="more-inside">More</span><img src="'.get_bloginfo('url' ).'/img/flip-arrow.png" class="more-inside" alt="more"></span>
            </a>
      </div>';
}

// EMAIL ADDRESS ANTI-SPAM
// function email_encode_function( $atts, $content ){
//   return '<a href="'.antispambot("mailto:".$content).'">'.antispambot($content).'</a>';
// }
// add_shortcode( 'email', 'email_encode_function' );

// TESTS FOR 'TITLE LABEL OVERRIDE FIELD', IF PRESENT, THE 'TITLE OVERRIDE FIELD' IS USED INSTEAD OF THE_TITLE() FUNCTION WHICH PRINTS OUT PAGE TITLE
function titleOverride() {
  // if( get_field('title_label_override') ) {
  if( get_field('sub-page-title') ) {
    echo get_field('sub-page-title');
  } else {
    echo '<h1>'.get_the_title().'</h1>';
  }
}


/**
 * @author Pieter Goosen
 * @license GPLv2 
 * @link http://www.gnu.org/licenses/gpl-2.0.html
 *
 * The functions on this page returns the next and previous post links
 * depending what is been set
 *
 * @return function single_post_navigation()
*/ 

/**
 * Register six new query variables aq, ,cq, tq, ttq, taq, and sq set by 
 * the term_referer_link function
 *
 * @see http://codex.wordpress.org/WordPress_Query_Vars
 *
*/ 
add_filter( 'query_vars', function ( $vars ) {

    $vars[] = 'cq'; // Will hold category ID
    $vars[] = 'tq'; // Will hold taxonomy name
    $vars[] = 'ttq'; // Will hold term slug
    $vars[] = 'sq'; // Will hold search query
    $vars[] = 'aq'; // Will hold author name
    $vars[] = 'taq'; // Will hold tag id


    return $vars;

}, 10, 3 );

/**
 * Conditional tag to check whether or not a query_var has been set
 *
 * @param string $query_var query_var to check
 * @return (bool) true if query_var exists, false on failure
 *
*/
function has_query_var( $query_var ) {

    $array = $GLOBALS['wp_query']->query_vars;

    return array_key_exists( $query_var, $array );

}

/**
 * For posts being clicked from a category page, the query_var, 'cq' is set. 
 * 'cq' holds the category ID
 *
 * Set two query_var, 'tq' and 'ttq' to single posts that was clicked on from 
 * taxonomy pages. 'tq' holds the taxonomy name while 'ttq' holds the term name
 *
 * For search queries, the query_var, 'sq' is set to single posts that was clicked on from 
 * the search page. 'sq' holds the search query value
 *
 * For posts being clicked from an author page, the query_var, 'aq' is set. 
 * 'aq' holds the author ID
 *
 * For posts being clicked from a tag page, the query_var, 'taq' is set. 
 * 'taq' holds the tag ID
 *
 * This function replaces the wp_get_referer() and $_SERVER['HTTP_REFERER']
 * functions that are not very reliable
 * @see php.net manual $_SERVER['HTTP_REFERER']
 * @link http://php.net/manual/en/reserved.variables.server.php
 *
 * @uses add_query_arg()
 * @uses post_link
 * @uses post_type_link
 *
*/
add_filter( 'post_type_link', 'term_referer_link', 10, 3 );
add_filter( 'post_link', 'term_referer_link', 10, 3 );

function term_referer_link( $permalink, $post ) {

    switch ( true ) {

        case ( is_category() ):

            $category = get_queried_object_id();

            $args = [
                'cq'    => $category, 
            ];

            break;
        case ( is_tax() ):

            $term = get_queried_object();

            $args = [
                'tq'    => $term->taxonomy, 
                'ttq'   => $term->slug
            ];

            break;

        case ( is_search() ):

            $search = get_search_query();

            $args = [
                'sq'    => $search, 
            ];

            break;

        case ( is_author() ):

            $author = get_queried_object_id();

            $args = [
                'aq'    => $author,
            ];

            break;

        case ( is_tag() ):

            $tag = get_queried_object_id();

            $args = [
                'taq'   => $tag,
            ];

            break;

    }

    if( isset( $args ) ) { 

        $permalink  = add_query_arg( $args, $permalink );

    }

    return $permalink;

}

/**
 * @access private
 * This function is marked private and should not be used in any other functions
 *
 * This is a helper function for the main navigation function 
 * 
 * This function checks if any of the query variables is set in the single
 * post page URL. If they exists, the values are retrieved that was set
 * by the query variables
 *
 * This query variables is converted into query arguments for the query that will
 * be used to determine the current post position and the posts adjacent to the
 * current post which will translate in the next and previous post. 
 * 
 * When no query variables are present, and empty array of argument is returned
 * 
 * @uses has_query_var()
 * @return (array) $add_query_args_to_args Query variable to determine the next/previous post links
 * @see http://codex.wordpress.org/Function_Reference/add_query_arg
 *
*/
function _query_vars_to_query_args() {

    switch ( true ) {

        case ( has_query_var( 'cq' ) ): // For category referrer

            $category = get_query_var( 'cq' );

            $add_query_args_to_args = [
                'cat' => $category,
            ];

            break;

        case ( has_query_var( 'tq' ) && has_query_var( 'ttq' ) ): // For taxonomy term referrer

            $taxonomy   = get_query_var( 'tq' );
            $term       = get_query_var( 'ttq' );

            $add_query_args_to_args = [
                'tax_query' => [
                    [
                        'taxonomy'          => $taxonomy,
                        'field'             => 'slug',
                        'terms'             => $term,
                        'include_children'  => false,
                    ],
                ],
            ];

            break;

        case ( has_query_var( 'sq' ) ): // For search referrer

            $search = get_query_var( 'sq' );

            $add_query_args_to_args = [
                's' => $search,
            ];

            break;

        case ( has_query_var( 'aq' ) ): // For author referrer

            $author = get_query_var( 'aq' );

            $add_query_args_to_args = [
                'author' => $author,
            ];

            break;

        case ( has_query_var( 'taq' ) ): // For tag referrer

            $tag = get_query_var( 'taq' );

            $add_query_args_to_args = [
                'tag_id' => $tag,
            ];

            break;

        default: // Default: returns empty array on any other archive or homepage

            $add_query_args_to_args = [];

            break;

    }

    return $add_query_args_to_args;

}
/**
 * @access private
 * This function is marked private and should not be used in any other functions
 *
 * This is a helper function for the main pagination function. This function 
 * checks if the defined query variables has been set in the URL of a single
 * post
 * 
 * If any of the query variables are found on any given single post page, then 
 * these query variables will be set to the next and previous post links according
 * to the single post's query variables
 * 
 * This way, next and previous posts will be shown from the same category, term, 
 * search query or author archive from which the original single post was referred 
 * from. 
 *
 * If a single post was referred from any other archive or main page, these query 
 * variables will not be set, and function will default to an empty array and no
 * query variables will be set to the next and previous post links
 *
 * @uses has_query_var()
 * @return (array) $qv Query variable to add to next/previous post links
 * @see http://codex.wordpress.org/Function_Reference/add_query_arg
 *
 * @todo Other archives can be added later
*/
function _add_query_vars_to_nav_links() {

    switch ( true ) {

        case ( has_query_var( 'cq' ) ): // For category referrer

            $category = get_query_var( 'cq' );

            $qv = [
                'cq'    => $category, 
            ];

            break;

        case ( has_query_var( 'tq' ) && has_query_var( 'ttq' ) ): // For taxonomy term referrer

            $taxonomy   = get_query_var( 'tq' );
            $term       = get_query_var( 'ttq' );

            $qv = [
                'tq'    => $term->taxonomy, 
                'ttq'   => $term->slug
            ];

            break;

        case ( has_query_var( 'sq' ) ): // For search referrer

            $search = get_query_var( 'sq' );

            $qv = [
                'sq'    => $search, 
            ];

            break;

        case ( has_query_var( 'aq' ) ): // For author referrer

            $author = get_query_var( 'aq' );

            $qv = [
                'aq'    => $author,
            ];

            break;

        case ( has_query_var( 'taq' ) ): // For tag referrer

            $tag = get_query_var( 'taq' );

            $qv = [
                'taq'   => $tag,
            ];

            break;


        default: // Default: returns empty array on any other archive or homepage

            $qv = [];

            break;

    }

    return $qv;

}

/**
 * This function returns navigation links to the next/previous single post
 * There are choices to which taxonomy to use, and whether adjacent posts should
 * be of the same term or not
 * 
 * When in_same_term is set to true, you have a choice to use the parent term or
 * child term if a post belongs to both. If the parent term is not available, the child term 
 * is automatically used
 *
 * @param array $defaults An array of key => value arguments. Defaults below 
 * - bool in_same_term      Whether or not next/previous post should be in the same term Default true
 * - bool parent_term       If in_same_term is true, should the parent or child terms be used Default true
 * - string/array taxonomy  The taxonomy from which terms to use Default category
 * - string previous_text   Text to display with previous post Default 'Previous post'
 * - string next_text       Text to display with next post Default 'Next post'
 *
 * @return string $links
*/ 
function get_single_post_navigation( $args = [] ) {

    // Sets the default arguments for default usage
    $defaults = [
        'in_same_term'      => true,
        'parent_term'       => true,
        'post_types'         => '',
        'taxonomy'          => 'category',
        'previous_text'     => __( 'Previous post' ),
        'next_text'         => __( 'Next post' ),
    ];

    // Merges the default arguments with user defined variables
    $args = wp_parse_args( $args, $defaults );

    /**
     * Get the currently displayed single post. For this use 
     * get_queried_object() as this is more safe than the global $post
     *
     * The $post global is very easily changed by any poorly written custom query
     * or function, and is there for not reliable
     *
     * @see Post below on WPSE for explanation
     * @link http://wordpress.stackexchange.com/q/167706/31545
    */ 
    $single_post = get_queried_object();

    /**
     * Use the post type of the current post or post types entered in args
     *
    */ 
    $post_type   = ( empty( $args['post_types'] ) ) ? $single_post->post_type : $args['post_types'];


    // Set the variable query variables according to condition
    if( !empty( _query_vars_to_query_args() ) ) {

        $query_args = _query_vars_to_query_args(); 

    }elseif( true === $args['in_same_term'] ) {

        $terms =  wp_get_post_terms( $single_post->ID, $args['taxonomy'] ); 

        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){

            foreach ( $terms as $term ) {
                if( $term->parent === 0 ) {
                    $parent[] = $term;
                }else{
                    $child[] = $term;
                }
            }   

            $term_id = ( $args['parent_term'] === true && isset( $parent ) ) ? $parent[0]->term_id : $child[0]->term_id;

            $query_args = [ 
                'tax_query' => [
                    [
                        'taxonomy'          => $args['taxonomy'],
                        'field'             => 'term_id',
                        'terms'             => $term_id,
                        'include_children'  => false,
                    ],
                ],
            ];
        }

    }else{

        $query_args = [];

    }

    // Default arguments to use with all the conditional statements above
    $default_query_args = [ 
        'post_type'         => $post_type,
        'fields'            => 'ids',
        'posts_per_page'    => -1,
    ];

    // Merges the default arguments with the arguments from the conditional statement
    $combined_args = wp_parse_args( $query_args, $default_query_args );

    $q = new WP_Query( $combined_args );

    // Get the current post position. Will be used to determine adjacent posts
    $current_post_position = array_search( $single_post->ID, $q->posts );

    // Get the returned values from '_add_query_vars_to_nav_links()' to build links
    $get_qv = _add_query_vars_to_nav_links(); 

    // Get the next/older post ID
    if ( array_key_exists( $current_post_position + 1 , $q->posts ) ) {
        $next = $q->posts[$current_post_position + 1];
    }

    // Get post title link to the next post
    if( isset( $next ) ) {

        $next_post      = get_post( $next );
        $next_post_link = ( !empty( $get_qv ) ) ? add_query_arg( $get_qv, get_permalink( $next ) ) : get_permalink( $next );
        // $next_title     = '<span class="meta-nav">' . $args['next_text'] . ': </span><a href="' . $next_post_link . '">' . $next_post->post_title . '</a></br>';
        $next_title     = '<a href="' . $next_post_link . '" rel="next">Next Post</a>';

    }else{

        $next_title     = '';

    }

    // Get the previous/newer post ID
    if ( array_key_exists( $current_post_position - 1 , $q->posts ) ) {
        $previous = $q->posts[$current_post_position - 1];
    }

    // Get post title link to the previous post
    if( isset( $previous ) ) {

        $previous_post      = get_post( $previous );
        $previous_post_link = ( !empty( $get_qv ) ) ? add_query_arg( $get_qv, get_permalink( $previous ) ) : get_permalink( $previous );
        // $previous_title     = '<span class="meta-nav">' . $args['previous_text'] . ': </span><a href="' . $previous_post_link . '">' . $previous_post->post_title . '</a></br>';
        $previous_title     = '<a href="' . $previous_post_link . '" rel="prev">Previous Post</a>';

    }else{

        $previous_title     = '';

    }

    // Create the next/previous post links
    $links  = '<nav class="navigation post-navigation" role="navigation">';
    $links .= '<div class="nav-links">';
    $links .= $previous_title;
    $links .= $next_title;
    $links .= '</div><!-- .nav-links -->';
    $links .= '</nav><!-- .navigation -->';

    // Returns the post links with HTML mark-up
    return $links;

}

/** 
 * This function is simply just a wrapper for the main navigation
 * function and echo's the returned values from the main navigation
 * function
*/ 
function single_post_navigation( $args = [] ) {

    echo get_single_post_navigation( $args );

}

/* DON'T DELETE THIS CLOSING TAG */ ?>
