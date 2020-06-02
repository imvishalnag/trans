<?php
  include "../../config/db_connect.php";
  session_start();
  		if(!isset($_SESSION['admin_id'])) {
  			header('location: ../login.php');
  		}
  		$admin_id = $_SESSION['admin_id'];
  		if ($admin_id)
  		{
  			if (isset($_POST['update'])) {
  				$email = $_POST['email'];

  				$old_password = $_POST['old_password'];
  				$new_password = $_POST['new_password'];
  				$con_password = $_POST['con_password'];

  				$old_username = $_POST['old_username'];
  				$new_username = $_POST['new_username'];

  				$queryget = "SELECT * FROM user WHERE id ='$admin_id' LIMIT 1";
  				if ($res_pass=$connect->query($queryget)) {
  					$rows=$res_pass->fetch_assoc();
  					$email_db=$rows['email'];
  					$password_db=$rows['password'];
  					$username_db=$rows['username'];

  					if ($email==$email_db) {
  						if ($old_username==$username_db) {
  							if ($old_password==$password_db) {
  								if ($new_password==$con_password) {
  									$sql= "UPDATE `user` SET `username`='$new_username', `password`='$new_password' WHERE `id`='$admin_id'";
  									$result_update = $connect->query($sql);
  									if ($result_update) {
  										header('location: ../change_pass.php?msg=1');
  									}else{
  										header('location: ../change_pass.php?msg=2');
  									}
  								}else{
  									header('location: ../change_pass.php?msg=6');
  								}
  							}else{
  								header('location: ../change_pass.php?msg=5');
  							}
  						}else{
  							header('location: ../change_pass.php?msg=4');
  						}
  					}else{
  						header('location: ../change_pass.php?msg=3');
  					}
  				}
  			}
  		}
?>