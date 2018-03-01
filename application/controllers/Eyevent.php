<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eyevent extends CI_Controller {

    private function __theme() { return $this->config->item('themes'); }
    
    function __construct()
    {
		parent::__construct();
		$this->load->model('ajax/EyeventMod');
    }

    function index()
    {
		if($_POST)
		{
			$this->load->view($this->__theme().'function');
			$fn = $_POST['fn'];

			$data = [];
			if(function_exists($fn))
			{
				$fn();
			} else {
				$fn = "__".$fn;
				$this->EyeventMod->$fn();
			}
		} else {
		    $data['kanal'] = 'eyevent';
		    $data['content'] = 'eyevent/home';
		    
		    $data['title'] = $this->config->item('meta_title');
		    $data['meta_desc'] = $this->config->item('meta_desc');
		    $data['meta_keyword'] = $this->config->item('meta_keyword');
		    
		    $this->load->view($this->__theme().'template', $data);
		}
    }

    function detail($slug = '')
    {
		$data['slug'] = $slug;
		$data['kanal'] = 'eyevent';
	    $data['content'] = 'eyevent/detail';
	    
	    $data['title'] = $this->config->item('meta_title');
	    $data['meta_desc'] = $this->config->item('meta_desc');
	    $data['meta_keyword'] = $this->config->item('meta_keyword');
	    
	    $this->load->view($this->__theme().'template', $data);
    }

    function jadwal_hasil()
    {
		$data['kanal'] = 'eyevent-jadwal';
	    $data['content'] = 'eyevent/jadwal';
	    
	    $data['title'] = $this->config->item('meta_title');
	    $data['meta_desc'] = $this->config->item('meta_desc');
	    $data['meta_keyword'] = $this->config->item('meta_keyword');
	    
	    $this->load->view($this->__theme().'template', $data);
    }

    function get_jadwal($tanggal='')
    {
    	$data['jdwl'] = $this->EyeventMod->get_all_jadwal($tanggal,null);
    	
    	$body = $this->load->view($this->__theme().'eyevent/ajax/body-schedule', $data,TRUE);
    	
    	echo json_encode(array(	'status' 	=> '1',
    							'body' 		=> $body,
    						));
    }

}
