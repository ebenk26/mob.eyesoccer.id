 <div class="container" style="margin-top: 50px;margin-bottom: 50px;">
    <?php 
    //p($res);
       foreach($res->data as $k => $v){
            if(count($v->likes) > 0 ){
                foreach($v->likes as $a => $b){            
                $hasLike = ( $b->username == $this->session->member['username'] ? 1 : 0 );
                }

            }
            else{
                $hasLike = 0 ;
            }

        ?>
        <div class="container">
            <div class="container emepost">
                <div class="img-usr">
                    <img src="<?php echo urltoimgstore($v->url_pic)?>" alt="<?php echo $v->username?>">
                </div>
                <span><?php echo $v->username?></span>
                <i class="material-icons more display-box-notif">more_horiz</i>
            </div>
            <div class="eme-img-content">
               <img src="<?php echo urltobetame($v->url_img)?>" alt="<?php echo $v->img_caption?>">
            </div>
            <div class="container-eme-like">
                <ul>
                    <li>
                        <img src="<?php echo MEMENU.($hasLike == 1 ? 'love-active.svg' : 'love.svg') ?>">
                        <span><?php echo count($v->likes)?></span>
                    </li>
                  
                </ul>
            </div>
            <ul class="comment-eme">
                
                <li><span class="eme-time-post"><?php echo getTime(getDistance(NOW,$v->last_update))['timeString']?></span></li>
            </ul>
        </div>
    <?php } ?>

</div>