<?php


// user login query
 $login = "SELECT * FROM login WHERE email = '{$email}' and password = '{$password}'";
 $user_login =mysqli_query($conn, $login);

 if(!$user_login)
    {
        die("Query failed" . mysqli_error($conn));
    }



?>