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
							<li class="active">User Form</li>
						</ol>
					</div>
				</div>
				<div class="col-md-12 user-detail">
					<div class="wdgt wdgt-primary">
						<div class="wdgt-header"><i class="fa fa-table"></i>User Form</div>
						<div class="wdgt-body tbl" style="padding-bottom:10px;">
							<form role="form" enctype="multipart/form-data" method="post" action="">
								<div class="form-group col-md-5 col-xs-6">
									<h4 for="email">1. Name <small>(assigned at birth)</small></h4>
									<input type="text" class="form-control col-sm-12" name="name">
									<h4 for="date">2. Father Name </h4>
									<input type="text" class="form-control col-sm-12" name="father_name">
								</div>
								<div class="form-group col-md-5 col-xs-6">
									<h4 for="date">3. Preferred Name </h4>
									<input type="text" class="form-control col-sm-12" name="prefered_name">
									<h4 for="date">4. Mother Name </h4>
									<input type="text" class="form-control col-sm-12" name="mother_name">
								</div>
								<div class="form-group col-md-2 col-xs-12">
									<h4 for="date">Photo </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../images/profilepic.png" class="profilepic" id="user_image_src">
											</a>
											<div class="options" style="background: #403f3fad;">
												<input type="file" name="user_image" id="user_image" onchange="fileTest(this,'user_image')">
											</div>
										</li>
									</ul>
								</div>								
								<div class="form-group col-md-8 col-xs-12" style="margin-bottom: 20px;">
									<h4>5. Preferred Category<small>Under the definition of Transgender, been recognized under NALSA Judgment (Supra)</small></h4>
									<select id="e1" class="form-select2" name="catgegory">
										<option value="Alabama" selected>Alabama</option>
										<option value="Arkansas">Arkansas</option>
										<option value="Illinois">Illinois</option>
										<option value="Iowa">Iowa</option>
										<option value="Kansas">Kansas</option>
										<option value="Kentucky">Kentucky</option>
										<option value="Louisiana">Louisiana</option>
										<option value="Minnesota">Minnesota</option>
										<option value="Mississippi">Mississippi</option>
										<option value="Missouri">Missouri</option>
										<option value="Oklahoma">Oklahoma</option>
										<option value="South Dakota">South Dakota</option>
										<option value="Texas">Texas</option>
										<option value="Tennessee">Tennessee</option>
										<option value="Wisconsin">Wisconsin</option>
									</select>
								</div>
								<div class="form-group col-md-12">
									<hr>
									<h4>6. Permanent Address</h4>
								</div>
								<div class="form-group col-md-6 col-xs-6">
									<h4 for="date">Address</h4>
									<textarea class="form-control form-warning" rows="4" id="p_address" name="p_address"></textarea>
								</div>
								<div class="form-group col-md-6 col-xs-6">
									<h4 for="date">Pincode</h4>
									<input type="text" class="form-control col-sm-6" placeholder="Pin" id="p_pin" name="p_pin">
									<h4 for="date">District</h4>
									<input type="text" class="form-control col-sm-6" placeholder="Dist" id="p_dist" name="p_dist">
								</div>
								<div class="form-group col-md-12">
									<h4>7. Present Address</h4>
								</div>
								<div class="form-group col-md-12" style="padding: 11px!important;">
									<input type="checkbox" id="p_address_same"> if present address is same as permerant address
								</div>
								<div class="form-group col-md-6 col-xs-6">
									<h4 for="date">Present Address</h4>
									<textarea class="form-control form-warning" rows="4" id="r_address" name="r_address"></textarea>
								</div>
								<div class="form-group col-md-6 col-xs-6">
									<h4 for="date">Pincode</h4>
									<input type="text" class="form-control col-sm-6" placeholder="Pin" id="r_pin" name="r_pin">
									<h4 for="date">District</h4>
									<input type="text" class="form-control col-sm-6" placeholder="Dist" id="r_dist" name="r_dist">
								</div>
								<div class="form-group col-md-12">
									<hr>
								</div>
								<div class="form-group col-md-12">
									<h4 for="date">8. Gharana Details <small>(In Case of Kinner/Hijra)</small></h4>
									<textarea class="form-control form-warning" rows="2" name="gh_details"></textarea>
								</div>
								<div class="form-group col-md-4 col-xs-4">
									<h4 for="date">Pincode</h4>
									<input type="text" class="form-control col-sm-6" name="gh_pin">
								</div>
								<div class="form-group col-md-4 col-xs-4">
									<h4 for="date">District</h4>
									<input type="text" class="form-control col-sm-6" name="gh_dist">
								</div>
								<div class="form-group col-md-4 col-xs-4">
									<h4 for="date">State</h4>
									<input type="text" class="form-control col-sm-6" name="gh_state">
								</div>
								<div class="form-group col-md-12 procedure" style="margin-bottom:10px">
									<hr>
									<h4>9. Whether undergone Psychiatric Evaluation/HRT/Lazer Therapy (if “YES”), Please submit details:
										<span>
											<input type="radio" name="phy_status" value="yes" onclick="checkDoctor()">
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="phy_status" value="no" onclick="checkDoctor()" checked>
											<b class="radio-h4">No </b>										
										</span>	
									</h4>
								</div>
								<span id="doctor_div" style="display: none">
									<div class="form-group col-md-6 col-xs-6">
										<h4 for="date">Doctor Name</h4>
										<input type="text" class="form-control col-sm-6" name="phy_doctor">
									</div>
									<div class="form-group col-md-6 col-xs-6">
										<h4 for="date">Professional Expertise</h4>
										<input type="text" class="form-control col-sm-6" name="phy_exp">
									</div>
									<div class="form-group col-md-6 col-xs-6">
										<h4 for="date">Phone Number</h4>
										<input type="text" class="form-control col-sm-6" name="phy_phone">
									</div>
									<div class="form-group col-md-6 col-xs-6 procedure">
										<h4 for="date" style="margin-bottom: 12px;">Procedures</h4>
										<span>
											<input type="radio" name="phy_category" value="PSYCHIATRIC  EVALUATION">
											<b class="radio-h4">PSYCHIATRIC  EVALUATION</b>										
										</span>
										<span>
											<input type="radio" name="phy_category" value="HRT">
											<b class="radio-h4">HRT </b>										
										</span>	
										<span>
											<input type="radio" name="phy_category" value="LAZER THERAPY">
											<b class="radio-h4">LAZER THERAPY </b>										
										</span>
										<br>						
									</div>	
								</span>

								<div class="form-group col-md-12">
									<hr>
									<h4>10. Do you have any of the following documents ? if “YES”, Tick (Yes) & submit a copy of the same</h4>
								</div>
								<div class="row">
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="email">10.a. Birth Certificate</h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
											<input type="radio" name="birth_status" value="yes" onclick="checkFileDiv('birth_status')">
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="birth_status" checked value="no" onclick="checkFileDiv('birth_status')">
											<b class="radio-h4">No </b>										
										</span>	
									</div>

									<div class="form-group col-md-4 col-xs-4 doc" id="birth_status_div" style="display: none">
										<input type="file" class="form-control col-sm-12" name="birth_file" required>
									</div>
									<!-- <div class="form-group col-md-2 col-xs-2 doc">
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
									</div> -->
								</div>
								<div class="row">
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="date">10.b. Election Voter</h4></div>
									<div class="form-group col-md-2 col-xs-2 doc"> 
										<span>
											<input type="radio" name="voter_status" value="yes" onclick="checkFileDiv('voter_status')">
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="voter_status" checked value="no" onclick="checkFileDiv('voter_status')">
											<b class="radio-h4">No </b>										
										</span>	
									</div>
									<div class="form-group col-md-4 col-xs-4 doc" id="voter_status_div" style="display: none;">
										<input type="file" class="form-control col-sm-12" name="voter_file" required>
									</div>
									<!-- <div class="form-group col-md-2 col-xs-2 doc">
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
									</div> -->
								</div>
										
								<div class="row">
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="date">10.c. Pan Card </h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
											<input type="radio" name="pan_status" value="yes" onclick="checkFileDiv('pan_status')">
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="pan_status" value="no" checked onclick="checkFileDiv('pan_status')">
											<b class="radio-h4">No </b>										
										</span>	
									</div>
									<div class="form-group col-md-4 col-xs-4 doc" id="pan_status_div" style="display: none;">
										<input type="file" class="form-control col-sm-12" name="pan_file" required>
									</div>
									<!-- <div class="form-group col-md-2 col-xs-2 doc">
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
									</div> -->
								</div>
								<div class="row">
										
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"> <h4 for="email">10.d. Adhaar Card </h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
											<input type="radio" name="aadhar_status" value="yes"  onclick="checkFileDiv('aadhar_status')">
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="aadhar_status" value="no" checked onclick="checkFileDiv('aadhar_status')">
											<b class="radio-h4">No </b>										
										</span>
									</div>
									<div class="form-group col-md-4 col-xs-4 doc" id="aadhar_status_div" style="display: none;">
										<input type="file" class="form-control col-sm-12" name="aadhar_file" required>
									</div>
									<!-- <div class="form-group col-md-2 col-xs-2 doc">
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
									</div> -->
								</div>
								<div class="row">
										
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="email">10.e. Ration Card / BPL Card</h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
											<input type="radio" name="ration_status" value="yes"  onclick="checkFileDiv('ration_status')">
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="ration_status" value="no" checked onclick="checkFileDiv('ration_status')">
											<b class="radio-h4">No </b>										
										</span>
									</div>
									<div class="form-group col-md-4 col-xs-4 doc" id="ration_status_div" style="display: none;">
										<input type="file" class="form-control col-sm-12" name="ration_file" required>
									</div>
									<!-- <div class="form-group col-md-2 col-xs-2 doc">
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
									</div> -->
								</div>
								<div class="row">
										
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="email">10.f. Bank Password </h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
											<input type="radio" name="bank_status" value="yes"  onclick="checkFileDiv('bank_status')">
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="bank_status" value="no" checked onclick="checkFileDiv('bank_status')">
											<b class="radio-h4">No </b>										
										</span>	
									</div>
									<div class="form-group col-md-4 col-xs-4 doc" id="bank_status_div" style="display: none;">
										<input type="file" class="form-control col-sm-12" name="bank_file" required>
									</div>
									<!-- <div class="form-group col-md-2 col-xs-2 doc">
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
									</div> -->
								</div>
								<div class="row">		
									<div class="form-group col-md-4 col-xs-4  doc" style="margin-left: 30px"><h4 for="email">10.g. Mnrega Card </h4></div>
									<div class="form-group col-md-2 col-xs-2  doc">
										<span>
											<input type="radio" name="mnrg_status" value="yes"  onclick="checkFileDiv('mnrg_status')">
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="mnrg_status" value="no" checked onclick="checkFileDiv('mnrg_status')">
											<b class="radio-h4">No </b>										
										</span>	
									</div>
									<div class="form-group col-md-4 col-xs-4  doc" id="mnrg_status_div" style="display: none;">
										<input type="file" class="form-control col-sm-12" name="mnrg_file">
									</div>
									<!-- <div class="form-group col-md-2 col-xs-2  doc">
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
									</div> -->
								</div>
								<div class="row">		
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="email">10.h. Passport </h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
											<input type="radio" name="pass_status" value="yes"  onclick="checkFileDiv('pass_status')">
											<b class="radio-h4">Yes</b>	
										</span>
										<span>
											<input type="radio" name="pass_status" value="no" checked onclick="checkFileDiv('pass_status')">
											<b class="radio-h4">No </b>	
										</span>	
									</div>
									<div class="form-group col-md-4 col-xs-4 doc" id="pass_status_div" style="display: none;">
										<input type="file" class="form-control col-sm-12" name="pass_file" required>
									</div>
									<!-- <div class="form-group col-md-2 col-xs-2 doc">
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
									</div> -->
								</div>
								<div class="row">		
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="email">10.i. High School Leaving Certificate </h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
											<input type="radio" name="hslc_status" value="yes"  onclick="checkFileDiv('hslc_status')">
											<b class="radio-h4">Yes</b>		
										</span>
										<span>
											<input type="radio" name="hslc_status" value="no" checked onclick="checkFileDiv('hslc_status')">
											<b class="radio-h4">No </b>										
										</span>	
									</div>
									<div class="form-group col-md-4 col-xs-4 doc" id="hslc_status_div" style="display: none;">
										<input type="file" class="form-control col-sm-12" name="hslc_file" required>
									</div>
									<!-- <div class="form-group col-md-2 col-xs-2 doc">
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
									</div> -->
								</div>	
								<div class="row">	
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="email">10.j. H.S Passed Certificate </h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
											<input type="radio" name="hs_status" value="yes"  onclick="checkFileDiv('hs_status')">
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="hs_status" value="no" checked onclick="checkFileDiv('hs_status')">
											<b class="radio-h4">No </b>										
										</span>	
									</div>
									<div class="form-group col-md-4 col-xs-4 doc" id="hs_status_div" style="display: none;">
										<input type="file" class="form-control col-sm-12" name="hs_file" required>
									</div>
									<!-- <div class="form-group col-md-2 col-xs-2 doc">
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
									</div> -->
								</div>	
								<div class="row">
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="email">10.k. Gradution Passed Certificate </h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
											<input type="radio" name="graduation_status" value="yes"  onclick="checkFileDiv('graduation_status')">
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="graduation_status" value="no" checked onclick="checkFileDiv('graduation_status')">
											<b class="radio-h4">No </b>										
										</span>	
									</div>
									<div class="form-group col-md-4 col-xs-4 doc" id="graduation_status_div" style="display: none;">
										<input type="file" class="form-control col-sm-12" name="graduation_file" required>
									</div>
									<!-- <div class="form-group col-md-2 col-xs-2 doc">
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
									</div>		 -->						
								</div>	
								<div class="row">											
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="email">10.l. Name Changed Affidavit </h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
											<input type="radio" name="name_chng_status" value="yes"  onclick="checkFileDiv('name_chng_status')">
											<b class="radio-h4">Yes</b>
										</span>
										<span>
											<input type="radio" name="name_chng_status" value="no" checked onclick="checkFileDiv('name_chng_status')">
											<b class="radio-h4">No </b>	
										</span>	
									</div>
									<div class="form-group col-md-4 col-xs-4 doc" id="name_chng_status_div" style="display: none;">
										<input type="file" class="form-control col-sm-12" name="name_chng_file" required> 
									</div>
									<!-- <div class="form-group col-md-2 col-xs-2 doc">
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
									</div>	 -->								
								</div>			
									<div class="form-group col-md-12">
									<hr>
									<h4>11. Qualification (if any), furnish details & submit a copy of the same :</h4>
								</div>
								<span id="qualification_div">
									<div class="form-group col-md-6">
										<h4 for="email">Name of the School/College/University</h4>
										<input type="text" class="form-control col-sm-12" name="q_name[]">
									</div>
									<div class="form-group col-md-2">
										<h4 for="date">Passing Year </h4>
										<input type="text" class="form-control col-sm-12" name="q_year[]">
									</div>
									<div class="form-group col-md-2">
										<h4 for="date">Proof </h4>
										<input type="file" class="form-control col-sm-12" name="q_file[]">
									</div>
									<div class="form-group col-md-2">
										<button class="btn btn-primary" style="margin-top: 37px;margin-bottom:5px" onclick="qualificationAdd()">+ Add More</button>
									</div>
								</span>
								<!-- <div class="form-group col-md-12">
									<h4>12. Other Qualification (if any), furnish details & submit a copy of the same : 
										<span>
											<input type="radio" name="blue" checked>
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="blue">
											<b class="radio-h4">No </b>										
										</span>	</h4>
								</div> -->
								<!-- <div class="form-group col-md-6">
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
								</div> -->
								<div class="form-group col-md-12 procedure">
									<hr>
									<h4>13. Whether Name or Gender Changed in documents (if “YES”, please furnish details)
										<span>
											<input type="radio" name="gender_status" value="yes" >
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="gender_status" value="no" checked>
											<b class="radio-h4">No </b>										
										</span>	
									</h4>
								</div>
								<div class="form-group col-md-7">
									<h4> Changed Name</h4>
									<input type="text" class="form-control col-sm-12" name="change_name">
								</div>
								<div class="form-group col-md-5">
									<h4 for="date">Detail</h4>
									<input type="file" class="form-control col-sm-12" name="change_file">
								</div>					
								<div class="form-group col-md-12">
									<hr>
									<h4>14. Details of Guru (In case, if you are under the shelter of Guru)</h4>
								</div>
								<div class="form-group col-md-6">
									<h4 for="email">Name of Guru</h4>
									<input type="text" class="form-control col-sm-12" name="guru_name">
								</div>
								<div class="form-group col-md-3">
									<h4 for="date">Picode</h4>
									<input type="text" class="form-control col-sm-12" name="guru_pin">
								</div>
								<div class="form-group col-md-3">
									<h4 for="date">District</h4>
									<input type="text" class="form-control col-sm-12" name="guru_dist">
								</div>
								<div class="form-group col-md-12">
									<h4 for="date">Address Guru <small>(In Case of Kinner/Hijra)</small></h4>
									<textarea class="form-control form-warning" rows="2" name="guru_address"></textarea>
								</div>
								<div class="form-group col-md-12">
									<hr>
									<h4 for="date" style="margin-bottom: 12px;">15. Source of Income : Please Tick (√), and furnish details : </h4>
								</div>
								<div class="form-group col-md-7 procedure">
									<span>
										<input type="radio" name="income" value="Begging" checked="">
										<b class="radio-h4">Begging</b>										
									</span>
									<span>
										<input type="radio" name="income" value="Sex Work">
										<b class="radio-h4">Sex Work </b>										
									</span>	
									<span>
										<input type="radio" name="income" value="Employed in any Organization">
										<b class="radio-h4">Employed in any Organization </b>										
									</span>	
									<span>
										<input type="radio" name="income" value="Badhai">
										<b class="radio-h4">Badhai </b>										
									</span>	 				
								</div>
								<div class="form-group col-md-5">
									<!-- <h4 for="date">Source of Income Detail</h4> -->
									<input type="file" class="form-control col-sm-12" name="income_file">
									<span>income proof</span>
								</div>								
								<div class="form-group col-md-12">
									<hr>
								</div>
								<div class="form-group col-md-4">
									<h4 for="date">16. Age</h4>
									<input type="text" class="form-control col-sm-6" name="age">
								</div>
								<div class="form-group col-md-4">
									<h4 for="date">17. Date Of Birth <small>(as per birth certificate</small></h4>
									<input type="text" class="form-control col-sm-6" name="dob">
								</div>
								<div class="form-group col-md-4">
									<h4 for="date">18. Phone No </h4>
									<input type="text" class="form-control col-sm-6">
								</div>	
								<div class="form-group col-md-12">
									<h4>19. Any Criminal/Civil Case pending against you, if “YES”, please furnish details
										<span>
											<input type="radio" name="criminal_status" value="yes" >
											<b class="radio-h4">Yes</b>										
										</span>
										<span>
											<input type="radio" name="criminal_status" value="no" checked>
											<b class="radio-h4">No </b>										
										</span>	
									</h4>
									<textarea class="form-control form-warning" rows="2" name="criminal_details"></textarea>
								</div>
								<div class="form-group col-md-12">
									<hr>
									<h4 for="date">20. Are you been a victim of any of the following matter, if “YES” Please furnish details any of the following</h4>
								</div>
								<div class="row">
										
									<div class="form-group col-md-5 doc" style="margin-left: 30px">
										<h4 for="email">Bullying 
											<span>
												<input type="radio" name="bullying_status" value="yes" >
												<b class="radio-h4">Yes</b>										
											</span>
											<span>
												<input type="radio" name="bullying_status" value="no" checked>
												<b class="radio-h4">No </b>										
											</span>	
										</h4>
									</div>
									<div class="form-group col-md-4 doc">
										<input type="file" class="form-control col-sm-12" name="bullying_file">
									</div>
									<!-- <div class="form-group col-md-2 doc">
										<ul class="thumbnails">
											<li>
												<a title="Group photo 1">
													<img src="../images/profilepic.png" class="profilepic">
												</a>
												<div class="options" style="background: #403f3fad;">
													
												</div>
											</li>
										</ul>
									</div> -->
								</div>
								<div class="row">
										
									<div class="form-group col-md-5 doc" style="margin-left: 30px">
										<h4 for="email">Police Harassment (in any form)
											<span>
												<input type="radio" name="police_status" value="yes" >
												<b class="radio-h4">Yes</b>										
											</span>
											<span>
												<input type="radio" name="police_status" value="no" checked>
												<b class="radio-h4">No </b>										
											</span>	
										</h4>
									</div>
									<div class="form-group col-md-4 doc">
										<input type="file" class="form-control col-sm-12" name="police_file">
									</div>
									<!-- <div class="form-group col-md-2 doc">
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
									</div> -->
								</div>
								<div class="row">										
									<div class="form-group col-md-5 doc" style="margin-left: 30px">
										<h4 for="email">Discrimination from any Authority(in any establishment or public places )
											<span>
												<input type="radio" name="disc_status" value="yes" >
												<b class="radio-h4">Yes</b>										
											</span>
											<span>
												<input type="radio" name="disc_status" value="no" checked>
												<b class="radio-h4">No </b>										
											</span>	
										</h4>
									</div>
									<div class="form-group col-md-4 doc">
										<input type="file" class="form-control col-sm-12" name="disc_file">
									</div>
									<!-- <div class="form-group col-md-2 doc">
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
									</div> -->
								</div>
								<div class="row">										
									<div class="form-group col-md-5 doc" style="margin-left: 30px">
										<h4 for="email">Family or Social torture. 
											<span>
												<input type="radio" name="family_status" value="yes" >
												<b class="radio-h4">Yes</b>										
											</span>
											<span>
												<input type="radio" name="family_status" value="no" checked>
												<b class="radio-h4">No </b>										
											</span>	
										</h4>
									</div>
									<div class="form-group col-md-4 doc">
										<input type="file" class="form-control col-sm-12" name="family_file">
									</div>
									<!-- <div class="form-group col-md-2 doc">
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
									</div> -->
								</div>
								<div class="row">
									<div class="form-group col-md-6 doc">
										<ul class="thumbnails">
											<li>
												<a title="Group photo 1">
													<img src="../images/profilepic.png" class="profilepic">
												</a>
												<div class="options" style="background: #403f3fad;">
													<input type="file" class="form-control col-sm-12" name="user_sign">
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
	<?php include 'script/user_form_script.php'; ?>
</body>

</html>