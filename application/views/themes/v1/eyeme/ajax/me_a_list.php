<?php

$me = json_decode($eyeme);
foreach($me->data as $k => $v){
	$url = urltobetame($v->url_img);

	echo  '<a href="'.$v->url.'/small">
			<div class="eme-box">
        		<img src="'.$url.'" alt="'.$v->img_caption.'">
    	 	</div>
    	 </a>';

}

?>