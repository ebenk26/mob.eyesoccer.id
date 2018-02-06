<nav>
    <i id="menu" class="material-icons f-l">menu</i>
    <img src="https://www.eyesoccer.id/img/logo2.png" alt="">
    <i id="src" class="material-icons f-r">search</i>
</nav>

<!-- EYETUBE -->
<div id="reqtube" class='loadtube' action="eyetube" loading="off" clean="clstube">
    <div id='clstube'>
        <script>
            $(document).ready(function(){
                $(window).on('load',function(){
                    ajaxOnLoad('loadtube');
                });
            });
        </script>
    </div>
    <input type='hidden' name='fn' value='list_tube' class='cinput'>
    <div class="etube-home">
        <a href="etube-detail.html">
            <div class="etube-mobile-thumb">
                <div class="img" style="background-color: #f2f2f2;">
                    <!-- <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">                 -->
                </div>
                <span class="kategori" style="visibility: hidden;">Liga Indonesia</span>
                <h2 style="visibility: hidden;">title Video title Video title Video title Video title Video</h2>
                <span style="visibility: hidden;">2 jam lalu - 123 view</span>
            </div>
        </a>
        <a href="etube-detail.html">
            <div class="etube-mobile-thumb">
                <div class="img" style="background-color: #f2f2f2;">
                    <!-- <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">                 -->
                </div>
                <span class="kategori" style="visibility: hidden;">Liga Indonesia</span>
                <h2 style="visibility: hidden;">title Video title Video title Video title Video title Video</h2>
                <span style="visibility: hidden;">2 jam lalu - 123 view</span>
            </div>
        </a>
        <a href="etube-detail.html">
            <div class="etube-mobile-thumb">
                <div class="img" style="background-color: #f2f2f2;">
                    <!-- <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">                 -->
                </div>
                <span class="kategori" style="visibility: hidden;">Liga Indonesia</span>
                <h2 style="visibility: hidden;">title Video title Video title Video title Video title Video</h2>
                <span style="visibility: hidden;">2 jam lalu - 123 view</span>
            </div>
        </a>
        <a href="etube-detail.html">
            <div class="etube-mobile-thumb">
                <div class="img" style="background-color: #f2f2f2;">
                    <!-- <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">                 -->
                </div>
                <span class="kategori" style="visibility: hidden;">Liga Indonesia</span>
                <h2 style="visibility: hidden;">title Video title Video title Video title Video title Video</h2>
                <span style="visibility: hidden;">2 jam lalu - 123 view</span>
            </div>
        </a>
    </div>
</div>

<!-- FOOTER -->
<footer>
    <p>Copyright 2017 eyesoccer.com. All Rights Reserved.</p>
</footer>
<!-- SEARCHBOX -->
<div id="srcbox" class="searchbox">
    <input type="text" placeholder="cari apa hari ini?"><button id="srcSub" type="submit">Cari</button>
    <div class="close">
    </div>
</div>
<!-- MENU -->
<div id="xMenu" class="menu menu-ketegori">
    <div class="m-top">
        <span class="m-log" href=""><i class="material-icons xClose">clear</i></span>
        <a class="m-reg" href=""><i class="material-icons">input</i>Login</a>
    </div>
    <span>kanal</span>
    <a href="eprofile.html"><img src="<?php echo SUBCDN."assets/$folder"; ?>img/ic_eyeprofile.png" alt="">Eye Profile</a>
    <a href="<?= base_url(); ?>eyetube"><img src="<?php echo SUBCDN."assets/$folder"; ?>img/ic_eyetube.png" alt="">Eye Tube</a>
    <a href="enews.html"><img src="<?php echo SUBCDN."assets/$folder"; ?>img/ic_eyenews.png" alt="">Eye News</a>
    <a href="eyeme.html"><img src="<?php echo SUBCDN."assets/$folder"; ?>img/ic-eyeme.png" alt="">Eye Me</a>
    <a href=""><img src="<?php echo SUBCDN."assets/$folder"; ?>img/ic_eyemarket.png" alt="">Eye Market</a>
    <a href=""><img src="<?php echo SUBCDN."assets/$folder"; ?>img/ic_eyevent.png" alt="">Eye Vent</a>
    <span>kategori</span>
    <a href="<?= base_url(); ?>eyetube/kategori/Eye-Soccer-Fact">EYESOCCER FACT</a>
    <a href="<?= base_url(); ?>eyetube/kategori/Eye-Soccer-Flash">EYESOCCER FLASH</a>
    <a href="<?= base_url(); ?>eyetube/kategori/Eyesoccerpedia">EYESOCCER PEDIA</a>
    <a href="<?= base_url(); ?>eyetube/kategori/Match-Preview">MATCH PREVIEW</a>
    <a href="<?= base_url(); ?>eyetube/kategori/Eye-Soccer-Hits">EYESOCCER HITS</a>
    <a href="<?= base_url(); ?>eyetube/kategori/Profile-SSB">PROFILE SSB</a>
    <a href="<?= base_url(); ?>eyetube/kategori/Eyesoccer-Star">EYESOCCER STAR</a>
    <a href="<?= base_url(); ?>eyetube/kategori/Eye-Soccer-Funny">EYESOCCER FUNNY</a>
    <a href="<?= base_url(); ?>eyetube/kategori/SSB-/-Akademi">SSB AKADEMI</a>
    <a href="<?= base_url(); ?>eyetube/kategori/VIDEO-KAMU">VIDEO KAMU</a>
    <a href="<?= base_url(); ?>eyetube/kategori/Highlight">HIGHLIGHT</a>
</div>
<!-- MENU BOTTOM EYETUBE -->
<!-- <div class="menu-bottom-etube">
    <i class="material-icons">home</i>
    <i class="material-icons">grade</i>
    <i class="material-icons">grade</i>
    <i class="material-icons">grade</i>
</div> -->
<div class="box-notif">
    <div class="box-notif-content">
        <a href="">Tambahkan ke</a>
        <a href="">Laporkan</a>
    </div>
</div>