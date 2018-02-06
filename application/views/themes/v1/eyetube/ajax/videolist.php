<?php
if ($list){
	$list = json_decode($list);
	foreach($list->data as $dt)
	{
?>
		<a href="enews-detail.html">
			<div class="video-thumb">
				<div class="v-thumb-img">
					<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
				</div>
				<h2>Lorem Ipsum Dolor Sit Amet</h2>
				<span>2 jam lalu</span>
			</div>
		</a>
<?php
	}
}
?>