<?php include_once('include/db.php'); ?>


<?php
 session_start(); 

  if (!isset($_SESSION['admin_id'])) {
  	header('location: login.php');
  }
?>

<?php
$selected = $_REQUEST['cat_id'];

if(isset($_POST['submit'])){
	$cat_name=$_POST['cat_name'];
	$cat_desc=$_POST['cat_desc'];
		$query=mysqli_query($conn, "UPDATE `category` SET cat_name='$cat_name', cat_desc='$cat_desc' WHERE cat_id='$selected'") or die(mysqli_error());
	
		if($query == 1){
			header("location=edit_cat.php?msg=fail");
		}elseif($query == 0){
			header("location=edit_cat.php?msg=ok");
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
										<li class="active"><span>Categories</span></li>
									</ol>
									
									<h1>Categories</h1>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-12">
									<div class="main-box clearfix" style="min-height: 1020px;">
										<header class="main-box-header clearfix">
										</header>
										<div class="main-box-body clearfix">
							
										<?php 
											$query="SELECT * FROM `category` where cat_id='$selected'";
											$result=mysqli_query($conn, $query) or die(mysqli_error());
											$data=mysqli_fetch_array($result);
												$cat_name=$data['cat_name'];
												$cat_desc=$data['cat_desc'];
												$cat_id=$data['cat_id'];
											
										?>
											<form method="POST" action="" enctype="multipart/form-data">
														<?php 
				$msg = $_REQUEST['msg'];

				if($msg == 'ok'){

						header("refresh:1 ; url=category.php");
					?>
				<center>
				<h2 class="alert alert-success">Job Is Uploaded !</h2>
				</center>
				<?php } if($msg == 'fail'){
					
					 header("refresh:1 ; url=edit_cat.php");
				?>
				<center>
				<h2 class="alert alert-danger">PLZ Try Again !</h2>
				</center>
				<?php } ?>
											<h3><?php echo $cat_id; ?></h3>
												<div class="form-group">
													<input type="text" class="form-control" name="cat_name" placeholder="cat name.." value="<?php echo $cat_name; ?> ">
												</div>
												<div class="form-group">
													<textarea class="form-control ckeditor" name="cat_desc" id="exampleTextarea"><?php echo $cat_desc; ?> </textarea>
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