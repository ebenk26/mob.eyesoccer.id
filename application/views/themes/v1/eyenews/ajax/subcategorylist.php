<?php
    if ($subcatlist){
	$subcatlist = json_decode($subcatlist);
	$newslistcat = json_decode($newslistcat);
?>	
		<!-- <div class="container xc">
			<table>
				<tr>
					<td>
						<div class="cat-x">
							<ul>
								<li>
									<button onclick="dd()" style="padding-right: 30px;">
										<?php echo $slug?>
										<?php if(!empty($subcatlist->data)){?><i class="material-icons" style="position: absolute;top: 5px;right: 10px;">arrow_drop_down</i><?php } ?>
									</button>
									<ul id="ddcl" style="height: auto;">
		<?php
										foreach($subcatlist->data as $dt)
										{
		?>
											<li>
												<a href="<?php echo base_url().'eyenews/kategori/'.$slug.'/'.$dt->sub_category_name?>"><?php echo $dt->sub_category_name; ?></a>
											</li>
		<?php
										}
		?>
									</ul>
								</li>
							</ul>
						</div>
					</td>
					<td class="container over-x" style="max-width: 90vw !important;height: max-content;margin-bottom: -23px;">
						<div class="trend w-max" style="margin-top: 7px;">
						<?php
							foreach($newslistcat->data as $dt)
							{
?>
								<a style="font-size: 10px" href="<?php echo base_url()."eyenews/detail/".$dt->slug; ?>" title="<?php echo $dt->title; ?>"><?php echo word_limiter($dt->title, 3); ?></a>
<?php
							}
		?>
						</div>
					</td>
				</tr>
			</table>
		</div> -->
		<div class="container top-menu-ketegori over-x" style="margin-top: 10px;">
        <div class="w-max">
			<a href="<?php echo base_url();?>eyenews/kategori/Di Pinggir Lapangan">Di Pinggir Lapangan</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Liga">LIGA</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Pembinaan">Pembinaan</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Peristiwa">Peristiwa</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Prediksi">Prediksi</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Soccer Sains">Soccer Sains</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Soccer Seri">Soccer Seri</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Tulisan Kamu">Tulisan Kamu</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Ulas Tuntas">Ulas Tuntas</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Umpan Lambung">Umpan Lambung</a>
        </div>
    </div>
<?php
	}
?>



<?php
    // if ($subcatlist){
	// $subcatlist = json_decode($subcatlist);
// ?>	
	<!-- <div class="crumb">
	<div class="container" style="text-align: center;background-color: #fafafa;"> -->
<?php
	// foreach($subcatlist->data as $dt)
	// {
	    // ?>
			<!-- <span class="subcategorylist"><a href="<?php // echo base_url().'eyenews/kategori/'.$slug.'/'.$dt->sub_category_name?>"><?php // echo $dt->sub_category_name; ?></a></span> -->
		
<?php
	// }
// ?>
	<!-- </div>
	</div> -->
<?php
    // }
?>