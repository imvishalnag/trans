<?php include "php/auth.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php
 include "include/head.php"; 
 function showMsg($msg)
 {
     if ($msg == '1') {
         print "<p style='color:green'>Employee Successfully Added</p>";
     }
 }
?>
<link rel="stylesheet" href="lib/css/colorbox.css">
<style>.profilepic {margin: auto;display: block;background: #fff;border: 4px solid #fff;}</style>
<body>

	<?php include "include/header.php"; ?>
	
	<div class="contain">

		<div class="left hidden-xs">
            <?php include "include/sidebar.php"; ?>

		</div>

		<div class="right"  id="print_div">
			<?php include "include/right.php"; ?>
			<!-- BEGIN PAGE CONTENT -->
			<div class="content">
				<!-- BREADCRUMBS -->
				<div id="bread" class="col-md-12">
					<div class="crumbs">
						<ol class="breadcrumb">
							<li><i class="fa fa-home"></i> <a href="#">Home</a></li>
							<li class="active">Employee Form</li>
						</ol>
					</div>
				</div>
				<div class="col-md-12 user-detail">
					<div class="wdgt wdgt-primary">
                    <?php
                        if (isset($_GET['msg']) && !empty($_GET['msg'])) {
                            showMsg($_GET['msg']);
                        }else{
                            echo "Something Went wrong! Please Try again later";
                        }
                        ?>
                        <form action="php/employee_submit_data.php" enctype="multipart/form-data" method="post">
                            <div class="wdgt-header"><i class="fa fa-table"></i>Employee Form</div>
                            <div class="wdgt-body tbl" style="padding-bottom:10px;">
                                <form  enctype="multipart/form-data" method="post" action="aaa.ph">
                                    <div class="form-group col-md-5 col-xs-6">
                                        <h4 for="email">1. Name <small>(assigned at birth)</small></h4>
                                        <input type="text" class="form-control col-sm-12" name="name" placeholder="Enter Name">
                                        <h4 for="date">2. Designation </h4>
                                        <input type="text" class="form-control col-sm-12" name="designation" placeholder="Enter Designation">
                                    </div>
                                    <div class="form-group col-md-5 col-xs-6">
                                        <h4 for="date">3. Email </h4>
                                        <input type="email" class="form-control col-sm-12" name="email" placeholder="Enter Email">
                                        <h4 for="date">4. Qualification (if any)</h4>
                                        <input type="text" class="form-control col-sm-12" name="qualification" placeholder="Enter Qualification">
                                    </div>
                                    <div class="form-group col-md-2 col-xs-12">
                                        <h4 for="date">Photo </h4>
                                        <ul class="thumbnails">
                                            <li>
                                                <a title="Group photo 1">
                                                    <img class="profilepic" id="user_image_src" >
                                                </a>
                                                <div class="options" style="background: #403f3fad;">
                                                    <input type="file" name="user_image" id="user_image" onchange="fileTest(this,'user_image')" >
                                                </div>
                                            </li>
                                        </ul>
                                        <span id="user_image_error"></span>
                                    </div>								
                                    
    
                                    <div class="form-group col-md-5 col-xs-6">
                                        <h4 for="date">5. Contact No </h4>
                                        <input type="number" class="form-control col-sm-12" name="mobile" placeholder="Enter Mobile">
                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary pull-right">
                                    </div>
                                </form>
                            </div>
                        </form>
					</div>
				</div>
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
	<link rel="stylesheet" href="lib/css/opacity-sliders.css"/>
	<link rel="stylesheet" href="lib/css/icheck.css">
	<link rel="stylesheet" href="lib/css/summernote.css">
	<link rel="stylesheet" href="lib/css/summernote-bs3.css">
	<link rel="stylesheet" href="lib/css/select2.css">
	<script src="lib/js/summernote.js"></script>
	<script src="lib/js/select2.min.js"></script>
	<script src="lib/js/icheck.min.js"></script>
	<script src="lib/js/jquery.maskedinput.min.js"></script>
	
	<script src="lib/js/jquery.colorbox.min.js"></script>

	<?php include 'script/user_form_script.php'; ?>
</body>

</html>