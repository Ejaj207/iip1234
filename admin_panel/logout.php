<?php
		error_reporting(0);
		session_start();
		unset($_SESSION['AdminId']);
		header("location:index.php");
?>