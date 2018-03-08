    <?php
        if($news)
        {
            $news = json_decode($news);
            foreach($news->data as $dt)
            {
                ?>
                    <a href="<?php echo base_url()."eyenews/detail/".$dt->slug; ?>" title="<?php echo $dt->title; ?>"><?php echo word_limiter($dt->title, 3); ?></a>
                <?php
            }
        }
    ?>