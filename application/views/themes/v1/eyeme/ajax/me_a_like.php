
<?php 
$query = $res->query;
$data  = $res->data;?>
<a class="like" ref="<?php echo substr($query->id,0,3).'lk'?>"> 
	<img src="<?php echo MEMENU.'love-active.svg' ?>">
	<span><?php echo $data->like?></span>
</a>