<?php 
	foreach ($prodlist as $value)
	{
?>
			<a href="<?= base_url(); ?>eyemarket/detail/<?= $value["toko"]; ?>/<?= $value["title_slug"]; ?>">
				<div class="em-box-content">
					<div class="img-prod">
						<img src="<?= MARKETIMG."".$value["image1"]; ?>" alt="<?= $value["nama"]; ?>" style="width: 100%;">
					</div>
					<h1><?= $value["nama"]; ?></h1>
					<p class="prices" style="visibility:hidden;"> prices</p>
					<button type="text" class="beli">Available Soon</button>
				</div>
			</a>
<?php
	}
?>