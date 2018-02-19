<?php
    if ($homenewslist){
	$homenewslist = json_decode($homenewslist);
	$i = 1;
	foreach($homenewslist->data as $dt)
	{
		if($i == 1){
		?>
			<a href="<?php echo $this->library->urltomob($dt->url); ?>" title="<?php echo $dt->title; ?>">
				<div class="v-eyetube">
					<img src="<?php echo $dt->url_pic; ?>" alt="<?php echo $dt->title; ?>">
				</div>
				<span style="padding-bottom: 0;margin-bottom: 0;"><?php echo relative_time($this->library->datenormal($dt->publish_on)); ?> lalu</span>
				<h1 style="padding-top: 0;margin-top: -5px;"><?php echo $dt->title; ?></h1>
				<span id='tab-populer' class="orange-active" active="true" style="bottom: -15px;color: #FF5722;left: -2.5%;margin-top: -40px;font-size: 1em;">Terkini</span>
			</a>
		<?php
		}else{
		?>
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
		<?php
		}
		$i++;
	}
    }
?>