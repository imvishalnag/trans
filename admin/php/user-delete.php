<?php
include "../../config/db_connect.php";
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $sql = "DELETE FROM employee WHERE id= '$user_id'";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header('Location: ../employee_list.php?msg=5');
    } else {
        header('Location: ../employee_list.php?msg=6');
    }
}
