<nav class="main-nav">
	<ul class="main-menu">
		<li class="active">
			<a href="<?php echo base_url() ?>secuser/home"><i class="fa fa-dashboard fa-fw"></i>
				<span class="text">Dashboard</span>
			</a>
		</li>
		<li>
			<a href="<?php echo base_url() ?>secuser/home/event"><i class="fa fa-clipboard fa-fw"></i>
				<span class="text">Event</span>
			</a>
		</li>
		<li>
			<a href="index.html#" class="js-sub-menu-toggle"><i class="fa fa-clipboard fa-fw"></i>
				<span class="text">Sub Event</span>
				<i class="toggle-icon fa fa-angle-left"></i>
			</a>
			<ul class="sub-menu ">
				<?php 
					foreach ($bijil as $row):
				?>
				<li>
					<a href="<?php echo base_url().'secuser/home/subevent/'.$row['id_event']; ?>">
						<span class="text"><?php echo $row['nama_event'] ?></span>
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</li>
		<li>
			<a href="<?php echo base_url() ?>secuser/home/kategori"><i class="fa fa-clipboard fa-fw"></i>
				<span class="text">Kategori</span>
			</a>
		</li>
		<li>
				<a href="index.html#" class="js-sub-menu-toggle"><i class="fa fa-clipboard fa-fw"></i>
					<span class="text">Sub Kategori</span>
					<i class="toggle-icon fa fa-angle-left"></i>
				</a>
				<ul class="sub-menu ">
					<?php 
						foreach ($brojol as $row):
					?>
					<li>
						<a href="<?php echo base_url().'secuser/home/subkategori/'.$row['id_kategori']; ?>">
							<span class="text"><?php echo $row['nama_kategori'] ?></span>
						</a>
					</li>
					<?php endforeach; ?>
				</ul>
			</li>
		<li>
			<a href="index.html#" class="js-sub-menu-toggle"><i class="fa fa-clipboard fa-fw"></i>
				<span class="text">Komunitas</span>
				<i class="toggle-icon fa fa-angle-left"></i>
			</a>
			<ul class="sub-menu ">
				<?php 
					foreach ($tampil as $row):
				?>
				<li>
					<a href="<?php echo base_url().'secuser/home/subkomunitas/'.$row['id_komunitas']; ?>">
						<span class="text"><?php echo $row['nama_komunitas'] ?></span>
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
			<li>
				<a href="index.html#" class="js-sub-menu-toggle"><i class="fa fa-clipboard fa-fw"></i>
					<span class="text">Teras Kampus</span>
					<i class="toggle-icon fa fa-angle-left"></i>
				</a>
				<ul class="sub-menu ">
					<?php 
						foreach ($tompel as $row):
					?>
					<li>
						<a href="<?php echo base_url().'secuser/home/subteraskampus/'.$row['id_teraskampus']; ?>">
							<span class="text"><?php echo $row['nama_teraskampus'] ?></span>
						</a>
					</li>
					<?php endforeach; ?>
				</ul>
			</li>
		</li>
	</ul>
</nav>
<!-- /main-nav -->