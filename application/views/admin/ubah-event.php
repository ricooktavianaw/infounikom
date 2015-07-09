<div class="col-md-10 content-wrapper">
	<div class="row">
		<div class="col-md-4 ">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="<?php echo base_url() ?>secuser/home">Home</a>
				</li>
				<li class="active">Kategori Event</li>
				<li><a href="<?php echo base_url() ?>secuser/event/tambah">Tambah Kategori Event</a></li>
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
							<h3><i class="fa fa-edit"></i> Ubah Event</h3>
						</div>
						<div class="widget-content">
							<form method="post" action="<?php echo base_url() ?>secuser/event/ubah_event/<?php echo $detail->id_event ?>">
								<div class="form-group">
									<label>Kategori Event</label>
									<input type="text" name="nama_event" class="form-control" value="<?php echo $detail->nama_event ?>">
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