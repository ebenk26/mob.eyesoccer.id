
<br>
<br>
<br>
<div id="popupKalender" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="m-event-kalender">
                <div id="z"></div>
                <button id="btn-date" class="btn-white-g" type="button" style="margin-left: 8.75%;" data-dismiss="modal">Lihat</button>
                <button class="btn-white-g btn-white-g-block" type="button" data-dismiss="modal">tutup</button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h2 class="thjadwalhasil">JADWAL PERTANDINGAN</h2>
    <!-- <select id="pilih-liga" class="lc">
        <option>Semua Liga</option>
        <option value="6">Liga Santri Nusantara 2017 - Seri Nasional</option>
        <option value="16">English Premier League 2017/2018</option>
        <option value="18">Italy - Seri A 2017/2018</option>
        <option value="19">France - Ligue 1 2017/2018</option>
        <option value="20">Spanish Primera Division - La Liga 2017/2018</option>
        <option value="34">Bundesliga German 2017/2018</option>
        <option value="57">UEFA Champions League 2017/2018</option>
        <option value="58">UEFA Europa League 2017/2018</option>
        <option value="74">COPPA ITALIA 2017/2018</option>
        <option value="75">COPA DEL RAY 2017/2018</option>
        <option value="89">Piala Dunia 2018 Rusia</option>
        <option value="92">Piala Presiden 2018</option>
    </select> -->
    <button type="button" class="lihat-jadwal" data-toggle="modal" data-target="#popupKalender">Pilih Tanggal Hasil Pertandingan Lainnya</button>

    <div id="jp" style="display: none;">
        <div class="container bg-g">
            <div class="t-tab">
                <div id='ajax-tgl-jadwal'>
                    
                </div>
            </div>
        </div>
        <div id="body-jp">
            
        </div>
    </div>
    

    <div class="container bg-g">
        <div class="t-tab">
            <div id='boxtab'>
                <div class="day-choose">
                    <a class="day-choose t-active" id="jadwal-today" onclick="tabmenu(this.id, 'a', 'table', 'day-choose', 't-active')" active="true">
                        Hari ini
                        <span><?= date('d F', strtotime($hari_ini["tanggalnya"])); ?></span>
                    </a>
                </div>
                <div class="day-choose">
                    <a class="day-choose" id="jadwal-tmrw" onclick="tabmenu(this.id, 'a', 'table', 'day-choose', 't-active')">
                        Besok
                        <span><?= date('d F', strtotime($besok["tanggalnya"])); ?></span>
                    </a>
                </div>
                <div class="day-choose">
                    <a class="day-choose" id="jadwal-lusa" onclick="tabmenu(this.id, 'a', 'table', 'day-choose', 't-active')">
                        Lusa
                        <span><?= date('d F', strtotime($lusa["tanggalnya"])); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <table class="table border-b" id="jadwal-today">
        <tbody>
        <?php
            if ($match_today) {
                $match_today = json_decode($match_today);
                foreach ($match_today->data as $value) {
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
            if ($match_tomorrow) {
                $match_tomorrow = json_decode($match_tomorrow);
                foreach ($match_tomorrow->data as $value) {
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
    <table class="table border-b" id="jadwal-lusa" style="display: none;">
        <tbody>
        <?php
            if ($match_lusa) {
                $match_lusa = json_decode($match_lusa);
                foreach ($match_lusa->data as $value) {
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
</div>

<script>
    $('#z').datepicker({
        inline: true,
        altField: '#d',
        onSelect: function() { 
                tgl = $(this).datepicker('getDate');
                
                $('#hdn-date').val(tgl);
                console.log(tgl);
            }
    });

    $('#d').change(function(){
        $('#z').datepicker('setDate', $(this).val());
    });
    // $("#popupKalender").modal();

    $(document).ready(function(){
        $("#btn-date").on("click", function(){

            var tanggal = tgl.getDate();
            
            var monthNames = ["January", "February", "March", "April", "May", "June",
              "July", "August", "September", "October", "November", "December"
            ];
            var bulan       = tgl.getMonth() + 1;
            var nm_bulan    = monthNames[tgl.getMonth()];

            var tahun = tgl.getFullYear();

            var txt_tanggal     = tahun+"-"+bulan+"-"+tanggal;

            $('#jp').attr('style', 'display:block');
            $('#ajax-tgl-jadwal').html(tanggal + " " + nm_bulan + " " + tahun);
            console.log(txt_tanggal);

            var urlnya = "<?= base_url(); ?>Eyevent/get_jadwal/"+txt_tanggal;
            var page = "jadwal";
            
            $.ajax({
                url: urlnya,
                type: 'POST',
                dataType: 'json',
                data: {txt_tanggal: txt_tanggal,page: page},
            })
            .done(function(result) {

                // console.log(result.body);
                $('#body-jp').html('');
                $('#body-jp').append(result.body);
                
            });
        });
    });

</script>
