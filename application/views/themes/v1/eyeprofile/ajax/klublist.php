<?php if($klublist){
	$klublist = json_decode($klublist);
	foreach($klublist->data as $dt){
?>
	<div class="klub-content">
		<div class="img-klub-content">
			<img src="<?php echo $dt->url_logo;?>/small" alt="<?php echo $dt->name;?>" srcset="">
		</div>
		<h3 class="nama-klub"><?php echo $dt->name;?></h3>
	</div>
<?php 
	}
}?>