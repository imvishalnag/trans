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
							<li class="active">All News</li>
						</ol>
					</div>
				</div>
				<div class="row">
					                <?php
            $detail_id = $_GET['detail_id'];
            $sql = "SELECT * FROM news WHERE id='$detail_id' LIMIT 1";
            $news = '';
            $result = $connect->query($sql);
            if ($result->num_rows>0) {
                while ($result_row=$result->fetch_assoc()) {
                	$heading = $result_row['heading'];
                	$image = $result_row['image'];
                	$content = $result_row['content'];
                	$date_added = $result_row['date_added'];
                	$id = $result_row['id'];
                                                           }
                                      }
                            ?>
				<div class="col-md-12">
					<div class="wdgt wdgt-info">
						<div class="wdgt-header">News in Details</div>
						<div class="wdgt-body">
							<div class="panel-group" id="accordion">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#cOne"><?php echo $heading; ?></a>
										</h4>
									</div>
									<div id="cOne" class="panel-collapse collapse in"><div class="panel-body">
										<div align="middle">
										<img style="width: 60%" src="../uploads/news_image/<?php echo $image; ?>">
										</div><br><br>
										
										<?php echo $content; ?> 
									</div></div>
								</div>
								<div class="panel panel-success">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="">Added on <?php echo $date_added; ?></a>
											<a href="news_view.php">
											<button class="btn btn-success">Go Back</button></a>
											<a href="news_edit.php?edit_id=<?php echo $id; ?>">
											<button class="btn btn-success"> Edit this Post</button></a>
										</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>



				
 			<!-- END PAGE CONTENT -->

		</div>

	</div>

<?php include "include/foot.php"; ?>

	<!-- Adjustable JS -->
	<script>
		$(document).ready(function() {
			$('a[href="support.html"]').addClass('active').parent().parent().addClass('in');
		});
	</script>
	 
</body>

</html>