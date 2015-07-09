<div class="col-md-10 content-wrapper">
	<div class="row">
		<div class="col-md-4 ">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="<?php echo base_url() ?>secuser/home">Home</a>
				</li>
				<li class="active">Sub Event</li>
				<li><a href="<?php echo base_url() ?>secuser/subevent/tambah">Tambah Sub Event(Event)</a></li>
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
							<h3><i class="fa fa-edit"></i> Tambah Event</h3>
						</div>
						<div class="widget-content">
							<?php foreach($detail as $wor): ?>
							<form method="post" action="<?php echo base_url() ?>secuser/subevent/ubah_sub_event" enctype="multipart/form-data">
								<input type="hidden" value="<?php echo $wor->id_sub_event; ?>" name="id_sub_event" />
								<div class="form-group">
									<label>Kategori</label>
									<select name="id_event" class="form-control">
										<?php foreach($bijil as $row): ?>
										<option value="<?php echo $row['id_event'] ?>"><?php echo $row['nama_event'] ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label>Nama Event</label>
									<input type="text" name="nama_sub_event" class="form-control" value="<?php echo $wor->nama_sub_event ?>">
								</div>
								<div class="form-group">
									<label>Tanggal</label>
									<input type="text" id="datepicker" name="tanggal" class="form-control" placeholder="yyyy-mm-dd" value="<?php echo $wor->tanggal ?>">
								</div>
								<div class="form-group">
									<label>Jam</label>
									<input type="text" name="jam" class="form-control" placeholder="00:00:00" value="<?php echo $wor->jam ?>">
								</div>
								<div class="form-group">
									<label>Lokasi</label>
									<input type="text" name="lokasi" class="form-control" value="<?php echo $wor->lokasi ?>">
								</div>
								<div class="form-group">
									<label>Deskripsi Event</label>
									<textarea name="deskripsi" class="form-control" rows="5" cols="30"> <?php echo $wor->deskripsi ?></textarea>
								</div>
								<div class="form-group">
									<label>Logo</label>
									<input type="file" name="userfile" class="form-control">
								</div>

								<input type="hidden" name="id" value="<?php echo $this->session->userdata('userid'); ?>" />
								<?php //var_dump($this->session->userdata('id')); ?>
								<input type="hidden" name="waktu_post" value="<?php echo gmdate("Y-m-d H:i:s", time()+60*60*7) ?>" />
								<br/>
								<button type="submit" class="btn btn-primary">Tambah</button>
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