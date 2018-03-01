<?php
    foreach ($jdwl as $value) 
    {
?>
		<table class="table border-b">
		    <tbody>
                <tr>
                    <td class="tx-r"><?= $value['club_a']; ?>
                    </td>
                    <td style="width: 25px;"> 
                    	<img src="http://static.eyesoccer.id/v1/cache/images/<?= $value['logo_a']; ?>/small" alt="">
                    </td>
                    <td class="tx-c">
                        <?= $value['kompetisi']; ?>
                        <br>
                        <?= $value['jadwal_pertandingan']; ?>
                        <span class="t-live"><?= $value['live_pertandingan']; ?></span>
                    </td>
                    <td style="width: 25px;">
                    	<img src="http://static.eyesoccer.id/v1/cache/images/<?= $value['logo_b']; ?>/small" alt=""> 
                    </td>
                    <td class="tx-l">
                    </td>
                </tr>
		    </tbody>
		</table>
<?php
    }
?>

