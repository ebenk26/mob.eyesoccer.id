<?php
	
	$profile = json_decode($profile);

	foreach($profile->data as $k => $v){
        echo $v->url_pic;

		echo "<a href=\"{$v->share_url}\">
                    <div class=\"ep-box-content\">
                        <div class=\"img\">
                            <img src='".($this->library->lastext($v->url_pic, '.') != '') ? $v->url_pic : $default."' alt=\"{$v->name}\">                                    
                        </div>
                        <div class=\"ep-detail\">
                            <h1>{$v->name}</h1>
                            <p>Posisi: {$v->position}<br>
                            Klub: {$v->club}<br>
                        </div>
                    </div>
                </a>";


 } ?>

                   
                   