<?php 
include ("../database/connection.php");

if(isset($_GET['pro_id'])) {

	$pro_id =  mysqli_real_escape_string($conn,$_GET['pro_id']);
	$query = "DELETE FROM product WHERE pro_id ='$pro_id'";
	$delete_query = mysqli_query($conn, $query);

	if(!$delete_query)
	{
		die("delete failed".mysqli_error($conn));

	}
	else
	{
		echo "delete Successfully";

		header("Location:product_view.php");
	}
}




?>