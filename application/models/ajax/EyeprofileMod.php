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
    
    function __eyeprofile()
    {
	$query = array('page'  => 1, 'limit' => 5);
	$data['profile'] = $this->excurl->remoteCall($this->__xurl().'profile', $this->__xkey(), $query);
	
	$html = $this->load->view($this->__theme().'home/ajax/eyeprofile', $data, true);
	
	$data =array('xClass'=>'reqprofile','xHtml'=> $html);
	$this->tools->__flashMessage($data);
    }

    function __klublist(){
		$competition = urldecode($this->input->post('slug'));
		if($competition == 'Non Liga'){
			$competition = 'SSB / Akademi Sepakbola';
		}
        $query = array('page'  => 1, 'limit' => 8, 'league' => '', 'competition' => $competition);
		$data['klublist'] = $this->excurl->remoteCall($this->__xurl().'profile-club', $this->__xkey(), $query);
		$html = $this->load->view($this->__theme().'eyeprofile/ajax/klublist', $data, true);
	
		$data =array('xClass'=>'reqklublist','xHtml'=> $html);
		$this->tools->__flashMessage($data);
    }
	
	function __competition(){
		$competition = $this->input->post('slug');
        $query = array('page'  => 1, 'limit' => 8);
		$data['competitionlist'] = $this->excurl->remoteCall($this->__xurl().'competition', $this->__xkey(), $query);
		$html = $this->load->view($this->__theme().'eyeprofile/ajax/competitionlist', $data, true);
	
		$data =array('xClass'=>'reqcompetition','xHtml'=> $html);
		$this->tools->__flashMessage($data);
    }
}
