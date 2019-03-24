<?php
$query = "DELETE FROM product WHERE pro_id = '$pro_id'";
$delete_query = mysqli_query($conn, $query);

if (!$delete_query) {
    die("delete failed" . mysqli_error($conn));
} else {

    header("Location:product_view.php");
}
?>