<?php
$server = "localhost";
$username = "admin";
$password = "1234";
$database = "eariset";

$con =  new mysqli($server, $username,$password, $database);

if($con->connect_error){
	die("Connection Failed".$con->connect_error);
}
?>