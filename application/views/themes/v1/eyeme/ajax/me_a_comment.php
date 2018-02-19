 <span class="up-next-etube" style="padding-left: 10px !important;color: #212121 !important;">Komentar</span> <span id="close" class="up-next-etube" style="float:right; padding-right: 10px;"><i class="material-icons">close</i></span>
        <div class="box-komentar">
            <div class="img-radius">
                <img src="<?php echo urltoimgstore($this->session->member['url_pic'])?>" alt="<?php echo $this->session->member['username']?>" width="100%">
            </div>
            <div class="input-komentar">
                <input type="text" placeholder="Tambahkan Komentar ...">
            </div>
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



       