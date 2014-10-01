<?php 
// PARSE ADDRESS

// VARIABLE TO HOLD TEAM MEMBERS
$locations = array();
$additional_info = '';
$additional_address_info='';
$phone='';

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

echo '<script>var iconBase ="'; echo bloginfo('url'); echo '"</script>';
            echo '<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
            <script>
                var nycLatLong = new google.maps.LatLng(40.753519, -73.969971),
                sfLatLong = new google.maps.LatLng(37.794108,-122.39511),
                cenUs = new google.maps.LatLng(40.753519, -90.969971),
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
                    
                    function newMapMarker(location) {
                        var latlng = new google.maps.LatLng(location["lat"], location["lng"]);
                        var newMarker = new google.maps.Marker({
                            position: latlng,
                            map: map,
                            icon: iconBase + "/img/map-marker.png"
                        });
                        return newMarker;
                    }

                    locations.forEach(newMapMarker);

                }

                google.maps.event.addDomListener(window, "load", initialize);

            </script>';

            // END GOOGLE SCRIPS CODE

?>