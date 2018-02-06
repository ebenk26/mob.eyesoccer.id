<?php
	
	$profile = json_decode($profile);

	foreach($profile->data as $k => $v){

		echo "<a href=\"{$v->share_url}\">
                    <div class=\"ep-box-content\">
                        <div class=\"img\">
                            <img src=\"{$v->url_pic}\" alt=\"{$v->name}\">                                    
                        </div>
                        <div class=\"ep-detail\">
                            <h1>{$v->name}</h1>
                            <p>Posisi: {$v->position}<br>
                            Klub: {$v->club}<br>
                        </div>
                    </div>
                </a>";


 } ?>

                   
                   