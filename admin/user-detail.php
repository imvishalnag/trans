<?php include "php/auth.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>
<link rel="stylesheet" href="lib/css/colorbox.css">
<style>.profilepic {margin: auto;display: block;background: #fff;border: 4px solid #fff;}}</style>
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
							<li class="active">User Detail</li>
						</ol>
					</div>
				</div>
				<div class="col-md-12 user-detail">
					<div class="wdgt wdgt-primary">
						<div class="wdgt-header"><i class="fa fa-table"></i>User Detail</div>
						<div class="wdgt-body tbl" style="padding-bottom:10px;">
							<form role="form">
								<div class="form-group col-md-5">
									<h4 for="email">Name <small>(assigned at birth)</small></h4>
									<input type="text" class="form-control col-sm-12">
									<h4 for="date">Father Name </h4>
									<input type="text" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-5">
									<h4 for="date">Preferred Name </h4>
									<input type="text" class="form-control col-sm-12">
									<h4 for="date">Mother Name </h4>
									<input type="text" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-2">
									<h4 for="date">Photo </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<input type="file">
											</div>
										</li>
									</ul>
								</div>								
								<div class="form-group col-md-7" style="margin-bottom: 20px;">
									<h4>Preferred Category<small>Under the definition of Transgender, been recognized under NALSA Judgment (Supra)</small></h4>
									<select id="e1" class="form-select2">
										<option value="AL">Alabama</option>
										<option value="AR">Arkansas</option>
										<option value="IL">Illinois</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
										<option value="LA">Louisiana</option>
										<option value="MN" selected>Minnesota</option>
										<option value="MS">Mississippi</option>
										<option value="MO">Missouri</option>
										<option value="OK">Oklahoma</option>
										<option value="SD">South Dakota</option>
										<option value="TX">Texas</option>
										<option value="TN">Tennessee</option>
										<option value="WI">Wisconsin</option>
									</select>
								</div>
								<div class="form-group col-md-12">
									<hr>
								</div>
								<div class="form-group col-md-6">
									<h4 for="date">Permanent Address</h4>
									<textarea class="form-control form-warning" rows="4"></textarea>
								</div>
								<div class="form-group col-md-6">
									<h4 for="date">Pincode</h4>
									<input type="text" class="form-control col-sm-6" placeholder="Pin">
									<h4 for="date">District</h4>
									<input type="text" class="form-control col-sm-6" placeholder="Dist">
								</div>
								<div class="form-group col-md-12" style="padding: 11px!important;">
									<input type="checkbox"> if present address is same as permerant address
								</div>
								<div class="form-group col-md-6">
									<h4 for="date">Present Address</h4>
									<textarea class="form-control form-warning" rows="4"></textarea>
								</div>
								<div class="form-group col-md-6">
									<h4 for="date">Pincode</h4>
									<input type="text" class="form-control col-sm-6" placeholder="Pin">
									<h4 for="date">District</h4>
									<input type="text" class="form-control col-sm-6" placeholder="Dist">
								</div>
								<div class="form-group col-md-12">
									<hr>
								</div>
								<div class="form-group col-md-12">
									<h4 for="date">Gharana Details <small>(In Case of Kinner/Hijra)</small></h4>
									<textarea class="form-control form-warning" rows="2"></textarea>
								</div>
								<div class="form-group col-md-4">
									<h4 for="date">Pincode</h4>
									<input type="text" class="form-control col-sm-6">
								</div>
								<div class="form-group col-md-4">
									<h4 for="date">District</h4>
									<input type="text" class="form-control col-sm-6">
								</div>
								<div class="form-group col-md-4">
									<h4 for="date">State</h4>
									<input type="text" class="form-control col-sm-6">
								</div>
								<div class="form-group col-md-12 procedure" style="margin-bottom:10px">
									<hr>
									<h4>Whether undergone Psychiatric Evaluation/HRT/Lazer Therapy (if “YES”), Please submit details:
										<span>
											<input type="radio" name="blue" checked>
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="blue">
											<b class="radio-h4">No </b>										
										</span>	
									</h4>
								</div>
								<div class="form-group col-md-6">
									<h4 for="date">Doctor Name</h4>
									<input type="text" class="form-control col-sm-6">
								</div>
								<div class="form-group col-md-6">
									<h4 for="date">Professional Expertise</h4>
									<input type="text" class="form-control col-sm-6">
								</div>
								<div class="form-group col-md-6">
									<h4 for="date">Phone Number</h4>
									<input type="text" class="form-control col-sm-6">
								</div>
								<div class="form-group col-md-6 procedure">
									<h4 for="date" style="margin-bottom: 12px;">Procedures</h4>
									<span>
										<input type="radio" name="blue" checked>
										<b class="radio-h4">PSYCHIATRIC  EVALUATION</b>										
									</span>
									<span>
										<input type="radio" name="blue">
										<b class="radio-h4">HRT </b>										
									</span>	
									<span>
										<input type="radio" name="blue">
										<b class="radio-h4">LAZER THERAPY </b>										
									</span>
									<br>						
								</div>								
								<div class="form-group col-md-12">
									<hr>
									<h4>All Necessary Document</h4>
								</div>
								<div class="form-group col-md-4 doc">
									<h4 for="email">Birth Certificate </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<a class="group1 cboxElement" href="lib/img/gallery/1.jpg" ><i class="icon icon-eye-open"></i></a>
												<a href="#"><i class="icon icon-trash"></i></a>
											</div>
										</li>
									</ul>
									<input type="file" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-4 doc">
									<h4 for="date">Election Voter </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<a class="group1 cboxElement" href="lib/img/gallery/1.jpg" ><i class="icon icon-eye-open"></i></a>
												<a href="#"><i class="icon icon-trash"></i></a>
											</div>
										</li>
									</ul>
									<input type="file" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-4 doc">
									<h4 for="date">Pan Card </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<a class="group1 cboxElement" href="lib/img/gallery/1.jpg" ><i class="icon icon-eye-open"></i></a>
												<a href="#"><i class="icon icon-trash"></i></a>
											</div>
										</li>
									</ul>
									<input type="file" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-4 doc">
									<h4 for="email">Adhaar Card </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<a class="group1 cboxElement" href="lib/img/gallery/1.jpg" ><i class="icon icon-eye-open"></i></a>
												<a href="#"><i class="icon icon-trash"></i></a>
											</div>
										</li>
									</ul>
									<input type="file" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-4 doc">
									<h4 for="email">Ration Card / BPL Card </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<a class="group1 cboxElement" href="lib/img/gallery/1.jpg" ><i class="icon icon-eye-open"></i></a>
												<a href="#"><i class="icon icon-trash"></i></a>
											</div>
										</li>
									</ul>
									<input type="file" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-4 doc">
									<h4 for="email">Bank Password </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<a class="group1 cboxElement" href="lib/img/gallery/1.jpg" ><i class="icon icon-eye-open"></i></a>
												<a href="#"><i class="icon icon-trash"></i></a>
											</div>
										</li>
									</ul>
									<input type="file" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-4 doc">
									<h4 for="email">Mnrega Card </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<a class="group1 cboxElement" href="lib/img/gallery/1.jpg" ><i class="icon icon-eye-open"></i></a>
												<a href="#"><i class="icon icon-trash"></i></a>
											</div>
										</li>
									</ul>
									<input type="file" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-4 doc">
									<h4 for="email">Passport </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<a class="group1 cboxElement" href="lib/img/gallery/1.jpg" ><i class="icon icon-eye-open"></i></a>
												<a href="#"><i class="icon icon-trash"></i></a>
											</div>
										</li>
									</ul>
									<input type="file" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-4 doc">
									<h4 for="email">High School Leaving Certificate </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<a class="group1 cboxElement" href="lib/img/gallery/1.jpg" ><i class="icon icon-eye-open"></i></a>
												<a href="#"><i class="icon icon-trash"></i></a>
											</div>
										</li>
									</ul>
									<input type="file" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-4 doc">
									<h4 for="email">H.S Passed Certificate </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<a class="group1 cboxElement" href="lib/img/gallery/1.jpg" ><i class="icon icon-eye-open"></i></a>
												<a href="#"><i class="icon icon-trash"></i></a>
											</div>
										</li>
									</ul>
									<input type="file" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-4 doc">
									<h4 for="email">Gradution Passed Certificate </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<a class="group1 cboxElement" href="lib/img/gallery/1.jpg" ><i class="icon icon-eye-open"></i></a>
												<a href="#"><i class="icon icon-trash"></i></a>
											</div>
										</li>
									</ul>
									<input type="file" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-4 doc">
									<h4 for="email">Name Changed Affidavit </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<a class="group1 cboxElement" href="lib/img/gallery/1.jpg" ><i class="icon icon-eye-open"></i></a>
												<a href="#"><i class="icon icon-trash"></i></a>
											</div>
										</li>
									</ul>
									<input type="file" class="form-control col-sm-12">
								</div>						
								<div class="form-group col-md-12">
									<hr>
									<h4>Qualification</h4>
								</div>
								<div class="form-group col-md-6">
									<h4 for="email">Name of Exam</h4>
									<input type="text" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-2">
									<h4 for="date">Passing Year </h4>
									<input type="text" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-2">
									<h4 for="date">Detail </h4>
									<input type="file" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-2">
									<button class="btn btn-primary" style="margin-top: 20px;">+ Add More</button>
								</div>
								<div class="form-group col-md-12 procedure">
									<h4>Whether Name or Gender Changed in documents (if “YES”, please furnish details)
										<span>
											<input type="radio" name="blue" checked>
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="blue">
											<b class="radio-h4">No </b>										
										</span>	
									</h4>
								</div>
								<div class="form-group col-md-7">
									<h4> Changed Name</h4>
									<input type="text" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-5">
									<h4 for="date">Detail</h4>
									<input type="file" class="form-control col-sm-12">
								</div>					
								<div class="form-group col-md-12">
									<hr>
									<h4>Details of Guru (In case, if you are under the shelter of Guru)</h4>
								</div>
								<div class="form-group col-md-6">
									<h4 for="email">Name of Guru</h4>
									<input type="text" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-3">
									<h4 for="date">Picode</h4>
									<input type="text" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-3">
									<h4 for="date">District</h4>
									<input type="text" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-12">
									<h4 for="date">Address Guru <small>(In Case of Kinner/Hijra)</small></h4>
									<textarea class="form-control form-warning" rows="2"></textarea>
								</div>
								<div class="form-group col-md-12">
									<hr>
								</div>
								<div class="form-group col-md-7 procedure">
									<h4 for="date" style="margin-bottom: 12px;">Source of Income</h4>
									<span>
										<input type="radio" name="blue" checked="">
										<b class="radio-h4">Begging</b>										
									</span>
									<span>
										<input type="radio" name="blue">
										<b class="radio-h4">Sex Work </b>										
									</span>	
									<span>
										<input type="radio" name="blue">
										<b class="radio-h4">Employed in any Organization </b>										
									</span>	
									<span>
										<input type="radio" name="blue">
										<b class="radio-h4">Badhai </b>										
									</span>	 				
								</div>
								<div class="form-group col-md-5">
									<!-- <h4 for="date">Source of Income Detail</h4>
									<input type="file" class="form-control col-sm-12"> -->
								</div>								
								<div class="form-group col-md-12">
									<hr>
								</div>
								<div class="form-group col-md-4">
									<h4 for="date">Age</h4>
									<input type="text" class="form-control col-sm-6">
								</div>
								<div class="form-group col-md-4">
									<h4 for="date">Date Of Birth <small>(as per birth certificate</small></h4>
									<input type="text" class="form-control col-sm-6">
								</div>
								<div class="form-group col-md-4">
									<h4 for="date">Phone No </h4>
									<input type="text" class="form-control col-sm-6">
								</div>	
								<div class="form-group col-md-12">
									<h4>Any Criminal/Civil Case pending against you
										<span>
											<input type="radio" name="blue" checked>
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="blue">
											<b class="radio-h4">No </b>										
										</span>	
									</h4>
									<textarea class="form-control form-warning" rows="2"></textarea>
								</div>
								<div class="form-group col-md-12">
									<hr>
									<h4 for="date"> Are you been a victim of any of the following matter, if “YES” Please furnish details any of the following</h4>
								</div>
								<div class="form-group col-md-3 doc">
									<h4 for="email">Adhaar Card </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<a class="group1 cboxElement" href="lib/img/gallery/1.jpg" ><i class="icon icon-eye-open"></i></a>
												<a href="#"><i class="icon icon-trash"></i></a>
											</div>
										</li>
									</ul>
									<input type="file" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-3 doc">
									<h4 for="email">Ration Card / BPL Card </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<a class="group1 cboxElement" href="lib/img/gallery/1.jpg" ><i class="icon icon-eye-open"></i></a>
												<a href="#"><i class="icon icon-trash"></i></a>
											</div>
										</li>
									</ul>
									<input type="file" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-3 doc">
									<h4 for="email">Bank Password </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<a class="group1 cboxElement" href="lib/img/gallery/1.jpg" ><i class="icon icon-eye-open"></i></a>
												<a href="#"><i class="icon icon-trash"></i></a>
											</div>
										</li>
									</ul>
									<input type="file" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-3 doc">
									<h4 for="email">Mnrega Card </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic">
											</a>
											<div class="options" style="background: #403f3fad;">
												<a class="group1 cboxElement" href="lib/img/gallery/1.jpg" ><i class="icon icon-eye-open"></i></a>
												<a href="#"><i class="icon icon-trash"></i></a>
											</div>
										</li>
									</ul>
									<input type="file" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-12">
									<hr>
								</div>
								<div class="form-group col-md-12">
									<a href="#" class="btn btn-default">Cancel</a>
									<a class="btn btn-primary">Edit</a>
								</div>
							</form>
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
	<link rel="stylesheet" href="lib/css/opacity-sliders.css"/>
	<link rel="stylesheet" href="lib/css/icheck.css">
	<link rel="stylesheet" href="lib/css/summernote.css">
	<link rel="stylesheet" href="lib/css/summernote-bs3.css">
	<link rel="stylesheet" href="lib/css/select2.css">
	<script src="lib/js/summernote.js"></script>
	<script src="lib/js/select2.min.js"></script>
	<script src="lib/js/icheck.min.js"></script>
	<script src="lib/js/jquery.maskedinput.min.js"></script>
	<script>
		$(document).ready(function() {
			$('a[href="form_example.html"]').addClass('active').parent().parent().addClass('in');

			// Initializie WYSIWYG
			$('.summernote').summernote({height:150, toolbar: [
				['style', ['bold', 'italic', 'underline', 'clear']],
				['fontsize', ['fontsize']],
				['para', ['ul', 'ol', 'paragraph']]
				]
			});

			$("#e1").select2();
			$('.icheck-blue').iCheck({ checkboxClass: 'icheckbox_flat-blue', radioClass: 'iradio_flat-blue' });
			$("#date").mask("99/99/9999", {placeholder:" "});
			$("#phone").mask("(999) 999-9999", {placeholder:" "});
			$( ".ui-slider2" ).slider({range: "min",max: 255,value: 67,
				slide: function(event, ui) {$( "#amount" ).html( ui.value + " hrs" );}
			});
			
			// Initialize Select2
			$("#e1").select2(); 
			$("#e2").val(["CA","NJ"]).select2();

		});
	</script>
	<script src="lib/js/jquery.colorbox.min.js"></script>
	<script>
		$(document).ready(function() {
			$('a[href="gallery.html"]').addClass('active').parent().parent().addClass('in');
			$(".placeholder").sortable({ connectWith: ".placeholder", containment: ".content" });
			$(".group1").colorbox({rel:'group1'});
		});
	</script>
</body>

</html>