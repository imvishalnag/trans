<?php include "./auth.php" ?>
<?php
// include "../admin_login_system/php_user_session_check.php";
include "../../config/db_connect.php";

if(isset($_POST['submit'])){

  $image = $_FILES['file'];

    // print_r(count($image['name']));
    // die();

  if (isset($image) && (count($image['name']) > 0) && !empty($image['name'][0])) {
    for ($i=0; $i < count($image['name']); $i++) { 
      $image_size = $image['size'][$i];
             // print_r($image_size.">"."2097152");
             // die();
      if ($image_size > 2097152 || $image_size < 2) {
       header("location:../press_image_add.php?msg=6");
       die();
     }
     $image_name   = $image['name'][$i];
     $image_tmp_name = $image['tmp_name'][$i];
     $ext_explode = explode(".",$image_name);
     $ext = strtolower(end($ext_explode));
     if( $ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='bmp' || $ext=='gif' ){
     }else{
         echo($ext);
         die();
       header("location:../press_image_add.php?msg=7");
       die();
     }
   }
 }else{
  header("location:../press_image_add.php?msg=8");
  die();
}


if (isset($image) && (count($image['name']) > 0)) {
  for ($i=0; $i < count($image['name']); $i++) { 
    $image_name = null;
    if (!empty($image['name'][$i])) {

      $image_size = $image['size'][$i];
      if ($image_size > 2097152 || $image_size < 2 ) {
        continue;
      }
      $image_name   = $image['name'][$i];
      $image_tmp_name = $image['tmp_name'][$i];
      $ext_explode = explode(".",$image_name);
      $ext = strtolower(end($ext_explode));
      if( $ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='bmp' || $ext=='gif' ){
        $image_name = md5(uniqid()).date('now').".".$ext;
        $path = "../../uploads/press/".$image_name ;
        move_uploaded_file($image_tmp_name,$path);

        include_once("ak_php_img_lib_1.0.php");
        $thumb_path = "../../uploads/press/thumb/".$image_name;
        $wmax = 300;
        $hmax = 200;
        ak_img_resize($path,$thumb_path, $wmax, $hmax, $ext);
        date_default_timezone_set("Asia/Kolkata");
        $date = date('Y-m-d');
        $sql="INSERT INTO `press_gallery` (`image`, `uploaded_date`) VALUES ('$image_name','$date')";
        if ($connect->query($sql)) {
        } else {
      }
      }
  }
}
header("location:../press_image_add.php?msg=1"); 
}else{
  header("location:../press_image_add.php?msg=8");
}
}else{
  header("location:../press_image_add.php?msg=3");
}


?>