<?php
    if ($subcatlist){
	$subcatlist = json_decode($subcatlist);
?>	
	<div class="crumb">
	<div class="container" style="text-align: center;background-color: #fafafa;">
<?php
	foreach($subcatlist->data as $dt)
	{
	    ?>
			<span class="subcategorylist"><a href="<?php echo base_url().'eyenews/kategori/'.$slug.'/'.$dt->sub_category_name?>"><?php echo $dt->sub_category_name; ?></a></span>
		
	    <?php
	}
?>
	</div>
	</div>
<?php
    }
?>