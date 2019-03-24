<?php
$query = "DELETE FROM catagory WHERE cat_id ='$cat_id'";
    $delete_query = mysqli_query($conn, $query);
    if (!$delete_query) {
        die("delete failed".mysqli_error($conn));
    } else {


        header("Location:cat_view.php");
    }

?>