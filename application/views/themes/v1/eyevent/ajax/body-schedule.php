<div class="container bg-g">
    <div class="t-tab">
        <div id='ajax-tgl-jadwal'>
            <?= $txt_tgl; ?>
        </div>
    </div>
</div>
<div>
    
<?php
    if ($jdwl)
    {
        $jdwl = json_decode($jdwl);
    
        foreach ($jdwl->data as $value) 
        { 
?>
    		<table class="table border-b">
    		    <tbody>
                    <tr>
                        <td class="tx-r"> 
                            <?= $value->team_a; ?>
                        </td>
                        <td style="width: 25px;"> 
                        	<img src="<?= $value->url_logo_a; ?>/small" alt="">
                        </td>
                        <td class="tx-c">
                            <?= $value->match_location; ?>
                            <br>
                            <?= $value->match_schedule; ?>
                            <span class="t-live"><?= $value->match_live; ?></span>
                        </td>
                        <td style="width: 25px;">
                        	<img src="<?= $value->url_logo_b; ?>/small" alt=""> 
                        </td>
                        <td class="tx-l">
                            <?= $value->team_b; ?>
                        </td>
                    </tr>
    		    </tbody>
    		</table>
<?php
        }
    }
?>

</div>
