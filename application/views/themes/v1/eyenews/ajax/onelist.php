<?php
if ($list){
	$list = json_decode($list);
	foreach($list->data as $dt)
	{
?>
		<a href="<?php echo $this->library->urltomob($dt->url);?>">
			<div class="container eyetube">
				<div class="v-eyetube">
					<img src="<?php echo $dt->url_pic;?>" alt="">
				</div>
				<span><?php echo relative_time($this->library->datenormal($dt->createon))." lalu"?></span>
				<h1><?php echo $dt->title;?></h1>
			</div>
		</a>
<?php
	}
}
?>