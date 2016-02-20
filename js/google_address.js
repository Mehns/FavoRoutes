

	var geocoder;
	var map;

	function initialize(){
		geocoder = new google.maps.Geocoder();
		var latlng = new google.maps.LatLng(52.545301, 13.351772);
		var mapOptions = {
			zoom: 14,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
	}


	function codeAddress(){


		var address = document.getElementById("address").value;

		if(geocoder){
				geocoder.geocode({'address': address}, function (results, status){
					if (status == google.maps.GeocoderStatus.OK) {

						var postcode = extractFromAdress(results[0].address_components, "postal_code");
						var street = results[0].formatted_address;
						var latitude = results[0].geometry.location.lat();
						var longitude = results[0].geometry.location.lng();

						// check if location is within Berlin
						for (var i = 0; i < results[0].address_components.length; i++) {
									if(results[0].address_components[i].types[0] == "locality" ){
										
										if(results[0].address_components[i].long_name != 'Berlin'){
											errorMessage('Ort liegt nicht in Berlin');
											return false;
										}
									}
						}

			        	map.setCenter(results[0].geometry.location);
				        var marker = new google.maps.Marker({
				            map: map,
				            position: results[0].geometry.location
			        	});
				        


			      	} else {
			        	errorMessage('Fehler '+ status);
			      	}
			      	
			      	$('#street').val(street);
			      	$('#postcode').val(postcode);
			      	$('#latitude').val(latitude);
			      	$('#longitude').val(longitude);
				});
		}
	}

	function extractFromAdress(components, type){
	    for (var i=0; i<components.length; i++)
	        for (var j=0; j<components[i].types.length; j++)
	            if (components[i].types[j]==type) return components[i].long_name;
	    return "error";
	}
		
	function errorMessage(message){
		var label = $('#error_address');
		label.css("visibility","visible");
		label.text(message);
		$('#address').addClass('error-input');
		$('#button_google').addClass('btn-danger');
	}





