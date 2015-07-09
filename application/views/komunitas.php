<!-- start div #main-title -->
<div class="main-title">
    <p>Komunitas</p>
</div>
<!-- end div #main-title -->

<!-- start div #main -->
<div id="main">
    <div class="main-content">
    	<div class="left-container">
        	<div class="marked-title">
                <h3>All Komunitas</h3>
            </div>
            <div class="row-fluid">
                <div class="span">
                    <!--
                    <article>
                        <div class="post-thumb">
                            <a href="blog-single.html"><img src="img/cat-img-1.jpg" alt=""></a>
                            <div class="overlay">
                                <div class="op"></div>
                                <div class="cat">
                                    <div class="icon"></div>
                                    world
                                </div>
                            </div>
                            <ul class="rating calc">
                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                            </ul>
                        </div>
                        <div class="cat-post-desc">
                            <h3><a href="blog-single.html">The Hangover 3: The Trilogy Finale Teaser Trailer Leaked Online</a></h3>
                            <p class="date">12 march 2013  // 45 Comments</p>
                            <p>Ever since the first ‘The Hangover’ movie (which also had an equally amazing movie trailer), people across the country have been enamored by the magic of black-out drinking...</p>
                        </div>
                    </article>
                    -->

                    <!-- MIMITINA ANJING -->
                    <?php foreach($tampil as $row): ?>
                    <article class="small">
                        <div class="post-thumb">
                            <a href="<?php echo base_url().'komunitas/detail/'.$row->id_sub_komunitas ?>"><img src="<?php echo base_url().'pict/komunitas/'.$row->logo ?>" alt=""></a>
                            <div class="overlay">
                                <div class="op"></div>
                                <div class="cat">
                                    <div class="icon"></div>
                                    <?php echo $row->nama_sub_komunitas ?>
                                </div>
                            </div>
                        </div>
                        <div class="cat-post-desc">
                            <h3><a href="<?php echo base_url().'komunitas/detail/'.$row->id_sub_komunitas ?>"><?php echo $row->nama_sub_komunitas ?></a></h3>
                            <p>
                                <?php 
                                    $content = htmlentities(substr($row->deskripsi_singkat,0,150));
                                    echo "$content ...";
                                ?>
                                <a href="<?php echo base_url().'komunitas/detail/'.$row->id_sub_komunitas ?>">See Detail</a>
                            </p>

                        </div>
                    </article>
                    <?php endforeach; ?>
                    <!-- EUREUNNA ANJING -->   
                </div>
            </div>
            <div class="clear"></div>
            <!-- PAGING -->
            <?php 
            /*
            <div class="post-navi">
                <ul>
                    <li><a href="category.html">&lt;</a></li>
                    <li class="active"><a href="category.html">1</a></li>
                    <li><a href="category.html">2</a></li>
                    <li><a href="category.html">...</a></li>
                    <li><a href="category.html">42</a></li>
                    <li><a href="category.html">43</a></li>
                    <li><a href="category.html">&gt;</a></li>
                </ul>
            </div>
            */
            ?>
            <!-- EUREUNAN PAGING -->
        </div>
        <div class="right-container">
            <div class="sidebar">
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
                <?php 
                    if($this->session->userdata('username-mahasiswa') != null){
                ?>
                <div class="widget">
                    <div class="marked-title">
                        <h3>Buat Komunitas</h3>
                    </div>
                    <a href="<?php echo base_url() ?>komunitas/tambah">
                        <button class="btn btn-icon submit" type="submit"><span class="icon"></span>Buat Komunitas</button>
                    </a>
                    <div class="clear"></div>
                </div>
                <?php } ?>
                <div class="widget">
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
                        <li class="active"><a href="index.html#tab-1" data-toggle="tab">terakhir</a></li>
                        <li><a href="index.html#tab-2" data-toggle="tab">popular</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-1">
                            <div class="news">
                                <?php foreach($news as $row): ?>
                                <div class="item">
                                    <h3><a href="index.html"><?php echo $row->nama_sub_kategori ?></a></h3>
                                    <p><?php echo Komunitas::dateindo($row->waktu_post) ?> // <?php echo $row->nama_kategori ?> // <?php echo $row->username ?></p>
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
                                    <p><?php echo Komunitas::dateindo($row->waktu_post) ?> // <?php echo $row->nama_kategori ?> // <?php echo $row->username ?></p>
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