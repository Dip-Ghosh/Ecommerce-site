<?php
    $query = "UPDATE catagory SET name ='$name', description  ='$description' WHERE cat_id ='$cat_id'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query failed" . mysqli_error($conn));
    } 
    else {

        header("Location:cat_view.php");

    }
?>