<div class="etube-home" style="padding: unset;">
<div class="container xc" style="margin-top: 50px;margin-bottom: 5px;">
		<table>
			<tbody><tr>
				<td>
					<div class="cat-x">
						<ul>
							<li>
								<!--<button onclick="dd()">LIGA</button>-->
								<button onclick="dd()" style="padding-right: 30px;">
									Kategori
									<i class="material-icons" style="position: absolute;top: 5px;right: 10px;">arrow_drop_down</i>
								</button>
								<ul id="ddcl" style="height: auto;">
									<li>
										<a href="http://m.eyesoccer.id/eyetube/kategori/EyeSoccer-Fact">EYESOCCER FACT</a>
									</li>
									<li>
                                    <a href="http://m.eyesoccer.id/eyetube/kategori/Eye-Soccer-Flash">EYESOCCER FLASH</a>
									</li>
									<li>
                                    <a href="http://m.eyesoccer.id/eyetube/kategori/Eyesoccerpedia">EYESOCCER PEDIA</a>
									</li>
									<li>
                                    <a href="http://m.eyesoccer.id/eyetube/kategori/Match-Preview">MATCH PREVIEW</a>
									</li>
									<li>
                                    <a href="http://m.eyesoccer.id/eyetube/kategori/Eye-Soccer-Hits">EYESOCCER HITS</a>
									</li>
									<li>
                                    <a href="http://m.eyesoccer.id/eyetube/kategori/Profile-SSB">PROFILE SSB</a>
									</li>
									<li>
                                    <a href="http://m.eyesoccer.id/eyetube/kategori/Eyesoccer-Star">EYESOCCER STAR</a>
									</li>
									<li>
                                    <a href="http://m.eyesoccer.id/eyetube/kategori/Eye-Soccer-Funny">EYESOCCER FUNNY</a>
									</li>
									<li>
                                    <a href="http://m.eyesoccer.id/eyetube/kategori/VIDEO-KAMU">VIDEO KAMU</a>
									</li>
									<li>
                                    <a href="http://m.eyesoccer.id/eyetube/kategori/Highlight">HIGHLIGHT</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</td>
				<td class="container over-x" style="max-width: 90vw !important;height: max-content;margin-bottom: -23px;">
					<div class="trend w-max" style="margin-top: 7px;">
						<div id="reqtrend" class="loadtrend" action="eyenews" loading="off" clean="clstrend" style="display: block;">                        <a style="font-size: 10px" href="http://localhost/mob.eyesoccer.id/eyenews/detail/lolos-ke-semifinal-dengan-menakjubkan-klopp-ungkap-kunci-bungkam-city-830c970" title="Lolos ke Semifinal dengan Menakjubkan, Klopp Ungkap Kunci Bungkam City">Lolos ke Semifinal…</a>
                                    <a style="font-size: 10px" href="http://localhost/mob.eyesoccer.id/eyenews/detail/dzeko-sang-mimpi-buruk-barcelona-0ea5b1a" title="Dzeko Sang Mimpi Buruk Barcelona">Dzeko Sang Mimpi…</a>
                                    <a style="font-size: 10px" href="http://localhost/mob.eyesoccer.id/eyenews/detail/kekuatan-suporter-menjadi-kunci-kemenangan-roma-b9e7718" title="Kekuatan Suporter Menjadi Kunci Kemenangan Roma">Kekuatan Suporter Menjadi…</a>
                                    <a style="font-size: 10px" href="http://localhost/mob.eyesoccer.id/eyenews/detail/beberkan-rahasia-timnya-pelatih-roma-ingin-tatap-final-5fdca2a" title="Beberkan Rahasia Timnya, Pelatih Roma Ingin Tatap Final">Beberkan Rahasia Timnya,…</a>
                                    <a style="font-size: 10px" href="http://localhost/mob.eyesoccer.id/eyenews/detail/guardiola-diusir-ke-tribun-permainan-city-menurun-pada-babak-kedua-31a7267" title="Guardiola Diusir ke Tribun, Permainan City Menurun Pada Babak Kedua">Guardiola Diusir ke…</a>
                </div>
					</div>
				</td>
			</tr>
		</tbody></table>
	</div>
    <?php
        if ($tube)
        {
            $tube  = json_decode($tube);

            foreach ($tube->data as $value)
            {
    ?>
                <a href="<?php echo base_url();?>eyetube/detail/<?= $value->slug; ?>">
                    <div class="etube-mobile-thumb">
                        <div class="img">
                            <img src="<?= $value->url_thumb; ?>/medium" alt="<?= $value->title; ?>">
                        </div>
                        <span class="kategori">
                            <?= $value->category_name; ?>
                        </span>
                        <h2><?= $value->title; ?></h2>
                        <span><?php echo relative_time($this->library->datenormal($value->createon)); ?> lalu - <?= $value->tube_view; ?> view</span>
                    </div>
                </a>
    <?php            
            }
        }
    ?>
</div>