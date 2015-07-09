<!-- nyobaan -->
<div class="cn_wrapper">
    <div id="cn_preview" class="cn_preview">  
        <?php 
            $i=1;
            foreach($sortir as $row ):
        ?>
        <div class="cn_content" <?php if ($i==1) { echo 'style="top:0px;"'; }?>>
            <img src="<?php echo base_url().'pict/teraskampus/'.$row->pict ?>" >
            <div class="caption">
                <h3><a href="<?php echo base_url().'teraskampus/detail/'.$row->id_sub_teraskampus ?>"><?php echo $row->nama_sub_teraskampus; ?></a></h3>
                <p>
                    <?php 
                        $content = htmlentities(substr($row->deskripsi,0,150));
                        echo "$content ...";
                        echo $i;
                    ?>
                    <a href="<?php echo base_url().'teraskampus/detail/'.$row->id_sub_teraskampus ?>">See Detail</a>
                </p>
                <div class="date">
                    <P>info<br><span>UNIKOM</span></P>
                </div>
            </div>
        </div>
        <?php 
            $i++; 
            endforeach;
        ?>
    </div>
    <div id="cn_list" class="cn_list">
        <div class="cn_page" style="display:block;">
            <?php 
                $n=1;
                foreach($sortir as $row ):
            ?>
            <div class="cn_item <?php if ($n==1) { echo 'selected'; } ?>">
                <div class="left-box">
                    <img src="<?php echo base_url().'pict/teraskampus/'.$row->pict ?>" width="89" height="44" alt="">
                </div>
                <div class="right-box">
                    <h4><?php echo $row->nama_sub_teraskampus; ?></h4>
                    <p><?php echo Main::dateindo($row->waktu_post) ?></p>
                </div>
                <div class="clear"></div>
            </div>
            <?php 
            /*
            <div class="cn_item last">
                <div class="left-box">
                    <img src="<?php echo base_url() ?>mhs/img/slider-thumb-4.jpg" alt="">
                </div>
                <div class="right-box">
                    <h4>Kristen Stewart's Bella Swan voted Britain's favourite</h4>
                    <p>15 Comments // 12 March</p>
                </div>
                <div class="clear"></div>
            </div>
            */
            ?>
            <?php 
                $n++;
                endforeach; 
            ?>
        </div>
    </div>
</div>
<!-- beres nyobaan -->

<!-- start slider -->
<?php 
/*
<div class="cn_wrapper">
    <div id="cn_preview" class="cn_preview">
        <div class="cn_content bg-1" style="top:0px;">
            <div class="caption">
                <h3><a href="blog-single.html">The Hangover 3: The Trilogy Finale Teaser Trailer Leaked Online</a></h3>
                <p>Ever since the first ‘The Hangover’ movie (which also had an equally amazing movie trailer), people across the country have been enamored by the magic of black-out drinking...</p>
                <div class="date">
                    <P>12<br><span>March</span></P>
                </div>
            </div>
        </div>
        <div class="cn_content bg-2">
            <div class="caption">
                <h3><a href="blog-single.html">The Hangover 3: The Trilogy Finale Teaser Trailer Leaked Online</a></h3>
                <p>Ever since the first ‘The Hangover’ movie (which also had an equally amazing movie trailer), people across the country have been enamored by the magic of black-out drinking...</p>
                <div class="date">
                    <P>12<br><span>March</span></P>
                </div>
            </div>
        </div>
        <div class="cn_content bg-3">
            <div class="caption">
                <h3><a href="blog-single.html">The Hangover 3: The Trilogy Finale Teaser Trailer Leaked Online</a></h3>
                <p>Ever since the first ‘The Hangover’ movie (which also had an equally amazing movie trailer), people across the country have been enamored by the magic of black-out drinking...</p>
                <div class="date">
                    <P>12<br><span>March</span></P>
                </div>
            </div>
        </div>
        <div class="cn_content bg-4">
            <div class="caption">
                <h3><a href="blog-single.html">The Hangover 3: The Trilogy Finale Teaser Trailer Leaked Online</a></h3>
                <p>Ever since the first ‘The Hangover’ movie (which also had an equally amazing movie trailer), people across the country have been enamored by the magic of black-out drinking...</p>
                <div class="date">
                    <P>12<br><span>March</span></P>
                </div>
            </div>
        </div>
        <div class="cn_content bg-5">
            <div class="caption">
                <h3><a href="blog-single.html">The Hangover 3: The Trilogy Finale Teaser Trailer Leaked Online</a></h3>
                <p>Ever since the first ‘The Hangover’ movie (which also had an equally amazing movie trailer), people across the country have been enamored by the magic of black-out drinking...</p>
                <div class="date">
                    <P>12<br><span>March</span></P>
                </div>
            </div>
        </div>
    </div>
    <div id="cn_list" class="cn_list">
        <div class="cn_page" style="display:block;">
            <div class="cn_item selected">
                <div class="left-box">
                    <img src="<?php echo base_url() ?>mhs/img/slider-thumb-1.jpg" alt="">
                </div>
                <div class="right-box">
                    <h4>The Hangover 3: The Trilogy Finale Teaser Trailer Leaked Online</h4>
                    <p>15 Comments // 12 March</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="cn_item">
                <div class="left-box">
                    <img src="<?php echo base_url() ?>mhs/img/slider-thumb-2.jpg" alt="">
                </div>
                <div class="right-box">
                    <h4>Beyoncé and Adele to perform at Michelle Obama’s 50th?</h4>
                    <p>15 Comments // 12 March</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="cn_item">
                <div class="left-box">
                    <img src="<?php echo base_url() ?>mhs/img/slider-thumb-3.jpg" alt="">
                </div>
                <div class="right-box">
                    <h4>'Iron Man 3' Secrets Revealed: Robert Downey Jr. Explains It All</h4>
                    <p>15 Comments // 12 March</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="cn_item last">
                <div class="left-box">
                    <img src="<?php echo base_url() ?>mhs/img/slider-thumb-4.jpg" alt="">
                </div>
                <div class="right-box">
                    <h4>Kristen Stewart's Bella Swan voted Britain's favourite</h4>
                    <p>15 Comments // 12 March</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
*/
?>
<!-- end slider -->

<!-- start div #main -->
<div id="main">
    <div class="main-content">
        <div class="left-container">
            <div class="row-fluid">
                <div class="span1">
                    <div class="marked-title">
                        <h3>pengumuman kampus</h3>
                    </div>
                    <?php foreach($news as $row): ?>
                    <article class="small">
                        <div class="post-thumb">
                            <a href="blog-single.html"><img src="<?php echo base_url() ?>pict/kategori/<?php echo $row->pict ?>" alt=""></a>
                            <div class="overlay">
                                <div class="op"></div>
                                <div class="cat">
                                    <div class="icon"></div>
                                    world
                                </div>
                            </div>
                        </div>
                        <div class="cat-post-desc">
                            <p class="date"><?php echo Main::dateindo($row->waktu_post) ?></p>
                            <h3><a href="<?php echo base_url().'kategori/detail/'.$row->id_sub_kategori ?>"><?php echo $row->nama_sub_kategori ?></a></h3>
                        </div>
                    </article> 
                    <?php endforeach; ?>    
                </div>
            </div>
            <div class="row-fluid">              
                <div class="span2">
                    <div class="marked-title">
                        <h3>teras kampus</h3>
                    </div>
                    <?php foreach($terkam as $row): ?>
                    <article class="small">
                        <div class="post-thumb">
                            <a href="<?php echo base_url().'teraskampus/detail/'.$row->id_sub_teraskampus ?>"><img src="<?php echo base_url().'pict/teraskampus/'.$row->pict ?>" alt=""></a>
                            <div class="overlay">
                                <div class="op"></div>
                                <div class="cat">
                                    <div class="icon"></div>
                                    world
                                </div>
                            </div>
                        </div>
                        <div class="cat-post-desc">
                            <p class="date"><?php echo Main::dateindo($row->waktu_post) ?></p>
                            <h3><a href="<?php echo base_url().'teraskampus/detail/'.$row->id_sub_teraskampus ?>"><?php echo $row->nama_sub_teraskampus ?></a></h3>
                            <br />
                            <p>
                                <?php 
                                    $content = htmlentities(substr($row->deskripsi,0,80));
                                    echo "$content ...";
                                ?>
                                <a href="<?php echo base_url().'teraskampus/detail/'.$row->id_sub_teraskampus ?>">See Detail</a>
                            </p>
                            <?php 
                            /*
                            <ul class="rating calc">
                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                            </ul>
                            */ 
                            ?>
                        </div>
                    </article>
                    <?php endforeach; ?>   
                </div>
                <div class="span2">
                    <div class="marked-title">
                        <h3>event</h3>
                    </div>
                    <?php foreach($event as $row): ?>
                    <article class="border">
                        <div class="post-thumb">
                            <a href="blog-single.html"><img src="<?php echo base_url().'pict/event/'.$row->pict ?>" alt=""></a>
                            <div class="overlay">
                                <div class="op"></div>
                                <div class="cat">
                                    <div class="icon"></div>
                                    <?php echo $row->nama_sub_event ?>
                                </div>
                            </div>
                        </div>
                        <div class="cat-post-desc">
                            <h3><a href="<?php echo base_url().'event/detail/'.$row->id_sub_event ?>"><?php echo $row->nama_sub_event ?></a></h3>
                            <p class="date"><?php echo $row->lokasi .', '. Main::dateevent($row->tanggal).' || Start: '. $row->jam ?></p>
                            <p>Ever since the first ‘The Hangover’ movie (which also had an equally amazing movie trailer), people across the country have been enamored by the magic of black-out drinking...</p>
                        </div>
                    </article>
                    <?php endforeach; ?>

                    <?php foreach($nulaina as $row): ?>
                    <article class="twoboxes">
                        <div class="post-thumb">
                            <a href="blog-single.html"><img src="<?php echo base_url().'pict/event/'.$row->pict ?>" alt=""></a>
                            <div class="overlay">
                                <div class="op"></div>
                                <div class="cat">
                                    <div class="icon"></div>
                                </div>
                            </div>
                        </div>
                        <div class="right-desc">
                            <h3><a href="<?php echo base_url().'event/detail/'.$row->id_sub_event ?>"><?php echo $row->nama_sub_event ?></a></h3>
                            <div class="clear"></div>
                            <p class="date"><?php echo $row->lokasi .', '. Main::dateevent($row->tanggal).' || Start: '. $row->jam ?></p>
                            <p align="justify">
                                <?php 
                                    $content = htmlentities(substr($row->deskripsi,0,150));
                                    echo "$content ...";
                                ?>
                                <a href="<?php echo base_url().'event/detail/'.$row->id_sub_event ?>">See Detail</a>
                            </p>    
                        </div>
                        <div class="clear"></div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="row-fluid">
                <div class="marked-title">
                    <h3>Komunitas</h3>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span2">
                    <?php foreach($randko as $row): ?>
                    <article>
                        <div class="post-thumb">
                            <a href="blog-single.html"><img src="<?php echo base_url().'pict/komunitas/'.$row->logo ?>" alt=""></a>
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
                            <p class="date">
                                <?php echo '<a href='.$row->twitter.'>'.$row->twitter.'</a> // <a href='.$row->facebook.'>'.$row->facebook.'</a>' ?>
                            </p>
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
                </div>
                <div class="span2">
                    <?php foreach($subkom as $row): ?>
                    <article class="twoboxes">
                        <div class="post-thumb">
                            <a href="blog-single.html"><img src="<?php echo base_url().'pict/komunitas/'.$row->logo ?>" alt=""></a>
                            <div class="overlay">
                                <div class="op"></div>
                            </div>
                        </div>
                        <div class="right-desc">
                            <h3><a href="<?php echo base_url().'komunitas/detail/'.$row->id_sub_komunitas ?>"><?php echo $row->nama_sub_komunitas ?></a></h3>
                            <div class="clear"></div>
                            <p align="justify">
                                <?php 
                                    $content = htmlentities(substr($row->deskripsi_singkat,0,150));
                                    echo "$content ...";
                                ?>
                                <a href="<?php echo base_url().'komunitas/detail/'.$row->id_sub_komunitas ?>">See Detail</a>
                            </p>    
                        </div>
                        <div class="clear"></div>
                    </article>
                    <?php endforeach; ?>    
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="right-container">
            <div class="sidebar">
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
                                    <p><?php echo Main::dateindo($row->waktu_post) ?> // <?php echo $row->nama_kategori ?> // <?php echo $row->username ?></p>
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
                                    <p><?php echo Main::dateindo($row->waktu_post) ?> // <?php echo $row->nama_kategori ?> // <?php echo $row->username ?></p>
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
<!-- end main div -->