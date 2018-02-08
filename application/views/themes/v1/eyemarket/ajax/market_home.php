<?php 
	foreach ($prodlist as $value)
	{
?>
		<div class="ribbon new">
		    <div class="theribbon">Available Soon</div>
		    <div class="ribbon-background"></div>
		</div>
		<div class="box-img">
	        <img src="<?= MARKETIMG."".$value["image1"]; ?>" alt="<?= $value["nama"]; ?>" class="emarket-product">
	        <h1><?= $value["nama"]; ?></h1>
	        <button type="text" class="pagination-green-btn m-0 block">Lihat Detail</button>
	    </div>
<?php
	}
?>