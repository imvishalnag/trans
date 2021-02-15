<?php
// error_reporting(0);
include "../../config/db_connect.php";


if (isset($_GET['delete_id'])) // Get Id
{
  $delete_id = $_GET['delete_id'];
  $query = "DELETE FROM `video` WHERE `id`='$delete_id'";
  $result = mysqli_query($connect, $query);

  if ($result) {
    header('Location: ../video.php?msg=3');
  } else {
    header('Location: ../video.php?msg=2');
  }
}
