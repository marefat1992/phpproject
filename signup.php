 <?php
 include('include/header.php');
 ?>
 <div class="container">
    <div class="row">
      <div class="col-2">
      <!-- this column just for centering the column 8 -->
      </div>
      <!-- tabs and login form start here -->
      <div class="col-md-8">
        <div class="login-wrapper">
 

 <div class="form">
          <h3 class="text-center">Regisration Form</h3>
          <form action="include/signin.php" method="post">
            <div class="form-group"><!--register form name-->
                <label for="staticEmail2" class="sr-only">Name</label>
                <input class="form-control" type="text" placeholder="Your name here.." name="name" required>
            </div>
            <div class="form-group"><!--email for register form-->
                <label for="staticEmail3" class="sr-only">Email</label>
                <input class="form-control" type="email" placeholder="Your Email here.." name="email" required>
            </div>
            <div class="form-group"><!--password for register form-->
              <label for="staticEmail2" class="sr-only">Password</label>
              <input class="form-control" type="Password" placeholder="Your Password here.." name="password" required>
            </div>
            <div class="form-group"><!--conform password for register-->
              <label for="staticEmail2" class="sr-only">confirm Password</label>
              <input class="form-control" type="Password" placeholder="Your Password here.." name="cpassword" required>
            </div>
            <div class="form-group"><!--submit button for submit-->
              <button type="submit" class="btn btn-primary btn-block button-down" name="submit">Register</button>
            </div>
          </form>
        </div>
      <!-- login form and registration form ends here -->

    </div>
   </div>
  </div>
</div>
<?php include('include/footer.php'); ?>