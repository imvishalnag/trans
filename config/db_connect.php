<?php
$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "trans";
$connect=mysqli_connect("$db_host","$db_username","$db_pass") or die ("MYSQL CONNECT KORIBO PORA NAI");
mysqli_select_db($connect, "$db_name") or die ("DATABASE A NAI KI KORU");
?>