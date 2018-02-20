 <div class="container" style="margin-top: 50px;margin-bottom: 50px;">
    <div id="reqimg" class='loadimg' action="eyeme" loading="off">
         <input type="hidden" name="fn" value="meimg" class="cinput">
         <input type="hidden" name="uid" value="<?php echo $this->uri->segment(3)?>" class="cinput">
         <script>
            $(document).ready(function(){
                $(window).on('load',function(){
                    ajaxOnLoad('loadimg');
                });

            });
     
        </script>
       
        <div class="container">
            <div class="container emepost">
                <div class="img-usr">
                    <div style="background: #ccc;height: 300px;width:200px">
                    </div>
                </div>
                <span>username</span>
                <i class="material-icons more display-box-notif">more_horiz</i>
            </div>
            <div class="eme-img-content">
               <div style="background:#ccc;height:281px;width:375px;margin-top:50px">
               </div>
            </div>
            <div class="container-eme-like">
                <ul>
                    <li>
                        <img src="<?php echo MEMENU.'love.svg'?>">
                        <i class="fa fa-comment-o openComment" aria-hidden="true"></i></li>
                    <li><span><a href="">username</a> dan <a href="">234</a> menyukai ini</span></li>
                </ul>
            </div>
            <ul class="comment-eme">
                <li><span class="eme-time-post"></span></li>
            </ul>
        </div>
    </div>
</div>