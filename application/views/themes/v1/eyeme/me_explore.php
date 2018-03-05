<!-- EYEME EXPLORE-->
<div class="container" style="margin-top: 50px;" xhide="true">
    <div class="emesearch">
        <input type="search" name="" id="" placeholder="cari ...">
        <img src="http://m.eyesoccer.id/assets/img/eyeme/menu/search.svg" alt="explore">
    </div>
    <div id="reqexplorelist" class='loadexplorelist' action="eyeme" loading="off" clean="clsexplorelist">
        <div class="content-explore">
            <div id='clsexplorelist'>
                <script>
                    $(document).ready(function(){
                        $(window).on('load',function(){
                            ajaxOnLoad('loadexplorelist');
                        });

                    });
             
                </script>
            </div>
            <input type="hidden" name="fn" value="explorelist" class="cinput">
            <input type="hidden" name="pg" value="1" class="cinput">        
            <div class="content-explore-item gr">                
            </div>
            <div class="content-explore-item gr">                
            </div>
            <div class="content-explore-item gr">                
            </div>
            <div class="content-explore-item gr">                
            </div>
            <div class="content-explore-item gr">                
            </div>
            <div class="content-explore-item gr">                
            </div>          
        </div>  
    </div>  
</div>

<script type="text/javascript">
    function gambar(ref){
        location.href= '<?php echo MEURL.'img/'?>'+ ref;
    }
    function xdir(){
        location.href="<?php echo LOGINURL.'?from=eyeme'?>";
    }
</script>
