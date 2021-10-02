

<?php 
include_once"include/db.php";
$p_name=$_REQUEST['p_name'];
 ?>

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
			<a class="nav-link active" href="shop.php"><?php echo $cat_name; ?></a>
		</li>
			<?php }} while($data); ?>
      </ul>
    </nav>
	<div class="col-sm-10 mt-4">
	<h1 class="text-center">BEST ONLINE SHOPPING IN PAKISTAN!</h1>
	<p class="text-center">ONLINE SHOPPING WITH BEST DEALS AND BEST PRICES</p>
		<div class="row">
		<div class="col-md-12">
			<?php
				if(isset($_GET['submit'])){
				
			?>
			<table class="table table-bordered table-striped text-center">
			<thead>
				<tr>
					<td>Product id</td>
					<td>Product Image</td>
					<td>Product Name</td>
					<td>Category Name</td>
					<td>Action</td>
				</tr>
				</thead>
				<?php
				$query="SELECT * FROM `product` where p_name LIKE '%$p_name%' ";
				$result=mysqli_query($conn, $query);
					while($data=mysqli_fetch_array($result)){
					
						$p_id=$data['p_id'];
						$p_name=$data['p_name'];
						$p_image=$data['p_image'];
						$cat_id=$data['cat_id'];
				?>
				<?php
				$query="SELECT * FROM `category` where cat_id='$cat_id' ";
				$result=mysqli_query($conn, $query);
					$data=mysqli_fetch_array($result);
					
						$cat_name=$data['cat_name'];
						$cat_id=$data['cat_id'];
				?>
				<tbody>
				<tr>
					<td><?php echo $p_id; ?></td>
					<td><img src="admin/<?php echo $p_image; ?>" width="70px"></td>
					<td><?php echo $p_name; ?></td>
					<td><?php echo $cat_name; ?></td>
					<td><a class="btn btn-outline-danger" href="single_product.php?p_id=<?php echo $p_id ?>">View</a></td>
				</tr>
				</tbody>
				<?php }} ?>
			</table>
									
				
		</div>
	</div>
</div>
</div>
</div>
	
		<?php include_once "include/footer.php"; ?>