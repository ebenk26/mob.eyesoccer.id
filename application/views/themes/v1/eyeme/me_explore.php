<!-- EYEME EXPLORE-->
    <div class="container" style="margin-top: 50px;">
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
        
                <div class="content-explore-item">
                    <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">
                </div>
                <div class="content-explore-item">
                    <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">
                </div>
                <div class="content-explore-item">
                    <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">
                </div>
                <div class="content-explore-item">
                    <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">
                </div>
                <div class="content-explore-item">
                    <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">
                </div>
                <div class="content-explore-item">
                    <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">
                </div>
                <div class="content-explore-item">
                    <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">
                </div>
                <div class="content-explore-item">
                    <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">
                </div>
                <div class="content-explore-item">
                    <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">
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
   
 // var no = 1;
 // var pg = 1;
      $(window).scroll(function() {
       
           if($(window).scrollTop() >= $(document).height()/2 + $(document).height()/4) {
             //no = no+1;
             //pg = pg+1;
             $('#an').val('addId'+no);
             $('#pg').val(pg);
                ajaxOnLoad('loadnewlist');
               
                 //console.log(no);
                  //console.log(no);

             
           }
           
        })


 
</script>
         
   

       
    <!--<script>
        $(window).scroll(function() {
           if($(window).scrollTop() + $(window).height() == $(document).height()) {
               alert("bottom!");
           }
        });
    </script>-->
    <!--<script type="text/javascript">
        var container = $('.container').infiniteScroll({
            path
        })
    </script>-->