<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_POST['submit'])) {
	include 'dbconnection.php';
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	if (empty($email)||empty($password)) {
		header('location: ../login.php?email=empty');
		exit();
	}else{
		$sql = "SELECT * FROM users WHERE email='$email'";
		$query = mysqli_query($conn,$sql);
		if ($query) {
			$row = mysqli_num_rows($query);
			if ($row < 1) {
				header("location: ../login.php?login=not_exist");
				exit();
			}else{
				if ($user = mysqli_fetch_assoc($query)) {
					$passv = password_verify($password,$user['password']);
					if ($passv == false) {
						header("location: ../login.php?password=error");
						exit();
					}else{
						header("location: ../index.php");
						if ($user['id']== 7) {
							header("location: ../dashboard.php");
						}else{
                          header("location: ../index.php");
						}
						$_SESSION['email']=$email;
						$_SESSION['password']=$passv;
						$_SESSION['id']=$user['id'];
						$_SESSION['name']=$user['name'];
                                 exit();
					}
				}
			}
		}
	}
}
?>