<?php
if (isset($_POST['submit'])) {
	include 'dbconnection.php';
	 $name = mysqli_real_escape_string($conn,$_POST['name']);
	 $comment = mysqli_real_escape_string($conn,$_POST['comment']);
	 $file = $_FILES['file']['name'];
	 $file_name = $_FILES['file']['name'];
	 $file_temp= $_FILES['file']['tmp_name'];
     $file_error = $_FILES['file']['error'];
	 $file_type = $_FILES['file']['type'];
	 $file_actual_name = explode('.', $file_name);
	 $file_ext = strtolower(end($file_actual_name));
     $allowed_ext = array('jpg','png','jpeg','pdf');
       if (in_array($file_ext, $allowed_ext)) {
        if ($file_error===0) {

       $file_new_name = "image_".time().".".$file_ext;

       $file_location= '../uploaded_images/'.$file_new_name;
       move_uploaded_file($file_temp, $file_location);
        if (empty($name)||empty($comment)) {
       $_SESSION['name_err']='name field is required';
       $_SESSION['comment_err']='comment field is required';
       header("location: ../comment.php");
      exit();
     }
       $sql = "INSERT INTO comment(file,name,comment) VALUES ('$file_new_name','$name','$comment')";
       if (mysqli_query($conn,$sql)) {
       header("location: ../comment.php");
        $_SESSION['success']='Post published Successfully';
    }

     }
    
 }else{
    header("location: ../comment.php?EXT_Err");
}
 }
?>