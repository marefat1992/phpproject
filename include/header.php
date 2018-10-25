<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
      <title>admin</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
  </head>
  <body>
      <!--start of navbar using bootstrap-->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: blue">
      <img class="navbar-brand" src="image/logo.png" width="80" height="40">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" ar ia-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
         <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="table.php">tablelist</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="detail.php">detail</a>
      </li>
    </ul>
   <span class="navbar-text" style="color: white;">
      <!-- Example single danger button -->
<div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 30px;"><small>Accounts</small>
    </button>
<div class="dropdown-menu">
      <a class="dropdown-item" href="signup.php">Register</a>
      <a class="dropdown-item" href="login.php">login</a>
      <a class="dropdown-item" href="include/destroy.php">logged_out</a>
</div>
    </span>
  </div>
</nav><!--end of navbar-->
