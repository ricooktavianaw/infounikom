<div class="col-md-10 content-wrapper">
	<div class="row">
		<div class="col-md-4 ">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="<?php echo base_url() ?>secuser/home">Home</a>
				</li>
				<li class="active">Komunitas</li>
				<li><a href="<?php echo base_url() ?>secuser/subkomunitas/tambah">Tambah Komunitas</a></li>
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
							<h3><i class="fa fa-edit"></i> Ubah Komunitas</h3>
						</div>
						<div class="widget-content">
							<?php foreach($detail as $wor): ?>
							<form method="post" action="<?= base_url() ?>secuser/subkomunitas/ubah_komunitas" enctype="multipart/form-data">
								<input type="hidden" value="<?php echo $wor->id_sub_komunitas; ?>" name="id_sub_komunitas" />
								<div class="form-group">
									<label>Kategori</label>
									<select name="id_komunitas" class="form-control">
										<?php foreach($hijidua as $row): ?>
										<option value="<?php echo $row->id_komunitas ?>"><?php echo $row->nama_komunitas ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label>Nama Komunitas</label>
									<input type="text" name="nama_sub_komunitas" class="form-control" value="<?php echo $wor->nama_sub_komunitas ?>">
								</div>
								<div class="form-group">
									<label>Deskripsi Komunitas</label>
									<textarea name="deskripsi_singkat" class="form-control" rows="5" cols="30"><?php echo $wor->deskripsi_singkat ?></textarea>
								</div>
								<div class="form-group">
									<label>Kegitan Komunitas</label>
									<textarea name="kegiatan" class="form-control" rows="5" cols="30"><?php echo $wor->kegiatan ?></textarea>
								</div>
								<div class="form-group">
									<label>Web Komunitas</label>
									<input type="text" name="web" class="form-control" value="<?php echo $wor->web ?>">
								</div>
								<div class="form-group">
									<label>Facebook Komunitas</label>
									<input type="text" name="facebook" class="form-control" value="<?php echo $wor->facebook ?>">
								</div>
								<div class="form-group">
									<label>Twitter Komunitas</label>
									<input type="text" name="twitter" class="form-control" value="<?php echo $wor->twitter ?>">
								</div>
								<div class="form-group">
									<label>Contact Person Komunitas</label>
									<textarea name="cp" class="form-control" rows="5" cols="30"><?php echo $wor->nama_sub_komunitas ?></textarea>
								</div>
								<div class="form-group">
									<label>Logo</label>
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