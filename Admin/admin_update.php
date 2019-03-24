<?php
include("../database/connection.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user_role =$_POST['user_role'];

    include("../database/admin_update_query.php");
}
?>