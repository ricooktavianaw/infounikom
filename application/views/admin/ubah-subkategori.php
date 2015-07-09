<div class="col-md-10 content-wrapper">
	<div class="row">
		<div class="col-md-4 ">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="<?php echo base_url() ?>secuser/home">Home</a>
				</li>
				<li class="active">Teras Kampus</li>
				<li><a href="<?php echo base_url() ?>secuser/subkategori/tambah">Ubah Teras Kampus</a></li>
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
							<h3><i class="fa fa-edit"></i> Tambah Teras Kampus</h3>
						</div>
						<div class="widget-content">
							<?php foreach($detail as $wor): ?>
							<form method="post" action="<?php echo base_url() ?>secuser/subkategori/ubah_kategori" enctype="multipart/form-data">
								<input type="hidden" value="<?php echo $wor->id_sub_kategori; ?>" name="id_sub_kategori" />
								<div class="form-group">
									<label>Kategori</label>
									<select name="id_kategori" class="form-control">
										<?php foreach($tampil as $row): ?>
										<option value="<?php echo $row['id_kategori'] ?>"><?php echo $row['nama_kategori'] ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<input type="hidden" name="id" value="<?php echo $this->session->userdata('userid'); ?>" />
								<input type="hidden" name="waktu_post" value="<?php echo gmdate("Y-m-d H:i:s", time()+60*60*7) ?>" />
								<div class="form-group">
									<label>Judul</label>
									<input type="text" name="nama_sub_kategori" class="form-control" value="<?php echo $wor->nama_sub_kategori ?>">
								</div>
								<div class="form-group">
									<label>Deskripsi</label>
									<textarea name="deskripsi" class="form-control" rows="5" cols="30"><?php echo $wor->deskripsi ?></textarea>
								</div>
								<div class="form-group">
									<label>Gambar</label>
									<input type="file" name="userfile" class="form-control">
								</div>
								<br/>
								<button type="submit" class="btn btn-primary">Ubah</button>
							</form>
						<?php endforeach; ?>
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