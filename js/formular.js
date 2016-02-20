   

/*$(document).ready(function(){
    	resetForm();

        $("#button_google").click( function(){
        	codeAddress();
        });

        $("#button_reset").click(resetForm);


        //clear search input
		$('#address').focus(clearField);


    });*/
	
function errorMessage(message){
	var label = $('#error_address');
	label.css("visibility","visible");
	label.text(message);
	$('#address').addClass('error-input');
	$('#button_google').addClass('btn-danger');
}

function resetForm(){
	$('.form-control').val("");
}

function clearField(){
	$('#error_address').css("visibility","hidden");
	$(this).val("");
	$(this).removeClass('error-input');
	$('#button_google').removeClass('btn-danger').addClass('btn-primary');
}








/*function checkAddress(){
	var street 		 = document.getElementById("street").value;
	var streetnumber = document.getElementById("streetnumber").value;
	var postcode     = document.getElementById("postcode").value;
	var place        = document.getElementById("place").value;

	// check if streetnumber is a number
	if(isNaN(streetnumber)) {
		alert('Streetnumber is not a number');
		return false;
	}

	// check if postcode is a number
	if(isNaN(postcode)) {
		alert('Streetnumber is not a number');
		return false;
	}
		
	// check if city is Berlin
	if(!(place.toLowerCase() == "berlin")) {
		alert('City is not Berlin!');
		return false;
	}

	postcode = parseInt(postcode);

	// check if postcode is within berlin
	if(postcode < 10000 || postcode >= 15000 ) {
		alert('Postcode is wrong!');
		return false;
	}


	// return address in one string
	return street+" "+streetnumber+" "+postcode+" "+place;
}*/


