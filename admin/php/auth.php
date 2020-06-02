<?php
session_start();
include "../config/db_connect.php";
if (!isset($_SESSION['admin_id'])) {
	header('location: login.php?msg=5');
}
?>