<?php include "php/auth.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php
include "include/head.php";

?>
<!-- Adjustable Styles -->
<link rel="stylesheet" href="lib/css/DT_bootstrap.css">

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
							<li class="active">Employee List</li>
						</ol>
					</div>
				</div>
				<?php
				if (isset($_GET['msg'])) {
					if ($_GET['msg'] == 5) {
						print "<p class='alert alert-danger'>Something went worng please try again.</p>";
					}
					if ($_GET['msg'] == 4) {
						print "<p class='alert alert-success'>sorry, your file is too large</p>";
					}
					if ($_GET['msg'] == 5) {
						print "<p class='alert alert-success'>sorry your file format is not supported</p>";
					}
				}
				?>
				<div class="col-md-12 user-list">
					<div class="wdgt wdgt-primary">
						<div class="wdgt-header"><i class="fa fa-table"></i>Employee List
							<a href="employee-form-view.php" class="btn btn-sm btn-warning pull-right">Add Employee</a>
						</div>
						<div class="wdgt-body">
							<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped" id="example">
								<thead>
									<tr>
										<th>Sl No</th>
										<th>Name</th>
										<th>Email</th>
										<th>Designation</th>
										<th>Qualification</th>
										<th>Mobile</th>
										<th>Photo</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$sql_users = "SELECT `id`, `name`, `email`, `designation`, `qualification`, `mobile`, `image_file` FROM `employee`";

									if ($res_users = $connect->query($sql_users)) {
										if ($res_users->num_rows > 0) {
											$user_count = 1;
											while ($row_user = $res_users->fetch_assoc()) {
												print "<tr>
													<td>$user_count</td>
													<td>$row_user[name]</td>
													<td>$row_user[email]</td>
													<td>$row_user[designation]</td>
													<td>$row_user[qualification]</td>
													<td>$row_user[mobile]</td>
													<td>
														<img src='../$row_user[image_file]' width='120'></td>
													<td>
														<a href='user-form-view.php?user_id=$row_user[id]' class='label label-success'>View Detail</a>
														<a href='../admin/php/user-delete.php?user_id=$row_user[id]' class='label label-danger'>Delete</a>
													</td>
												</tr>";
												$user_count++;
											}
										} else {
											print "<tr><td colspan='4' align='center'>No Users Found</td></tr>";
										}
									}
									?>

								</tbody>
							</table>

						</div>
					</div>
				</div>
				<!-- END PAGE CONTENT -->
			</div>

		</div>

		<?php// include "include/foot.php"; ?>
		<!-- Default JS (DO NOT TOUCH) -->
		<script src="lib/js/jquery.min.js"></script>
		<script src="lib/js/jquery-ui.min.js"></script>
		<script src="lib/js/bootstrap.min.js"></script>
		<script src="lib/js/opacity.widgets.min.js"></script>
		<script src="lib/js/hogan.min.js"></script>
		<script src="lib/js/typeahead.min.js"></script>
		<script src="lib/js/typeahead-example.js"></script>

		<!-- Adjustable JS -->
		<script src="lib/js/jquery.dataTables.min.js"></script>
		<script src="lib/js/DT_bootstrap.js"></script>
		<script>
			$(document).ready(function() {

				$('a[href="table_datatables.html"]').addClass('active').parent().parent().addClass('in');

				$('.datatable').dataTable({
					"sPaginationType": "bs_normal"
				});

				$('.datatable').each(function() {
					var datatable = $(this);
					var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
					search_input.attr('placeholder', 'Search');
					search_input.addClass('form-control input-sm');
					var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
					length_sel.addClass('form-control input-sm');
					datatable.bind('page', function(e) {
						window.console && console.log('pagination event:', e)
					});
				});

			});
		</script>

</body>

</html>