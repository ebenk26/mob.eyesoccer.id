<nav>
    <i id="menu" class="material-icons f-l">menu</i>
    <a href="<?= base_url(); ?>">
	<img src="<?= base_url(); ?>assets/img/logo.png" alt="">
    </a>
    <!-- <a class="nav-link" href="<?= base_url() ?>eyemarket/keranjang/">
        <img src="<?=base_url()?>assets/eyemarket/user/images/icons/keranjang.png" alt="">
    </a> -->
    <?php 

    	if($this->uri->segment(1) == 'eyeme' ){

    		if(!$this->session->member){
    			echo '<i class="material-icons f-r" onclick="xdir()">input</i>';
    		}


    	}
    	else{
			echo '<i id="src" class="material-icons f-r">search</i><a href="member" style="color: #8ec429;"><i class="material-icons f-r" style="transform: rotate(-90deg);padding:  10px 0px;">system_update_alt</i></a>';
    	}

    ?>
    
</nav>
<!-- Link download berikut dibuat kondisi, jika device yg open iphone maka link nya ke apple store jika yg open device android
maka link ke playstore, selain dua device tersebut maka button display none. dan dibuat cache jika button di close maka tetap
tidak tampil walaupun di refresh agar tidak terlalu mengganggu -->
<a href="#" class="dbcls">
	<div class="cdownload-button">
		<div>
			<img source="http://static.eyesoccer.id/v1/cache/images/4033LOGO%20UNTUK%20APLIKASI.jpg" width=10% >
		</div>
		<div>
		<span align="center" class="cdownloadhead">Eyesoccer.ID Apps</span>
		<span align="center" class="cdownloaddesc">Download aplikasinya untuk menikmati berita sepakbola nasional dan mancanegara terlengkap...</span>
		<span align="center" class="cdownloadconfirm">Ok</span>
		<i id="dbcloser" class="dbcloser">clear</i>
		</div>
	</div>
</a>