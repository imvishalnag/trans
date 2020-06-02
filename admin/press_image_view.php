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
							<li class="active">All Press Images</li>
						</ol>
					</div>
				</div>
				<div class="row">





				<div class="col-md-12">
											<?php  
              if (isset($_GET['msg'])) {
                if ($_GET['msg']==9) {
                  print "<p class='alert alert-success'>Image Deleted Successfully.</p>";
                }
                if ($_GET['msg']==10) {
                  print "<p class='alert alert-success'>Something went worng please try again!.</p>";
                }
              }
            ?>

					<?php
					include "../config/db_connect.php";
        $sql ="SELECT * FROM press_gallery ORDER BY id DESC";
        $result=mysqli_query($connect,$sql);
        $count=mysqli_num_rows($result);
        $press_data = '';
        $i=1;
        while ($row=mysqli_fetch_array($result)) {
          $press_data .='<tr class="odd gradeX">
          
										<td>'.$i.'</td>
										<td><img src="../uploads/press/thumb/'.$row['image'].'" alt=""></td>
										<td>'.$row['uploaded_date'].'</td>
										<td><a class="btn btn-danger" href="php/press_image_delete.php?del_id='.$row['id'].'">Delete</a></td>';
									$i++;

        }
        ?>
					<div class="wdgt wdgt-primary">
						<div class="wdgt-header"><i class="fa fa-table"></i>All Press Images Datatables</div>
						<div class="wdgt-body">
							<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped" id="example">
								<thead>
									<tr>
									  
										<th>Sl.</th>
										<th>image</th>
										<th>Uploaded Date</th>
										<th>Action</th>
										
									</tr>
								</thead>
								<tbody>
									<?php echo $press_data; ?>

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