
<?php 
$res = $res->data;
?>
    <div class="container">
        <div class="eme-prof-pict">
            <img src="<?php echo urltoimgstore($res->url_pic)?>" alt="<?php echo $res->username?>">
        </div>
        <div class="eme-prof-user">
            <a href="<?php echo MEPROFILE.$res->username?>"><?php echo $res->username?></a>
            <?php 
            echo ($this->session->member['username'] == $res->username ? '' : 
            ($res->hasfollow == '0' ? '<a href="" class="follow-button">Follow</a>':'<a href="" class="follow-button">Unfollow</a>'))?>
        </div>
        <p class="eme-prof-desc"><?php echo $res->about?></p>
        <table class="tx-c tr-1-bold">
            <tr>
                <td><?php echo count($res->images)?></td>
                <td><?php echo $res->follower?></td>
                <td><?php echo $res->following?></td>
            </tr>
            <tr>
                <td>photo</td>
                <td>pengikut</td>
                <td>diikuti</td>
            </tr>
        </table>
    </div>

