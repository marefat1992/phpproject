<?php include('include/header.php');
  session_start();
?>

 <div class="container">
<div class="row">
  <div class="col col-md-12 col-sm-12 col-xs-12">
     <div class="PostContent">
       <form action="include/edite.php" method="post"  enctype="multipart/form-data">
         <div class="card">
           <div class="card-body">
                       <?php //message for valid value//
              if (isset($_SESSION['success'])) {
                       echo'<div class="alert alert-success" role="alert">'
                       . $_SESSION['success'].'</div>';
                         unset($_SESSION['success']);
                                    }
                      
              ?>
          <div class="form-group">
                <?php //check for title valid value can insert//
              if (isset($_SESSION['title_err'])) {
                       echo'<div class="alert alert-danger" role="alert">'
                       . $_SESSION['title_err'].'</div>';
                         unset($_SESSION['title_err']);
                                    }
                      
              ?>
              <input type="text" name="title" class="form-control" placeholder="Post title here..." required>
              <input type="hidden" name="postId" value="<?php echo $_POST['hidden']; ?>">
         </div>
            <div class="form-group">
               <textarea name="text" id="editor1" class="form-control" cols="30" rows="10" placeholder="Enter something here.." required></textarea>
             </div>
          </div>
       </div>
       <div class="card">
         <div class="card-body">
           <input type="file" name="image">
           <button type="submit" class="btn btn-primary float-right" name="submit">Submit edite</button>
          </div>
        </div>
      </div>
        </form>
    </div>
  </div>

</div>
<?php include('include/footer.php') ?>