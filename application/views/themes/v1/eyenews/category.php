<?php 
$page = array($slug, $subslug);
echo set_breadcrumb("eyenews",$page); 
?>
<div id="reqsubcatlist" class='loadsubcatlist' action="eyenews" loading="off" clean="clssubcatlist">
	<div id='clscatlist'>
		<script>
			$(document).ready(function(){
				$(window).on('load',function(){
					ajaxOnLoad('loadsubcatlist');
				});
			});
		</script>
	</div>
	<input type='hidden' name='fn' value='subcategorylist' class='cinput'>
	<input type='hidden' name='slug' value='<?php echo $slug; ?>' class='cinput'>
	<div class="crumb">
		<span><a href="<?php echo base_url().$slug.'/'.$subslug?>" style="display: unset">Liga Indonesia</a></span>
		<span><a href="http://localhost/mob.eyesoccer.id/eyenews" style="display: unset">Liga Inggris</a></span>
	</div>
</div>
<!-- EYENEWS -->
<div class="etube-home enews" style="padding: unset;">
    <div id="reqcatlist" class='loadcatlist' action="eyenews" loading="off" clean="clscatlist">
        <div id='clscatlist'>
            <script>
                $(document).ready(function(){
                    $(window).on('load',function(){
                        ajaxOnLoad('loadcatlist');
                    });
                });
            </script>
        </div>
        <input type='hidden' name='fn' value='categorylist' class='cinput'>
        <input type='hidden' name='slug' value='<?php echo $slug; ?>' class='cinput'>
        <input type='hidden' name='subslug' value='<?php echo $subslug; ?>' class='cinput'>
        <a href="enews-detail.html">
        <div class="etube-mobile-thumb">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
            <div class="enews-title">
                <h2>title Video title Video title Video title Video title Video</h2>
                <span>2 jam lalu - 123 view</span>                
            </div>
        </div>
        </a>
        <a href="enews-detail.html">
        <div class="etube-mobile-thumb">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
            <div class="enews-title">
                <h2>title Video title Video title Video title Video title Video</h2>
                <span>2 jam lalu - 123 view</span>                
            </div>
        </div>
        </a>
        <a href="enews-detail.html">
        <div class="etube-mobile-thumb">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
            <div class="enews-title">
                <h2>title Video title Video title Video title Video title Video</h2>
                <span>2 jam lalu - 123 view</span>                
            </div>
        </div>
        </a>
        <a href="enews-detail.html">
        <div class="etube-mobile-thumb">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
            <div class="enews-title">
                <h2>title Video title Video title Video title Video title Video</h2>
                <span>2 jam lalu - 123 view</span>                
            </div>
        </div>
        </a>
        <a href="enews-detail.html">
        <div class="etube-mobile-thumb">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
            <div class="enews-title">
                <h2>title Video title Video title Video title Video title Video</h2>
                <span>2 jam lalu - 123 view</span>                
            </div>
        </div>
        </a>
        <a href="enews-detail.html">
        <div class="etube-mobile-thumb">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
            <div class="enews-title">
                <h2>title Video title Video title Video title Video title Video</h2>
                <span>2 jam lalu - 123 view</span>                
            </div>
        </div>
        </a>
        <a href="enews-detail.html">
        <div class="etube-mobile-thumb">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
            <div class="enews-title">
                <h2>title Video title Video title Video title Video title Video</h2>
                <span>2 jam lalu - 123 view</span>                
            </div>
        </div>
        </a>
        <a href="enews-detail.html">
        <div class="etube-mobile-thumb">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
            <div class="enews-title">
                <h2>title Video title Video title Video title Video title Video</h2>
                <span>2 jam lalu - 123 view</span>                
            </div>
        </div>
        </a>
    </div>
</div>