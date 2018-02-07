<?php
if ($newsdetail){
	$newsdetail = json_decode($newsdetail);
	foreach($newsdetail->data->related_news as $dt)
	{
?>
	<div class="etube-content etube-content-detail pd-t-10">
		<div class="v-etube v-etube-detail">
			<img src="<?php echo $dt->url_pic.'/small';?>" alt="">
		</div>
		<h1><?php echo $dt->title;?></h1>
		<span><?php echo relative_time($this->library->datenormal($dt->publish_on)); ?> lalu</span>
		<span><?php echo $dt->news_view; ?> view</span>
	</div>
<?php
	}
}
?>