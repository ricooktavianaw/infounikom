<div class="col-md-10 content-wrapper">
	<div class="row">
		<div class="col-md-4 ">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="<?php echo base_url() ?>secuser/home">Home</a>
				</li>
				<li class="active">Teras Kampus</li>
				<li><a href="<?php echo base_url() ?>secuser/subteraskampus/tambah">Tambah Teras Kampus</a></li>
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
							<form method="post" action="<?php echo base_url() ?>secuser/subteraskampus/tambah_teraskampus" enctype="multipart/form-data">
								<div class="form-group">
									<label>Kategori Teras Kampus</label>
									<select name="id_teraskampus" class="form-control">
										<?php foreach($tampil as $row): ?>
										<option value="<?php echo $row['id_teraskampus'] ?>"><?php echo $row['nama_teraskampus'] ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<input type="hidden" name="id" value="<?php echo $this->session->userdata('userid'); ?>" />
								<input type="hidden" name="waktu_post" value="<?php echo gmdate("Y-m-d H:i:s", time()+60*60*7) ?>" />
								<div class="form-group">
									<label>Judul</label>
									<input type="text" name="nama_sub_teraskampus" class="form-control">
								</div>
								<div class="form-group">
									<label>Deskripsi</label>
									<textarea name="deskripsi" class="form-control" rows="5" cols="30"></textarea>
								</div>
								<div class="form-group">
									<label>Gambar</label>
									<input type="file" name="userfile" class="form-control">
								</div>
								<br/>
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