<div class="col-md-10 content-wrapper">
	<div class="row">
		<div class="col-md-4 ">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="<?php echo base_url() ?>secuser/home">Home</a>
				</li>
				<li class="active">Kategori</li>
				<li><a href="<?php echo base_url() ?>secuser/kategori/tambah">Tambah Kategori</a></li>
			</ul>
		</div>
	</div>

	<!-- main -->
	<div class="content">
		<div class="main-content">
			<div class="row">
				<div class="col-md-12">
					<!-- BASIC VALIDATION -->
					<div class="widget">
						<div class="widget-header">
							<h3><i class="fa fa-edit"></i> Ubah Kategori</h3>
						</div>
						<div class="widget-content">
							<form method="post" action="<?php echo base_url() ?>secuser/kategori/ubah_kategori/<?php echo $detail->id_kategori ?>">
								<div class="form-group">
									<label>Kategori</label>
									<input type="text" name="nama_kategori" class="form-control" value="<?php echo $detail->nama_kategori ?>">
								</div>
								<button type="submit" class="btn btn-primary">Tambah</button>
							</form>
						</div>
					</div>
					<!-- END BASIC VALIDATION -->
				</div>
			</div>
		</div>
		<!-- /main-content -->
	</div>
	<!-- /main -->
</div>