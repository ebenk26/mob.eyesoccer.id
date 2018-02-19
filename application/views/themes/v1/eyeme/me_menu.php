    <!-- MENU BOTTOM EYEME -->
    <div class="menu-eme">
        <?php 
        $list  = array(
                    anchor(MEHOME,img(array('src' => MEMENU.'home.svg','alt'=> 'home'))),
                    anchor(MEEXPLORE,img(array('src' => MEMENU.'search.svg','alt'=> 'explore'))),
                    anchor(MEUPLOAD,img(array('src' => MEMENU.'add-post.svg','alt' => 'upload'))),
                    anchor(MENOTIF,img(array('src' => MEMENU.'notification.svg','alt' => 'Notification'))),
                    anchor(MEPROFILE.$this->session->username,img(array('src' => DPIC, 'alt' => 'photo profile')))
                );

        echo ul($list)?>
       
    </div>