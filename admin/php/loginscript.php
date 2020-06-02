<?php
include "../../config/db_connect.php";
if (isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = mysqli_query($connect, "SELECT * FROM user WHERE username='$username' AND password='$password'");
		$exitCount = mysqli_num_rows($sql);
		if ($exitCount > 0) {
			while($row = mysqli_fetch_array($sql)) {
				$id = $row["id"];
				session_start();
				$_SESSION["admin_id"] = $id;
				header("location: ../index.php?msg=1");
			}
		}else{
			header("location: ../login.php?msg=2");
		}
	}
?>