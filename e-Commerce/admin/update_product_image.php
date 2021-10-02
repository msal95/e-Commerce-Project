
<?php include 'include/db.php'; ?>



<?php
 session_start(); 

  if (!isset($_SESSION['admin_id'])) {
  	header('location: login.php');
  }
?>


<?php
$selected = $_REQUEST['p_id'];


$target_dir = "product_img/";
$target_file = $target_dir . basename(rand(1, 999).rand(1000,9999 ).rand(1, 999)."_".$_FILES["p_image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST['submit'])){
}
// Check file size
if ($_FILES["p_image"]["size"] > 5000000000000) {
   $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif"   && $imageFileType != "rtf" ) {
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["p_image"]["tmp_name"], $target_file)) {
   $query="UPDATE `product` set p_image = '$target_file' where p_id = '$selected' ";
   
	header("refresh: 1; url=add_product.php");

		
	mysqli_query($query) or die(mysqli_error());
    } else {
         }
}

?>
<?php include_once('include/header_script.php'); ?>

	<div id="theme-wrapper">
		
		<?php include_once('include/header.php'); ?>
		
		<div id="page-wrapper" class="container">
			<div class="row">
			
				<?php include_once('include/sidebar.php'); ?>
				
				<div id="content-wrapper">
					<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-12">
									<ol class="breadcrumb">
										<li><a href="#">Home</a></li>
										<li class="active"><span>Products</span></li>
									</ol>
									
									<h1>Products</h1>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-12">
									<div class="main-box clearfix" style="min-height: 1020px;">
										<header class="main-box-header clearfix">
										</header>
										<div class="main-box-body clearfix">
							
										<?php 
											$query_up="SELECT * FROM `product` where p_id='$selected'";
											$result_up=mysqli_query($conn, $query_up) or die(mysqli_error());
											$data=mysqli_fetch_array($result_up);
												$p_image=$data['p_image'];
												$p_id=$data['p_id'];
										?>
											<form method="POST" action="" enctype="multipart/form-data">
											<h3><?php echo $p_id; ?></h3>
												<div class="form-group">
													<input type="file" class="form-control" name="p_image">
													<img src="<?php echo $p_image; ?>" width="150px">
												</div>
												<div class="form-group">
													<button type="submit" class="pull-right btn btn-primary" id="exampleTextarea" name="submit">Update</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
					<?php include_once ('include/footer.php'); ?>
					
				</div>
			</div>
		</div>
	</div>
	
	
	<?php include_once('include/scripts.php'); ?>