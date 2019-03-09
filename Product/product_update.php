<?php
include ("../database/connection.php");

if(isset($_POST['up']))
{	
	$pro_id = $_POST['pro_id'];
	$cat_id = $_POST['cat_id'];
	$name =  $_POST['name'];
	$price = $_POST['price'];
	$stock = $_POST['stock'];
	$created_date = $_POST['created_date'];


	$query = "UPDATE product SET cat_id = '$cat_id', name = '$name', price = '$price', stock = '$stock', created_date = '$created_date' WHERE pro_id ='$pro_id'";

	$result = mysqli_query($conn,$query) or die(mysql_error($conn));
	//echo "sucessful";
}

?>