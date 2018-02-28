<?php 

$imglist = json_decode($imglist);
	foreach($imglist->data as $k => $v){
        $hasLike = 0 ;

		if(count($v->likes) > 0 ){

            foreach($v->likes as $a => $b){  
                if($b->username == $this->session->member['username']){
                    $hasLike  = 1;
                    break;
                }
            }
            
        }
?>	
    <div class="container eme-post-section" xhide="true">
        <div class="container emepost">
            <a href="<?php echo $this->library->urltomob($v->url); ?>">
            <div class="img-usr">

                <img src="<?php echo $v->url_pic.'/thumb'; ?>" alt="<?php echo $v->username?>">

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
                            <img src="<?php echo MEMENU.($hasLike == 1 ? 'love-active.svg' : 'love.svg') ?>">
                            <span class="adbo"><?php echo ($v->likecount == 0 ? '' : $v->likecount)?></span>
                             
                            <span id="<?php echo substr($v->id,0,3).'lk'?>" class="<?php echo substr($v->id,0,3).'lk'?>" action="eyeme" loading="off">
                            <input type="hidden" class="cinput" name="fn" value="gtlike">
                            <input type="hidden" class="cinput" name="uid" value="<?php echo $v->id?>">
                            <input type="hidden" class="cinput" name="act" value="<?php echo $hasLike == 0 ? 'like' : 'unlike'?>">
                            <input type="hidden" class="cinput" name="clss" value="<?php echo substr($v->id,0,3).'clss'?>">

                             </span>
                        </span> 
                    </a>        

                    <a  class="com" val="<?php echo $v->id?>">
                        <img class="openComment" src="<?php echo base_url()?>assets/img/menu/eyeme/comment.svg" alt="">
                        <span class="adbo c<?php echo $v->id?>"><?php echo ($v->commentcount == 0 ? '' : $v->commentcount)?></span>
                    </a>

                    <div id="<?php echo substr($v->id,0,3)?>" class="<?php echo $v->id?>" action="eyeme" loading="off">
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
            <li><span class="eme-time-post">
                <?php  echo  getTime(getDistance(NOW,$v->last_update))['timeString']?>     
                </span>
            </li>
        </ul>
    </div>

 <?php } ?>
 <script>
    $('a.com').click(function(){
        //var ref =  $(this).attr('ref');
        var val =  $(this).attr('val');
        $('#cominput').attr('val',val);
        $('#cominput').attr('test');
        console.log(val);
        ajaxOnLoad(val);
    })

     $('a.like').click(function(){

        var ref = $(this).attr('ref');
        ajaxOnLoad(ref);
    });
    $('.form_keyup').keypress(function(event) {
        /* Act on the event */
        if(keyCode == 13){
        alert('test');
        }
    });
    
</script>