<div class="container nav-dashboard">
        <div class="nav-dash">
            <ul>
                <a href="<?php echo base_url()?>member"><li>ALL</li></a>
                <a href="<?php echo base_url()?>member/player"><li>Player</li></a>
                <a href="<?php echo base_url()?>member/eyeme"><li>Eyeme</li></a>
                <a href="<?php echo base_url()?>member/eyetube"><li>Eyetube</li></a>
                <a href="<?php echo base_url()?>member/tulisan_kamu"><li class="active">Tulisan Kamu</li></a>
                <a href="<?php echo base_url()?>member/analytics"><li>Analytics</li></a>
            </ul>
        </div>
    </div>
    <!-- <div class="menu-dashboard"> -->
        <div class="container">
            <div class="tulisankamu">
                <span>Title</span>
                <input type="text">
                <span>Upload Foto Peristiwa</span>
                <div class="up-foto">
                    <i class="fas fa-plus-circle"></i>
                </div>
                <span>Kredit Foto</span>
                <input type="text">
                <span>Dipublikasikan Oleh</span>
                <input type="text">
                <div class="edit-foto">
                    <div class="ed-foto">
                        <img src="http://localhost/mob.eyesoccer.id/assets/themes/v1/img/d.jpg" alt="">
                    </div>
                    <a href=""><span>Edit Foto Penulis</span></a>
                </div>
                <textarea name="" id=""></textarea>
            </div>
            <div class="container tx-c simpan" style="background-color: unset;">
                <button class="klik-dsn">SUBMIT TO VERIFICATION</button>
            </div>
        </div>
    <!-- </div> -->
    <script>
        function myFunction() {
            var x = document.getElementById("menuDashboard");
            if (x.style.display == "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>