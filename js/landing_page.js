 $(document).ready(function(){

 	// SignUp button Eventhandler for Modal
 	
 	var url = "/favoroutes/ui/register_form.php";	
	
	$("#register_btn").click(function(e){
		e.preventDefault();
		$.get(url, function(data) {
			$("#modal-register").html(data);
			$("#modal-register").modal('show');
		});

	});
	
});

