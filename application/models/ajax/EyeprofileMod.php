<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EyeprofileMod extends CI_Model {

    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
	parent::__construct();
    }
    function __eyeprofile(){

		$query = array('page'  => 1, 'limit' => 5);
		$data['profile']  = $this->excurl->remoteCall($this->__xurl().'profile',$this->__xkey(),$query);
		
		$html = $this->load->view($this->__theme().'home/ajax/eyeprofile',$data,true);
		$data =array('xClass'=>'reqprofile','xHtml'=> $html);
		$this->tools->__flashMessage($data);

	}

}
