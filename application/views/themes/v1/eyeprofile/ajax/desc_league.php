<?php 
    $count_club = json_decode($count_club);
    $count_player = json_decode($count_player);
    $count_player_foreign = json_decode($count_player_foreign);
?>
<div class="container eprofile-liga-box">    
    <div class="img-medium">
        <img src="http://static.eyesoccer.id/v1/cache/images/LOGO%20UNTUK%20APLIKASI.jpg/medium" alt="">
    </div>
    <table class="table-justify">
        <tr>
            <td>level liga</td>
            <td>:</td>
            <td>tingkat pertama</td>
        </tr>
        <tr>
            <td>jumlah klub</td>
            <td>:</td>
            <td><?= $count_club->data[0]->cc; ?> klub</td>
        </tr>
        <tr>
            <td>jumlah pemain</td>
            <td>:</td>
            <td><?= $count_player->data[0]->cc; ?> pemain</td>
        </tr>
        <tr>
            <td>pemain asing</td>
            <td>:</td>
            <td><?= $count_player_foreign->data->player_foreign; ?> pemain</td>
        </tr>
        <tr>
            <td>rekor juara</td>
            <td>:</td>
            <td>-</td>
        </tr>
        <tr>
            <td>umur rata-rata</td>
            <td>:</td>
            <td>-</td>
        </tr>
        <tr>
            <td>juara bertahan</td>
            <td>:</td>
            <td>-</td>
        </tr>
    </table>
</div>