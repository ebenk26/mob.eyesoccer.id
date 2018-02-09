<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EyemeMod extends CI_Model {

    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
	parent::__construct();
    }
    
    function __melist()
    {
    	$query = array('page'=> '1', 'limit'=> '5', 'sortby'=> 'last_online');
    	$data['eyeme'] = $this->excurl->remoteCall($this->__xurl().'me-images', $this->__xkey(), $query);
	
    	$html = $this->load->view($this->__theme().'eyeme/ajax/me_list', $data, true);
	
    	$data = array('xClass' => 'reqme', 'xHtml' => $html);
    	$this->tools->__flashMessage($data);
    }
    function __imgfollowedlist(){
        
        $query = array('page' => '1', 'limit' => '10','username'=> $this->session->username,'following'=> true);
        $data['imglist'] = $this->excurl->remoteCall($this->__xurl().'me-images',$this->__xkey(),$query);

        $html = $this->load->view($this->__theme().'eyeme/ajax/me_imgfollowedlist',$data,true);

        $data = array('xClass' => 'reqimgfollowedlist','xHtml' => $html);
        $this->tools->__flashMessage($data);

    }
    function __explorelist($page='1'){

        $query = array('page' => $page,'limit' => '17', 'sortby'=> 'last_online');
        $data['explore'] = $this->excurl->remoteCall($this->__xurl().'me-images',$this->__xkey(),$query);
        $html            = $this->load->view($this->__theme().'eyeme/ajax/me_explorelist',$data,true);
        $data            = array('xClass' => 'reqexplorelist','xHtml' => $html);
        $this->tools->__flashMessage($data);
    }
   
}
