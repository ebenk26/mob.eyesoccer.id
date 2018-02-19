
<?php 
#p($res);
$res = $res->data;
#p($p);
#$self   = ($this->session->username == $p->username ? 1 : 0 )?>
    <div class="container">
        <div class="eme-prof-pict">
            <img src="<?php echo urltoimgstore($res->url_pic)?>" alt="<?php echo $res->username?>">
        </div>
        <div class="eme-prof-user">
            <a href="<?php echo MEPROFILE.$res->username?>"><?php echo $res->username?></a>
            <?php ($this->session->username == $res->username ? '' : '<a href="" class="follow-button">Follow</a>' )?>
        </div>
        <p class="eme-prof-desc"><?php echo $res->about?></p>
        <table class="tx-c tr-1-bold">
            <tr>
                <td><?php echo count($res->images)?></td>
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

