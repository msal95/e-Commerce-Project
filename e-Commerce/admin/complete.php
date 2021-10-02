<?php
	include "include/db.php";
	
	
	
		$selected_app = $_REQUEST['id'];
		
		
		mysqli_query($conn, "UPDATE `order` set status = '1' where order_id = '$selected_app'");
		
		
		header("location: order.php");
	
	
	
?>