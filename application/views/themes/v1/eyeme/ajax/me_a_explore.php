
<div class="content-explore">
<?php

$explore = json_decode($explore);
foreach($explore->data as $k => $v){

    echo '<div class="content-explore-item">
            '.img(array('src' => urltobetame($v->url_img),'alt'=> $v->img_caption)).'
         </div>';


}?>       
       
</div>
     
