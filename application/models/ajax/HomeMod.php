<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeMod extends CI_Model {

    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
	parent::__construct();
    }
    
    function __trending()
    {
	$query = array('page' => 1, 'limit' => 4, 'sortby' => 'mostview');
	$data['news'] = $this->excurl->remoteCall($this->__xurl().'news', $this->__xkey(), $query);
	$data['video'] = $this->excurl->remoteCall($this->__xurl().'video', $this->__xkey(), $query);
	
	$html = $this->load->view($this->__theme().'home/ajax/trending', $data, true);
	
	$data = array('xClass' => 'reqtrend', 'xHtml' => $html);
	$this->tools->__flashMessage($data);
    }
    
    function __vidtube()
    {
	$query = array('page' => 1, 'limit' => 4);
	$data['video'] = $this->excurl->remoteCall($this->__xurl().'video', $this->__xkey(), $query);
	
	$html = $this->load->view($this->__theme().'home/ajax/vidtube', $data, true);
	
	$data = array('xClass' => 'reqtube', 'xHtml' => $html);
	$this->tools->__flashMessage($data);
    }
    
    function __tabnews()
    {
	$query = array('page' => 1, 'limit' => 3, 'description' => 'true', 'sortby' => 'mostview');
	$data['popular'] = $this->excurl->remoteCall($this->__xurl().'news', $this->__xkey(), $query);
	
	$query = array('page' => 1, 'limit' => 3, 'description' => 'true', 'recommended' => true);
	$data['recommended'] = $this->excurl->remoteCall($this->__xurl().'news', $this->__xkey(), $query);
	
	$query = array('page' => 1, 'limit' => 3, 'description' => 'true', 'youngage' => true);
	$data['youngage'] = $this->excurl->remoteCall($this->__xurl().'news', $this->__xkey(), $query);
	
	$html = $this->load->view($this->__theme().'home/ajax/tabnews', $data, true);
	
	$data = array('xClass' => 'reqtabnews', 'xHtml' => $html);
	$this->tools->__flashMessage($data);
    }

    function __match_schedule()
    {
    	$data["kemarin"] 			= get_date("-1");
    	$data["hari_ini"] 			= get_date("+0");
    	$data["besok"] 				= get_date("+1");

    	// ===== hari ini
    	$query 	= array('page' => 1, 'limit' => 5, 'sortby' => 'mostview', 'startdate' => $data["hari_ini"]["tanggalnya"], 'enddate' => $data["hari_ini"]["tanggalnya"]);
    	$data['match_today'] 	=  $this->excurl->remoteCall($this->__xurl().'event-match', $this->__xkey(), $query);

    	// ===== besok
    	$query 	= array('page' => 1, 'limit' => 5, 'sortby' => 'mostview', 'startdate' => $data["besok"]["tanggalnya"], 'enddate' => $data["besok"]["tanggalnya"]);
    	$data['match_tomorrow'] 	=  $this->excurl->remoteCall($this->__xurl().'event-match', $this->__xkey(), $query);

    	
    	$html = $this->load->view($this->__theme().'home/ajax/match_schedule', $data, true);
    	
    	$data = array('xClass' => 'reqmatch', 'xHtml' => $html);
    	$this->tools->__flashMessage($data);

    }

}
