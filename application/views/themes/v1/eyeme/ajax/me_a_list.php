<?php

$me = json_decode($eyeme);
foreach($me->data as $k => $v){
	$url = $v->url_img.'/small';

	echo  '<a href="'.$v->url.'">
			<div class="eme-box">
        		<img src="'.$url.'" alt="'.$v->img_caption.'">
    	 	</div>
    	 </a>';

}

?>