<?php
include '../database/connection.php' ;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$ses_id = session_id();
$sql = "select count(*) as counter from temp_card where ses_id='$ses_id'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$response_array['status'] = 'success';
$response_array['cart'] =  $row["counter"];

echo json_encode($response_array);


?>