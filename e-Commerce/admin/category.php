
<?php include_once('include/db.php'); ?>

<?php

$target_dir="cat_images/";
$target_file=$target_dir . basename(rand(1,999) . rand(1000,9999) . rand(1,999) . "_" . $_FILES["cat_image"]["name"]);
$uploadok=1;
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST['submit'])){
	$cat_name=mysqli_real_escape_string($_POST['cat_name']);
	$cat_desc=mysqli_real_escape_string($_POST['cat_desc']);

}
// Check File Size
if($_FILES["cat_image"]["size"]>50000000){
	$uploadok=0;
}
// allow certain files formates
if($imageFileType !="jpg" && $imageFileType !="jpeg" && $imageFileType !="gif" && imageFileType !="png"){
	$uploadok=0;
}
// check if $uploadok isset to 0 by an error
if($uploadok==0){
	
}else{
	if(move_uploaded_file($_FILES["cat_image"]["tmp_name"], $target_file)){
			$query="INSERT INTO `category` set cat_name='$cat_name', cat_desc='$cat_desc',  cat_image='$target_file' ";
		mysqli_query($conn, $query) or die(mysqli_error());
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
										<li class="active"><span>Categories</span></li>
									</ol>
									
									<h1>Categories</h1>
								</div>
							</div>
							
								
							<div class="row">
								<div class="col-lg-12">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix" style="border-bottom:2px dotted #333;">
											<h2 class="pull-left">Categories</h2>
											
											<div class="filter-block pull-right">
											<form action="" enctype="multipart/form-data" method="POST">
												<div class="form-group pull-left">
													<input type="text" class="form-control" name="cat_name" placeholder="cat name...">
												</div>
												<div class="form-group pull-left">
													<textarea class="form-control" name="cat_desc" placeholder="cat description..."></textarea>
												</div>
												<div class="form-group pull-left">
													<input type="file" class="form-control" name="cat_image" placeholder="cat image...">
												</div>
												
												<button type="submit" name="submit" class="btn btn-primary pull-right">
													<i class="fa fa-plus-circle fa-lg"></i> Add Category
												</a>
												</form>
											</div>
										</header>
										
										<div class="main-box-body clearfix">
											<div class="table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th><span>Cat ID</span></th>
															<th><span>Cat Name</span></th>
															<th><span>Cat Image</span></th>
															<th><span>Description</span></th>
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
			
													
													$query="SELECT * FROM `category`  order by cat_id desc  LIMIT $page1,8 ";
														$result=mysqli_query($conn, $query);
														do{
															$data=mysqli_fetch_array($result);
															if($data){
																$cat_id = $data['cat_id'];
																$cat_name = $data['cat_name'];
																$cat_image = $data['cat_image'];
																$cat_desc = $data['cat_desc'];
													?>
													<tbody>
														<tr>
															<td>
																<?php echo $cat_id; ?>
															</td>
															<td>
																<?php echo $cat_name; ?>
															</td>
															<td>
																<a href="update_cat_img.php?cat_id=<?php echo $cat_id; ?>"><img width="50px" src="<?php echo $cat_image; ?>"></a>
															</td>
															<td>
																<?php echo $cat_desc; ?>
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
																<a href="edit_cat.php?cat_id=<?php echo $cat_id; ?>" class="table-link">
																	<span class="fa-stack">
																		<i class="fa fa-square fa-stack-2x"></i>
																		<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
																	</span>
																</a>
																<a href="delete_cat.php?cat_id=<?php echo $cat_id; ?>" class="table-link danger">
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
												
												
												
												$query1="SELECT * FROM `category`";
												$result1=mysqli_query($conn, $query1);
												$cou=mysqli_num_rows($result1);
												$a=($cou/4);
												$a=ceil($a);
											?>
											<ul class="pagination pull-right">
												<li class=" <?php if($page <= 1){ echo 'disabled'; } ?>">
													<a href="<?php if($page <= 1){ echo '#'; } else { echo "?page=".($page - 1); } ?>"><i class="fa fa-chevron-left"></i></a></a>
												</li>
												<?php
													for($b=1; $b<=$a; $b++){
												?>
												
												<li class="page-item"><a class="page-link" href="category.php?page=<?php echo $b; ?>" ><?php echo $b . " " ; ?> </a></li>
												
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