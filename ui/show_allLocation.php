<?php
session_start();

include_once 'header.php';
include_once 'navigation.php';



/*echo "<div class='right-button-margin'>";
    echo "<a href='index.php' class='btn btn-default pull-right'>Read Products</a>";
echo "</div>";*/

// get database connection
include_once '../config/database.php';
 
$database = new Database();
$db = $database->getConnection();




// page given in URL parameter, default page is one
$page = isset($_GET['page']) ? $_GET['page'] : 1;
 
// set number of records per page
$records_per_page = 6;
 
// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;



// include database and object files
include_once '../config/database.php';
include_once '../objects/location.php';
 
// instantiate database and location object
$database = new Database();
$db = $database->getConnection();
 
$location = new Location($db);
 
// query products
$stmt = $location->readAll($page, $from_record_num, $records_per_page);
$num = $stmt->rowCount();
 
// display the products if there are any
if($num>0){
 
 	echo "<br><br><div class='container' id='content'>";
 	echo "<div class='row'><div class=' col-sm-6 col-md-4 '><h1>All Locations</h1><br><br></div></div>";
	echo "<div class='row'>";
 
/*    echo "<table class='table table-hover table-responsive table-bordered'>";
        echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Image</th>";
            echo "<th>Description</th>";
            echo "<th>Street</th>";
        echo "</tr>";*/
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 
            extract($row);

/*            include_once 'location_container.php';*/

			echo '<div class=" col-sm-6 col-md-4 ">';
			echo "<div class='location-box'>";
			echo "<div class='name'><h5>{$name}</h5></div>";
			echo "<div class='image-wrap'> <img src='../img/locations/thumbs/{$image}'></div>";
			echo "<div class='description'>{$street}</div>";
			echo '</a></div></div>';








 
/*            echo "<tr>";
                echo "<td>{$name}</td>";
                echo "<td>{$image}</td>";
                echo "<td>{$description}</td>";
                echo "<td>{$street}</td>";
/
                echo "<td>";
				    // edit and delete button is here
				    echo "<a href='update_product.php?id={$id}' class='btn btn-default left-margin'>Edit</a>";
				    echo "<a delete-id='{$id}' class='btn btn-default delete-object'>Delete</a>";
				echo "</td>";
 
            echo "</tr>";
 */
        } 
 
/*    echo "</table>";*/

	echo "</div>"; // end row
 	echo "<div class='row'><div class='col-xs-12'>";
    // paging buttons here
	include_once 'paging_location.php';

	echo "</div></div>"; //end row
	echo "</div>"; //end Container

	include_once "footer.php";
}
 
// tell the user there are no products
else{
    echo "<div>No locations found.</div>";
}





?>