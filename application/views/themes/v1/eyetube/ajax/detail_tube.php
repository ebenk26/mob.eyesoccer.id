<?php
    if ($tube)
    {
        $tube  = json_decode($tube);
?>
            <video width="100%" height="" controls poster="<?= $tube->data->url_thumb; ?>/medium">
                <source src="<?= $tube->data->url_video; ?>" type="video/mp4">
            </video>
            <div class="etube-v-title-mobile">
                <h1><?= $tube->data->title; ?></h1> 
                    <!-- <i class="heightControl2 material-icons arrow-right-etube">arrow_drop_up</i> 
                    <i class="material-icons arrow-right-etube heightControl">arrow_drop_down</i> -->
                <span><?php echo relative_time($this->library->datenormal($tube->data->createon)); ?> lalu - oleh <?= $tube->data->fullname; ?> - <?= $tube->data->tube_view; ?> kali diputar</span>
                <div class="container deskripsi">
                    <p><?= $tube->data->description; ?></p>
                </div>
                <div class="container ">
                    
                </div>
                <div class="tx-c etube-share">
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
                    <!-- <i class="material-icons more display-box-notif">more_horiz</i> -->
                </div>

                <div class="kolom-share">
                    <div class="sharethis-inline-share-buttons" data-image="<?=base_url()?>systems/eyetube_storage/"></div>
                    <script type='text/javascript'
                    src="<?=base_url()?>assets/js/sharethis.js#property=596cf64cb69de60011989f08&product=inline-share-buttons"
                    async='async'></script>
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
<?php
    }
?>