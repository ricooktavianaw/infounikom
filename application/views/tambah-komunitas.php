<!-- start div #main-title -->
<div class="main-title">
    <p>kontak</p>
</div>
<!-- end div #main-title -->
        
<!-- start div #main -->
<div id="main">
    <div class="main-content contact">
        <div class="infos">
        	<h1>BUAT KOMUNITAS</h1>
        </div>
        <div class="contact-content">
            <div class="contact-form">
                <form action="<?php echo base_url(); ?>komunitas/tambah_komunitas" method="post" enctype="multipart/form-data">
                    <div class="top-form">
                        <input type="hidden" name="id_komunitas" value="3" />
                        <input class="field" type="text" name="nama_sub_komunitas" value="Nama Komunitas" onFocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                        <textarea name="deskripsi_singkat" onFocus="if (this.value==this.defaultValue) this.value = ''" onBlur="if (this.value=='') this.value = this.defaultValue">Deskripsi</textarea>
                        <textarea name="kegiatan" onFocus="if (this.value==this.defaultValue) this.value = ''" onBlur="if (this.value=='') this.value = this.defaultValue">Kegiatan</textarea>
                        <input class="field" type="text" name="web" value="Web" onFocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                        <input class="field" type="text" name="facebook" value="Facebook" onFocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                        <input class="field" type="text" name="twitter" value="Twitter" onFocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                        <input class="field" type="text" name="cp" value="Contact Person" onFocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                        <input class="field" type="file" name="userfile" style="padding-top:20px !important;">                        
                        <div class="clear"></div>
                    </div>
                    <button class="btn submit" type="submit">Daftar</button>
                </form>
                <div class="clear"></div>
            </div>
        </div>
    </div>	
</div>
<!-- end div #main -->