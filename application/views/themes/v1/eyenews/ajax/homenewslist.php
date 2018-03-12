<?php
    if ($homenewslist){
	$homenewslist = json_decode($homenewslist);
	$i = 1;
	$n = 0;
	foreach($homenewslist->data as $dt)
	{
		if($i == 1){
		?>
		<div class="container">
			<a href="<?php echo $this->library->urltomob($dt->url); ?>" title="<?php echo $dt->title; ?>">
				<div class="container" style="margin-bottom: -20px;">
					<div class="v-eyetube">
						<img src="<?php echo $dt->url_pic; ?>" alt="<?php echo $dt->title; ?>">
					</div>
					<span style="padding-bottom: 0;margin-bottom: 0;margin-top: 0px;bottom: 82px;font-size: .6em;"><?php echo relative_time($this->library->datenormal($dt->publish_on)); ?> lalu</span>
					<h1 style="padding-top: 0;margin-top: -40px;bottom: 40px; height: unset; overflow: unset;"><?php echo $dt->title; ?></h1>
				</div>
			</a>
		</div>
			
			<div class="container news-headline" style="margin-bottom: unset;top: unset;">
				<ul>
		<?php
		}else if($i == 2 || $i == 3 || $i == 4){
		?>
					<li><a href="<?php echo $this->library->urltomob($dt->url); ?>"><p><?php echo $dt->title; ?></p></a></li>
		<?php
			if($i == 4){
		?>
				</ul>
			</div>
			<span id='tab-populer' class="orange-active tab-popular-custom-home" active="true" style="bottom: 0px;">Terkini</span>
		</div>
		<?php
			}
		}else{
		?>
			<a href="<?php echo $this->library->urltomob($dt->url); ?>" title="<?php echo $dt->title; ?>">
				<div class="rek-ber-c home-rek-ber-c">
					<div class="img-res-height" style="margin-top: 0;">
						<img style="margin: 0px;" src="<?php echo $dt->url_pic; ?>" alt="<?php echo $dt->title; ?>">
					</div>
					<!-- <span style="position: unset;"><?php echo relative_time($this->library->datenormal($dt->publish_on)); ?> lalu</span> -->
					<h1 style="bottom: 0;padding: unset;text-shadow: unset;font-weight: 400;height: 60px;font-size: .9em;"><?php echo $dt->title; ?></h1>
					<!-- <p><?php echo word_limiter(strip_tags($dt->description), 10); ?></p> -->
				</div>
			</a>
		<?php
		}
		$i++;
	}
    }
?>