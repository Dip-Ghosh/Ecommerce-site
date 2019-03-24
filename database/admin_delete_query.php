<?php

    $query = "DELETE FROM login WHERE id ='$id'";
    $delete_query = mysqli_query($conn, $query);

    if (!$delete_query)
    {
        die("delete failed".mysqli_error($conn));
    }
    else
    {
        header("Location:admin_view.php");
    }


?>