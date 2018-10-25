<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
 }
 include('include/header.php');
 include('include/dbconnection.php');
  $query=mysqli_query($conn,"SELECT * From post ") or die(mysqli_error($conn));
 ?>
 <?php if (isset($_SESSION['id'])) : ?>
<div class="container">
<a href="index.php" class="btn btn-success float-left">&larr;Back</a>
<div class="row">
  <div class="col col-md-12">
     <div class="PostContent">
        <div class="card">
         <div class="card-body">
           <div class="row">
             <div class="col col-md-12">
              <?php while($data=mysqli_fetch_array($query)): ?>
                <?php $_SESSION['post_id'] = $data['id']; ?>
                 <div class="card">
                  <div class="card-body" id="content">
                  <center><h2><?= $data['title'] ?></h2></center>
                   <hr>
                   <p><?= $data['body'] ?></p>
                    <img src="uploaded_images/<?= $data['file'] ?>" class="img-thumbnail img-responsive">
                   </div>
                      <form action="edite.php" method="POST">
                   <button type="submit" name="editbtn" class="btn btn-outline-info"><i class="fas fa-edit">edite</i></button>
                   <input type="hidden" name="hidden" value="<?php echo $data['id'];?>">
                   </form>
                  </div>
                <?php endwhile; ?>
               </div>
             </div>
           </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<?php if (!isset($_SESSION['id'])) : ?>
  <?php header("location: login.php");
            exit(); ?>
<?php endif; ?>
<?php include('include/footer.php') ?>