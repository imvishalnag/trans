<?php
// error_reporting(0);
include "../../config/db_connect.php";


if(isset($_GET['delete_id'])) // Get Id
{
$delete_id=$_GET['delete_id'];
$query = "DELETE FROM `slider` WHERE `id`='$delete_id'";
$result=mysqli_query($connect,$query);	

if($result)
{
  // $msg="Product Details Deleted Successfully "; // Success Message
  // echo $msg;
  header('Location: ../slider.php?msg=6');
}else{
            // echo "Not Updated";
            header('Location: ../slider.php?msg=7');
        }
}

?>