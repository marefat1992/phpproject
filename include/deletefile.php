<?php
// $fileNames = $_POST['filename'];
// $removeSpaces = str_ireplace(" ", "", $fileNames);
// $allFileNames = explode(",",$removeSpaces );
// $countAllNames = count($allFileNames);
// for ($i=0; $i <$countAllNames ; $i++) { 
// 	if (file_exists("uploaded_images/image_1539629453.jpeg")) {
// 		header("location: ../detail.php?deleteerror");
// 		exit();
// 	}
// }
// for ($i=0; $i <$countAllNames ; $i++) { 
//  $path = "uploaded_images/".$allFileNames[$i];
//  if (!unlink($path)) {
//  	echo "you have an error!";
//  	exit();
//  }
// }
// header("location: ../detail.php?deletesuccess");
// 
include_once 'dbconnection.php';

session_start();

if (isset($_POST['deleteBtn'])) {
	$postId = $_POST['hidden'];
	mysqli_query($conn, "DELETE FROM post WHERE id=$postId");
	header("Location: ../detail.php");
	exit();
}
?>