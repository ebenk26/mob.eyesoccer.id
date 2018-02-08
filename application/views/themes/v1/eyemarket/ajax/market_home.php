<style type="text/css">
	.box-img{
		padding-top: 49px;
	}
	.coba-img{
		max-width: 260px; 
		/*padding-top: 49px; */
		margin-left: 51px;
	}
	h1{
		font-size: .9em;
		font-weight: 500;
	    height: 38px;
	    overflow: hidden;
	    width: 95%;
	    margin-left: 25%;
	}
	.coba-btn{
		padding: 5px;
	    width: 140px;
	    background-color: transparent;
	    border: 1px solid #8ec429;
	    color: #91c500;
	    font-weight: 500;
	    margin: 5px;
	    margin-left: 34%;
	}
	.ribbon{
		position: absolute;
	    padding-top: 50px;
	    padding-left: 56px;
	    font-weight: 700;
	    letter-spacing: 0.08em;
	}
	.theribbon{
		background-color: #5bc0de;
	    text-shadow: 0px 1px 2px #bbb;
	    position: relative;
        width: 80px;
        padding: 6px 20px 6px 20px;
        margin: 30px 10px 10px -71px;
        color: #fff;
        font-family: "Roboto", Helvetica, Arial, 
	}
</style>

<?php 
	foreach ($prodlist as $value)
	{
?>
		<div class="ribbon new">
		    <div class="theribbon">Available Soon</div>
		    <div class="ribbon-background"></div>
		</div>
		<div class="box-img">
	        <img src="<?= MARKETIMG."".$value["image1"]; ?>" alt="<?= $value["nama"]; ?>" class="coba-img">
	        <h1><?= $value["nama"]; ?></h1>
	        <button type="text" class="coba-btn">Lihat Detail</button>
	    </div>
<?php
	}
?>