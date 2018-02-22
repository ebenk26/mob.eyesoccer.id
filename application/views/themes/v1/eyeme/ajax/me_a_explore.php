
<div class="content-explore">
<?php

$explore = json_decode($explore);
foreach($explore->data as $k => $v){?>

    <div class="content-explore-item">

	     <?php 
	     $imglist = array('src' => $v->url_img,'alt'=> $v->img_caption);
	     //if user has been login 
	     if($this->session->member){
	     	$imglist['onclick'] = 'gambar(this.id)';
	     	$imglist['id']      = $v->id;
	     }
	     echo img($imglist)?>

    </div>
    
<?php }?>
<script type="text/javascript">
	function gambar(ref){
        location.href= '<?php echo MEURL.'img/'?>'+ ref;
    }
</script>
     
  
