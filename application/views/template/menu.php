<div class="border-left"></div>
<div class="logo">
    <a href="index.html"><img src="<?php echo base_url() ?>mhs/img/ogol.png" alt=""></a>
    <span class="border-bottom"></span>
</div>
<nav class="menu">
    <ul>
        <li><span class="border-bottom"></span><a href="<?php echo base_url() ?>main">Beranda</a></li>
        <li><span class="border-bottom"></span><a href="<?php echo base_url() ?>tentang">Tentang</a></li>
        <li><span class="border-bottom"></span><a href="<?php echo base_url() ?>mediapartner">Media Partner</a></li>
        <li><span class="border-bottom"></span><a href="<?php echo base_url() ?>event">Event</a>
            <ul class="dropdown">
                <?php 
                    foreach ($bijil as $row):
                ?>
                <li>
                    <a href="<?php echo base_url().'event/kategori/'.$row['id_event']; ?>">
                        <?php echo $row['nama_event'] ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li><span class="border-bottom"></span><a href="<?php echo base_url() ?>kategori">Kategori</a>
            <ul class="dropdown">
                <?php 
                    foreach ($brojol as $row):
                ?>
                <li>
                    <a href="<?php echo base_url().'kategori/kategori/'.$row['id_kategori']; ?>">
                        <?php echo $row['nama_kategori'] ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li><span class="border-bottom"></span><a href="<?php echo base_url() ?>teraskampus">Teras Kampus</a>
            <ul class="dropdown">
                <?php 
                    foreach ($tompel as $row):
                ?>
                <li>
                    <a href="<?php echo base_url().'teraskampus/kategori/'.$row['id_teraskampus']; ?>">
                        <?php echo $row['nama_teraskampus'] ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li><span class="border-bottom"></span><a href="<?php echo base_url() ?>komunitas">Komunitas</a>
            <ul class="dropdown">
                <?php 
                    foreach ($tampil as $row):
                ?>
                <li>
                    <a href="<?php echo base_url().'komunitas/kategori/'.$row['id_komunitas']; ?>">
                        <?php echo $row['nama_komunitas'] ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li><span class="border-bottom"></span><a href="<?php echo base_url() ?>kontak">Kontak</a></li>
        <li>
            
            <?php 
                if($this->session->userdata('username-mahasiswa') == null){
            ?>
                <span class="border-bottom"></span><a href="<?php echo base_url() ?>login">Login</a>
                <ul class="dropdown">
                    <li><a href='<?php echo base_url(); ?>login'>Login</a></li>
                    <li><a href="<?php echo base_url() ?>register">Daftar</a></li>
                </ul>
            <?php
                }else{
            ?>
            <span class="border-bottom"></span><a href="<?php echo base_url(); ?>account"><?php echo $this->session->userdata('username-mahasiswa'); ?></a>
                <ul class="dropdown">
                    <li><a href='<?php echo base_url(); ?>main/logout'>Keluar</a></li>
                </ul>
            <?php
                }
            ?>
        </li>
    </ul>                                              
</nav>   
<select class="mobile-menu" onchange='document.location.href=this.options[this.selectedIndex].value;'> 
    <option value="">Go To...</option> 
    <option value="index.html">Home</option>
    <option value="category.html">Category</option>
    <option value="blog-single.html">News single</option>
    <option value="features.html">Features</option>
    <option value="full-width.html">-Full width</option>
    <option value="blog-single-with-rating.html">-News single with rating box</option>
    <option value="contact.html">-Contact</option>
</select>
<div class="clear"></div>