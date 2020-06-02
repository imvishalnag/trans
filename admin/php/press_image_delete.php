<?php include "./auth.php" ?>
<?php include "../../config/db_connect.php"; ?>
<?php
// error_reporting(0);
function mysql_entities_fix_string($string){
	return htmlentities(mysql_fix_string($string));
}
function mysql_fix_string($string){
	if (get_magic_quotes_gpc())
		$string = stripslashes($string);
	return $string;
}
function clean($variable)
{
	global $connect;
	$variable = mysqli_real_escape_string($connect,mysql_entities_fix_string($variable));
	return $variable;
}

if(isset($_GET['del_id'])) // Get Id
{
	$delete_id=clean($_GET['del_id']);
	$sql_delete="SELECT * FROM `press_gallery` WHERE `id`=$delete_id";
	if ($result_delete=mysqli_query($connect,$sql_delete)){
		$row=mysqli_fetch_assoc($result_delete);
		$path_b="../../uploads/press/".$row['image'];
		$path_c="../../uploads/press/thumb/".$row['image'];
	}
	$query = "DELETE FROM `press_gallery` WHERE `id`='$delete_id'";
	$result=mysqli_query($connect,$query);  

	if($result){
		if (file_exists($path_b)){
			unlink($path_b);
		}
		if (file_exists($path_c)){
			unlink($path_c);
		}
		header("location:../press_image_view.php?msg=9");
	}else{
            // echo "Not deleted";
		header("location:../press_image_view.php?msg=10");
	}
}

?>