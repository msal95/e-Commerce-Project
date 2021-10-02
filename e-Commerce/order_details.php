

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


<div class="container">
	<h1 class="text-center">Order Details</h1><hr>
	<?php
		$query=mysqli_query($conn, "SELECT * FROM `order` WHERE u_id='$u_id' ORDER BY order_id DESC");
		$ro=mysqli_fetch_array($query);
	?>
	<h3>Order ID: <span class="text-danger"><?php echo $ro['order_id']; ?></span></h3>
	<?php
		$order_detail=mysqli_query($conn, "SELECT * FROM `user_details` WHERE u_id='$u_id' ORDER BY u_id DESC");
		$order_row=mysqli_fetch_array($order_detail);
	?>
	<form action="" >
		<div class="form-row">
			<div class="form-group col-md-6">
			  <label for="inputCity">First Name</label>
			  <input type="text" class="form-control" name="f_name" value="<?php echo $order_row['f_name'];?>"  required>
			</div>
			<div class="form-group col-md-6">
			  <label for="inputState">Last Name</label>
			  <input type="text" class="form-control"  value="<?php echo $order_row['l_name'];?>" name="l_name" required>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
			  <label for="inputCity">Email</label>
			  <input type="text" class="form-control" name="email"  value="<?php echo $ro['email'];?>" required>
			</div>
			<div class="form-group col-md-6">
			  <label for="inputCity">Mobile Number</label>
			  <input type="text" class="form-control" name="mobile" value="<?php echo $order_row['mobile'];?>"  required>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
			  <label for="inputCity">Country</label>
			  <input type="text" class="form-control" name="country"  value="<?php echo $order_row['country'];?>" required>
			</div>
			<div class="form-group col-md-4">
			  <label for="inputState">City</label>
			  <input type="text" class="form-control"  value="<?php echo $order_row['city'];?>" name="city" required>
			</div>
			<div class="form-group col-md-4">
			  <label for="inputState">Zip Code</label>
			  <input type="text" class="form-control"  value="<?php echo $order_row['zip'];?>" name="Zip" required>
			</div>
		</div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" name="address"  value="<?php echo $order_row['address'];?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="address">Payment Method</label>
			<input type="text" name="payment" value="<?php echo $order_row['payment'];?>" class="form-control">
		</div>
		<div class="form-row justify-content-center">
			<div class="form-group col-md-6">
			  <label for="inputCity">Total Price</label>
			  <input type="text" class="form-control" name="total"  value="<?php echo $ro['total'];?>"  required>
			</div>
		</div>
		<div class="form-row justify-content-around">
			<div class="form-group col-md-6">
			  <label for="inputCity"></label>
			  <a type="submit" class="btn btn-danger" style="font-size:22px; padding:5px 20px;" href="order_details.php?u_id=<?php echo $u_id; ?>" name="account">My Account</a>
			</div>
			<div class="form-group col-md-6">
			  <label for="inputCity"></label>
			  <button type="submit" class="btn btn-danger"  onclick="myFunction()" style="font-size:22px; padding:5px 20px;" name="print">Print</button>
			</div>
		</div>
	</form>
</div>


<?php include_once "include/footer.php"; ?>