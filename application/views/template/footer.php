<div class="footer-top">
    <div class="logo">
        <a href="index.html"><img src="<?php echo base_url() ?>mhs/img/ogol.png" alt=""></a>
        <span class="border-bottom"></span>
    </div>
    <div class="widget first">
        <div class="desc">
            <p align="justify">Begitu banyak tipe followers, ada yang bodor, ada yang serius, ada yang komentar terus, tapi tidak apa-apa, kami cinta followers apa adanya Kami memiliki perjanjian, jika sudah lulus nanti kami akan menampakkan diri kepada Baraya Kampuser. Maka dari itu, doakan saja kami cepat lulus</p>
        </div>
        <ul class="info">
            <li class="mail"><a href="mailto:redaksi@infounikom.com">redaksi@infounikom.com</a></li>
            <li class="mail"><a href="mailto:admin@infounikom.com">admin@infounikom.com</a></li>
        </ul>
    </div>
    <div class="widget">
        <div class="title">
            <h3>berita terakhir</h3>
        </div>
        <?php foreach($news as $row): ?>
        <div class="news">
            <article class="twoboxes">
                <div class="post-thumb">
                    <a href="blog-single.html"><img src="<?php echo base_url() ?>pict/kategori/<?php echo $row->pict ?>" alt=""></a>
                    <div class="overlay">
                        <div class="op"></div>
                        <div class="cat">
                            <div class="icon"></div>
                        </div>
                    </div>
                </div>
                <div class="right-desc">
                    <h3><a href="index.html#"><?php echo $row->nama_sub_kategori ?></a></h3>
                    <div class="clear"></div>
                    <p class="date"><?php echo $row->waktu_post ?></p>    
                </div>
                <div class="clear"></div>
            </article>
        </div>
        
    <?php endforeach; ?>
    </div>
    <div class="widget last">
        <div class="title">
            <h3>terpopuler</h3>
        </div>
        <?php foreach($randnews as $row): ?>
        <div class="news">
            <article class="twoboxes">
                <div class="post-thumb">
                    <a href="blog-single.html"><img src="pict/kategori/<?php echo $row->pict ?>" alt=""></a>
                    <div class="overlay">
                        <div class="op"></div>
                        <div class="cat">
                            <div class="icon"></div>
                        </div>
                    </div>
                </div>
                <div class="right-desc">
                    <h3><a href="index.html#"><?php echo $row->nama_sub_kategori ?></a></h3>
                    <div class="clear"></div>
                    <p class="date"><?php echo $row->waktu_post ?></p>    
                </div>
                <div class="clear"></div>
            </article>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="clear"></div>
</div>
<div class="footer-bottom">
    <div class="copyright">
        <p>Copyright 2013 @ <span>WEB9RAPH</span></p>
    </div>
    <div class="clear"></div>
</div>