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
             <input type="hidden" name="add" id="an" class="cinput" value="addId1">
    
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
    <div  id="reqnewlist" class='loadnewlist' action="eyeme" loading="off">
  
        <input type="hidden" name="fn" value="explorelist" class="cinput">
        <input type="hidden" name="pg"  class="cinput" id="pg"> 
        <input type="hidden" name="add" id="an" class="cinput">
    </div>
</div>
<script>

  $(window).scroll(function() {
   
       if($(window).scrollTop() >= $(document).height()/2 + $(document).height()/4) {
         
            ajaxOnLoad('loadnewlist');
         
       }
       
    });
    
 
</script>