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
							<li class="active">User List</li>
						</ol>
					</div>
				</div>
				<div class="col-md-12 user-list">
					<div class="wdgt wdgt-primary">
						<div class="wdgt-header"><i class="fa fa-table"></i>User List</div>
						<div class="wdgt-body">
							<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped" id="example">
								<thead>
									<tr>
										<th>Sl No</th>
										<th>User Name</th>
										<th>Mobile</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$sql_users = "SELECT `users`.`id` as user_id, `users`.`mobile` as mobile, `user_details`.`name` AS name FROM `users` INNER JOIN `user_details` ON  `user_details`.`user_id`=`users`.`id`";

									if ($res_users = $connect->query($sql_users) ) {
										if ($res_users->num_rows > 0) {
											$user_count = 1;
											while ($row_user = $res_users->fetch_assoc()) {
												print "<tr>
												<td>$user_count</td>
												<td>$row_user[name]</td>
												<td>$row_user[mobile]</td>
												<td>
													<a href='#' class='label label-success'>View Detail</a>
													<a class='label label-danger'>Delete</a></td>
												</tr>";
												$user_count++;
											}
										}else{
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

		$('.datatable').dataTable({ "sPaginationType": "bs_normal" });

		$('.datatable').each(function(){
			var datatable = $(this);
			var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
			search_input.attr('placeholder', 'Search');
			search_input.addClass('form-control input-sm');
			var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
			length_sel.addClass('form-control input-sm');
			datatable.bind('page', function(e){
				window.console && console.log('pagination event:', e) 
			});
		});

	});
	</script>
	 
</body>

</html>