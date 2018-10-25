<?php
include 'dbconnection.php';
$id = $_POST['postId'];
session_start();
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
if (isset($_POST['submit'])) {
	   $title =mysqli_real_escape_string($conn,$_POST['title']);
	   $body = mysqli_real_escape_string($conn,$_POST['text']);
        $file=$_FILES['image']['name'];
        $file_name= $_FILES['image']['name'];
        $file_temp= $_FILES['image']['tmp_name'];
        $file_error = $_FILES['image']['error'];
        $file_type = $_FILES['image']['type'];
        $file_actual_name= explode('.',$file_name );
        $file_ext = strtolower(end($file_actual_name));
        $allowed_ext = array('jpg','png','jpeg','pdf');
        $file = "image_".time().".".$file_ext;

        $file_location= '../uploaded_images/'.$file;
        move_uploaded_file($file_temp, $file_location);
        if ($title == '' || $body == '' || $file == '') {
        $error = 'ERROR: Please fill in all required fields!';

        valid($id, $title, $body,$file, $error);
}
else
   {
     $sql = mysqli_query($conn, "UPDATE post SET title='$title', body='$body', file='$file' WHERE id=$id" )
        or die(mysql_error());
        if (mysqli_query($conn,$sql)) {
        header("location: ../edite.php");
        $_SESSION['success']='Post published Successfully';
    }
	   header("Location: ../detail.php");
	   exit();
}
}
?>
// if (isset($_POST['submit'])
// {
// if (is_numeric($_POST['id']))
// {
//     $id = $_POST['id'];
//     $title = mysql_real_escape_string(htmlspecialchars($_POST['title']));
//     $body = mysql_real_escape_string(htmlspecialchars($_POST['text']));
//     $file= $_FILES['image'];
//     $file_name= $_FILES['image']['name'];
//     $file_temp= $_FILES['image']['tmp_name'];
//     $file_error = $_FILES['image']['error'];
//     $file_type = $_FILES['image']['type'];


// if ($title == '' || $body == '' || $file == '')
// {

//     $error = 'ERROR: Please fill in all required fields!';


//     valid($id, $title, $body,$file, $error);
// }
// else
// {

//    mysql_query("UPDATE post SET title='$title', body='$body' ,image='$file' WHERE id='$id'")
//     or die(mysql_error());

//     header("Location: ../detail.php");
// }
// }
// else
// {

// echo 'Error!';
// }
// }
// else

// {

// if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
// {

// $id = $_GET['id'];
// $result = mysql_query("SELECT * FROM post WHERE id=$id")
// or die(mysql_error());
// $row = mysql_fetch_array($result);

// if($row)
// {

// $title = $row['title'];
// $body = $row['body'];
// $file = $row['file'];

// valid($id, $title, $body,$file,'');
// }
// else
// {
// echo "No results!";
// }
// }
// else

// {
// echo 'Error!';
// }
// }
// }
// ?>

