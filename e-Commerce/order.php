<?php include_once "include/db.php"; ?>
<?php 
ob_start();
 session_start(); 

  if (!isset($_SESSION['u_id'])) {
  	header('location: account.php');
  }
  
$u_id = $_SESSION['u_id'];
$cart = $_SESSION['cart'];
?>
<?php include_once "include/header.php"; ?>
<?php
	$query_pay=mysqli_query($conn, "SELECT * FROM `user_details` WHERE u_id='$u_id' ORDER BY user_id DESC");
	$ro=mysqli_fetch_array($query_pay);
	$payment=$ro['payment'];
	$user_id=$ro['user_id'];
?>

<div class="container">
	<table class="table">
		<thead>
			<tr>
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
			</tbody>
	</table>
<?php
$selected_mode=$payment;

if($selected_mode='cod'){
	if(isset($_POST['form_cod'])){
		$email=$_POST['email'];
		$payment_method=$_POST['payment_method'];
	$query=mysqli_query($conn, "INSERT INTO `order` SET u_id='$u_id', user_id='$user_id', payment_method='$payment_method', 
	email='$email', total='$total', timestamp=NOW()") or die(mysqli_error());
	
	}
	
?>
			<h1>Your Details</h1><hr>
			<div class="row">
			<div class="col-sm-7">
			
			<h4>You have choosen Cash on Delivery method. Order will be processed in 2-3 days. Please submit the  button below to complete your order.</h4>
			
			<hr>
			<form action="" method="post">
						
						<div class="form-group">
						<?php
							$query_email=mysqli_query("SELECT * FROM `user` WHERE u_id='$u_id'");
							$r=mysqli_fetch_array($query_email);
							$u_email=$r['u_email'];
						?>
							<label for="email">Email address:</label>
							<input type="email" class="form-control" value="<?php echo $u_email; ?>" name="email">
						</div>
						<div class="form-group">
						
							<label for="payment">Payment Method</label>
							<input type="text" class="form-control" value="<?php echo $payment; ?>" name="payment_method">
						</div>
						<div class="form-group">
							<label for="inputAddress">Total Price</label>
							<input type="text" class="form-control" name="total"  value="<?php echo $total; ?>" disabled>
						</div>
			
						<button type="submit" name="form_cod" value="Complete Order" class="btn btn-success float-right" />Complete Order</button>
			
			
			</form>
			</div>
			</div>
<?php }elseif($selected_mode='cc'){
	if(isset($_POST['form_cc'])){
		$email=$_POST['email'];
		$c_name=$_POST['c_name'];
		$card_number=$_POST['card_number'];
		$csc=$_POST['csc'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		$payment_method=$_POST['payment_method'];
	$query=mysqli_query($conn, "INSERT INTO `order` SET u_id='$u_id', payment_method='$payment_method', email='$email',
	c_name='$c_name', card_number='$card_number', csc='$csc', month='$month', year='$year', total='$total', timestamp=NOW()") or die(mysqli_error());
	
	}
	
?>
			<h1>Your Details</h1><hr>
			<div class="row">
			<div class="col-sm-7">
			
			<h4>You have choosen Caredit Card Payment method. Order will be processed in 2-3 days. Please submit the  button below to complete your order.</h4>
			
			<hr>
			<form action="" method="post">
						
						<div class="form-group">
						
							<label for="email">Email address:</label>
							<input type="email" class="form-control" value="<?php echo $u_email; ?>" name="email">
						</div>
						<div class="form-group">
						
							<label for="payment">Payment Method</label>
							<input type="text" class="form-control" value="<?php echo $payment; ?>" name="payment_method">
						</div>
						<div class="form-group">
							<select class="form-control" name="c_name">
								<option value="visa" selected>Visa</option>
								<option value="mCard">Master Card</option>
								<option value="dCard">Debit Card</option>
								<option value="payonner">Payoneer</option>
							</select>
						</div>
						<div class="form-group">
							<label for="card_number">Card Number</label>
							<input type="text" class="form-control" name="card_number" placeholder="" required>
						</div>
						<div class="form-group">
							<label for="card_number">Card Security Code</label>
							<input type="text" class="form-control" name="csc" placeholder="***" required>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-6">
								<label for="month">Ex. Month</label>
								<input type="text" name="month" class="form-control" placeholder="03" required>
							</div>
							<div class="form-group col-sm-6">
								<label for="month">Ex. Year</label>
								<input type="text" name="year" class="form-control" placeholder="2025" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputAddress">Total Price</label>
							<input type="text" class="form-control" name="total"  value="<?php echo $total; ?>" disabled>
						</div>
			
						<button type="submit" name="form_cc" value="Complete Order" class="btn btn-success float-right" />Complete Order</button>
			
			
			</form>
			</div>
			</div>

<?php } elseif($selected_mode='easyPaisa'){
	if(isset($_POST['form_easy'])){
		$email=$_POST['email'];
		$payment_method=$_POST['payment_method'];
	$query=mysqli_query($conn, "INSERT INTO `order` SET u_id='$u_id', payment_method='$payment_method', email='$email', total='$total', timestamp=NOW()") or die(mysqli_error());
	
	}
	
?>
			<h1>Your Details</h1><hr>
			<div class="row">
			<div class="col-sm-7">
			
					<h3>For EasyPaisa Account Number: 03410662384</h3>
			<h4>You have choosen EasyPaisa Payment method. Order will be processed in 2-3 days. Please submit the  button below to complete your order.</h4>
			
			<hr>
			<form action="" method="post">
						
						<div class="form-group">
						
							<label for="email">Email address:</label>
							<input type="email" class="form-control" value="<?php echo $u_email; ?>" name="email">
						</div>
						<div class="form-group">
					
							<label for="payment">Payment Method</label>
							<input type="text" class="form-control" value="<?php echo $payment; ?>" name="payment_method">
						</div>
						<div class="form-group">
							<label for="inputAddress">Total Price</label>
							<input type="text" class="form-control" name="total"  value="<?php echo $total; ?>" disabled>
						</div>
			
						<button type="submit" name="form_easy" value="Complete Order" class="btn btn-success float-right" />Complete Order</button>
			
			
			</form>
			</div>
			</div>

<?php } else{
	echo "You Don't Have selected any payment method";
} ?>
</div>

<?php include_once "include/footer.php"; ?>