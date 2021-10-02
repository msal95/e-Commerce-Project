
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



<?php

	if(isset($_POST['agree'])){
		$country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
		$f_name = filter_var($_POST['f_name'], FILTER_SANITIZE_STRING);
		$l_name = filter_var($_POST['l_name'], FILTER_SANITIZE_STRING);
		$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
		$address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
		$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
		$phone = filter_var($_POST['mobile'], FILTER_SANITIZE_NUMBER_INT);
		$payment = filter_var($_POST['payment'], FILTER_SANITIZE_STRING);
		$zip = filter_var($_POST['zip'], FILTER_SANITIZE_NUMBER_INT);
		
		$query=mysqli_query($conn, "INSERT INTO `user_details` SET country='$country', f_name='$f_name', l_name='$l_name', address='$address', city='$city',
		mobile='$phone', payment='$payment', zip='$zip', u_id='$u_id', email='$email'")or die(mysqli_error());
		
		if($query == 0){
			header("location:checkout.php?msg=fail");
		}elseif($query == 1){
			header("location:checkout.php?msg=ok");
		}
	}

?>

<?php include_once "include/header.php"; ?>
	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="page_header text-center">
			<h2>Shop - Checkout</h2>
			<p>Get the best kit for smooth shave</p>
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-7">
				<?php 
					$msg = $_REQUEST['msg'];

					if($msg == 'fail'){

							header("refresh:1 ; url=checkout.php");
						?>
					<center>
					<h2 class="alert alert-danger">PLZ try Again!</h2>
					</center>
					<?php } if($msg == 'ok'){
						
						 header("refresh:1 ; url=order.php");
					?>
					<center>
					<h3 class="alert alert-success">Thank You!</h3>
					</center>
					<?php } ?>
					<form method="POST" action="">
						<div class="form-group">
							<label for="country">Slect Country</label>
							<select name="country" class="form-control" required>
								<option value="" selected disabled>Select Country</option>
								<option value="Pakistan">Pakistan</option>
								<option value="Iran">Iran</option>
								<option value="Aland Islands">Aland Islands</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Albania">Albania</option>
								<option value="Algeria">Algeria</option>
								<option value="Andorra">Andorra</option>
								<option value="Angola">Angola</option>
								<option value="Anguilla">Anguilla</option>
								<option value="Antarctica">Antarctica</option>
								<option value="Antigua and Barbuda">Antigua and Barbuda</option>
								<option value="Argentina">Argentina</option>
								<option value="Armenia">Armenia</option>
								<option value="Aruba">Aruba</option>
								<option value="AU">Australia</option>
								<option value="AT">Austria</option>
								<option value="AZ">Azerbaijan</option>
								<option value="BS">Bahamas</option>
								<option value="BH">Bahrain</option>
								<option value="BD">Bangladesh</option>
								<option value="BB">Barbados</option>
							</select>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
							  <label for="inputCity">First Name</label>
							  <input type="text" class="form-control" name="f_name"  required>
							</div>
							<div class="form-group col-md-6">
							  <label for="inputState">Last Name</label>
							  <input type="text" class="form-control"  name="l_name" required>
							</div>
						</div>
						<?php
							$query_email=mysqli_query($conn, "SELECT * FROM `user` WHERE u_id='$u_id'");
							$r=mysqli_fetch_array($query_email);
							$u_email=$r['u_email'];
						?>
						<div class="form-group">
							<input type="email" class="form-control" value="<?php echo $u_email; ?>" name="email" hidden>
						</div>
						<div class="form-group">
							<label for="inputAddress">Address</label>
							<input type="text" class="form-control" name="address" placeholder="1234 Main St" required>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
							  <label for="inputCity">City</label>
							  <input type="text" class="form-control"  name="city" required>
							</div>
							<div class="form-group col-md-6">
							  <label for="inputZip">Zip</label>
							  <input type="text" class="form-control" name="zip"  required>
							</div>
						</div>
						<div class="form-group">
						  <label for="mobile">Mobile No.</label>
						  <input type="text" name="mobile" placeholder="+923088159827" class="form-control"  required>
						</div>
						</br>
						<h2 class="heading">Your order</h2>
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<th>Cart Subtotal</th>
									<td><span class="amount">£190.00</span></td>
								</tr>
								<tr>
									<th>Shipping and Handling</th>
									<td>
										Free Shipping				
									</td>
								</tr>
								<tr>
									<th>Order Total</th>
									<td><strong><span class="amount">£190.00</span></strong> </td>
								</tr>
							</tbody>
						</table>
						<div class="clearfix"></div>
						<h2 class="heading">Payment Method</h2>
						<div class="clearfix"></div>
						<div class="payment-method">
							<div class="row">
								<div class="col-md-4">
									<input name="payment" id="radio1" class="css-checkbox" type="radio" value="cod"></br><b><span>Cash On Delivery</span></b>
									<div class="space20"></div>
									<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
								</div>
								<div class="col-md-4">
									<input name="payment" id="radio2" class="css-checkbox" type="radio" value="cc"></br><b><span>Credit Card</span></b>
									<div class="space20"></div>
									<p>Please send your cheque to BLVCK Fashion House, Oatland Rood, UK, LS71JR</p>
								</div>
								<div class="col-md-4">
									<input name="payment" id="radio3" class="css-checkbox" value="easyPaisa" type="radio"></br><b><span>EasyPaisa</span></b>
									<div class="space20"></div>
									<p>You can Send you'r Money Via EasyPaisa. Order Will be proceed after recieving Payment</p>
									<p>EasyPaisa Account: 03410662384</p>
								</div>
							</div>
							<input name="agree" id="checkboxG2" class="css-checkbox" type="checkbox" value="true"><span>I've read and accept the <a href="#">terms &amp; conditions</a></span>
						</div>
						
						<div class="form-group">
						  <label for="mobile"></label>
						  <button type="submit" name="agree" class="form-control btn btn-danger" >Submit</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</section>
	<?php include_once "include/footer.php"; ?>