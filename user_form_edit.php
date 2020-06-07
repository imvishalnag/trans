<?php

session_start();
if (!isset($_SESSION['mobile']) || empty($_SESSION['mobile'])) {
    header("location:login.php");
}

include "config/db_connect.php";
function showMsg($msg)
{
    if ($msg == '1') {
        print "<p style='color:red'>Sorry User Not Found Try Again</p>";
    }
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

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
    <header class="header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <div class="header-top bg-theme-colored sm-text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
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
            <div class="col-md-8">
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
              <a class="menuzord-brand pull-left flip" href="index.html"><img src="images/logo.jpg" alt=""></a>
              <ul class="menuzord-menu"> 
                <li class="active">
                <a href="index.html">Home</a></li>
                <li><a href="About_us.html">About Us</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="donation.php">Donation</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact_us.html">Contact Us</a></li>
                <li><a href="web/php/user_logout.php" style="border: 1px solid #ff00fa;">Logout</a></li>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- end Header -->

    <!-- Start main-content -->
    <div class="main-content">
      <!-- Section: inner-header -->
       
      <?php
      $sql_user_check = "SELECT * FROM `user_details` WHERE `user_id`='$_SESSION[user_ata]'";

      if ($res_user_check = $connect->query($sql_user_check)) {
          if ($res_user_check->num_rows > 0) {
            $row_user_details = $res_user_check->fetch_assoc();
      ?>

      <section class="inner-header">
        <div class="container pt-0 pb-0">
          <!-- Section Content -->
          <div class="row">
            
            <div class="col-sm-3 mbpr-0">
                <img src="images/logo-wide3.png" class="trans-logo">
            </div>
            <div class="col-sm-9 mbpr-0">
                <img src="images/bg/back.png" class="trans-r">
            </div>
          </div>
        </div>      
      </section> 
      <!-- Section: About -->
      <section class="login-area" style="margin-top:20px;" >
        <div class="container">
          <div class="row">
            
            <div class="col-sm-12 mbpr-0">
                <?php
                if (isset($_GET['msg']) && !empty($_GET['msg'])) {
                    showMsg($_GET['msg']);
                }
                ?>

                <form id="contact_form" name="contact_form" class="login" action="web/php/user_update.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="data_id" value="<?=$row_user_details['id']?>">
                    <div class="row">

                        <div class="form-group col-md-5">
                            <h4 for="email">1. Name <small>(assigned at birth)</small></h4>
                            <input type="text" class="form-control col-sm-12" name="name" required value="<?=$row_user_details['name']?>">
                            <h4 for="date">2. Father Name </h4>
                            <input type="text" class="form-control col-sm-12" name="father_name" value="<?=$row_user_details['father_name']?>">
                        </div>
                        <div class="form-group col-md-5">
                            <h4 for="date">3. Preferred Name </h4>
                            <input type="text" class="form-control col-sm-12" name="prefered_name" value="<?=$row_user_details['prefered_name']?>">
                            <h4 for="date">4. Mother Name </h4>
                            <input type="text" class="form-control col-sm-12" name="mother_name" value="<?=$row_user_details['mother_name']?>">
                        </div>

                        <div class="form-group col-md-2 col-xs-12">
                            <h4 for="date">Photo </h4>
                            <ul class="thumbnails">
                                <li>
                                    <a title="Group photo 1">
                                        <img src="uploads/user_image/<?=$row_user_details['user_image']?>" class="profilepic blah" id="user_image_src">
                                    </a>
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                        Upload
                                        <input type="file" name="user_image" id="user_image" onchange="fileTest(this,'user_image')" >
                                    </div>
                                </li>
                            </ul>
                            <span id="user_image_error"></span>                            
                        </div>

                        <div class="form-group col-md-8 col-xs-12" style="margin-bottom: 20px;">
                            <h4>5. Preferred Category<small> Under the definition of Transgender, been recognized under NALSA Judgment (Supra)</small></h4>
                            <select id="e1" class="form-select2" name="catgegory" required="">
                                <option value="KINNER/HIJRA" <?=$row_user_details['category']=='KINNER/HIJRA'?'selected':''?>>KINNER/HIJRA</option>
                                <option value="JOGAPPAS" <?=$row_user_details['category']=='JOGAPPAS'?'selected':''?>>JOGAPPAS</option>
                                <option value="SHIV SHAKTIS" <?=$row_user_details['category']=='SHIV SHAKTIS'?'selected':''?>>SHIV SHAKTIS</option>
                                <option value="ARAVANI" <?=$row_user_details['category']=='ARAVANI'?'selected':''?>>ARAVANI</option>

                                <option value="THIRUNANGI" <?=$row_user_details['category']=='THIRUNANGI'?'selected':''?>>THIRUNANGI</option>
                                <option value="KOTHI" <?=$row_user_details['category']=='KOTHI'?'selected':''?>>KOTHI</option>
                                <option value="JOGTAS" <?=$row_user_details['category']=='JOGTAS'?'selected':''?>>JOGTAS</option>
                                <option value="TRANSWOMEN" <?=$row_user_details['category']=='TRANSWOMEN'?'selected':''?>>TRANSWOMEN</option>
                                <option value="Missouri" <?=$row_user_details['category']=='Missouri'?'selected':''?>>Missouri</option>
                                <option value="TRANSMAN" <?=$row_user_details['category']=='TRANSMAN'?'selected':''?>>TRANSMAN</option>
                                <option value="TRANSSEXUAL" <?=$row_user_details['category']=='TRANSSEXUAL'?'selected':''?>>TRANSSEXUAL</option>
                                <option value="GENDERQUEER (necessary to submit psychiatrist reports)" <?=$row_user_details['category']=='GENDERQUEER (necessary to submit psychiatrist reports)'?'selected':''?>>GENDERQUEER (necessary to submit psychiatrist reports)</option>
                                <option value="KINNER/HIJRA (AKAU or AKUA)" <?=$row_user_details['category']=='KINNER/HIJRA (AKAU or AKUA)'?'selected':''?>>KINNER/HIJRA (AKAU or AKUA) </option>
                            </select>
                        </div>

                    </div>

                    <div class="row"> 
                        <?php
                        if (!empty($row_user_details['p_address_id'])) {
                            $sql_p_address = "SELECT * FROM `address` WHERE `id`='$row_user_details[p_address_id]'";
                            if ($res_p_address = $connect->query($sql_p_address)) {
                                $row_p_address = $res_p_address->fetch_assoc();
                        ?>
                        <input type="hidden" name="p_address_id" value="<?=$row_p_address['id']?>">
                        <div class="form-group col-md-12">
                            <hr>
                            <h4>6. Permanent Address</h4>
                        </div>
                        <div class="form-group col-md-6">
                            <h4 for="date">Address</h4>
                            <textarea class="form-control form-warning" rows="4" id="p_address" name="p_address" required=""><?=isset($row_p_address['address'])?$row_p_address['address']:''?></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <h4 for="date">Pincode</h4>
                            <input type="text" class="form-control col-sm-6" placeholder="Pin" id="p_pin" name="p_pin" required="" value="<?=isset($row_p_address['pin'])?$row_p_address['pin']:''?>">
                            <h4 for="date">District</h4>
                            <input type="text" class="form-control col-sm-6" placeholder="Dist" id="p_dist" name="p_dist" required="" value="<?=isset($row_p_address['dist'])?$row_p_address['dist']:''?>">
                        </div>

                        <div class="form-group col-md-12">
                            <h4>7. Present Address</h4>
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
                        <input type="hidden" name="r_address_id" value="<?=$row_r_address['id']?>">
                        <div class="form-group col-md-12" style="padding: 11px!important;">
                            <input type="checkbox" id="p_address_same" value="yes" name="p_address_same" onclick="checkAddress()"> if present address is same as permerant address
                        </div>

                        <div class="form-group col-md-6">
                            <h4 for="date">Present Address</h4>
                            <textarea class="form-control form-warning" rows="4" id="r_address" name="r_address" required=""><?=isset($row_r_address['address'])?$row_r_address['address']:''?></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <h4 for="date">Pincode</h4>
                            <input type="text" class="form-control col-sm-6" placeholder="Pin" id="r_pin" name="r_pin" required="" value="<?=isset($row_r_address['pin'])?$row_r_address['pin']:''?>">
                            <h4 for="date">District</h4>
                            <input type="text" class="form-control col-sm-6" placeholder="Dist" id="r_dist" name="r_dist" required="" value="<?=isset($row_r_address['dist'])?$row_r_address['dist']:''?>">
                        </div>
                        <?php
                        }}
                        ?>

                    </div>


                    <div class="row">
                        <div class="form-group col-md-12">
                            <hr>
                            <h4 for="date">8. Gharana Details <small>(In Case of Kinner/Hijra)</small></h4>
                            <textarea class="form-control form-warning" rows="2" name="gh_details"><?=$row_user_details['gh_details']?></textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <h4 for="date">Pincode</h4>
                            <input type="text" class="form-control col-sm-6" name="gh_pin" value="<?=$row_user_details['gh_pin']?>">
                        </div>
                        <div class="form-group col-md-4">
                            <h4 for="date">District</h4>
                            <input type="text" class="form-control col-sm-6" name="gh_dist" value="<?=$row_user_details['gh_dist']?>">
                        </div>
                        <div class="form-group col-md-4">
                            <h4 for="date">State</h4>
                            <input type="text" class="form-control col-sm-6" name="gh_state" value="<?=$row_user_details['gh_state']?>">
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-md-12 procedure" style="margin-bottom:10px">
                            <hr>
                            <h4>9. Whether undergone Psychiatric Evaluation/HRT/Lazer Therapy (if “YES”), Please submit details:
                                <span>
                                    <input type="radio" name="phy_status" value="yes" onclick="checkDoctor()" <?=$row_user_details['phy_status'] == 'yes'?'checked':''?>>
                                    <b class="radio-h4">Yes</b>										
                                </span>
                                <span>
                                    <input type="radio" name="phy_status" value="no" onclick="checkDoctor()"  <?=$row_user_details['phy_status'] == 'no'?'checked':''?>>
                                    <b class="radio-h4">No </b>										
                                </span>	
                            </h4>
                        </div>
                        <?php
                        if ($row_user_details['phy_status'] == 'yes') {
                            print '<span id="doctor_div">';
                        }else{
                            print '<span id="doctor_div" style="display: none">';
                        }
                        ?>                        
                            <div class="form-group col-md-6">
                                <h4 for="date">Doctor Name</h4>
                                <input type="text" class="form-control col-sm-6" name="phy_doctor" value="<?=$row_user_details['phy_doctor']?>">
                            </div>
                            <div class="form-group col-md-6">
                                <h4 for="date">Professional Expertise</h4>
                                <input type="text" class="form-control col-sm-6" name="phy_exp" value="<?=$row_user_details['phy_exp']?>">
                            </div>
                            <div class="form-group col-md-6">
                                <h4 for="date">Phone Number</h4>
                                <input type="text" class="form-control col-sm-6" name="phy_phone" value="<?=$row_user_details['phy_phone']?>">
                            </div>
                            <div class="form-group col-md-6 procedure">
                                <h4 for="date" style="margin-bottom: 12px;">Procedures</h4>
                                <span>
                                    <input type="radio" name="phy_category" value="PSYCHIATRIC  EVALUATION" <?=$row_user_details['phy_category'] == 'PSYCHIATRIC  EVALUATION'?'checked':''?>>
                                    <b class="radio-h4">PSYCHIATRIC  EVALUATION</b>										
                                </span>
                                <span>
                                    <input type="radio" name="phy_category" value="HRT" <?=$row_user_details['phy_category'] == 'HRT'?'checked':''?>>
                                    <b class="radio-h4">HRT </b>										
                                </span>	
                                <span>
                                    <input type="radio" name="phy_category" value="LAZER THERAPY" <?=$row_user_details['phy_category'] == 'LAZER THERAPY'?'checked':''?>>
                                    <b class="radio-h4">LAZER THERAPY </b>										
                                </span>
                                <br>						
                            </div>	
                        </span>
                    </div>


                    <div class="row">		

                        <div class="form-group col-md-12">
                            <hr>
                            <h4>10. Do you have any of the following documents ? if “YES”, Tick (Yes) & submit a copy of the same</h4>
                        </div>

                    <?php
                    $row_document =null;
                        if (!empty($row_user_details['p_address_id'])) {
                            $sql_document = "SELECT * FROM `documents` WHERE `user_id`='$_SESSION[user_ata]'";
                            if ($res_document = $connect->query($sql_document)) {
                                $row_document = $res_document->fetch_assoc();
                            }
                        }
                    ?>
                        <div class="row mobdoc">

                            <div class="form-group col-md-5 col-xs-6 doc" style="margin-left: 30px">
                                <h4 for="email">10.a. Birth Certificate 
                                    <span>
                                        <input type="radio" name="birth_status" value="yes" onclick="checkFileDiv('birth_status')" <?=isset($row_document['birth']) && !empty($row_document['birth'])?'checked':''?>>
                                        <b class="radio-h4">Yes</b>										
                                    </span>
                                    <span>
                                        <input type="radio" name="birth_status" value="no" onclick="checkFileDiv('birth_status')" <?=isset($row_document['birth']) && !empty($row_document['birth'])?'':'checked'?>>
                                        <b class="radio-h4">No </b>										
                                    </span>	
                                </h4>
                            </div>
                            <?php
                            if (isset($row_document['birth']) && !empty($row_document['birth'])) {
                                print '<span id="birth_status_div" >';
                            }else{
                                print '<span id="birth_status_div" style="display: none">';
                            }
                            ?>
                                <div class="form-group col-md-4 col-xs-3 doc">
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                                Upload
                                        <input type="file" name="birth_file" id="birth_file" onchange="validateFile('birth_file',this);">
                                    </div>
                                </div>
                                <span id="birth_file_error"></span>
                                <div class="form-group col-md-2 col-xs-2 doc">
                                    <ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/<?=isset($row_document['birth']) && !empty($row_document['birth'])?$row_document['birth']:''?>" class="profilepic" id="birth_file_src">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </span>

                        </div>


                        <div class="row mobdoc">
                            <div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
                                <h4 for="date">10.b. Election Voter 
                                    <span>
                                        <input type="radio" name="voter_status" value="yes" onclick="checkFileDiv('voter_status')" <?=isset($row_document['voter_id']) && !empty($row_document['voter_id'])?'checked':''?>>
                                        <b class="radio-h4">Yes</b>										
                                    </span>
                                    <span>
                                        <input type="radio" name="voter_status" value="no" onclick="checkFileDiv('voter_status')" <?=isset($row_document['voter_id']) && !empty($row_document['voter_id'])?'':'checked'?>>
                                        <b class="radio-h4">No </b>										
                                    </span>	
                                </h4>
                            </div>

                            <?php
                            if (isset($row_document['voter_id']) && !empty($row_document['voter_id'])) {
                                print '<span id="voter_status_div">';
                            }else{
                                print '<span id="voter_status_div" style="display: none;">';
                            }
                            ?>
                                <div class="form-group col-md-4 col-xs-4 doc">
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                        Upload<input type="file"  name="voter_file" id="voter_file" onchange="validateFile('voter_file',this);">
                                    </div>
                                </div>
                                <span id="voter_file_error"></span>
                                <div class="form-group col-md-2 col-xs-2 doc">
                                    <ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/<?=isset($row_document['voter_id']) && !empty($row_document['voter_id'])?$row_document['voter_id']:''?>" class="profilepic" id="voter_file_src">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </span>
                        </div>	


                        <div class="row mobdoc">
                            <div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
                                <h4 for="date">10.c. Pan Card 
                                    <span>
                                        <input type="radio" name="pan_status" value="yes" onclick="checkFileDiv('pan_status')"  <?=isset($row_document['pan_card']) && !empty($row_document['pan_card'])?'checked':''?>>
                                        <b class="radio-h4">Yes</b>										
                                    </span>
                                    <span>
                                        <input type="radio" name="pan_status" value="no" onclick="checkFileDiv('pan_status')"  <?=isset($row_document['pan_card']) && !empty($row_document['pan_card'])?'':'checked'?>>
                                        <b class="radio-h4">No </b>										
                                    </span>	
                                </h4>
                            </div>
                            <?php
                            if (isset($row_document['pan_card']) && !empty($row_document['pan_card'])) {
                                print '<span id="pan_status_div">';
                            }else{
                                print '<span id="pan_status_div" style="display: none;">';
                            }
                            ?>
                                <div class="form-group col-md-4 col-xs-4 doc">
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                        Upload<input type="file" name="pan_file" id="pan_file" onchange="validateFile('pan_file',this);">
                                    </div>
                                </div>
                                <span id="pan_file_error"></span>
                                <div class="form-group col-md-2 col-xs-2 doc">
                                    <ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/<?=isset($row_document['pan_card']) && !empty($row_document['pan_card'])?$row_document['pan_card']:''?>" class="profilepic" id="pan_file_src">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </span>
                        </div>

                        <div class="row mobdoc">
                                
                            <div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
                                <h4 for="email">10.d. Adhaar Card 
                                    <span>
                                        <input type="radio" name="aadhar_status" value="yes"  onclick="checkFileDiv('aadhar_status')"  <?=isset($row_document['aadhar_card']) && !empty($row_document['aadhar_card'])?'checked':''?>>
                                        <b class="radio-h4">Yes</b>										
                                    </span>
                                    <span>
                                        <input type="radio" name="aadhar_status" value="no" onclick="checkFileDiv('aadhar_status')"  <?=isset($row_document['aadhar_card']) && !empty($row_document['aadhar_card'])?'':'checked'?>>
                                        <b class="radio-h4">No </b>										
                                    </span>	
                                </h4>
                            </div>
                            <?php
                            if (isset($row_document['aadhar_card']) && !empty($row_document['aadhar_card'])) {
                                print '<span  id="aadhar_status_div"">';
                            }else{
                                print '<span  id="aadhar_status_div" style="display: none;">';
                            }
                            ?>
                                <div class="form-group col-md-4 col-xs-4 doc">
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                        Upload<input type="file" name="aadhar_file" id="aadhar_file" onchange="validateFile('aadhar_file',this);">
                                    </div>
                                </div>
                                <span id="aadhar_file_error"></span>
                                <div class="form-group col-md-2 col-xs-2 doc">
                                    <ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/<?=isset($row_document['aadhar_card']) && !empty($row_document['aadhar_card'])?$row_document['aadhar_card']:''?>" class="profilepic" id="aadhar_file_src">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </span>
                        </div>


                        <div class="row mobdoc">
                                
                            <div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
                                <h4 for="email">10.e. Ration Card / BPL Card 
                                    <span>
                                        <input type="radio" name="ration_status" value="yes"  onclick="checkFileDiv('ration_status')" <?=isset($row_document['ration_card']) && !empty($row_document['ration_card'])?'checked':''?>>
                                        <b class="radio-h4">Yes</b>										
                                    </span>
                                    <span>
                                        <input type="radio" name="ration_status" value="no" onclick="checkFileDiv('ration_status')" <?=isset($row_document['ration_card']) && !empty($row_document['ration_card'])?'':'checked'?>>
                                        <b class="radio-h4">No </b>										
                                    </span>	
                                </h4>
                            </div>
                            <?php
                            if (isset($row_document['ration_card']) && !empty($row_document['ration_card'])) {
                                print '<span  id="ration_status_div">';
                            }else{
                                print '<span  id="ration_status_div" style="display: none;">';
                            }
                            ?>                            
                                <div class="form-group col-md-4 col-xs-4 doc">
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                        Upload<input type="file" name="ration_file" id="ration_file" onchange="validateFile('ration_file',this);">
                                    </div>
                                </div>
                                <span id="ration_file_error"></span>
                                <div class="form-group col-md-2 col-xs-2 doc">
                                    <ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/<?=isset($row_document['ration_card']) && !empty($row_document['ration_card'])?$row_document['ration_card']:''?>" class="profilepic" id="ration_file_src">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </span>
                        </div>


                        <div class="row mobdoc">                                
                            <div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
                                <h4 for="email">10.f. Bank Passbook 
                                    <span>
                                        <input type="radio" name="bank_status" value="yes"  onclick="checkFileDiv('bank_status')"  <?=isset($row_document['bank_pass']) && !empty($row_document['bank_pass'])?'checked':''?>>
                                        <b class="radio-h4">Yes</b>										
                                    </span>
                                    <span>
                                        <input type="radio" name="bank_status" value="no" onclick="checkFileDiv('bank_status')"  <?=isset($row_document['bank_pass']) && !empty($row_document['bank_pass'])?'':'checked'?>>
                                        <b class="radio-h4">No </b>										
                                    </span>	
                                </h4>
                            </div>
                            <?php
                            if (isset($row_document['bank_pass']) && !empty($row_document['bank_pass'])) {
                                print '<span  id="bank_status_div">';
                            }else{
                                print '<span  id="bank_status_div" style="display: none;">';
                            }
                            ?>  
                            
                                <div class="form-group col-md-4 col-xs-4 doc">
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                        Upload<input type="file" name="bank_file" id="bank_file" onchange="validateFile('bank_file',this);">
                                    </div>
                                </div>
                                <span id="bank_file_error"></span>
                                <div class="form-group col-md-2 col-xs-2 doc">
                                    <ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/<?=isset($row_document['bank_pass']) && !empty($row_document['bank_pass'])?$row_document['bank_pass']:''?>" class="profilepic" id="bank_file_src">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </span>
                        </div>


                        <div class="row mobdoc">
                            <div class="form-group col-md-5 col-xs-5  doc" style="margin-left: 30px">
                                <h4 for="email">10.g. Mnrega Card 
                                    <span>
                                        <input type="radio" name="mnrg_status" value="yes"  onclick="checkFileDiv('mnrg_status')" <?=isset($row_document['mnrg_card']) && !empty($row_document['mnrg_card'])?'checked':''?>>
                                        <b class="radio-h4">Yes</b>										
                                    </span>
                                    <span>
                                        <input type="radio" name="mnrg_status" value="no"  onclick="checkFileDiv('mnrg_status')" <?=isset($row_document['mnrg_card']) && !empty($row_document['mnrg_card'])?'':'checked'?>>
                                        <b class="radio-h4">No </b>										
                                    </span>	
                                </h4>
                            </div>
                            <?php
                            if (isset($row_document['mnrg_card']) && !empty($row_document['mnrg_card'])) {
                                print '<span id="mnrg_status_div">';
                            }else{
                                print '<span id="mnrg_status_div" style="display: none;">';
                            }
                            ?>
                            
                                <div class="form-group col-md-4 col-xs-4  doc">
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                        Upload<input type="file" name="mnrg_file" id="mnrg_file" onchange="validateFile('mnrg_file',this);">
                                    </div>
                                </div>
                                <span id="mnrg_file_error"></span>
                                <div class="form-group col-md-2 col-xs-2  doc">
                                    <ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/<?=isset($row_document['mnrg_card']) && !empty($row_document['mnrg_card'])?$row_document['mnrg_card']:''?>" class="profilepic" id="mnrg_file_src">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </span>
                        </div>


                        <div class="row mobdoc">		
                            <div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
                                <h4 for="email">10.h. Passport 
                                    <span>
                                        <input type="radio" name="pass_status" value="yes"  onclick="checkFileDiv('pass_status')" <?=isset($row_document['passport']) && !empty($row_document['passport'])?'checked':''?>>
                                        <b class="radio-h4">Yes</b>										
                                    </span>
                                    <span>
                                        <input type="radio" name="pass_status" value="no"  onclick="checkFileDiv('pass_status')" <?=isset($row_document['passport']) && !empty($row_document['passport'])?'':'checked'?>>
                                        <b class="radio-h4">No </b>										
                                    </span>	
                                </h4>
                            </div>
                            <?php
                            if (isset($row_document['passport']) && !empty($row_document['passport'])) {
                                print '<span  id="pass_status_div">';
                            }else{
                                print '<span  id="pass_status_div" style="display: none;">';
                            }
                            ?>
                                <div class="form-group col-md-4 col-xs-4 doc">
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                        Upload<input type="file"  name="pass_file" id="pass_file" onchange="validateFile('pass_file',this);">
                                    </div>
                                </div>
                                <span id="pass_file_error"></span>
                                <div class="form-group col-md-2 col-xs-2 doc">
                                    <ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/<?=isset($row_document['passport']) && !empty($row_document['passport'])?$row_document['passport']:''?>" class="profilepic" id="pass_file_src">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </span>
                        </div>


                        <div class="row mobdoc">		
                            <div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
                                <h4 for="email">10.i. High School Leaving Certificate 
                                    <span>
                                        <input type="radio" value="yes" name="hslc_status"  onclick="checkFileDiv('hslc_status')" <?=isset($row_document['hslc_cert']) && !empty($row_document['hslc_cert'])?'checked':''?>>
                                        <b class="radio-h4">Yes</b>										
                                    </span>
                                    <span>
                                        <input type="radio" value="no" name="hslc_status" onclick="checkFileDiv('hslc_status')" <?=isset($row_document['hslc_cert']) && !empty($row_document['hslc_cert'])?'':'checked'?>>
                                        <b class="radio-h4">No </b>										
                                    </span>	
                                </h4>
                            </div>
                            <?php
                            if (isset($row_document['hslc_cert']) && !empty($row_document['hslc_cert'])) {
                                print ' <span id="hslc_status_div">';
                            }else{
                                print ' <span id="hslc_status_div" style="display: none;">';
                            }
                            ?>
                           
                                <div class="form-group col-md-4 col-xs-4 doc">
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                         Upload<input type="file" name="hslc_file" id="hslc_file" onchange="validateFile('hslc_file',this);">
                                    </div>
                                </div>
                                <span id="hslc_file_error"></span>
                                <div class="form-group col-md-2 col-xs-2 doc">
                                    <ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/<?=isset($row_document['hslc_cert']) && !empty($row_document['hslc_cert'])?$row_document['hslc_cert']:''?>" class="profilepic" id="hslc_file_src">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </span>
                        </div>	


                        <div class="row mobdoc">	
                            <div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
                                <h4 for="email">10.j. H.S Passed Certificate 
                                    <span>
                                        <input type="radio" name="hs_status"  value="yes"  onclick="checkFileDiv('hs_status')" <?=isset($row_document['hs_cert']) && !empty($row_document['hs_cert'])?'checked':''?>>
                                        <b class="radio-h4">Yes</b>										
                                    </span>
                                    <span>
                                        <input type="radio" name="hs_status"  value="no" checked onclick="checkFileDiv('hs_status')" <?=isset($row_document['hs_cert']) && !empty($row_document['hs_cert'])?'checked':''?>>
                                        <b class="radio-h4">No </b>										
                                    </span>	
                                </h4>
                            </div>
                            <?php
                            if (isset($row_document['hs_cert']) && !empty($row_document['hs_cert'])) {
                                print '<span id="hs_status_div">';
                            }else{
                                print '<span id="hs_status_div" style="display: none;">';
                            }
                            ?>
                            
                                <div class="form-group col-md-4 col-xs-4 doc">
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                        Upload<input type="file"  name="hs_file" id="hs_file" onchange="validateFile('hs_file',this);">
                                    </div>
                                </div>
                                <span id="hs_file_error"></span>
                                <div class="form-group col-md-2 col-xs-2 doc">
                                    <ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/<?=isset($row_document['hs_cert']) && !empty($row_document['hs_cert'])?$row_document['hs_cert']:''?>" class="profilepic" id="hs_file_src">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </span>
                        </div>	


                        <div class="row mobdoc">
                            <div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
                                <h4 for="email">10.k. Gradution Passed Certificate 
                                    <span>
                                        <input type="radio" name="graduation_status" value="yes"  onclick="checkFileDiv('graduation_status')" <?=isset($row_document['graduation_cert']) && !empty($row_document['graduation_cert'])?'checked':''?>>
                                        <b class="radio-h4">Yes</b>										
                                    </span>
                                    <span>
                                        <input type="radio" name="graduation_status" value="no" checked onclick="checkFileDiv('graduation_status')" <?=isset($row_document['graduation_cert']) && !empty($row_document['graduation_cert'])?'checked':''?>>
                                        <b class="radio-h4">No </b>										
                                    </span>	
                                </h4>
                            </div>
                            <?php
                            if (isset($row_document['graduation_cert']) && !empty($row_document['graduation_cert'])) {
                                print '<span id="graduation_status_div">';
                            }else{
                                print '<span id="graduation_status_div" style="display: none;">';
                            }
                            ?>
                            
                                <div class="form-group col-md-4 col-xs-4 doc">
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                        Upload <input type="file" name="graduation_file"  id="graduation_file" onchange="validateFile('graduation_file',this);">
                                    </div>
                                </div>
                                <span id="graduation_file_error"></span>
                                <div class="form-group col-md-2 col-xs-2 doc">
                                    <ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/<?=isset($row_document['graduation_cert']) && !empty($row_document['graduation_cert'])?$row_document['graduation_cert']:''?>" class="profilepic" id="graduation_file_src">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </span>								
                        </div>	


                        <div class="row mobdoc">											
                            <div class="form-group col-md-5 col-xs-5 doc" style="margin-left: 30px">
                                <h4 for="email">10.l. Name Changed Affidavit 
                                    <span>
                                        <input type="radio" name="name_chng_status" value="yes"  onclick="checkFileDiv('name_chng_status')" <?=isset($row_document['name_chng']) && !empty($row_document['name_chng'])?'checked':''?>>
                                        <b class="radio-h4">Yes</b>										
                                    </span>
                                    <span>
                                        <input type="radio" name="name_chng_status" value="no"  onclick="checkFileDiv('name_chng_status')" <?=isset($row_document['name_chng']) && !empty($row_document['name_chng'])?'':'checked'?>>
                                        <b class="radio-h4">No </b>										
                                    </span>	
                                </h4>
                            </div>
                            <?php
                            if (isset($row_document['name_chng']) && !empty($row_document['name_chng'])) {
                                print '<span id="name_chng_status_div">';
                            }else{
                                print '<span id="name_chng_status_div" style="display: none;">';
                            }
                            ?>
                                <div class="form-group col-md-4 col-xs-4 doc">
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                        Upload<input type="file"  name="name_chng_file"  id="name_chng_file" onchange="validateFile('name_chng_file',this);">
                                    </div>
                                </div>
                                <span id="name_chng_file_error"></span>
                                <div class="form-group col-md-2 col-xs-2 doc">
                                    <ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/<?=isset($row_document['name_chng']) && !empty($row_document['name_chng'])?$row_document['name_chng']:''?>" class="profilepic" id="name_chng_file_src">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </span>									
                        </div>

                    </div>		


                    <div class="row">	
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
                            <input type="hidden" name="q_id[]" value="<?=$row_qualification['id']?>">
                            <div class="form-group col-md-6">
                                <h4 for="email">Name of the School/College/University</h4>
                                <input type="text" class="form-control col-sm-12" name="q_name[]" value="<?=$row_qualification['name_school']?>">
                            </div>
                            <div class="form-group col-md-2">
                                <h4 for="date">Passing Year </h4>
                                <input type="text" class="form-control col-sm-12" name="q_year[]" value="<?=$row_qualification['passing_year']?>">
                            </div>
                            <div class="form-group col-md-2 col-xs-6">
                                <h4 for="date">Detail </h4>
                                <div class="options" style="background: #ff00fa;color:#fff">
                                    Upload<input type="file"  name="q_file[]"  id="q_file" onchange="validateFile('q_file');">
                                </div>
                                <span id="q_file_error"></span>
                            </div>
                            <div class="form-group col-md-2 col-xs-6">
                                <ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/<?=$row_qualification['file']?>" class="profilepic" id="name_chng_file_src">
                                            </a>
                                        </li>
                                    </ul>
                            </div>
                            <?php }}}?>
                        </span>
                    </div>	


                    <div class="row">		
                        <div class="form-group col-md-12">
                            <h4>12. Other Qualification (if any), furnish details & submit a copy of the same : 
                                <span>
                                    <input type="radio" name="other_q_status"  value="yes" onclick="checkFileDiv('other_q_status')" <?=$row_user_details['other_q_status']=='yes'?'checked':''?> >
                                    <b class="radio-h4">Yes</b>										
                                </span>
                                <span>
                                    <input type="radio" name="other_q_status" value="no"  onclick="checkFileDiv('other_q_status')" <?=$row_user_details['other_q_status']=='yes'?'':'checked'?> >
                                    <b class="radio-h4">No </b>										
                                </span>	
                            </h4>
                        </div>
                        <?php
                        if ($row_user_details['other_q_status'] == 'yes') {
                            print '<span id="other_q_status_div">';
                        } else {
                            print '<span id="other_q_status_div" style="display: none">';
                        }
                        
                        ?>
                        
                            <div class="form-group col-md-6">
                                <h4 for="email">Name of the institution</h4>
                                <input type="text" class="form-control col-sm-12" name="other_q_name" value="<?=$row_user_details['other_q_name']?>">
                            </div>
                            <div class="form-group col-md-2">
                                <h4 for="date">Passing Year </h4>
                                <input type="text" class="form-control col-sm-12" name="other_q_year" value="<?=$row_user_details['other_q_year']?>" >
                            </div>
                            <div class="form-group col-md-2 col-xs-6">
                                <h4 for="date">Detail </h4>
                                <div class="options" style="background: #ff00fa;color:#fff">
                                    Upload<input type="file"  name="other_q_file" id="other_q_file" onchange="validateFile('other_q_file');">
                                </div>
                                <span id="other_q_file_error"></span>
                            </div>
                            <div class="form-group col-md-2 col-xs-6">
                                <ul class="thumbnails">
                                        <li>
                                            <a title="Group photo 1">
                                                <img src="uploads/user_image/<?=$row_user_details['other_q_file']?>" class="profilepic" id="name_chng_file_src">
                                            </a>
                                        </li>
                                    </ul>
                            </div>
                        </span>
                        <!-- <div class="form-group col-md-2 col-xs-6">
                            <button class="btn btn-primary" style="margin-top: 37px;margin-bottom:5px">+ Add More</button>
                        </div> -->
                    </div>	


                    <div class="form-group col-md-12 procedure">
                        <hr>
                        <h4>13. Whether Name or Gender Changed in documents (if “YES”, please furnish details)
                            <span>
                                <input type="radio" name="gender_status" value="yes"  onclick="checkFileDiv('gender_status')" <?=$row_user_details['gender_change_status']=='yes'?'checked':''?> >
                                <b class="radio-h4">Yes</b>										
                            </span>
                            <span>
                                <input type="radio" name="gender_status" value="no" onclick="checkFileDiv('gender_status')" <?=$row_user_details['gender_change_status']=='yes'?'':'checked'?> >
                                <b class="radio-h4">No </b>										
                            </span>	
                        </h4>
                    </div>
                        <?php
                        if ($row_user_details['other_q_status'] == 'yes') {
                            print '<span id="gender_status_div">';
                        } else {
                            print '<span id="gender_status_div" style="display: none;">';
                        }
                    ?>
                    
                        <div class="form-group col-md-7">
                            <h4> Changed Name</h4>
                            <input type="text" class="form-control col-sm-12" name="change_name" value="<?=$row_user_details['gender_change_name']?>" >
                        </div>
                        <div class="form-group col-md-2">
                            <h4 for="date">Supporting Documents</h4>
                            <div class="options" style="background: #ff00fa;color:#fff">
                                Upload
                                <input type="file" name="change_file" id="change_file" onchange="validateFile('change_file',this);">
                            </div>
                        </div>
                        <span id="change_file_error"></span>	
                        <div class="form-group col-md-2">
                            <a title="Group photo 1">
                                <img src="uploads/user_image/<?=$row_user_details['gender_change_file']?>" class="profilepic blah" id="change_file_src">
                            </a>
                        </div>	
                    </span>


                    <div class="form-group col-md-12">
                        <hr>
                        <h4>14. Details of Guru (In case, if you are under the shelter of Guru)</h4>
                    </div>
                    <div class="form-group col-md-6">
                        <h4 for="email">Name of Guru</h4>
                        <input type="text" class="form-control col-sm-12" name="guru_name" value="<?=$row_user_details['guru_name']?>">
                    </div>
                    <div class="form-group col-md-3">
                        <h4 for="date">Picode</h4>
                        <input type="text" class="form-control col-sm-12" name="guru_pin" value="<?=$row_user_details['guru_pin']?>">
                    </div>
                    <div class="form-group col-md-3">
                        <h4 for="date">District</h4>
                        <input type="text" class="form-control col-sm-12" name="guru_dist" value="<?=$row_user_details['guru_dist']?>">
                    </div>
                    <div class="form-group col-md-12">
                        <h4 for="date">Address Guru <small>(In Case of Kinner/Hijra)</small></h4>
                        <textarea class="form-control form-warning" rows="2" name="guru_address"><?=$row_user_details['guru_address']?></textarea>
                    </div>


                    <div class="form-group col-md-12">
                        <hr>
                        <h4 for="date" style="margin-bottom: 12px;">15. Source of Income : Please Tick (√), and furnish details : </h4>
                    </div>
                    <div class="form-group col-md-5 procedure">
                        <span>
                            <input type="radio" name="income" value="Begging" <?=$row_user_details['income_category']=='Begging'?'checked':''?> >
                            <b class="radio-h4">Begging</b>										
                        </span>
                        <span>
                            <input type="radio" name="income" value="Sex Work" <?=$row_user_details['income_category']=='Sex Work'?'checked':''?>>
                            <b class="radio-h4">Sex Work </b>										
                        </span>	
                        <span>
                            <input type="radio" name="income" value="Employed in any Organization" <?=$row_user_details['income_category']=='Employed in any Organization'?'checked':''?> >
                            <b class="radio-h4">Employed in any Organization </b>										
                        </span>	
                        <span>
                            <input type="radio" name="income" value="Badhai" <?=$row_user_details['income_category']=='Badhai'?'checked':''?> >
                            <b class="radio-h4">Badhai </b>										
                        </span>	 				
                    </div>
                    <div class="form-group col-md-7">
                       <input type="file" class="form-control col-sm-12" name="income_file"  id="income_file" onchange="validateFile('income_file');">
                            <span id="income_file_error"></span>
                        <span>income proof</span>
                    </div>	



                    <div class="form-group col-md-12">
                        <hr>
                    </div>
                    <div class="form-group col-md-4">
                        <h4 for="date">16. Age</h4>
                        <input type="text" class="form-control col-sm-6"  name="age" value="<?=$row_user_details['age']?>">
                    </div>
                    <div class="form-group col-md-4">
                        <h4 for="date">17. Date Of Birth <small>(as per birth certificate</small></h4>
                        <input type="text" class="form-control col-sm-6"  name="dob" value="<?=$row_user_details['dob']?>">
                    </div>
                    <div class="form-group col-md-4">
                        <h4 for="date">18. Phone No </h4>
                        <input type="text" class="form-control col-sm-6" name="mobile" value="<?=$row_user_details['mobile']?>">
                    </div>	


                    <div class="form-group col-md-12">
                        <h4>19. Any Criminal/Civil Case pending against you, if “YES”, please furnish details
                            <span>
                                <input type="radio" name="criminal_status" value="yes"  onclick="checkFileDiv('criminal_status')" <?=$row_user_details['criminal_status'] == 'yes'?'checked':''?> >
                                <b class="radio-h4">Yes</b>										
                            </span>
                            <span>
                                <input type="radio"  name="criminal_status" value="no"  onclick="checkFileDiv('criminal_status')" <?=$row_user_details['criminal_status'] == 'yes'?'':'checked'?> >
                                <b class="radio-h4">No </b>										
                            </span>	
                        </h4>
                        <?php
                        if ($row_user_details['criminal_status'] == 'yes') {
                            print '<span id="criminal_status_div"">';
                        } else {
                            print '<span id="criminal_status_div" style="display: none;">';
                        }                        
                        ?>                        
                            <textarea class="form-control form-warning" rows="2" name="criminal_details"><?=$row_user_details['criminal_details']?></textarea>
                        </span>
                    </div>


                    <div class="form-group col-md-12">
                        <hr>
                        <h4 for="date">20. Are you been a victim of any of the following matter, if “YES” Please furnish details any of the following</h4>
                    </div>
                    <div class="row">                            
                        <div class="form-group col-md-5 doc" style="margin-left: 30px">
                            <h4 for="email">Bullying 
                                <span>
                                    <input type="radio" name="bullying_status" value="yes"  onclick="checkFileDiv('bullying_status')" <?=$row_user_details['bullying_status'] == 'yes'?'checked':''?> >
                                    <b class="radio-h4">Yes</b>										
                                </span>
                                <span>
                                    <input type="radio" name="bullying_status" value="no" onclick="checkFileDiv('bullying_status')" <?=$row_user_details['bullying_status'] == 'yes'?'':'checked'?> >
                                    <b class="radio-h4">No </b>										
                                </span>	
                            </h4>
                        </div>
                        <?php
                        if ($row_user_details['criminal_status'] == 'yes') {
                            print '<span id="bullying_status_div">';
                        } else {
                            print '<span id="bullying_status_div" style="display: none;">';
                        }                        
                        ?>                        
                            <div class="form-group col-md-4 doc" >                                
                                <div class="options" style="">
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                        Upload<input type="file" name="bullying_file"  id="bullying_file" onchange="validateFile('bullying_file',this);">
                                    </div>
                                </div>
                             <span id="bullying_file_error"></span>
                            </div>
                            <div class="form-group col-md-2 doc">
                                <ul class="thumbnails">
                                    <li>
                                        <a title="Group photo 1">
                                            <img src="uploads/user_image/<?=$row_user_details['bullying_file']?>" class="profilepic" id="bullying_file_src">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </span>
                    </div>


                    <div class="row">                            
                        <div class="form-group col-md-5 doc" style="margin-left: 30px">
                            <h4 for="email">Police Harassment (in any form)
                                <span>
                                    <input type="radio" name="police_status" value="yes"  onclick="checkFileDiv('police_status')" <?=$row_user_details['police_status'] == 'yes'?'checked':''?> >
                                    <b class="radio-h4">Yes</b>										
                                </span>
                                <span>
                                    <input type="radio" name="police_status" value="no" onclick="checkFileDiv('police_status')" <?=$row_user_details['police_status'] == 'yes'?'':'checked'?> >
                                    <b class="radio-h4">No </b>										
                                </span>	
                            </h4>
                        </div>
                        <?php
                        if ($row_user_details['criminal_status'] == 'yes') {
                            print '<span id="police_status_div">';
                        } else {
                            print '<span id="police_status_div" style="display: none;">';
                        }                        
                        ?>
                            <div class="form-group col-md-4 doc">
                                <div class="options" style="">
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                        Upload<input type="file"name="police_file"  id="police_file" onchange="validateFile('police_file',this);">
                                    </div>
                                </div>
                                <span id="police_file_error"></span>
                            </div>
                            <div class="form-group col-md-2 doc">
                                <ul class="thumbnails">
                                    <li>
                                        <a title="Group photo 1">
                                            <img src="uploads/user_image/<?=$row_user_details['police_file']?>" class="profilepic" id="police_file_src">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </span>
                    </div>


                    <div class="row">										
                        <div class="form-group col-md-5 doc" style="margin-left: 30px">
                            <h4 for="email">Discrimination from any Authority(in any establishment or public places )
                                <span>
                                    <input type="radio" name="disc_status" value="yes"  onclick="checkFileDiv('disc_status')"  <?=$row_user_details['disc_status'] == 'yes'?'checked':''?>>
                                    <b class="radio-h4">Yes</b>										
                                </span>
                                <span>
                                    <input type="radio" name="disc_status" value="no"  onclick="checkFileDiv('disc_status')"  <?=$row_user_details['disc_status'] == 'yes'?'':'checked'?>>
                                    <b class="radio-h4">No </b>										
                                </span>	
                            </h4>
                        </div>
                        <?php
                        if ($row_user_details['criminal_status'] == 'yes') {
                            print '<span id="disc_status_div">';
                        } else {
                            print '<span id="disc_status_div" style="display: none;">';
                        }                        
                        ?>                        
                            <div class="form-group col-md-4 doc">
                                <div class="options" style="">
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                        Upload<input type="file"  name="disc_file"  id="disc_file" onchange="validateFile('disc_file',this);">
                                    </div>
                                </div>
                                <span id="disc_file_error"></span>
                            </div>
                            <div class="form-group col-md-2 doc">
                                <ul class="thumbnails">
                                    <li>
                                        <a title="Group photo 1">
                                            <img src="uploads/user_image/<?=$row_user_details['disc_file']?>" class="profilepic" id="disc_file_src">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </span>
                    </div>


                    <div class="row">										
                        <div class="form-group col-md-5 doc" style="margin-left: 30px">
                            <h4 for="email">Family or Social torture. 
                                <span>
                                    <input type="radio"name="family_status" value="yes"  onclick="checkFileDiv('family_status')" <?=$row_user_details['family_status'] == 'yes'?'checked':''?>>
                                    <b class="radio-h4">Yes</b>										
                                </span>
                                <span>
                                    <input type="radio" name="family_status" value="no" onclick="checkFileDiv('family_status')" <?=$row_user_details['family_status'] == 'yes'?'':'checked'?>>
                                    <b class="radio-h4">No </b>										
                                </span>	
                            </h4>
                        </div>
                        <?php
                        if ($row_user_details['family_status'] == 'yes') {
                            print '<span  id="family_status_div">';
                        } else {
                            print '<span  id="family_status_div" style="display: none;">';
                        }                        
                        ?>
                        
                            <div class="form-group col-md-4 doc">
                                <div class="options" style="">
                                    <div class="options" style="background: #ff00fa;color:#fff">
                                        Upload<input type="file" name="family_file"  id="family_file" onchange="validateFile('family_file',this);">
                                    </div>
                                </div>
                                <span id="family_file_error"></span>
                            </div>
                            <div class="form-group col-md-2 doc">
                                <ul class="thumbnails">
                                    <li>
                                        <a title="Group photo 1">
                                            <img src="uploads/user_image/<?=$row_user_details['family_file']?>" class="profilepic" id="family_file_src">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </span>
                    </div>


                    <div class="row">
                        <div class="form-group col-md-12"><hr> </div>
                        <div class="form-group col-md-6 doc">
                            <h4>5. Signature of the surveyor. </h4>
                            <select id="e1" class="form-select2" required name="surbay_sign">
                                <option value="Bikram Baruah" <?=$row_user_details['survay_sign'] == 'Bikram Baruah'?'selected':''?> >Bikram Baruah</option>
                                <option value="Debakanya Doley" <?=$row_user_details['survay_sign'] == 'Debakanya Doley'?'selected':''?> >Debakanya Doley</option>
                                <option value="Arjun Gupta" <?=$row_user_details['survay_sign'] == 'Arjun Gupta'?'selected':''?> >Arjun Gupta</option>
                                <option value="Iftikar Ahmed" <?=$row_user_details['survay_sign'] == 'Iftikar Ahmed'?'selected':''?> >Iftikar Ahmed</option>
                            </select>
                        </div>

                        <div class="form-group col-md-2 doc">
                          <h4>Signature of the Transgender or Left thumb impression </h4>
                            <ul class="thumbnails">
                                <li>
                                    <a title="Group photo 1">
                                        <img src="uploads/user_image/<?=$row_user_details['user_sign']?>" class="profilepic" id="user_sign_src">
                                    </a>
                                    <div class="options" style="">
                                        <div class="options" style="background: #ff00fa;color:#fff">
                                            Upload<input type="file" name="user_sign"  id="user_sign" onchange="validateFile('user_sign',this);">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                                        <span id="user_sign_error"></span>
                        </div>
                    </div>
                   <div>
                        <div class="form-group col-md-12">
                            <button class="btn btn-success" name="submit" value="submit">Update</button>
                            <!-- <a href="#" class="btn btn-default">Cancel</a> -->
                            <!-- <a class="btn btn-primary">Edit</a> -->
                        </div>
                    </div>
                </form>
            </div>											
          </div>
        </div>
      </section>
        
        <?php }} ?>
    </div>
    <!-- end main-content -->
    
    <!-- Footer -->
    <footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="#25272e">
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
                <li><a href="index.html">Home</a></li>
                <li><a href="About_us.html">About Us</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="donation.php">Donation</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact_us.html">Contact Us</a></li>               
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






            .menuzord-brand img {
                max-height: 92px;
            margin-top: -5px;
            margin-left: -33px;
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
            padding-right:0
        }
        span {
            display: block;
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
    
    // function readURL(input) {
    //         if (input.files && input.files[0]) {
    //             var reader = new FileReader();

    //             reader.onload = function (e) {
    //                 $('.blah')
    //                     .attr('src', e.target.result);
    //             };

    //             reader.readAsDataURL(input.files[0]);
    //         }
    //     }
  </script>

  <?php
  include "web/script/user_form_script.php";
  ?>
</body>

</html>