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
							<li class="active">Upload Youtube Video</li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
					<div class="wdgt">
						<?php  
              if (isset($_GET['msg'])) {
                if ($_GET['msg']==1) {
                  print "<p class='alert alert-success'>Your Youtube Video Uploaded Sucessfully</p>";
                }
                if ($_GET['msg']==2) {
                  print "<p class='alert alert-danger'>Youtube Video Code Should be Exactly 11 Characters</p>";
                }
                if ($_GET['msg']==3) {
                  print "<p class='alert alert-success'>Your Youtube Video Deleted Sucessfully</p>";
                }
              }
            ?>
						<div class="wdgt-header"><i class="fa fa-save"></i>Upload Youtube Video</div>
						
						<div class="wdgt-body tbl" style="padding-bottom:10px;">
							<form role="form" action="php/add_video.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="heading">Video Name <small>Basic input</small></label>                                                                                                                      
									<input type="text" class="form-control col-sm-12" name="name" placeholder="Enter Video Name">
								</div>
								<div class="form-group">
									<label for="heading">Youtube Video Code (11 Characters) <small>Basic input</small></label>
									<input type="text" class="form-control col-sm-12" name="code" placeholder="Enter youtube video code(11)">
								</div>
								<div class="form-group" align="middle">
									<button type="submit" class="btn btn-primary" name="submit">Submit</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<?php
        $sql = mysqli_query($connect, "SELECT * FROM video ORDER BY id DESC");
        $video='';
        while ($video_row=mysqli_fetch_array($sql)) {
          $video .='<li  style="width: 45%; height: auto;  background-color: #3b576e">
							<iframe width="auto" height="auto" src="https://www.youtube.com/embed/'.$video_row['code'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

							<p style="color: white; height:80px; padding: 5px; font-style: justify;">'.$video_row['name'].'</p>
							<div align="middle">
							<a class="btn btn-danger" style="text-align: center; color: white" href="php/delete_video.php?delete_id='.$video_row['id'].'"><i class="icon icon-remove"></i>Delete</a>
							</div>
						</li>';

        }
        ?>
					<ul class="thumbnails">
						<?php echo $video;?>
					</ul>
      
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
	 
</body>

</html>