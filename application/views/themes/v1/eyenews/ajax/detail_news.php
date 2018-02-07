<?php $folder = $this->config->item('themes'); ?>
<?php
if ($newsdetail){
	$dt = json_decode($newsdetail);
	
?>
	<div class="container enews-detail">
		<h1><?php echo $dt->data->title;?></h1>
		<img src="<?php echo $dt->data->url_pic;?>" alt="<?php echo $dt->data->title;?>" width="100%">
		<div class="container profile-writer b-b-1">
			<div class="container">
				<div class="img-radius">
					<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
				</div>
				<h3><?php echo $dt->data->fullname;?></h3>
				<span><?php echo relative_time($this->library->datenormal($dt->data->publish_on)); ?> lalu - <?php echo $dt->data->news_like; ?> view</span>                
			</div>
			<div class="container tx-c share">
				<i class="fa fa-facebook" aria-hidden="true"></i>
				<i class="fa fa-twitter" aria-hidden="true"></i>
				<i class="fa fa-google-plus-official" aria-hidden="true"></i>
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
				<i class="fa fa-comment openComment" aria-hidden="false"><div class="openComment">16</div></i>
			</div>
		</div>
		<div class="container-94">
			<p style="margin-bottom: 50px;font-size: .9em;">
				<?php echo $dt->data->description;?>
			</p>
		</div>
		<!-- EMOTICON -->
		<div class="container-94" style="background-color: white;padding: 10px 0px 20px;">
			<div class="col-3 col-emoji">
				<a href="">
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/bangga.png" alt="">
					</div>
					<span><?php echo $dt->data->news_proud;?></span>
					<span>bangga</span>
				</a>
			</div>
			<div class="col-3 col-emoji">
				<a href="">
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/bingung.png" alt="">
					</div>
					<span><?php echo $dt->data->news_inspired;?></span>
					<span>terinspirasi</span>
				</a>
			</div>
			<div class="col-3 col-emoji">
				<a href="">
					<div class="img-box box-img-90">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/gembira.png" alt="">
					</div>
					<span><?php echo $dt->data->news_happy;?></span>
					<span>gembira</span>
				</a>
			</div>
			<div class="col-3 col-emoji">
				<a href="">
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/sedih.png" alt="">
					</div>
					<span><?php echo $dt->data->news_inspired;?></span>
					<span>sedih</span>
				</a>
			</div>
			<div class="col-3 col-emoji">
				<a href="">
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/suka.png" alt="">
					</div>
					<span><?php echo $dt->data->news_angry;?></span>
					<span>marah</span>
				</a>
			</div>
			<div class="col-3 col-emoji">
				<a href="">
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/takut.png" alt="">
					</div>
					<span><?php echo $dt->data->news_fear;?></span>
					<span>takut</span>
				</a>
			</div>
			<div class="col-3 col-emoji">
				<a href="">
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/terhibur.png" alt="">
					</div>
					<span><?php echo $dt->data->news_fun;?></span>
					<span>terhibur</span>
				</a>
			</div>
			<div class="col-3 col-emoji">
				<a href="">
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/terkejut.png" alt="">
					</div>
					<span><?php echo $dt->data->news_shock;?></span>
					<span>terkejut</span>
				</a>
			</div>
		</div>
	</div>
<?php
}
?>