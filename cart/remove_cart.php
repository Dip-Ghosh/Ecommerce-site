<?php
include "../database/connection.php";
session_start();
//echo session_id();
//print_r($_GET);
$id = $_GET['pro_id'];
$ses_id = session_id();
$sql = "delete from temp_card where pro_id= '$id'";
mysqli_query($conn, $sql);

header("Location: order_details.php");
?>