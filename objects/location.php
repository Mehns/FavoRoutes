<?php
class Location{

	// database connection and table name
    private $conn;
    private $table_name = "locations";

    // object properties
    public $id;
    public $name;
    public $image;
    public $description;
    public $street;
    public $postcode;
    public $latitude;
    public $longitude;
    public $created;

    public function __construct($db){
        $this->conn = $db;
    }


    // create location
    function create(){
 
        // to get time-stamp for 'created' field
        $this->getTimestamp();
 
        //write query
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    name = ?, image = ?, description = ?, street = ?, postcode = ?, latitude = ?, longitude = ?, created = ?";
 
        $stmt = $this->conn->prepare($query);
 
        $stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->image);
        $stmt->bindParam(3, $this->description);
        $stmt->bindParam(4, $this->street);
        $stmt->bindParam(4, $this->postcode);
        $stmt->bindParam(4, $this->latitude);
        $stmt->bindParam(4, $this->longitude);
        $stmt->bindParam(5, $this->created);
 
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
 
    }


    // used for the 'created' field when creating a location
	function getTimestamp(){
	    date_default_timezone_set('Europe/Berlin');
	    $this->created = date('Y-m-d H:i:s');
	}


	function readOne(){
 
	    $query = "SELECT
	                id, name, image, description, street, postcode, latitude, longitude, created
	            FROM
	                " . $this->table_name . "
	            WHERE
	                id = ?
	            LIMIT
	                0,1";
	 
	    $stmt = $this->conn->prepare( $query );
	    $stmt->bindParam(1, $this->id);
	    $stmt->execute();
	 
	    $row = $stmt->fetch(PDO::FETCH_ASSOC);
	 
	    $this->name = $row['name'];
	    $this->image = $row['image'];
	    $this->description = $row['description'];
	    $this->street = $row['street'];
	    $this->postcode = $row['postcode'];
	    $this->latitude = $row['latitude'];
	    $this->longitude = $row['longitude'];
	    $this->created = $row['created'];
	}



	function readAll($page, $from_record_num, $records_per_page){
 
	    $query = "SELECT
	                id, name, image, description, street, postcode, latitude, longitude, created
	            FROM
	                " . $this->table_name . "
	            ORDER BY
	                name ASC
	            LIMIT
	                {$from_record_num}, {$records_per_page}";
	 
	    $stmt = $this->conn->prepare( $query );
	    $stmt->execute();
	 
	    return $stmt;
	}


	// used for paging products
	public function countAll(){
	 
	    $query = "SELECT id FROM " . $this->table_name . "";
	 
	    $stmt = $this->conn->prepare( $query );
	    $stmt->execute();
	 
	    $num = $stmt->rowCount();
	 
	    return $num;
	}


	function update(){
 
	    $query = "UPDATE
	                " . $this->table_name . "
	            SET
	                name = :name,
	                price = :price,
	                description = :description,
	                category_id  = :category_id
	            WHERE
	                id = :id";
	 
	    $stmt = $this->conn->prepare($query);
	 
	    $stmt->bindParam(':name', $this->name);
	    $stmt->bindParam(':image', $this->image);
	    $stmt->bindParam(':description', $this->description);
	    $stmt->bindParam(':street', $this->street);
	    $stmt->bindParam(':postcode', $this->postcode);
	    $stmt->bindParam(':latitude', $this->latitude);
	    $stmt->bindParam(':longitude', $this->longitude);
	    $stmt->bindParam(':id', $this->id);
	 
	    // execute the query
	    if($stmt->execute()){
	        return true;
	    }else{
	        return false;
	    }
	}


	// delete the location
	function delete(){
	 
	    $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
	 
	    $stmt = $this->conn->prepare($query);
	    $stmt->bindParam(1, $this->id);
	 
	    if($result = $stmt->execute()){
	        return true;
	    }else{
	        return false;
	    }
	}





	}
?>
