<?php // HOME MOBILE IMAGES
echo '<style>';
    $img_sizes = array();
    $post_id = get_queried_object_id();
    $single = false;
    $home_imgs = array('careers-image', 'gamut-defined-bg', 'smart-service-image');


    foreach ($home_imgs as $key => $home_img) {
        if($home_img == 'gamut-defined-bg') {
            $img_sizes = array('home-p-mobile','home-p-tablet','full');
        } else {
            $img_sizes = array('para-bg-tablet','para-bg','para-bg');
        }

        $meta_values = get_post_meta( $post_id, $home_img, $single );

        if($meta_values) {
            
            $mobile = wp_get_attachment_image_src( $meta_values[0], $img_sizes[0] );
            $mobile = $mobile[0];
            $tablet = wp_get_attachment_image_src( $meta_values[0], $img_sizes[1] );
            $tablet = $tablet[0];
            $desk = wp_get_attachment_image_src( $meta_values[0], $img_sizes[2] );
            $desk = $desk[0];

            echo '.'. $home_img .' {
                background-image:url("'.$mobile.'");
                background-repeat:no-repeat;
                background-size: cover; 
            }
            @media(min-width:481px) {
                .'. $home_img .' {
                    background-image:url("'.$tablet.'");
                }
            }
            @media(min-width:811px) {
                .'. $home_img .' {
                    background-image:url("'.$desk.'");
                }
            }
            ';
        }

    } // END FOREACH LOOP

    // NEW BACKGROUND IMAGES LOADED AS MULTIPLE BACKGROUNDS
    $smart_meta_values = get_post_meta( $post_id, 'smart-service-image', $single );
    $smart = wp_get_attachment_image_src( $smart_meta_values[0], 'para-bg' );
    $smart = $smart[0];

    $career_meta_values = get_post_meta( $post_id, 'careers-image', $single );
    $career = wp_get_attachment_image_src( $career_meta_values[0], 'para-bg' );
    $career = $career[0];

    echo '#charles-group6 .charles-parallax__layer.charles-parallax__layer--back {
        background-image: url('.$career.'), url('.$smart.');
    }';

echo '</style>';
?>