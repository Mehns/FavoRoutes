<?php

include_once "header.php";


echo "<div class='right-button-margin'>";
    echo "<a href='index.php' class='btn btn-default pull-right'>Read Products</a>";
echo "</div>";

// get database connection
include_once '../config/database.php';
 
$database = new Database();
$db = $database->getConnection();


include_once "footer.php";

// page given in URL parameter, default page is one
$page = isset($_GET['page']) ? $_GET['page'] : 1;
 
// set number of records per page
$records_per_page = 3;
 
// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;



// include database and object files
include_once '../config/database.php';
include_once '../objects/location.php';
 
// instantiate database and location object
$database = new Database();
$db = $database->getConnection();
 
$location = new Product($db);
 
// query products
$stmt = $location->readAll($page, $from_record_num, $records_per_page);
$num = $stmt->rowCount();
 
// display the products if there are any
if($num>0){
 

 
    echo "<table class='table table-hover table-responsive table-bordered'>";
        echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Image</th>";
            echo "<th>Description</th>";
            echo "<th>Street</th>";
        echo "</tr>";
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 
            extract($row);
 
            echo "<tr>";
                echo "<td>{$name}</td>";
                echo "<td>{$image}</td>";
                echo "<td>{$description}</td>";
                echo "<td>{$street}</td>";
/* 
                echo "<td>";
                    // edit and delete button will be here
                echo "</td>";*/
 
            echo "</tr>";
 
        }
 
    echo "</table>";
 
    // paging buttons will be here
}
 
// tell the user there are no products
else{
    echo "<div>No locations found.</div>";
}





?>