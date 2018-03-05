<table class="jadwalhasil">
    <thead>
       <tr>
           <th colspan="3">
               <?= $txt_tgl; ?>
           </th>
       </tr>
    </thead>
    <tbody>
   
<?php
    foreach ($jdwl as $value) 
    {
?>
        <tr>
            <td class="pu">
                <table>
                    <tbody>
                        <tr>
                            <td colspan="3" class="lgsd"><?= $value['kompetisi']; ?></td>
                        </tr>
                        <tr class="tl">
                            <td>
                                <img src="http://static.eyesoccer.id/v1/cache/images/<?= $value['logo_a']; ?>/small" alt="">
                            </td>
                            <td><?= $value['club_a']; ?></td>
                            <td><?= $value['score_a']; ?></td>
                        </tr>
                        <tr class="tl">
                            <td>
                                <img src="http://static.eyesoccer.id/v1/cache/images/<?= $value['logo_b']; ?>/small" alt="">
                            </td>
                            <td><?= $value['club_b']; ?></td>
                            <td><?= $value['score_b']; ?></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="lgsd"><?= $value['lokasi_pertandingan']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
<?php
    }
?>
    </tbody>
</table>   