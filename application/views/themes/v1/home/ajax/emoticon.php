<?php 
	$folder = $this->config->item('themes');
	if($emoticon)
	{
		$emoticon = json_decode($emoticon);
		$dt = $emoticon->data;
		// print_r ($dt);echo $type;exit();
		if($type == 'proud'){
?>
				<input type='hidden' name='fn' value='set_emot' class='cinput'>
				<input type='hidden' name='channel' value='eyenews' class='cinput'>
				<input type='hidden' name='type' value='proud' class='cinput'>
				<input type='hidden' name='id' value='<?php echo $dt->id;?>' class='cinput'>
				<div class="img-box">
					<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/bangga.png" alt="">
				</div>
				<span><?php echo $dt->news_proud;?></span>
				<span>bangga</span>
<?php
		}else if($type == 'inspired'){
?>
				<input type='hidden' name='fn' value='set_emot' class='cinput'>
				<input type='hidden' name='channel' value='eyenews' class='cinput'>
				<input type='hidden' name='type' value='inspired' class='cinput'>
				<input type='hidden' name='id' value='<?php echo $dt->id;?>' class='cinput'>
				<div class="img-box">
					<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/bingung.png" alt="">
				</div>
				<span><?php echo $dt->news_inspired;?></span>
				<span>terinspirasi</span>
<?php
		}else if($type == 'happy'){
?>
				<input type='hidden' name='fn' value='set_emot' class='cinput'>
				<input type='hidden' name='channel' value='eyenews' class='cinput'>
				<input type='hidden' name='type' value='happy' class='cinput'>
				<input type='hidden' name='id' value='<?php echo $dt->id;?>' class='cinput'>
				<div class="img-box">
					<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/gembira.png" alt="">
				</div>
				<span><?php echo $dt->news_happy;?></span>
				<span>gembira</span>
<?php
		}else if($type == 'sad'){
?>
				<input type='hidden' name='fn' value='set_emot' class='cinput'>
				<input type='hidden' name='channel' value='eyenews' class='cinput'>
				<input type='hidden' name='type' value='sad' class='cinput'>
				<input type='hidden' name='id' value='<?php echo $dt->id;?>' class='cinput'>
				<div class="img-box">
					<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/sedih.png" alt="">
				</div>
				<span><?php echo $dt->news_sad;?></span>
				<span>sedih</span>
<?php
		}else if($type == 'angry'){
?>
				<input type='hidden' name='fn' value='set_emot' class='cinput'>
				<input type='hidden' name='channel' value='eyenews' class='cinput'>
				<input type='hidden' name='type' value='angry' class='cinput'>
				<input type='hidden' name='id' value='<?php echo $dt->id;?>' class='cinput'>
				<div class="img-box">
					<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/suka.png" alt="">
				</div>
				<span><?php echo $dt->news_angry;?></span>
				<span>marah</span>
<?php
		}else if($type == 'fear'){
?>
				<input type='hidden' name='fn' value='set_emot' class='cinput'>
				<input type='hidden' name='channel' value='eyenews' class='cinput'>
				<input type='hidden' name='type' value='fear' class='cinput'>
				<input type='hidden' name='id' value='<?php echo $dt->id;?>' class='cinput'>
				<div class="img-box">
					<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/takut.png" alt="">
				</div>
				<span><?php echo $dt->news_fear;?></span>
				<span>takut</span>
<?php
		}else if($type == 'fun'){
?>
				<input type='hidden' name='fn' value='set_emot' class='cinput'>
				<input type='hidden' name='channel' value='eyenews' class='cinput'>
				<input type='hidden' name='type' value='fun' class='cinput'>
				<input type='hidden' name='id' value='<?php echo $dt->id;?>' class='cinput'>
				<div class="img-box">
					<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/terhibur.png" alt="">
				</div>
				<span><?php echo $dt->news_fun;?></span>
				<span>terhibur</span>
<?php
		}else if($type == 'shock'){
?>
				<input type='hidden' name='fn' value='set_emot' class='cinput'>
				<input type='hidden' name='channel' value='eyenews' class='cinput'>
				<input type='hidden' name='type' value='shock' class='cinput'>
				<input type='hidden' name='id' value='<?php echo $dt->id;?>' class='cinput'>
				<div class="img-box">
					<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/terkejut.png" alt="">
				</div>
				<span><?php echo $dt->news_shock;?></span>
				<span>terkejut</span>
<?php
		}
	}
?>