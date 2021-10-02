<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Centaurus - Bootstrap Admin Template</title>
	
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" />
	
	<!-- RTL support - for demo only -->
	<script src="js/demo-rtl.js"></script>
	<!-- 
	If you need RTL support just include here RTL CSS file <link rel="stylesheet" type="text/css" href="css/libs/bootstrap-rtl.min.css" />
	And add "rtl" class to <body> element - e.g. <body class="rtl"> 
	-->
	
	<!-- libraries -->
	<link rel="stylesheet" type="text/css" href="css/libs/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/libs/nanoscroller.css" />

	<!-- global styles -->
	<link rel="stylesheet" type="text/css" href="css/compiled/theme_styles.css" />

	<!-- this page specific styles -->

	<!-- google font libraries -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>
	
	<!-- Favicon -->
	<link type="image/logo.png" href="favicon.png" rel="shortcut icon"/>

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body id="login-page-full">
	<div id="login-full-wrapper" class="reset-password-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div id="login-box">
						<div id="login-box-holder">
							<div class="row">
								<div class="col-xs-12">
									<header id="login-header">
										<div id="login-logo">
											<img src="images/logo.png" alt=""/>
										</div>
									</header>
									<div id="login-box-inner" class="with-heading">
										<h4>Forgot your password?</h4>
										<p>
											Enter your email address to recover your password.
										</p>
										<form role="form" action="index.html">
											<div class="input-group reset-pass-input">
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
												<input class="form-control" id="email" type="text" placeholder="Email address">
											</div>
											<div class="row">
												<div class="col-xs-12">
													<button type="button" class="btn btn-success col-xs-12">Reset password</button>
												</div>
												<div class="col-xs-12">
													<br/>
													<a href="login.php" id="login-forget-link" class="forgot-link col-xs-12">Back to login</a>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<!-- global scripts -->
	<script src="js/demo-skin-changer.js"></script> <!-- only for demo -->
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.nanoscroller.min.js"></script>
	
	<script src="js/demo.js"></script> <!-- only for demo -->
	
	<!-- this page specific scripts -->

	
	<!-- theme scripts -->
	<script src="js/scripts.js"></script>
	
	<!-- this page specific inline scripts -->
	
	
	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
	var email=$("#email");
		$(document).ready(function(){
			$('.btn-success').on('click', function(){
				if(email.val()!=""){
					email.css('border', '1px solid green');
					
					$.ajax({
						url:'forgot_password.php',
						method:'POST',
						dataType:'text',
						data:{
							email:email.val()
						}, success:function(response){
							console.log(response);
						}
					});
					
				}else
					email.css('border', '1px solid red');
			});
		});
	</script>
  
	
	
</body>
</html>