<?php include "php/auth.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>
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
							<li class="active">All Payments</li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<?php
						if (isset($_GET['msg'])) {
							if ($_GET['msg'] == 2) {
								print "<p class='alert alert-danger'>Something went worng please try again.</p>";
							}
							if ($_GET['msg'] == 7) {
								print "<p class='alert alert-success'>Something went worng please try again.</p>";
							}
						}
						?>

						<?php
						include "../config/db_connect.php";
						$sql = "SELECT * FROM payment WHERE `status`!=0 ORDER BY id DESC";
						$result = mysqli_query($connect, $sql);
						$count = mysqli_num_rows($result);
						$payments = '';
						$i = 1;
						while ($payments_row = mysqli_fetch_array($result)) {
							if ($payments_row['status'] == 1) {
								$status = "<p style='color:green'>Success</p>";
							} else {
								$status = "<p style='color:red'>Failed</p>";
							}
							$payments .= '<tr class="odd gradeX">
          
										<td>' . $i . '</td>
										<td>' . $payments_row['name'] . '</td>
										<td>' . $payments_row['fname'] . '</td>
										<td>' . $payments_row['dob'] . '</td>
										<td>' . $payments_row['sex'] . '</td>
										<td>' . $payments_row['inst'] . '</td>
										<td>' . $payments_row['inst_name'] . '</td>
										<td>' . $payments_row['purpose'] . '</td>
										<td>Address:' . $payments_row['address'] . '
										<br>State:' . $payments_row['state'] . '
										<br>District:' . $payments_row['district'] . '
										<br>PIN:' . $payments_row['pin'] . '
										
										<br>Phone:' . $payments_row['phone'] . '
										<br>Email:' . $payments_row['email'] . '</td>
										<td>' . $payments_row['amount'] . '</td>
										<td>' . $payments_row['payment_id'] . '</td>
										<td>' . $status . '</td>';
							$i++;
						}
						?>
						<div class="wdgt wdgt-primary">
							<div class="wdgt-header"><i class="fa fa-table"></i>All Payment Datatables</div>
							<div class="wdgt-body">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped" id="example">
									<thead>
										<tr>

											<th>Sl.</th>
											<th>Name</th>
											<th>Father Name</th>
											<th>DOB</th>
											<th>Sex</th>
											<th>Institution</th>
											<th>Inst. Name</th>
											<th>Purpose</th>
											<th>Address</th>
											<th>Amount</th>
											<th>Payment ID</th>
											<th>Status</th>

										</tr>
									</thead>
									<tbody>
										<?php echo $payments; ?>

									</tbody>
									<img src="">
								</table>

							</div>
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