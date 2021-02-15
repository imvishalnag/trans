<?php

session_start();
if (!isset($_SESSION['mobile']) || empty($_SESSION['mobile'])) {
    header("location:login.php");
}

include "config/db_connect.php";
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

	<!-- Developer : Porag Bikomiya -(Web Infotech)-->
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>

	<meta name="description" content="FundPro - Nonprofit, Crowdfunding & Charity HTML5 Template" />
	<meta name="keywords" content="charity,crowdfunding,nonprofit,orphan,Poor,funding,fundrising,ngo,children" />
	<meta name="author" content="ThemeMascot" />
	<!-- google -->


	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<!-- Page Title -->
	<title>All Assam Transgender  Association</title>

	<!-- Favicon and Touch Icons -->
	<link href="images/favicon.png" rel="shortcut icon" type="image/png">
	<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
	<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
	<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

	<!-- Stylesheet -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	<link href="css/css-plugin-collections.css" rel="stylesheet"/>
	<!-- CSS | menuzord megamenu skins -->
	<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
	<!-- CSS | Main style file -->
	<link href="css/style-main.css" rel="stylesheet" type="text/css">
	<!-- CSS | Preloader Styles -->
	<link href="css/preloader.css" rel="stylesheet" type="text/css">
	<!-- CSS | Custom Margin Padding Collection -->
	<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
	<!-- CSS | Responsive media queries -->
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
	<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

	<!-- CSS | Theme Color -->
	<link href="css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">

	<!-- external javascripts -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- JS | jquery plugin collection for this theme -->
	<script src="js/jquery-plugin-collection.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="">
  <div id="wrapper">
    
    <!-- Header -->
    <header class="header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8" id="header-area">
      <div class="header-top bg-theme-colored sm-text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-4 mbpr-0">
              <div class="widget no-border m-0">
                <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="https://www.facebook.com/forTgirls/"><i class="fa fa-facebook text-white"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-8 mbpr-0">
              <div class="widget no-border m-0">
                <ul class="list-inline pull-right sm-pull-none sm-text-center mt-5">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-mobile text-white"></i> <a href="#" class="text-white"> 9678 4387 19</a>
                  <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope text-white"></i> <a href="#" class="text-white"> baruahbidhan2@gmail.com</a>
                  </li>
                </ul>
              </div><div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-silver-light">
          <div class="container">
            <nav id="menuzord-right" class="menuzord default no-bg">
              <a class="menuzord-brand pull-left flip" href="index.php"><img src="images/logo.jpg" alt=""></a>
              <ul class="menuzord-menu"> 
                <?php include "include/link.php" ?>
                <li><a href="web/php/user_logout.php" style="border: 1px solid #ff00fa;">Logout</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- end Header -->

    <!-- Start main-content -->
    <div class="main-content" id="main_content">
      <!-- Section: inner-header -->
      <section class="inner-header">
        <div class="container pt-0 pb-0">
          <!-- Section Content -->
          <div class="row">
            
            <div class="col-sm-3 mbpr-0">
                <img src="images/bg/s-back.png" class="trans-logo">
            </div>
            <div class="col-sm-9 mbpr-0">
                <img src="images/bg/back.png" class="trans-r">
            </div>
          </div>
        </div>      
      </section>    
      <!-- Section: About -->
      <section class="login-area">
        <div class="container pt-10 pb-10">
          <div class="row">
            <?php
                $sql_user_details = "SELECT * FROM `user_details` WHERE `user_id`='$_SESSION[user_ata]'";
                if ($res_user_details = $connect->query($sql_user_details)) {
                    $row_user_details = $res_user_details->fetch_assoc();
            ?>
            <div class="col-sm-12 mbpr-0">
                <form id="contact_form" name="contact_form" class="login" action="user-form.php" method="post">
                    
                    <div class="row">
                        <div class="form-group col-md-5 col-xs-6">
                            <h4 for="email">1. Name <small>(assigned at birth)</small></h4>
                            <h6><?=$row_user_details['name']?></h6>
                            <h4 for="date">2. Father Name </h4>
                            <h6><?=$row_user_details['father_name']?></h6>
                        </div>
                        <div class="form-group col-md-5 col-xs-6">
                            <h4 for="date">3. Preferred Name </h4>
                            <h6><?=$row_user_details['prefered_name']?></h6>
                            <h4 for="date">4. Mother Name </h4>
                            <h6><?=$row_user_details['mother_name']?></h6>
                        </div>
                        <div class="form-group col-md-2 col-xs-12">
                            <ul class="thumbnails">
                                <li>
                                    <a title="Group photo 1">
                                        <img src="uploads/user_image/<?=$row_user_details['user_image']?>" class="profilepic blah">
                                    </a>
                                </li>
                            </ul>
                            
                        </div>								
                        <div class="form-group col-md-8 col-xs-12" style="margin-bottom: 20px;">
                            <h4>5. Preferred Category<small> Under the definition of Transgender, been recognized under NALSA Judgment (Supra)</small></h4>
                            <h6><?=$row_user_details['category']?></h6>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        if (!empty($row_user_details['p_address_id'])) {
                            $sql_p_address = "SELECT * FROM `address` WHERE `id`='$row_user_details[p_address_id]'";
                            if ($res_p_address = $connect->query($sql_p_address)) {
                                $row_p_address = $res_p_address->fetch_assoc();
                        ?>
                        <div class="form-group col-md-12">
                            <hr>
                            <h4>6. Permanent Address</h4>
                        </div>
                        <div class="form-group col-md-6">
                            <h4 for="date">Address</h4>
                            <h6><?=$row_p_address['address']?></h6>
                        </div>
                        <div class="form-group col-md-3 col-xs-6">
                            <h4 for="date">Pincode</h4>
							<h6><?=$row_p_address['pin']?></h6>
                        </div>
                        <div class="form-group col-md-3 col-xs-6">
                            <h4 for="date">District</h4>
							<h6><?=$row_p_address['dist']?></h6>
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
                        <div class="form-group col-md-6">
                            <h4 for="date">Present Address</h4>
                            <h6><?=$row_r_address['address']?></h6>
                        </div>
                        <div class="form-group col-md-3 col-xs-6">
                            <h4 for="date">Pincode</h4>
							<h6><?=$row_r_address['pin']?></h6>
                        </div>
                        <div class="form-group col-md-3 col-xs-6">
                            <h4 for="date">District</h4>
							<h6><?=$row_r_address['dist']?></h6>
                        </div>
                        <?php
                        }}
                        ?>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <hr>
                            <h4 for="date">8. Gharana Details <small>(In Case of Kinner/Hijra)</small></h4>
                            <h6><?=$row_user_details['gh_details']?></h6>
                        </div>
                        <div class="form-group col-md-4 col-xs-4">
                            <h4 for="date">Pincode</h4>
                            <h6><?=$row_user_details['gh_pin']?></h6>
                        </div>
                        <div class="form-group col-md-4 col-xs-4">
                            <h4 for="date">District</h4>
                            <h6><?=$row_user_details['gh_dist']?></h6>
                        </div>
                        <div class="form-group col-md-4 col-xs-4">
                            <h4 for="date">State</h4>
                            <h6><?=$row_user_details['gh_state']?></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 procedure" style="margin-bottom:10px">
                            <hr>
                            <h4>9. Whether undergone Psychiatric Evaluation/HRT/Lazer Therapy (if “YES”), Please submit details:
                                <span>
                                    <b class="radio-h4"><?=$row_user_details['phy_status']?></b>										
                                </span>
                            </h4>
                        </div>
                        <div class="form-group col-md-6 col-xs-6">
                            <h4 for="date">Doctor Name</h4>
                            <h6><?=$row_user_details['phy_doctor']?></h6>
                        </div>
                        <div class="form-group col-md-6 col-xs-6">
                            <h4 for="date">Professional Expertise</h4>
                            <h6><?=$row_user_details['phy_exp']?></h6>
                        </div>
                        <div class="form-group col-md-6 col-xs-6">
                            <h4 for="date">Phone Number</h4>
                            <h6><?=$row_user_details['phy_phone']?></h6>
                        </div>
                        <div class="form-group col-md-6 col-xs-6 procedure">
                            <h4 for="date" style="margin-bottom: 12px;">Procedures</h4>
                            <h6><?=$row_user_details['phy_category']?></h6>	
                        </div>	
                    </div>	

                    <?php
                        if (!empty($_SESSION['user_ata'])) {
                            $sql_document = "SELECT * FROM `documents` WHERE `user_id`='$_SESSION[user_ata]'";
                            if ($res_document = $connect->query($sql_document)) {
                                $row_document = $res_document->fetch_assoc();
                    ?>
                    <div class="row">				
                        <div class="form-group col-md-12">
                            <hr>
                            <h4>10. Do you have any of the following documents ? if “YES”, Tick (Yes) & submit a copy of the same</h4>
                        </div>
                       
						<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 0px">
							<h4 for="email">10.a. Birth Certificate 
							<span>
                                <?php
                                if (!empty($row_document['birth'])) {
                                   print '<b class="radio-h4">Yes</b>';
                                }else{
                                    print '<b class="radio-h4">No</b>';
                                }
                                ?>																	
							</span>
							</h4>
						</div>

						<div class="form-group col-md-2 col-xs-2 doc">
                            <?php
                                if (!empty($row_document['birth'])) {
                                   print '<ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/'.$row_document['birth'].'" class="profilepic">
                                            </a>
                                        </li>
                                    </ul>';
                                }
                            ?>
						</div>

						<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 0px">
							<h4 for="email">10.b. Election Voter
								<span>
									<?php
                                    if (!empty($row_document['voter_id'])) {
                                       print '<b class="radio-h4">Yes</b>';
                                    }else{
                                        print '<b class="radio-h4">No</b>';
                                    }
                                    ?>									
								</span>
							</h4>
						</div>
						<div class="form-group col-md-2 col-xs-2 doc">
                            <?php
                                if (!empty($row_document['voter_id'])) {
                                   print '<ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/'.$row_document['voter_id'].'" class="profilepic">
                                            </a>
                                        </li>
                                    </ul>';
                                }
                            ?>
						</div>
						<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 0px">
							<h4 for="email">10.c. Pan Card 
							<span>
								<?php
                                    if (!empty($row_document['pan_card'])) {
                                       print '<b class="radio-h4">Yes</b>';
                                    }else{
                                        print '<b class="radio-h4">No</b>';
                                    }
                                ?>  									
							</span>
							</h4>
						</div>
						<div class="form-group col-md-2 col-xs-2 doc">
							<?php
                                if (!empty($row_document['pan_card'])) {
                                   print '<ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/'.$row_document['pan_card'].'" class="profilepic">
                                            </a>
                                        </li>
                                    </ul>';
                                }
                            ?>
						</div>
						<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 0px">
							<h4 for="email">10.d. Adhaar Card 
							<span>
								<?php
                                    if (!empty($row_document['aadhar_card'])) {
                                       print '<b class="radio-h4">Yes</b>';
                                    }else{
                                        print '<b class="radio-h4">No</b>';
                                    }
                                ?>  									
							</span>
							</h4>
						</div>
						<div class="form-group col-md-2 col-xs-2 doc">
							<?php
                                if (!empty($row_document['aadhar_card'])) {
                                   print '<ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/'.$row_document['aadhar_card'].'" class="profilepic">
                                            </a>
                                        </li>
                                    </ul>';
                                }
                            ?>
						</div>
						<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 0px">
							<h4 for="email">10.e. Ration Card / BPL Card 
							<span>
								<?php
                                    if (!empty($row_document['ration_card'])) {
                                       print '<b class="radio-h4">Yes</b>';
                                    }else{
                                        print '<b class="radio-h4">No</b>';
                                    }
                                ?>  								
							</span>
							</h4>
						</div>
						<div class="form-group col-md-2 col-xs-2 doc">
							<?php
                                if (!empty($row_document['ration_card'])) {
                                   print '<ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/'.$row_document['ration_card'].'" class="profilepic">
                                            </a>
                                        </li>
                                    </ul>';
                                }
                            ?>
						</div>
						<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 0px">
							<h4 for="email">10.f. Bank Password 
							<span>
								<?php
                                    if (!empty($row_document['bank_pass'])) {
                                       print '<b class="radio-h4">Yes</b>';
                                    }else{
                                        print '<b class="radio-h4">No</b>';
                                    }
                                ?>  										
							</span>
							</h4>
						</div>
						<div class="form-group col-md-2 col-xs-2 doc">
							<?php
                                if (!empty($row_document['bank_pass'])) {
                                   print '<ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/'.$row_document['bank_pass'].'" class="profilepic">
                                            </a>
                                        </li>
                                    </ul>';
                                }
                            ?>
						</div>
						<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 0px">
							<h4 for="email">10.g. Mnrega Card 
							<span>
								<?php
                                    if (!empty($row_document['mnrg_card'])) {
                                       print '<b class="radio-h4">Yes</b>';
                                    }else{
                                        print '<b class="radio-h4">No</b>';
                                    }
                                ?> 									
							</span>
							</h4>
						</div>
						<div class="form-group col-md-2 col-xs-2 doc">
							<?php
                                if (!empty($row_document['mnrg_card'])) {
                                   print '<ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/'.$row_document['mnrg_card'].'" class="profilepic">
                                            </a>
                                        </li>
                                    </ul>';
                                }
                            ?>
						</div>
						<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 0px">
							<h4 for="email">10.h. Passport 
							<span>
                                <?php
                                    if (!empty($row_document['passport'])) {
                                       print '<b class="radio-h4">Yes</b>';
                                    }else{
                                        print '<b class="radio-h4">No</b>';
                                    }
                                ?>      									
							</span>
							</h4>
						</div>
						<div class="form-group col-md-2 col-xs-2 doc">
                            <?php
                                if (!empty($row_document['passport'])) {
                                   print '<ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/'.$row_document['passport'].'" class="profilepic">
                                            </a>
                                        </li>
                                    </ul>';
                                }
                            ?>
						</div>
						<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 0px">
							<h4 for="email">10.i. High School Leaving Certificate 
							<span>
                                <?php
                                    if (!empty($row_document['hslc_cert'])) {
                                       print '<b class="radio-h4">Yes</b>';
                                    }else{
                                        print '<b class="radio-h4">No</b>';
                                    }
                                ?>   									
							</span>
							</h4>
						</div>
						<div class="form-group col-md-2 col-xs-2 doc">
                            <?php
                                if (!empty($row_document['hslc_cert'])) {
                                   print '<ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/'.$row_document['hslc_cert'].'" class="profilepic">
                                            </a>
                                        </li>
                                    </ul>';
                                }
                            ?>
						</div>
						<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 0px">
							<h4 for="email">10.j. H.S Passed Certificate
							<span>
                                <?php
                                    if (!empty($row_document['hs_cert'])) {
                                       print '<b class="radio-h4">Yes</b>';
                                    }else{
                                        print '<b class="radio-h4">No</b>';
                                    }
                                ?>   									
							</span>
							</h4>
						</div>
						<div class="form-group col-md-2 col-xs-2 doc">
                            <?php
                                if (!empty($row_document['hs_cert'])) {
                                   print '<ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/'.$row_document['hs_cert'].'" class="profilepic">
                                            </a>
                                        </li>
                                    </ul>';
                                }
                            ?>
						</div>
						<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 0px">
							<h4 for="email">10.k. Gradution Passed Certificate 
							<span>
                                <?php
                                    if (!empty($row_document['graduation_cert'])) {
                                       print '<b class="radio-h4">Yes</b>';
                                    }else{
                                        print '<b class="radio-h4">No</b>';
                                    }
                                ?> 									
							</span>
							</h4>
						</div>
						<div class="form-group col-md-2 col-xs-2 doc">
                            <?php
                                if (!empty($row_document['graduation_cert'])) {
                                   print '<ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/'.$row_document['graduation_cert'].'" class="profilepic">
                                            </a>
                                        </li>
                                    </ul>';
                                }
                            ?>
						</div>
						<div class="form-group col-md-4 col-xs-4 doc" style="margin-left: 0px">
							<h4 for="email">10.l. Name Changed Affidavit
							<span>
                                <?php
                                    if (!empty($row_document['name_chng'])) {
                                       print '<b class="radio-h4">Yes</b>';
                                    }else{
                                        print '<b class="radio-h4">No</b>';
                                    }
                                ?>  								
							</span>
							</h4>
						</div>
						<div class="form-group col-md-2 col-xs-2 doc">
                            <?php
                                if (!empty($row_document['name_chng'])) {
                                   print '<ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/'.$row_document['name_chng'].'" class="profilepic">
                                            </a>
                                        </li>
                                    </ul>';
                                }
                            ?>
						</div>
                    </div>
                    <?php }}?>

                    <div class="row">	
                        <div class="form-group col-md-12">
                            <hr>
                            <h4>11. Qualification (if any), furnish details & submit a copy of the same :</h4>
                        </div>

                        <?php
                        if (!empty($_SESSION['user_ata'])) {
                            $sql_qualification = "SELECT * FROM `qualification` WHERE `user_id`='$_SESSION[user_ata]'";
                            if ($res_qualification = $connect->query($sql_qualification)) {
                                while($row_qualification = $res_qualification->fetch_assoc()){
                        ?>
                        <div class="form-group col-md-6">
                            <h4 for="email">Name of the School/College/University</h4>
                            <h6><?=$row_qualification['name_school']?></h6>
                        </div>
                        <div class="form-group col-md-2 col-xs-6">
                            <h4 for="date">Passing Year </h4>
                            <h6><?=$row_qualification['passing_year']?></h6>
                        </div>
                        <div class="form-group col-md-2 col-xs-6">
                            <h4 for="date">Detail </h4>
							<ul class="thumbnails">
								<li>
									<a title="Group photo 1">
										<img src="uploads/user_image/<?=$row_qualification['file']?>" class="profilepic">
									</a>
								</li>
							</ul>
                        </div>
                    <?php } } } ?> 

                    </div>	
                    <div class="row">		
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
                                </span>
							</h4>
                        </div>

                        <div class="form-group col-md-6">
                            <h4 for="email">Name of the institution</h4>
                            <h6><?=$row_user_details['other_q_name']?></h6>
                        </div>
                        <div class="form-group col-md-2 col-xs-6">
                            <h4 for="date">Passing Year </h4>
                            <h6><?=$row_user_details['other_q_year']?></h6>
                        </div>
                        <?php
                        if (!empty($row_user_details['other_q_file'])) {
                        ?>
                        <div class="form-group col-md-2 col-xs-6">
                            <h4 for="date">Detail </h4>
							<ul class="thumbnails">
								<li>
									<a title="Group photo 1">
										<img src="uploads/user_image/<?=$row_user_details['other_q_file']?>" class="profilepic">
									</a>
								</li>
							</ul>
                        </div>
                        <?php } ?>
                    </div>
					<div class="row">		
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
						<div class="form-group col-md-7 col-xs-6">
							<h4> Changed Name</h4>
							<h6><?=$row_user_details['gender_change_name']?></h6>
						</div>
                        <?php
                        if (!empty($row_user_details['gender_change_file'])) {
                        ?>
						<div class="form-group col-md-2 col-xs-6">
							<h4 for="date">Supporting Documents</h4>
							<ul class="thumbnails">
								<li>
									<a title="Group photo 1">
										<img src="uploads/user_image/<?=$row_user_details['gender_change_file']?>" class="profilepic">
									</a>
								</li>
							</ul>
						</div>
                        <?php } ?>

					</div>	
					<div class="row">				
						<div class="form-group col-md-12">
							<hr>
							<h4>14. Details of Guru (In case, if you are under the shelter of Guru)</h4>
						</div>
						<div class="form-group col-md-6">
							<h4 for="email">Name of Guru</h4>
							<h6><?=$row_user_details['guru_name']?></h6>
						</div>
						<div class="form-group col-md-3 col-xs-6">
							<h4 for="date">Picode</h4>
							<h6><?=$row_user_details['guru_pin']?></h6>
						</div>
						<div class="form-group col-md-3 col-xs-6">
							<h4 for="date">District</h4>
							<h6><?=$row_user_details['guru_dist']?></h6>
						</div>
						<div class="form-group col-md-12">
							<h4 for="date">Address Guru <small>(In Case of Kinner/Hijra)</small></h4>
							<h6><?=$row_user_details['guru_address']?></h6>
						</div>
                    </div>
					<div class="row">
						<div class="form-group col-md-12">
							<hr>
							<h4 for="date" style="margin-bottom: 12px;">15. Source of Income : Please Tick (√), and furnish details : </h4>
						</div>
						<div class="form-group col-md-5 procedure">
							<span>
								<b class="radio-h4"><?=$row_user_details['income_category']?></b>
							</span> 				
						</div>
						<div class="form-group col-md-2 col-xs-6">
                            <?php
                            if (!empty($row_user_details['income_file'])) {
                            ?>
                            <ul class="thumbnails">
                                <li>
                                    <a title="Group photo 1">
                                        <img src="uploads/user_image/<?=$row_user_details['income_file']?>" class="profilepic">
                                    </a>
                                </li>
                            </ul>
                            <?php } ?>
						</div>								
					</div>
					<div class="row">								
						<div class="form-group col-md-12">
							<hr>
						</div>
						<div class="form-group col-md-4 col-xs-6">
							<h4 for="date">16. Age</h4>
							<h6><?=$row_user_details['age']?></h6>
						</div>
						<div class="form-group col-md-4 col-xs-6">
							<h4 for="date">17. Date Of Birth <small>(as per birth certificate)</small></h4>
							<h6><?=$row_user_details['dob']?></h6>
						</div>
						<div class="form-group col-md-4">
							<h4 for="date">18. Phone No </h4>
							<h6><?=$row_user_details['mobile']?></h6>
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
							<h6><?=$row_user_details['criminal_details']?></h6>
						</div>
					</div>	
                    <div class="row">
						<div class="form-group col-md-12">
							<hr>
							<h4 for="date">20. Are you been a victim of any of the following matter, if “YES” Please furnish details any of the following</h4>
						</div>
                            
                        <div class="form-group col-md-4 col-xs-4 doc">
                            <h4 for="email">Bullying 
                                <span>
                                    <?php
                                        if ($row_user_details['bullying_status'] == 'yes') {
                                           print '<b class="radio-h4">Yes</b>';
                                        }else{
                                            print '<b class="radio-h4">No</b>';
                                        }
                                    ?>  								
                                </span>
                            </h4>
                        </div>
                        <div class="form-group col-md-2 col-xs-2 doc"> 
                            <?php
                                if (!empty($row_user_details['bullying_file'])) {
                            ?>
                            <ul class="thumbnails">
                                <li>
                                    <a title="Group photo 1">
                                        <img src="uploads/user_image/<?=$row_user_details['bullying_file']?>" class="profilepic">
                                    </a>
                                </li>
                            </ul>
                        <?php } ?>
                        </div>     
                        <div class="form-group col-md-4 col-xs-4 doc">
                            <h4 for="email">Police Harassment (in any form)
                                <span>
                                    <?php
                                        if ($row_user_details['police_status'] == 'yes') {
                                           print '<b class="radio-h4">Yes</b>';
                                        }else{
                                            print '<b class="radio-h4">No</b>';
                                        }
                                    ?> 									
                                </span>
                            </h4>
                        </div>
                        <div class="form-group col-md-2 col-xs-2 doc">
                            <?php
                                if (!empty($row_user_details['police_file'])) {
                            ?>
                            <ul class="thumbnails">
                                <li>
                                    <a title="Group photo 1">
                                        <img src="uploads/user_image/<?=$row_user_details['police_file']?>" class="profilepic">
                                    </a>
                                </li>
                            </ul>
                        <?php } ?>
                        </div>		
                        <div class="form-group col-md-4 col-xs-4 doc">
                            <h4 for="email">Discrimination from any Authority(in any establishment or public places )
                                <span>
                                    <?php
                                        if ($row_user_details['disc_status'] == 'yes') {
                                           print '<b class="radio-h4">Yes</b>';
                                        }else{
                                            print '<b class="radio-h4">No</b>';
                                        }
                                    ?> 								
                                </span>
                            </h4>
                        </div>
                        <div class="form-group col-md-2 col-xs-2 doc">
                            <?php
                                if (!empty($row_user_details['disc_file'])) {
                            ?>
                            <ul class="thumbnails">
                                <li>
                                    <a title="Group photo 1">
                                        <img src="uploads/user_image/<?=$row_user_details['disc_file']?>" class="profilepic">
                                    </a>
                                </li>
                            </ul>
                        <?php } ?>
                        </div>
                        <div class="form-group col-md-4 col-xs-4 doc">
                            <h4 for="email">Family or Social torture. 
                                <span>
                                    <?php
                                        if ($row_user_details['family_status'] == 'yes') {
                                           print '<b class="radio-h4">Yes</b>';
                                        }else{
                                            print '<b class="radio-h4">No</b>';
                                        }
                                    ?>  									
                                </span>
                            </h4>
                        </div>
                        <div class="form-group col-md-2 col-xs-2 doc">
                            <?php
                                if (!empty($row_user_details['family_file'])) {
                            ?>
                            <ul class="thumbnails">
                                <li>
                                    <a title="Group photo 1">
                                        <img src="uploads/user_image/<?=$row_user_details['family_file']?>" class="profilepic">
                                    </a>
                                </li>
                            </ul>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12"><hr> </div>
                        <div class="form-group col-md-6 col-xs-6">
                        <h4>5. Signature of the surveyor. </h4>
                            <h6><?=$row_user_details['survay_sign']?></h6>

                        </div>
                        <div class="form-group col-md-6 col-xs-6">
                          <h4>Signature of the Transgender or Left thumb impression </h4>
                            <?php
                                if (!empty($row_user_details['user_sign'])) {
                            ?>
                            <ul class="thumbnails">
                                <li>
                                    <a title="Group photo 1">
                                        <img src="uploads/user_image/<?=$row_user_details['user_sign']?>" class="profilepic" style="max-height: 200px;">
                                    </a>
                                </li>
                            </ul>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="row">
						<div class="form-group col-md-12">
							<a class="btn btn-primary" href="user_form_edit.php">Edit your form</a>
                            <a class="btn btn-primary" onclick="printDiv()">Print</a>
						</div>
                    </div>
                    <script>
                    function printDiv() 
                        {
                            var printContents = document.getElementById("main_content").innerHTML;
                            var originalContents = document.body.innerHTML;

                            document.body.innerHTML = printContents;

                            window.print();
                        }
                        
                        window.onafterprint = function(event) {
                                window.location.href="user-form-view.php";
                        };
                    </script>
                </form>
            </div>	

            <?php
                }
            ?>
<<<<<<< HEAD
=======
          </div>
        </div>
      </section>
      <section class="thank-area" style="margin-top:20px;" >
        <div class="container pt-10 pb-10">
          <div class="row">	
            <div class="col-sm-12 mbpr-0" style="padding: 20px;background: #eee;">
				<h1>Thanks!! your form is already submitted
					<small><a>Click Here to view your form</a></small>
				</h1>
			</div>								
>>>>>>> 287cf4a3880039a1a734bc57ee0eac09eacc34ea
          </div>
        </div>
      </section>
    </div>
    <!-- end main-content -->
    
    <!-- Footer -->
    <footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="#25272e" id="footer-area">
      <div class="container pt-70 pb-40">
        <div class="row border-bottom-black">
          <div class="col-sm-6 col-md-4">
            <div class="widget dark">
              <img class="mt-10 mb-20" alt="" src="images/logo-wide3.png" width="17%" style="margin-top: -20px!important;">
              <div class="m-0 pl-10 pr-10"><i class="fa fa-map-marker text-theme-colored mr-5"></i> <a class="text-gray" href="#"> Pandu, Cabin, Near Rly B-G office.<br>
                Dist:- Kamrup(M). P.O:- Pandu.<br>
                Pin:- 781012, Guwahati (Assam).</a> </div>
              <ul class="list-inline mt-5">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#"> +91-96784-38719</a> </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">baruahbidhan2@gmail.com</a> </li>
                
              </ul>
            </div>
          </div>       
          <div class="col-sm-6 col-md-4">
            <div class="widget dark">
              <h5 class="widget-title">Useful Links</h5>
              <ul class="list angle-double-right list-border">
                <li><a href="index.php">Home</a></li>
                <li><a href="About_us.php">About Us</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="donation.php">Donation</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>               
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="widget dark"> 
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTransgender2015%2F&tabs=timeline&width=300&height=280&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="280" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
          </div>
        </div>      
      </div>
      <div class="footer-bottom bg-black-333">
        <div class="container pt-15 pb-10">
          <div class="row">
            <div class="col-md-6">
            <p>© 2018 All Assam Transgender Association <a href="http://www.webinfotech.net.in" title="">Web Infotech</a> </p>
            </div>
          
          </div>
        </div>
      </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  <!-- end wrapper -->
  

<style type="text/css">
    @media (min-width: 992px){
        .col-md-4 {
            width: 33.33333333%;
            margin-top: 17px;
        }
    }        
    @media screen and (max-width: 800px) {
    

            .merah {
            font-size: 20px!important;
            margin-left: 18px!important;
            margin-top: 68px!important;
        }
        

        .list-border span {
            font-size: 12px!important;
        }




        #gallery h2{
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            line-height: 1.42857143;
            color: #333333;
            font-size: 19px;
        }

        .meradonation h4{
            font-family: 'Playfair Display', serif;
            font-weight: 900;
            line-height: 1.42857143;
            color: #333333;
            font-size: 10px;
        }


        .bg-silver-light h2{
            font-size: 22px;
        }

        p, pre, ul, ol, dl, dd, blockquote, address, table, fieldset, form {
            margin-bottom: 1px;
            font-size: 12px;
            /* text-align: justify; */
            /* word-spacing: 8.4px; */
        }

        .display-table-cell {
            
            
            border-bottom: 1px solid #fff;
        }

        .bg-theme-colored .pb-0 .col-md-12 {
            height: 128px;
        }

        .bg-theme-colored h3 {
            margin-top: 57px!important;
            position: absolute!important;
            margin-left: -18px!important;
            font-size: 15px!important;
        }



        #paypal_donate_form_onetime_recurring .row .col-md-12 h3{
        font-family: 'Playfair Display', serif;
            font-weight: 600;
            line-height: 1.42857143;
            color: #333333;
        top: -52px;

            }
        .meradonation{

            margin-top:25%
        }


        .col-xs-12 {
            width: 100%;
            top: 34px;
        }


        .font-36 {
            font-size: 1.571429rem !important;
        }




        .mt-10 {
            margin-top: 19px !important;
        }

        .btn-transparent.btn-border {
            background-color: transparent;
            border-color: #eeeeee;
            margin-top: -33px!important;
        }

        .border-bottom {
            border-bottom: 1px solid #eeeeee !important;
            top: -44px;
        }

        .font-48 {
                font-size: 1.428571rem !important;
        }

        .product {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 30px;
            padding-bottom: 15px;
            position: relative;
            overflow: hidden;
            height: 425px;
        }
        h3{
			margin-top: 28px!important;
            position: absolute!important;
            margin-left: 46px!important;
            font-size: 15px!important;
            
        }

        span {
            font-size: 18px!important;
        }

    }
    @media (max-width: 900px){
        .menuzord-responsive .showhide {
            margin: 13px;
        }

        .bg-theme-colored .sm-text-center .btn {
            margin-top: 12px!important;
            /* padding-top: 6px; */
            position: absolute;
            margin-left: -129px;
        }
    }
    @media (max-width: 444px){
        .nivo-lightbox-theme-default.nivo-lightbox-overlay {
            background: #666;
            background: rgba(0,0,0,0.6);
            height: 269px;
            margin-top: 68px;
        }
        .container {
            padding-left:0;
            padding-right:0;
        }
        .mbpr-0 {
            padding-right:0;
            padding-left:0
        }
        span {
            display: block;
        }
		.doc {
			min-height: 130px
		}
    }
    @media (max-width: 991px){
        .pb-sm-20 {
            padding-bottom: 75px !important;
        }


        .pr-sm-15 {
            padding-right: 0px !important;
            padding-left: 0px !important;
            margin-left: 0px;
        }

    }
    .bg-theme-colored .sm-text-center .btn {
        margin-top: 20px!important;
        /* padding-top: 6px; */
        position: absolute;
        margin-left: -190px;
    }
    #paypal_donate_form_onetime_recurring .row .col-md-12 h3 {
        font-family: 'Playfair Display', serif;
        font-weight: 900;
        line-height: 2.428571;
        color: #333333;
        /* top: -87px!important; */
        font-size: 21px;
    }
    .form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.0;
        color: #555;     
    }
    .login .form-group .btn-side {
        position: absolute;
        right: 15px;
        bottom: 15px;
        padding: 3.1px 17px;
        background: #ff00fa;
        border-color: #ff00fa;
        outline: none;
        color: #fff;
    }
    #contact_form {
        padding:20px;
        background:#eee
    }
    #contact_form hr{
        border-color:#ff00fa 
    }
    .options {
        position: relative;
        overflow: hidden;
        background: #ff00fa;
        color: #fff;
        display: inline-flex;
        padding: 2px 20px;
        justify-content: center;
    }
    .options input[type="file"] {
        position: absolute;
        font-size: 50px;
        opacity: 0;
        right: 0;
        top: 0;
    }
    select {
        padding: 8px;
        width: 80%
    }
    span {
        display: block;
    }
	.thank-area h1, .thank-area small{
		display: block;
		text-align: center;
		margin-top: 20px;
	}
	.thank-area small a {
		font-size: 25px;
		border: 1px solid #ff00fa;
		padding: 7px 20px;
		border-radius: 50px;
		cursor: pointer;
		margin-top: 20px;
	}
	.thank-area small a:hover {
		background: #ff00fa;
		color: #fff;
	}
</style>
  <!-- Footer Scripts -->
  <!-- JS | Custom script for all pages -->
  <script src="js/custom.js"></script>  
  <script type="text/javascript">
    $(document).ready(function() {
      /*
      var defaults = {
          containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
      };
      */
      
      $().UItoTop({ easingType: 'easeOutQuart' });
    });
    
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

    
  </script>
</body>

</html>