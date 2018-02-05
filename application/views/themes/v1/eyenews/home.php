<nav>
    <i id="menu" class="material-icons f-l">menu</i>
    <img src="https://www.eyesoccer.id/img/logo2.png" alt="">
    <i id="src" class="material-icons f-r">search</i>
</nav>
    <!-- TRENDING --> 
    <div class="trending">
        <div id="reqtrend" class='loadtrend' action="eyenews" loading="off" clean="clstrend">
			<div id='clstrend'>
				<script>
					$(document).ready(function(){
						$(window).on('load',function(){
							ajaxOnLoad('loadtrend');
						});
					});
				</script>
			</div>
			<input type='hidden' name='fn' value='trending' class='cinput'>
			<span class="x-c">
				<span>Trending</span>
				<x class="m-l-100"></x>
				<a href="">Choirul Huda</a>
				<a href="">IndonesiaU-19</a>
				<a href="">Egy Maulana Vikri</a>
				<a href="">Persib</a>
				<a href="">Liga2</a>
				<a href="">Liga Santri Nusantara</a>
				<a href="">Liga Champion</a>
				<a href="">Liga1</a>
			</span>
		</div>
    </div>
    <!-- EYENEWS -->
	<div id="reqonelist" class='loadonelist' action="eyenews" loading="off" clean="clsonelist">
		<div id='clsonelist'>
			<script>
				$(document).ready(function(){
					$(window).on('load',function(){
						ajaxOnLoad('loadonelist');
					});
				});
			</script>
		</div>
		<a href="enews-detail.html">
		<div class="container eyetube">
			<div class="v-eyetube">
				<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
			</div>
			<span>30 menit lalu</span>
			<h1>Lorrem Ipsum solor sit ametLorem Ipsum Dolor Sit Amet</h1>
		</div>
		</a>
	</div>
    <!-- EYENEWS VIDEO -->
    <div class="container" style="margin-top: -35px !important; background-color: #fafafa;">
        <h3 class="h3-red">VIDEO</h3>
        <div class="carousel slide t-30 over-x">
            <div role="listbox" class="carousel-inner w-max">
                <div class="box item active no-decoration">
                    <a href="enews-detail.html">
                        <div class="video-thumb">
                            <div class="v-thumb-img">
                                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
                            </div>
                            <h2>Lorem Ipsum Dolor Sit Amet</h2>
                            <span>2 jam lalu</span>
                        </div>
                    </a>
                    <a href="enews-detail.html">
                        <div class="video-thumb">
                            <div class="v-thumb-img">
                                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
                            </div>
                            <h2>Lorem Ipsum Dolor Sit AmetLorem Ipsum Dolor Sit AmetLorem Ipsum Dolor Sit Amet</h2>
                            <span>2 jam lalu</span>
                        </div>
                    </a>
                    <a href="enews-detail.html">
                        <div class="video-thumb">
                            <div class="v-thumb-img">
                                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
                            </div>
                            <h2>Lorem Ipsum Dolor Sit Amet</h2>
                            <span>2 jam lalu</span>
                        </div>
                    </a>
                    <a href="enews-detail.html">
                        <div class="video-thumb">
                            <div class="v-thumb-img">
                                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
                            </div>
                            <h2>Lorem Ipsum Dolor Sit Amet</h2>
                            <span>2 jam lalu</span>
                        </div>
                    </a>
                    <a href="enews-detail.html">
                        <div class="video-thumb">
                            <div class="v-thumb-img">
                                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
                            </div>
                            <h2>Lorem Ipsum Dolor Sit Amet</h2>
                            <span>2 jam lalu</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="p-container tab2">
		<div id="reqtabnews" class='loadtabnews' action="home" loading="off" clean="clstabnews">
			<div id='clstabnews'>
				<script>
					$(document).ready(function(){
						$(window).on('load',function(){
							ajaxOnLoad('loadtabnews');
						});
					});
				</script>
			</div>
			<input type='hidden' name='fn' value='tabnews' class='cinput'>

				<span id='tab-populer' onclick="tabmenu(this.id, 'orange-active')" class="orange-active">terpopuler</span>
				<span id='tab-rekomendasi' onclick="tabmenu(this.id, 'orange-active')">rekomendasi</span>
				<span id='tab-usiamuda' onclick="tabmenu(this.id, 'orange-active')">usia muda</span>
			
			<hr>
			<div role="listbox" class="carousel-inner">                    
				<div id='tab-populer' class="box item active">
					<div class="container rek-ber">
						<div class="rek-ber-c">
							<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
							<span>17 Okt 2017 - 12.451</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
						<div class="rek-ber-c">
							<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
							<span>17 Okt 2017 - 12.45</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
						<div class="rek-ber-c">
							<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
							<span>17 Okt 2017 - 12.45</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
					</div>
				</div>
				<div id='tab-rekomendasi' class="box item">
					<div class="container rek-ber">
						<div class="rek-ber-c">
							<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
							<span>17 Okt 2017 - 12.452</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
						<div class="rek-ber-c">
							<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
							<span>17 Okt 2017 - 12.45</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
						<div class="rek-ber-c">
							<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
							<span>17 Okt 2017 - 12.45</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
					</div>
				</div>
				<div id='tab-usiamuda' class="box item">
					<div class="container rek-ber">
						<div class="rek-ber-c">
							<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
							<span>17 Okt 2017 - 12.453</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
						<div class="rek-ber-c">
							<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
							<span>17 Okt 2017 - 12.45</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
						<div class="rek-ber-c">
							<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
							<span>17 Okt 2017 - 12.45</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
					</div>
				</div>
			</div>
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
        <a href="eprofile.html"><img src="../assets/img/ic_eyeprofile.png" alt="">Eye Profile</a>
        <a href="etube.html"><img src="../assets/img/ic_eyetube.png" alt="">Eye Tube</a>
        <a href="enews.html"><img src="../assets/img/ic_eyenews.png" alt="">Eye News</a>
        <a href="eyeme.html"><img src="../assets/img/ic-eyeme.png" alt="">Eye Me</a>
        <a href=""><img src="../assets/img/ic_eyemarket.png" alt="">Eye Market</a>
        <a href=""><img src="../assets/img/ic_eyevent.png" alt="">Eye Vent</a>
        <span>kategori</span>
        <a href="enews-kategori.html">LIGA</a>
        <a href="enews-kategori.html">PEMBINAAN</a>
        <a href="enews-kategori.html">UMPAN LAMBUNG</a>
        <a href="enews-kategori.html">PREDIKSI</a>
        <a href="enews-kategori.html">PERISTIWA</a>
        <a href="enews-kategori.html">SOCCER SAINS</a>
        <a href="enews-kategori.html">ULAS TUNTAS</a>
        <a href="enews-kategori.html">SOCCER SERI</a>
        <a href="enews-kategori.html">PINGGIR LAPANGAN</a>
    </div>
    <script src="assets/js/home.js"></script>
    <script>
    var orangeActive = document.getElementsByClassName("orange-active")[0];
    var disableOrangeActive = document.getElementsByClassName("disable-orange-active")[0];
    disableOrangeActive.onclick = function() {
        orangeActive.style.color = "unset !important";
        orangeActive.style.borderBottom = "unset !important";
        disableOrangeActive.style.color = "#FF5722";
        disableOrangeActive.style.border = "#FF5722";
    }
    orangeActive.onclick = function() {
        orangeActive.style.color = "unset";
        orangeActive.style.borderBottom = "unset";
    }
    window.onload = function(){
        orangeActive.style.color = "#FF5722";
        orangeActive.style.borderBottom = "4px solid #FF5722";
    }
    </script>
    </body>
</html>