<?php
	if($detailclub)
	{
		$detailclub = json_decode($detailclub);
		$dt = $detailclub->data;
?>
		<div class="head">
			<div class="img-radius">
				<img src="<?php echo $dt->url_logo;?>"
					alt="">
			</div>
			<h2 class="h2-text-bottom"><?php echo $dt->name;?></h2>
			<div class="container tab-eprofile">
				<a class="active" href="#content1">Info</a>
			</div>
			<div class="table-scroll">
				<table class="content-tab-eprofile">
					<tr>
						<td>Julukan</td>
						<td>: <?php echo $dt->nickname;?></td>
					</tr>
					<tr>
						<td>Tanggal Berdiri</td>
						<td>: <?php echo $dt->establish_date;?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>: <?php echo strip_tags($dt->address);?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>: <?php echo $dt->email;?></td>
					</tr>
					<tr>
						<td>Website</td>
						<td>: <?php echo $dt->website;?></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="container">
			<div class="container sub-menu boxtab">
				<a id="tab-pemain" href="javascript:void(0)" class="active" onclick="tabmenu(this.id, 'a', 'div', 'active')" active="true">Pemain</a>
				<a id="tab-ofisial" href="javascript:void(0)" onclick="tabmenu(this.id, 'a', 'div', 'active')">Ofisial</a>
				<a id="tab-suporter" href="javascript:void(0)" onclick="tabmenu(this.id, 'a', 'div', 'active')">suporter</a>
			</div>
		</div>
		<div id="tab-pemain" class="container">
			<?php
				foreach($dt->players as $players){
			?>
			<div class="user-data">
				<div class="subhead">
					<div class="img-radius">
						<img src="<?php echo $players->url_pic;?>" alt="<?php echo $players->name;?>">
					</div>
					<b># <?php echo $players->number;?></b>
					<h3><?php echo $players->name;?></h3>
					<span><?php echo $players->club;?></span>
				</div>
				<table>
					<tr>
						<td>Posisi 1</td>
						<td><?php echo $players->position_a;?></td>
					</tr>
					<tr>
						<td>Posisi 2</td>
						<td><?php echo $players->position_b;?></td>
					</tr>
				</table>
				<a href="<?php echo base_url();?>eyeprofile/pemain_detail/<?php echo $players->slug;?>">lihat detail pemain</a>
			</div>
		</div>
<?php
			}
			?>
			<div id="tab-ofisial" class="container">
			<div class="user-data">
				<div class="subhead">
					<div class="img-radius">
						<img src="<?php echo $players->url_pic;?>" alt="<?php echo $players->name;?>">
					</div>
					<b># <?php echo $players->number;?></b>
					<h3><?php echo $players->name;?></h3>
					<span><?php echo $players->club;?></span>
				</div>
				<table>
					<tr>
						<td>bbbbb</td>
						<td><?php echo $players->position_a;?></td>
					</tr>
					<tr>
						<td>Posisi 2</td>
						<td><?php echo $players->position_b;?></td>
					</tr>
				</table>
				<a href="<?php echo base_url();?>eyeprofile/pemain_detail/<?php echo $players->slug;?>">lihat detail pemain</a>
			</div>
		</div>
		
		<div id="tab-suporter" class="container">
			<div class="user-data">
				<div class="subhead">
					<div class="img-radius">
						<img src="<?php echo $players->url_pic;?>" alt="<?php echo $players->name;?>">
					</div>
					<b># <?php echo $players->number;?></b>
					<h3><?php echo $players->name;?></h3>
					<span><?php echo $players->club;?></span>
				</div>
				<table>
					<tr>
						<td>ccccc</td>
						<td><?php echo $players->position_a;?></td>
					</tr>
					<tr>
						<td>Posisi 2</td>
						<td><?php echo $players->position_b;?></td>
					</tr>
				</table>
				<a href="<?php echo base_url();?>eyeprofile/pemain_detail/<?php echo $players->slug;?>">lihat detail pemain</a>
			</div>
		</div>
			<?php
	}
?>