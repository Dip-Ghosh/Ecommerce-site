<?php
include ("../database/connection.php");

	
	
if(isset($_POST['add'] ))
{
	
	$cat_id = $_POST['cat_id'];
	$name = $_POST['name'];
	$price =$_POST['price'];
	$stock =$_POST['stock'];
	$created_date = $_POST['created_date'];
	//echo uniqid(); 
	//echo date("Y-m-d-H-i-s");
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
	

    $query = "INSERT INTO product(cat_id,name,price,stock,image,created_date) VALUES('$cat_id','$name','$price','$stock','$image','$created_date')";
	$insert_cat = mysqli_query($conn, $query);
	
	
	
	
	 if(!$insert_cat)
	{
		die("query Failed". mysqli_error($conn));
	}
	else
	{
		echo "Successfully Added";
		header('Location:product_view.php');
	}
	
}


?>