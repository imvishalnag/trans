<?php
session_start();
include_once "../../config/db_connect.php";
date_default_timezone_set('Asia/Kolkata');

if (isset($_POST['submit']) && isset($_POST['mobile']) && !empty($_POST['mobile'])) {

    $id = $connect->real_escape_string(mysql_entities_fix_string($_POST['data_id']));
    $name = $connect->real_escape_string(mysql_entities_fix_string($_POST['name']));
    $father_name = $connect->real_escape_string(mysql_entities_fix_string($_POST['father_name']));
    $prefered_name = $connect->real_escape_string(mysql_entities_fix_string($_POST['prefered_name']));
    $mother_name = $connect->real_escape_string(mysql_entities_fix_string($_POST['mother_name']));
    $catgegory = $connect->real_escape_string(mysql_entities_fix_string($_POST['catgegory']));
    

    $gh_details = $connect->real_escape_string(mysql_entities_fix_string($_POST['gh_details']));
    $gh_pin = $connect->real_escape_string(mysql_entities_fix_string($_POST['gh_pin']));
    $gh_dist = $connect->real_escape_string(mysql_entities_fix_string($_POST['gh_dist']));
    $gh_state = $connect->real_escape_string(mysql_entities_fix_string($_POST['gh_state']));

    //guru name
    $guru_name = $connect->real_escape_string(mysql_entities_fix_string($_POST['guru_name']));
    $guru_pin = $connect->real_escape_string(mysql_entities_fix_string($_POST['guru_pin']));
    $guru_dist = $connect->real_escape_string(mysql_entities_fix_string($_POST['guru_dist']));
    $guru_address = $connect->real_escape_string(mysql_entities_fix_string($_POST['guru_address']));

    $age = $connect->real_escape_string(mysql_entities_fix_string($_POST['age']));
    $dob = $connect->real_escape_string(mysql_entities_fix_string($_POST['dob']));
    $mobile = $connect->real_escape_string(mysql_entities_fix_string($_POST['mobile']));

    //phy doctor
    $phy_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['phy_status']));
    $phy_doctor = $connect->real_escape_string(mysql_entities_fix_string($_POST['phy_doctor']));
    $phy_exp = $connect->real_escape_string(mysql_entities_fix_string($_POST['phy_exp']));
    $phy_phone = $connect->real_escape_string(mysql_entities_fix_string($_POST['phy_phone']));
    $phy_category = $connect->real_escape_string(mysql_entities_fix_string($_POST['phy_category']));

    //address 
    $p_address_id =  $connect->real_escape_string(mysql_entities_fix_string($_POST['p_address_id']));
    $p_address = $connect->real_escape_string(mysql_entities_fix_string($_POST['p_address']));
    $p_pin = $connect->real_escape_string(mysql_entities_fix_string($_POST['p_pin']));
    $p_dist = $connect->real_escape_string(mysql_entities_fix_string($_POST['p_dist']));

    $r_address_id =  $connect->real_escape_string(mysql_entities_fix_string($_POST['r_address_id']));
    $r_address = $connect->real_escape_string(mysql_entities_fix_string($_POST['r_address']));
    $r_pin = $connect->real_escape_string(mysql_entities_fix_string($_POST['r_pin']));
    $r_dist = $connect->real_escape_string(mysql_entities_fix_string($_POST['r_dist']));

    $user_image = $_FILES['user_image'];

    //birth
    $birth_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['birth_status']));
    $birth_file = $_FILES['birth_file'];

    //Voter File
    $voter_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['voter_status']));
    $voter_file = $_FILES['voter_file'];

    //Pan File
    $pan_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['pan_status']));
    $pan_file = $_FILES['pan_file'];

    //aadhar
    $aadhar_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['aadhar_status']));
    $aadhar_file = $_FILES['aadhar_file'];

    //ration
    $ration_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['ration_status']));
    $ration_file = $_FILES['ration_file'];

    //Bank Pass
    $bank_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['bank_status']));
    $bank_file = $_FILES['bank_file'];

    //mnrega
    $mnrg_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['mnrg_status']));
    $mnrg_file = $_FILES['mnrg_file'];

    //Passport
    $pass_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['pass_status']));
    $pass_file = $_FILES['pass_file'];

    //hslc
    $hslc_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['hslc_status']));
    $hslc_file = $_FILES['hslc_file'];

    //hs
    $hs_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['hs_status']));
    $hs_file = $_FILES['hs_file'];

    //graduation
    $graduation_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['graduation_status']));
    $graduation_file = $_FILES['graduation_file'];

    //name change
    $name_chng_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['name_chng_status']));
    $name_chng_file = $_FILES['name_chng_file'];

    //other Qualification
    $other_q_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['other_q_status']));
    $other_q_name = $connect->real_escape_string(mysql_entities_fix_string($_POST['other_q_name']));
    $other_q_year = $connect->real_escape_string(mysql_entities_fix_string($_POST['other_q_year']));
    $other_q_file = $_FILES['other_q_file'];

    //Qualification array
    $q_id = $_POST['q_id'];
    $q_name = $_POST['q_name'];
    $q_year = $_POST['q_year'];
    $q_file = $_FILES['q_file'];

    //name change
    $gender_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['gender_status']));
    $change_name = $connect->real_escape_string(mysql_entities_fix_string($_POST['change_name']));
    $change_file = $_FILES['change_file'];

    //Income
    $income = $connect->real_escape_string(mysql_entities_fix_string($_POST['income']));
    $income_file = $_FILES['income_file'];

    //criminal
    $criminal_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['criminal_status']));
    $criminal_details = $connect->real_escape_string(mysql_entities_fix_string($_POST['criminal_details']));

    //bullying
    $bullying_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['bullying_status']));
    $bullying_file = $_FILES['bullying_file'];

    //police
    $police_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['police_status']));
    $police_file = $_FILES['police_file'];

    //disc
    $disc_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['disc_status']));
    $disc_file = $_FILES['disc_file'];

    //family
    $family_status = $connect->real_escape_string(mysql_entities_fix_string($_POST['family_status']));
    $family_file = $_FILES['family_file'];

    $surbay_sign = $connect->real_escape_string(mysql_entities_fix_string($_POST['surbay_sign']));
    $user_sign = $_FILES['user_sign'];


    $date = date("Y-m-d");
    $user_mobile = $_SESSION['mobile'];
    $user_id = null;
    $sql_user = "SELECT * FROM `users` WHERE `mobile`='$user_mobile'";
    if ($res_user = $connect->query($sql_user)) {
        if ($res_user->num_rows > 0) {
            $user_row = $res_user->fetch_assoc();
            $user_id = $user_row['id'];

            $sql_insert = "UPDATE `user_details` SET  `name`='$name', `prefered_name`='$prefered_name', `father_name`='$father_name', `mother_name`='$mother_name', `category`='$catgegory', `gh_details`='$gh_details', `gh_pin`='$gh_pin', `gh_dist`='$gh_dist', `gh_state`='$gh_state', `phy_status`='$phy_status', `phy_doctor`='$phy_doctor', `phy_exp`='$phy_exp', `phy_phone`='$phy_phone', `phy_category`='$phy_category', `guru_name`='$guru_name', `guru_address`='$guru_address', `guru_pin`='$guru_pin', `guru_dist`='$guru_dist', `age`='$age', `dob`='$dob', `mobile`='$user_mobile',`survay_sign`='$surbay_sign' WHERE `user_id` = '$user_id'";
            if ($res_insert = $connect->query($sql_insert)) {
                if (!empty($p_address_id)) {                    
                    address_update($connect,$p_address,$p_dist,$p_pin,$p_address_id);
                }
                if (!empty($r_address_id)) {                   
                    address_update($connect,$r_address,$r_dist,$r_pin,$r_address_id);
                }

                $user_image_name = fileUpload($user_image);
                if ($user_image_name != false) {
                    $update_address_r = "UPDATE `user_details` SET `user_image` = '$user_image_name'  WHERE `id`='$id'";
                    $connect->query($update_address_r);
                }

                $birth_name = null;
                $voter_name = null;
                $pan_name = null;
                $aadhar_name = null;
                $ration_name = null;
                $bank_name = null;
                $mnrg_name = null;
                $pass_name = null;
                $hslc_name = null;
                $hs_name = null;
                $graduation_name = null;
                $name_name = null;

                if (isset($birth_status) && $birth_status == 'yes') {
                    $birth_image_name = fileUpload($birth_file);
                    if ($birth_image_name != false) {
                        $birth_name = $birth_image_name;
                         $sql_documents = "UPDATE `documents` SET  `birth` = '$birth_name' WHERE `user_id` = '$user_id'";
                        $connect->query($sql_documents);
                    }
                }
                if (isset($voter_status) && $voter_status == 'yes') {
                    $voter_image_name = fileUpload($voter_file);
                    if ($voter_image_name != false) {
                        $voter_name = $voter_image_name;
                        $sql_documents = "UPDATE `documents` SET  `voter_id` = '$voter_name' WHERE `user_id` = '$user_id'";
                        $connect->query($sql_documents);
                    }
                }                
                if (isset($pan_status) && $pan_status == 'yes') {
                    $pan_image_name = fileUpload($pan_file);
                    if ($pan_image_name != false) {
                        $pan_name = $pan_image_name;
                        $sql_documents = "UPDATE `documents` SET  `pan_card` = '$pan_name' WHERE `user_id` = '$user_id'";
                        $connect->query($sql_documents);
                    }
                }

                if (isset($aadhar_status) && $aadhar_status == 'yes') {
                    $aadhar_image_name = fileUpload($aadhar_file);
                    if ($aadhar_image_name != false) {
                        $aadhar_name = $aadhar_image_name;
                        $sql_documents = "UPDATE `documents` SET  `aadhar_card` = '$aadhar_name' WHERE `user_id` = '$user_id'";
                        $connect->query($sql_documents);
                    }
                }

                if (isset($ration_status) && $ration_status == 'yes') {
                    $ration_image_name = fileUpload($ration_file);
                    if ($ration_image_name != false) {
                        $ration_name = $ration_image_name;
                        $sql_documents = "UPDATE `documents` SET  `ration_card` = '$ration_name' WHERE `user_id` = '$user_id'";
                        $connect->query($sql_documents);
                    }
                }

                if (isset($bank_status) && $bank_status == 'yes') {
                    $bank_image_name = fileUpload($bank_file);
                    if ($bank_image_name != false) {
                        $bank_name = $bank_image_name;
                        $sql_documents = "UPDATE `documents` SET  `bank_pass` = '$bank_name' WHERE `user_id` = '$user_id'";
                        $connect->query($sql_documents);
                    }
                }

                if (isset($mnrg_status) && $mnrg_status == 'yes') {
                    $mnrg_image_name = fileUpload($mnrg_file);
                    if ($mnrg_image_name != false) {
                        $mnrg_name = $mnrg_image_name;
                        $sql_documents = "UPDATE `documents` SET  `mnrg_card` = '$mnrg_name' WHERE `user_id` = '$user_id'";
                        $connect->query($sql_documents);
                    }
                }

                if (isset($pass_status) && $pass_status == 'yes') {
                    $pass_image_name = fileUpload($pass_file);
                    if ($pass_image_name != false) {
                        $pass_name = $pass_image_name;
                        $sql_documents = "UPDATE `documents` SET  `passport` = '$pass_name' WHERE `user_id` = '$user_id'";
                        $connect->query($sql_documents);
                    }
                }

                if (isset($hslc_status) && $hslc_status == 'yes') {
                    $hslc_image_name = fileUpload($hslc_file);
                    if ($hslc_image_name != false) {
                        $hslc_name = $hslc_image_name;
                        $sql_documents = "UPDATE `documents` SET  `hslc_cert` = '$hslc_name' WHERE `user_id` = '$user_id'";
                        $connect->query($sql_documents);
                    }
                }

                if (isset($hs_status) && $hs_status == 'yes') {
                    $hs_image_name = fileUpload($hs_file);
                    if ($hs_image_name != false) {
                        $hs_name = $hs_image_name;
                        $sql_documents = "UPDATE `documents` SET  `hs_cert` = '$hs_name' WHERE `user_id` = '$user_id'";
                        $connect->query($sql_documents);
                    }
                }

                if (isset($graduation_status) && $graduation_status == 'yes') {
                    $graduation_image_name = fileUpload($graduation_file);
                    if ($graduation_image_name != false) {
                        $graduation_name = $graduation_image_name;
                        $sql_documents = "UPDATE `documents` SET  `graduation_cert` = '$graduation_name' WHERE `user_id` = '$user_id'";
                        $connect->query($sql_documents);
                    }
                }

                if (isset($name_chng_status) && $name_chng_status == 'yes') {
                    $name_image_name = fileUpload($name_chng_file);
                    if ($name_image_name != false) {
                        $name_name = $name_image_name;
                        $sql_documents = "UPDATE `documents` SET  `name_chng` = '$name_name' WHERE `user_id` = '$user_id'";
                        $connect->query($sql_documents);
                    }
                }

 
            
                //other Qualification
                if (isset($other_q_status)) {
                    if ($other_q_status == 'yes') {
                        $other_q_image = null;
                         $other_q_image_name = fileUpload($other_q_file);
                        if ($other_q_image_name != false) {
                            $other_q_image = $other_q_image_name;
                            $sql_other_q_update ="UPDATE `user_details` SET  `other_q_file` = '$other_q_image'  WHERE `id`='$id'";
                            $connect->query($sql_other_q_update);
                        }
                        $sql_other_q_update ="UPDATE `user_details` SET `other_q_status` = '$other_q_status', `other_q_name` = '$other_q_name', `other_q_year` = '$other_q_year'  WHERE `id`='$id'";
                        $connect->query($sql_other_q_update);

                    }else{
                        $sql_other_q_update ="UPDATE `user_details` SET `other_q_status` = '$other_q_status'  WHERE `id`='$id'";
                        $connect->query($sql_other_q_update);
                    }
                }
                //Qualification
                if (isset($q_name) && !empty($q_name) && count($q_name) > 0) {
                    for ($i=0; $i < count($q_name); $i++) { 
                        $q_names = $connect->real_escape_string(mysql_entities_fix_string($q_name[$i]));
                        $q_years = $connect->real_escape_string(mysql_entities_fix_string($q_year[$i]));
                        $q_id = $connect->real_escape_string(mysql_entities_fix_string($q_id[$i]));
                        $q_image_names = null;

                        if (isset($q_file['name'][$i]) && !empty($q_file['name'][$i]) && !empty($q_id)) {
                            $image_size = $q_file['size'][$i];
                            if ($image_size < 2097152 || $image_size > 2 ) {
                                $product_image_name   = $q_file['name'][$i];
                                $product_image_tmp_name = $q_file['tmp_name'][$i];
                                $ext_explode = explode(".",$product_image_name);
                                $ext = strtolower(end($ext_explode));
                                if( $ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='bmp' || $ext=='gif' ){
                                    $q_image_names = md5(uniqid()).date('Y-m-d').".".$ext;
                                    $path = "../../uploads/user_image/".$q_image_names ;
                                    move_uploaded_file($product_image_tmp_name,$path);
                                    $sql_q_insert = "UPDATE `qualification` SET  `file`='$q_image_names' WHERE `id` = '$q_id'";
                                    $connect->query($sql_q_insert);
                                }
                            }
                        }
                        $sql_q_insert = "UPDATE `qualification` SET `name_school` = '$q_names', `passing_year`='$q_years' WHERE `id` = '$q_id'";
                        $connect->query($sql_q_insert);
                    }
                }

                //gender or name change
                if (isset($gender_status)) {
                    if ($gender_status == 'yes') {
                        $gende_image = null;
                         $gende_image_name = fileUpload($change_file);
                        if ($gende_image_name != false) {
                            $gende_image = $gende_image_name;
                            $sql_other_q_update ="UPDATE `user_details` SET  `gender_change_file` = '$gende_image'  WHERE `id`='$id'";
                            $connect->query($sql_other_q_update);
                        }
                        $sql_other_q_update ="UPDATE `user_details` SET `gender_change_status` = '$gender_status', `gender_change_name` = '$change_name', `gender_change_file` = '$gende_image'  WHERE `id`='$id'";
                        $connect->query($sql_other_q_update);

                    }else{
                        $sql_other_q_update ="UPDATE `user_details` SET `gender_change_status` = '$gender_status'  WHERE `id`='$id'";
                        $connect->query($sql_other_q_update);
                    }
                }

                //Income
                $income_image = null;
                if (isset($income_file['name']) && !empty($income_file['name'])) {
                     $gende_image_name = fileUpload($income_file);
                    if ($gende_image_name != false) {
                        $income_image = $gende_image_name;
                        $sql_income ="UPDATE `user_details` SET  `income_file` = '$income_image'  WHERE `id`='$id'";
                        $connect->query($sql_income);
                    }                 
                }
                $sql_income ="UPDATE `user_details` SET `income_category` = '$income' WHERE `id`='$id'";
                $connect->query($sql_income);
                
                
                //criminal
                if (isset($criminal_status)) {
                    if ($criminal_status == 'yes') {
                        $sql_other_q_update ="UPDATE `user_details` SET `criminal_status` = '$criminal_status', `criminal_details` = '$criminal_details'  WHERE `id`='$id'";
                        $connect->query($sql_other_q_update);

                    }else{
                        $sql_other_q_update ="UPDATE `user_details` SET `criminal_status` = '$criminal_status'  WHERE `id`='$id'";
                        $connect->query($sql_other_q_update);
                    }
                }

                //bullying
                if (isset($bullying_status)) {
                    if ($bullying_status == 'yes') {
                        $bullying_image = null;
                         $bullying_image_name = fileUpload($bullying_file);
                        if ($bullying_image_name != false) {
                            $bullying_image = $other_q_image_name;
                            $sql_other_q_update ="UPDATE `user_details` SET `bullying_file` = '$bullying_image'  WHERE `id`='$id'";
                            $connect->query($sql_other_q_update);
                        }
                        $sql_other_q_update ="UPDATE `user_details` SET `bullying_status` = '$bullying_status' WHERE `id`='$id'";
                        $connect->query($sql_other_q_update);

                    }else{
                        $sql_other_q_update ="UPDATE `user_details` SET `bullying_status` = '$bullying_status'  WHERE `id`='$id'";
                        $connect->query($sql_other_q_update);
                    }
                }

                //police
                if (isset($police_status)) {
                    if ($police_status == 'yes') {
                        $police_image = null;
                         $police_image_name = fileUpload($police_file);
                        if ($police_image_name != false) {
                            $police_image = $other_q_image_name;
                            $sql_other_q_update ="UPDATE `user_details` SET `police_file` = '$police_image'  WHERE `id`='$id'";
                            $connect->query($sql_other_q_update);
                        }
                        $sql_other_q_update ="UPDATE `user_details` SET `police_status` = '$police_status'  WHERE `id`='$id'";
                        $connect->query($sql_other_q_update);

                    }else{
                        $sql_other_q_update ="UPDATE `user_details` SET `police_status` = '$police_status'  WHERE `id`='$id'";
                        $connect->query($sql_other_q_update);
                    }
                }

                //disc
                if (isset($disc_status)) {
                    if ($disc_status == 'yes') {
                        $disc_image = null;
                         $disc_image_name = fileUpload($disc_file);
                        if ($disc_image_name != false) {
                            $disc_image = $other_q_image_name;
                            $sql_other_q_update ="UPDATE `user_details` SET  `disc_file` = '$disc_image'  WHERE `id`='$id'";
                            $connect->query($sql_other_q_update);
                        }
                        $sql_other_q_update ="UPDATE `user_details` SET `disc_status` = '$disc_status' WHERE `id`='$id'";
                        $connect->query($sql_other_q_update);

                    }else{
                        $sql_other_q_update ="UPDATE `user_details` SET `disc_status` = '$disc_status'  WHERE `id`='$id'";
                        $connect->query($sql_other_q_update);
                    }
                }
                
                //family
                if (isset($family_status)) {
                    if ($family_status == 'yes') {
                        $family_image = null;
                         $family_image_name = fileUpload($family_file);
                        if ($family_image_name != false) {
                            $family_image = $other_q_image_name;
                            $sql_other_q_update ="UPDATE `user_details` SET `family_file` = '$family_image'  WHERE `id`='$id'";
                            $connect->query($sql_other_q_update);
                        }
                        $sql_other_q_update ="UPDATE `user_details` SET `family_status` = '$family_status'  WHERE `id`='$id'";
                        $connect->query($sql_other_q_update);

                    }else{
                        $sql_other_q_update ="UPDATE `user_details` SET `family_status` = '$family_status'  WHERE `id`='$id'";
                        $connect->query($sql_other_q_update);
                    }
                }

                //user_sign
           
                $family_image = null;
                 $user_sign_image_name = fileUpload($user_sign);
                if ($user_sign_image_name != false) {
                    $sql_other_q_update ="UPDATE `user_details` SET `user_sign` = '$user_sign_image_name' WHERE `id`='$id'";
                    $connect->query($sql_other_q_update);
                }
                


                header("location:../../user-form.php?msg=2");
            }

        }else{
            header("location:../../user-form.php?msg=1");
        }
    }else{
        header("location:../../user-form.php?msg=1");
    }

}else{
	header("location:../../user-form.php?msg=1");
}


function fileUpload($image)
{
   if (!empty($image['name'])) {

        $image_size = $image['size'];
        if ($image_size > 2097152 || $image_size < 2 ) {
            return false;
        }

        $product_image_name   = $image['name'];
        $product_image_tmp_name = $image['tmp_name'];
        $ext_explode = explode(".",$product_image_name);
        $ext = strtolower(end($ext_explode));
        if( $ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='bmp' || $ext=='gif' ){
            $image_name = md5(uniqid()).date('Y-m-d').".".$ext;
            $path = "../../uploads/user_image/".$image_name ;
            move_uploaded_file($product_image_tmp_name,$path);
            return $image_name;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function address_update($connect,$address,$dist,$pin,$address_id)
{
    $sql = "UPDATE `address` SET `dist`='$dist', `pin`='$pin', `address`='$address' WHERE `id`='$address_id'";

    if ($res = $connect->query($sql)) {
        return true;
    }else{
        return false;
    }
}


function mysql_entities_fix_string($string){return htmlentities(mysql_fix_string($string));}
function mysql_fix_string($string){
    if (get_magic_quotes_gpc()) 
        $string = stripslashes($string);
    return $string;
}

?>