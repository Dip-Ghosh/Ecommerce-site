<?php 
include ("../database/connection.php");

if(isset($_GET['cat_id'])) {

	$cat_id =  mysqli_real_escape_string($conn,$_GET['cat_id']);
	$query = "DELETE FROM catagory WHERE cat_id ='$cat_id'";
	$delete_query = mysqli_query($conn, $query);

	if(!$delete_query)
	{
		die("delete failed".mysqli_error($conn));

	}
	else
	{
		//echo "delete Successfully";

		header("Location:cat_view.php");
	}
}




?>