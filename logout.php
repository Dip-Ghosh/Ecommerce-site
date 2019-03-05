<?php include "database/connection.php";?>
<?php session_start();?>
<?php

		$_SESSION['name'] = null;
		$_SESSION['email'] = null;
		$_SESSION['user_role'] = null;
		header("Location:login_form.php");
?>