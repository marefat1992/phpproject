<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
include 'include/header.php';
include 'include/dbconnection.php';
?>
<div class="container">
	<div class="row">
		<div class="col col-md-12">
			<div class="comContent">
				<div class="card">
					<div class="card-body">
						<form action="include/comment.php" method="post" enctype="multipart/form-data">
					   <input type="file" name="file">
					   <input type="text" name="name" placeholder="write your name" width="600">
					   <textarea name="comment" cols="109" rows="8">comment</textarea>
					   <input type="submit" name="submit">
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>