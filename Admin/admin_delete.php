<?php

    include("../database/connection.php");

    if (isset($_GET['id'])) {
        $id =  mysqli_real_escape_string($conn, $_GET['id']);
        include("../database/admin_delete_query.php");
    }
?>