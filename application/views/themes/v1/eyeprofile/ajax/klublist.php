<?php if($klublist){
	$default = "http://static.eyesoccer.id/v1/cache/images/LOGO%20UNTUK%20APLIKASI.jpg/small";
	$klublist = json_decode($klublist);
	foreach($klublist->data as $dt){
?>
	<div class="klub-content">
		<div class="img-klub-content">
			<img src="<?php echo $this->library->lastext($dt->url_logo,'.') ? $dt->url_logo : $default;?>/small" alt="<?php echo $dt->name;?>" srcset="">
		</div>
		<h3 class="nama-klub"><?php echo $dt->name;?></h3>
	</div>
<?php 
	}
}?>