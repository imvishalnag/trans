<?php
  include "../../config/db_connect.php";
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $code = $_POST['code'];
   $count= strlen($code);
   // echo $count;
   //  die();
   if ($count ==11) {
     $sql = mysqli_query($connect, "INSERT INTO video (name, code, date_added) VALUES('$name', '$code', now())");
    if ($sql) {
      $success = "Video uploaded successfully";
      header('location: ../video.php?msg=1');
    }
   }
   else{
          header('location: ../video.php?msg=2');
   }
    // header('location: video.php?msg=3');
  }
?>