<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eyeprofile extends CI_Controller {

    private function __theme() { return $this->config->item('themes'); }
    
    function __construct()
    {
	parent::__construct();
	$this->load->model('ajax/EyeprofileMod');
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
		$this->EyeprofileMod->$fn();
	    }
	} else {
		$data['kanal'] = 'eyeprofile';
	    $data['content']      = 'eyeprofile/home';
	    
	    $data['title']        = $this->config->item('meta_title');
	    $data['meta_desc']    = $this->config->item('meta_desc');
	    $data['meta_keyword'] = $this->config->item('meta_keyword');
	    
	    $this->load->view($this->__theme().'template', $data);
	}
    }

}
