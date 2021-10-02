
<?php include_once "include/db.php"; ?>
<?php 
 // session_start(); 

  // if (!isset($_SESSION['u_id'])) {
  	// header('location: account.php');
  // }
?>
<?php include_once "include/header.php"; ?>
	
	<!--Carrousel--->
	<div id="demo" class="carousel slide" data-ride="carousel">
	  <ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
	  </ul>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="images/b1.jpg" alt="Los Angeles" width="1100" height="500">
		  <div class="carousel-caption d-none d-md-block text-danger">
			<h1>Best Winter Collection</h1>
			<p>We had such a great time in LA!</p>
			<a type="button" href="shop.php" class="btn btn-info btn-lg">Shop Now</a>
		  </div>   
		</div>
		<div class="carousel-item">
		  <img src="images/b4.jpg" alt="Chicago" width="1100" height="500">
		  <div class="carousel-caption d-none d-md-block text-danger">
			<h1>Best Summer Collection</h1>
			<p>Thank you, Chicago!</p>
			<a type="button" href="shop.php" class="btn btn-info btn-lg">Shop Now</a>
		  </div>   
		</div>
		<div class="carousel-item">
		  <img src="images/b3.jpg" alt="New York" width="1100" height="500">
		  <div class="carousel-caption d-none d-md-block text-danger">
			<h1>Best Summer Collection</h1>
			<p>We love the Big Apple!</p>
			<a type="button" href="shop.php" class="btn btn-info btn-lg">Shop Now</a>
		  </div>   
		</div>
	  </div>
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	  </a>
	</div>
	<!-- details-->
	<div class="container-fluid pt-3 pb-3 bg-orange offer d-none d-md-block">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 m-right">
					<h4>Free Shipping</h4>
					<p>On Order Over 90$</p>
				</div>
				<div class="col-sm-4 m-right">
					<h4>Call Us Anytime</h4>
					<p>+92-336-7528443</p>
				</div>
				<div class="col-sm-4">
					<h4>Location</h4>
					<p>Lahore, Punjab</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-light-gray ">
	<div class="container pt-5">
			<div class="row">
				<h3>ALL LADISE DRESS</h3>
			</div>
			<div class="underline"></div>
		</div>
		<div class="container mt-5">
		
			<div class="row">
				<?php 
					$sql = "SELECT * FROM product";
						$sql .= " WHERE cat_id=2 LIMIT 4";
					
					
					

					$res = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($res)){
				?>
				<div class="col-sm-3">
					<div class="card">
					  <div class="hovereffect">
								<img src="admin/<?php echo $row['p_image'];?>" style="height:17em" class="img-fluid card-img-top">
							<div class="overlay">
								<p>
									<a class="btn btn-default rounded-circle" data-toggle="tooltip" title="Quick View" style="border:2px dotted #fff; font-size:22px;" href="single_product.php?p_id=<?php echo $row['p_id']; ?>"><b><i class="far fa-eye fa-2x"></i></b></a>
								</p>
							</div>
						</div>
						<div class="card-body">
				<h4><b><?php echo $row['p_name']; ?></b></h4>
						<h5>Price: <span class="text-danger"><?php echo $row['p_price']; ?>$</span></h5>
				<a class="btn btn-danger" type="button" href="products.php?p_id=<?php echo $row['p_id']; ?>"><i class="fas fa-cart-plus"></i> Add To Cart</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="container pt-5">
			<div class="row">
				<h3>High Heels Shoes</h3>
			</div>
			<div class="underline"></div>
		</div>
		<div class="container mt-5">
			<div class="row">
				<?php 
					$sql_que = "SELECT * FROM `product`";
						$sql_que .= " WHERE cat_id=12 ORDER BY p_id DESC LIMIT 4";
					
					
					

					$res_que = mysqli_query($conn, $sql_que);
					while($row_que = mysqli_fetch_assoc($res_que)){
				?>
				<div class="col-sm-3">
					<div class="card">
					  <div class="hovereffect">
								<img src="admin/<?php echo $row_que['p_image'];?>" style="height:17em" class="img-fluid card-img-top">
							<div class="overlay">
								<p>
									<a class="btn btn-default rounded-circle" data-toggle="tooltip" title="Quick View" style="border:2px dotted #fff; font-size:22px;" href="single_product.php?p_id=<?php echo $row_que['p_id']; ?>"><b><i class="far fa-eye fa-2x"></i></b></a>
								</p>
							</div>
						</div>
						<div class="card-body">
				<h4><b><?php echo $row_que['p_name']; ?></b></h4>
						<h5>Price: <span class="text-danger"><?php echo $row_que['p_price']; ?>$</span></h5>
				<a class="btn btn-danger" type="button" href="products.php?p_id=<?php echo $row_que['p_id']; ?>"><i class="fas fa-cart-plus"></i> Add To Cart</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	
	<div class="container-fluid pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="row">
						<h4>Most Wanted</h4>
					</div>
					<div class="row">
						<div class="underline-green"></div>
					</div>
					
					<?php
						$query_random=mysqli_query($conn, "SELECT * FROM product ORDER BY rand() LIMIT 4");
						while($relrr = mysqli_fetch_assoc($query_random)){
					?>
					
					<div class="media mt-5">
						<img  src="admin/<?php echo $relrr['p_image'];?>" class="img-fluid mr-3" width="110px" alt="media">
						<div class="media-body mt-2">
							<a  href="single_product.php?p_id=<?php echo $relrr['p_id']; ?>"><h4><?php echo $relrr['p_name']; ?></h4></a>
						<h5>Price: <span class="text-danger"><?php echo $relrr['p_price']; ?>$</span></h5>
						<a class="btn btn-danger" type="button" href="products.php?p_id=<?php echo $relrr['p_id']; ?>"><i class="fas fa-cart-plus"></i> Add To Cart</a>
						</div>
					</div>
						<?php } ?>
					<!---<div class="media mt-5">
						<img src="images/T1362506728255914_2.jpg" class="img-fluid mr-3" alt="media">
						<div class="media-body mt-2">
							<h5>Dress</h5>
							<h6>$450</h6>
							<button class="btn btn-danger" type="button"><i class="fas fa-cart-plus"></i> Add To Cart</button>
						</div>
					</div>
					<div class="media mt-5">
						<img src="images/Teen-girls-clothing-trends-2016-7.jpg" class="img-fluid mr-3" alt="media">
						<div class="media-body mt-2">
							<h5>Dress</h5>
							<h6>$450</h6>
							<button class="btn btn-danger" type="button"><i class="fas fa-cart-plus"></i> Add To Cart</button>
						</div>
					</div>
					<div class="media mt-5">
						<img src="images/send-jeans-pakistan.jpg" class="img-fluid mr-3" alt="media">
						<div class="media-body mt-2">
							<h5>Dress</h5>
							<h6>$450</h6>
							<button class="btn btn-danger" type="button"><i class="fas fa-cart-plus"></i> Add To Cart</button>
						</div>
					</div>-->
				</div>
				<div class="col-sm-4">
					<div class="row">
						<h4>Latest Collection</h4>
					</div>
					<div class="row">
						<div class="underline-blue"></div>
					</div>
					<?php
						$query_ra=mysqli_query($conn, "SELECT * FROM product ORDER BY p_id DESC LIMIT 4");
						while($relrra = mysqli_fetch_assoc($query_ra)){
					?>
					
					<div class="media mt-5">
						<img  src="admin/<?php echo $relrra['p_image'];?>" class="img-fluid mr-3" width="110px" alt="media">
						<div class="media-body mt-2">
							<a  href="single_product.php?p_id=<?php echo $relrra['p_id']; ?>"><h4><?php echo $relrra['p_name']; ?></h4></a>
						<h5>Price: <span class="text-danger"><?php echo $relrra['p_price']; ?>$</span></h5>
						<a class="btn btn-danger" type="button" href="products.php?p_id=<?php echo $relrra['p_id']; ?>"><i class="fas fa-cart-plus"></i> Add To Cart</a>
						</div>
					</div>
						<?php } ?>
					<!--<div class="media mt-5">
						<img src="images/201710130947238653374.jpg" class="img-fluid mr-3" alt="media">
						<div class="media-body mt-2">
							<h5>Dress</h5>
							<h6>$450</h6>
							<button class="btn btn-danger" type="button"><i class="fas fa-cart-plus"></i> Add To Cart</button>
						</div>
					</div>
					<div class="media mt-5">
						<img src="images/Yellow-Spring-Summer-Campaign-Dresses-2016-For-Boys-Girls-6.jpg" class="img-fluid mr-3" alt="media">
						<div class="media-body mt-2">
							<h5>Dress</h5>
							<h6>$450</h6>
							<button class="btn btn-danger" type="button"><i class="fas fa-cart-plus"></i> Add To Cart</button>
						</div>
					</div>
					<div class="media mt-5">
						<img src="images/Untitled5.png" class="img-fluid mr-3" alt="media">
						<div class="media-body mt-2">
							<h5>Dress</h5>
							<h6>$450</h6>
							<button class="btn btn-danger" type="button"><i class="fas fa-cart-plus"></i> Add To Cart</button>
						</div>
					</div>-->
				</div>
				<div class="col-sm-4">
					<div class="row">
						<h4>On Sale</h4>
					</div>
					<div class="row">
						<div class="underline-black"></div>
					</div>
					<?php
						$query_randoma=mysqli_query($conn, "SELECT * FROM product ORDER BY rand() LIMIT 4");
						while($relrrr = mysqli_fetch_assoc($query_randoma)){
					?>
					
					<div class="media mt-5">
						<img  src="admin/<?php echo $relrrr['p_image'];?>" class="img-fluid mr-3" width="110px" alt="media">
						<div class="media-body mt-2">
							<a  href="single_product.php?p_id=<?php echo $relrrr['p_id']; ?>"><h4><?php echo $relrrr['p_name']; ?></h4></a>
						<h5>Price: <span class="text-danger"><?php echo $relrrr['p_price']; ?>$</span></h5>
						<a class="btn btn-danger" type="button" href="products.php?p_id=<?php echo $relrrr['p_id']; ?>"><i class="fas fa-cart-plus"></i> Add To Cart</a>
						</div>
					</div>
						<?php } ?>
					<!--<div class="media mt-5">
						<img src="images/5.jpg" class="img-fluid mr-3" alt="media">
						<div class="media-body mt-2">
							<h5>Dress</h5>
							<h6>$450</h6>
							<button class="btn btn-danger" type="button"><i class="fas fa-cart-plus"></i> Add To Cart</button>
						</div>
					</div>
					<div class="media mt-5">
						<img src="images/pakistani-modeljeans.jpg" class="img-fluid mr-3" alt="media">
						<div class="media-body mt-2">
							<h5>Dress</h5>
							<h6>$450</h6>
							<button class="btn btn-danger" type="button"><i class="fas fa-cart-plus"></i> Add To Cart</button>
						</div>
					</div>
					<div class="media mt-5">
						<img src="images/Teen-girls-clothing-trends-2016-7.jpg" class="img-fluid mr-3" alt="media">
						<div class="media-body mt-2">
							<h5>Dress</h5>
							<h6>$450</h6>
							<button class="btn btn-danger" type="button"><i class="fas fa-cart-plus"></i> Add To Cart</button>
						</div>
					</div>
					<div class="media mt-5">
						<img src="images/user203428_pic51575_1346242413.jpg" class="img-fluid mr-3" alt="media">
						<div class="media-body mt-2">
							<h5>Dress</h5>
							<h6>$450</h6>
							<button class="btn btn-danger" type="button"><i class="fas fa-cart-plus"></i> Add To Cart</button>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid bg-light-gray">
		<div class="container pt-5">
			<div class="row">
				<h3>Featured Products</h3>
			</div>
			<div class="underline"></div>
		</div>
		<div class="container mt-5">
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
	</div>
	<div class="container pt-5">
		<div class="row">
			<h3>From The Blog</h3>
		</div>
		<div class="underline"></div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-sm-6">
				<div class="media mt-5">
					<img src="images/Teen-girls-clothing-trends-2016-7.jpg" class="img-fluid mr-3" alt="media">
					<div class="media-body mt-2">
						<h5>Latest Dress Collection</h5>
						<p>Lorem Site Dollar Ipsum..</p>
						<p><i class="fas fa-user"></i> Admin</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="media mt-5">
					<img src="images/user203428_pic51575_1346242413.jpg" class="img-fluid mr-3" alt="media">
					<div class="media-body mt-2">
						<h5>Latest Dress Collection</h5>
						<p>Lorem Site Dollar Ipsum..</p>
						<p><i class="fas fa-user"></i> Admin</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="media mt-5">
					<img src="images/Teen-girls-clothing-trends-2016-7.jpg" class="img-fluid mr-3" alt="media">
					<div class="media-body mt-2">
						<h5>Latest Dress Collection</h5>
						<p>Lorem Site Dollar Ipsum..</p>
						<p><i class="fas fa-user"></i> Admin</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="media mt-5">
					<img src="images/user203428_pic51575_1346242413.jpg" class="img-fluid mr-3" alt="media">
					<div class="media-body mt-2">
						<h5>Latest Dress Collection</h5>
						<p>Lorem Site Dollar Ipsum..</p>
						<p><i class="fas fa-user"></i> Admin</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-light-gray ">
		<div class="container pt-5">
				<div class="row">
	<?php
		$query_ran=mysqli_query($conn, "SELECT * FROM product ORDER BY rand() LIMIT 4");
		while($rel = mysqli_fetch_assoc($query_ran)){
	?>
		
				<div class="col-sm-3">
					<div class="card">
					  <div class="hovereffect">
								<img src="admin/<?php echo $rel['p_image'];?>" style="height:17em" class="img-fluid card-img-top">
							<div class="overlay">
								<p>
									<a class="btn btn-default rounded-circle" data-toggle="tooltip" title="Quick View" style="border:2px dotted #fff; font-size:22px;" href="single_product.php?p_id=<?php echo $rel['p_id']; ?>"><b><i class="far fa-eye fa-2x"></i></b></a>
								</p>
							</div>
						</div>
						<div class="card-body">
						<h4><b><?php echo $rel['p_name']; ?></b></h4>
						<h5>Price: <span class="text-danger"><?php echo $rel['p_price']; ?>$</span></h5>
						<a class="btn btn-danger" type="button" href="products.php?p_id=<?php echo $rel['p_id']; ?>"><i class="fas fa-cart-plus"></i> Add To Cart</a>
						</div>
					</div>
				</div>
		<?php } ?>
	</div>
		</div>
	</div>
	
	<?php include_once "include/footer.php"; ?>