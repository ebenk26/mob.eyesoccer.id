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
    		echo '<i id="src" class="material-icons f-r">search</i>';
    	}

    ?>
    
</nav>