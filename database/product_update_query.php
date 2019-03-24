<?php

$query = "UPDATE product SET cat_id = '$cat_id', name = '$name', price = '$price', stock = '$stock', created_date = '$created_date' WHERE pro_id ='$pro_id'";

$result = mysqli_query($conn, $query);
if (!$result) {
    die("query Failed" . mysqli_error($conn));
} else {
    header('Location:product_view.php');
}
?>