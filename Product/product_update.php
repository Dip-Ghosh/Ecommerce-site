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

	include ("../database/product_update_query.php");
}

?>