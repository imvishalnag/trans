<?php
  include "../../config/db_connect.php";
  if (isset($_POST["submit"])) {
    $name = $_POST['heading'];
    $descpt =$_POST['descpt'];
    $content = $_POST['content'];
    $image_file = $_FILES['image_file'];
    $image_file_name = null;
    $image_file_upload = 1;
    if(!empty($image_file['name'])) {
      $target_dir ="../../uploads/news_image/";
      $image_name=uniqid().date('now').$image_file['name'];
      $target_file = $target_dir . basename($image_name);
      $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      if ($_FILES["image_file"] ["size"] > 500000) {
        $image_file_upload = 0;

        header('location: ../news_add.php?msg=4');
        die();
      }
        // Allow certain file formats
      if($image_file_type != "png" && $image_file_type != "jpg" && $image_file_type != "jpeg" && $image_file_type != "gif") {
        $image_file_upload = 0;
        header('location: ../news_add.php?msg=5');
        die();
      }
      if ($image_file_upload == 1) {
        if(move_uploaded_file($image_file["tmp_name"], $target_file)){
          $image_file_name = $target_file;
        }
      }
      // echo $image_file_name;
    $sql = mysqli_query($connect, "INSERT INTO news (heading, image, descpt, content, date_added) VALUES('$name', '$image_file_name', '$descpt', '$content', now())");
    if ($sql) {
      header('location: ../news_view.php?msg=1');
    }else{
    header('location: ../news_add.php?msg=2');
    }
    }
    
  }
?>