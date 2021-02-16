<?php
include "../../config/db_connect.php";
if (isset($_GET['user_id']) && !empty($_GET['user_id']))
{
    $id = $_GET['user_id'];
    $status = $_GET['status'];
    $check = mysqli_query($connect,"SELECT * FROM employee WHERE status = 2");
    $count = mysqli_num_rows($check);
    if($count != 4 || $count < 5){
        $sql = "UPDATE employee SET status = $status WHERE id = $id";
        $result_update = $connect->query($sql);
        if ($result_update) {
            header('location: ../employee-list.php');
        }
    }else {
        header('location: ../employee-list.php');
    }
}
?>