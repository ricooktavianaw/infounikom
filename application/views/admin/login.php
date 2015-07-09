<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Login | InfoUnikom - Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="description" content="Info Unikom Dashboard">
	<meta name="author" content="The Develovers">

	<!-- CSS -->
	<link href="<?php echo base_url() ?>secuser/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
	<link href="<?php echo base_url() ?>secuser/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen">
	<link href="<?php echo base_url() ?>secuser/assets/css/main.min.css" rel="stylesheet" type="text/css" media="screen">

	<!--[if lte IE 9]>
			<link href="assets/css/main-ie.min.css" rel="stylesheet" type="text/css" media="screen" />
			<link href="assets/css/main-ie-part2.min.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->

	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>secuser/assets/ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>secuser/assets/ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>secuser/assets/ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url() ?>secuser/assets/ico/kingadmin-favicon57x57.png">
	<link rel="shortcut icon" href="<?php echo base_url() ?>secuser/assets/ico/favicon.png">

</head>

<body>
	<div class="wrapper full-page-wrapper page-login text-center">
		<div class="inner-page">
			<?php 
			/*
			<div class="logo">
				<a href="index.html">
					<img src="<?php echo base_url() ?>secuser/assets/img/kingadmin-logo.png" alt="" />
				</a>
			</div>
			*/
			?>

			<div class="login-box center-block">
				<form class="form-horizontal" role="form" method="post" action="<?php echo base_url() ?>secuser/login/process">
					<p class="title">Use your username</p>
					<div class="form-group">
						<label for="username" class="control-label sr-only">Username</label>
						<div class="col-sm-12">
							<div class="input-group">
								<input type="text" placeholder="username" id="username" name="username" class="form-control">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
							</div>
						</div>
					</div>
					<label for="password" class="control-label sr-only">Password</label>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="input-group">
								<input type="password" placeholder="password" id="password" name="password" class="form-control">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							</div>
						</div>
					</div>
					<button class="btn btn-custom-primary btn-lg btn-block btn-login"><i class="fa fa-arrow-circle-o-right"></i> Login</button>
				</form>

				<div class="links">
					<p>
						<a href="page-login.html#">Forgot Username or Password?</a>
					</p>
				</div>
			</div>
		</div>
		<div class="push-sticky-footer"></div>
	</div>

	<footer class="footer">&copy; 2014 The Develovers</footer>

	<!-- Javascript -->
	<script src="<?php echo base_url() ?>secuser/assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?php echo base_url() ?>secuser/assets/js/bootstrap/bootstrap.js"></script>
	<script src="<?php echo base_url() ?>secuser/assets/js/plugins/modernizr/modernizr.js"></script>
</body>
</html>