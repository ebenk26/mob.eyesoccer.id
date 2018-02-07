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
		<input type='hidden' name='fn' value='onelist' class='cinput'>
		<a href="enews-detail.html">
		<div class="container eyetube">
			<div class="v-eyetube">
				<img src="" alt="">
			</div>
			<span>30 menit lalu</span>
			<h1>Lorrem Ipsum solor sit ametLorem Ipsum Dolor Sit Amet</h1>
		</div>
		</a>
	</div>
    <div class="p-container tab2" style="padding-top: 0px;">
		<div id="reqtabnews" class='loadtabnews' action="eyenews" loading="off" clean="clstabnews">
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
					<div class="container rek-ber fafa">
						<div class="rek-ber-c">
							<div class="img-res-height">
                                <img src="" alt="">                                
                            </div>
							<span>17 Okt 2017 - 12.451</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
						<div class="rek-ber-c">
							<div class="img-res-height">
                                <img src="" alt="">                                
                            </div>
							<span>17 Okt 2017 - 12.45</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
						<div class="rek-ber-c">
							<div class="img-res-height">
                                <img src="" alt="">                                
                            </div>
							<span>17 Okt 2017 - 12.45</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
					</div>
				</div>
				<div id='tab-rekomendasi' class="box item">
					<div class="container rek-ber fafa">
						<div class="rek-ber-c">
							<div class="img-res-height">
                                <img src="" alt="">                                
                            </div>
							<span>17 Okt 2017 - 12.452</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
						<div class="rek-ber-c">
							<div class="img-res-height">
                                <img src="" alt="">                                
                            </div>
							<span>17 Okt 2017 - 12.45</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
						<div class="rek-ber-c">
							<div class="img-res-height">
                                <img src="" alt="">                                
                            </div>
							<span>17 Okt 2017 - 12.45</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
					</div>
				</div>
				<div id='tab-usiamuda' class="box item">
					<div class="container rek-ber fafa">
						<div class="rek-ber-c">
							<div class="img-res-height">
                                <img src="" alt="">                                
                            </div>
							<span>17 Okt 2017 - 12.453</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
						<div class="rek-ber-c">
							<div class="img-res-height">
                                <img src="" alt="">                                
                            </div>
							<span>17 Okt 2017 - 12.45</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
						<div class="rek-ber-c">
							<div class="img-res-height">
                                <img src="" alt="">                                
                            </div>
							<span>17 Okt 2017 - 12.45</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
	<!-- EYENEWS VIDEO -->
    <div class="container" style="margin-top: 0px !important; background-color: #fafafa;">
        <h3 class="h3-red">VIDEO</h3>
        <div class="carousel slide t-30 over-x">
            <div role="listbox" class="carousel-inner w-max">
                <div class="box item active no-decoration">
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
						<input type='hidden' name='fn' value='list_tube_eyenews' class='cinput'>
						<a href="enews-detail.html">
							<div class="video-thumb">
								<div class="v-thumb-img">
									<img src="" alt="">
								</div>
								<h2>Lorem Ipsum Dolor Sit Amet</h2>
								<span>2 jam lalu</span>
							</div>
						</a>
						<a href="enews-detail.html">
							<div class="video-thumb">
								<div class="v-thumb-img">
									<img src="" alt="">
								</div>
								<h2>Lorem Ipsum Dolor Sit AmetLorem Ipsum Dolor Sit AmetLorem Ipsum Dolor Sit Amet</h2>
								<span>2 jam lalu</span>
							</div>
						</a>
						<a href="enews-detail.html">
							<div class="video-thumb">
								<div class="v-thumb-img">
									<img src="" alt="">
								</div>
								<h2>Lorem Ipsum Dolor Sit Amet</h2>
								<span>2 jam lalu</span>
							</div>
						</a>
						<a href="enews-detail.html">
							<div class="video-thumb">
								<div class="v-thumb-img">
									<img src="" alt="">
								</div>
								<h2>Lorem Ipsum Dolor Sit Amet</h2>
								<span>2 jam lalu</span>
							</div>
						</a>
						<a href="enews-detail.html">
							<div class="video-thumb">
								<div class="v-thumb-img">
									<img src="" alt="">
								</div>
								<h2>Lorem Ipsum Dolor Sit Amet</h2>
								<span>2 jam lalu</span>
							</div>
						</a>
					</div>
                </div>
            </div>
        </div>
    </div>