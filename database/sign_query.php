<?php

//user sign up query

$sign="INSERT INTO login(name,email,password,user_role) VALUES ('$name','$email','$password','$user_role')";
$user_registration = mysqli_query($conn, $sign);

if(!$user_registration)
{
	die("query Error" . mysqli_error($conn));
}
else
{
	echo "You have successfully Registered !" ;
	//header("Location:index.php");
}


?>