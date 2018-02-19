<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    private function __theme() { return $this->config->item('themes'); }
    
    function __construct()
    {
	parent::__construct();
	$this->load->model('ajax/HomeMod');
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
		$this->HomeMod->$fn();
	    }
	} else {

		
	    $data['content']   = 'home/home';
	    $data['title']     = $this->config->item('meta_title');

		$data['kanal']     = 'home';

	    $data['meta_desc'] = $this->config->item('meta_desc');
	    $data['meta_keyword'] = $this->config->item('meta_keyword');
	    
	    $this->load->view($this->__theme().'template', $data);
	}
    }
	
	function tentang_kami()
    {
	    $data['content']   = 'home/tentang_kami';
	    $data['title']     = $this->config->item('meta_title');

		$data['kanal'] = 'home';

	    $data['meta_desc'] = $this->config->item('meta_desc');
	    $data['meta_keyword'] = $this->config->item('meta_keyword');
	    
	    $this->load->view($this->__theme().'template', $data);
    }
	
	function tim_eyesoccer()
    {
	    $data['content']   = 'home/tim_eyesoccer';
	    $data['title']     = $this->config->item('meta_title');

		$data['kanal'] = 'home';

	    $data['meta_desc'] = $this->config->item('meta_desc');
	    $data['meta_keyword'] = $this->config->item('meta_keyword');
	    
	    $this->load->view($this->__theme().'template', $data);
    }
	
	function pedoman_media_siber()
    {
	    $data['content']   = 'home/pedoman_media_siber';
	    $data['title']     = $this->config->item('meta_title');

		$data['kanal'] = 'home';

	    $data['meta_desc'] = $this->config->item('meta_desc');
	    $data['meta_keyword'] = $this->config->item('meta_keyword');
	    
	    $this->load->view($this->__theme().'template', $data);
    }
	
	function panduan_komunitas()
    {
	    $data['content']   = 'home/panduan_komunitas';
	    $data['title']     = $this->config->item('meta_title');

		$data['kanal'] = 'home';

	    $data['meta_desc'] = $this->config->item('meta_desc');
	    $data['meta_keyword'] = $this->config->item('meta_keyword');
	    
	    $this->load->view($this->__theme().'template', $data);
    }
	
	function kontak()
    {
	    $data['content']   = 'home/kontak';
	    $data['title']     = $this->config->item('meta_title');

		$data['kanal'] = 'home';

	    $data['meta_desc'] = $this->config->item('meta_desc');
	    $data['meta_keyword'] = $this->config->item('meta_keyword');
	    
	    $this->load->view($this->__theme().'template', $data);
    }
	
	function karir()
    {
	    $data['content']   = 'home/karir';
	    $data['title']     = $this->config->item('meta_title');

		$data['kanal'] = 'home';

	    $data['meta_desc'] = $this->config->item('meta_desc');
	    $data['meta_keyword'] = $this->config->item('meta_keyword');
	    
	    $this->load->view($this->__theme().'template', $data);
    }

}
