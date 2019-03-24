<?php
include "../database/connection.php";

  $name = "";
  $description = "";

if (isset($_POST['up'])) {
    $cat_id = $_POST['cat_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    include "../database/cat_update_query.php";

}
