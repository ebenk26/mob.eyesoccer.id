<div class="container nav-dashboard">
        <div class="nav-dash">
            <ul>
                <a href="<?php echo base_url()?>member"><li>ALL</li></a>
                <a href="<?php echo base_url()?>member/player"><li>Player</li></a>
                <a href="<?php echo base_url()?>member/eyeme"><li>Eyeme</li></a>
                <a href="<?php echo base_url()?>member/eyetube"><li>Eyetube</li></a>
                <a href="<?php echo base_url()?>member/tulisan_kamu"><li>Tulisan Kamu</li></a>
                <a href="<?php echo base_url()?>member/analytics"><li class="active">Analytics</li></a>
            </ul>
        </div>
    </div>
    <div class="menu-dashboard bg243">
        <div class="container tx-c graph">
            <div class="menu-analytic">
                <span class="active">revenue</span>
                <span>statistic</span>
                <span>Activity</span>
            </div>
        </div>
        <div class="container graph">
            <div class="tx-c graphic-anal">
                <div class="d-w-m">
                    <span class="active">1D</span>
                    <span>1W</span>
                    <span>1M</span>
                    <span>6M</span>
                </div>
                <div class="">
        
                </div>
            </div>
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