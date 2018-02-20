 <style>
    body{
        margin: 0px;
    }
    *{
        font-family: sans-serif;
    }
    .head-content{
        text-align: center;
    }
    .full-width{
        width: 100%;
        text-align: center;
        margin-top: 30px;
    }
    .img-radius{
        border: none;
        border-radius: 50%;
        overflow: hidden;
        display: block;
        width: 150px;
        height: 150px;
        margin: 0 auto;
        position: relative;
    }
    .img-radius img{
        height: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
    }
    .informasi button, .btn-blue{
        background-color: #4FC3F7;
        color: white;
        padding: 8px 10px;
        border-radius: 5px;
        font-size: .9em;
        display: block;
        text-align: center;
        margin: 8px 8px 8px 0px;
        float: left;
        border: 0px;
        box-sizing: border-box;
        width: 100%;
    }
    .action-menu{
        width: 100%;
        max-width: 450px;
        float: left;
        text-align: left;
    }
    .action-menu .col-1{
        width: 23%;
        max-width: 100px;
        min-width: 50px;
        margin: 1% .1%;
        text-align: center;
        display: inline-block;
    }
    .action-menu img{
        width: 100%;
    }
    .action-menu a{
        text-decoration: none;
        color: #616161;
        font-weight: 100;
    }
    .container{
        margin: 20px 2.5%;
        float: left;
        width: 95%;    
    }
    .galeri{
        width: 100%;
        float: left;
        overflow-y: scroll;
        overflow-x: hidden;
        max-height: 494px;
    }
    .galeri img{
        width: 30%;
        margin-right: 1%;
        float: left;
        margin-bottom: 5px;
    }
    h2{
        font-size: 2em;
        font-weight: 100;
        text-transform: capitalize;
    }
    .bottom-content{
        display: block;
        float: left;
        width: 100%;
        text-align: center;
    }
    .bottom-content .btn-blue{
        display: inline-block;
        float: unset;
    }
    .informasi{
        /* width: 90%; */
    }
    .informasi span{
        display: block;
        font-weight: 100;
    }
    .informasi input, .informasi textarea{
        display: block;
        width: 100%;
        border: 1px solid gainsboro;
        padding: 8px;
        margin: 5px 0px;
        border-radius: 5px;
        background-color: #FAFAFA;
        color: #616161;
        outline: none;
        box-sizing: border-box;
    }
    .full-width .informasi button, .full-width .btn-blue{
        display: inline-block;
        float: unset;
        width: 110px;
        padding: 8px 0px;
    }
    </style>
<div class="head-content full-width">
        <div class="img-radius">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
        </div>
        <div class="full-width">
            <label class="btn-blue">
                Ganti Foto
                <input id="file_pic" name="pic" type="file" style="display: none;">
            </label>
            <a class="btn-blue" href="<?php echo base_url().'member/logout'?>" style="background-color: #EC407A;
                border: none;">Logout</a>
        </div>
    </div>
    <div class="head-content container">
        <div class="action-menu">
            <!-- <h2>Menu</h2> -->
            <div class="col-1">
                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
                <a href="">Pemain</a>
            </div>
            <div class="col-1">
                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
                <a href="">Klub</a>
            </div>
            <div class="col-1">
                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
                <a href="">Ofisial</a>
            </div>
            <div class="col-1">
                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
                <a href="">Eyemarket</a>
            </div>
            <div class="col-1">
                <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
                <a href="">Eyeme</a>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- <h2>informasi akun</h2> -->
        <div class="informasi">
            <form action="">
                <span>Nama Depan</span>
                <input type="text" name="" id="">
                <span>Nama Belakang</span>
                <input type="text" name="" id="">
                <span>Alamat</span>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <span>Tentang Saya</span>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <button type="submit">Ubah Profile</button>
            </form>
        </div>
    </div>
    <div class="container">
        <!-- <h2>Galeri</h2> -->
        <div class="galeri">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" srcset="">
           
        </div>
        <div class="bottom-content">
            <label class="btn-blue">
                Tambah Foto
                <input id="file_pic" name="pic" type="file" style="display: none;">
            </label>
            <label class="btn-blue">
                Tambah video
                <input id="file_pic" name="pic" type="file" style="display: none;">
            </label>
        </div>