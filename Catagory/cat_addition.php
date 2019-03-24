<?php
include("../database/connection.php");

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];


    $name = mysqli_real_escape_string($conn, $name);
    $description = mysqli_real_escape_string($conn, $description);

   include ("../database/cat_addition_query.php");
}
