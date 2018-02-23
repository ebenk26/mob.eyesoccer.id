
<?php

$id_img = $res->query->id;

?>
<span class="up-next-etube" style="padding-left: 10px !important;color: #212121 !important;">Komentar</span> <span id="close" class="up-next-etube" style="float:right; padding-right: 10px;"><i class="material-icons">close</i></span>
    <div class="box-komentar">
        <div class="img-radius">
            <img src="<?php echo urltoimgstore($this->session->member['url_pic'])?>" alt="<?php echo $this->session->member['username']?>" width="100%">
        </div>
        <div  id='reqcomment' style="display:none;">   
            <span name="uid" id="cominput" class="cinput" val="<?php echo $id_img?>"/>
        </div> 
        <div class="input-komentar">
            <input type="text" placeholder="Tambahkan Komentar ..." name="comment" fn="pscomment" action="eyeme" id="reqcomment" class="form_keyup" enter="true" loading="off">
        </div>
        
    </div>
    <div id="rescomment" class="ncom">

    </div>
<?php 

foreach($res->data as $k => $v){?>
    
    <div class="item-komentar">
        <div class="img-radius">
            <img src="<?php echo urltoimgstore($v->url_pic)?>" alt="<?php echo $v->username?>" width="100%">
        </div>
        <div class="text-komentar">
            <p><?php echo $v->comment?></p>
            <h3><?php echo $v->username?></h3>
            <span><?php echo getTime(getDistance(NOW,$v->last_update))['timeString']?></span>
        </div>
    </div>

<?php }?>