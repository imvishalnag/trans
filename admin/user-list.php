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
										<th>User Name</th>
										<th>Address</th>
										<th>Phone</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr class="odd gradeX">
										<td>Unknown name</td>
										<td>Guwahati, Assam</td>
										<td>+95 95487635</td>
										<td class="center">
											<a href="user-detail.php" class="label label-success">View Detail</a>
											<a class="label label-danger">Delete</a>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td>Unknown name</td>
										<td>Guwahati, Assam</td>
										<td>+95 95487635</td>
										<td class="center">
											<a href="user-detail.php" class="label label-success">View Detail</a>
											<a class="label label-danger">Delete</a>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td>Unknown name</td>
										<td>Guwahati, Assam</td>
										<td>+95 95487635</td>
										<td class="center">
											<a href="user-detail.php" class="label label-success">View Detail</a>
											<a class="label label-danger">Delete</a>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td>Unknown name</td>
										<td>Guwahati, Assam</td>
										<td>+95 95487635</td>
										<td class="center">
											<a href="user-detail.php" class="label label-success">View Detail</a>
											<a class="label label-danger">Delete</a>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td>Unknown name</td>
										<td>Guwahati, Assam</td>
										<td>+95 95487635</td>
										<td class="center">
											<a href="user-detail.php" class="label label-success">View Detail</a>
											<a class="label label-danger">Delete</a>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td>Unknown name</td>
										<td>Guwahati, Assam</td>
										<td>+95 95487635</td>
										<td class="center">
											<a href="user-detail.php" class="label label-success">View Detail</a>
											<a class="label label-danger">Delete</a>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td>Unknown name</td>
										<td>Guwahati, Assam</td>
										<td>+95 95487635</td>
										<td class="center">
											<a href="user-detail.php" class="label label-success">View Detail</a>
											<a class="label label-danger">Delete</a>
										</td>
									</tr>
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