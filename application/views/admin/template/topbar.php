<div class="top-bar">
	<div class="container">
		<div class="row">
			<!-- logo -->
			<div class="col-md-2 logo">
				<a href="index.html">
					<img src="<?php echo base_url() ?>secuser/assets/img/kingadmin-logo-white.png" alt="KingAdmin - Admin Dashboard" />
				</a>
				<h1 class="sr-only">KingAdmin Admin Dashboard</h1>
			</div>
			<!-- end logo -->
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-12">
						<div class="top-bar-right">
							<!-- responsive menu bar icon -->
							<a href="index.html#" class="hidden-md hidden-lg main-nav-toggle"><i class="fa fa-bars"></i></a>
							<!-- end responsive menu bar icon -->

							<!-- logged user and the menu -->
							<div class="logged-user">
								<div class="btn-group">
									<a href="index.html#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
										<img src="<?php echo base_url() ?>secuser/assets/img/user-avatar.png" alt="User Avatar" />
										<span class="name"><?php echo $this->session->userdata('username'); ?></span>
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu" role="menu">
										<li>
											<a href="<?php echo base_url() ?>secuser/home/account">
												<i class="fa fa-user"></i>
												<span class="text">Profile</span>
											</a>
										</li>
										<li>
											<a href="index.html#">
												<i class="fa fa-cog"></i>
												<span class="text">Settings</span>
											</a>
										</li>
										<li>
											<a href="<?php echo base_url() ?>secuser/home/logout">
												<i class="fa fa-power-off"></i>
												<span class="text">Logout</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- end logged user and the menu -->
						</div>
						<!-- /top-bar-right -->
					</div>
				</div>
				<!-- /row -->
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>