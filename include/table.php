<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
if (isset($_POST['submit'])) {
	include 'dbconnection.php';
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$salary = mysqli_real_escape_string($conn,$_POST['salary']);
	$country = mysqli_real_escape_string($conn,$_POST['country']);
	$city = mysqli_real_escape_string($conn,$_POST['city']);

	 if (empty($name)||empty($salary)||empty($country)||empty($city)) {
	 	header("location: ../table1.php?empty");
     	exit();

	 }
	$query= "INSERT INTO table (name,salar,country,city) VALUES ('$name',$salary,'$country','$city') ";
 if (mysqli_query($conn,$query)) {
          header('location: ../table1.php?success');
          //if success then exit
          exit();
      }
  }
