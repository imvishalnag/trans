<?php include "php/auth.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>
<body>

	<?php include "include/header.php"; ?>
	<?php 
	function showMsg($msg)
{
	if ($msg == 5) {
		print "<p class='alert alert-danger'>Category Field Is Required</p>";
	}elseif ($msg == 6) {
		print "<p class='alert alert-danger'>Please Upload Image Less Then 2 MB</p>";
	}elseif ($msg == 7) {
		print "<p class='alert alert-danger'>Please Check Image Extension Before Upload</p>";
	}elseif ($msg == 8) {
		print "<p class='alert alert-danger'>Image Field Can Not Be Empty</p>";
	}elseif ($msg == 1) {
		print "<p class='alert alert-success'>Image Uploaded Successfully</p>";
	}elseif ($msg == 3) {
		print "<p class='alert alert-danger'>Please Fill The Form Properly</p>";
	}
}
	?>
	<div class="contain">

		<div class="left hidden-xs">
            <?php include "include/sidebar.php"; ?>

		</div>

		<div class="right">

			<?php include "include/right.php"; ?>
    
			<!-- BEGIN PAGE CONTENT -->
			<div class="content">

				<!-- BREADCRUMBS -->
				<div id="bread" class="col-md-12">
					<div class="crumbs">
						<ol class="breadcrumb">
							<li><i class="fa fa-home"></i> <a href="#">Home</a></li>
							<li class="active">Press Gallery</li>
						</ol>
					</div>
				</div>
					<div class="col-md-5">
					<div class="wdgt wdgt-primary">
						<div class="wdgt-header"><i class="fa fa-picture-o"></i>Add Image</div>
						<div>
							<?php
					if (isset($_GET['msg']) && !empty($_GET['msg'])) {
						showMsg($_GET['msg']);					
					}
					?>
						</div>
						<form role="form" action="php/press_image_add.php" method="post" enctype="multipart/form-data">
						<div class="wdgt-body tbl" style="padding-bottom:10px;">
							
								<div class="form-group">
									<label for="image">Upload Image</label>
									<input type="file" class="form-control col-sm-12" name="file[]" id="image" multiple>
								</div>
						</div>
						<div class="wdgt-footer align-right">
							<button name="submit" class="btn btn-info">Upload</button>
						</div>
						</form>
					</div>
				</div>



				
 			<!-- END PAGE CONTENT -->

		</div>

	</div>

<?php include "include/foot.php"; ?>
	 
</body>

</html>