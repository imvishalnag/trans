<?php include "php/auth.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>
<!-- Adjustable Styles -->
<link rel="stylesheet" href="lib/css/opacity-sliders.css" />
<link rel="stylesheet" href="lib/css/icheck.css">
<link rel="stylesheet" href="lib/css/summernote.css">
<link rel="stylesheet" href="lib/css/summernote-bs3.css">
<link rel="stylesheet" href="lib/css/select2.css">
<link rel="stylesheet" href="lib/css/colorbox.css" />

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
							<li class="active">News Update Panel</li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="wdgt">
							<?php
							if (isset($_GET['msg'])) {
								if ($_GET['msg'] == 1) {
									print "<p class='alert alert-success'>News Post Uploaded Sucessfully</p>";
								}
								if ($_GET['msg'] == 2) {
									print "<p class='alert alert-danger'>Something went worng please try again.</p>";
								}
								if ($_GET['msg'] == 3) {
									print "<p class='alert alert-success'>News Post Deleted Sucessfully</p>";
								}
								if ($_GET['msg'] == 4) {
									print "<p class='alert alert-success'>sorry, your file is too large</p>";
								}
								if ($_GET['msg'] == 5) {
									print "<p class='alert alert-success'>sorry your file format is not supported</p>";
								}
								if ($_GET['msg'] == 6) {
									print "<p class='alert alert-success'>News Post Deleted Succesfully</p>";
								}
								if ($_GET['msg'] == 7) {
									print "<p class='alert alert-success'>Something went worng please try again.</p>";
								}
							}
							?>
							<div class="wdgt-header"><i class="fa fa-save"></i>News Update Here</div>

							<div class="wdgt-body tbl" style="padding-bottom:10px;">
								<form role="form" action="php/add_news.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="heading">Heading <small>Basic input</small></label>
										<input type="text" class="form-control col-sm-12" name="heading" placeholder="Enter Heading Here">
									</div>
									<div class="form-group">
										<label for="file">Image <small>File Input</small></label>
										<input type="file" onchange="readURL(this);" class="form-control col-sm-12" name="image_file"><br>
										<img style="width: 200px;" id="blah" src="" />
									</div>
									<div class="form-group">
										<label for="descpt">Description <small>Basic input</small></label>
										<input type="text" class="form-control col-sm-12" name="descpt" placeholder="Enter Description Here">
									</div>
									<div class="form-group">
										<label>News Content <small>Editor</small></label>
										<textarea class="summernote" name="content"></textarea>
									</div>
									<div class="form-group" align="middle">
										<button type="submit" class="btn btn-primary" name="submit">Submit</button>
									</div>

								</form>
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
		<script src="lib/js/summernote.js"></script>
		<script src="lib/js/select2.min.js"></script>
		<script src="lib/js/icheck.min.js"></script>
		<script src="lib/js/jquery.maskedinput.min.js"></script>
		<script>
			$(document).ready(function() {
				$('a[href="form_example.html"]').addClass('active').parent().parent().addClass('in');

				// Initializie WYSIWYG
				$('.summernote').summernote({
					height: 150,
					toolbar: [
						['style', ['bold', 'italic', 'underline', 'clear']],
						['fontsize', ['fontsize']],
						['para', ['ul', 'ol', 'paragraph']]
					]
				});

				$("#e1").select2();
				$('.icheck-blue').iCheck({
					checkboxClass: 'icheckbox_flat-blue',
					radioClass: 'iradio_flat-blue'
				});
				$("#date").mask("99/99/9999", {
					placeholder: " "
				});
				$("#phone").mask("(999) 999-9999", {
					placeholder: " "
				});
				$(".ui-slider2").slider({
					range: "min",
					max: 255,
					value: 67,
					slide: function(event, ui) {
						$("#amount").html(ui.value + " hrs");
					}
				});

			});
		</script>
		<!-- Adjustable JS -->
		<script src="lib/js/jquery.colorbox.min.js"></script>
		<script>
			$(document).ready(function() {
				$('a[href="gallery.html"]').addClass('active').parent().parent().addClass('in');
				$(".placeholder").sortable({
					connectWith: ".placeholder",
					containment: ".content"
				});
				$(".group1").colorbox({
					rel: 'group1'
				});
			});
		</script>
		<!-- code to display image while uploading -->
		<script type="text/javascript">
			function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function(e) {
						$('#blah').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}
		</script>

</body>

</html>