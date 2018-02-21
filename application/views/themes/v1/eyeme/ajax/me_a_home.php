<?php 

$imglist = json_decode($imglist);

	foreach($imglist->data as $k => $v){

		if(count($v->likes) > 0 ){

            foreach($v->likes as $a => $b){            
            $hasLike = ( $b->username == $this->session->member['username'] ? 1 : 0 );
            }

        }
        else{
            $hasLike = 0 ;
        }

?>	
    <div class="container eme-post-section">
        <div class="container emepost">
            <a href="<?php echo $v->url?>">
            <div class="img-usr">
                <img src="<?php echo urltoimgstore($v->url_pic)?>" alt="<?php echo $v->username?>">
            </div>
            <span><?php echo $v->username?></span>
            </a>
            <i class="material-icons more display-box-notif">more_horiz</i>
        </div>
        <div class="eme-img-content">
            <img src="<?php echo $v->url_img.'/medium'?>" alt="<?php echo $v->img_caption?>">
        </div>
        <div class="container-eme-like">
            <ul>
                <li>
                  
                    <a class="<?php ($hasLike == 1 ? 'like' : 'unlike')?>" ref="<?php echo substr($v->id,0,3)?>">
                        <img src="<?php echo MEMENU.($hasLike == 1 ? 'love-active.svg' : 'love.svg') ?>">
                    </a>
                    <span><?php echo count($v->likes)?></span>
                  

                    <a  class="com" ref="<?php echo substr($v->id,0,3)?>">
                        <img class="openComment" src="<?php echo base_url()?>assets/img/menu/eyeme/comment.svg" alt="">
                        <span><?php echo count($v->comments)?></span>
                    </a>

                    <div id="<?php echo substr($v->id,0,3)?>" class="loadcomment <?php echo substr($v->id,0,3)?>" action="eyeme" loading="off">
                        <input type="hidden" class="cinput" name="fn" value="gtcomment">
                        <input type="hidden" class="cinput" name="uid" value="<?php echo $v->id?>">

                    </div>
                    <div id="<?php echo substr($v->id,0,3)?>" class="loadlike <?php echo substr($v->id,0,3)?>" action="eyeme" loading="off">
                        <input type="hidden" class="cinput" name="fn" value="gtlike">
                        <input type="hidden" class="cinput" name="uid" value="<?php echo $v->id?>">
                      

                    </div>
                   
                </li>
            </ul>
        </div>
       
        <ul class="comment-eme">
            <li><span class="eme-time-post"><?php echo  getTime(getDistance(NOW,$v->last_update))['timeString']?></span></li>
        </ul>
    </div>

 <?php } ?>
 <script>
    $('a.com').click(function(){
        var ref =  $(this).attr('ref');
        ajaxOnLoad(ref);
    })
</script>