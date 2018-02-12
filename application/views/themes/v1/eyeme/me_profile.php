<div class="container" style="margin-top: 50px;padding-top: 30px;">
    <div id="all" class="loadall">
    <div id="reqprofile" class='loadprofile' action="eyeme" loading="off" clean="clsprofile">
          <div id='clsprofile'>
                    <script>
                        $(document).ready(function(){
                            $(window).on('load',function(){
                                ajaxOnLoad('loadprofile');
                            });

                        });
                 
                    </script>
                </div>
            <input type="hidden" name="fn" value="meprofile" class="cinput">
            <input type="hidden" name="uname" value ="<?php echo $this->uri->segment(3)?>-profile" class="cinput">
           
        <div class="container">
            <div class="eme-prof-pict">
                <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">
            </div>
            <div class="eme-prof-user">
                <a href="">lorem_ipsum</a>
                <a href="" class="follow-button">Follow</a>
            </div>
            <p class="eme-prof-desc">lorem ipsum dolro sit ametlorem ipsum dolro sit ametlorem ipsum dolro sit ametlorem ipsum dolro sit amet</p>
            <table class="tx-c tr-1-bold">
                <tr>
                    <td>123</td>
                    <td>456</td>
                    <td>789</td>
                </tr>
                <tr>
                    <td>photo</td>
                    <td>pengikut</td>
                    <td>diikuti</td>
                </tr>
            </table>
        </div>
    </div>

    <div id="reqprofileimg" class='loadprofileimg' action="eyeme" loading="off" clean="clsprofileimg">
        <div id='clsprofile'>
            <script>
                $(document).ready(function(){
                    $(window).on('load',function(){
                        ajaxOnLoad('loadprofileimg');
                    });

                });
         
            </script>
        </div>
            <input type="hidden" name="fn" value="meprofile" class="cinput">
            <input type="hidden" name="uname" value ="<?php echo $this->uri->segment(3)?>-imglist" class="cinput">
        <div class="content-profile">
            <div class="content-profile-item">
                <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">
            </div>
            <div class="content-profile-item">
                <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">
            </div>
            <div class="content-profile-item">
                <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">
            </div>
            <div class="content-profile-item">
                <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">
            </div>
            <div class="content-profile-item">
                <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">
            </div>
            <div class="content-profile-item">
                <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">
            </div>
          
        </div>
    </div>
</div>
</div>
   