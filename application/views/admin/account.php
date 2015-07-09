<div class="col-md-10 content-wrapper">
	<!-- main -->
	<div class="content">
		<div class="main-content">
			<div class="row">
				<div class="col-md-12">
					<!-- RESPONSIVE TABLE -->
					<div class="widget widget-table">
						<div class="widget-header">
							<h3><i class="fa fa-user"></i> Data Anda</h3>
							<div class="btn-group widget-header-toolbar">
								<div class="label label-info">Admin</div>
							</div>
						</div>
						<div class="widget-content">
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<td>Nama Lengkap</td>
											<td><?php echo $admin->namaLengkap; ?></td>
										</tr>
										<tr>
											<td>Username</td>
											<td><?php echo $admin->username; ?></td>
										</tr>
										<tr>
											<td>Email</td>
											<td><?php echo $admin->email; ?></td>
										</tr>
										<tr>
											<td>Telepon</td>
											<td><?php echo $admin->tlp; ?></td>
										</tr>
										<tr>
											<td>Alamat</td>
											<td><?php echo $admin->alamat; ?></td>
										</tr>
										<tr>
											<td>Password</td>
											<td><?php echo $admin->password; ?></td>
										</tr>
										<tr>
											<td colspan="2">
												<a href="<?php echo base_url(); ?>secuser/home/update">
													<input type="button" value="Ubah" class="btn btn-primary">
												</a>
											</td>
										</tr>
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