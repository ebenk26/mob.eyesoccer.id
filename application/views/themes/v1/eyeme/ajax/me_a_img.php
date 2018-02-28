<?php 
//p($res);
foreach($res->data as $k => $v){
$hasLike = 0 ;
    if(count($v->likes) > 0 ){
        foreach($v->likes as $a => $b){            
            if($b->username == $this->session->member['username']){
                $hasLike = 1;
                break;
            }
        }
    }
?>
    <div class="container">
        <div class="container emepost">
            <div class="img-usr">
                <img src="<?php echo $v->url_pic?>" alt="<?php echo $v->username?>">
            </div>
            <span><?php echo $v->username?></span>
            <i class="material-icons more display-box-notif">more_horiz</i>
        </div>
        <div class="eme-img-content">
           <img src="<?php echo $v->url_img?>" alt="<?php echo $v->img_caption?>">
        </div>
        <div class="container-eme-like">
            <ul>
                <li>
                    <a class="like" ref="<?php echo substr($v->id,0,3).'lk'?>"> 
                    <span id="<?php echo substr($v->id,0,3).'clss'?>">
                        
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

                    <div id="<?php echo substr($v->id,0,3)?>" class="<?php echo substr($v->id,0,3)?>" action="eyeme" loading="off">
                        <input type="hidden" class="cinput" name="fn" value="gtcomment">
                        <input type="hidden" class="cinput" name="uid" value="<?php echo $v->id?>">

                    </div>

                </li>
              
            </ul>
        </div>
        <ul class="comment-eme">
            
            <li><span class="eme-time-post"><?php echo getTime(getDistance(NOW,$v->last_update))['timeString']?></span></li>
        </ul>
    </div>
<?php } ?>
<!-- KOMENTAR -->
<div class="container-comment" id="idcom">
<span class="up-next-etube" style="padding-left: 10px !important;color: #212121 !important;">Komentar</span> <span id="close" class="up-next-etube" style="float:right; padding-right: 10px;"><i class="material-icons">close</i></span>
    <div class="box-komentar">
        <div class="img-radius">
            <img src="<?php echo $this->session->member['url_pic'].'/thumb'; ?>" alt="<?php echo $this->session->member['username']?>" width="100%">
        </div>
        <div  id='reqcomment' style="display:none;">   
            <span name="uid" class="cinput" />
        </div> 
        <div class="input-komentar">
            <input type="text" placeholder="Tambahkan Komentar ..." name="comment" fn="pscomment" action="eyeme" id="reqcomment" class="form_keyup" enter="true" loading="off">
        </div>
        
    </div>

</div>
 <script>
    $('a.com').click(function(){
        // console.log('test');
        var ref =  $(this).attr('ref');
        ajaxOnLoad(ref);
    });
    $('a.like').click(function(){

        var ref = $(this).attr('ref');
        ajaxOnLoad(ref);
    });
</script>