<?php $folder = $this->config->item('themes'); ?>
<?php
if ($newsdetail){
	$dt = json_decode($newsdetail);
	$slug = $dt->data->slug;
	$subslug = $dt->data->sub_news_type;
?>
	<input id="catews" type="hidden" value="<?php echo $dt->data->news_type;?>">
	<input id="eyenews_id" type="hidden" value="<?php echo $dt->data->id;?>">
	<div class="container enews-detail">
		<h1><?php echo $dt->data->title;?></h1>
		<img src="<?php echo $dt->data->url_pic;?>" alt="<?php echo $dt->data->title;?>" width="100%">
		<div class="container profile-writer b-b-1">
			<div class="container">
				<div class="img-radius img-pp p-r">
					<img src="<?php echo imgEyesoccer();?>" alt="">
				</div>
				<h3><?php echo $dt->data->fullname;?></h3>
				<span><?php echo relative_time($this->library->datenormal($dt->data->publish_on)); ?> lalu - <?php echo $dt->data->news_like; ?> view</span>
				<i class="far fa-comment openComment" aria-hidden="false" style="color: #8ec429;float: right;margin-top: -35px;margin-right: 15px;font-size: 30px;"><div class="openComment"></div></i>
			</div>
			<div class="container tx-c share">
				<div class="sharethis-inline-share-buttons" data-url="<?php echo $dt->data->url;?>"></div>
				<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5a81408ae45fbb001342fedf&product=inline-share-buttons"></script>
			</div>
		</div>
		<div class="container-94">
			<p style="margin-bottom: 50px;font-size: .9em;">
				<?php echo $dt->data->description;?>
			</p>
		</div>
		<!-- EMOTICON -->
		<div class="container-94" style="background-color: white;padding: 10px 0px 20px;">
			<div class="col-3 col-emoji">
				<a class="emoticon" type_emot="proud">
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/bangga.png" alt="">
					</div>
					<span class="replace_proud"><?php echo $dt->data->news_proud;?></span>
					<span>bangga</span>
				</a>
			</div>
			<div class="col-3 col-emoji">
				<a class="emoticon" type_emot="inspired">
					<div class="img-box">
						<img style="margin-top:  -6px;" src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/bingung.png" alt="">
					</div>
					<span class="replace_inspired"><?php echo $dt->data->news_inspired;?></span>
					<span>terinspirasi</span>
				</a>
			</div>
			<div class="col-3 col-emoji">
				<a class="emoticon" type_emot="happy">
					<div class="img-box box-img-90">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/gembira.png" alt="">
					</div>
					<span class="replace_happy"><?php echo $dt->data->news_happy;?></span>
					<span>gembira</span>
				</a>
			</div>
			<div class="col-3 col-emoji">
				<a class="emoticon" type_emot="sad">
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/sedih.png" alt="">
					</div>
					<span class="replace_sad"><?php echo $dt->data->news_inspired;?></span>
					<span>sedih</span>
				</a>
			</div>
			<div class="col-3 col-emoji">
				<a class="emoticon" type_emot="angry">
					<div class="img-box">
						<img style="margin-top:  -6px;" src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/suka.png" alt="">
					</div>
					<span class="replace_angry"><?php echo $dt->data->news_angry;?></span>
					<span>marah</span>
				</a>
			</div>
			<div class="col-3 col-emoji">
				<a class="emoticon" type_emot="fear">
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/takut.png" alt="">
					</div>
					<span class="replace_fear"><?php echo $dt->data->news_fear;?></span>
					<span>takut</span>
				</a>
			</div>
			<div class="col-3 col-emoji">
				<a class="emoticon" type_emot="fun">
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/terhibur.png" alt="">
					</div>
					<span class="replace_fun"><?php echo $dt->data->news_fun;?></span>
					<span>terhibur</span>
				</a>
			</div>
			<div class="col-3 col-emoji">
				<a class="emoticon" type_emot="shock">
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/terkejut.png" alt="">
					</div>
					<span class="replace_shock"><?php echo $dt->data->news_shock;?></span>
					<span>terkejut</span>
				</a>
			</div>
		</div>
		<div class="container-94" style="background-color: white;padding: 10px 0px 20px;">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle"
			 style="display:block; text-align:center;"
			 data-ad-layout="in-article"
			 data-ad-format="fluid"
			 data-ad-client="ca-pub-7635854626605122"
			 data-ad-slot="7962156598"></ins>
		<script>
			 (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$(".fb-comments").attr("data-href","<?php echo $dt->data->url;?>");
			$(".emoticon").click(function(){
				console.log($(this).attr("type_emot"));
				id = $("#eyenews_id").val();
				tipe = $(this).attr("type_emot");
				link = "eyenews";
				tbl         = "tbl_eyenews";
				kanal       = "eyenews";
				sub_field   = "news_";

				$.ajax({

				type: "POST",
				data: { 'type': tipe, 'id': id, 'link': link, 'tbl': tbl, 'kanal': kanal, 'sub_field': sub_field, 'select_id': 'eyenews_id' },
				url: "<?=base_url()?>home/set_emot/" + id,
				dataType: "json",

				success: function (data) {
					$(".replace_"+tipe).empty().html(data.html);
				}

				});
			})
			
			$( ".crumb" ).html( "" );
			$( ".crumb" ).append( "<ul><li><a href='<?php echo base_url()?>' style='display: unset'>Home</a></li><li><a href='<?php echo base_url()?>eyenews' style='display: unset'>Eyenews</a></li><li><a href='<?php echo base_url()?>eyenews/kategori/<?php echo $dt->data->news_type?>' style='display: unset'><?php echo $dt->data->news_type?></a></li><li><a href='<?php echo base_url()?>eyenews/kategori/<?php echo $dt->data->news_type.'/'.$dt->data->sub_news_type?>' style='display: unset'><?php echo $dt->data->sub_news_type?></a></li>" );
		});
	</script>
<?php
}
?>