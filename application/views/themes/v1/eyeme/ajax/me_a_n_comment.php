<?php 

foreach($res->data as $k => $v){?>
    
    <div class="item-komentar">
        <div class="img-radius">
            <img src="<?php echo $v->url_pic.'/thumb'; ?>" alt="<?php echo $v->username?>" width="100%">
        </div>
        <div class="text-komentar">
            <p><?php echo $v->comment?></p>
            <h3><?php echo $v->username?></h3>
            <span><?php echo getTime(getDistance(NOW,$v->last_update))['timeString']?></span>
        </div>
    </div>

<?php }?>
