<div class="col-md-10 content-wrapper">
	<!-- main -->
	<div class="content">
		<div class="main-content">
			<div class="row">
				<div class="col-md-12">
					<!-- BASIC VALIDATION -->
					<div class="widget">
						<div class="widget-header">
							<h3><i class="fa fa-edit"></i> Ubah Data Anda</h3>
						</div>
						<div class="widget-content">
							<?php echo form_open(base_url().'secuser/home/update_proccess/'.$admin->id); ?>
			                <table class="table">
								<thead>
									<tr>
										<th colspan="2" class="left">Administrator Information Update</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td width="219" class="title">Nama Lengkap</td>
									  	<td width="219" class="price" style="text-align:left;">
									  		<?php echo form_input(array('name'=>'namaLengkap','value'=>$admin->namaLengkap,'class'=>'form-control')); ?>                                  
									  	</td>
								  	</tr>
									<tr>
										<td class="title">Username</td>
										<td class="price" style="text-align:left;">
											<?php echo form_input(array('name'=>'username','value'=>$admin->username,'class'=>'form-control')); ?>                                  
										</td>
									</tr>
									<tr>
										<td class="title">Email</td>
										<td class="price" style="text-align:left;">
											<?php echo form_input(array('name'=>'email','value'=>$admin->email,'class'=>'form-control')); ?>                                    
										</td>
									</tr>
									<tr>
										<td class="title">Telephone</td>
										<td class="price" style="text-align:left;">
											<?php echo form_input(array('name'=>'tlp','value'=>$admin->tlp,'class'=>'form-control')); ?>                                    
										</td>
									</tr>
									<tr>
									  	<td class="title">Alamat</td>
									  	<td class="price" style="text-align:left;">
											<span class="price" style="text-align:left;">
										  		<span class="price" style="text-align:left;">
													<?php echo form_input(array('name'=>'alamat','value'=>$admin->alamat,'size'=>'50','class'=>'form-control')); ?>
												</span>
											</span>
										</td>
								  	</tr>
									<tr>
										<td colspan="2" class="title">*Kosongkan Jika tidak Mengubah Password</td>
								  	</tr>
									<tr>
									  	<td class="title">Password</td>
									  	<td class="price" style="text-align:left;">
									  		<span class="price" style="text-align:left;">
		                                    	<?php echo form_password(array('name'=>'password','class'=>'form-control')); ?>
		                                    </span>
		                                </td>
								  	</tr>
									<tr>
										<td colspan="2" class="title" style="text-align:center">
		                                	<?php echo form_submit('Ubah', 'Submit'); ?>                                    
		                            	</td>
									</tr>
								</tbody>
							</table>
			              	<?php echo form_close(); ?>
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