<?php 
// PARSE ADDRESS

// VARIABLE TO HOLD TEAM MEMBERS
$locations = array();

if (have_posts()) : while (have_posts()) : the_post();
    
    if(get_field('location-list')) {
        $k=0;
        while(has_sub_field('location-list')) {

            $title = get_sub_field('location_title');
            $street_address = get_sub_field('street_address');
            $street = str_replace(' ', '+', $street_address);
            $cit = get_sub_field('city');
            $city = str_replace(' ', '+', $cit);
            $state = get_sub_field('state');
            $zip = get_sub_field('zip');
            $phone = get_sub_field('phone');
            $additional_address_info = get_sub_field('additional_address_info');


            // GOOGLE MAP FORMAT ADDRESS EXAMPLE
            // $address = "1600+Amphitheatre+Parkway,+Mountain+View,+CA";
            $address = $street.',+'.$city.',+'.$state;

            // PUT INTO LOCATIONS ARRAY
            $locations[$k]['title'] = $title;
            $locations[$k]['street_address'] = $street_address;
            $locations[$k]['additional_address_info'] = $additional_address_info;
            $locations[$k]['city'] = $city;
            $locations[$k]['state'] = $state;
            $locations[$k]['zip'] = $zip;
            $locations[$k]['phone'] = $phone;
            $locations[$k]['additional_info'] = $additional_info;


            $locations[$k]['address'] = $address;
            $locations[$k]['id'] = cleanAddress($cit);

            $k++;
        }

    }

    endwhile;

endif;

wp_reset_postdata();

// GET LAT LONG FOR EACH CITY
foreach ($locations as $key => $location) {
    $latlong = Get_LatLng_From_Google_Maps($location['address']);
    $locations[$key]['lat'] = $latlong['lat'];
    $locations[$key]['lng'] = $latlong['lng'];
}


// JSON ENCODE LOCATIONS TO USE ON FRONT END
$jsonLocations = json_encode($locations);
echo '<script>var locations = '; echo $jsonLocations; echo ';</script>';
// echo '<script>console.log("These are the locations: "); console.dir(locations); </script>';

// echo '<h1>locations';
// helper($locations);
// echo '</h1>';
?>