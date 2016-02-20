<?php
session_start();
?>

<?php include_once 'header.php'; ?>

<?php include_once 'navigation.php'; ?>



<div class="container" id="content">
	<div class="row">
		<br><br><br><br>
		<h2><?php echo("Hello ".$_SESSION["user"]) ?><h2>
	</div>

	<div class="row">
		<button id="btn_newLocation" class="btn btn-theme ">Create new Location</button>	
		<a href="show_allLocation.php" class="btn btn-theme" >Show all Locations</a>
		
	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<!-- <div class="modal" id="myModal"> -->





<?php include_once 'footer.php'; ?>








