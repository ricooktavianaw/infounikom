<!-- start div #main-title -->
<div class="main-title">
    <p>Daftar</p>
</div>
<!-- end div #main-title -->

<!-- start div #main -->
<div id="main">
    <div class="main-content">
        <div class="contact-content">
            <div class="marked-title">
                <h3>Daftar</h3>
            </div>
            <div class="contact-form">
                <form action="<?php echo base_url(); ?>register/daftar" method="post" enctype="multipart/form-data">
                    <div class="top-form">
                        <input class="field" type="text" name="nim" value="NIM" onFocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                        <input class="field" type="text" name="nama_lengkap" value="Nama Lengkap" onFocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                        <input class="field" type="text" name="username" value="Nama Panggilan" onFocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                        <input class="field" type="password" name="password" value="Password" onFocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                        <input class="field" type="text" name="email" value="E-Mail" onFocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                        <select name="fakultas" class="field">
                            <option value="Fakultas Teknik dan Ilmu Komputer">Fakultas Teknik dan Ilmu Komputer</option>
                            <option value="Fakultas Ekonomi">Fakultas Ekonomi</option>
                            <option value="Fakultas Hukum">Fakultas Hukum</option>
                            <option value="Fakultas Ilmu Sosial dan Politik">Fakultas Ilmu Sosial dan Politik</option>
                            <option value="Fakultas Desain">Fakultas Desain</option>
                            <option value="Fakultas Sastra">Fakultas Sastra</option>
                            <option value="Pasca Sarjana/Magister">Pasca Sarjana/Magister</option>
                        </select>
                        <select name="jurusan" class="field">
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                            <option value="Perencanaan Kota dan Regional">Perencanaan Kota dan Regional</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                            <option value="Komputerisasi Akutansi">Komputerisasi Akutansi</option>
                            <option value="Manajemenr">Manajemen</option>
                            <option value="Akutansi">Akutansi</option>
                            <option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
                            <option value="Keuangan dan Perbankan">Keuangan dan Perbankan</option>
                            <option value="Ilmu Hukum">Ilmu Hukum</option>
                            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                            <option value="Ilmu Pemerintahan">Ilmu Pemerintahan</option>
                            <option value="Hubungan Internasional">Hubungan Internasional</option>
                            <option value="Sekretaris Eksekutif">Sekretaris Eksekutif</option>
                            <option value="Public Relations">Public Relations</option>
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                            <option value="Desain Interior">Desain Interior</option>
                            <option value="Sastra Inggris">Sastra Inggris</option>
                            <option value="Sastra Jepang">Sastra Jepang</option>
                            <option value="Magister Management">Magister Management</option>
                            <option value="Magister Information System">Magister Information System</option>
                        </select>
                        <select name="angkatan" class="field">
                            <?php 
                                for ($i=1994; $i <= 2014 ; $i++) {
                            echo "
                            <option value='$i'>$i</option>
                            ";
                                }
                            ?>
                        </select>
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