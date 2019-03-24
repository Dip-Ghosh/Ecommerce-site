<?php
include ("../database/connection.php");



if(isset($_POST['add'] ))
{

	$cat_id = $_POST['cat_id'];
	$name = $_POST['name'];
	$price =$_POST['price'];
	$stock =$_POST['stock'];
	$created_date = $_POST['created_date'];
	$image = uniqid().date("Y-m-d-H-i-s").$_FILES['image']['name'];
	$destination = "../images/".$image;
	$filename = $_FILES['image']['tmp_name'];
	move_uploaded_file($filename,$destination);





	$cat_id = mysqli_real_escape_string($conn, $cat_id);
	$name = mysqli_real_escape_string($conn, $name);
	$price = mysqli_real_escape_string($conn, $price);
	$stock = mysqli_real_escape_string($conn, $stock);
	$created_date = mysqli_real_escape_string($conn, $created_date);


	//image directory

	include ("../database/product_addition_query.php");

}


?>