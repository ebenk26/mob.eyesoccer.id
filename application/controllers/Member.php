<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    private function __theme() { return $this->config->item('themes'); }
    
    function __construct()
    {
	parent::__construct();
	$this->load->model('ajax/MemberMod');
	#$this->session->username= 'sofyanwaldy';
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
		$this->MemberMod->$fn();
	    }
	} else {

		$content = ($this->session->username ? 'member/home': 'member/login');
	    $data['content']   = $content;
	    $data['title']     = $this->config->item('meta_title');

		$data['kanal'] = 'member';

	    $data['meta_desc'] = $this->config->item('meta_desc');
	    $data['meta_keyword'] = $this->config->item('meta_keyword');
	    
	    $this->load->view($this->__theme().'template', $data);
	}
    }
    function login(){
    	$email = $this->input->post('email');
    	$pass  = $this->input->post('password');
    	$arr = array('email'=> $email,'xHtml'=> $pass);
    	echo json_encode($arr);
    }
    function sess(){
    	p($_SESSION);
    	session_destroy();
    }
    #function de

}