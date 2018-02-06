<?php
    if ($tube)
    {
        $tube  = json_decode($tube);
?>
            <video width="100%" height="" controls poster="<?= $tube->data->url_thumb; ?>">
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
                    <!-- <i class="fa fa-heart-o heart-first" aria-hidden="true"> 23</i> -->
                    <i class="fas fa-heart heart-first" aria-hidden="true"> 
                        <span><?= $tube->data->tube_view; ?></span> 
                    </i>
                    <i class="far fa-comment openComment" aria-hidden="true"> 
                        <span>333</span> 
                    </i>
                    <i class="far fa-paper-plane" aria-hidden="true"> 
                        <span>33</span> 
                    </i>
                    <!-- <i class="material-icons more display-box-notif">more_horiz</i> -->
                </div>
            </div>
<?php
    }
?>

