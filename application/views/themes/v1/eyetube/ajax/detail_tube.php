<style>
    #st-1 .st-total > span.st-shares {
        all: inherit;
        font-size: 9px;
        line-height: 9px;
    }
    #st-1 .st-total > span {
        all: unset;
        font-size: 16px;
        line-height: 17px;
        display: block;
        padding: 0;
    }
</style>
<?php $folder = $this->config->item('themes'); ?>
<?php
    if ($tube)
    {
        $tube  = json_decode($tube);
?>	
			<input id="eyetube_id" type="hidden" value="<?php echo $tube->data->id;?>">
            <video controlsList="nodownload" width="100%" height="" controls poster="<?= $tube->data->url_thumb; ?>/medium">
                <source src="<?= $tube->data->url_video; ?>" type="video/mp4">
            </video>
            <div class="etube-v-title-mobile">
                <h1><?= $tube->data->title; ?></h1> 
                    <!-- <i class="heightControl2 material-icons arrow-right-etube">arrow_drop_up</i> 
                    <i class="material-icons arrow-right-etube heightControl">arrow_drop_down</i> -->
                <span><?php echo relative_time($this->library->datenormal($tube->data->createon)); ?> lalu - oleh <?= $tube->data->fullname; ?> - <?= $tube->data->tube_view; ?> kali diputar</span>
				
                <div class="kolom-share">
                    <div class="sharethis-inline-share-buttons" data-url="<?php echo $tube->data->share_url;?>"></div>
					<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5a81408ae45fbb001342fedf&product=inline-share-buttons"></script>
                </div>
				
                <div class="container deskripsi">
                    <p><?= $tube->data->description; ?></p>
                </div>
                
                <!-- <div class="tx-c etube-share">
                    <i id='reqsetlike' class="fas fa-heart heart-first form_post" aria-hidden="true" action="ajax">
                        <input type='hidden' name='fn' value='set_like' class='cinput'>
                        <input type='hidden' name='id' value='<?= $tube->data->id; ?>' class='cinput'> 
                        <input type='hidden' name='kanal' value='eyetube' class='cinput'> 
                        <input type='hidden' name='slug' value='<?= $slug; ?>' class='cinput'> 
                        <span class="likethis"><?= $tube->data->tube_like; ?></span> 
                    </i>
                    <i class="far fa-comment openComment" aria-hidden="true"> 
                        <span style="visibility: hidden;">333</span> 
                    </i>
                    <i class="far fa-paper-plane" aria-hidden="true" id="btn-share" style="visibility: hidden;"> 
                        <span>33</span> 
                    </i>
                    <i class="material-icons more display-box-notif">more_horiz</i>
                </div> -->

            </div>
			<!-- EMOTICON -->
				<div class="container-94" style="background-color: white;padding: 10px 0px 20px;">
					<div class="col-3 col-emoji">
						<a class="emoticon" type_emot="proud">
							<div class="img-box">
								<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/bangga.png" alt="">
							</div>
							<div style="text-align: center;" class="replace_proud"><?php echo $tube->data->tube_fun;?></div>
							<div style="text-align: center;" >bangga</div>
						</a>
					</div>
					<div class="col-3 col-emoji">
						<a class="emoticon" type_emot="inspired">
							<div class="img-box">
								<img style="margin-top:  -6px;" src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/bingung.png" alt="">
							</div>
							<div style="text-align: center;" class="replace_inspired"><?php echo $tube->data->tube_inspired;?></div>
							<div style="text-align: center;">terinspirasi</div>
						</a>
					</div>
					<div class="col-3 col-emoji">
						<a class="emoticon" type_emot="happy">
							<div class="img-box box-img-90">
								<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/gembira.png" alt="">
							</div>
							<div style="text-align: center;" class="replace_happy"><?php echo $tube->data->tube_happy;?></div>
							<div style="text-align: center;">gembira</div style="text-align: center;">
						</a>
					</div>
					<div class="col-3 col-emoji">
						<a class="emoticon" type_emot="sad">
							<div class="img-box">
								<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/sedih.png" alt="">
							</div>
							<div style="text-align: center;" class="replace_sad"><?php echo $tube->data->tube_inspired;?></div>
							<div style="text-align: center;">sedih</div style="text-align: center;">
						</a>
					</div>
					<div class="col-3 col-emoji">
						<a class="emoticon" type_emot="angry">
							<div class="img-box">
								<img style="margin-top:  -6px;" src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/suka.png" alt="">
							</div>
							<div style="text-align: center;" class="replace_angry"><?php echo $tube->data->tube_angry;?></div>
							<div style="text-align: center;">marah</div style="text-align: center;">
						</a>
					</div>
					<div class="col-3 col-emoji">
						<a class="emoticon" type_emot="fear">
							<div class="img-box">
								<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/takut.png" alt="">
							</div>
							<div style="text-align: center;" class="replace_fear"><?php echo $tube->data->tube_fear;?></div>
							<div style="text-align: center;">takut</div>
						</a>
					</div>
					<div class="col-3 col-emoji">
						<a class="emoticon" type_emot="fun">
							<div class="img-box">
								<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/terhibur.png" alt="">
							</div>
							<div style="text-align: center;" class="replace_fun"><?php echo $tube->data->tube_fun;?></div>
							<div style="text-align: center;">terhibur</div style="text-align: center;">
						</a>
					</div>
					<div class="col-3 col-emoji">
						<a class="emoticon" type_emot="shock">
							<div class="img-box">
								<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/terkejut.png" alt="">
							</div>
							<div style="text-align: center;" class="replace_shock"><?php echo $tube->data->tube_shock;?></div>
							<div style="text-align: center;">terkejut</div style="text-align: center;">
						</a>
					</div>
				</div>
            <div class="container-94 m-b-20 unset">
                <span class="up-next-etube">Video <?= $tube->data->category_name; ?> Lainnya</span>
                <?php
                    foreach ($tube->data->related_tube as $value)
                    {
                ?>
                        <a href="<?php echo base_url();?>eyetube/detail/<?= $value->slug; ?>">
                            <div class="etube-content etube-content-detail pd-t-10">
                                <div class="v-etube v-etube-detail">
                                    <img src="<?= $value->url_thumb; ?>/small" alt="">
                                </div>
                                <h1><?= $value->title; ?></h1>
                                <span><?php echo relative_time($this->library->datenormal($value->createon)); ?> lalu</span>
                                <span><?= $value->tube_view; ?> view - <?= $value->tube_like; ?> suka</span>
                            </div>
                        </a>
                <?php        
                    }
                ?>
            </div>
			<script>
				$(document).ready(function(){
					$(".fb-comments").attr("data-href","<?php echo $tube->data->share_url;?>");
					$(".emoticon").click(function(){
						console.log($(this).attr("type_emot"));
						id = $("#eyetube_id").val();
						tipe = $(this).attr("type_emot");
						link = "eyetube";
						tbl         = "tbl_eyetube";
						kanal       = "eyetube";
						sub_field   = "tube_";

						$.ajax({

						type: "POST",
						data: { 'type': tipe, 'id': id, 'link': link, 'tbl': tbl, 'kanal': kanal, 'sub_field': sub_field, 'select_id': 'eyetube_id' },
						url: "<?=base_url()?>home/set_emot/" + id,
						dataType: "json",

						success: function (data) {
							if(data.html){
								$(".replace_"+tipe).empty().html(data.html);
							}
						}

						});
					})
				});
			</script>
<?php
    }
?>