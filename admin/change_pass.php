<?php include "php/auth.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>

<body>

	<?php include "include/header.php"; ?>

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
							<li class="active">Change Cridential</li>
						</ol>
					</div>
				</div>
				<div class="col-md-5">
					<div class="wdgt wdgt-primary">
						<div class="wdgt-header"><i class="fa fa-user"></i>Change Username And Password</div>
						<div>
							<?php

							if (isset($_GET['msg'])) {
								if ($_GET['msg'] == 1) {
									print "<p class='alert-success'>Your Cridentials are Succesfully Changed</p>";
								}
								if ($_GET['msg'] == 2) {
									print "<p class='alert-danger'>Something Went worng</p>";
								}
								if ($_GET['msg'] == 3) {
									print "<p class='alert-danger'>Registered Email id is Wrong! Please enter the correct email id..</p>";
								}
								if ($_GET['msg'] == 4) {
									print "<p class='alert-danger'>Your Existing Username is Wrong! Please enter the correct username..</p>";
								}
								if ($_GET['msg'] == 5) {
									print "<p class='alert-danger'>Your Existing Password is Wrong! Please enter the correct Password..</p>";
								}
								if ($_GET['msg'] == 6) {
									print "<p class='alert-danger'>Conform password mismatch!</p>";
								}
							}

							?>
						</div>
						<form role="form" action="php/update_pass.php" method="post">
							<div class="wdgt-body tbl" style="padding-bottom:10px;">

								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control col-sm-12" name="email" placeholder="Registered Email">
								</div>
								<div class="form-group">
									<label for="username">Existing Username</label>
									<input type="text" class="form-control col-sm-12" name="old_username" placeholder="Existing Username">
								</div>
								<div class="form-group">
									<label for="username">New Username</label>
									<input type="text" class="form-control col-sm-12" name="new_username" placeholder="New Username">
								</div>
								<div class="form-group">
									<label for="user">Existing Password</label>
									<input type="password" class="form-control col-sm-12" name="old_password" placeholder="Existing Password">
								</div>
								<div class="form-group">
									<label for="user">New Password</label>
									<input type="password" class="form-control col-sm-12" name="new_password" placeholder="New Password">
								</div>
								<div class="form-group">
									<label for="user">Conform New Password</label>
									<input type="password" class="form-control col-sm-12" name="con_password" placeholder="Conform New Password">
								</div>

							</div>
							<div class="wdgt-footer align-right">
								<a href="index.php" class="btn btn-warning">Cancel</a>&nbsp;&nbsp;
								<button name="update" class="btn btn-info">Change Password</button>
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