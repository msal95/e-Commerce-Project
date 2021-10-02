<?php
ob_start();
session_start();
include_once 'include/db.php';
$u_id = $_SESSION['u_id'];
if(!isset($_SESSION['u_id']) & empty($_SESSION['u_id'])){
		header('location: account.php');
	}
if(isset($_GET['p_id']) & !empty($_GET['p_id'])){
	$p_id = $_GET['p_id'];
	echo $sql = "INSERT INTO `wishlist` SET p_id='$p_id', u_id='$u_id', timestamp=NOW()";
	$res = mysqli_query($conn, $sql) or die(mysqli_error($sql));
	if($res){
		header('location: mywish_list.php');
		//echo "redirect to wish list page";
	}
}else{
	echo "There  Is An Error In The File";
}

?>