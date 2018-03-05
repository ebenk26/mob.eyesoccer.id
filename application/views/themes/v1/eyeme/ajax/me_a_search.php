<?php 
$res = json_decode($res);
if(count($res->data) > 0 ){

	echo '<div style="height: 300px">';
	foreach($res->data as $k => $v){?>
		<div class="pp">
			<a href="<?php echo MEPROFILE.$v->username?>"><img style="border-radius:100%;height: 50px;width: 50px" src="<?php echo $v->url_pic?>" onerror="this.src='<?php echo DPIC?>'"/><?php echo $v->username.'  ('.$v->name.')'?></a>
		</div>

		<?php 
	}
	echo '</div>';

}
else{?>
	
	Pengguna Tidak Ditemukan 

<?php }?>
