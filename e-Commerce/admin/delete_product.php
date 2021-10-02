<?php
	include "include/db.php";
	$selected_record=$_REQUEST['p_id'];
	
	$query=mysqli_query($conn, "DELETE FROM `product` where p_id='$selected_record'");
	header('refresh:1; location:add_product.php');
?>