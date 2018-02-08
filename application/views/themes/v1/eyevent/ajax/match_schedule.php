<div class="container bg-g">
    <div class="t-tab">
        <div id='boxtab'>
			<div class="day-choose">
            <a class="day-choose" id="jadwal-yest" onclick="tabmenu(this.id, 'day-choose', 't-active')">
                Kemarin
                <span><?= date('d F',strtotime($kemarin["tanggalnya"])); ?></span>
            </a>
			</div>
			<div class="day-choose">
            <a class="day-choose t-active" id="jadwal-today" onclick="tabmenu(this.id, 'day-choose', 't-active')" active="true">
                Hari ini
                <span><?= date('d F',strtotime($hari_ini["tanggalnya"])); ?></span>
            </a>
			</div>
			<div class="day-choose">
            <a class="day-choose" id="jadwal-tmrw" onclick="tabmenu(this.id, 'day-choose', 't-active')">
                Besok
                <span><?= date('d F',strtotime($besok["tanggalnya"])); ?></span>
            </a>
			</div>
        </div>
    </div>
</div>
<table class="table border-b" id="jadwal-yest" style="display: none;">
    <tbody>
        <?php 
            if ($match_yest)
            {
                $match_yest  = json_decode($match_yest);

                foreach ($match_yest->data as $value)
                {
        ?>
                    <tr>
                        <td class="tx-r"><?= $value->team_a; ?> 
                            <!-- <a href="<?= $value->url_team_a; ?>"> -->
                            <!-- </a> -->
                        </td>
                        <td style="width: 25px;"><img style="width: 100%" src="<?= $value->url_logo_a; ?>/small" alt="<?= $value->team_a; ?>"></td>
                        <td class="tx-c"> 
                            <?= $value->event; ?>
                            <br>
                            <?= $value->match_schedule; ?> 
                            <span class="t-live"><?= $value->match_live; ?></span> 
                        </td>
                        <td style="width: 25px;"><img style="width: 100%" src="<?= $value->url_logo_b; ?>/small" alt="<?= $value->team_b; ?>"></td>
                        <td class="tx-l"> 
                            <!-- <a href="<?= $value->url_team_a; ?>"> -->
                                <?= $value->team_b; ?> 
                            <!-- </a> -->
                        </td>
                    </tr>
        <?php
                }
            }
            
        ?>
    </tbody>
</table>
<table class="table border-b" id="jadwal-today">
    <tbody>
        <?php 
            if ($match_today)
            {
                $match_today  = json_decode($match_today);

                foreach ($match_today->data as $value)
                {
        ?>
                    <tr>
                        <td class="tx-r"><?= $value->team_a; ?> 
                            <!-- <a href="<?= $value->url_team_a; ?>"> -->
                            <!-- </a> -->
                        </td>
                        <td style="width: 25px;"><img style="width: 100%" src="<?= $value->url_logo_a; ?>/small" alt="<?= $value->team_a; ?>"></td>
                        <td class="tx-c"> 
                            <?= $value->event; ?>
                            <br>
                            <?= $value->match_schedule; ?> 
                            <span class="t-live"><?= $value->match_live; ?></span> 
                        </td>
                        <td style="width: 25px;"><img style="width: 100%" src="<?= $value->url_logo_b; ?>/small" alt="<?= $value->team_b; ?>"></td>
                        <td class="tx-l"> 
                            <!-- <a href="<?= $value->url_team_a; ?>"> -->
                                <?= $value->team_b; ?> 
                            <!-- </a> -->
                        </td>
                    </tr>
        <?php
                }
            }
            
        ?>
    </tbody>
</table>
<table class="table border-b" id="jadwal-tmrw" style="display: none;">
    <tbody>
        <?php 
            if ($match_tomorrow)
            {
                $match_tomorrow  = json_decode($match_tomorrow);

                foreach ($match_tomorrow->data as $value)
                {
        ?>
                    <tr>
                        <td class="tx-r"><?= $value->team_a; ?> 
                            <!-- <a href="<?= $value->url_team_a; ?>"> -->
                            <!-- </a> -->
                        </td>
                        <td style="width: 25px;"><img style="width: 100%" src="<?= $value->url_logo_a; ?>/small" alt="<?= $value->team_a; ?>"></td>
                        <td class="tx-c"> 
                            <?= $value->event; ?>
                            <br>
                            <?= $value->match_schedule; ?> 
                            <span class="t-live"><?= $value->match_live; ?></span> 
                        </td>
                        <td style="width: 25px;"><img style="width: 100%" src="<?= $value->url_logo_b; ?>/small" alt="<?= $value->team_b; ?>"></td>
                        <td class="tx-l"> 
                            <!-- <a href="<?= $value->url_team_a; ?>"> -->
                                <?= $value->team_b; ?> 
                            <!-- </a> -->
                        </td>
                    </tr>
        <?php
                }
            }
            
        ?>
    </tbody>
</table>