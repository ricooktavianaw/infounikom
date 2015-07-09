<!-- start div #main-title -->
<div class="main-title">
    <p>Tentang</p>
</div>
<!-- end div #main-title -->

<!-- start div #main -->
<div id="main">
    <div class="main-content">
    	<div class="left-container">
        	<article>
            	<div class="title-box">
                    <h1>Tentang InfoUnikom</h1>
                </div>
                <div class="post-thumb">
                	<img src="<?php echo base_url() ?>mhs/img/post-img-1.jpg" alt="">
                </div>
                <div class="post-info">
                    <ul>
                        <li>kategori<br><span>Tentang</span></li>
                        <li>author<br><span>administrator</span></li>
                    </ul>
                    <div class="clear"></div>    
                </div>
                <div class="post-content">
                    <p>@infounikom adalah media sharing antar mahasiswa kampus UNIKOM yang dibentuk pada tanggal 08 Juni 2011. Diawali dengan keisengan dan berujung kepada keseriusan, tiga founder @infounikom tersebut adalah mahasiswa tampan, cerdas, dan ceria dari Fakultas Teknik ******* (masih dirahasiakan) yang kemudian menjamur menjadi delapan admin tetap dari berbagai fakultas dan jurusan (masih dirahasiakan juga). </p>
                    <h3>Sapaan kepada followers, yaitu "Baraya Kampuser" yang artinya "Sahabat Kampus", menjadi ciri khas kami. </h3>
                    <p class="quote"><span class="icon"></span>Kami juga mempunyai beberapa tema sapaan, yakni dengan hashtag #SemangatPagi yang bertujuan memberi semangat pada Baraya Kampuser setiap paginya, #InfoUnikom ketika kami memberikan info seputaran UNIKOM, #AskBaraya ketika Baraya Kampuser ingin bertanya, #InfoAutodebet semua informasi tentang auto-debt, #ZodiakUnikom tema twittalk hiburan untuk Baraya Kampuser, #KulinerUnikom membahas tempat membeli makanan, minuman, dan tempat hangout yang enak-di perut-enak-di kantong, #UnikomTraveller berbagi informasi tentang tempat-tempat cucok untuk travelling, #TipsUnikom berbagi tips yang berguna bagi Baraya Kampuser, #UnikomHoror tema setiap dua minggu sekali di hari Kamis yang memberi informasi dan sharing pengalaman seputar hal gaib di sekitar kampus, #FridayMovie tema setiap hari Jumat yang mengulas seputar film yang recommended, #UnikomJomblo tema setiap dua minggu sekali di hari Sabtu dikhususkan bagi Baraya Kampuser yang jomblo akut, dan masih banyak lagi.</p>
                    <p>Sadar belum memberikan yang terbaik namun kami selalu berusaha menjadi sumber pemberi informasi yang terbaik dan tercepat kepada Baraya Kampuser sekalian. "Mimin", begitu Baraya Kampuser menyapa kami. Begitu banyak tipe followers, ada yang bodor, ada yang serius, ada yang komentar terus, tapi tidak apa-apa, kami cinta followers apa adanya Kami memiliki perjanjian, jika sudah lulus nanti kami akan menampakkan diri kepada Baraya Kampuser. Maka dari itu, doakan saja kami cepat lulus.</p>
                </div>
            </article>
            <div class="clear"></div>
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
                        <li class="active"><a href="index.html#tab-1" data-toggle="tab">latest</a></li>
                        <li><a href="index.html#tab-2" data-toggle="tab">popular</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-1">
                            <div class="news">
                                <?php foreach($news as $row): ?>
                                <div class="item">
                                    <h3><a href="index.html"><?php echo $row->nama_sub_kategori ?></a></h3>
                                    <p><?php echo Tentang::dateindo($row->waktu_post) ?> // <?php echo $row->nama_kategori ?> // <?php echo $row->username ?></p>
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
                                    <p><?php echo Tentang::dateindo($row->waktu_post) ?> // <?php echo $row->nama_kategori ?> // <?php echo $row->username ?></p>
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