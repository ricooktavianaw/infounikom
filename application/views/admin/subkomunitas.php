<div class="col-md-10 content-wrapper">
	<div class="row">
		<div class="col-md-4 ">
			<ul class="breadcrumb">
				<li><i class="fa fa-home"></i>
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
				<?php foreach ($detail as $row):?>
				<div class="col-md-6">
					<!-- WIDGET TABLE -->
					<div class="widget widget-table">
						<div class="widget-header">
							<h3><i class="fa fa-desktop"></i> <?php echo $row->nama_sub_komunitas ?></h3>
							<div class="btn-group widget-header-toolbar">
								<div class="control-inline toolbar-item-group">
									<a href="<?php echo base_url().'secuser/subkomunitas/hapus/'.$row->id_sub_komunitas ?>">
										<button type="button" class="btn btn-danger btn-xs" style="margin-top:-0.2px;">
											<i class="fa fa-trash-o"></i> 
											Hapus
										</button>
									</a>
								</div>
							</div>
							<div class="btn-group widget-header-toolbar">
								<a href="<?php echo base_url().'secuser/subkomunitas/detail/'.$row->id_sub_komunitas ?>" title="Detail" class="btn-borderless"><i class="fa fa-eye"></i></a>
								<a href="<?php echo base_url()?>secuser/subkomunitas/ubah/<?= $row->id_sub_komunitas ?>" title="Edit" class="btn-borderless"><i class="fa fa-edit"></i></a>
								<a href="index.html#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
							</div>
						</div>
						<div class="widget-content">
							<table id="ticket-table" class="table table-sorting table-striped table-hover datatable">
								<tbody>
									<tr>
										<td>Nama Komunitas</td>
										<td>
											<?php 
											$content = htmlentities(substr($row->deskripsi_singkat,0,150));
											echo "<p> $content ...</p>";
											?>
										</td>
									</tr>
									<tr>
										<td>Web</td>
										<td><?php echo $row->web ?></td>
									</tr>
									<tr>
										<td>Facebook</td>
										<td><?php echo $row->facebook ?></td>
									</tr>
									<tr>
										<td>Twitter</td>
										<td><?php echo $row->twitter ?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- END WIDGET TABLE -->
				</div>
			<?php endforeach; ?>
			</div>
		</div>
		<!-- /main-content -->
	</div>
	<!-- /main -->
</div>