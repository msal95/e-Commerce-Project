
<?php include_once "include/db.php"; ?>
<?php 
 session_start(); 

  // if (!isset($_SESSION['u_id'])) {
  	// header('location: account.php');
  // }

$cart = $_SESSION['cart'];
?>
<?php include_once "include/header.php"; ?>

<section id="content">
		<div class="content-blog">
			<div class="container">
				<div class="row text-center">
					<div class="page_header mx-auto font-weight-bold">
						<h1 class="display-1">Shop Cart</h1>
						<p>Get the best kit for smooth shave</p>
					</div>
					<div class="col-md-12">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>&nbsp;</th>
									<th>Product Image</th>
									<th>Product</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<?php
									//print_r($cart);
								$total = 0;
									foreach ($cart as $key => $value) {
										//echo $key . " : " . $value['quantity'] ."<br>";
										$cartsql = "SELECT * FROM product WHERE p_id=$key";
										$cartres = mysqli_query($conn, $cartsql);
										$cartr = mysqli_fetch_assoc($cartres);

									
								 ?>
								<tr>
									<td>
										<a class="remove" href="delcart.php?p_id=<?php echo $key; ?>"><i class="fas fa-times"></i></a>
									</td>
									<td>
										<a href="#"><img src="admin/<?php echo $cartr['p_image']; ?>" alt="" height="90" width="90"></a>					
									</td>
									<td>
										<a href="single.php?id=<?php echo $cartr['p_id']; ?>"><?php echo substr($cartr['p_name'], 0 , 30); ?></a>					
									</td>
									<td>
										<span class="amount">$<?php echo $cartr['p_price']; ?>.00/-</span>					
									</td>
									<td>
										<div class="quantity"><?php echo $value['quantity']; ?></div>
									</td>
									<td>
										<span class="amount">$<?php echo ($cartr['p_price']*$value['quantity']); ?>.00/-</span>					
									</td>
								</tr>
								<?php 
									$total = $total + ($cartr['p_price']*$value['quantity']);
								} ?>
								<tr>
									<td colspan="6" class="actions">
									<div class="row">
										<div class="col-md-6">
										<!--	<div class="coupon">
												<label>Coupon:</label><br>
												<input placeholder="Coupon code" type="text"> <button type="submit">Apply</button>
											</div> -->
										</div>
										<div class="col-md-6">
											<div class="cart-btn">
												<!-- <button class="button btn-md" type="submit">Update Cart</button> -->
												<a href="checkout.php" class="btn btn-primary float-right" >Checkout</a>
											</div>
										</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="cart_totals">
					<div class="col-md-6 push-md-6 no-padding">
						<h3 class="heading">Cart Totals</h3>
						<table class="table table-bordered col-md-6">
							<tbody>
								<tr>
									<th>Cart Subtotal</th>
									<td><span class="amount">$ <?php echo $total; ?>.00/-</span></td>
								</tr>
								<tr>
									<th>Shipping and Handling</th>
									<td>
										Free Shipping				
									</td>
								</tr>
								<tr>
									<th>Order Total</th>
									<td><strong><span class="amount">$ <?php echo $total; ?>.00/-</span></strong> </td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>		
		<?php include_once "include/footer.php"; ?>		