 $(document).ready(function(){

 	// SignUp button Eventhandler for Modal
 	
 	var url = "/favoroutes/ui/createLocation_form.php";	
	
	$("#btn_newLocation").click(function(e){
		e.preventDefault();
		$.get(url, function(data) {
			$("#modal-register").html(data);
			$("#modal-register").modal('show');
		});

	});


/*	$("#btn_showAll").click(function(e){
		e.preventDefault();
		$.get(url, function(data) {
			$("#modal-register").html(data);
			$("#modal-register").modal('show');
		});

	});*/


});
