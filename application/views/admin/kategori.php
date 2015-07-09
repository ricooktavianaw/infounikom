<div class="col-md-10 content-wrapper">
	<div class="row">
		<div class="col-md-4 ">
			<ul class="breadcrumb">
				<li><i class="fa fa-home"></i>
					<a href="<?php echo base_url() ?>secuser/home">Home</a>
				</li>
				<li class="active">Sub Kategori</li>
				<li><a href="<?php echo base_url() ?>secuser/kategori/tambah">Tambah Kategori</a></li>
			</ul>
		</div>
	</div>

	<!-- main -->
	<div class="content">
		<div class="main-content">
			<div class="row">
				<div class="col-md-12">
					<!-- RESPONSIVE TABLE -->
					<div class="widget widget-table">
						<div class="widget-header">
							<h3><i class="fa fa-table"></i> Responsive Table</h3>
							<div class="btn-group widget-header-toolbar">
								<div class="label label-info">NEW</div>
							</div>
						</div>
						<div class="widget-content">
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th rowspan="2">No</th>
											<th rowspan="2">Kategori</th>
											<th colspan="2"><center>Action</center></th>
										</tr>
										<tr>
											<th><center>Edit</center></th>
											<th><center>Delete</center></th>
										</tr
									</thead>
									<tbody>
										<?php $i=1; foreach ($brojol as $row):  ?>
										<tr>
											<td><?php echo $i++; ?></td>
											<td><?php echo $row['nama_kategori'] ?></td>
											<td><center><a href="<?php echo base_url().'secuser/kategori/ubah/'.$row['id_kategori'] ?>"><i class="fa fa-edit" title="Edit"></i></a></center></td>
											<td><center><a href="<?php echo base_url().'secuser/kategori/hapus/'.$row['id_kategori'] ?>"><i class="fa fa-trash-o" title="Hapus"></i></a></center></td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /main-content -->
	</div>
	<!-- /main -->
</div>