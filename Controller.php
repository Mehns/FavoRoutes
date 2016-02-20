<?php
function __autoload($className){
    include_once("models/$className.php");
}

$users=new User("localhost","root","iH810iS@N8","locations");

if(!isset($_POST['action'])) {
    print json_encode(0);
    return;
}

switch($_POST['action']) {
}

exit();