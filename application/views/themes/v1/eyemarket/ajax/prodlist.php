<?php
p($prodlist);

 

 foreach($prodlist as $k => $v){

 	echo "<a href=\"\">
                    <div class=\"em-box-content\">
                        <img src=\"".imgCache($v['image1'])."\" alt=\"{$v['nama']}\">
                        <h1>{$v['nama']}</h1>
                        <p class=\"prices\"> ".number_format($produk['harga'],0,',','.')."</p>
                        <button type=\"text\" class=\"beli\">Beli</button>
                    </div>
                </a>";

 }

?>