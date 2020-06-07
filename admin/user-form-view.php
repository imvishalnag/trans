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

		<div class="right"  id="print_div">

			<?php include "include/right.php"; ?>
    
			<!-- BEGIN PAGE CONTENT -->
			<div class="content">
			<?php
                $sql_user_details = "SELECT * FROM `user_details` WHERE `user_id`='$_GET[user_id]'";
                if ($res_user_details = $connect->query($sql_user_details)) {
                    $row_user_details = $res_user_details->fetch_assoc();
            ?>
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
							<form  enctype="multipart/form-data" method="post" action="aaa.ph">
								<div class="form-group col-md-5 col-xs-6">
									<h4 for="email">1. Name <small>(assigned at birth)</small></h4>
									<input type="text" class="form-control col-sm-12" name="name" value="<?=$row_user_details['name']?>" disabled>
									<h4 for="date">2. Father Name </h4>
									<input type="text" class="form-control col-sm-12" name="father_name" value="<?=$row_user_details['father_name']?>" disabled>
								</div>
								<div class="form-group col-md-5 col-xs-6">
									<h4 for="date">3. Preferred Name </h4>
									<input type="text" class="form-control col-sm-12" name="prefered_name" value="<?=$row_user_details['prefered_name']?>" disabled>
									<h4 for="date">4. Mother Name </h4>
									<input type="text" class="form-control col-sm-12" name="mother_name" value="<?=$row_user_details['mother_name']?>" disabled>
								</div>
								<div class="form-group col-md-2 col-xs-12">
									<h4 for="date">Photo </h4>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../uploads/user_image/<?=$row_user_details['user_image']?>" class="profilepic" id="user_image_src" >
											</a>
											<!-- <div class="options" style="background: #403f3fad;">
												<input type="file" name="user_image" id="user_image" onchange="fileTest(this,'user_image')" >
											</div> -->
										</li>
									</ul>
									<span id="user_image_error"></span>
								</div>								
								<div class="form-group col-md-8 col-xs-12" style="margin-bottom: 20px;">
									<h4>5. Preferred Category<small>Under the definition of Transgender, been recognized under NALSA Judgment (Supra)</small></h4>
									<select id="e1" class="form-select2" name="catgegory" required="" disabled>
										<option selected><?=$row_user_details['category']?></option>
									</select>
								</div>


								<div class="form-group col-md-12">
									<hr>
									<h4>6. Permanent Address</h4>
								</div>
								<?php
								if (!empty($row_user_details['p_address_id'])) {
									$sql_p_address = "SELECT * FROM `address` WHERE `id`='$row_user_details[p_address_id]'";
									if ($res_p_address = $connect->query($sql_p_address)) {
										$row_p_address = $res_p_address->fetch_assoc();
								?>
								<div class="form-group col-md-6 col-xs-6">
									<h4 for="date">Address</h4>
									<textarea class="form-control form-warning" rows="4" id="p_address" name="p_address" disabled><?=$row_p_address['address']?></textarea>
								</div>
								<div class="form-group col-md-6 col-xs-6">
									<h4 for="date">Pincode</h4>
									<input type="text" class="form-control col-sm-6" placeholder="Pin" id="p_pin" name="p_pin" value="<?=$row_p_address['pin']?>" disabled>
									<h4 for="date">District</h4>
									<input type="text" class="form-control col-sm-6" placeholder="Dist" id="p_dist" name="p_dist" value="<?=$row_p_address['dist']?>" disabled>
								</div>

								<?php
								}}
								?>

								<?php
								if (!empty($row_user_details['p_address_id'])) {
									$sql_r_address = "SELECT * FROM `address` WHERE `id`='$row_user_details[r_address_id]'";
									if ($res_r_address = $connect->query($sql_r_address)) {
										$row_r_address = $res_r_address->fetch_assoc();
								?>
								<div class="form-group col-md-12">
									<h4>7. Present Address</h4>
								</div>


								<!-- <div class="form-group col-md-12" style="padding: 11px!important;">
									<input type="checkbox" id="p_address_same" value="yes" name="p_address_same" onclick="checkAddress()"> if present address is same as permerant address
								</div> -->
								<div class="form-group col-md-6 col-xs-6">
									<h4 for="date">Present Address</h4>
									<textarea class="form-control form-warning" rows="4" id="r_address" name="r_address" disabled><?=$row_r_address['address']?></textarea>
								</div>
								<div class="form-group col-md-6 col-xs-6">
									<h4 for="date">Pincode</h4>
									<input type="text" class="form-control col-sm-6" placeholder="Pin" id="r_pin" name="r_pin" value="<?=$row_r_address['pin']?>" disabled>
									<h4 for="date">District</h4>
									<input type="text" class="form-control col-sm-6" placeholder="Dist" id="r_dist" name="r_dist" value="<?=$row_r_address['dist']?>" disabled>
								</div>
								<div class="form-group col-md-12">
									<hr>
								</div>
								<?php
								}}
								?>

								<div class="form-group col-md-12">
									<h4 for="date">8. Gharana Details <small>(In Case of Kinner/Hijra)</small></h4>
									<textarea class="form-control form-warning" rows="2" name="gh_details" disabled><?=$row_user_details['gh_details']?></textarea>
								</div>
								<div class="form-group col-md-4 col-xs-4">
									<h4 for="date">Pincode</h4>
									<input type="text" class="form-control col-sm-6" name="gh_pin" value="<?=$row_user_details['gh_pin']?>" disabled>
								</div>
								<div class="form-group col-md-4 col-xs-4">
									<h4 for="date">District</h4>
									<input type="text" class="form-control col-sm-6" name="gh_dist" value="<?=$row_user_details['gh_dist']?>" disabled>
								</div>
								<div class="form-group col-md-4 col-xs-4">
									<h4 for="date">State</h4>
									<input type="text" class="form-control col-sm-6" name="gh_state" value="<?=$row_user_details['gh_state']?>" disabled>
								</div>


								<div class="form-group col-md-12 procedure" style="margin-bottom:10px">
									<hr>
									<h4>9. Whether undergone Psychiatric Evaluation/HRT/Lazer Therapy (if “YES”), Please submit details:
										<span>
											<?=$row_user_details['phy_status']?>								
										</span>
									</h4>
								</div>
								<span id="doctor_div">
									<div class="form-group col-md-6 col-xs-6">
										<h4 for="date">Doctor Name</h4>
										<input type="text" class="form-control col-sm-6" name="phy_doctor" value="<?=$row_user_details['phy_doctor']?>" disabled>
									</div>
									<div class="form-group col-md-6 col-xs-6">
										<h4 for="date">Professional Expertise</h4>
										<input type="text" class="form-control col-sm-6" name="phy_exp" value="<?=$row_user_details['phy_exp']?>" disabled>
									</div>
									<div class="form-group col-md-6 col-xs-6">
										<h4 for="date">Phone Number</h4>
										<input type="text" class="form-control col-sm-6" name="phy_phone" value="<?=$row_user_details['phy_phone']?>" disabled>
									</div>
									<div class="form-group col-md-6 col-xs-6 procedure">
										<h4 for="date" style="margin-bottom: 12px;">Procedures</h4>
										<span>
											<?=$row_user_details['phy_category']?>									
										</span>
										
										<br>						
									</div>	
								</span>

								<div class="form-group col-md-12">
									<hr>
									<h4>10. Do you have any of the following documents ? if “YES”, Tick (Yes) & submit a copy of the same</h4>
								</div>


								<?php
									if (!empty($_SESSION['user_ata'])) {
										$sql_document = "SELECT * FROM `documents` WHERE `user_id`='$_SESSION[user_ata]'";
										if ($res_document = $connect->query($sql_document)) {
											$row_document = $res_document->fetch_assoc();
								?>
								<div class="row">
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="email">10.a. Birth Certificate</h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
										<?php
											if (!empty($row_document['birth'])) {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?>										
										</span>
									</div>

									<div class="form-group col-md-4 col-xs-4 doc" >
										<?php
											if (!empty($row_document['birth'])) {
											print '<ul class="thumbnails">
													<li>
														<a title="Group photo 1">
															<img src="../uploads/user_image/'.$row_document['birth'].'" class="profilepic" id="user_image_src" >
														</a>
													</li>
												</ul>';
											}
										?>										
									</div>

								</div>

								<div class="row">
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="date">10.b. Election Voter</h4></div>
									<div class="form-group col-md-2 col-xs-2 doc"> 
										<span>
										<?php
										if (!empty($row_document['voter_id'])) {
										print '<b class="radio-h4">Yes</b>';
										}else{
											print '<b class="radio-h4">No</b>';
										}
										?>										
										</span>
									</div>
									<div class="form-group col-md-4 col-xs-4 doc">
									<?php
										if (!empty($row_document['voter_id'])) {
										print '<ul class="thumbnails">
												<li>
													<a title="Group photo 1">
														<img src="../uploads/user_image/'.$row_document['voter_id'].'" class="profilepic">
													</a>
												</li>
											</ul>';
										}
									?>
									</div>
								</div>
										
								<div class="row">
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="date">10.c. Pan Card </h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
										<?php
											if (!empty($row_document['pan_card'])) {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?>  										
										</span>
									</div>
									<div class="form-group col-md-4 col-xs-4 doc" >
										
										<?php
											if (!empty($row_document['pan_card'])) {
											print '<ul class="thumbnails">
													<li>
														<a title="Group photo 1">
															<img src="../uploads/user_image/'.$row_document['pan_card'].'" class="profilepic">
														</a>
													</li>
												</ul>';
											}
										?>
									</div>
								</div>

								<div class="row">
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"> <h4 for="email">10.d. Adhaar Card </h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
										<?php
											if (!empty($row_document['aadhar_card'])) {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?> 									
										</span>
									</div>
									<div class="form-group col-md-4 col-xs-4 doc">
									<?php
										if (!empty($row_document['aadhar_card'])) {
										print '<ul class="thumbnails">
												<li>
													<a title="Group photo 1">
														<img src="../uploads/user_image/'.$row_document['aadhar_card'].'" class="profilepic">
													</a>
												</li>
											</ul>';
										}
									?>
									</div>
								</div>

								<div class="row">
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="email">10.e. Ration Card / BPL Card</h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
										<?php
											if (!empty($row_document['ration_card'])) {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?>  								
										</span>
									</div>
									<div class="form-group col-md-4 col-xs-4 doc">
									<?php
										if (!empty($row_document['ration_card'])) {
										print '<ul class="thumbnails">
												<li>
													<a title="Group photo 1">
														<img src="../uploads/user_image/'.$row_document['ration_card'].'" class="profilepic">
													</a>
												</li>
											</ul>';
										}
									?>
									</div>
								</div>


								<div class="row">
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="email">10.f. Bank Password </h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
										<?php
											if (!empty($row_document['bank_pass'])) {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?>  										
										</span>
									</div>
									<div class="form-group col-md-4 col-xs-4 doc" >
									<?php
										if (!empty($row_document['bank_pass'])) {
										print '<ul class="thumbnails">
												<li>
													<a title="Group photo 1">
														<img src="../uploads/user_image/'.$row_document['bank_pass'].'" class="profilepic">
													</a>
												</li>
											</ul>';
										}
									?>
									</div>
								</div>

								<div class="row">		
									<div class="form-group col-md-4 col-xs-4  doc" style="margin-left: 30px"><h4 for="email">10.g. Mnrega Card </h4></div>
									<div class="form-group col-md-2 col-xs-2  doc">
										<span>
										<?php
											if (!empty($row_document['mnrg_card'])) {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?> 										
										</span>
									</div>
									<div class="form-group col-md-4 col-xs-4  doc" >
									<?php
										if (!empty($row_document['mnrg_card'])) {
										print '<ul class="thumbnails">
												<li>
													<a title="Group photo 1">
														<img src="../uploads/user_image/'.$row_document['mnrg_card'].'" class="profilepic">
													</a>
												</li>
											</ul>';
										}
									?>
									</div>
								</div>

								<div class="row">		
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="email">10.h. Passport </h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
										<?php
											if (!empty($row_document['passport'])) {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?>  
										</span>
									</div>
									<div class="form-group col-md-4 col-xs-4 doc">
									<?php
										if (!empty($row_document['passport'])) {
										print '<ul class="thumbnails">
												<li>
													<a title="Group photo 1">
														<img src="../uploads/user_image/'.$row_document['passport'].'" class="profilepic">
													</a>
												</li>
											</ul>';
										}
									?>
									</div>
								</div>

								<div class="row">		
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="email">10.i. High School Leaving Certificate </h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
										<?php
											if (!empty($row_document['hslc_cert'])) {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?>  	
										</span>
									</div>
									<div class="form-group col-md-4 col-xs-4 doc" id="hslc_status_div">
									<?php
										if (!empty($row_document['hslc_cert'])) {
										print '<ul class="thumbnails">
												<li>
													<a title="Group photo 1">
														<img src="../uploads/user_image/'.$row_document['hslc_cert'].'" class="profilepic">
													</a>
												</li>
											</ul>';
										}
									?>
									</div>
								</div>	

								<div class="row">	
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="email">10.j. H.S Passed Certificate </h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
										<?php
											if (!empty($row_document['hs_cert'])) {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?> 									
										</span>
									</div>
									<div class="form-group col-md-4 col-xs-4 doc" id="hs_status_div">
									<?php
										if (!empty($row_document['hs_cert'])) {
										print '<ul class="thumbnails">
												<li>
													<a title="Group photo 1">
														<img src="../uploads/user_image/'.$row_document['hs_cert'].'" class="profilepic">
													</a>
												</li>
											</ul>';
										}
									?>
									</div>
								</div>	


								<div class="row">
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="email">10.k. Gradution Passed Certificate </h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
										<?php
											if (!empty($row_document['graduation_cert'])) {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?>									
										</span>
									</div>
									<div class="form-group col-md-4 col-xs-4 doc" id="graduation_status_div">
									<?php
										if (!empty($row_document['graduation_cert'])) {
										print '<ul class="thumbnails">
												<li>
													<a title="Group photo 1">
														<img src="../uploads/user_image/'.$row_document['graduation_cert'].'" class="profilepic">
													</a>
												</li>
											</ul>';
										}
									?>
									</div>					
								</div>

								<div class="row">											
									<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 30px"><h4 for="email">10.l. Name Changed Affidavit </h4></div>
									<div class="form-group col-md-2 col-xs-2 doc">
										<span>
										<?php
											if (!empty($row_document['name_chng'])) {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?>  
										</span>
									</div>
									<div class="form-group col-md-4 col-xs-4 doc" id="name_chng_status_div">
									<?php
										if (!empty($row_document['name_chng'])) {
										print '<ul class="thumbnails">
												<li>
													<a title="Group photo 1">
														<img src="../uploads/user_image/'.$row_document['name_chng'].'" class="profilepic">
													</a>
												</li>
											</ul>';
										}
									?>
									</div>								
								</div>
                    			<?php }}?>			
								<div class="form-group col-md-12">
									<hr>
									<h4>11. Qualification (if any), furnish details & submit a copy of the same :</h4>
								</div>
								<span id="qualification_div">
									<?php
									if (!empty($_SESSION['user_ata'])) {
										$sql_qualification = "SELECT * FROM `qualification` WHERE `user_id`='$_SESSION[user_ata]'";
										if ($res_qualification = $connect->query($sql_qualification)) {
											while($row_qualification = $res_qualification->fetch_assoc()){
									?>
									<div class="form-group col-md-6">
										<h4 for="email">Name of the School/College/University</h4>
										<input type="text" class="form-control col-sm-12" name="q_name[]" value="<?=$row_qualification['name_school']?>" disabled>
									</div>
									<div class="form-group col-md-2">
										<h4 for="date">Passing Year </h4>
										<input type="text" class="form-control col-sm-12" name="q_year[]" value="<?=$row_qualification['passing_year']?>" disabled>
									</div>
									<div class="form-group col-md-4">
										<h4 for="date">Detail </h4>
										<ul class="thumbnails">
											<li>
												<a title="Group photo 1">
													<img src="../uploads/user_image/<?=$row_qualification['file']?>" class="profilepic">
												</a>
											</li>
										</ul>
									</div>
                    				<?php } } } ?> 
								</span>


								<div class="form-group col-md-12">
									<h4>12. Other Qualification (if any), furnish details & submit a copy of the same : 
										<span>
										<?php
											if ($row_user_details['other_q_status'] == 'yes') {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?> 									
										</span>	</h4>
								</div>
								<span id="other_q_status_div">
									<div class="form-group col-md-6">
										<h4 for="email">Name of the institution</h4>
										<input type="text" class="form-control col-sm-12" name="other_q_name" value="<?=$row_user_details['other_q_name']?>" disabled>
									</div>
									<div class="form-group col-md-2">
										<h4 for="date">Passing Year </h4>
										<input type="text" class="form-control col-sm-12" name="other_q_year" value="<?=$row_user_details['other_q_year']?>" disabled>
									</div>
									<?php
									if (!empty($row_user_details['other_q_file'])) {
									?>
									<div class="form-group col-md-2">										
										<h4 for="date">Detail </h4>
										<ul class="thumbnails">
											<li>
												<a title="Group photo 1">
													<img src="../uploads/user_image/<?=$row_user_details['other_q_file']?>" class="profilepic">
												</a>
											</li>
										</ul>
									</div>
                        			<?php } ?>
								</span>


								<div class="form-group col-md-12 procedure">
									<hr>
									<h4>13. Whether Name or Gender Changed in documents (if “YES”, please furnish details)
										<span>								
											<?php
												if ($row_user_details['gender_change_status'] == 'yes') {
												print '<b class="radio-h4">Yes</b>';
												}else{
													print '<b class="radio-h4">No</b>';
												}
											?> 										
										</span>
									</h4>
								</div>
								<span id="gender_status_div" >
									<div class="form-group col-md-7" >
										<h4> Changed Name</h4>
										<input type="text" class="form-control col-sm-12" name="change_name" value="<?=$row_user_details['gender_change_name']?>" disabled >
									</div>
									<?php
									if (!empty($row_user_details['gender_change_file'])) {
									?>
									<div class="form-group col-md-5">
										<h4 for="date">Supporting Documents</h4>
										<ul class="thumbnails">
											<li>
												<a title="Group photo 1">
													<img src="../uploads/user_image/<?=$row_user_details['gender_change_file']?>" class="profilepic">
												</a>
											</li>
										</ul>
									</div>
									<?php } ?>

								</span>		


								<div class="form-group col-md-12">
									<hr>
									<h4>14. Details of Guru (In case, if you are under the shelter of Guru)</h4>
								</div>
								<div class="form-group col-md-6">
									<h4 for="email">Name of Guru</h4>
									<input type="text" class="form-control col-sm-12" name="guru_name" value="<?=$row_user_details['guru_name']?>" disabled>
								</div>
								<div class="form-group col-md-3">
									<h4 for="date">Picode</h4>
									<input type="text" class="form-control col-sm-12" name="guru_pin" value="<?=$row_user_details['guru_pin']?>" disabled>
								</div>
								<div class="form-group col-md-3">
									<h4 for="date">District</h4>
									<input type="text" class="form-control col-sm-12" name="guru_dist" value="<?=$row_user_details['guru_dist']?>" disabled>
								</div>
								<div class="form-group col-md-12">
									<h4 for="date">Address Guru <small>(In Case of Kinner/Hijra)</small></h4>
									<textarea class="form-control form-warning" rows="2" name="guru_address" disabled><?=$row_user_details['guru_address']?></textarea>
								</div>


								<div class="form-group col-md-12">
									<hr>
									<h4 for="date" style="margin-bottom: 12px;">15. Source of Income : Please Tick (√), and furnish details : </h4>
								</div>
								<div class="form-group col-md-7 procedure">
									<span>
										<?=$row_user_details['income_category']?>										
									</span>			
								</div>
								<div class="form-group col-md-5">
									<?php
									if (!empty($row_user_details['income_file'])) {
									?>
									<ul class="thumbnails">
										<li>
											<a title="Group photo 1">
												<img src="../uploads/user_image/<?=$row_user_details['income_file']?>" class="profilepic">
											</a>
										</li>
									</ul>
									<?php } ?>
								</div>								
								<div class="form-group col-md-12">
									<hr>
								</div>
								<div class="form-group col-md-4">
									<h4 for="date">16. Age</h4>
									<input type="text" class="form-control col-sm-6" name="age" disabled value="<?=$row_user_details['age']?>">
								</div>
								<div class="form-group col-md-4">
									<h4 for="date">17. Date Of Birth <small>(as per birth certificate</small></h4>
									<input type="text" class="form-control col-sm-6" name="dob" disabled value="<?=$row_user_details['dob']?>">
								</div>
								<div class="form-group col-md-4">
									<h4 for="date">18. Phone No </h4>
									<input type="text" class="form-control col-sm-6" name="mobile" disabled value="<?=$row_user_details['mobile']?>">
								</div>	

								
								<div class="form-group col-md-12">
									<h4>19. Any Criminal/Civil Case pending against you, if “YES”, please furnish details
										<span>
										<?php
											if ($row_user_details['criminal_status'] == 'yes') {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?> 									
										</span>
									</h4>
									<span id="criminal_status_div" style="display: none;">
										<textarea class="form-control form-warning" rows="2" name="criminal_details"><?=$row_user_details['criminal_details']?></textarea>
									</span>
								</div>
								
								<div class="form-group col-md-12">
									<hr>
									<h4 for="date">20. Are you been a victim of any of the following matter, if “YES” Please furnish details any of the following</h4>
								</div>

								<div class="row">
										
									<div class="form-group col-md-4 doc" style="margin-left: 30px">
										<h4 for="email">Bullying </h4>
									</div>
									<div class="form-group col-md-2 doc">
										<span>
										<?php
											if ($row_user_details['bullying_status'] == 'yes') {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?>  									
										</span>
									</div>
									<div class="form-group col-md-4 doc" id="bullying_status_div">
									<?php
										if (!empty($row_user_details['bullying_file'])) {
									?>
										<ul class="thumbnails">
											<li>
												<a title="Group photo 1">
													<img src="../uploads/user_image/<?=$row_user_details['bullying_file']?>" class="profilepic">
												</a>
											</li>
										</ul>
									<?php } ?>
									</div>
								</div>

								<div class="row">
										
									<div class="form-group col-md-4 doc" style="margin-left: 30px">
										<h4 for="email">Police Harassment (in any form)</h4>
									</div>
									<div class="form-group col-md-2 doc">
										<span>
										<?php
											if ($row_user_details['police_status'] == 'yes') {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?> 								
										</span>
									</div>
									<div class="form-group col-md-4 doc">
									<?php
										if (!empty($row_user_details['police_file'])) {
									?>
										<ul class="thumbnails">
											<li>
												<a title="Group photo 1">
													<img src="../uploads/user_image/<?=$row_user_details['police_file']?>" class="profilepic">
												</a>
											</li>
										</ul>
									<?php } ?>
									</div>
								</div>

								<div class="row">										
									<div class="form-group col-md-4 doc" style="margin-left: 30px">
										<h4 for="email">Discrimination from any Authority(in any establishment or public places )	
										</h4>
									</div>
									<div class="form-group col-md-2 doc">
										<span>
										<?php
											if ($row_user_details['disc_status'] == 'yes') {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?> 										
										</span>
									</div>
									<div class="form-group col-md-4 doc">
									<?php
										if (!empty($row_user_details['disc_file'])) {
									?>
										<ul class="thumbnails">
											<li>
												<a title="Group photo 1">
													<img src="../uploads/user_image/<?=$row_user_details['disc_file']?>" class="profilepic">
												</a>
											</li>
										</ul>
									<?php } ?>
									</div>
								</div>

								<div class="row">										
									<div class="form-group col-md-4 doc" style="margin-left: 30px">
										<h4 for="email">Family or Social torture. 
										</h4>
									</div>
									<div class="form-group col-md-2 doc">
										<span>
										<?php
											if ($row_user_details['family_status'] == 'yes') {
											print '<b class="radio-h4">Yes</b>';
											}else{
												print '<b class="radio-h4">No</b>';
											}
										?>  									
										</span>
									</div>
									<div class="form-group col-md-4 doc">
									<?php
										if (!empty($row_user_details['family_file'])) {
									?>
										<ul class="thumbnails">
											<li>
												<a title="Group photo 1">
													<img src="../uploads/user_image/<?=$row_user_details['family_file']?>" class="profilepic">
												</a>
											</li>
										</ul>
									<?php } ?>
									</div>
								</div>

								<div class="row"> 
								<div class="form-group col-md-6 col-xs-6">
									<h4>5. Signature of the surveyor. </h4>
									<h6><?=$row_user_details['survay_sign']?></h6>
								</div>
									<div class="form-group col-md-6 doc">
									<?php
										if (!empty($row_user_details['user_sign'])) {
									?>
										<ul class="thumbnails">
											<li>
												<a title="Group photo 1">
													<img src="../uploads/user_image/<?=$row_user_details['user_sign']?>" class="profilepic" style="max-height: 200px;">
												</a>
											</li>
										</ul>
									<?php } ?>
									</div>
								</div>

								<div class="form-group col-md-12">
									<hr>
								</div>


								<div class="form-group col-md-12">
									<button type="button" onclick="printDiv()" class="btn btn-warning">Print</button>
									<!-- <button class="btn btn-success">Submit</button> -->
								</div>
							</form>
						</div>
					</div>
				</div>

			<?php
                }
            ?>

				<script>
					function printDiv() 
					{
						var printContents = document.getElementById("print_div").innerHTML;
						var originalContents = document.body.innerHTML;

						document.body.innerHTML = printContents;

						window.print();
					}
					window.onafterprint = function(event) {
							window.location.reload();
						};
				</script>
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