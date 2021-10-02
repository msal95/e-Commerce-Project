
<?php include_once('include/db.php'); ?>



<?php
 session_start(); 

  if (!isset($_SESSION['admin_id'])) {
  	header('location: login.php');
  }
?>


<?php

$target_dir="product_img/";
$target_file=$target_dir . basename(rand(1,999) . rand(1000,9999) . rand(1,999) . "_" . $_FILES["p_image"]["name"]);
$uploadok=1;
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST['submit'])){
	$p_name=mysqli_real_escape_string($_POST['p_name']);
	$p_desc=mysqli_real_escape_string($_POST['p_desc']);
	$p_price=mysqli_real_escape_string($_POST['p_price']);
	$cat_id=mysqli_real_escape_string($_POST['cat_id']);

}
// Check File Size
if($_FILES["p_image"]["size"]>50000000){
	$uploadok=0;
}
// allow certain files formates
if($imageFileType !="jpg" && $imageFileType !="jpeg" && $imageFileType !="gif" && imageFileType !="png"){
	$uploadok=0;
}
// check if $uploadok isset to 0 by an error
if($uploadok==0){
	
}else{
	if(move_uploaded_file($_FILES["p_image"]["tmp_name"], $target_file)){
			$query0="INSERT INTO `product` set p_name='$p_name', cat_id='$cat_id', p_desc='$p_desc', p_price='$p_price',  p_image='$target_file' ";
		mysqli_query($conn, $query0) or die(mysqli_error());
	}else{
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
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											
											<div class="filter-block pull-right">
											<form action="" enctype="multipart/form-data" style="border-bottom:2px dotted #333;" method="POST">
											<div class="row">
											<div class="col-md-8">
												<div class="form-group pull-left">
													<input type="text" class="form-control" name="p_name" placeholder="product name...">
												</div>
												<div class="form-group pull-left">
													<textarea class="form-control" name="p_desc" placeholder="product description..."></textarea>
												</div>
												<div class="form-group pull-left">
													<select class="form-control" name="cat_id">
														<option disabled selected>Select category</option>
														<?php
															$query=mysqli_query($conn, "SELECT * FROM `category` ");
															do{
															$data=mysqli_fetch_array($query);
															if($data){
															$cat_id=$data['cat_id'];
															$cat_name=$data['cat_name'];
														?>
														<option value="<?php echo $cat_id; ?>"><?php echo $cat_name; ?></option>
															<?php }} while($data); ?>
													</select>
												</div>
												<div class="form-group pull-left">
													<input class="form-control" name="p_price" placeholder="product price...">
												</div>
												<div class="form-group pull-left">
													<input type="file" class="form-control" name="p_image" placeholder="product image...">
												</div>
												</div>
												<div class="col-md-2">
												
												<button type="submit" name="submit" style="line-height:2; margin-top:2em;" class="btn btn-primary pull-right">
													<i class="fa fa-plus-circle fa-lg"></i> Add Products
												</button>
												</div>
												</div>
												
												</form>
											</div>
										</header>
											<span></span>
										<div class="main-box-body clearfix">
											<div class="table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th><span>Product ID</span></th>
															<th><span>Product Name</span></th>
															<th><span>Product Image</span></th>
															<th><span>Description</span></th>
															<th><span>Product Price</span></th>
															<th><span>Product Cat</span></th>
															<th class="text-center"><span>Status</span></th>
															<th>&nbsp;</th>
														</tr>
													</thead>
													<?php
													
													
													$page = $_GET['page'];
													if($page=='' || $page=='1'){
														$page1=0;
													}else{
														$page1=($page*8)-8;
													}
													
													
													$query="SELECT * FROM `product`  order by p_id desc  LIMIT $page1,8 ";
														$result=mysqli_query($conn, $query);
														do{
															$data=mysqli_fetch_array($result);
															if($data){
																$p_id = $data['p_id'];
																$p_name = $data['p_name'];
																$p_image = $data['p_image'];
																$p_desc = $data['p_desc'];
																$p_price = $data['p_price'];
																$cat_id = $data['cat_id'];
													?>
													<?php
													$query_pro=mysqli_query($conn, "SELECT * FROM `category` WHERE cat_id = '$cat_id' ");
													$data_pro=mysqli_fetch_array($query_pro);
													if($data_pro){
													$cat_name=$data_pro['cat_name'];
													}
													?>
													<tbody>
														<tr>
															<td>
																<?php echo $p_id; ?>
															</td>
															<td>
																<?php echo $p_name; ?>
															</td>
															<td>
																<a href="update_product_image.php?p_id=<?php echo $p_id; ?>"><img width="50px" src="<?php echo $p_image; ?>"></a>
															</td>
															<td>
																<?php echo $p_desc; ?>
															</td>
															<td>
																<?php echo $p_price; ?>
															</td>
															<td>
																<?php echo $cat_name; ?>
															</td>
															<td class="text-center">
																<span class="label label-warning">Active</span>
															</td>
															<td style="width: 15%;">
																<a href="#" class="table-link">
																	<span class="fa-stack">
																		<i class="fa fa-square fa-stack-2x"></i>
																		<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
																	</span>
																</a>
																<a href="edit_product.php?p_id=<?php echo $p_id; ?>" class="table-link">
																	<span class="fa-stack">
																		<i class="fa fa-square fa-stack-2x"></i>
																		<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
																	</span>
																</a>
																<a href="delete_product.php?p_id=<?php echo $p_id; ?>" class="table-link danger">
																	<span class="fa-stack">
																		<i class="fa fa-square fa-stack-2x"></i>
																		<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
																	</span>
																</a>
															</td>
														</tr>
									<?php }} while($data); ?>
													</tbody>
												</table>
											</div>
												<?php
												
												
												
												$query1="SELECT * FROM `product`";
												$result1=mysqli_query($conn, $query1);
												$cou=mysqli_num_rows($result1);
												$a=($cou/6);
												$a=ceil($a);
											?>
											<ul class="pagination pull-right">
												<li class=" <?php if($page <= 1){ echo 'disabled'; } ?>">
													<a href="<?php if($page <= 1){ echo '#'; } else { echo "?page=".($page - 1); } ?>"><i class="fa fa-chevron-left"></i></a></a>
												</li>
												<?php
													for($b=1; $b<=$a; $b++){
												?>
												
												<li class="page-item"><a class="page-link" href="add_product.php?page=<?php echo $b; ?>" ><?php echo $b . " " ; ?> </a></li>
												
												<?php	} ?>
												
												<li class=" <?php if($page >= $cou){ echo 'disabled'; } ?>">
													<a href="<?php if($page >= $cou){ echo '#'; } else { echo "?page=".($page + 1); } ?>"><i class="fa fa-chevron-right"></i></a>
												</li>
											</ul>
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