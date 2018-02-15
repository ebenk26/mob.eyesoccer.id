<?php
if ($list){
	$list = json_decode($list);
	$i = 1;
	foreach($list->data as $dt)
	{
		if($i == 1){
?>
			<a href="<?php echo base_url()."eyenews/detail/".$dt->slug;?>">
				<div class="container eyetube">
					<div class="v-eyetube">
						<img src="<?php echo $dt->url_pic;?>" alt="">
					</div>
					<span><?php echo relative_time($this->library->datenormal($dt->createon))." lalu"?></span>
					<h1><?php echo $dt->title;?></h1>
				</div>
			</a>
			<span id='tab-populer' class="orange-active" active="true" style="bottom: 0;color: #FF5722;margin: 5px;">Terkini</span>
<?php
		}else{
		?>
			<div style="margin: 5px;">
				<a href="<?php echo $this->library->urltomob($dt->url); ?>" title="<?php echo $dt->title; ?>">
						<div class="rek-ber-c">
							<div class="img-res-height" style="margin-top: 0;">
								<img src="<?php echo $dt->url_pic; ?>" alt="<?php echo $dt->title; ?>">
							</div>
							<span style="position: unset;"><?php echo relative_time($this->library->datenormal($dt->publish_on)); ?> lalu</span>
							<h1 style="bottom: 0;padding: unset;"><?php echo $dt->title; ?></h1>
							<p><?php echo word_limiter(strip_tags($dt->description), 10); ?></p>
						</div>
				</a>
			</div>
		<?php
		}
		$i++;
	}
}
?>