<?php
include ("../database/connection.php");

if(isset($_GET['cat_id'])) {

	$cat_id =  mysqli_real_escape_string($conn,$_GET['cat_id']);
	include ("../database/cat_delete_query.php");

}




?>