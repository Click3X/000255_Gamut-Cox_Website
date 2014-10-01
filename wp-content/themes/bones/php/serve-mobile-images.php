<?php // HEADER IMAGE STYLES 
echo '<style>';
    $post_id = get_queried_object_id();
    $key = 'header-image';
    $single = false;
    $meta_values = get_post_meta( $post_id, $key, $single );

    // SOME PAGES USE A DIFFERENT FIELD
    if(!$meta_values) {
        // echo 'We have no meta values for header-image';
        $key = 'header';
        $meta_values = get_post_meta( $post_id, $key, $single );                    
    }

    // echo 'Here are our Header values: ';
    // helper($meta_values);

    if($meta_values) {
        $mobile = wp_get_attachment_image_src( $meta_values[0], 'mobile');
        $mobile = $mobile[0];
        $tablet = wp_get_attachment_image_src( $meta_values[0], 'tablet');
        $tablet = $tablet[0];
        $desk = wp_get_attachment_image_src( $meta_values[0], 'full');
        $desk = $desk[0];

        echo '#page-header-'.$post_id .' {
            background-image:url("'.$mobile.'");
            background-repeat:no-repeat;
            background-size:cover; 
            background-position:50% 50%; 
            height:auto;
            min-height:119px;
        }
        @media(min-width:481px) {
            #page-header-'.$post_id .' {
                background-image:url("'.$tablet.'");
                background-size:cover;
                height:200px;
            }
        }
        @media(min-width:768px) {
            #page-header-'.$post_id .' {
                height:300px;
                background-position: 0 50%;
            }
        }
        @media(min-width:961px) {
            #page-header-'.$post_id .' {
                background-image:url("'.$desk.'");
            }
        }
        ';
    }

echo '</style>';
?>