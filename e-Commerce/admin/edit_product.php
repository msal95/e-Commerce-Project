<?php include_once('include/db.php'); ?>



<?php
 session_start(); 

  if (!isset($_SESSION['admin_id'])) {
  	header('location: login.php');
  }
?>


<?php
$selected = $_REQUEST['p_id'];

if(isset($_POST['submit'])){
	$p_name=$_POST['p_name'];
	$p_desc=$_POST['p_desc'];
		$query=mysqli_query($conn, "UPDATE `product` SET p_name='$p_name', p_desc='$p_desc' WHERE p_id='$selected'") or die(mysqli_error());
	
		if($query == 0){
			header("location=edit_product.php?msg=fail");
		}elseif($query == 1){
			header("location=edit_product.php?msg=ok");
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
											$query="SELECT * FROM `product` where p_id='$selected'";
											$result=mysqli_query($conn, $query) or die(mysqli_error());
											$data=mysqli_fetch_array($result);
												$p_name=$data['p_name'];
												$p_desc=$data['p_desc'];
												$p_id=$data['p_id'];
											
										?>
											<form method="POST" action="" enctype="multipart/form-data">
														<?php 
				$msg = $_REQUEST['msg'];

				if($msg == 'ok'){

						header("refresh:1 ; url=add_product.php");
					?>
				<center>
				<h2 class="alert alert-success">Job Is Uploaded !</h2>
				</center>
				<?php } if($msg == 'fail'){
					
					 header("refresh:1 ; url=edit_product.php");
				?>
				<center>
				<h2 class="alert alert-danger">PLZ Try Again !</h2>
				</center>
				<?php } ?>
											<h3><?php echo $p_id; ?></h3>
												<div class="form-group">
													<input type="text" class="form-control" name="p_name" placeholder="cat name.." value="<?php echo $p_name; ?> ">
												</div>
												<div class="form-group">
													<textarea class="form-control ckeditor" name="p_desc" id="exampleTextarea"><?php echo $p_desc; ?> </textarea>
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