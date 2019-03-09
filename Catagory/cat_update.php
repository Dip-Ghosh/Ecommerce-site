<?php
include ("../database/connection.php");

//print_r($_POST);
if(isset($_POST['update']))
{	
	$cat_id = $_POST['cat_id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	
	$query ="UPDATE catagory SET name ='$name', description  ='$description' WHERE cat_id ='$cat_id'";
	$result = mysqli_query($conn,$query);

	if(!$result)
	{
	
        die("Query failed" . mysqli_error($conn));
    
	}
	else{
		echo "Successfully updated";
		header("Location:cat_view.php");
	}
	

}

?>