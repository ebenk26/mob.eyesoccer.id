<div class="container bg-g">
    <div class="t-tab">
        <div id='boxtab'>
            <a class="day-choose" id="jadwal-yest" onclick="tabmenu(this.id, 'day-choose', 't-active')">
                Kemarin
                <span><?= date('d F',strtotime($kemarin["tanggalnya"])); ?></span>
            </a>
            <a class="day-choose t-active" id="jadwal-today" onclick="tabmenu(this.id, 'day-choose', 't-active')" active="true">
                Hari ini
                <span><?= date('d F',strtotime($hari_ini["tanggalnya"])); ?></span>
            </a>
            <a class="day-choose" id="jadwal-tmrw" onclick="tabmenu(this.id, 'day-choose', 't-active')">
                Besok
                <span><?= date('d F',strtotime($besok["tanggalnya"])); ?></span>
            </a>
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
                                <span class="i-l">
                                    <img src="<?= $value->url_logo_a; ?>/small" alt="<?= $value->team_a; ?>">
                                </span> 
                            <!-- </a> -->
                        </td>
                        <td class="tx-c"> 
                            <?= $value->event; ?>
                            <br>
                            <?= $value->match_schedule; ?> 
                            <span class="t-live"><?= $value->match_live; ?></span> 
                        </td>
                        <td class="tx-l"> 
                            <!-- <a href="<?= $value->url_team_a; ?>"> -->
                                <span class="i-r">
                                    <img src="<?= $value->url_logo_b; ?>/small" alt="<?= $value->team_b; ?>">
                                </span> 
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
                                <span class="i-l">
                                    <img src="<?= $value->url_logo_a; ?>/small" alt="<?= $value->team_a; ?>">
                                </span> 
                            <!-- </a> -->
                        </td>
                        <td class="tx-c"> 
                            <?= $value->event; ?>
                            <br>
                            <?= $value->match_schedule; ?> 
                            <span class="t-live"><?= $value->match_live; ?></span> 
                        </td>
                        <td class="tx-l"> 
                            <!-- <a href="<?= $value->url_team_a; ?>"> -->
                                <span class="i-r">
                                    <img src="<?= $value->url_logo_b; ?>/small" alt="<?= $value->team_b; ?>">
                                </span> 
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
                                <span class="i-l">
                                    <img src="<?= $value->url_logo_a; ?>/small" alt="<?= $value->team_a; ?>">
                                </span> 
                            <!-- </a> -->
                        </td>
                        <td class="tx-c"> 
                            <?= $value->event; ?>
                            <br>
                            <?= $value->match_schedule; ?> 
                            <span class="t-live"><?= $value->match_live; ?></span> 
                        </td>
                        <td class="tx-l"> 
                            <!-- <a href="<?= $value->url_team_a; ?>"> -->
                                <span class="i-r">
                                    <img src="<?= $value->url_logo_b; ?>/small" alt="<?= $value->team_b; ?>">
                                </span> 
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