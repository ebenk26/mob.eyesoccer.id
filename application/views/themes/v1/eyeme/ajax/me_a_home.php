<?php 

$imglist = json_decode($imglist);


	foreach($imglist->data as $k => $v){
        $hasLike = 0 ;

		if(count($v->likes) > 0 ){
            #p($v->likes);

            foreach($v->likes as $a => $b){  
                if($b->username == $this->session->member['username']){
                    $hasLike  = 1;
                    break;
                }
            }
            
        }
       

?>	
    <div class="container eme-post-section">
        <?php echo '<br>'.@$mas;?>
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
                     <a class="like" ref="<?php echo substr($v->id,0,3).'lk'?>"> 
                      <span id="<?php echo substr($v->id,0,3).'clss'?>">
                           <script>console.log('<?php echo $hasLike?>')</script>
                                <img src="<?php echo MEMENU.($hasLike == 1 ? 'love-active.svg' : 'love.svg') ?>">
                                <span><?php echo count($v->likes)?></span>
                             
                            <span id="<?php echo substr($v->id,0,3).'lk'?>" class="<?php echo substr($v->id,0,3).'lk'?>" action="eyeme" loading="off">
                            <input type="hidden" class="cinput" name="fn" value="gtlike">
                            <input type="hidden" class="cinput" name="uid" value="<?php echo $v->id?>">
                            <input type="hidden" class="cinput" name="act" value="<?php echo $hasLike == 0 ? 'like' : 'unlike'?>">
                            <input type="hidden" class="cinput" name="clss" value="<?php echo substr($v->id,0,3).'clss'?>">

                             </span>
                        </span> 
                    </a>        

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

     $('a.like').click(function(){

        var ref = $(this).attr('ref');
        console.log(ref);
        ajaxOnLoad(ref);
    });
    
</script>