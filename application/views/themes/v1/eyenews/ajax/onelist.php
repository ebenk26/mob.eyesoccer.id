<?php
if ($list){
	$list = json_decode($list);
	$i = 1;
	foreach($list->data as $dt)
	{
		if($i == 1){
?>
			<a href="<?php echo base_url()."eyenews/detail/".$dt->slug;?>">
				<div class="container eyetube" style="height: 220px;">
					<div class="v-eyetube">
						<img src="<?php echo $dt->url_pic;?>" alt="">
					</div>
					<span><?php echo relative_time($this->library->datenormal($dt->createon))." lalu"?></span>
					<h1><?php echo $dt->title;?></h1>
				</div>
			</a>
			<div class="container news-headline" style="margin-bottom: 10px;top: unset;">
				<ul>
							<li><a href="http://m.eyesoccer.id/eyenews/detail/pembagian-hak-siar-di-serie-a-akan-berdampak-pada-kenaikan-kualitas-setiap-klub-5c2abc7"><p>Pembagian Hak Siar di Serie A, Akan Berdampak Pada Kenaikan Kualitas Setiap Klub</p></a></li>
							<li><a href="http://m.eyesoccer.id/eyenews/detail/inter-membantah-berita-mengenai-laporan-hutangnya-yang-besar-add0007"><p>Inter Membantah Berita Mengenai Laporan Hutangnya yang Besar</p></a></li>
							<li><a href="http://m.eyesoccer.id/eyenews/detail/panpel-sikapi-rekor-penonton-di-piala-afc-saat-persija-vs-tampines-rovers-4d7199a"><p>Panpel Sikapi Rekor Penonton di Piala AFC Saat Persija vs Tampines Rovers</p></a></li>
						</ul>
			</div>
			<span id='tab-populer' class="orange-active" active="true" style="bottom: 0;color: #FF5722;margin: 5px;font-weight: 600;">Terkini</span>
<?php
		}else{
		?>
			<div>
				<a href="<?php echo $this->library->urltomob($dt->url); ?>" title="<?php echo $dt->title; ?>">
						<div class="rek-ber-c home-rek-ber-c">
							<div class="img-res-height" style="margin-top: 0;">
								<img src="<?php echo $dt->url_pic; ?>" alt="<?php echo $dt->title; ?>">
							</div>
							<!-- <span style="position: unset;"><?php echo relative_time($this->library->datenormal($dt->publish_on)); ?> lalu</span> -->
							<h1 style="bottom: 0;padding: unset;text-shadow: unset;"><?php echo $dt->title; ?></h1>
							<!-- <p><?php echo word_limiter(strip_tags($dt->description), 10); ?></p> -->
						</div>
				</a>
			</div>
		<?php
		}
		$i++;
	}
}
?>