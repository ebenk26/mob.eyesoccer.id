
    <div class="info-box-notif" style="display:block">
        <div class="info-box-notif-content">

            <?php 
            #p($res->data);
                foreach($res->data as $k => $v){

            ?>
                <table>
                    <tr>
                        <td>
                            <img src="<?php echo urltoimgstore($v->url_pic)?>">
                        </td>
                        <td>
                            <a href="<?php MEPROFILE.$v->username?>"><?php echo $v->username?></a>

                            <?php echo (substr($v->notif_type,0,3) == 'LIK' ? 'Menyukai Foto Anda' :
                                        (substr($v->notif_type,0,3) == 'COM' ? 'Mengomentari Foto Anda' : 'Mengikuti Anda'))?>
                            <span><?php echo getTime(getDistance(NOW,$v->last_update))['timeString']?></span>
                        </td>
                        <td><img src="<?php echo urltobetame($v->url_img)?>"></td>
                    </tr>
                </table>
            <?php }?>
        </div>
    </div>