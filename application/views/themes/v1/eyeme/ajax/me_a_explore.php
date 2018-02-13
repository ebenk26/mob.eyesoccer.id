
<div class="content-explore">
<?php

$explore = json_decode($explore);
$pg = 1;
foreach($explore->data as $k => $v){$pg++?>

    <div class="content-explore-item">
            <?php echo img(array('src' => urltobetame($v->url_img),'alt'=> $v->img_caption))?>
    </div>
   
      
	
<?php }

$str =  substr($added, 5);
$str =  (isset($first) == true ? $str :  $str+1);?> 

<div id="<?php echo 'addId'.$str?>">
         
</div>

     
