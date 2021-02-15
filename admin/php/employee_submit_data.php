<?php
include "../../config/db_connect.php";
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $designation = $_POST['designation'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $qualification = $_POST['qualification'];
  $image_file = $_FILES['user_image'];
  $image_file_name = null;
  $image_file_upload = 1;
  if (!empty($name)) {  
    $sql = "INSERT INTO employee (name, email, designation, qualification, mobile, created_at, updated_at) VALUES('$name', '$email', '$designation', '$qualification', '$mobile', now(), now())";
    mysqli_query($connect, $sql);
    $last_id = mysqli_insert_id($connect);
    if(!empty($image_file)){
      $target_dir = "../../uploads/user_image/";
      $image_name = uniqid() . date('now') . $image_file['name'];
      $target_file = $target_dir . basename($image_name);
      $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      if ($_FILES["user_image"]["size"] > 500000) {
        $image_file_upload = 0;
        header('location: ../employee-form-view.php?msg=4');
        die();
      }
      // Allow certain file formats
      if ($image_file_type != "png" && $image_file_type != "jpg" && $image_file_type != "jpeg" && $image_file_type != "gif") {
        $image_file_upload = 0;
        header('location: ../employee-form-view.php?msg=5');
        die();
      }

      if ($image_file_upload == 1) {
        if (move_uploaded_file($image_file["tmp_name"], $target_file)) {
          $image_file_name = $target_file;
        }
      }
      $image_file_name = trim($image_file_name, "\.\./");
      $sql = "UPDATE employee SET image_file='$image_file_name' WHERE id=$last_id";
      mysqli_query($connect, $sql);
    }
    if ($last_id) {
      header('location: ../employee-form-view.php?msg=1');
    } else {
      header('location: ../employee-form-view.php?msg=2');
    }
  }
}
