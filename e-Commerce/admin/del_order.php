<?php

include 'include/db.php';

$selected_record=$_REQUEST['order_id'];

mysqli_query($conn, "DELETE FROM `order` where order_id='$selected_record' ");

header('location:order.php');

?>