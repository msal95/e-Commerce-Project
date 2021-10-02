
<?php include_once "include/db.php"; ?>
<?php include_once "include/header.php"; ?>

 <div class="container-fluid">
  <div class="row">
    <nav class="col-sm-2 pl-4 fixed hover">
	<h3 class="border border-top-0 border-left-0">Categories</h3>
      <ul class="nav flex-column ">
       <?php
			// $query=mysqli_query("SELECT * FROM `category` ");
			// do{
			// $data=mysqli_fetch_array($query);
			// if($data){
			// $cat_id=$data['cat_id'];
			// $cat_name=$data['cat_name'];
		?>
		<li class="nav-item">
			<a class="nav-link active" href="pages/womens _brands.php">Womens Brands </a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="pages/mens_brands.php">Mens Brands</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="pages/kids_brands.php" class="nav-item">Kids Brands</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="pages/jeans.php">Jeans</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="pages/casual_shirts.php">Casual Shirts</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="pages/glasses.php">Glasses</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="pages/t_shirts.php">T_Shirts</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="pages/watches.php">Watches</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="pages/purse.php">Purse</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="pages/shoes.php">Shoes</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="pages/high_heels.php">High Heels</a>
		</li>
			<?php// }} while($data); ?>
      </ul>
    </nav>
	<div class="col-sm-10 mt-4">
	<h1 class="text-center">7 Day Return/Refund Policy!</h1>
	<p class="text-center">ONLINE SHOPPING WITH BEST DEALS AND BEST PRICES</p>
		<?php
			$select_query=mysqli_query($conn, "SELECT * FROM `return_product` ");
			$data_query=mysqli_fetch_array($select_query);
		?>
		<div class="row justify-content-center p-4">
						<?php echo $data_query['description']; ?>
					</div>
	</div>
  </div>
  </br>
				<div class="container">
					
				</div>
</div>
	
		<?php include_once "include/footer.php"; ?>