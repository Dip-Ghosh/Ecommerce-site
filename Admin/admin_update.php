<?php
include ("../database/connection.php");


if(isset($_POST['submit']))
{	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$user_role =$_POST['user_role'];
	

	$query ="UPDATE login SET name ='$name', email ='$email', user_role ='$user_role' WHERE id = '$id'";

	$result = mysqli_query($conn,$query);

	if(!$result)
	{
	
        die("Query failed" . mysqli_error($conn));
    
	}
	else{
		echo "Successfully updated";
		header("Location:admin_view.php");
	}
	

}

?>