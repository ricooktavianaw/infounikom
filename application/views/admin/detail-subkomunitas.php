<div class="col-md-10 content-wrapper">
	<div class="row">
		<div class="col-md-4 ">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="<?php echo base_url() ?>secuser/home">Home</a>
				</li>
				<li class="active">Komunitas</li>
				<li>Detail Komunitas</li>
			</ul>
		</div>
	</div>

	<!-- main -->
	<div class="content">
		<div class="main-content">
			<!-- NAV TABS -->
			<ul class="nav nav-tabs nav-tabs-custom-colored tabs-iconized">
				<li class="active">
					<a href="page-profile.html#profile-tab" data-toggle="tab"><i class="fa fa-group"></i> Profil Komunitas</a>
				</li>
			</ul>
			<!-- END NAV TABS -->

			<div class="tab-content profile-page">
				<!-- PROFILE TAB CONTENT -->
				<div class="tab-pane profile active" id="profile-tab">
					<div class="row">
						<?php foreach($detail as $row): ?>
						<div class="col-md-3">
							<div class="user-info-left">
								<img src="<?php echo base_url().'pict/komunitas/'.$row->logo ?>" class="img-responsive" alt="Profile Picture" />
								<h2><?php echo $row->nama_sub_komunitas ?></h2>
								<div class="contact">
									<ul class="list-inline social">
										<li>
											<a href="<?php echo $row->facebook ?>" title="Facebook"><i class="fa fa-facebook-square"></i></a>
										</li>
										<li>
											<a href="<?php echo $row->twitter ?>" title="Twitter"><i class="fa fa-twitter-square"></i></a>
										</li>
										<li>
											<a href="<?php echo $row->web ?>" title="Website"><i class="fa fa-globe"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<div class="user-info-right">
								<div class="basic-info">
									<h3><i class="fa fa-square"></i> Informasi Dasar</h3>
									<p class="data-row">
										<span class="data-name">Kategori Komunitas</span>
										<span class="data-value"><?php echo $row->nama_komunitas ?></span>
									</p>
									<p class="data-row">
										<span class="data-name">Nama Komunitas</span>
										<span class="data-value"><?php echo $row->nama_sub_komunitas ?></span>
									</p>
								</div>
								<div class="about">
									<h3><i class="fa fa-square"></i> Tentang Mereka</h3>
									<p align="justify"><?php echo $row->deskripsi_singkat ?></p>
								</div>
								<div class="about">
									<h3><i class="fa fa-square"></i> Kegiatan</h3>
									<p align="justify"><?php echo $row->deskripsi_singkat ?></p>
								</div>
								<div class="contact_info">
									<h3><i class="fa fa-square"></i> Informasi Kontak</h3>
									<p class="data-row">
										<span class="data-name">Facebook</span>
										<span class="data-value"><?php echo $row->facebook ?></span>
									</p>
									<p class="data-row">
										<span class="data-name">Twitter</span>
										<span class="data-value"><?php echo $row->twitter ?></span>
									</p>
									<p class="data-row">
										<span class="data-name">Contact Person</span>
										<span class="data-value"><?php echo $row->cp ?>
											<br />Colorado</span>
									</p>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<!-- END PROFILE TAB CONTENT -->
			</div>
		</div>
		<!-- /main-content -->
	</div>
	<!-- /main -->
</div>