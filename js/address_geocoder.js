// on dom ready
var geocoder;
var region = 'us';
// create new geocoder object
geocoder = new google.maps.Geocoder();

$(document).ready(function(){
	
	// if the address form field exists
	if($('#address').length) {
		// add an onBlur event
		$('#address').blur(function(){
			// get the entered address
			var address = $(this).val();
			
			// if address is not empty
			if(address != '') {
				
				// do the address lookup
				address_lookup(address,region);
				
			}
		});
		
		
		
		
		
		
	}
		
});


/**
 * Lookup an address
 * @param string address
 * @param string region
 */
function address_lookup(address,region) {
	// set default region
	if(region==null || region == '') {
		region = 'us';
	}

	// address not empty
	if(address != '') {
		$('#ajax_msg').html('<p>Loading...</p>');
		// lookup the address
		geocoder.geocode( {'address':address,'region':region}, function(results, status) {
			// if the address was found
			if(status == google.maps.GeocoderStatus.OK) {
				$('#ajax_msg').html('<p>Done</p>');
				// insert lat/long into form
				$('#latitude').val( results[0].geometry.location.lat().toFixed(6) );
				$('#longitude').val( results[0].geometry.location.lng().toFixed(6) );				
				
			} else {
				// display error
				$('#ajax_msg').html('<p>Geocoder failed to retrieve address: '+status+'</p>');
			}
		});
	}

}



