<?php
include "database/connection.php";

if(isset($_POST['signup']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user_role = $_POST['user_role'];
	

	$name = mysqli_real_escape_string($conn, $name);
	$email = mysqli_real_escape_string($conn, $email);
	$password = mysqli_real_escape_string($conn, $password);
	$user_role = mysqli_real_escape_string($conn, $user_role);

	include "database/sign_query.php";

    header("Location:Admin/admin_view.php");


}


?>