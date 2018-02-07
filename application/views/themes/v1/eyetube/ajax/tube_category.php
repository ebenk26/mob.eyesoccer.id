<div class="etube-home enews">
    <?php
        if ($tube)
        {
            $tube  = json_decode($tube);

            foreach ($tube->data as $value)
            {
    ?>
                <a href="<?php echo base_url();?>eyetube/detail/<?= $value->slug; ?>">
                    <div class="etube-mobile-thumb">
                        <img src="<?= $value->url_thumb; ?>/medium" alt="<?= $value->title; ?>" >
                        <div class="enews-title">
                            <h2><?= $value->title; ?></h2>
                            <span><?php echo relative_time($this->library->datenormal($value->createon)); ?> lalu - <?= $value->tube_view; ?> view</span>                
                        </div>
                    </div>
                </a>
    <?php
            }
        }
    ?>
    
</div>