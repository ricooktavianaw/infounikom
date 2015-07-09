<div class="col-md-10 content-wrapper">
	<div class="row">
		<div class="col-md-4 ">
			<ul class="breadcrumb">
				<li><i class="fa fa-home"></i>
					<a href="<?php echo base_url() ?>secuser/home">Home</a>
				</li>
				<li class="active">Sub Event</li>
				<li><a href="<?php echo base_url() ?>secuser/subevent/tambah">Tambah Sub Event</a></li>
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
							<h3><i class="fa fa-desktop"></i> <?php echo $row->nama_sub_event ?></h3>
							<div class="btn-group widget-header-toolbar">
								<div class="control-inline toolbar-item-group">
									<a href="<?php echo base_url().'secuser/subevent/hapus/'.$row->id_sub_event ?>">
										<button type="button" class="btn btn-danger btn-xs" style="margin-top:-0.2px;">
											<i class="fa fa-trash-o"></i> 
											Hapus
										</button>
									</a>
								</div>
							</div>
							<div class="btn-group widget-header-toolbar">
								<a href="<?php echo base_url().'secuser/subevent/detail/'.$row->id_sub_event ?>" title="Detail" class="btn-borderless"><i class="fa fa-eye"></i></a>
								<a href="<?php echo base_url()?>secuser/subevent/ubah/<?= $row->id_sub_event ?>" title="Edit" class="btn-borderless"><i class="fa fa-edit"></i></a>
								<a href="index.html#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
							</div>
						</div>
						<div class="widget-content">
							<table id="ticket-table" class="table table-sorting table-striped table-hover datatable">
								<tbody>
									<tr>
										<td colspan="2">Posted by: <?php echo $row->username ?> | <?php echo $row->waktu_post ?></td>
									</tr>
									<tr>
										<td>Waktu Post</td>
										<td><?php echo $row->waktu_post ?></td>
									</tr>
									<tr>
										<td>Event</td>
										<td><?php echo $row->nama_sub_event ?></td>
									</tr>
									<tr>
										<td>Deskripsi Singkat</td>
										<td>
											<?php 
											$content = htmlentities(substr($row->deskripsi,0,150));
											echo "<p> $content ...</p>";
											?>
										</td>
									</tr>
									<tr>
										<td>Lokasi</td>
										<td><?php echo $row->lokasi ?></td>
									</tr>
									<tr>
										<td>Tanggal</td>
										<td><?php echo Home::dateindo($row->tanggal); echo " Pukul "; echo $row->jam ?></td>
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