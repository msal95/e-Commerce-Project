<?php include_once "include/db.php"; ?>
<?php 
 session_start(); 

  if (!isset($_SESSION['u_id'])) {
  	header('location: account.php');
  }
$u_id = $_SESSION['u_id'];
$cart = $_SESSION['cart'];
?>
<?php include_once "include/header.php"; ?>

<section id="content">
		<div class="content-blog">
			<div class="container">
				<div class="row text-center">
					<div class="page_header mx-auto font-weight-bold">
						<h1 class="display-1 text-uppercase">wishlist</h1>
						<p>Get the best kit for smooth shave</p>
					</div>
					<div class="col-md-12">
			
					<?php
						$query=mysqli_query($conn, "SELECT * FROM `wishlist` WHERE u_id='$u_id' ORDER BY w_id DESC");
						do{
							$row=mysqli_fetch_array($query);
						if($row){
							$p_id=$row['p_id'];
						
					?>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>&nbsp;</th>
									<th>Product Image</th>
									<th>Product Name</th>
									<th>Date</th>
									<th>&nbsp;</th>
								</tr>
							</thead>
							<?php
								//print_r($cart);
									//echo $key . " : " . $value['quantity'] ."<br>";
									$cartsql = "SELECT * FROM product WHERE p_id=$p_id";
									$cartres = mysqli_query($cartsql);
									$cartr = mysqli_fetch_assoc($cartres);
							 ?>
							<tbody>
								<tr>
									<td>
										 <a class="text-danger" href="del_wish.php?p_id=<?php echo $row['p_id']; ?>"><i class="fas fa-trash-alt"></i></a>					
									</td>
									<td>
										<img src="admin/<?php echo $cartr['p_image']; ?>" alt="" height="90" width="90">					
									</td>
									<td>
										<?php echo $cartr['p_name']; ?>				
									</td>
									<td>
										<?php echo $row['timestamp']; ?>				
									</td>
									<td>
										<a class="btn btn-success" type="button" href="products.php?p_id=<?php echo $row['p_id']; ?>"><i class="fas fa-cart-plus"></i> Add To Cart</a>					
									</td>
								</tr>
							</tbody>
						</table><hr>
						<?php }} while($row); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>		
		<?php include_once "include/footer.php"; ?>	