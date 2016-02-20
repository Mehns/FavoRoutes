

	<div class="modal-dialog" id="modal-register">
        <div class="modal-content" >
		    <div class="modal-header">
		        <a class="close" data-dismiss="modal">×</a>
		        <h4 class="modal-title">Sign Up</h4>
		    </div>
		    <div class="modal-body">
		        <form class="register" name="register" action="ui/register.php" method="post">
		            
		            <div class="form-group">
						<label  for="name">User Name</label>
						<input type="text" class="form-control" id="reg_username" name="reg_username" size"20">				
					</div>

					<div class="form-group">
						<label  for="name">Email</label>
						<input type="email" class="form-control" id="reg_email" name="reg_email" size"20">				
					</div>

					<div class="form-group">
						<label  for="name">Password</label>
						<input type="password" class="form-control" id="reg_password" name="reg_password" size"20">				
					</div>

					<div class="form-group">
						<label  for="name">Retype Password</label>
						<input type="password" class="form-control" id="reg_password2" name="reg_password2" size"20">				
					</div>

					<input class="btn btn-success" type="submit" value="Register" id="register-submit">
					<a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>

		        </form>
		    </div>
<!-- 		    <div class="modal-footer">
		        
		        
		    </div> -->
		</div>
    </div>

