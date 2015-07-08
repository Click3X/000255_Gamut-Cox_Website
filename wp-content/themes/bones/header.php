<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js<?php if(is_page(107)) { echo " home-para"; } ?>"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>
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

		<script>
            // TEST FOR MOBILE DEVICE / TABLET
            var device;
            if( /Android|webOS|iPhone|iPod|iPad|BlackBerry/i.test(navigator.userAgent) ) {
                device = 'mobile';
            } else {
                device = 'desk';
            }

        </script>

        <?php
            // IF CONTACT PAGE, LOAD CONTACT PAGE PHP SCRIPTS FOR GOOGLE MAPS
            if(is_page(9)) {
                // include('php/LatLong.php');
                // include('php/parseAddress.php');
                echo '<script>var iconBase ="'; echo bloginfo('url'); echo '"</script>';
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
                    map: map,
                    icon: iconBase + "/img/map-marker.png"
                });

                sfMarker = new google.maps.Marker({
                    position: sfLatLong,
                    map: map,
                    icon: iconBase + "/img/map-marker.png"
                });

            }

            google.maps.event.addDomListener(window, "load", initialize);

        </script>';
            }

            // SERVE SMALLER IMAGES FOR MOBILE 
            // HOME PAGE
            // if(is_page(107)) {
            //     include('php/home-mobile-images.php');
            // } else {
            //     // ALL OTHER PAGES
            //     include('php/serve-mobile-images.php');
            // }

            // define sit url variables
            $root_url = 'http://gamut.media';

		?>

        <style>

            /* 0519/2015 ADDING FOOTER STYLE*/
            #inner-footer {
                background-color: #202020;
            }

            /* 0430/2015 ADDING YOUTUBE ICON IN THE FOOTER */
            .youtube {
                display: block;
                background: url("<?php echo $root_url ; ?>/img/youtube_icon.png") center center no-repeat;
                height: 46px;
                width: 46px;
            }
            .youtube:hover {
                background: url("<?php echo $root_url ; ?>/img/youtube_icon_hover.png") center center no-repeat;
            }

            /*TEMPERARY STAGING FOOTER ICONS FIX (DON'T PUSH TO LIVE)*/
            .facebook, .google-plus, .linked-in, .twitter {
                height: 46px;
                width: 46px;
            }


            @media(min-width: 811px) {
                .home-para, .page-id-107 {
                    overflow: hidden;
                }
                
                .fixed-header-bg {
                    padding-top:300px;
                }

                .fixed-header-bg > .article-header {
                    position: fixed;
                    top:62.5px;
                    width:100%;
                    z-index: -1;
                }
            }

            .wrap-wrap {
                width: 100%;
            }

            .wrap-wrap,
            #sidebar1 {
                background-color: white;
            }

            .arrow-right:hover,
            .arrow-right {
                white-space: nowrap;
            }

            #home-btn-careers,
            #home-btn-careers:hover,
            a#home-btn-difference,
            a#home-btn-difference:hover,
            #home-btn-service,
            #home-btn-service:hover,
            #group4 .subpage .gamut-btn,
            #group4 .subpage .gamut-btn:hover {
                white-space: nowrap;
                border: 0;
            }

            .subpage-wrap {
                border-bottom: 2px dashed #d8d8d8;
            }

            .subpage-wrap:last-of-type {
                border-bottom:0;
            }


            @media(max-width: 811px) {
                #home-btn-careers,
                a#home-btn-difference,
                #home-btn-service {
                    z-index: 10;
                    position: relative;
                }
            }


            @media(min-width: 811px) {
                #parallax-kieth .footer {
                    height:600px;
                }
            }

            @media (min-width: 1200px) {
                #parallax-kieth #group6 #careers-bg {
                    /*top: 174px;*/
                    top: 144px;
                }
            }

            @media (min-width: 1040px) {
                #parallax-kieth #group4 {
                    height: 850px;
                }
            }


            @media (min-width: 1060px) {
                #parallax-kieth .footer {
                    height: 530px;
                }
            }

        </style>

	</head>

	<body <?php body_class(); ?>>
        <!-- PRELOAD YOUTUBE ICONS FOR FOOTER -->
        <img src="<?php echo bloginfo('url').'/img/youtube_icon.png' ;?>" style="display: none">
        <img src="<?php echo bloginfo('url').'/img/youtube_icon_hover.png' ;?>" style="display: none">

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap cf">

					<div class="logo-holder clearfix">
						<a id="logo" href="<?php echo home_url(); ?>" rel="nofollow">
							<img src="<?php echo bloginfo('url').'/img/gamut_logo.png' ;?>" alt="logo">
						</a>
						<!-- // mobile nav -->
						<a id="mobile-btn" class="mobile-btn" href="#" rel="nofollow">&#9776;</a>
					</div>

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