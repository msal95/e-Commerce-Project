
<?php include_once "include/db.php"; ?>
<?php include_once "include/header.php"; ?>

 <div class="container-fluid">
  <div class="row">
    <nav class="col-sm-2 pl-4 fixed hover">
	<h3 class="border border-top-0 border-left-0">Categories</h3>
      <ul class="nav flex-column ">
       <?php
			$query=mysqli_query($conn, "SELECT * FROM `category` ");
			do{
			$data=mysqli_fetch_array($query);
			if($data){
			$cat_id=$data['cat_id'];
			$cat_name=$data['cat_name'];
		?>
		<li class="nav-item">
			<a class="nav-link active" href="pages/<?php echo $cat_name; ?>.php"><?php echo $cat_name; ?></a>
		</li>
			<?php }} while($data); ?>
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