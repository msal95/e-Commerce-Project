<?php
	include "include/db.php";
	$selected_record=$_REQUEST['p_id'];
	
	$query=mysqli_query($conn, "DELETE FROM `wishlist` where p_id='$selected_record'");
	header('location:mywish_list.php');
?>