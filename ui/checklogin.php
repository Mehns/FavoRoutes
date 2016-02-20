<?php

include $_SERVER['DOCUMENT_ROOT'] . '/favoroutes/config/connect_inc.php';


// username and password sent from form
$myusername=$_POST['user_login'];
$mypassword=$_POST['password_login'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
/*$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);*/

$sql="SELECT * FROM users WHERE name='$myusername' and password='$mypassword'";

$result= $pdo -> prepare($sql);
$result -> execute();


// Mysql_num_row is counting table row
$count= $result -> rowCount();

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

	// Register $myusername, $mypassword and redirect to file "login_success.php"
	session_start();
	$_SESSION["user"] = $myusername;
	$_SESSION["loggedin"] = true;

	$url = $_SERVER['DOCUMENT_ROOT']. "/favoroutes/login_success.php";

	header("location: login_success.php");
	exit();
}
else {

	header("location: ../index.php");
	exit();
}
?>