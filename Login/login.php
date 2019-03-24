<?php 

include "../database/connection.php";
session_start();

if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$email = mysqli_real_escape_string($conn, $email);
	$password = mysqli_real_escape_string($conn, $password);

	// user login query
	include ("../database/login_query.php");

	while($row = mysqli_fetch_array($user_login))
	{
		$db_id = $row ['id'];
		$db_name = $row['name'];
		$db_email =$row ['email'];
		$db_password = $row['password'];
		$db_user_role = $row['user_role'];

	}
	if($email !== $db_email && $password !== $db_password)
	{
		header("Location:login_form.php");
	}
	else if($email == $db_email && $password == $db_password)
	{
		$_SESSION['name'] = $db_name;
		$_SESSION['email'] = $db_email;
		$_SESSION['user_role'] = $db_user_role;
		header("Location:../admin/index.php");
	}
	else
	{
		header("Location:../index.php");
	}
}

?>