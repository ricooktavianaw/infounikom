<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<?php echo $header; ?>
</head>

<body class="dashboard">
	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- TOP BAR -->
		<?php echo $topbar; ?>
		<!-- /top -->

		<!-- BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
		<div class="bottom">
			<div class="container">
				<div class="row">
					<!-- left sidebar -->
					<div class="col-md-2 left-sidebar">

						<!-- main-nav -->
						<?php echo $menu; ?>
						<!-- /main-nav -->

						<div class="sidebar-minified js-toggle-minified">
							<i class="fa fa-angle-left"></i>
						</div>
					</div>
					<!-- end left sidebar -->

					<!-- content-wrapper -->
					<?php echo $content; ?>
					<!-- /content-wrapper -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- END BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
		<div class="push-sticky-footer"></div>
	</div>
	<!-- /wrapper -->

	<!-- FOOTER -->
	<footer class="footer">
		&copy; 2014 The Develovers
	</footer>
	<!-- END FOOTER -->

	<!-- Javascript -->
	<?php echo $js; ?>
	<!-- End Javascript -->
</body>
</html>