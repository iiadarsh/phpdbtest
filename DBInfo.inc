<?php

$host="localhost";
$user = "root";
$password = "";
$database = "twitter";

$connect = mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_errno()){
	die("can't connect to database". mysqli_connect_error());
}

?>
