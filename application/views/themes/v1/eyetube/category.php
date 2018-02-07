<?php 
    $kanal  = "eyetube";
    $page   = $slug;
    echo set_breadcrumb($kanal,$page);
?>
<!-- EYENEWS -->
<div id="reqtube" class='loadtube' action="eyetube" loading="off" clean="clstube">
    <div id='clstube'>
        <script>
            $(document).ready(function(){
                $(window).on('load',function(){
                    ajaxOnLoad('loadtube');
                });
            });
        </script>
    </div>
    <input type='hidden' name='fn' value='category_tube' class='cinput'>
    <input type='hidden' name='category' value='<?= $category_name; ?>' class='cinput'>
    <div class="etube-home enews">
        <a href="enews-detail.html">
            <div class="etube-mobile-thumb" style="background-color: #f2f2f2;">
                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" style="visibility: hidden;">
                <div class="enews-title">
                    <h2 style="visibility: hidden;"">title Video title Video title Video title Video title Video</h2>
                    <span style="visibility: hidden;"">2 jam lalu - 123 view</span>                
                </div>
            </div>
        </a>
        <a href="enews-detail.html">
            <div class="etube-mobile-thumb" style="background-color: #f2f2f2;">
                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" style="visibility: hidden;">
                <div class="enews-title">
                    <h2 style="visibility: hidden;"">title Video title Video title Video title Video title Video</h2>
                    <span style="visibility: hidden;"">2 jam lalu - 123 view</span>                
                </div>
            </div>
        </a>
    </div>
</div>
