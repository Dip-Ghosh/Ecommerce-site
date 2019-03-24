<?php include "../database/connection.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$pro_id = $_GET['id'];
$ses_id = session_id();

$sql = "insert into temp_card (ses_id,pro_id,quantity) values('$ses_id','$pro_id',1)";
mysqli_query($conn, $sql);

$response_array['status'] = 'success';

?>
