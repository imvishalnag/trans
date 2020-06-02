<?php

include "../../config/db_connect.php";
 if (isset($_POST["update"])) {
    $edit_id = $_POST['edit_id'];
    $heading = $_POST['heading'];
    $descpt =$_POST['descpt'];
    $content = $_POST['content'];
    $image_file = $_FILES['image_file']['name'];
// echo $image_file;
// die();
    if (!empty($image_file)) {
        $target_dir = "../../uploads/news_image/";
        $target_file = $target_dir . basename($_FILES["image_file"]["name"]);
        $uploadOk = 1;
        $image_fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if (file_exists($target_file)) {
        $success = "Sorry, file already exists.";
        $uploadOk = 0;
        // header("location:".$_SERVER['HTTP_REFERER']);
        }
        // Check file size
        if ($_FILES["image_file"]["size"] > 500000) {
            $success = "Sorry, your file is too large.";
            $uploadOk = 0;
           // header("location:".$_SERVER['HTTP_REFERER']);
        }
        // Allow certain file formats
        if($image_fileType != "jpg" && $image_fileType != "jpeg" && $image_fileType != "png" && $image_fileType != "gif" ) {
            $success = "Sorry, Your Image is Unsupported";
            $uploadOk = 0;
            // header('location: ../news_edit.php?msg=5');
        }
        if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_file)) {
        $sql_get_file_name = "SELECT `image` FROM `news` WHERE `id`='$edit_id'";
            if($res = mysqli_query($connect,$sql_get_file_name)){
                $file_name = mysqli_fetch_assoc($res);
                if (!empty($file_name['image_file'])) {
                    $delete_file_path = "../../uploads/news_image/".$file_name['image_file'];
                    if (file_exists($delete_file_path)) {
                        unlink($delete_file_path);
                    }
                }
                
            }
        $sql_file_update ="UPDATE `news` SET `image`='$target_file' WHERE `id` = '$edit_id'";
        if ($res_file_update = mysqli_query($connect,$sql_file_update) ) {
            # code...
        }
        }
    }

        $sql = "UPDATE `news` SET `id`='$edit_id',`heading`='$heading',`descpt`='$descpt',`content`='$content' WHERE `id` = '$edit_id'";
        $result= $connect->query($sql);
        if ($result) {
           header('Location: ../news_view.php?msg=6');
        }else{
            header("location:".$_SERVER['HTTP_REFERER']);      }
    
 }
?>