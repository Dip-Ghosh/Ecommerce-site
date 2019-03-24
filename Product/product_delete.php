<?php
include ("../database/connection.php");

if(isset($_GET['pro_id'])) {

	$pro_id =  mysqli_real_escape_string($conn,$_GET['pro_id']);
	include ("../database/product_delete_query.php");
}

?>