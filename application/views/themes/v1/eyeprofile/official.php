<!-- CONTENT BODY -->
<?php
    echo set_breadcrumb("eyeprofile",urldecode($slug));
?>

<div class="eprofile">
    <div class="container over-x">
        <div class="container sub-menu w-max">
            <a href="<?php echo base_url();?>eyeprofile/klub">klub</a>
            <a href="<?php echo base_url();?>eyeprofile/pemain">pemain</a>
            <a href="" class="active">ofisial</a>
            <a href="">perangkat pertandingan</a>
            <a href="">supporter</a>
        </div>
    </div>
    <div class="container" style="font-size: .8em;">
        <div id="reqcompetition" class='loadcompetition' action="eyeprofile" loading="off" clean="clscompetition">
            <div id='clscompetition'>
                <script>
                    $(document).ready(function(){
                        $(window).on('load',function(){
                            ajaxOnLoad('loadcompetition');
                        });
                    });
                </script>
            </div>
            <input type='hidden' name='fn' value='competition' class='cinput'>
            <input type='hidden' name='slug' value='<?php echo $slug;?>' class='cinput'>
            <input type='hidden' name='submenu' value='official' class='cinput'>
            <select id="" name="" selected="true" class="slc-musim">
                <option value="">Liga 1 Indonesia</option>
                <option value="">Liga 1 Indonesia</option>
                <option value="">Liga 1 Indonesia</option>
                <option value="">Liga 1 Indonesia</option>
            </select>
        </div>
    </div>
    <div id="reqtbloff" class='loadtbloff' action="eyeprofile" loading="off" clean="clstbloff">
        <div id='clstbloff'>
            <script>
                $(document).ready(function(){
                    $(window).on('load',function(){
                        ajaxOnLoad('loadtbloff');
                    });
                });
            </script>
        </div>
        <input type='hidden' name='fn' value='desc_league' class='cinput'>
        <input type='hidden' name='slug' value='<?php echo $slug;?>' class='cinput'>
        <div class="container eprofile-liga-box">
            <div class="img-medium">
                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
            </div>
            <table class="table-justify" style="visibility: hidden;">
                <tr>
                    <td>level liga</td>
                    <td>:</td>
                    <td>tingkat pertama</td>
                </tr>
                <tr>
                    <td>jumlah klub</td>
                    <td>:</td>
                    <td>18 klub</td>
                </tr>
                <tr>
                    <td>jumlah pemain</td>
                    <td>:</td>
                    <td>531 pemain</td>
                </tr>
                <tr>
                    <td>pemain asing</td>
                    <td>:</td>
                    <td>70 pemain</td>
                </tr>
                <tr>
                    <td>rekor juara</td>
                    <td>:</td>
                    <td>persib (10 kali)</td>
                </tr>
                <tr>
                    <td>umur rata-rata</td>
                    <td>:</td>
                    <td>27 tahun</td>
                </tr>
                <tr>
                    <td>juara bertahan</td>
                    <td>:</td>
                    <td>persipura jayapura</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="eprofile-src">
        <input type="text" placeholder="Cari ...">
    </div>
    <div class="container">
            <div class="container table-blue" style="overflow: scroll;height: max-content;">
                <div class="w-max">
                    <div id="klasemen" class="box-pertandingan klasemen disable-i-style">
                        <div id="reqoffclist" class='loadoffclist' action="eyeprofile" loading="off" clean="clsoffclist">
                            <div id='clsoffclist'>
                                <script>
                                    $(document).ready(function(){
                                        $(window).on('load',function(){
                                            ajaxOnLoad('loadoffclist');
                                        });
                                    });
                                </script>
                            </div>
                            <input type='hidden' name='fn' value='officiallist' class='cinput'>
                            <input type='hidden' name='slug' value='<?php echo $slug;?>' class='cinput'>
                            <input type='hidden' name='submenu' value='klub' class='cinput'>
                            <div class="table-scroll-x" style="border: unset;border-radius: unset;">
                                <table class="table-stripe">
                                    <tr>
                                        <th>#</th>
                                        <th>nama</th>
                                        <th>klub</th>
                                        <th>tgl lahir/umur</th>
                                        <th>posisi</th>
                                        <th>kewarganegaraan</th>
                                        <th>bergabung</th>
                                        <th>masa kontrak</th>
                                    </tr>
                                    <tr>
                                        <td>1 <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt=""></td>
                                        <td>aji santoso</td>
                                        <td><img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt=""></td>
                                        <td>12 mar 1993 (24)</td>
                                        <td>manager</td>
                                        <td>indonesia</td>
                                        <td>7 sep 2017</td>
                                        <td>31 des 2017</td>
                                    </tr>
                                    <tr>
                                        <td>1 <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt=""></td>
                                        <td>aji santoso</td>
                                        <td><img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt=""></td>
                                        <td>12 mar 1993 (24)</td>
                                        <td>manager</td>
                                        <td>indonesia</td>
                                        <td>7 sep 2017</td>
                                        <td>-</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>