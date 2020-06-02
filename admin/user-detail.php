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
								<div class="form-group col-md-5 col-xs-6">
									<h4 for="email">1. Name <small>(assigned at birth)</small></h4>
									<input type="text" class="form-control col-sm-12">
									<h4 for="date">2. Father Name </h4>
									<input type="text" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-5 col-xs-6">
									<h4 for="date">3. Preferred Name </h4>
									<input type="text" class="form-control col-sm-12">
									<h4 for="date">4. Mother Name </h4>
									<input type="text" class="form-control col-sm-12">
								</div>
								<div class="form-group col-md-2 col-xs-12">
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
								<div class="form-group col-md-8 col-xs-12" style="margin-bottom: 20px;">
									<h4>5. Preferred Category<small>Under the definition of Transgender, been recognized under NALSA Judgment (Supra)</small></h4>
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
									<h4>6. Permanent Address</h4>
								</div>
								<div class="form-group col-md-6 col-xs-6">
									<h4 for="date">Address</h4>
									<textarea class="form-control form-warning" rows="4"></textarea>
								</div>
								<div class="form-group col-md-6 col-xs-6">
									<h4 for="date">Pincode</h4>
									<input type="text" class="form-control col-sm-6" placeholder="Pin">
									<h4 for="date">District</h4>
									<input type="text" class="form-control col-sm-6" placeholder="Dist">
								</div>
								<div class="form-group col-md-12">
									<h4>7. Present Address</h4>
								</div>
								<div class="form-group col-md-12" style="padding: 11px!important;">
									<input type="checkbox"> if present address is same as permerant address
								</div>
								<div class="form-group col-md-6 col-xs-6">
									<h4 for="date">Present Address</h4>
									<textarea class="form-control form-warning" rows="4"></textarea>
								</div>
								<div class="form-group col-md-6 col-xs-6">
									<h4 for="date">Pincode</h4>
									<input type="text" class="form-control col-sm-6" placeholder="Pin">
									<h4 for="date">District</h4>
									<input type="text" class="form-control col-sm-6" placeholder="Dist">
								</div>
								<div class="form-group col-md-12">
									<hr>
								</div>
								<div class="form-group col-md-12">
									<h4 for="date">8. Gharana Details <small>(In Case of Kinner/Hijra)</small></h4>
									<textarea class="form-control form-warning" rows="2"></textarea>
								</div>
								<div class="form-group col-md-4 col-xs-4">
									<h4 for="date">Pincode</h4>
									<input type="text" class="form-control col-sm-6">
								</div>
								<div class="form-group col-md-4 col-xs-4">
									<h4 for="date">District</h4>
									<input type="text" class="form-control col-sm-6">
								</div>
								<div class="form-group col-md-4 col-xs-4">
									<h4 for="date">State</h4>
									<input type="text" class="form-control col-sm-6">
								</div>
								<div class="form-group col-md-12 procedure" style="margin-bottom:10px">
									<hr>
									<h4>9. Whether undergone Psychiatric Evaluation/HRT/Lazer Therapy (if “YES”), Please submit details:
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
								<div class="form-group col-md-6 col-xs-6">
									<h4 for="date">Doctor Name</h4>
									<input type="text" class="form-control col-sm-6">
								</div>
								<div class="form-group col-md-6 col-xs-6">
									<h4 for="date">Professional Expertise</h4>
									<input type="text" class="form-control col-sm-6">
								</div>
								<div class="form-group col-md-6 col-xs-6">
									<h4 for="date">Phone Number</h4>
									<input type="text" class="form-control col-sm-6">
								</div>
								<div class="form-group col-md-6 col-xs-6 procedure">
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
									<h4>10. Do you have any of the following documents ? if “YES”, Tick (Yes) & submit a copy of the same</h4>
								</div>
								<div class="row">
									<div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
										<h4 for="email">10.a. Birth Certificate 
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
									<div class="form-group col-md-4 col-xs-4 doc">
										<input type="file" class="form-control col-sm-12">
									</div>
									<div class="form-group col-md-2 col-xs-2 doc">
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
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
										<h4 for="date">10.b. Election Voter 
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
									<div class="form-group col-md-4 col-xs-4 doc">
										<input type="file" class="form-control col-sm-12">
									</div>
									<div class="form-group col-md-2 col-xs-2 doc">
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
									</div>
								</div>
										
								<div class="row">
									<div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
										<h4 for="date">10.c. Pan Card 
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
									<div class="form-group col-md-4 col-xs-4 doc">
										<input type="file" class="form-control col-sm-12">
									</div>
									<div class="form-group col-md-2 col-xs-2 doc">
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
									</div>
								</div>
								<div class="row">
										
									<div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
										<h4 for="email">10.d. Adhaar Card 
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
									<div class="form-group col-md-4 col-xs-4 doc">
										<input type="file" class="form-control col-sm-12">
									</div>
									<div class="form-group col-md-2 col-xs-2 doc">
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
									</div>
								</div>
								<div class="row">
										
									<div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
										<h4 for="email">10.e. Ration Card / BPL Card 
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
									<div class="form-group col-md-4 col-xs-4 doc">
										<input type="file" class="form-control col-sm-12">
									</div>
									<div class="form-group col-md-2 col-xs-2 doc">
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
									</div>
								</div>
								<div class="row">
										
									<div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
										<h4 for="email">10.f. Bank Password 
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
									<div class="form-group col-md-4 col-xs-4 doc">
										<input type="file" class="form-control col-sm-12">
									</div>
									<div class="form-group col-md-2 col-xs-2 doc">
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
									</div>
								</div>
								<div class="row">		
									<div class="form-group col-md-5 col-xs-5  doc" style="margin-left: 30px">
										<h4 for="email">10.g. Mnrega Card 
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
									<div class="form-group col-md-4 col-xs-4  doc">
										<input type="file" class="form-control col-sm-12">
									</div>
									<div class="form-group col-md-2 col-xs-2  doc">
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
									</div>
								</div>
								<div class="row">		
									<div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
										<h4 for="email">10.h. Passport 
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
									<div class="form-group col-md-4 col-xs-4 doc">
										<input type="file" class="form-control col-sm-12">
									</div>
									<div class="form-group col-md-2 col-xs-2 doc">
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
									</div>
								</div>
								<div class="row">		
									<div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
										<h4 for="email">10.i. High School Leaving Certificate 
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
									<div class="form-group col-md-4 col-xs-4 doc">
										<input type="file" class="form-control col-sm-12">
									</div>
									<div class="form-group col-md-2 col-xs-2 doc">
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
									</div>
								</div>	
								<div class="row">	
									<div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
										<h4 for="email">10.j. H.S Passed Certificate 
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
									<div class="form-group col-md-4 col-xs-4 doc">
										<input type="file" class="form-control col-sm-12">
									</div>
									<div class="form-group col-md-2 col-xs-2 doc">
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
									</div>
								</div>	
								<div class="row">
									<div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
										<h4 for="email">10.k. Gradution Passed Certificate 
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
									<div class="form-group col-md-4 col-xs-4 doc">
										<input type="file" class="form-control col-sm-12">
									</div>
									<div class="form-group col-md-2 col-xs-2 doc">
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
									</div>								
								</div>	
								<div class="row">											
									<div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
										<h4 for="email">10.l. Name Changed Affidavit 
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
									<div class="form-group col-md-4 col-xs-4 doc">
										<input type="file" class="form-control col-sm-12">
									</div>
									<div class="form-group col-md-2 col-xs-2 doc">
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
									</div>									
								</div>			
									<div class="form-group col-md-12">
									<hr>
									<h4>11. Qualification (if any), furnish details & submit a copy of the same :</h4>
								</div>
								<div class="form-group col-md-6">
									<h4 for="email">Name of the School/College/University</h4>
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
									<button class="btn btn-primary" style="margin-top: 37px;margin-bottom:5px">+ Add More</button>
								</div>
								<div class="form-group col-md-12">
									<h4>12. Other Qualification (if any), furnish details & submit a copy of the same : 
										<span>
											<input type="radio" name="blue" checked>
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="blue">
											<b class="radio-h4">No </b>										
										</span>	</h4>
								</div>
								<div class="form-group col-md-6">
									<h4 for="email">Name of the institution</h4>
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
									<button class="btn btn-primary" style="margin-top: 37px;margin-bottom:5px">+ Add More</button>
								</div>
								<div class="form-group col-md-12 procedure">
									<hr>
									<h4>13. Whether Name or Gender Changed in documents (if “YES”, please furnish details)
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
									<h4>14. Details of Guru (In case, if you are under the shelter of Guru)</h4>
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
									<h4 for="date" style="margin-bottom: 12px;">15. Source of Income : Please Tick (√), and furnish details : </h4>
								</div>
								<div class="form-group col-md-7 procedure">
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
									<h4 for="date">16. Age</h4>
									<input type="text" class="form-control col-sm-6">
								</div>
								<div class="form-group col-md-4">
									<h4 for="date">17. Date Of Birth <small>(as per birth certificate</small></h4>
									<input type="text" class="form-control col-sm-6">
								</div>
								<div class="form-group col-md-4">
									<h4 for="date">18. Phone No </h4>
									<input type="text" class="form-control col-sm-6">
								</div>	
								<div class="form-group col-md-12">
									<h4>19. Any Criminal/Civil Case pending against you, if “YES”, please furnish details
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
									<h4 for="date">20. Are you been a victim of any of the following matter, if “YES” Please furnish details any of the following</h4>
								</div>
								<div class="row">
										
									<div class="form-group col-md-5 doc" style="margin-left: 30px">
										<h4 for="email">Bullying 
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
									<div class="form-group col-md-4 doc">
										<input type="text" class="form-control col-sm-12" placeholder="detail (if any)">
									</div>
									<div class="form-group col-md-2 doc">
										<ul class="thumbnails">
											<li>
												<a title="Group photo 1">
													<img src="../images/profilepic.png" class="profilepic">
												</a>
												<div class="options" style="background: #403f3fad;">
													<input type="file" class="form-control col-sm-12">
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="row">
										
									<div class="form-group col-md-5 doc" style="margin-left: 30px">
										<h4 for="email">Police Harassment (in any form)
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
									<div class="form-group col-md-4 doc">
										<input type="text" class="form-control col-sm-12" placeholder="detail (if any)">
									</div>
									<div class="form-group col-md-2 doc">
										<ul class="thumbnails">
											<li>
												<a title="Group photo 1">
													<img src="../images/profilepic.png" class="profilepic">
												</a>
												<div class="options" style="background: #403f3fad;">
													<input type="file" class="form-control col-sm-12">
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="row">										
									<div class="form-group col-md-5 doc" style="margin-left: 30px">
										<h4 for="email">Discrimination from any Authority(in any establishment or public places )
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
									<div class="form-group col-md-4 doc">
										<input type="text" class="form-control col-sm-12" placeholder="detail (if any)">
									</div>
									<div class="form-group col-md-2 doc">
										<ul class="thumbnails">
											<li>
												<a title="Group photo 1">
													<img src="../images/profilepic.png" class="profilepic">
												</a>
												<div class="options" style="background: #403f3fad;">
													<input type="file" class="form-control col-sm-12">
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="row">										
									<div class="form-group col-md-5 doc" style="margin-left: 30px">
										<h4 for="email">Family or Social torture. 
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
									<div class="form-group col-md-4 doc">
										<input type="text" class="form-control col-sm-12" placeholder="detail (if any)">
									</div>
									<div class="form-group col-md-2 doc">
										<ul class="thumbnails">
											<li>
												<a title="Group photo 1">
													<img src="../images/profilepic.png" class="profilepic">
												</a>
												<div class="options" style="background: #403f3fad;">
													<input type="file" class="form-control col-sm-12">
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6 doc">
										<ul class="thumbnails">
											<li>
												<a title="Group photo 1">
													<img src="../images/profilepic.png" class="profilepic">
												</a>
												<div class="options" style="background: #403f3fad;">
													<input type="file" class="form-control col-sm-12">
												</div>
											</li>
										</ul>
									</div>
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