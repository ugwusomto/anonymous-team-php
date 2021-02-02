<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "gatuso";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

if($conn->connect_error){
  die("There is an error ".$conn->connect_error);
}