<?php 
$res = json_decode($res);
if(count($res->data) > 0 ){

	echo '<div style="height: 300px">';
	foreach($res->data as $k => $v){?>
		<div class="pp">
			<a href="<?php echo MEPROFILE.$v->username?>">
				<div class="pp-search">
					<img src="<?php echo $v->url_pic?>" onerror="this.src='<?php echo DPIC?>'"/>
				</div>
			<span class="container"><?php echo $v->username.'  ('.$v->name.')'?></span>
			</a>
		</div>

		<?php 
	}
	echo '</div>';

}
else{?>
	
	Pengguna Tidak Ditemukan 

<?php }?>
