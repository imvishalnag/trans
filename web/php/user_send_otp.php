<?php
include_once "../../config/db_connect.php";

if (isset($_POST['mobile']) && !empty($_POST['mobile'])) {

	$mobile = $connect->real_escape_string(mysql_entities_fix_string($_POST['mobile']));
	$sql = "SELECT * FROM `users` WHERE `mobile`='$mobile'";
	if ($res = $connect->query($sql)) {
		$otp = rand(111111,999999);
		if ($res->num_rows > 0) {
			$sql_insert_otp = "UPDATE `users` SET `otp`='$otp' WHERE `mobile`='$mobile'";
			if ($res_inser_otp = $connect->query($sql_insert_otp)) {				
			 	$request_info = urldecode("Your OTP is $otp . Please Do Not Share This Otp To Any One. Thank you");
			 	// sendSms($mobile,$request_info);
			 	echo "2";
			}
		}else{
			$sql_insert = "INSERT INTO `users`(`mobile`, `otp`) VALUES ('$mobile','$otp')";
			echo $sql_insert;
			if ($res_insert = $connect->query($sql_insert)) {				
			 	$request_info = urldecode("Your OTP is $otp . Please Do Not Share This Otp To Any One. Thank you");
			 	// sendSms($mobile,$request_info);
			 	echo "2";
			}
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


function sendSms($mobile,$sms)
{
	$username="bibibobi";
    $api_password="9aea6n725bb8uegi3";
    $sender="BBBOBI";
    $domain="http://sms.webinfotech.co";
    $priority="11";// 11-Enterprise, 12- Scrub
    $method="GET";

    $mobile=$mobile;
    $message=$sms;

    $username=urlencode($username);
    $api_password=urlencode($api_password);
    $sender=urlencode($sender);
    $message=urlencode($message);

    $sms = urlencode($sms);
        
    $parameters="username=$username&api_password=$api_password&sender=$sender&to=$mobile&message=$message&priority=$priority";

    $url="$domain/pushsms.php?".$parameters;

    $ch = curl_init($url);

    if($method=="POST")
    {
        curl_setopt($ch, CURLOPT_POST,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$parameters);
    }
    else
    {
        $get_url=$url."?".$parameters;

        curl_setopt($ch, CURLOPT_POST,0);
        curl_setopt($ch, CURLOPT_URL, $get_url);
    }

    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1); 
    curl_setopt($ch, CURLOPT_HEADER,0);  // DO NOT RETURN HTTP HEADERS 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);  // RETURN THE CONTENTS OF THE CALL
    $return_val = curl_exec($ch);
    return $return_val;
}
?>