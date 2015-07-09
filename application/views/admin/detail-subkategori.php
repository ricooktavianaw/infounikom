<div class="col-md-10 content-wrapper">
	<div class="row">
		<div class="col-md-4 ">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="<?php echo base_url() ?>secuser/home">Home</a>
				</li>
				<li class="active">Teras Kampus</li>
				<li>Detail Teras Kampus</li>
			</ul>
		</div>
	</div>

	<!-- main -->
	<div class="content">
		<div class="main-content">
			<!-- NAV TABS -->
			<ul class="nav nav-tabs nav-tabs-custom-colored tabs-iconized">
				<li class="active">
					<a href="page-profile.html#profile-tab" data-toggle="tab"><i class="fa fa-group"></i> Detail Kategori</a>
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
								<img src="<?php echo base_url().'pict/kategori/'.$row->pict ?>" class="img-responsive" alt="Profile Picture" />
								<h2><?php echo $row->nama_sub_kategori ?></h2>
							</div>
						</div>
						<div class="col-md-9">
							<div class="user-info-right">
								<div class="basic-info">
									<h3><i class="fa fa-square"></i> Informasi Dasar</h3>
									<p><?php echo $row->namaLengkap.' | '.Subkategori::dateindo($row->waktu_post); ?></p>
									<p class="data-row">
										<span class="data-name">Kategori Teras Kampus</span>
										<span class="data-value"><?php echo $row->nama_kategori ?></span>
									</p>
									<p class="data-row">
										<span class="data-name">Judul</span>
										<span class="data-value"><?php echo $row->nama_sub_kategori ?></span>
									</p>
								</div>
								<div class="about">
									<h3><i class="fa fa-square"></i> Deskripsi</h3>
									<p align="justify">
										<?php 
											$pecah = explode("\r\n\r\n", $row->deskripsi);
											$text = "";
											for ($i=0; $i<=count($pecah)-1; $i++)
											{
												$part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p><br />", $pecah[$i]);
												$text .= $part;
											}
											echo $text;
										?>
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