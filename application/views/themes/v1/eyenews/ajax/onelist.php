<?php
	if ($list)
	{
		$list = json_decode($list);
		$awal = json_decode($awal);
		$i = 1;

		foreach ($awal->data as $value)
		{
?>
			<a href="<?php echo base_url()."eyenews/detail/".$value->slug;?>">
				<div class="container eyetube etube-res" style="height: 185px;">
					<div class="v-eyetube" style="height: 185px;">
						<img src="<?php echo $value->url_pic;?>" alt="">
					</div>
					<span style="bottom: 75px;"><?php echo relative_time($this->library->datenormal($value->createon))." lalu"?></span>
					<h1  style="bottom: 70px;height: unset;"><?php echo $value->title;?></h1>
				</div>
			</a>
			<div class="container news-headline" style="margin-bottom: 10px;top: unset;">
				<ul>
					<?php 
						foreach ($list->data as $ls)
						{
					?>
							<li> 
								<a href="<?php echo base_url()."eyenews/detail/".$ls->slug;?>"> 
									<p><?php echo $ls->title;?></p> 
								</a> 
							</li>
					<?php 
						}
					?>
				</ul>
			</div>
			<span id='tab-populer' class="orange-active" active="true" style="bottom: 0;color: #FF5722;margin: 5px;font-weight: 600;">Terkini</span>
<?php
			break;
		}

		foreach ($awal->data as $value)
		{
			if ($i != 1)
			{
?>
				<div>
					<a href="<?php echo $this->library->urltomob($value->url); ?>" title="<?php echo $value->title; ?>">
							<div class="rek-ber-c home-rek-ber-c">
								<div class="img-res-height" style="margin-top: 0;">
									<img src="<?php echo $value->url_pic; ?>" alt="<?php echo $value->title; ?>">
								</div>
								<!-- <span style="position: unset;"><?php echo relative_time($this->library->datenormal($value->publish_on)); ?> lalu</span> -->
								<h1 style="bottom: 0;padding: unset;text-shadow: unset;overflow:unset;"><?php echo $value->title; ?></h1>
								<!-- <p><?php echo word_limiter(strip_tags($value->description), 10); ?></p> -->
							</div>
					</a>
				</div>
<?php				
			}
			$i++;	
		}
	}
?>