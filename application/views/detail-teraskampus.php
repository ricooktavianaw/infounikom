<!-- start div #main-title -->
<div class="main-title">
    <p>Teras Kampus</p>
</div>
<!-- end div #main-title -->

<!-- start div #main -->
<div id="main">
    <div class="main-content">
        <div class="left-container">
            <?php foreach($tampil as $row): ?>
            <article>
                <div class="title-box">
                    <h1><?php echo $row->nama_sub_teraskampus ?></h1>
                </div>
                <div class="post-thumb">
                    <img src="<?php echo base_url().'pict/teraskampus/'.$row->pict ?>" alt="">
                </div>
                <div class="post-info">
                    <ul>
                        <li>kategori<br><span><?php echo $row->nama_teraskampus ?></span></li>
                        <li>author<br><span><?php echo $row->username ?></span></li>
                        <li>tanggal<br><span><?php echo Teraskampus::dateindo($row->waktu_post) ?></span></li>
                    </ul>
                    <div class="clear"></div>    
                </div>
                <div class="post-content">
                    <p align="justify">
                        <?php 
                            $pecah = explode("\r\n\r\n", $row->deskripsi);
                            $text = "";
                            for ($i=0; $i<=count($pecah)-1; $i++)
                            {
                                $part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p><br />", $pecah[$i]);
                                $text .= $part;
                            }
                            echo $text;
                        ?>
                    </p>
                </div>
            </article>
        <?php endforeach; ?>
            <div class="clear"></div>
        </div>
        <div class="right-container">
            <div class="sidebar">
                <div class="widget">
                    <div class="widget">
                        <div class="marked-title">
                            <h3>pencarian</h3>
                        </div>
                        <script>
                          (function() {
                            var cx = '010416481035241146816:9npw4ey7osi';
                            var gcse = document.createElement('script');
                            gcse.type = 'text/javascript';
                            gcse.async = true;
                            gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                                '//www.google.com/cse/cse.js?cx=' + cx;
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(gcse, s);
                          })();
                        </script>
                        <gcse:searchbox-only></gcse:searchbox-only>
                    </div>
                    <div class="marked-title">
                        <h3>be social</h3>
                    </div>
                    <ul class="social">
                        <li>
                            <a href="index.html#">
                                <span class="icon fb"></span>
                                1,186<br><span>facebook fans</span>   
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="icon tw"></span>
                                10,526<br><span>twitter fans</span>   
                            </a>
                        </li>
                        <li class="third">
                            <a href="index.html#">
                                <span class="icon rss"></span>
                                25875<br><span>subscribers</span>   
                            </a>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="widget">
                    <div class="marked-title">
                        <h3>ads</h3>
                    </div>
                    <img class="ads" src="<?php echo base_url() ?>mhs/img/ads.jpg" alt="">
                    <div class="clear"></div>
                </div>
                <div class="widget">
                    <div class="marked-title">
                        <h3>Tags</h3>
                    </div>
                    <ul class="tags">
                        <li><a class="photo" href="category.html#">UNIKOM</a></li>
                        <li><a class="photo" href="category.html#">We share for baraya kampuser</a></li>
                        <li><a class="photo" href="category.html#">@infounikom</a></li>
                        <li><a class="photo" href="category.html#">Baraya Kampuser</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="widget">
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="active"><a href="index.html#tab-1" data-toggle="tab">latest</a></li>
                        <li><a href="index.html#tab-2" data-toggle="tab">popular</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-1">
                            <div class="news">
                                <?php foreach($news as $row): ?>
                                <div class="item">
                                    <h3><a href="index.html"><?php echo $row->nama_sub_kategori ?></a></h3>
                                    <p><?php echo Teraskampus::dateindo($row->waktu_post) ?> // <?php echo $row->nama_kategori ?> // <?php echo $row->username ?></p>
                                    <div class="clear"></div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="news">
                                <?php foreach($randnews as $row): ?>
                                <div class="item">
                                    <h3><a href="index.html"><?php echo $row->nama_sub_kategori ?></a></h3>
                                    <p><?php echo Teraskampus::dateindo($row->waktu_post) ?> // <?php echo $row->nama_kategori ?> // <?php echo $row->username ?></p>
                                    <div class="clear"></div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>  
</div>
<!-- end div #main -->