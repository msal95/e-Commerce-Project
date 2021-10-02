
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
						<h1 class="display-1">Shopping History</h1>
						<p>Get the best kit for smooth shave</p>
					</div>
					<div class="col-md-12">
					<?php
						$query=mysqli_query($conn, "SELECT * FROM `order` WHERE u_id='$u_id' ORDER BY order_id DESC");
						do{
							$row=mysqli_fetch_array($query);
						if($row){
						$status=$row['status'];	
						
					?>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Order ID</th>
									<th>User ID</th>
									<th>Email</th>
									<th>Total Price</th>
									<th>Payment Method</th>
									<th>Status</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
							
								<tr>
									<td>
										 <?php echo $row['order_id']; ?>					
									</td>
									<td>
										<?php echo $_SESSION['u_id'] ; ?></a>					
									</td>
									<td>
										<span class="amount"><?php echo $row['email']; ?></span>					
									</td>
									<td>
										<div class="quantity"><?php echo $row['total']; ?></div>
									</td>
									<td>
										<div class="quantity"><?php echo $row['payment_method']; ?></div>
									</td>
									<td>
										<?php
										if($status == 0){echo "Pennding";}elseif($status == 1){echo "Completed";}elseif($status == 2){echo "Cancelled";}
									
									?>					
									</td>
									<td>
										<span class="amount"><?php echo $row['timestamp']; ?></span>					
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