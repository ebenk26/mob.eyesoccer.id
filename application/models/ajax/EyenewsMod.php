<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EyenewsMod extends CI_Model {

    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
	parent::__construct();
    }
    
    function __trending()
    {
	$query = array('page' => 1, 'limit' => 5, 'sortby' => 'newest');
	$data['news'] = $this->excurl->remoteCall($this->__xurl().'news', $this->__xkey(), $query);
	
	$html = $this->load->view($this->__theme().'eyenews/ajax/trending', $data, true);
	
	$data = array('xClass' => 'reqtrend', 'xHtml' => $html);
	$this->tools->__flashMessage($data);
    }
    
    function __onelist()
    {
	$query = array('page' => 1, 'limit' => 1, 'sortby' => 'newest');
	$data['list'] = $this->excurl->remoteCall($this->__xurl().'news', $this->__xkey(), $query);
	
	$html = $this->load->view($this->__theme().'eyenews/ajax/onelist', $data, true);
	
	$data = array('xClass' => 'reqonelist', 'xHtml' => $html);
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
	
	$html = $this->load->view($this->__theme().'eyenews/ajax/tabnews', $data, true);
	
	$data = array('xClass' => 'reqtabnews', 'xHtml' => $html);
	$this->tools->__flashMessage($data);
    }

}
