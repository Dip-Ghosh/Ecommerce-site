<?php

     $query ="UPDATE login SET name ='$name', email ='$email', user_role ='$user_role' WHERE id = '$id'";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed" . mysqli_error($conn));
    }
    else {

        header("Location:admin_view.php");
    }

?>