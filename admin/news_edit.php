<?php include "php/auth.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>
<!-- Adjustable Styles -->
	<link rel="stylesheet" href="lib/css/opacity-sliders.css"/>
	<link rel="stylesheet" href="lib/css/icheck.css">
	<link rel="stylesheet" href="lib/css/summernote.css">
	<link rel="stylesheet" href="lib/css/summernote-bs3.css">
	<link rel="stylesheet" href="lib/css/select2.css">
	<link rel="stylesheet" href="lib/css/colorbox.css"/>

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
							<li class="active">News Edit & Update Panel</li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					<div class="wdgt">
						<?php  
              if (isset($_GET['msg'])) {
                if ($_GET['msg']==2) {
                  print "<p class='alert alert-danger'>Something went worng please try again.</p>";
                }
                if ($_GET['msg']==4) {
                  print "<p class='alert alert-success'>sorry, your file is too large</p>";
                }
                if ($_GET['msg']==5) {
                  print "<p class='alert alert-success'>sorry your file format is not supported</p>";
                }
              }
            ?>

            <?php
            $edit_id = $_GET['edit_id'];
            $sql = "SELECT * FROM news WHERE id='$edit_id' LIMIT 1";
            $news = '';
            $result = $connect->query($sql);
            if ($result->num_rows>0) {
                while ($result_row=$result->fetch_assoc()) {
                	$heading = $result_row['heading'];
                	$image = $result_row['image'];
                	$descptt = $result_row['descpt'];
                	$content = $result_row['content'];
                	$date_added = $result_row['date_added'];
                	$id = $result_row['id'];
                                                           }
                                      }
                            ?>
						<div class="wdgt-header"><i class="fa fa-save"></i>News Edit & Update Here</div>
						
						<div class="wdgt-body tbl" style="padding-bottom:10px;">
							<form role="form" action="php/update_news.php" method="post" enctype="multipart/form-data">
								<input type="hidden" name="edit_id" value="<?php echo $id; ?>">
								<div class="form-group">
									<label for="heading">Heading <small>Basic input</small></label>
									<input type="text" class="form-control col-sm-12" name="heading" value="<?php echo $heading; ?>">
								</div>
								<div class="form-group">
									<label for="file">Image (Only if you want to change it)<small>File Input</small></label>
									<input type="file" onchange="readURL(this);" class="form-control col-sm-12" name="image_file"><br>
									<div class="col-md-6"><h4>New Image</h4>
										<img style="width: 200px;" id="blah" src=""  /></div>
        							<div class="col-md-6"><h4>Existing Image</h4>
        								<img style="width: 200px;" src="../uploads/news_image/<?php echo $image; ?>" /></div>
        							
								</div>
								<div class="form-group">
									<label for="descpt">Description <small>Basic input</small></label>
									<input type="text" class="form-control col-sm-12" name="descpt" value="<?php echo $descptt; ?>">
								</div>
								<div class="form-group">
									<label>News Content <small>Editor</small></label>
									<textarea class="summernote" name="content">
										<?php echo $content; ?>
									</textarea>
								</div>
								<div class="form-group" align="middle">
									<a href="news_single.php?detail_id=<?php echo $id; ?>" class="btn btn-primary">Cancel</a>
									<button type="update" class="btn btn-primary" name="update">Update</button>
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

		});
	</script>
	<!-- Adjustable JS -->
	<script src="lib/js/jquery.colorbox.min.js"></script>
	<script>
		$(document).ready(function() {
			$('a[href="gallery.html"]').addClass('active').parent().parent().addClass('in');
			$(".placeholder").sortable({ connectWith: ".placeholder", containment: ".content" });
			$(".group1").colorbox({rel:'group1'});
		});
	</script>
     <!-- code to display image while uploading -->
	<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
	 
</body>

</html>