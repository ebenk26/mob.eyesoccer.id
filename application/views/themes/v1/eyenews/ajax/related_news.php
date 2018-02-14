<?php
if ($newsdetail){
	$newsdetail = json_decode($newsdetail);
	foreach($newsdetail->data->related_news as $dt)
	{
?>
	<div class="etube-content etube-content-detail pd-t-10">
		<div class="v-etube v-etube-detail">
			<img src="<?php echo $dt->url_pic.'/small';?>" alt="">
		</div>
		<h1><?php echo $dt->title;?></h1>
		<span><?php echo relative_time($this->library->datenormal($dt->publish_on)); ?> lalu</span>
		<span><?php echo $dt->news_view; ?> view</span>
	</div>
<?php
	}
}
?>
<div id="load_list" class="loading etube-content etube-content-detail pd-t-10">
	Loading...
</div>
<div  id="reqnewslist" class='loadnewslist' action="eyenews" loading="off">
	<input type="hidden" name="fn" value="related_news" class="cinput">
	<input type="hidden" name="pg"  class="cinput" id="pg"> 
	<input type="hidden" name="add" class="cinput" id="add">
	<input type="hidden" name="cat" class="cinput" id="cat">
</div>

<script>
	var pg = 1;
	$(window).scroll(function() {
		if($(window).scrollTop() + $(window).height() == $(document).height()) {
			no = no+1;
			pg = pg+1;
			$('#pg').val(pg);
			$('#cat').val($("#catews").val());
			ajaxOnLoad('loadnewslist');
		}
	})
</script>