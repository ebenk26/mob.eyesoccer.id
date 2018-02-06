<?php
if ($newscat){
	$newscat = json_decode($newscat);
	foreach($newscat->data as $dt)
	{
?>
		<a href="<?php echo base_url()?>"><?php echo $dt->news_type;?></a>
<?php
	}
}
?>