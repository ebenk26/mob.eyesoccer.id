<?php

$me = json_decode($eyeme);
foreach($me->data as $k => $v){
	 $url = urltobetame($v->url_pic);

	echo  '<div class="eme-box">
        		<img src="'.$url.'" alt="'.$v->img_caption.'">
    	 </div>';

}

?>