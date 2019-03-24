<?php
 $query = "INSERT INTO catagory(name,description) VALUES('$name','$description')";

    $insert_cat = mysqli_query($conn, $query);
    if (!$insert_cat) {
        die("query Failed". mysqli_error($conn));
    } 
    else
     {
        
        header ('Location:cat_view.php');
    }

?>