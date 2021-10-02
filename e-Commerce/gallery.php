


<?php include 'include/db.php'; ?>


<?php include_once "include/header.php"; ?>

		<div class="container mt-5">
			<div class="row">
			<?php
			
			
			$page = $_GET['page'];
			if($page=='' || $page=='1'){
				$page1=0;
			}else{
				$page1=($page*8)-8;
			}
			
			
				$query="SELECT * FROM `gallery` LIMIT $page1,8";
					$result=mysqli_query($conn, $query);
					do{
						$data=mysqli_fetch_array($result);
						if($data){
							$photo = $data['g_photo'];
			?>
				<div class="col-md-3">
					<a href="admin/<?php echo $photo;?>" data-lightbox="mygallery"><img src="admin/<?php echo $photo;?>" class="img-fluid img-effect" style="height:300px; margin:10px"></a>
				</div>
				
				<?php }} while($data); ?>
				
				</div>
			
		</div></br>
				
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-sm-4">
							<?php
								$query1="SELECT * FROM `gallery`";
								$result1=mysqli_query($conn, $query1);
								$cou=mysqli_num_rows($result1);
								$a=($cou/6);
								$a=ceil($a);
							?>
							<ul class="pagination">
								<li class="page-item  <?php if($page <= 1){ echo 'disabled'; } ?>">
									<a class="page-link" href="<?php if($page <= 1){ echo '#'; } else { echo "?page=".($page - 1); } ?>">Prev</a>
								</li>
								<?php
									for($b=1; $b<=$a; $b++){
								?>
								
								<li class="page-item"><a class="page-link" href="gallery.php?page=<?php echo $b; ?>" ><?php echo $b . " " ; ?> </a></li>
								
								<?php	} ?>
								
								<li class="page-item  <?php if($page >= $cou){ echo 'disabled'; } ?>">
									<a class="page-link" href="<?php if($page >= $cou){ echo '#'; } else { echo "?page=".($page + 1); } ?>">Next</a>
								</li>
							
							</ul>
					
						</div>
					</div>
				</div>
			
	
		<?php include_once "include/footer.php"; ?>