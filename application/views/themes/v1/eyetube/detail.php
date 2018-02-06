<nav>
    <i id="menu" class="material-icons f-l">menu</i>
    <img src="https://www.eyesoccer.id/img/logo2.png" alt="">
    <i id="src" class="material-icons f-r">search</i>
</nav>
<!-- EYETUBE -->
<div class="container eyetube" style="margin-top:47px;">
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
        <input type='hidden' name='fn' value='detail_tube' class='cinput'>
        <input type='hidden' name='slug' value='<?= $slug; ?>' class='cinput'>
        <video width="100%" height="" controls></video>
        <div class="etube-v-title-mobile">
            <h1>Lorrem Ipsum solor sit amet</h1><i class="heightControl2 material-icons arrow-right-etube">arrow_drop_up</i><i class="material-icons arrow-right-etube heightControl">arrow_drop_down</i>
            <span>30 menit lalu - oleh Rendy - 300 kali diputar</span>
            <div class="container deskripsi">
                <p>Deskripsi Lorrem Ipsum solor sit amet Lorrem Ipsum solor sit amet Lorrem Ipsum solor sit amet</p>
            </div>
            <div class="container ">
                
            </div>
            <div class="tx-c etube-share">
                <!-- <i class="fa fa-heart-o heart-first" aria-hidden="true"> 23</i> -->
                <i class="fas fa-heart heart-first" aria-hidden="true"><span>3</span></i>
                <i class="far fa-comment openComment" aria-hidden="true"><span>333</span></i>
                <i class="far fa-paper-plane" aria-hidden="true"><span>33</span></i>
                <!-- <i class="material-icons more display-box-notif">more_horiz</i> -->
            </div>
        </div>
    </div>
    
    <div class="container-94 m-b-20 unset">
        <span class="up-next-etube">Next</span>
        <a href="/">
        <div class="etube-content etube-content-detail pd-t-10">
            <div class="v-etube v-etube-detail">
                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
            </div>
            <h1>Lorem Ipsum Dolor Sit amet</h1>
            <span>30 menit lalu</span>
            <span>2000 view - 100 suka</span>
        </div>
        </a>
        <a href="/">
        <div class="etube-content etube-content-detail">
            <div class="v-etube v-etube-detail">
                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
            </div>
            <h1>Lorem Ipsum Dolor Sit amet Lorem Ipsum Dolor Sit amet</h1>
            <span>30 menit lalu</span>
            <span>2000 view - 100 suka</span>
        </div>
        </a>
        <a href="/">
        <div class="etube-content etube-content-detail">
            <div class="v-etube v-etube-detail">
                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
            </div>
            <h1>Lorem Ipsum Dolor Sit amet</h1>
            <span>30 menit lalu</span>
            <span>2000 view - 100 suka</span>
        </div>
        </a>
        <a href="/">
        <div class="etube-content etube-content-detail">
            <div class="v-etube v-etube-detail">
                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
            </div>
            <h1>Lorem Ipsum Dolor Sit amet</h1>
            <span>30 menit lalu</span>
            <span>2000 view - 100 suka</span>
        </div>
        </a>
        <a href="/">
        <div class="etube-content etube-content-detail">
            <div class="v-etube v-etube-detail">
                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
            </div>
            <h1>Lorem Ipsum Dolor Sit amet</h1>
            <span>30 menit lalu</span>
            <span>2000 view - 100 suka</span>
        </div>
        </a>
        <a href="/">
        <div class="etube-content etube-content-detail">
            <div class="v-etube v-etube-detail">
                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
            </div>
            <h1>Lorem Ipsum Dolor Sit amet</h1>
            <span>30 menit lalu</span>
            <span>2000 view - 100 suka</span>
        </div>
        </a>
    </div>
</div>
<!-- KOMENTAR -->
<div class="container-comment">
    <span class="up-next-etube" style="padding-left: 10px;">Komentar</span> <span id="close" class="up-next-etube" style="float:right; padding-right: 10px;"><i class="material-icons">close</i></span>
    <div class="fb-comments" data-href="<?=base_url();?><?=$_SERVER['REQUEST_URI']?>" data-numposts="5"></div>
    <!-- <div class="box-komentar">
        <div class="img-radius">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" width="100%">
        </div>
        <div class="input-komentar">
            <input type="text" placeholder="Tambahkan Komentar ...">
        </div>
    </div>
    <div class="item-komentar">
        <div class="img-radius">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" width="100%">
        </div>
        <div class="text-komentar">
            <p>Ini komentar komentar para nitijen</p>
            <h3>ini nama yg komentar</h3>
            <span>30 menit lalu</span>
        </div>
    </div>
    <div class="item-komentar">
        <div class="img-radius">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" width="100%">
        </div>
        <div class="text-komentar">
            <p>Ini komentar komentar para nitijen Ini komentar komentar para nitijen Ini komentar komentar para nitijen Ini komentar komentar para nitijen</p>
            <h3>ini nama yg komentar</h3>
            <span>30 menit lalu</span>
        </div>
    </div>
    <div class="item-komentar">
        <div class="img-radius">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" width="100%">
        </div>
        <div class="text-komentar">
            <p>Ini komentar komentar para nitijen Ini komentar komentar para nitijen</p>
            <h3>ini nama yg komentar</h3>
            <span>30 menit lalu</span>
        </div>
    </div>
    <div class="item-komentar">
        <div class="img-radius">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" width="100%">
        </div>
        <div class="text-komentar">
            <p>Ini komentar komentar para nitijen</p>
            <h3>ini nama yg komentar</h3>
            <span>30 menit lalu</span>
        </div>
    </div> -->
</div>
<footer>
    <p>Copyright 2017 eyesoccer.com. All Rights Reserved.</p>
</footer>
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