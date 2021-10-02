<?php

include_once('include/db.php');
$selected_record=$_REQUEST['cat_id'];

$query=mysqli_query($conn, "DELETE FROM `category` Where cat_id='$selected_record' ") or die(mysql_error());

	header('refresh:1, location=category.php');


?>