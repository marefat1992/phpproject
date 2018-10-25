<?php
session_start();
if (isset($_POST['submit'])) {
  //if form submited then
  include 'dbconnection.php';
  //store form data in to variable
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $email= mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);

  //validate form data  if  empty error
  if (empty($name)||empty($email)||empty($password)) {
    header('location: ../signup.php?signup=empty');
    exit();
   }else{
     //if not empty filter email using php filter function
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      //if email is not valide error
      header('location: ../signup.php?EMAIL=ERR');
    exit();
    }else{
      //if email is valid then check if it is already exist in database
      $sql= "select * from user where email='$email'";
      $result = mysqli_query($conn,$sql);
      $row_check = mysqli_num_rows($result);
      if ($row_check>0) {
        //if exist error = exist and exit
         header('location: ../signup.php?USER=EXS');
         exit();
       }else{
       //if not exist the current email then match passwords 
         if($password !=$cpassword){
          header('location: ../signup.php?pass=notMatch');
          exit();
        }
        //if password matches then hash both password and cofirme password
        $hashpass = password_hash($password,PASSWORD_DEFAULT);
        $hashcpass = password_hash($cpassword,PASSWORD_DEFAULT);
        //insert the details to the database 

        $query= "INSERT INTO users (name,email,password) VALUES ('$name','$email','$hashpass') ";
        if (mysqli_query($conn,$query)) {
          header('location: ../signup.php?success');
          //if success then exit
          exit();
        }
      }
    }
  }

  
 }