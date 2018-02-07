<?php

 foreach($prodlist as $k => $v){

 	echo "<a href=\"".base_url()."detail/{$v['toko']}/{$v['title_slug']}\">
                    <div class=\"em-box-content\">
                        <div class=\"img-prod\">
                            <img src=\"".MARKETIMG.$v['image1']."\" alt=\"{$v['nama']}\">
                        </div>
                        <h1>{$v['nama']}</h1>
                        <p class=\"prices\"> ".number_format($v['harga'],0,',','.')."</p>
                        <button type=\"text\" class=\"beli\">Beli</button>
                    </div>
                </a>";

 }

?>