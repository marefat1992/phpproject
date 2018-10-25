<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_POST['submit'])) {
	 include 'dbconnection.php';
	 $title =mysqli_real_escape_string($conn,$_POST['title']);//title of post//
	 $body = mysqli_real_escape_string($conn,$_POST['text']);//body of post//
     $file=$_FILES['image'];
     $file_name= $_FILES['image']['name'];
     $file_temp= $_FILES['image']['tmp_name'];
     $file_error = $_FILES['image']['error'];
     $file_type = $_FILES['image']['type'];
     $file_actual_name= explode('.',$file_name );
     $file_ext = strtolower(end($file_actual_name));
     $allowed_ext = array('jpg','png','jpeg','pdf');
      if (in_array($file_ext, $allowed_ext)) {
       if ($file_error===0) {

         $file_new_name = "image_".time().".".$file_ext;

        $file_location= '../uploaded_images/'.$file_new_name;
        move_uploaded_file($file_temp, $file_location);

         if (empty($title)||empty($body)) {
       $_SESSION['title_err']='title field is required';
       $_SESSION['body_err']='body field is required';
      header("location: ../posts.php");
     exit();
     }
     $sql = "INSERT INTO post(title,body,file) VALUES ('$title','$body','$file_new_name')";
     if (mysqli_query($conn,$sql)) {
     header("location: ../posts.php");
        $_SESSION['success']='Post published Successfully';
    }

     }
    
 }else{
    header("location: ../posts.php?EXT_Err");
}
 }