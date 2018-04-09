 <div class="container nav-dashboard">
        <div class="nav-dash">
            <ul>
                <a href="<?php echo base_url()?>member"><li>ALL</li></a>
                <a href="<?php echo base_url()?>member/player"><li>Player</li></a>
                <a href="<?php echo base_url()?>member/eyeme"><li class="active">Eyeme</li></a>
                <a href="<?php echo base_url()?>member/eyetube"><li>Eyetube</li></a>
                <a href="<?php echo base_url()?>member/tulisan_kamu"><li>Tulisan Kamu</li></a>
                <a href="<?php echo base_url()?>member/analytics"><li>Analytics</li></a>
            </ul>
        </div>
    </div>
    <div class="container wlc">
        <div class="bg-eyeme">
            <img src="http://localhost/mob.eyesoccer.id/assets/themes/v1/img/a.jpg" alt="Background Image">
            <div class="close-wlcm">
                <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="pp-eyeme">
                <div class="close-wlcm pp">
                    <i class="fas fa-pencil-alt"></i>
                </div>
                <div class="pp-eyeme-img">
                    <img src="http://localhost/mob.eyesoccer.id/assets/themes/v1/img/d.jpg" alt="Profil Picture">
                </div>
            </div>    
        </div>       
    </div>
    <div class="container">
        <div class="form-profil-dash" id="form-player">
            <span>Nama</span>
            <input type="text" placeholder="data player">
            <span>Username</span>
            <input type="text" placeholder="data player">
            <span>Status</span>
            <input type="text" placeholder="data player">
        </div>
    </div>
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