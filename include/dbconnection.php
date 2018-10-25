<?php
$host = "localhost";
$user = 'root';
$password = "";
$db ='hadi';
$conn = mysqli_connect($host,$user,$password,$db);
if (!$conn) {
	die("you could not connect try again!".mysqli_connect_error());
}
	
?>