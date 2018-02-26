<?php
    if ($subcatlist){
	$subcatlist = json_decode($subcatlist);
?>	
	<div class="crumb">
<?php
	foreach($subcatlist->data as $dt)
	{
	    ?>
			<span><a href="<?php echo base_url().'eyenews/kategori/'.$slug.'/'.$dt->sub_category_name?>" style="display: unset"><?php echo $dt->sub_category_name; ?></a></span>
		
	    <?php
	}
?>
	</div>
<?php
    }
?>