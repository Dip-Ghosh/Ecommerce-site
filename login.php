<?php 

include "database/connection.php";?>
<?php session_start();?>
<?php
if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$email = mysqli_real_escape_string($conn, $email);
	$password = mysqli_real_escape_string($conn, $password);

	// user login query
	$login = "SELECT * FROM login WHERE email = '{$email}' and password = '{$password}'";
	$user_login =mysqli_query($conn, $login);

	if(!$user_login)
	{
		die("Query failed" . mysqli_error($conn));
	}





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
		header("Location:admin/index.php");
	}
	else
	{
		header("Location:login_form.php");
	}
}

?>