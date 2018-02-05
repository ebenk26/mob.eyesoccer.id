<div class="container bg-g">
    <div class="t-tab">
        <div class="day-choose" id="jadwal-yest">
            <a href="" onclick="return false;">Kemarin
                <span><?= date('d F',strtotime($kemarin["tanggalnya"])); ?></span>
            </a>
        </div>
        <div class="day-choose t-active" id="jadwal-today">
            <a href="" onclick="return false;">Hari ini
                <span><?= date('d F',strtotime($hari_ini["tanggalnya"])); ?></span>
            </a>
        </div>
        <div class="day-choose" id="jadwal-tmrw">
            <a href="" onclick="return false;">Besok
                <span><?= date('d F',strtotime($besok["tanggalnya"])); ?></span>
            </a>
        </div>                        
    </div>
</div>
<table class="table border-b" id="tbl-hari-ini">
    <tbody>
        <?php 
            if ($match_today)
            {
                $match_today  = json_decode($match_today);

                foreach ($match_today->data as $value)
                {
        ?>
                    <tr>
                        <a href="<?= $value->url_team_a; ?>">
                            <td class="tx-r"><?= $value->team_a; ?> 
                                <span class="i-l">
                                    <img src="<?= $value->url_logo_a; ?>" alt="<?= $value->team_a; ?>">
                                </span> 
                            </td>
                        </a>
                        <td class="tx-c"> 
                            <?= $value->event; ?>
                            <br>
                            <?= $value->match_schedule; ?> 
                            <span class="t-live"><?= $value->match_live; ?></span> 
                        </td>
                        <a href="<?= $value->url_team_a; ?>">
                            <td class="tx-l"> 
                                <span class="i-r">
                                    <img src="<?= $value->url_logo_b; ?>" alt="<?= $value->team_b; ?>">
                                </span> 
                                <?= $value->team_b; ?> 
                            </td>
                        </a>
                    </tr>
        <?php
                }
            }
            
        ?>
    </tbody>
</table>
<table class="table border-b" id="tbl-besok">
    <tbody>
        <?php 
            if ($match_tomorrow)
            {
                $match_tomorrow  = json_decode($match_tomorrow);

                foreach ($match_tomorrow->data as $value)
                {
        ?>
                    <tr>
                        <a href="<?= $value->url_team_a; ?>">
                            <td class="tx-r"><?= $value->team_a; ?> 
                                <span class="i-l">
                                    <img src="<?= $value->url_logo_a; ?>" alt="<?= $value->team_a; ?>">
                                </span> 
                            </td>
                        </a>
                        <td class="tx-c"> 
                            <?= $value->event; ?>
                            <br>
                            <?= $value->match_schedule; ?> 
                            <span class="t-live"><?= $value->match_live; ?></span> 
                        </td>
                        <a href="<?= $value->url_team_a; ?>">
                            <td class="tx-l"> 
                                <span class="i-r">
                                    <img src="<?= $value->url_logo_b; ?>" alt="<?= $value->team_b; ?>">
                                </span> 
                                <?= $value->team_b; ?> 
                            </td>
                        </a>
                    </tr>
        <?php
                }
            }
            
        ?>
    </tbody>
</table>