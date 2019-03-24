<?php 
require_once '../database/connection.php' ; 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//echo session_id();
if (isset($_POST['update'])) {
    $id = $_POST['pro_id'];
    $quantity = $_POST['quantity'];
    $stock= $_POST['stock'];
    $ses_id=session_id();



    if ($quantity>0 && $quantity<=$stock) {
        $sql = "update temp_card set quantity=$quantity where pro_id= '$id'";
        $result =  mysqli_query($conn, $sql);
        header("Location: order_details.php");
    } elseif ($quantity==1) {
        $sql = "update temp_card set quantity =1 where pro_id= '$id'";
        $result = mysqli_query($conn, $sql);
        header("Location: order_details.php");
    } 
    else {
        echo "
        <script>
         alert(' Bigger than Avaialble Quantity');
        </script>";
        header("Location:order_details.php");
    }
}
