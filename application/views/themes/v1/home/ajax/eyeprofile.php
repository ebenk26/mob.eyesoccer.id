<?php
	
    $default = 'http://static.eyesoccer.id/v1/cache/images/logo_player_2.png';
	$profile = json_decode($profile);

	foreach($profile->data as $k => $v){
       
		echo "<a href='$v->share_url'>
                    <div class='ep-box-content'>
                        <div class='img'>
                            <img src='".(($this->library->lastext($v->url_pic, '.')) ? $v->url_pic : $default)."' alt='$v->name'>                                    
                        </div>
                        <div class='ep-detail'>
                            <h1>$v->name</h1>
                            <p>Posisi: $v->position<br>
                            Klub: $v->club<br>
                        </div>
                    </div>
                </a>";


 } ?>

                   
                   