<?php 
include ("../database/connection.php");

if(isset($_GET['id'])) {

	$id =  mysqli_real_escape_string($conn,$_GET['id']);
	$query = "DELETE FROM login WHERE id ='$id'";
	$delete_query = mysqli_query($conn, $query);

	if(!$delete_query)
	{
		die("delete failed".mysqli_error($conn));

	}
	else
	{
		//echo "delete Successfully";

		header("Location:admin_view.php");
	}
}




?>