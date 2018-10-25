<?php include('include/header.php') ?>
<div class="container">
   <div class="card mx-auto" style="width: 20rem;">
     <img class="card-img-top mx-auto" src="image/download.jpg" alt="Login_In" height="150px;">
      <div class="card-body">
         <h4 class="card-title">login</h4>
        <form action="include/login.php" method="POST"><!--body of login form-->
     <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
     </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
        <button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
  </form>
         
     </div>     
  </div>
</div>
<?php include('include/footer.php'); ?>