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
            <a class="a2a_button_twitter twitter">
          <img src="//farm3.staticflickr.com/2886/12004329883_8daa4af904_o.png" border="0" alt="Twitter" width="54" height="55"/>
      </a>
      <a class="a2a_button_facebook facebook">
          <img src="//farm3.staticflickr.com/2863/12004329833_ddcd67ff4a_o.png" border="0" alt="Facebook" width="54" height="55"/>
      </a>
      <!--
      <a class="a2a_button_google_plus google-plus">
          <img src="//farm4.staticflickr.com/3774/12004033365_8965d86637_o.png" border="0" alt="Google+" width="54" height="55"/>
      </a>
      -->
      <a class="a2a_button_linkedin linked-in">
          <img src="//farm4.staticflickr.com/3774/12004033365_8965d86637_o.png" border="0" alt="Linked In" width="54" height="55"/>
      </a>
      <a class="a2a_dd more cf" href="https://www.addtoany.com/share_save">
          <!--
          <img src="//farm8.staticflickr.com/7326/12005120763_a44dc82111_o.png" border="0" alt="Share" width="54" height="55"/>
          -->
          <span class="more-text"><span class="more-inside">More</span><img src="'.get_bloginfo('url' ).'/img/flip-arrow.png" class="more-inside" alt="more"></span>
      </a>
  </div>';
}
// EMAIL ADDRESS ANTI-SPAM
// function email_encode_function( $atts, $content ){
//   return '<a href="'.antispambot("mailto:".$content).'">'.antispambot($content).'</a>';
// }
// add_shortcode( 'email', 'email_encode_function' );

/* DON'T DELETE THIS CLOSING TAG */ ?>
