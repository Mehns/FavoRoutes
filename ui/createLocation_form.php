	<div class="modal-dialog" id="modal-register">
        <div class="modal-content" >
		    <div class="modal-header">
		        <a class="close" data-dismiss="modal">×</a>
		        <h4 class="modal-title">Create new Location</h4>
		    </div>
		    <div class="modal-body">



<form  action="" method="post" role="form">

			<div class="form-group">
				<label  for="name">name <span style="color:red">*</span></label>
				<input type="text" class="form-control" id="name" name="name" value="">				
			</div>

			<div class="form-group">
				<label class="form-label" for="imageSelector">image</label>
				<img id="titleImage" src="../img/website/placeholder.jpg" class="img-responsive centered" ><br>

				<label class="btn btn-success" for="imageSelector">
	    			<input id="imageSelector" name="image" type="file" style="display:none;"> Choose File
				</label>
				<button type="button" class="btn btn-primary">Upload</button>

			</div>



			<div class="form-group">
				<label class="form-label" for="description">description <span style="color:red">*</span></label>
					<textarea class="form-control" rows="5" id="description" name="description"></textarea>
			</div>

			<label class="form-label" for="address">address </label>
			<div class="input-group">
				
		      <input type="text" class="form-control" id="address" placeholder="Search for...">
		      <span class="input-group-btn">
		        <button class="btn btn-primary" type="button" id="button_google">Go!</button>
		      </span>


		    </div><!-- /input-group -->

		    <label class="error-label" id="error_address" >error</label>





			<div class="map_container">
				<div id="map_canvas" class="map_canvas"></div>
			</div>
			
			<div class="form-group">
				<label class="form-label" for="street">street</label>
					<input type="text" class="form-control" id="street" name="street" value="">
			</div>

			<div class="form-group">
				<input type="hidden" class="form-control" id="postcode" name="postcode" value="">
			</div>

			<div class="form-group">
				<input type="hidden" class="form-control" id="latitude" name="latitude" value="">
			</div>

			<div class="form-group">
				<input type="hidden" class="form-control" id="longitude" name="longitude" value="">
			</div>

			<div class="form-group">
					<input type="hidden" name="id" value="">
			</div>
					<button type="button" class="btn btn-default" id="button_reset">Reset</button>
					<button type="submit" class="btn btn-primary">Add</button>
			
			

		</form>

				    </div>
<!-- 		    <div class="modal-footer">
		        
		        
		    </div> -->
		</div>
    </div>



    <script>
	$(document).ready(function(){
	    	/*resetForm();*/
	    	initialize();

	        $("#button_google").click( function(){
	        	codeAddress();
	        });

	        $("#button_reset").click(resetForm);


	        //clear search input
			$('#address').focus(clearField);
	    	});

	// Image Selection
		window.addEventListener("load",function(){
		    document.getElementById('imageSelector').addEventListener('change', fileSelect, false);
		}, false);


	</script>