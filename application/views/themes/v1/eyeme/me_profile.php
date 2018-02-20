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
                <div style="background: #ccc;width: 200px;height: 200px">
                </div>
            </div>
            <div class="eme-prof-user">
                <a href=""></a>
            </div>
            <p class="eme-prof-desc"></p>
            <table class="tx-c tr-1-bold">
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
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
            <div style="background:#ccc;height:200px;margin:auto">
            Loading
            </div>
        </div>
    </div>
</div>
</div>
   