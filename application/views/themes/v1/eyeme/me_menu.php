    <!-- MENU BOTTOM EYEME -->
    <div class="menu-eme">
        <?php 
        //show display picture if user has been login 
        $DPIC['src'] = ($this->session->member ? urltoimgstore($this->session->member['url_pic']) : DPIC);
        $DPIC['alt'] = ($this->session->member ? $this->session->member['username'] : 'photo profile');

        $list  = array(
                    anchor(MEHOME,img(array('src' => MEMENU.'home.svg','alt'=> 'home'))),
                    anchor(MEEXPLORE,img(array('src' => MEMENU.'search.svg','alt'=> 'explore'))),
                    anchor('',img(array('src' => MEMENU.'add-post.svg','alt' => 'upload')),array('class'=> 'upl')),
                    anchor(MENOTIF,img(array('src' => MEMENU.'notification.svg','alt' => 'Notification'))),
                    anchor(MEPROFILE.$this->session->member['username'],img($DPIC))
                );

        echo ul($list)?>
       
    </div>