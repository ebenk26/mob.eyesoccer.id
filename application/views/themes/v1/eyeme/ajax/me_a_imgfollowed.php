
<?php 

$imglist = json_decode($imglist);
	
	foreach($imglist->data as $k => $v){

		foreach($v->likes as $a => $b){

			$hasLike = ( $b->username == $v->username ? 1 : 0 );

		}

?>	
        <div class="container">
            <div class="container emepost">
                <a href="<?php echo $this->library->urltomob($v->url)?>">
                <div class="img-usr">
                    <img src="<?php echo urltoimgstore($v->url_pic)?>" alt="<?php echo $v->username?>">
                </div>
                <span><?php echo $v->username?></span>
                </a>
                <i class="material-icons more display-box-notif">more_horiz</i>
            </div>
            <div class="eme-img-content">
                <img src="<?php echo urltobetame($v->url_img)?>" alt="<?php echo $v->img_caption?>">
            </div>
            <div class="container-eme-like">
                <ul>
                    <li>
                    	<i class="fa fa-heart heart-first <?php echo ($hasLike == 1 ?  'active' : '')?>" aria-hidden="true"></i>
                    	<span class="openComment"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                    </li>
                    <li>
                    	<span><a href="">username</a> dan <a href="">234</a> menyukai ini</span>
                    </li>
                </ul>
            </div>
            <ul class="comment-eme">
                <!-- <li><a href="">username</a> lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
                <li><a href="">username</a> lorem ipsum dolor sit amet lorem ipsum dolor sit amet</li>
                <li><span class="openComment">Lihat komentar lainnya</span></li> -->
                <li><span class="eme-time-post"><?php echo  getTime(getDistance(NOW,$v->last_update))['timeString']?></span></li>
            </ul>
        </div>

 <?php } ?>