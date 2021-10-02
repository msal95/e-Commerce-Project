

<?php include 'include/db.php'; ?>
										<?php
	$query="SELECT * FROM `terms_of_use` where terms_id=1" ;
$result=mysqli_query($conn, $query);
$data=mysqli_fetch_array($result);
	$description=$data['description'];



?>

<?php include_once "include/header.php"; ?>

<div class="container">
	<?php echo $description; ?>
</div>


<?php include_once "include/footer.php"; ?>