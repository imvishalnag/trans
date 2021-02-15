<?php
session_start();
include_once "../../config/db_connect.php";

if (isset($_POST['mobile']) && !empty($_POST['mobile']) && isset($_POST['otp']) && !empty($_POST['otp'])) {

	$mobile = $connect->real_escape_string(mysql_entities_fix_string($_POST['mobile']));
	$otp = $connect->real_escape_string(mysql_entities_fix_string($_POST['otp']));
	$sql = "SELECT * FROM `users` WHERE `mobile`='$mobile' AND `otp`='$otp'";
	if ($res = $connect->query($sql)) {
		$otp = rand(111111,999999);
		if ($res->num_rows > 0) {
			$row_user = $res->fetch_assoc();
			$sql_insert_otp = "UPDATE `users` SET `otp`='$otp' WHERE `mobile`='$mobile'";
			if ($res_inser_otp = $connect->query($sql_insert_otp)) {	
			 	echo "2";
			 	$_SESSION['mobile']=$mobile;
			 	$_SESSION['user_ata']=$row_user['id'];
			}
		}else{
			echo "1";
		}
	}else{
		echo "1";
	}
}else{
	echo "1";
}





function mysql_entities_fix_string($string){return htmlentities(mysql_fix_string($string));}
function mysql_fix_string($string){
    if (get_magic_quotes_gpc()) 
        $string = stripslashes($string);
    return $string;
}
