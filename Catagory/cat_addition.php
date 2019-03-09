<?php
include ("../database/connection.php");

if(isset($_POST['add']))
{
	$name = $_POST['name'];
	$description = $_POST['description'];


	$name = mysqli_real_escape_string($conn, $name);
	$description = mysqli_real_escape_string($conn, $description);

    $query = "INSERT INTO catagory(name,description) VALUES('$name','$description')";
	//echo $query;
	$insert_cat = mysqli_query($conn, $query);
	 if(!$insert_cat)
	{
		die("query Failed". mysqli_error($conn));
	}
	else
	{
		echo "Successfully Added";
		header('Location:cat_view.php');
	}
	
}


?>