<?php
if ($newsdetail){
	$newsdetail = json_decode($newsdetail);
	foreach($newsdetail->data->related_news as $dt)
	{
?>
	<a href="<?php echo $this->library->urltomob($dt->url);?>">
		<div class="etube-content etube-content-detail pd-t-10">
			<div class="v-etube v-etube-detail">
				<img src="<?php echo $dt->url_pic.'/small';?>" alt="">
			</div>
			<h1><?php echo $dt->title;?></h1>
			<span><?php echo relative_time($this->library->datenormal($dt->publish_on)); ?> lalu</span>
			<span><?php echo $dt->news_view; ?> view</span>
		</div>
	</a>
<?php
	}
}
?>
<img style="width: 40%; margin-left: 30%;" class="load-gif loadhide" src="<?php echo base_url();?>assets/img/loadingsoccer.gif" alt="Loading">
<div  id="reqnewslist" class='loadnewslist' action="eyenews" loading="off" wait>
	<input type="hidden" name="fn" value="related_news" class="cinput">
	<input type="hidden" name="pg"  class="cinput" id="pg"> 
	<input type="hidden" name="add" class="cinput" id="add">
	<input type="hidden" name="cat" class="cinput" id="cat">
</div>

<script>
	var pg = 1;
	$(window).scroll(function() {
		// console.log('1',$(window).scrollTop());
		// console.log('2',$(window).height());
		// console.log('3',$(document).height()/2 + $(document).height()/4);
		if($(window).scrollTop() >= $(document).height()/2 + $(document).height()/4) {
			pg = pg+1;
			$('.loading').show();
			$('#pg').val(pg);
			$('#cat').val($("#catews").val());
			ajaxOnLoad('loadnewslist');
		}
	})
</script>