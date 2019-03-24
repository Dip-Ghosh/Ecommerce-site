<?php

$query = "INSERT INTO product(cat_id,name,price,stock,image,created_date) VALUES('$cat_id','$name','$price','$stock','$image','$created_date')";
$insert_cat = mysqli_query($conn, $query);

if (!$insert_cat) {
    die("query Failed" . mysqli_error($conn));
} else {
    header('Location:product_view.php');
}
?>