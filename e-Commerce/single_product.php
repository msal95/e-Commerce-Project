
<?php include_once "include/db.php"; ?>
<?php 
ob_start();
session_start();
 //session_start(); 

  // if (!isset($_SESSION['u_id'])) {
  	// header('location: account.php');
  // }
?>
<?php include_once "include/header.php"; ?>


<div class="container">
	<h1 class="display-2 text-center">Shop</h1>
	<p class="text-center text-warning" style="font-size:16px;">Chose Best , SHop Best</p>
	<?php
		if(isset($_GET['p_id']) & !empty($_GET['p_id'])){
			$p_id = $_GET['p_id'];
			$prodsql = "SELECT * FROM product WHERE p_id=$p_id";
			$prodres = mysqli_query($conn, $prodsql);
			$prodr = mysqli_fetch_assoc($prodres);
		}else{
			header('location: index.php');
		}
	?>
	<div class="row">
		<div class="col-md-6">
			<img src="admin/<?php echo $prodr['p_image']; ?>" class="img-fluid" style="height:500px;">
		</div>
		<div class="col-md-6">
			<h3><?php echo $prodr['p_name']; ?></h3>
			<h2>Price:<span style="color:orange;"><?php echo $prodr['p_price'];?>$</h2>
			<p><?php echo $prodr['p_desc']; ?></p>
			</br>
			<form method="GET" action="products.php">
				<div class="product-quantity">
					<label style="font-size:24px;" for="quantity">Quantity: </label>
					<input type="hidden" name="p_id" value="<?php echo $prodr['p_id']; ?>">
					<input type="number" name="quant" placeholder="1" min="1" max="10">
				</div></br>
				<button type="submit" class="btn btn-outline-primary" style="font-size:22px; font-weight:300px;" value="add to cart">Add To Cart</button>
				<a type="submit" class="btn btn-outline-primary float-right" href="add_wishlist.php?p_id=<?php echo $prodr['p_id']; ?>" style="font-size:22px; font-weight:300px;">Add To Wishlist</a>
			</form>
		</div>
	</div>
</div></br></br>
<div class="container">
	<div class=" align-center">
		<ul class="nav nav-tabs border border-dark p-1 ml-4 mr-4 mb-0 text-center animate"  style="font-size:26px; font-weight:600px;">
			<li class="nav-item col-sm-6" style="border-right:2px solid #666;">
				<a href="#mini-one" style="text-decoration:none;" data-toggle="tab">Overview</a>
			</li>
			<li class="nav-item col-sm-6">
				<a href="#mini-two" style="text-decoration:none;" data-toggle="tab">Reviews</a>
			</li>
		</ul>
	</div>
	<div class="tab-content border border-top-0 p-4 border-dark ml-4 mr-4 mt-0">
		<div class="tab-pane active" id="mini-one">
			<p>The EOS 1300D packs in all the fun of photography, which is why we recommend it to users 
					looking for their very first EOS DSLR camera.
					It uses an 18-megapixel APS-C size sensor and the DIGIC 4+ image processor</p>
		</div>
		<div class="tab-pane fade" id="mini-two">
			<form>
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label for="inputEmail4">Name</label>
				  <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
				</div>
				<div class="form-group col-md-6">
				  <label for="inputPassword4">Email</label>
				  <input type="email" class="form-control" id="inputPassword4" placeholder="Password">
				</div>
			  </div>
			  <div class="form-group">
				<label for="inputAddress">Comment</label>
				<textarea type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"></textarea>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit Review</button>
			</form>
		</div>
	</div>
</div></br>
<div class="container">
	<h2 style="border-bottom:1px solid #666;">Related Products</h2>
	<div class="row">
	<?php
		$query_rand=mysqli_query($conn, "SELECT * FROM product ORDER BY rand() LIMIT 4");
		while($relr = mysqli_fetch_assoc($query_rand)){
	?>
		
				<div class="col-sm-3">
					<div class="card">
					  <div class="hovereffect">
								<img src="admin/<?php echo $relr['p_image'];?>" style="height:17em" class="img-fluid card-img-top">
							<div class="overlay">
								<p>
									<a class="btn btn-default rounded-circle" data-toggle="tooltip" title="Quick View" style="border:2px dotted #fff; font-size:22px;" href="single_product.php?p_id=<?php echo $relr['p_id']; ?>"><b><i class="far fa-eye fa-2x"></i></b></a>
								</p>
							</div>
						</div>
						<div class="card-body">
						<h4><b><?php echo $relr['p_name']; ?></b></h4>
						<h5>Price: <span class="text-danger"><?php echo $relr['p_price']; ?>$</span></h5>
						<a class="btn btn-danger" type="button" href="products.php?p_id=<?php echo $relr['p_id']; ?>"><i class="fas fa-cart-plus"></i> Add To Cart</a>
						</div>
					</div>
				</div>
		<?php } ?>
	</div>
</div>


<?php include_once "include/footer.php"; ?>