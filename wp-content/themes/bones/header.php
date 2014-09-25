<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js<?php if(is_page(107)) { echo " home-para"; } ?>"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php //wp_title(''); ?>

		<?php
			echo empty( $post->post_parent ) ? 'Gamut | '. get_the_title( $post->ID ) : 'Gamut | '. get_the_title( $post->post_parent ).' | ' .get_the_title( $post->ID ) ;
		?>


		</title>


		<!-- LOAD TYPEKIT FONTS -->
		<script src="//use.typekit.net/mno4etl.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics 

	

			// if(get_field('social_media_links', 'options')):
			// 	// SOCIAL MEDIA LINKS
			// 	echo '<style>';

			// 	while(has_sub_field('social_media_links', 'options')):
					
			// 		 $icon = get_sub_field('icon');
			// 		 $hover = get_sub_field('hover');

			// 		 $class = '.'.cleanString(get_sub_field('title'));
			// 		 $class_hover = '.'.cleanString(get_sub_field('title')).':hover';
					 
			// 		 echo $class.' {background-image:url("'.$hover.'"); background-image:url("'.$icon.'"); background-repeat:no-repeat; display:block; width:44px; height:44px; background-size:cover; }'."\n";

			// 		 echo $class_hover.' {background-image:url("'.$hover.'"); background-repeat:no-repeat; display:block; width:44px; height:44px; background-size:cover; transition: background-image 0.2s; }'."\n";

			// 	endwhile;

			// 	echo '</style>';
				
			// endif;

			// wp_reset_postdata();

		?>

		<style>

			

		</style>

		<script>
            // TEST FOR MOBILE DEVICE / TABLET
            var device;
            if( /Android|webOS|iPhone|iPod|iPad|BlackBerry/i.test(navigator.userAgent) ) {
                device = 'mobile';
            } else {
                // device = 'desk';
                device = 'mobile';
            }

        </script>

        <?php

        if(is_page(9)) {
			echo '<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
        <script>
            var nycLatLong = new google.maps.LatLng(40.753519, -73.969971),
            sfLatLong = new google.maps.LatLng(37.794108,-122.39511),
            cenUs = new google.maps.LatLng(40.753519, -100.969971),
            map,
            mapOptions,
            marker,
            sfMarker;

            function initialize() {

                mapOptions = {
                    zoom: 17,
                    zoomControl: true,
                    scaleControl: false,
                    scrollwheel: false,
                    disableDoubleClickZoom: true,
                    center:nycLatLong,
                    disableDefaultUI: true,
                    styles: [
                        {"stylers":[
                            {"hue":"#ff1a00"},
                            {"invert_lightness":false},
                            {"saturation":-100},
                            {"lightness":33},
                            {"gamma":0.5}
                            ]
                        },
                        {"featureType":"water",
                        "elementType":"geometry",
                        "stylers":[
                            {"color":"#9ba0a5"}
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "stylers": [
                              { "visibility": "on" },
                              { "color": "#ffffff" }
                            ]
                          },
                          {
                            "featureType": "road.local",
                            "stylers": [
                              { "color": "#ffffff" },
                              { "visibility": "on" }
                            ]
                          }
                    ]
                };

                map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

                marker = new google.maps.Marker({
                    position: nycLatLong,
                    map: map
                });

				sfMarker = new google.maps.Marker({
                    position: sfLatLong,
                    map: map
                });

            }

            google.maps.event.addDomListener(window, "load", initialize);

        </script>';
		}


		?>


	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap cf">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<div class="logo-holder clearfix">
						<!-- <div class="logo-holder-new"> -->
							<a id="logo" href="<?php echo home_url(); ?>" rel="nofollow">
								<img src="<?php echo bloginfo('url').'/img/gamut_logo.png' ;?>" alt="logo">
							</a>
						<!-- </div> -->
						<!-- // mobile nav -->
						<a id="mobile-btn" class="mobile-btn" href="#" rel="nofollow">&#9776;</a>
						<!-- <h2 id="tagline">SMART MEDIA FROM COX</h2> -->
					</div>



					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>
					

					<nav id="main-nav" class="main-nav clearfix" role="navigation">
					<?php wp_nav_menu(array(
	    					'container' => false,                           // remove nav container
	    					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
	    					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
	    					'menu_class' => 'nav top-nav cf',               // adding custom nav class
	    					'theme_location' => 'main-nav',                 // where it's located in the theme
	    					'before' => '',                                 // before the menu
	        			'after' => '',                                  // after the menu
	        			'link_before' => '',                            // before each link
	        			'link_after' => '',                             // after each link
	        			'depth' => 0,                                   // limit the depth of the nav
	    					'fallback_cb' => ''                             // fallback function (if there is one)
							)); ?>

					</nav>

				</div>

			</header>
