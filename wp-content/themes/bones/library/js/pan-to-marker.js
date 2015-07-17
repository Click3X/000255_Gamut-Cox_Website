// pan-to-marker
jQuery(document).ready(function($) {

	function goToMarker(event) {
		event.preventDefault();

		// GET MARDER ID FROM LOCATION ID 
		var markId = $(this).attr('id'),
		cityId;

		// GET CORRESPONDING LOCATION OBJECT FROM LOCATIONS ARRAY
		for (var i=0;i<locations.length;i++) {
			if(markId == locations[i].id) {
				cityId = locations[i].id;
				// console.log('This is cityId: ');
				console.log(cityId);
				// console.dir(locations[i]);
				var lat = locations[i]['lat'];
				var lng = locations[i]['lng'];

				console.log('This is lat lng:');
				console.log(lat);
				console.log(lng);

				console.log('This is the map:');
				console.dir(map);

				map.panTo(new google.maps.LatLng(lat,lng));

				// return false;
			}
		}
	}

	// CALL GOTO MARKER FUNCTION ON CLICK
	$('.city-map-link').click(goToMarker);

});