<?php 
include 'include/db.php';
?>
<?php
 session_start(); 

  if (!isset($_SESSION['admin_id'])) {
  	header('location: login.php');
  }
?>
<?php include_once('include/header_script.php'); ?>

	<div id="theme-wrapper">
		
		<?php include_once('include/header.php'); ?>
		
		<div id="page-wrapper" class="container">
			<div class="row">
			
				<?php include_once('include/sidebar.php'); ?>
				
				<div id="content-wrapper">
					<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-12">
									<ol class="breadcrumb">
										<li><a href="#">Home</a></li>
										<li class="active"><span>Dashboard</span></li>
									</ol>
									
									<h1>Dashboard</h1>
								</div>
							</div>
							
							<div class="row">
								<?php
									$result_q=mysqli_query($conn, "SELECT count(*) as totala from user");
									$data_q=mysqli_fetch_assoc($result_q);
									
								?>	
								<div class="col-lg-3 col-sm-6 col-xs-12">
									<div class="main-box infographic-box">
										<i class="fa fa-user red-bg"></i>
										<span class="headline">Users</span>
										<span class="value">
											<span class="timer" data-from="120" data-to="2562" data-speed="1000" data-refresh-interval="50">
												<?php echo $data_q['totala'];?>
											</span>
										</span>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6 col-xs-12">
								<?php
									$result_query=mysqli_query($conn, "SELECT count(status) FROM `order` AS final Where status= 1");
									$data_query=mysqli_fetch_assoc($result_query); 
								?>	
									<div class="main-box infographic-box">
										<i class="fa fa-shopping-cart emerald-bg"></i>
										<span class="headline">Purchases</span>
										<span class="value">
											<span class="timer" data-from="30" data-to="658" data-speed="800" data-refresh-interval="30">
												<?php echo $data_query['final']; ?>
											</span>
										</span>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6 col-xs-12">
									<div class="main-box infographic-box">
										<i class="fa fa-money green-bg"></i>
										<span class="headline">Income</span>
										<span class="value">
											&#36;<span class="timer" data-from="83" data-to="8400" data-speed="900" data-refresh-interval="60">
												8400
											</span>
										</span>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6 col-xs-12">
									<div class="main-box infographic-box">
										<i class="fa fa-eye yellow-bg"></i>
										<span class="headline">Monthly Visits</span>
										<span class="value">
											<span class="timer" data-from="539" data-to="12526" data-speed="1100">
												12526
											</span>
										</span>
									</div>
								</div>
							</div>
							
							
								<div class="row">
								<div class="col-lg-12">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2 class="pull-left">Last Orders</h2>
											
										</header>
										
										<div class="main-box-body clearfix">
											<div class="table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th class="text-center">Order ID</th>
															<th class="text-center">Customer</th>
															<th class="text-center">Payment Method</th>
															<th class="text-center">Status</th>
															<th class="text-center">Price</th>
															<th class="text-center">Date</th>
														</tr>
													</thead>
													<tbody>
<?php

	

	$query=mysqli_query($conn, "SELECT * FROM `order` ORDER BY order_id DESC  LIMIT 6");
	do{
		$row=mysqli_fetch_array($query);
	if($row){
		$order_id=$row['order_id'];
		$u_id=$row['u_id'];
		$status=$row['status'];
?>
<?php
	//print_r($cart);
		//echo $key . " : " . $value['quantity'] ."<br>";
		$cartsql = "SELECT * FROM `user_details` WHERE u_id=$u_id";
		$cartres = mysqli_query($conn, $cartsql);
		$cartr = mysqli_fetch_assoc($cartres);
		
 ?>
														<tr>
															<td class="text-center">
																<?php echo $order_id; ?>
															</td>
															<td class="text-center">
																<?php echo $cartr['f_name']." ". $cartr['l_name']; ?>
															</td>
															<td class="text-center">
																<?php echo $row['payment_method']; ?>
															</td>
															<td class="text-center">
																<?php
																	if($status == 0){echo "Pending";}elseif($status == 1){echo "Completed";}elseif($status == 2){echo "Cancelled";}
																
																?>
															</td>
															<td class="text-right">
																$<?php echo $row['total']; ?>
															</td>
															<td class="text-right">
																<?php echo $row['timestamp']; ?>
															</td>
															<td class="text-right">
																<a style="color:#ff0011" href="del_order.php?order_id=<?php echo $row['order_id']; ?>"><i class="fa fa-2x fa-trash-o"></i></a>
															</td>
														</tr>
														
	<?php }} while($row); ?>
													</tbody>
												</table>
											</div>
										
										</div>
									</div>
								</div>
							</div>
						
							<div class="row">
								<div class="col-lg-6">
									<div class="main-box">
										<header class="main-box-header clearfix">
											<h2 class="pull-left">Visitors location</h2>
											
											<div class="icon-box pull-right">
												<a href="#" class="btn pull-left">
													<i class="fa fa-refresh"></i>
												</a>
												<a href="#" class="btn pull-left">
													<i class="fa fa-cog"></i>
												</a>
											</div>
										</header>
										
										<div class="main-box-body clearfix">
											<div id="world-map" style="width: 100%; height: 400px"></div>
										</div>
									</div>
								</div>
								
							</div>
							
							
						</div>
					</div>
					
					<?php include_once ('include/footer.php'); ?>
					
				</div>
			</div>
		</div>
	</div>
	
	
	<?php include_once('include/scripts.php'); ?>